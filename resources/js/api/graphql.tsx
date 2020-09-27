import {
  ApolloClient,
  InMemoryCache,
  gql,
  NormalizedCacheObject,
  ApolloQueryResult,
  createHttpLink,
  DefaultOptions
} from "@apollo/client";
import { setContext } from "@apollo/client/link/context";

const token = localStorage.getItem("token");

const cache = new InMemoryCache({
  typePolicies: {
    Agenda: {
      fields: {
        tasks: {
          merge(existing = [], incoming: any[]) {
            return [...existing, ...incoming];
          }
        }
      }
    }
  }
});
const httpLink = createHttpLink({
  uri: "/graphql"
});
const authLink = setContext((_, { headers }) => {
  return {
    headers: {
      ...headers,
      authorization: token ? `Bearer ${token}` : ""
    }
  };
});
export const client: ApolloClient<NormalizedCacheObject> = token
  ? new ApolloClient({
      link: authLink.concat(httpLink),
      uri: "/graphql",
      cache: cache
    })
  : new ApolloClient({
      uri: "/graphql",
      cache: cache
    });
export const GET_ITEMS = gql`
    query Items($after: String, $first: Int = ${20}) {
        items(first: $first, after: $after) {
            pageInfo {
                startCursor
                endCursor
                hasNextPage
            }
            edges {
                node {
                    author {
                        username
                    }
                    id
                    item_name
                    description
                    price
                    type
                    counter
                    view
                    minecraft_item_shorthand
                }
            }
        }
    }
`;
export const GET_ITEM = gql`
  query Item($item_id: ID) {
    item(id: $item_id) {
      author {
        username
      }
      id
      item_name
      description
      price
      type
      counter
      view
      minecraft_item_shorthand
      review {
        author {
          username
        }
        score
        content
        caption
        created_at
        updated_at
      }
    }
  }
`;
export const GET_POSTS = gql`
  query Posts($after: String) {
    posts(first: 10, after: $after) {
      pageInfo {
        startCursor
        endCursor
        hasNextPage
      }
      edges {
        node {
          id
          author {
            username
          }
          content
          caption
          comments {
            author {
              username
            }
            content
          }
          commentsCount
          created_at
          updated_at
        }
      }
      __typename
    }
  }
`;

export const GET_SYSTEMSTATUS = gql`
  query {
    SPIGOTStatus {
      ping
      online
      exception
      updated_at
    }
    MYSQLStatus {
      ping
      online
      exception
      updated_at
    }
    REDISStatus {
      ping
      online
      exception
      updated_at
    }
  }
`;
export const GET_SEARCH = gql`
  query Search($search: String!) {
    search(search: $search) {
      name
      action
      img
      type
      data
    }
  }
`;
export const GET_SYSTEMACTIVITYLOGS = gql`
  query {
    systemactivitylogs(first: 10) {
      edges {
        node {
          type
          online
          ping
          data
          exception
          updated_at
        }
      }
    }
  }
`;
export async function addUserCart(amount: number, item_id: number) {
  return client.mutate({
    mutation: gql`
            mutation {
                addUserCart( amount: ${amount}, item_id: ${item_id}) {
                item_id
                amount
                created_at
                updated_at
                }
            }
        `
  });
}
export async function sendMessage(to_id: number, message: string) {
  return client.mutate({
    mutation: gql`
            mutation {
                createChatMessage( to_id: ${to_id}, message: "${message}") {
                    id
                }
            }
        `
  });
}
export const GET_ME = gql`
  query {
    me {
      id
      username
      email
      friends {
        friend {
          id
          username
        }
      }
      created_at
      updated_at
    }
  }
`;
export async function meCart(getItemProperty?: boolean) {
  return getItemProperty
    ? client.query({
        query: gql`
          query {
            me {
              usercart {
                amount
                item {
                  item_name
                  price
                  minecraft_item_shorthand
                }
                item_id
                created_at
                updated_at
              }
            }
          }
        `
      })
    : client.query({
        query: gql`
          query {
            me {
              usercart {
                amount
                item_id
                created_at
                updated_at
              }
            }
          }
        `
      });
}
interface Login {
  username: string;
  password: string;
}
export async function login(credentials: Login) {
  return client.mutate({
    mutation: gql`
            mutation {
                login(username: "${credentials.username}"   password: "${credentials.password}") {
                    success
                    exception
                    token
                    user {
                        id
                        username
                        email
                        created_at
                        updated_at
                    }
                }
            }
        `
  });
}
export async function register(
  username: string,
  password: string,
  email: string
) {
  return client.mutate({
    mutation: gql`
            mutation {
                register(
                    username: "${username}"
                    password: "${password}"
                    email: "${email}"
                ) {
                    success
                    exception
                    token
                    user {
                        id
                        username
                        email
                        created_at
                        updated_at
                    }
                }
            }
        `
  });
}
export async function chatquery(from: number, to: number) {
  return client.query({
    query: gql`
            query {
                chatquery(from: ${from}, to: ${to}) {
                    to {
                        username
                    }
                    from {
                        username
                    }
                    message
                }
            }
        `
  });
}

import {
    ApolloClient,
    InMemoryCache,
    gql,
    NormalizedCacheObject,
    ApolloQueryResult,
    createHttpLink
} from "@apollo/client";
import { setContext } from "@apollo/client/link/context";
import { Item } from "../type/type";
const token = localStorage.getItem("token");
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
const client: ApolloClient<NormalizedCacheObject> = token ? new ApolloClient({
    link: authLink.concat(httpLink),
    uri: "/graphql",
    cache: new InMemoryCache()
}) : new ApolloClient({
    uri: "/graphql",
    cache: new InMemoryCache()
});
export async function items(page?: number): Promise<ApolloQueryResult<any>> {
    return client.query({
        query: gql`
            query {
                items(page: ${page ? page : 1}) {
                    data {
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
                    paginatorInfo {
                        count
                        total
                        currentPage
                        hasMorePages
                        lastItem
                        lastPage
                        perPage
                        firstItem
                    }
                }
            }
        `
    });
}
export async function item(id: number): Promise<ApolloQueryResult<any>> {
    return client.query({
        query: gql`
            query {
                item(id: ${id}) {
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
        `
    });
}
export async function posts(): Promise<ApolloQueryResult<any>> {
    return client.query({
        query: gql`
            query {
                posts {
                    data {
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
                        reactions {
                            author {
                                username
                            }
                            content
                        }
                        created_at
                        updated_at
                    }
                }
            }
        `
    });
}

export async function systemstatus(): Promise<ApolloQueryResult<any>> {
    return client.query({
        query: gql`
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
        `
    });
}

export async function addUserCart(
    user_id: number,
    amount: number,
    item_id: number
) {
    return client.mutate({
        mutation: gql`
            mutation {
                addUserCart(user_id: ${user_id}, amount: ${amount}, item_id: ${item_id}) {
                created_at
                updated_at
                }
            }
        `
    });
}
export async function me() {
    return client.query({
        query: gql`
            query {
                me {
                    id
                    username
                    email
                    created_at
                    updated_at
                }
            }
        `
    });
    // return client.mutate({
    // //     mutation: gql`
    // //         mutation {
    // //             addUserCart(input: {user_id: ${user_id}, amount: ${amount}, item_id: ${item_id}}) {
    // //                 created_at
    // //                 updated_at
    // //             }
    // //         }
    // //     `
    // // });
}

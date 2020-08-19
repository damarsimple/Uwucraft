import {
    ApolloClient,
    InMemoryCache,
    gql,
    NormalizedCacheObject,
    ApolloQueryResult
} from "@apollo/client";

const client: ApolloClient<NormalizedCacheObject> = new ApolloClient({
    uri: "http://localhost/graphql",
    cache: new InMemoryCache()
});

export interface Item {
    id: number;
    author: Author;
    item_name: string;
    description: string;
    price: number;
    type: string;
    counter: number;
    minecraft_item_shorthand: string;
}

export interface Author {
    username: string;
}
export type Posts = Post[];
export type Items = Item[];
export interface PaginatorInfo {
    count?: number;
    currentPage?: number;
    firstItem?: number;
    hasMorePages?: boolean;
    lastItem?: number;
    lastPage?: number;
    perPage?: number;
    total?: number;
}
export interface Post {
    author: Author;
    caption: string;
    content: string;
    comments: Array<Comment>;
    reactions: Array<Reaction>;
    commentsCount: number;
    reactionsCount: number;
    created_at: string;
    updated_at: string;
}
export interface Comment {
    author: Author;
    post: Post;
    content: string;
}
export interface Reaction {
    author: Author;
    post: Post;
    content: string;
}
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
                    item_name
                    description
                    price
                    type
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

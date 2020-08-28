import { createInterface } from "readline";

export interface Item {
    id: number;
    author: Author;
    item_name: string;
    description: string;
    price: number;
    type: string;
    counter: number;
    view: number;
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
export interface SPIGOTStatus {
    ping?: number;
    online?: boolean;
    exception?: string | null;
    updated_at?: string;
}
export interface MYSQLStatus {
    ping?: number;
    online?: boolean;
    exception?: string | null;
    updated_at?: string;
}
export interface REDISStatus {
    ping?: number;
    online?: boolean;
    exception?: string | null;
    updated_at?: string;
}

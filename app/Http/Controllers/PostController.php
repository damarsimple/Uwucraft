<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use App\Reaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::with('author', 'comments.author', 'reactions.author')->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): object
    {
        $type = $request->input('type');
        switch ($type) {
            case 'post':
                $data = [
                    'author_id' => Auth::user()->id,
                    'content' => $request->input('content'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
                $post = Post::create($data);
                unset($data['author_id']);
                $data['id'] = $post->id;
                $data['type'] = $type;
                $data['author'] = $post->author;
                $data['comments'] = $post->comments;
                $data['reactions'] = $post->reactions;
                broadcast(new \App\Events\PostEvent($data));
                return $post;
                break;
            case 'comment':
                $data =            [
                    'author_id' => Auth::user()->id,
                    'post_id' => $request->input('id'),
                    'content' => $request->input('content'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
                $post = Comment::create($data);
                $data['author'] = User::find(Auth::user()->id);
                $data['type'] = $type;
                broadcast(new \App\Events\PostEvent($data));
                return $post;
                break;
            case 'reaction':
                $data =            [
                    'author_id' => Auth::user()->id,
                    'post_id' => $request->input('id'),
                    'content' => $request->input('content'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
                $post = Reaction::create($data);
                $data['author'] = User::find(Auth::user()->id);
                $data['type'] = $type;
                broadcast(new \App\Events\PostEvent($data));
                return $post;
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): object
    {
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): void
    {
        $post = Post::find($id);
        $post->content = $request->input('content');
        $post->save;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): void
    {
        $post = Post::find($id);
        $post->delete();
    }
}

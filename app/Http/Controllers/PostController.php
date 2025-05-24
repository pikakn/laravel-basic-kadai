<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller {
    public function index() {
        $posted = DB::table('posts')->get();

        return view('posts.index', compact('posted'));
    }

    public function show($id) {
        $posted = Post::where('id', $id)->get();
        $posted = $posted[0];
        return view('posts.show', compact('posted'));
    }

    public function create() {
        return view('posts/create');
    }

    public function store(PostRequest $request) {
        # 導入に気づかず、バリデーションをRequestのほうに書いています　直す必要があれば直します
        $title = $request->title;
        $content = $request->content;
        Post::create([
            'title' => $title,
            'content' => $content
        ]);
        return redirect('/posts');
    }
}

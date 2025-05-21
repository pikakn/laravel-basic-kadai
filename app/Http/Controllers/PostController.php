<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
}

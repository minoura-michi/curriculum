<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostController extends Controller
{
    public function top()
    {
        return view('post');
    }

    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        //送られたデータがルールに沿ってるか判定
        $post = new Post;
        $form = $request->all();
        //フォームから送られてきた値を＄フォームに代入
        unset($form['_token']);
        //必要ないのでここで削除

        // データベースに保存
        $post->fill($form);
        $post->save();

        return redirect('/post/');
    }

    public function index()
    {
        $user = User::all();
        $post = Post::orderBy('created_at', 'desc')->get();

        return view('post',['posts' => $post, 'users' => $user]);
        // blade側では、postsの名前で扱うユーザーデータはusersで扱う
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        // bladeのpostのidと同じ
        //postテーブルのidを取ってきて、そのidを持っているレコードを１行だけ取ってくる
        $post->delete();
        //とってきたレコードを削除

        return redirect('/post/');
    }
}

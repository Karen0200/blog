<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Password;

class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|min:2',
            'email' => 'required|email:rfc,dns|max:100',
            'password' => [
                'required',
                'confirmed',
                'string',
                'min:8',
                'max:30'
            ],
            'address' => 'nullable|alpha_num'
        ],

        );

        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->address = $request->address;
        $post->save();
        return redirect('add-blog-post-form');
    }
}

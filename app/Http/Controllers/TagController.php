<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::get();
        return view('welcome',[
            'tags' => $tags 
        ]);
    }
}

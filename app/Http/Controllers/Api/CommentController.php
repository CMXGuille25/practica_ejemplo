<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class CommentController extends Controller
{
    public function index()
    {
        //return Comment::all();
        return CommentResource::collection(Comment::paginate(10));
    }

    public function crear()
    {
    return view('comentarios.crear');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function listArticles() {
        $articles = Article::all();

        return view('main', ['articles' => $articles]);
    }
}

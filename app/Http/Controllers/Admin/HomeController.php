<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $articles_count = Article::all()->count();

        return view('admin.home.index', ['articles_count' => $articles_count]);
    }
} 

<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $category = Categories::get();
        $categorySlug = request('category'); // Ambil parameter kategori dari URL

        // Query Artikel
        $data = Articles::when($categorySlug, function ($query, $categorySlug) {
                return $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->orderBy('id', 'DESC')
            ->get();

        return view('articles.index',compact('data','category'));
    }

    public function show($slug)
    {
        $data = Articles::where('slug',$slug)->first();
        $dataAll = Articles::where('slug','!=',$data->slug)->orderBy('id','DESC')->limit(5)->get();
        return view('articles.show',compact('data','dataAll'));
    }
}

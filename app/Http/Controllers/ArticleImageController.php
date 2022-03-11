<?php

namespace App\Http\Controllers;

use App\Models\ArticleImage;
use App\Http\Requests\StoreArticleImageRequest;
use App\Http\Requests\UpdateArticleImageRequest;

use App\Models\Article;
use App\Models\ArticleCategory;

use Illuminate\Http\Request;


class ArticleImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $articles = Article::all();
        $article_categories= ArticleCategory::all();
        $article_images = ArticleImage::all();
        return view('article_images.index',['article_images' => $article_images],['article_categories'=> $article_categories],['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_categories= ArticleCategory::all();
        $articles = Article::all();
        return view('article_images.create',['article_categories'=> $article_categories],['articles' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article_image = new ArticleImage;

        $article_image->alt = $request->article_image_alt;
        $article_image->src = $request->article_image_src;
        $article_image->width = $request->article_image_width;
        $article_image->height = $request->article_image_height;
        $article_image->class = $request->article_image_class;
        $article_image->article_id = $request->article_id;
        
        $article_image->save();

        return redirect()->route('article_image.index')->with('success_message', 'Article image added to database');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleImage $article_image)
    {
        $article_images = ArticleImage::all();
        return view('article_images.show', ['article_image'=> $article_image], ['article_images'=> $article_images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleImage $article_image)
    {
        
        $articles = Article::all();
        return view('article_images.edit',['article_image' => $article_image],['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleImageRequest  $request
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleImage $article_image)
    {

        $article_image->alt = $request->article_image_alt;
        $article_image->src = $request->article_image_src;
        $article_image->width = $request->article_image_width;
        $article_image->height = $request->article_image_height;
        $article_image->class = $request->article_image_class;
        $article_image->article_id = $request->article_id;
        
        $article_image->save();

        return redirect()->route('article_image.index')->with('success_message', 'Data of Article image updated at the database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleImage $article_image)
    {
        $article_image->delete();
        return redirect()->route('article_image.index');
    }
}

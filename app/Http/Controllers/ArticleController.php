<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleImage;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

use Illuminate\Http\Request;

class ArticleController extends Controller
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
        return view('articles.index',['articles' => $articles],['article_categories'=> $article_categories],['article_images' => $article_images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_categories= ArticleCategory::all();
        $article_images = ArticleImage::all();
        return view('articles.create',['article_categories'=> $article_categories],['article_images' => $article_images]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->article_title;
        $article->excerpt = $request->article_excerpt;
        $article->description = $request->article_description;
        $article->author = $request->article_author;
        $article->article_category_id = $request->article_category_id;
        
        $article->save();

        return redirect()->route('article.index')->with('success_message', 'Article added to database');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article'=> $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {   
        
    
        $article_categories= ArticleCategory::all();
        $article_images = ArticleImage::all();
        return view('articles.edit',['article' => $article],['article_categories' => $article_categories]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //pasiimu is lauku, ir irasau i duomenu baze

        $article->title = $request->article_title;
        $article->excerpt = $request->article_excerpt;
        $article->description = $request->article_description;
        $article->author = $request->article_author;
        $article->article_category_id = $request->article_category_id;

        $article->save();//UPDATE

        return redirect()->route('article.index')->with('success_message', 'Data of Article updated at the database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');
    }
}
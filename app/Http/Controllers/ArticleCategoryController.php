<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Models\Article;
use App\Models\ArticleImage;
use App\Http\Requests\StoreArticleCategoryRequest;
use App\Http\Requests\UpdateArticleCategoryRequest;

use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
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
     * Display a listing of the resource.
     *
     * //@return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_images= ArticleImage::all();
        $articles= Article::all();
        $article_categories= ArticleCategory::all();
        return view('article_categories.index',['article_categories'=>$article_categories],['article_images' => $article_images],['articles' => $articles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article_category= new ArticleCategory;

        $article_category->title = $request->article_category_title;
        $article_category->description = $request->article_category_description;

        $article_category->save();

        return redirect()->route('article_category.index')->with('success_message', 'ArticleCategory added to database');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $article_category
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $article_category)
    {
       
        //$article_images_count = 0;
        //$articles= $article_category->articleCategoryArticles; //0,1 ir daugiau
        //foreach ($articles as $article)
       // {
           // $article_images_count += count($article->articleArticleImages);
        //}
        // $article_images= ArticleImage::all();
        return view('article_categories.show', ['article_category' => $article_category]);//,'articles' => $articles, 'article_images_count'=> $article_images_count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $article_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $article_category)
    {
        return view('article_categories.edit', ['article_category' => $article_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleCategoryRequest  $request
     * @param  \App\Models\ArticleCategory $article_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $article_category)
    {
        $article_category->title = $request->article_category_title;
        $article_category->description = $request->article_category_description;

        $article_category->save();

        return redirect()->route('article_category.index')->with('success_message', 'Data of Article Category updated at the database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleCategory  $article_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $article_category)
    {
        $articles= $article_category->article_categoryArticles; //visus straipsnius, kurie priklauso kategorijai

       if(count($articles) != 0) {
            return redirect()->route('article_category.index')->with('error_message','Delete is not possible because Article Category has articles');
        }

        $article_category->delete();
         return redirect()->route('article_category.index')->with('success_message', 'Everything is fine');
    }
}


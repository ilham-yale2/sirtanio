<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Landing;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.article.index_article',[
            "page" => "Article",
            "article" => Article::all(),
            "home" => Landing::all()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.article.create_article',[
            "page" => "Article",
            "categories" => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $text = $request->text;

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['text'])));

        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
        ]);

        $validated['user_id'] = 1;
        $validated['title'] = $title;
        $validated['text'] = $text;
        // $imgname = time().'.'.$request->file('image')->getClientOriginalExtension();
        // $img_path = 'article_image/'.$imgname;
        // Storage::put($img_path, $request->file('image')->encode());
        $validated['image'] = $request->file('image')->store('article_image', ['disk' => 'public']);

        $article = Article::create($validated);
        $article::find($article->id)->update(['slug' => self::slugify(strip_tags($title . strval($article->id) ))]);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('dashboard.article.edit_article',[
            "page" => "Article",
            "article" => $article,
            "categories" => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $title = $request->title;
        $text = $request->text;

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['text'])));

        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'category_id' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
        ]);

        $validated['user_id'] = 1;
        $validated['title'] = $title;
        $validated['text'] = $text;
        $validated['slug'] = self::slugify(strip_tags($title . strval($article->id) ));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);
            $validated['image'] = $request->file('image')->store('article_image', ['disk' => 'public']);
        }

        Article::find($article->id)->update($validated);
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        Article::destroy($article->id);

        return redirect()->back();
    }
}

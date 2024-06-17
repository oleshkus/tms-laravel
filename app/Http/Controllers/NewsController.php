<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        // dd($news);
        return view('news.index', ['news' => $news]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:24',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required',
        ]);

        $news = News::create($validated);
        if (!$news->save()) {
            redirect()->back()->withErrors('error', 'Error!');
        }
//        $request->dump();
        return redirect()->route('news.index')->with('success', 'Новость успешно создана');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();

        return view('news.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news, string $id)
    {
        $news = News::findOrFail($id);
        $categoriesAll = Categories::all();
        return view('news.edit', [
            'news' => $news,
            'categoriesAll' => $categoriesAll
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news, string $id)
    {
        $news = News::findOrFail($id);
        $categories = Categories::all();
        $request->dump();
        $news->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'category' => $request->get('category'),
            'author' => $request->get('author'),
        ]);
        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}

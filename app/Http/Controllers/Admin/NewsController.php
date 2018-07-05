<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewNews;
use App\Http\Requests\UpdateNews;
use App\News;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('author')->orderBy('publication_date')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.crN eate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewNews $request
     *
     * @return RedirectResponse
     */
    public function store(NewNews $request)
    {

        $data = $request->validated();
        Storage::disk('public')->makeDirectory('news');
        $data['img_path'] = Storage::disk('public')->putFIle('news',  $request->file('news_img'));
        $data['slug'] = str_slug($data['title']);
        $news = new News($data);
        $author = User::find(auth()->id());
        $author->news()->save($news);
        return redirect()->route('admin.nieuws.show', $news->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $news->loadMissing('author');
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNews $request
     * @param  \App\News $news
     *
     * @return RedirectResponse
     */
    public function update(UpdateNews $request, News $news)
    {
        $data = $request->validated();
        if($request->hasFile('news_img')) {
            Storage::disk('public')->makeDirectory('news');
            $data['img_path'] = Storage::disk('public')->putFIle('news',  $request->file('news_img'));
        }
        $data['slug'] = str_slug($data['title']);
        $news->update($data);
        return redirect()->route('admin.nieuws.show', $news->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $title = $news->title;
        $news->delete();
        $message = new MessageBag();
        $message->add('deleted', "Nieuws: {$title} verwijderd");
        return redirect()->route('admin.nieuws.index')->with(compact('message'));
    }
}

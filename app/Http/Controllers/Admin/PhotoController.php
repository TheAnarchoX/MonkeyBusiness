<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewPhoto;
use App\Http\Requests\UpdatePhoto;
use App\Photo;
use App\User;
use function GuzzleHttp\Promise\queue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use function Sodium\add;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::with('author')->paginate(10);
        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewPhoto $request
     *
     * @return RedirectResponse
     */
    public function store(NewPhoto $request)
    {
        $data = $request->validated();
        Storage::disk('public')->makeDirectory('photos');
        $path = Storage::disk('public')->putFile('photo', $request->file('img'));
        $data['img'] = null;
        $data['img_path'] = $path;
        $data['slug'] = str_slug($data['title']);
        $photo = new Photo($data);
        $user = User::find(auth()->id());
        $user->photos()->save($photo);
        return redirect()->route('admin.fotos.show', $photo->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        $photo->loadMissing('author');
        return view('admin.photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $message = new MessageBag();
        $message->add('unavailable', 'Functie niet beschikbaar');
        return redirect()->route('admin.fotos.show', $photo->slug)->with(compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePhoto $request
     * @param  \App\Photo $photo
     *
     * @return void
     */
    public function update(UpdatePhoto $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $title = $photo->title;
        $photo->delete();
        $message = new MessageBag();
        $message->add('deleted', "Foto: {$title} verwijderd");
        return redirect()->route('admin.fotos.index')->with(compact('message'));
    }
}

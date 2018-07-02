<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NewActivity;
use App\Http\Requests\UpdateActivity;
use Illuminate\Support\MessageBag;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::with('author')->orderBy('event_date')->paginate('10');
        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewActivity $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewActivity  $request)
    {

        $data = $request->validated();
        Storage::disk('public')->makeDirectory('activities');
        $data['img_path'] = Storage::disk('public')->putFIle('activities',  $request->file('activity_img'));
        $data['slug'] = str_slug($data['title']);
        $activity = new Activity($data);
        $author = User::find(auth()->id());
        $author->activities()->save($activity);
        return redirect()->route('admin.activiteiten.show', $activity->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $activity->loadMissing('author');
        return view('admin.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('admin.activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateActivity $request
     * @param Activity       $activity
     *
     * @return RedirectResponse
     */
    public function update(UpdateActivity $request, Activity $activity)
    {
        $data = $request->validated();
        Storage::disk('public')->makeDirectory('activities');
        $data['img_path'] = Storage::disk('public')->putFIle('activities',  $request->file('activity_img'));
        $data['slug'] = str_slug($data['title']);
        $activity->update($data);
        return redirect()->route('admin.activiteiten.show', $activity->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Activity $activity)
    {
        $title = $activity->title;
        $activity->delete();
        $message = new MessageBag();
        $message->add('deleted', "Activiteit: {$title} verwijderd");
        return redirect()->route('admin.activiteiten.index')->with(compact('message'));
    }
}

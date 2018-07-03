<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewPartner;
use App\Http\Requests\UpdatePartner;
use App\Partner;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::with('author')->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewPartner $request
     *
     * @return RedirectResponse
     */
    public function store(NewPartner $request)
    {
        $data = $request->validated();
        $partner = new Partner($data);
        $user = User::find(auth()->id());
        $user->partners()->save($partner);
        return redirect()->route('admin.partners.show', $partner->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        $partner->loadMissing('author');
        return view('admin.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        $partner->loadMissing('author');
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePartner $request
     * @param  \App\Partner $partner
     *
     * @return RedirectResponse
     */
    public function update(UpdatePartner $request, Partner $partner)
    {
        $data = $request->validated();
        $partner->update($data);
        $partner->save();
        return redirect()->route('admin.partners.show', $partner->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner $partner
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Partner $partner)
    {
        $name = $partner->name;
        $partner->delete();
        $message = new MessageBag();
        $message->add('deleted', "Partner: {$name} verwijderd");
        return redirect()->route('admin.partners.index')->with(compact('message'));
    }
}

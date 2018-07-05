<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $messages = Message::paginate( 10 );
        return view( 'admin.messages.index', compact( 'messages' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message) {
        $message->is_read = 1;
        $message->save();

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message) {
        //
    }
}

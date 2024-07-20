<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\closetnum;
class closetnumController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'txt-closetnum' => 'required|string',
        ]);

        $closetnum = new closetnum();
        $closetnum->title = $request->input('txt-closetnum');
        $closetnum->save();

        return redirect()->route('admin');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\closetnum  $closetnum
     * @return \Illuminate\Http\Response
     */
    public function edit(closetnum $closetnum)
    {
        $closetnums = closetnum::all();
        return view('admin.editcloset', ['closetnum' => $closetnum, 'closetnums' => $closetnums ]);
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\closetnum  $closetnum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, closetnum $closetnum)
    {
        // Validate the request data
        $request->validate([
            'txt-closetnum' => 'required|string',
        ]);

        $closetnum->title = $request->input('txt-closetnum');
        $closetnum->save();

        return redirect()->route('editclosetnum',$closetnum->id);
    }
}

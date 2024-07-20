<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rangModel;

class RangModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rages = rangModel::all();
        return view('admin.index', ['rages' => $rages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'txt-range' => 'required|string',
        ]);

        $rangModel = new rangModel();
        $rangModel->title = $request->input('txt-range');
        $rangModel->save();

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rangModel  $rangModel
     * @return \Illuminate\Http\Response
     */
    public function show(rangModel $rangModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rangModel  $rangModel
     * @return \Illuminate\Http\Response
     */
    public function edit(rangModel $rangModel)
    {
        $rages = RangModel::all();
        return view('admin.editrage', ['rage' => $rangModel, 'rages' => $rages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rangModel  $rangModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rangModel $rangModel)
    {
        $request->validate([
            'txt-range' => 'required|string',
        ]);
    
        $rangModel->title = $request->input('txt-range');
        $rangModel->save();
    
        return redirect()->route('editrang',$rangModel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rangModel  $rangModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(rangModel $rangModel)
    {
        $rangModel->delete();
        return redirect()->route('admin');
    }
}

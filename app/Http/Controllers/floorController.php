<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\floorModel;

class floorController extends Controller
{   
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'txt-floor' => 'required|string',
        ]);

        $floorModel = new floorModel();
        $floorModel->title = $request->input('txt-floor');
        $floorModel->save();

        return redirect()->route('admin');
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\floorModel  $floorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(floorModel $floorModel)
    {
        $floorModels = floorModel::all();
        return view('admin.editfloor', ['floor' => $floorModel, 'floorModels' =>  $floorModels]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\floorModel  $floorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, floorModel  $floorModel)
    {
        $request->validate([
            'txt-floor' => 'required|string',
        ]);
    
        $floorModel->title = $request->input('txt-floor');
        $floorModel->save();
    
        return redirect()->route('editfloor',$floorModel->id);
    }
}

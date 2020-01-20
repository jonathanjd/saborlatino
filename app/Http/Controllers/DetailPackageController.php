<?php

namespace App\Http\Controllers;

use App\DetailPackage;
use Illuminate\Http\Request;

class DetailPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'feature' => 'required',
            'package_id' => 'required'
        ]);

        $detailPackage = new DetailPackage();
        $detailPackage->feature = $request->feature;
        $detailPackage->package_id = $request->package_id;
        $detailPackage->save();

        return response()->json([
            'msj' => 'success',
            'detailpackage' => $detailPackage
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $detailPackage = DetailPackage::find($id);
        $detailPackage->delete();

        return response()->json([
            'msj' => 'success'
        ], 200);
    }
}

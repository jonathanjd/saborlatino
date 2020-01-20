<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $package = Package::with('detailsPackage')->get();
        return response()->json([
            'msj' => 'success',
            'package' => $package
        ], 200);
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
            'name' => 'required',
        ]);

        $package = new Package();
        $package->name = $request->name;
        $package->amount = $request->amount;
        $package->premium = $request->premium;
        $package->active = $request->active;

        $package->save();
        return response()->json([
            'msj' => 'success',
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
        $this->validate($request, [
            'name' => 'required',
        ]);

        $package = Package::find($id);

        $package->name = $request->name;
        $package->amount = $request->amount;
        $package->note = $request->note;
        $package->premium = $request->premium;
        $package->active = $request->active;

        $package->save();
        return response()->json([
            'msj' => 'success',
        ], 200);
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
        $package = Package::find($id);
        $package->delete();
        return response()->json([
            'msj' => 'success'
        ]);
    }

    public function getWeb()
    {
        # code...
        $package = Package::with('detailsPackage')->where('active', 1)->get();
        return response()->json([
            'msj' => 'success',
            'package' => $package
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $review = Review::all();
        return response()->json([
            'msj' => 'success',
            'review' => $review
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
            'description' => 'required',
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->description = $request->description;
        $review->active = $request->active;

        if ($review->save()) {
            # code...
            return response()->json(['msj' => 'success'], 200);
        } else {
            return response()->json(['msj' => 'fails'], 200);
        }
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
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $review = Review::find($id);

        if ($review) {
            # code...

            $review->name = $request->name;
            $review->description = $request->description;
            $review->active = $request->active;

            if ($review->save()) {
                # code...
                return response()->json([
                    'msj' => 'success',
                    'review' => $review,
                ], 200);
            } else {
                # code...
                return response()->json(['msj' => 'fails'], 200);
            }
        } else {
            return response()->json(['msj' => 'fails'], 200);
        }

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
    }
}

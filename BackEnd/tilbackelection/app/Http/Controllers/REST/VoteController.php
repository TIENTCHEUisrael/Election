<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vote = Vote::all();
        return response()->json($vote, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $vote = Vote::create(['date_election' => $request->date_election]);
            DB::commit();
            return response()->json($vote,201);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json("erreur d'insertion",500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
      try {
        DB::beginTransaction();
        $vote = Vote::find($id);
        $vote->update($vote->all());
        DB::commit();
        return response()->json($vote,200);
      } catch (\Throwable $th) {
        //throw $th;
        return response()->json('erreur au niveau de la modification',500);
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $vote=Vote::find($id);
            $vote->delete();
            DB::commit();
          return response()->json('la region a ete suprimer avec succes',200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }
    }
}

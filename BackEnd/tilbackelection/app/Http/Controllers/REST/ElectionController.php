<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Election = Election::all();
        return response()->json($Election,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
                DB::beginTransaction();
                $Election = Election:: create([
                'date_election' => $request->date_election,
                'label' => $request->label,
                'description' => $request->description,
                'statut' => $request->statut,
                'idvote' => $request->idvote,
            ]);

            DB::commit();


            return response()->json($Election,200);
        }catch(Throwable $th){            
            dd($th);
            return response()->json('{"erreur": "impossible de sauvegarde"}',404);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Election $participant)
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
            //code...
            DB::beginTransaction();            
            $Election = Election::find($id);
            $Election->update($request->all());
            DB::commit();
            return response()->json($Election,200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur de mise a jour',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            
            DB::beginTransaction();
            $Election=Election::find($id);
            $Election->delete();
            DB::commit();
          return response()->json('Election suprimer avec succes',200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }


    }
}

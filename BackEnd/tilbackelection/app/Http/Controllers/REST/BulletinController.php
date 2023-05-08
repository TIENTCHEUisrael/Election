<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletin = Bulletin::all();
        return response()->json($participant,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
                DB::beginTransaction();
                $bulletin = Bulletin:: create([
                'label' => $request->label,
                'couleur' => $request->couleur,
                'photo' => $request->photo,
                'idvote' => $request->idvote,
            ]);

            DB::commit();


            return response()->json($participant,200);
        }catch(Throwable $th){            
            dd($th);
            return response()->json('{"erreur": "impossible de sauvegarde"}',404);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Bulletin $participant)
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
            $bulletin = Bulletin::find($id);
            $bulletin->update($request->all());
            DB::commit();
            return response()->json($bulletin,200);
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
            $bulletin=Bulletin::find($id);
            $bulletin->delete();
            DB::commit();
          return response()->json('Bulletin suprimer avec succes',200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }


    }

   
}

<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ParticipantController extends Controller
{
    public function index()
    {
        $participant = Participant::all();
        return response()->json($participant,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
                DB::beginTransaction();
                $participant = Participant:: create([
                'cni' => $request->cni,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'telephone' => $request->telephone,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'status' => $request->status,
                'login' => $request->login,
                'pwd' => $request->pwd,
                'email' => $request->email,
                'etat' => $request->etat,
                'idregion' => $request->idregion,
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
    public function show(Participant $participant)
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
            $participant = Participant::find($id);
            $participant->update($request->all());
            DB::commit();
            return response()->json($participant,200);
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
            $participant=Participant::find($id);
            $participant->delete();
            DB::commit();
          return response()->json('participant suprimer avec succes',200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }


    }

    public function Status($id){
        try {
            //code...
        DB::beginTransaction();
        $part = Participant::find($id);
        $part->etat=!($part->etat);
        $part->update();
        DB::commit();
        return response()->json("status mise a jour avec succes",200);
        } catch (\Throwable $th) {
            return response()->json('erreur participant inactif',500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //
    public function store(Request $request){

        try {
            DB::beginTransaction();
            DB::table('participant')->insert([

            ]);

            $participant = new Participant();
            $participant->nom = $request->nom;
            $participant->prenom = $request->prenom;
            $participant->cni = $request->cni;
            $participant->age = $request->age;
            $participant->sexe = $request->sexe;
            $participant->status = $request->status;
            $participant->idregion = $request->idregion;
            $participant->login= $request->login;
            $participant->email = $request->email;
            $participant->pwd = $request->pwd;
            $participant->telephone = $request->telephone;
            $participant->etat = $request->etat;

            $participant->save();

            // Participant::Create(['nom'=> $request->input('nom')]);
            // Participant::Create(['num_cni'=> $request->input('num_cni')]);
            // Participant::Create(['age'=> $request->input('age')]);
            // Participant::Create(['sexe'=> $request->input('sexe')]);
            // Participant::Create(['status'=> $request->input('status')]);
            // Participant::Create(['id_region'=> $request->input('id_region')]);
            // Participant::Create(['login'=> $request->input('login')]);
            // Participant::Create(['password'=> $request->input('password')]);
            // Participant::Create(['email'=> $request->input('email')]);
            // Participant::Create(['etat'=> $request->input('etat')]);
            // Participant::Create(['telephone'=> $request->input('telephone')]);
            DB::commit();

            return view('participant_liste');
        } catch (\Throwable $th) {
            //throw $th;
           dd($th);
        }

    }

    public function delete($id){

        try {
            //code...
            DB::beginTransaction();
            Participant::find($id)->delete();
            Db::commit();
            return redirect('welcome');
        } catch (\Throwable $th) {
            //throw $th;
            return back();
        }
    }


    public function liste(){
        $liste = Participant::all();
        return view('participant_liste', compact('liste'));

    }


    public function updates(Request $request){
        try {
            //code...
            DB::beginTransaction();
            $participant = new Participant();
            $participant->nom = $request->nom;
            $participant->prenom = $request->prenom;
            $participant->cni = $request->cni;
            $participant->age = $request->age;
            $participant->sexe = $request->sexe;
            $participant->status = $request->status;
            $participant->idregion = $request->idregion;
            $participant->login= $request->login;
            $participant->email = $request->email;
            $participant->pwd = $request->pwd;
            $participant->telephone = $request->telephone;
            $participant->etat = $request->etat;
            Participant::find($participant->id)->insert($participant);
            DB::commit();
            return view('participant_liste');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

    }

    public function edite($id){
        try {
            //code...
            DB::beginTransaction();
            $participant = Participant::findOrFail($id);
            // DB::commit();
            return view('participant_edit',compact('participant'));


        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

    }

    public function participant(){
        return view('participant');
    }

}

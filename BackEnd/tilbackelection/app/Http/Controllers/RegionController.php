<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function region()
    {
        return view('region');
    }
    public function regions(Request $request)
    {
        try{
        DB::beginTransaction();
        Region::Create(['label' => $request->input('label')]);
        DB::commit();
        return back();
        }catch(Throwable)
        {return back();}

    }
    public function create(){
        $list = Region::all();
        return view('liste_region',compact('list'));

    }

    public function destroy($id){
        try {
            DB::beginTransaction();
            Region::find($id)->delete();
            DB::commit();
            return redirect('region_liste');

        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }
    }
    public function edit($id){
        try {

            DB::beginTransaction();
            $region = Region::find($id);
            DB::commit();

            return view('update_region', compact('region'));

        } catch (\Throwable $th) {

            return back();
            //throw $th;
        }


    }
    public function updates($id){
        try {
            DB::beginTransaction();
            Region::find($id)->update();
            DB::commit();
            return redirect('region_liste');
        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }

    }
}

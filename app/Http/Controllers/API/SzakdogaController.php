<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Szakdoga;

class SzakdogaController extends Controller
{
    public function index(){
        $szakdogak = Szakdoga::all();
        return $szakdogak;
    }

    public function store(Request $request){
        echo $request;
        $szakdogak = new Szakdoga();
        $szakdogak->szakdoga_nev=$request->szakdoga_nev;
        $szakdogak->githublink=$request->githublink;
        $szakdogak->oldallink=$request->oldallink;
        $szakdogak->tagokneve=$request->tagokneve;
        $szakdogak->save();

        return Szakdoga::find($szakdogak->id);
    }

    public function put(Request $request,$id){
        $szakdogak=Szakdoga::where('id',$id);
        $szakdogak->szakdoga_nev=$request->szakdoga_nev;
        $szakdogak->githublink=$request->githublink;
        $szakdogak->oldallink=$request->oldallink;
        $szakdogak->tagokneve=$request->tagokneve;
        $szakdogak->save();
        return Szakdoga::find($szakdogak->id);
    }

    public function delete($id){
        $szakdoga=Szakdoga::where('id',$id)->delete();
        return $szakdoga;
    }
}

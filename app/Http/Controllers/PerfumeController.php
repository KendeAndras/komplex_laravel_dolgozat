<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;
use Validator;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "/perfumes" , [
            "perfumes" => $perfumes
        ]);
    }

    public function newPerfume(Request $request) {

        
        return view( "/new_perfume" );


    }

    public function storePerfume( Request $request ) {

        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (int)$request->price;

        $request->validate([
            "name" => "required",
            "type" => "required",
            "price" => "required"
        ], [
            "name.required" => "Kell nev",
            "type.required" => "kell tipus is",
            "price.required" => "ara nincs?"
        ]);
    

        $perfume->save();

        return redirect( "/new-perfume" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {
        $perfume = Perfume::find($request->id);

        $perfume->update($request->all());

        return redirect("/perfumes");
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}

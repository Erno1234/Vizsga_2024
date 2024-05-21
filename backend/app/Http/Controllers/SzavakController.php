<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index()
    {
        return Szavak::all();
    }

    public function store(Request $request)
    {
        $szavak = new Szavak();
        $szavak->fill($request->all());
        $szavak->save();
        return $szavak;

    }

    public function show($id)
    {
        return Szavak::where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $szavak = new Szavak();
        if ($szavak) {
            $szavak->fill($request->all());
            $szavak->save();
        }
        return $szavak;
    }

    public function destroy($id)
    {
        $szavak = new Szavak();
        if ($szavak) {
            $szavak->delete();
        }
    }
    public function szavakLista()
    {
        $szavak = DB::table('szavaks')->select('angol','magyar','temaId')->get();
        return response()->json($szavak);
    }
    
}
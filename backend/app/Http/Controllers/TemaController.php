<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function index()
    {
        return Tema::all();
    }

    public function store(Request $request)
    {
        $temak = new Tema();
        $temak->fill($request->all());
        $temak->save();
        return $temak;

    }

    public function show($id)
    {
        return Tema::where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $temak = new Tema();
        if ($temak) {
            $temak->fill($request->all());
            $temak->save();
        }
        return $temak;
    }

    public function destroy($id)
    {
        $temak = new Tema();
        if ($temak) {
            $temak->delete();
        }
    }
    public function temakLista()
    {
        $temak = DB::table('temas')->select('id','temanev')->get();
        return response()->json($temak);
    }
}

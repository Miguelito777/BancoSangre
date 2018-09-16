<?php

namespace App\Http\Controllers;

use App\TcTipoSangreController;
use Illuminate\Http\Request;

class TipoSangreController extends Controller
{

    public function showAllTipoSangreController()
    {
        return response()->json(TcTipoSangreController::all());
    }

    public function showOneTipoSangreController($id)
    {
        return response()->json(TcTipoSangreController::find($id));
    }

    public function create(Request $request)
    {
        $TipoSangreController = TcTipoSangreController::create($request->all());

        return response()->json($TipoSangreController, 201);
    }

    public function update($id, Request $request)
    {
        $TipoSangreController = TcTipoSangreController::findOrFail($id);
        $TipoSangreController->update($request->all());

        return response()->json($TipoSangreController, 200);
    }

    public function delete($id)
    {
        TcTipoSangreController::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
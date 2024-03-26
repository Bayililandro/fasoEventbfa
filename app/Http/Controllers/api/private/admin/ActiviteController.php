<?php

namespace App\Http\Controllers\api\private\admin;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $activites = Activite::orderBy('created_at', 'ASC')->get();

            $data['activites']= $activites;
            return response()->json([
                'status' => 'Success',
                'message' => 'Liste des activites',
                'data'   => $data
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'Failed',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validate = Validator::make($request->all(), [
                
                'nom' => 'required|string'
            ]);

            if ($validate->fails()) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Erreur de validation du formulaire!',
                    'data' => $validate->errors(),
                ], 422);
            }

            $activite = Activite::create([
                'nom' => $request->nom
            ]); 

            $data['activite'] = $activite;

            return response()->json([
                'status' => 'Success',
                'message' => 'Activité créé avec succès',
                'data'   => $data,
            ], 201);


        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'Failed',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\api\public;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function inscriptionPromoteur(Request $request)
    {
       try {
        $validator = Validator::make(
            $request->all(),
            [
                'nomcomplet' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'siege' => 'required',
                'adresse' => 'required',
                'activites' => 'required',
                'telephone' => 'required|min:8',
                'password' => 'required|min:4',
            ],
            [
                'nomcomplet.required' => 'Le champ nomcomplet est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'siege.required' => 'Le champ siege est requis.',
                'adresse.required' => 'Le champ adresse est requis.',
                'telephone.required' => 'Le champ telephone est requis.',
                'activites.required' => 'Le champ domaines d\'activites est requis.',
            ]
        );

        // Vérifier si un utilisateur avec cet email existe
        $user = User::where('email', $request->email)->first();
        if($user){
            return response()->json([
                'status' => 'Failed',
                'message' => 'Erreur!, Email existe déjà'
           ], 400);
        }

        if($validator->fails()){
            return response()->json([
                 'status' => 'Failed',
                 'message' => 'Erreur de validation de formulaire'
            ], 422);
        }

        $promoteur = User::create([
            #ici, on recupere nomcomplet du formulaire et le stocker dans l'attribut nomcomplet de la base de donnée
             'nomcomplet' => $request->nomcomplet,
             'email' => $request->email,
             'password' => $request->password,
             'siege' => $request->siege,
             'adresse' => $request->adresse,
             'telephone' => $request->telephone,
             'activites' => $request->activites,
             'role' => "promoteur",
             'status' => "en_attente",
        ]);

        $promoteur->save();
        $data['promoteur'] = $promoteur;
        return response()->json([
            'status' => 'Success',
            'message' => 'Inscriptin réussi !!',
            'data'    =>  $data,
       ], 201);

        return response()->json('OK ça marche', 200);
       } catch (\Throwable $th) {
        return response()->json([
            'status' => 'Failed',
            'message' => $th->getMessage()
        ], 500);
       }
    }


    
    public function inscriptionAbonne(Request $request)
    {
       try {
        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:4',
                'adresse' => 'required',
                'telephone' => 'required|min:8',
                'preferences' => 'required',
            ],
            [
                'nom.required' => 'Le champ nom et prénom est requis.',
                'prenom.required' => 'Le champ nomcomplet et prénom est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'adresse.required' => 'Le champ adresse est requis.',
                'telephone.required' => 'Le champ telephone est requis.',
                'preferences.required' => 'Le champ preferences est requis.',
            ]
        );

        // Vérifier si un utilisateur avec cet email existe
        $user = User::where('email', $request->email)->first();
        if($user){
            return response()->json([
                'status' => 'Failed',
                'message' => 'Erreur!, Email existe déjà'
           ], 400);
        }

        if($validator->fails()){
            return response()->json([
                 'status' => 'Failed',
                 'message' => 'Erreur de validation de formulaire'
            ], 422);
        }

        $abonne = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'password' => $request->password,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'preferences' => $request->preferences,
            'role' => "abonne",
        ]);

        $abonne->save();
        $data['abonne'] = $abonne;
        return response()->json([
            'status' => 'Success',
            'message' => 'Inscriptin réussi !!',
            'data'    =>  $data,
       ], 201);

        return response()->json('OK ça marche', 200);
       } catch (\Throwable $th) {
        return response()->json([
            'status' => 'Failed',
            'message' => $th->getMessage()
        ], 500);
       }
    }
    
}

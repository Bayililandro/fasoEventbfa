<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    #fonction pour affichier les options d'inscription
    public function InscriptionOption(){
        return view('public.auth.inscription-option');
    }

    #fonction pour affichier le formulaire d'inscription des promoteurs
    public function InscriptionPromoteur(){
        return view('public.auth.inscription-promoteur');
    }
     
    #fonction pour gerer les inscription des promoteur
    #request permet de recuperer les données du formulaire
    public function InscriptionPromoteurAction(Request $request){
        #mise des contraintes au formulaire ou validation du formulaire
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
        #verifie si des erreurs existes dans le formulaire si oui on reste sur la page actuel
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        #dd($request->all(), $request->telephone);
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

        $promoteur->save();#pour s'assurer que l'utilisateur est bien enregistrer

        return redirect()->route('public.connexion')->with('success', 'Inscription réussie ! public.auth.inscription-promoteur Veuillez-vous connecter.');

    }

    public function InscriptionAbonne(){
        return view('public.auth.inscription-abonne');
    }

     #fonction pour gerer les inscription des promoteur
    #request permet de recuperer les données du formulaire
    public function inscriptionAbonneAction(Request $request)
    {
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

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
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

        return redirect()->route('public.connexion')->with('success','Inscription réussie ! Connectez-vous maintenant.');
    }

    public function connexion(){
        return view('public.auth.connexion');
    }
}

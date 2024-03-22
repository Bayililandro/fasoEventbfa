<?php

namespace App\Http\Controllers\private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(){
          return view('private.profil.index');
    }

    public function editProfilAction(Request $request){

        {
            $user = Auth()->user();
    
            $user->nomcomplet = $request->nomcomplet;
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->telephone = $request->telephone;
            $user->adresse = $request->adresse;
            $user->siege = $request->siege;
            $user->email = $request->email;
            $user->activites = $request->activites;
            $user->preferences = $request->preferences;
    
            $user->save();
    
            return redirect()->back()->with('success', 'Profil edité avec succès');
        }

        return redirect()->back()->with('success', 'Profil edité avec succès');
    }

    public function editPasswordAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'new_password' => 'required|min:4|confirmed',
            ],
            [
                'new_password.required' => 'Le champ mot de passe est requis.',
                'new_password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'new_password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth()->user();
        $user->password = $request->new_password;
        $user->save();

        return redirect()->back()->with('success', 'Mot de passe modifié avec succès');
    }

    public function editImageAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'new_image' => 'required|file|mimes:jpeg,png,jpg|max:5120',
            ],
            [
                'new_image.required' => 'Le champ image est requis.',
                'new_image.file' => 'Le champ doit être un fichier.',
                'new_image.mimes' => 'Le fichier doit être de type :values.',
                'new_image.max' => 'La taille du fichier ne doit pas dépasser :max kilo-octets.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();

        // Traitement du téléchargement de la nouvelle image
        if ($request->hasFile('new_image')) {
            $file = $request->file('new_image');
            $path = $file->store('photos', 'public');

            // Suppression de l'ancienne image si elle existe
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            $user->photo = $path;
        } else {
            return redirect()->back()
                ->withErrors("succes", "Veuillez selectionner une image");
        }

        $user->save();

        return redirect()->back()->with('success', 'Image éditée avec succès.');
    }
}

@extends('private._layouts.app')

@section('titre', "Incription promoteur")

@section('contenu')
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <a href="{{route('acceuil')}}">
                <img src="../../images/logo.svg" alt="logo">
            </a>
              </div>
              <h4>Inscription Promoteur!</h4>
              <h6 class="font-weight-light">Veuillez entrer vos coordonnéss pour créer un compte</h6>
              <form class="pt-3" action="{{route('public.inscription-promoteur-action')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Nom Complet</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="nomcomplet" class="form-control form-control-lg border-left-0" placeholder="Entrez votre nom et prénom">
                   <!-- ce if affiche les erreurs juste en dessous du champ considerer -->
                    @if($errors->has('nomcomplet'))
                    <span class="text-danger">{{$errors->first('nomcomplet')}}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="Entrez votre email">
                    <!-- ce if affiche les erreurs juste en dessous du champ considerer -->
                    @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                  </div>
                </div>
              
                <div class="form-group">
                  <label>Mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Entrez votre mot de passe"> 
                         <!-- ce if affiche les erreurs juste en dessous du champ considerer -->
                    @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif                  
                  </div>
                </div>

                <div class="form-group">
                  <label>Adresse</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="adresse" class="form-control form-control-lg border-left-0" id="exampleInputAdresse" placeholder="Entrez votre adresse">
                    @if($errors->has('adresse'))
                    <span class="text-danger">{{$errors->first('adresse')}}</span>
                    @endif                        
                  </div>
                  <label>Siège</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="siege" class="form-control form-control-lg border-left-0" id="exampleInputSiege" placeholder="Entrez votre siège"> 
                    @if($errors->has('siege'))
                    <span class="text-danger">{{$errors->first('siege')}}</span>
                    @endif                       
                  </div>
                </div>

                <div class="form-group">
                <label>Telephone</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="telephone" class="form-control form-control-lg border-left-0" id="exampleInputSiege" placeholder="Entrez votre telephone">
                    @if($errors->has('telephone'))
                    <span class="text-danger">{{$errors->first('telephone')}}</span>
                    @endif                        
                  </div>
                </div>
                
                <div class="form-group">
                <label>Domaines d'activité</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <textarea name="activites" class="form-control form-control-lg border-left-0" placeholder="Entrez vos domaines d'activité" id="" cols="30" rows="10"></textarea>
                    @if($errors->has('activites'))
                    <span class="text-danger">{{$errors->first('activites')}}</span>
                    @endif
                  </div>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" require class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" >S'inscrire</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  S'incrire en tant que abonne <a href="{{ route('public.inscription-abonne') }}" class="text-primary">S'inscrire</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Avez-vous déjà un compte? <a href="{{ route('public.connexion') }}" class="text-primary">Connexion</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
@endsection
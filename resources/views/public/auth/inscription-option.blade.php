@extends('private._layouts.app')

@section('titre', "Options d'incription")

@section('contenu')
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{asset('assets_private/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Option d'inscription</h4>
              <h6 class="font-weight-light">Veuillez choisir une option d''incription!</h6>
              <form class="pt-3">
                <div class="mt-3">
                    
                  <a class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" href="{{route('public.inscription-promoteur')}}">inscription Promoteur</a>
                </div>
                <div class="mt-3">
                    
                    <a class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" href="{{route('public.inscription-abonne')}}">inscription Abonné</a>
                  </div>
                  <div class="mt-3">
                    
                    <a class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" href="{{ route('public.connexion') }}">Connexion</a>
                  </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
@endsection
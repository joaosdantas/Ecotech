@extends('template')
@section('main')



<div class="container d-flex justify-content-center">
    <img src="imagens/Untitled drawing 2.png" alt="" style="margin-top: 5%;">
</div>
<div class="container d-flex justify-content-center" style="margin-top: 2%;">
    <h1>Login</h1>
</div>




<
<br>


<div class="container ">
    <form method="POST" action="{{ route('entrar') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

            <div class="col-md-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class=" form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

            <div class="col-md-3">
                <input id="password" type="password" class="form-control @error('Senha') is-invalid @enderror" name="Senha" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="container form-group row">
            <div class="col-md-1 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Lembrar') }}
                    </label>
                </div>
            </div>
        </div>

        <div class=" container form-group row mb-0">
            <div class="col-md-3 offset-md-4">
                <button type="submit" class="btn btn-success">
                    {{ __('Entrar') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>

    <div class="container d-flex justify-content-center" style="margin-bottom:10%; margin-top: 10%; ">
            
        <a class="btn btn-success" href="cadastro-pessoa-1" style="width: 50%; font-size: 25px; padding: 2%;" id="entrar">Não tem conta? Cadastre-se aqui </a>
    </div>
</div>
    {{-- <section>


        <div class="container d-flex justify-content-center">
            <img src="imagens/Untitled drawing 2.png" alt="" style="margin-top: 5%;">
        </div>
        <div class="container d-flex justify-content-center" style="margin-top: 2%;">
            <h1>Login</h1>
        </div>
      



        <div class="container d-flex justify-content-center" style="margin-top: 5%;">
            <h2>Ou faça login com seu e-mail</h2>
        </div>
        <br>


        <div class="container col-md-12 form-cadastro">
            <form class="needs-validation" novalidate>
                <div class="form-column">

                    <div class="col-md-12 col-md-4 mb-3">
                        <label for="validationCustom02">E-mail</label>
                        <input type="email" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Muito Bem!
                        </div>
                    </div>
                    <div class="col-md-12 col-md-4 mb-3">
                        <label for="validationCustomUsername">Senha</label>
                        <input type="password" class="form-control" id="validationCustom02" required>
                    </div>

                </div>
                <div class="form-column">





                    <div class="container">
                        <a href="index_corrigida.html" >
                            <button class="btn btn-success" type="submit" style="font-size: 20px;">  
                                <a href="feed.html" id="link-button">Entrar</a>   
                            </button>
                        </a>
                    </div>
            </form>

            <script>
                
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      
                        var forms = document.getElementsByClassName('needs-validation');
                      
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
            </div>
        </div>
        <div class="container d-flex justify-content-center" style="margin-top: 10%; ">
            
            <a class="btn btn-success" href="cadastro-pessoa-1" style="width: 50%; font-size: 25px; padding: 2%;" id="entrar">Não tem conta? Cadastre-se aqui </a>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> --}}



    
@endsection
@extends('template')
@section('main')



<div class="container d-flex justify-content-center">
    <img src="imagens/Untitled drawing 2.png" alt="" style="margin-top: 5%;">
</div>
<div class="container d-flex justify-content-center" style="margin-top: 2%;">
    <h1>Login</h1>
</div>

<div class="container ">
   
   <div class="container d-flex justify-content-center">
    <form method="POST" action="{{ route('entrar') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

            <div class="col-md-8">
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

            <div class="col-md-8">
                <input id="password" type="password" class="form-control @error('Senha') is-invalid @enderror" name="Senha" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
        </div>

        <div class=" container form-group row mb-0">
            <div class="col-md-3 offset-md-4">
                <button type="submit" class="btn btn-lg btn-success">
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
</div>
    <div class="container d-flex justify-content-center" style="margin-bottom:10%; margin-top: 10%; ">
            
        <a class="btn btn-success" href="cadastro-pessoa-1" style="width: 50%; font-size: 25px; padding: 2%;" id="entrar">Não tem conta? Cadastre-se aqui </a>
    </div>
</div>
    



    
@endsection
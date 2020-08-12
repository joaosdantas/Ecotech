@extends('template')
@section('main')

    <section>


        <div class="container d-flex justify-content-center">
            <img src="imagens/Untitled drawing 2.png" alt="" style="margin-top: 5%;">
        </div>
        <div class="container d-flex justify-content-center" style="margin-top: 2%;">
            <h1>Login</h1>
        </div>
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn-face btn-outline-primary" style="margin-top: 5%;font-size: 20px; padding: 2%; width: 30%;"> <img src="imagens/facebook.png" alt=""style="padding: 1%;"> Continuar com Facebook</button>

        </div>

        <div class="container d-flex justify-content-center">
            <button type="button" class="btn-google btn-outline-danger" style="margin-top: 2%;font-size: 20px; padding: 2%; width: 30%;"><img src="imagens/social-google-plus-icon.png" alt=""style=" padding-right: 8%;">Continuar com Google</button>

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
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
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
            <!-- <a href=" entrar.html " style="text-decoration:none;">
                <h1>Já é Cadastrado? Então entre aqui</h1>
            </a> -->
            <a class="btn btn-success" href="/cadastrar" style="width: 50%; font-size: 25px; padding: 2%;" id="entrar">Não tem conta? Cadastre-se aqui </a>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
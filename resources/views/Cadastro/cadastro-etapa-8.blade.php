@extends('cadastro-template')

@section('main')


    <section class="container page-one">

        <br><br><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="">
            <div class="box col-md-4">
                <h1>Ufa! <br> Estamos quase lá! </h1>
                <h3>Confira as informações para e clique em "CONFIRMAR" para publicar a sua iniciativa.</h3>
            </div>





            <div class="box col-md-8">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="">
                            <label for="validationCustom01">Nome do Projeto</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Natureza Lab" required>
                            <div class="valid-feedback">
                                <!-- Looks good! -->
                            </div>
                        </div>
                        <div class="">
                            <label for="validationCustom02">Locais</label>
                            <input type="text" class="form-control" id="validationCustom02" value="São Paulo; Rio de Janeiro;" required>
                            <div class="valid-feedback">
                                <!-- Looks good! -->
                                <label for="validationCustom02">Tags</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Sustentabilidade; Artesanato;" required>
                                <div class="valid-feedback">

                                    <label for="validationCustom02">Descrição</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="Este projeto tem o objetivo de..." required>

                                    <label for="validationCustom02">Objetivos</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="Captar recursos" required>

                                    <label for="validationCustom02">Resultados</label>

                                    <section class="card-confirmar container justify-content-center " id="conquistas-confirmar">


                                        <div class="card" style="width: 18rem;" id="publique">
                                            <img src="img/trofeu.png" class="card-img-top-confirmar" alt="...">
                                            <div class="card-body">
                                                <h7 class="card-title">Prêmios</h7><br>
                                                <!-- <p class="card-text">O lugar onde suas ideias podem sair do papel! Publique o seu projeto e encontre pessoas que falem a sua língua! :)</p> -->
                                                <!-- <a href="#" class="btn btn-success">Saiba Mais</a> -->
                                                <textarea name="premios" id="" cols="1" rows="1">1</textarea>
                                            </div>
                                        </div>

                                        <div class="card" style="width: 18rem;" id="contribua">
                                            <img src="img/people.png" class="card-img-top-confirmar" alt="...">
                                            <div class="card-body">
                                                <h7 class="card-title">Colaboradores</h7><br>
                                                <!-- <p class="card-text">Contribua para a realização de um projeto ou encontre pessoas que também querem impactar o mundo como você!</p> <br> -->
                                                <!-- <a href="#" class="btn btn-success">Saiba Mais</a> -->
                                                <textarea name="people" id="" cols="1" rows="1">120</textarea>
                                            </div>
                                        </div>
                                    </section>

                                    <label for="validationCustom02">Fotos</label>
                                    <section class="card-fotos-confirmar container justify-content-center " id="conquistas-fotos-confirmar">


                                        <div class="card" style="width: 18rem;" id="publique">
                                            <img src="img/foto-post3.jpg" class="card-img-top-confirmar" alt="...">
                                            <div class="card-body">

                                            </div>
                                        </div>

                                        <div class="card" style="width: 18rem;" id="contribua">
                                            <img src="img/foto-post4.jpg" class="card-img-top-confirmar" alt="...">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </section>


                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                Concordo com os Termos e Condições de Uso
                              </label>
                                        <div class="invalid-feedback">
                                            Você precisa aceitar para prosseguir!
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>

        </div>


        <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
        </form>
        </div>
        </div>




        <br>

        </div>
    </section>

    <div class="buttons">

        <div class="button-proximo">
            <a href="cadastro-feedback" class="btn-proximo btn btn-default btn-lg">Próximo</a>
        </div>

        <div class="button-voltar">
            <a href="cadastro-etapa-6" class="btn-voltar btn btn-default btn-lg">Voltar</a>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>






    <footer>

        <section id="references">
            <div class="container ref">

                <div class="row">


                    <br>
                    <!-- <a href="https://facebook.com"><img src="img/fb.png" alt="" class="img-social-media"></a>
                            <a href="https://twitter.com"><img src="img/twitter.png" alt="" class="img-social-media"></a>
                            <a href="https://linkedin.com"><img src="img/lkdn.png" alt="" class="img-social-media"></a> -->

                </div>
            </div>
        </section>

        <br>


        <div class="container copyright text-center">
            <p>Copyright &copy; Your 2019</p>

        </div>
    </footer>

    <!-- JAVA -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

</body>

@endsection
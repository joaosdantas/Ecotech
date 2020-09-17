@extends('cadastro-template')

@section('main')


    <section class="container page-one">

        <br><br><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="">
            <div class="box col-md-4">
                <h1>Que bacana! <br> Mais um passo nessa sua incrível jornada! </h1>
                <h3>Nos conte um pouquinho da sua iniciativa, vamos potencializar essa ideia...</h3>
            </div>

            <div class="box col-md-8">
                
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="">
                            <label for="validationCustom01">Nome do Projeto</label>
                            <input type="text" name="titulo" action="{{route('registrarProjeto')}}" class="form-control" id="validationCustom01" required method="POST">
                            <div class="valid-feedback">
                                <!-- Looks good! -->
                        </div>
                    </div>

                    <div class="">
                        <label for="validationCustom02">Descrição</label>
                        <input type="text" name="descricao" class="form-control" id="validationCustom02" value="Este projeto tem o objetivo de..." required>
                        

                        <label for="validationCustom02">Colaboradores</label>
                        <input type="number" name="colaboradores" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                        <!-- Looks good! -->
                        
                        <label for="validationCustom02">Captação</label>
                                <input type="number" name="captacao" class="form-control" id="validationCustom02" value="R$" required>
                        {{-- </section> --}}

                        <label for="validationCustom02">Parcerias</label>
                                <input type="text" name="parcerias" class="form-control" id="validationCustom02" value="Captar recursos" required>
                                
                                <label for="validationCustom02">Interesses</label>
                                <select type="text" name="interesses" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="">
                                    <option selected disabled value="">Selecione...</option>
                                    <option>Economia Compartilhada</option>
                                    <option>Reciclagem</option>
                                    <option>Urbanização e Meio Ambiente</option>
                                    <option>Desmatamento</option>
                                    <option>Extinção de espécies</option>
                                </select>
                                
                                <br>
                                {{-- <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Concordo com os Termos e Condições de Uso
                                        </label>
                                        <div class="invalid-feedback">
                                            Você precisa aceitar para prosseguir!
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                
                
            </section>
                </div>
            </div>

            </div>
        </form>
        </div>
        </div>




        <br>

        </div>
    </section>

    <div class="buttons">

        {{-- <div class="button-proximo">
            <a href="cadastro-feedback" class="btn-proximo btn btn-default btn-lg">Próximo</a>
        </div> --}}

        <div class="button-voltar">
            <a href="cadastro-etapa-6" class="btn-voltar btn btn-default btn-lg">Voltar</a>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>







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
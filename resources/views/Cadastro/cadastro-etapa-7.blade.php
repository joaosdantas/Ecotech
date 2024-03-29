@extends('cadastro-template')

@section('main')


    <section class="container page-one">

        <br><br><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 87.5%;" aria-valuenow="87.5" aria-valuemin="0" aria-valuemax="100"></div>
        </div>



        <h1>Qual o seu objetivo com essa publicação? </h1>



        <br><br>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="divulgacao">Obter visualizações no projeto</label><br>
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="captacao-invest">Encontrar investidores</label><br>
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="divugacao-vagas">Divulgação de vagas</label><br>
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="captacao-money">Campanha de doação</label><br>
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="voluntarios">Contratação de voluntários</label><br>
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="voluntarios">Outros</label><br>
            <textarea name="outros" id="" cols="100" rows="3"></textarea>
        </div>



        <br>


        <div class="buttons">

            <div class="button-proximo">
                <a href="cadastro-etapa-8" class="btn-proximo btn btn-default btn-lg">Próximo</a>
            </div>

            <div class="button-voltar">
                <a href="cadastro-etapa-6" class="btn-voltar btn btn-default btn-lg">Voltar</a>
            </div>
        </div>
        </div>

        <br>
        <br>
        <br>
        <br>




    </section>

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

</body>

@endsection
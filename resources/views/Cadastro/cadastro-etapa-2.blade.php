@extends('cadastro-template')

@section('main')


    <section class="container page-one">

        <br><br><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <form>
            <h1>Em quais cidades ele está localizado?</h1>
            <div class="form-group form-control-lg">
                <label for="localProjeto"></label>
                <select type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="">
                            <option selected disabled value="">Selecione...</option>
                            <option>...</option>
                          </select>
            </div>

        </form>


        <br>

        <div class="buttons">

            <div class="button-proximo">
                <a href="cadastro-etapa-3" class="btn-proximo btn btn-default btn-lg">Próximo</a>
            </div>

            <div class="button-voltar">
                <a href="cadastro-etapa-1" class="btn-voltar btn btn-default btn-lg">Voltar</a>
            </div>
        </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
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
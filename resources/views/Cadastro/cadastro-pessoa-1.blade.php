@extends('cadastro-template')
@section('main')

<section class="container page-one">

    <br><br><br>
    

    <div class="">
        <div class="box col-md-4">
            <h1>Olá! <br> Seja bem-vinda(o) a esse mundo cheio de sementes do bem!</h1>
            <h3>
                Deixamos o solo fértil, <br> você planta e o mundo todo colhe os
                frutos...
            </h3>
        </div>





        <div class="box col-md-8">
        <form action="{{route('registrarUsuario')}}" class="needs-validation" novalidate method="POST">
            @csrf

                <label for="validationCustom02">Nome</label>
                                <input type="text" name="nome" class="form-control" id="validationCustom02" value="">

                <div class="form-row">
                    <div class="">
                        <label for="validationCustom01">Telefone</label>
                        <input type="phone" class="form-control" name="telefone" id="validationCustom01" value="(00) 9000-0000" required>
                        <div class="valid-feedback">
                            <!-- Looks good! -->
                        </div>
                    </div>
                    <div class="">
                        <label for="validationCustom02">E-mail</label>
                        <input type="email" name="email" class="form-control" id="validationCustom02" value="seu-email@email.com" required>
                        <div class="valid-feedback">
                            <!-- Looks good! -->
                            <!-- <label for="validationCustom02">Interesses</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="divulgacao">Reciclagem</label><br>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="captacao-invest">Artesanato</label><br>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="divugacao-vagas">Economia compartilhada</label><br>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="captacao-money">Vida marinha</label><br>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="voluntarios">Agricultura</label><br>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="voluntarios">Outros</label><br>
                                <textarea name="outros" id="" cols="100" rows="3"></textarea>
                            </div> -->
            
                            <div class="valid-feedback">

                                <label for="validationCustom02">Perfil</label>
                                <select type="text" name="perfil" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="">
                                    <option selected disabled value="">Selecione...</option>
                                    <option>Empreendedor</option>
                                    <option>Investidor</option>
                                    <option>Apoiador</option>
                                </select>


                                

                                                                


                            </div>

                            <label for="validationCustom02">Senha</label>
                                <input type="text" name="senha" class="form-control" id="validationCustom02" value="">
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


    <button id="buttonNext" class="btn btn-primary" >Continuar</button>
    </form>
    </div>
    </div>




    <br>

    </div>
</section>

{{-- <div class="buttons">

    <div class="button-proximo">
        <a href="feed" class="btn-proximo btn btn-default btn-lg" type="submit">Próximo</a>
    </div>

    <div class="button-voltar">
        <a href="interesses" class="btn-voltar btn btn-default btn-lg">Voltar</a>
    </div>
</div> --}}


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@endsection


        
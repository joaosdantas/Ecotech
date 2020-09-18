@extends('template')
@section('main')

<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top: 15px; ">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            <li data-target="#carouselExampleFade" data-slide-to="3"></li>
            <li data-target="#carouselExampleFade" data-slide-to="4"></li>
            <li data-target="#carouselExampleFade" data-slide-to="5"></li>
            <li data-target="#carouselExampleFade" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="imagens/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="imagens/7.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="container" style="text-align: center;padding-top: 50px;">
        <h1>Bem-vindo à sua comunidade de negócios sustentáveis!</h1>
    </div>


    <div class="cards" style="padding-top: 50px;padding-bottom: 100px;">
        <div class="card" style="width: 18rem;border: none;">
            <img src="imagens/publique.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Apresente seu Projeto</h5>
                <p class="card-text">Com a nossa ajuda você vai criar uma apresentação para mostrar para todos o seu projeto, afim de coletar novas ideias e parceiros para que seu negócio deslanche de uma vez por todas!</p>
                {{-- <a href="p-empreendedor.html" class="btn btn-success" style="margin-left: 20%;">Saiba Mais</a> --}}
            </div>
        </div>
        <div class="card" style="width: 18rem;border: none;">
            <img src="imagens/contribua.png" style="margin-bottom: 66px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Encontre um Parceiro</h5>
                <p class="card-text">Aqui é o lugar onde você encontra projetos nos quais você tem vontade de iniciar uma parceria, onde também pode acabar sendo encontrado por alguém disposto a entrar no seu projeto com você!</p>
                {{-- <a href="p-investidor.html" class="btn btn-success" style="margin-left: 20%;">Saiba Mais</a> --}}
            </div>
        </div>
        <div class="card" style="width: 18rem;border: none;">
            <img src="imagens/encontre.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Apoie Ideias</h5>
                <p class="card-text">Além de trocar informações você também pode investir financeiramente em projetos que podem se tornar algo grande, entre em contato com o proprietário e nós ajudaremos!</p>
                {{-- <a href="p-apoiador.html" class="btn btn-success" style="margin-left: 20%;">Saiba Mais</a> --}}
            </div>
        </div>
    </div>

    <div class="container" style="text-align: center;padding-top: 50px; padding-bottom: 100px; ">
        <h1>Junte-se comunidade que fala a mesma língua do planeta</h1>
        <h2>#JuntosSomosMelhores!</h2>
    </div>

</section>



@endsection



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/Untitled drawing 2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo-jd.css">
    <title>Perfil</title>
</head>
@yield('perfilTemplate')
<body style="background-color: #f1f1eb;">
    
    <header>
        <div class="menu ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #106552!important; padding-left: 50px; position: fixed; left: 0; top: 0; width: 100%;">
                <a class="navbar-brand" href="index_corrigida.html"><img src="imagens/EcoTech-logo-white (1).png" style="width: 80px; margin: 0;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link branca" href="/feed">Início<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link branca" href="/perfil">Perfil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notificações</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#">Mensagens</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/home">Sair</a>
                            </li>
                        </ul>


                    </div>
                </div>

            </nav>
        </div>
    </header>
    <section class="container " id="perfil">
        <div class="container " style="border: 2px solid #28a745; padding: 5%;  margin-top: 10%; background-color:white; box-shadow:2px 2px 14px 0px rgba(46, 50, 50, 0.82);">

            <div class="container d-flex justify-content-center">

                <img class="greta" src="imagens/Greta_Thumberg.jpg" alt="Perfil" style="float: left;">

            </div>
            <div class="container d-flex justify-content-center" style="margin-top: 2%;">
                <h1> {{ $name ?? 'Gretta Thumberg' }}</h1>
            </div>
            <div class="container d-flex justify-content-center">

                <h5> <a href="#">Eco Investidora </a></h5>
            </div>


            <div class="container d-flex justify-content-center">
                <img src="imagens/locali.png" alt="Localização" style="width: 5%;">

            </div>
            <div class="container d-flex justify-content-center">

                <h6> Estocolmo, Suécia</h6>

            </div>
            <div class="container d-flex justify-content-center acoes  ">

                <img class="btn btn-success adicionar " src="imagens/adicionar.png" alt="Conectar" style="width: 5%;margin:0 10% 0 10%;padding: 0.50%;">
                <img class="btn btn-success adicionar " src="imagens/mensagembranco.png" alt="Enviar Mensagem" style="width: 5%; margin:0 10% 0 10%; padding: 0.50%;">
                <img class="btn btn-success  adicionar " src="imagens/maisbranco.png" alt="mais" style="width: 5%;margin:0 10% 0 10%;padding: 0.50%;">
            </div>
            <br>
            <hr style="width: 100%; border: 1px solid #28a745;">
            <br>
            <div class="container d-flex justify-content-center">

                <h4> Olá, eu sou Greta!</h4>

            </div>
            <div class="container d-flex justify-content-center">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, possimus delectus ipsum, itaque doloremque eius voluptatum, nemo reprehenderit perspiciat is accusamus sint esse ab modi vero quas a ea cupiditate aliquid lorem ipsum dolor
                    sit, amet consectetur adipisicing elit. Ratione, possimus delectus ipsum, itaque doloremque eius voluptatum, nemo reprehenderit perspiciat is accusamus sint esse ab modi vero quas a ea cupiditate aliquid.</p>

            </div>
            <div class="container d-flex mediaInfo ">


                <div class=" container d-flex justify-content-center " style="margin-top: 5%; ">
                    <img src="imagens/encontre.png" alt="" style="width: 35px; height: 45px; margin-bottom: 5%; padding-bottom: 5%;">
                    <h6>Apoiadora e Investidora</h6>

                </div>

                <div class=" container d-flex justify-content-center " style="margin-top: 5%; ">

                    <img src="imagens/amizade.png" alt="" style="width: 30px; height: 20px;padding-right: 2%;">
                    <h6> <a href="conexoes.html" style="text-decoration: none;"> 1.500 Conexões</a></h6>

                </div>
                <br>

                <div class=" container d-flex justify-content-center " style="margin-top: 5%; ">
                    <img src="imagens/publique.png" alt="" style="width: 30px; height: 25px;padding-right: 2%;">
                    <h6>Participa de 5 projetos Ativos</h6>

                </div>
            </div>
        </div>

        <div class="container" style="border: 2px solid #28a745; padding: 5%; margin-top: 5%; background-color:white;box-shadow:2px 2px 14px 0px rgba(46, 50, 50, 0.82);">
            <div class=" container d-flex justify-content-center textos" style="padding: 0% 15% 10% 15% ;">
                <h2>Projetos</h2>
            </div>

            <div class="container d-flex row justify-content-center thumbNails ">

                <img class="imgThumb " src="imagens/projeto1.jpg" alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/projeto2.jpg" alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/projeto3.jpg" alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/projeto4.jpg" alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">

                <!-- <img src="imagens/projeto5.jpeg" alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img src="imagens/photo2.jpg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img src="imagens/photo3.jpg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img src="imagens/times.jpeg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; "> -->

            </div>
            <br>
            <br>
            <br>
            <a href="projetos.html" class="btn btn-success btn-lg btn-block">Ver Todos os Projetos</a>
        </div>


        <div class="container" style="border: 2px solid #28a745; padding: 5%;  margin-top: 5%; margin-bottom:10% ;background-color:white;box-shadow:2px 2px 14px 0px rgba(46, 50, 50, 0.82);">
            <div class=" container d-flex justify-content-center textos " style="padding: 0% 15% 10% 15% ; ">
                <h2>Publicações em destaque</h2>
            </div>

            <div class="container d-flex row justify-content-center thumbNails ">

                <img class="imgThumb " src="imagens/photo1.jpg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/photo2.jpg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/photo3.jpg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">
                <img class="imgThumb " src="imagens/times.jpeg " alt=" " style="width: 20%; margin: 2%; border-radius: 20%; ">

            </div>
            <br>
            <br>
            <br>
            <a href="Publicacoes.html" class="btn btn-success btn-lg btn-block">Ver Todas as Publicações</a>
        </div>

    </section>



</body>

</html>

</body>

</html>
    

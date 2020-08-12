<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/Untitled drawing 2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-jd.css" > -->
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo-jd.css')}}">
    <title>EcoTech</title>
</head>

<body>
    <header>
        <div class="menu ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #106552!important; padding-left: 50px;">
                <a class="navbar-brand" href="/home"><img src="imagens/EcoTech-logo-white (1).png" id="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link branca" href="/quem-somos">Quem Somos<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/oque-fazemos">O que fazemos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/como-fazemos">Como fazemos</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link " href="/entrar">Entrar</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>

            </nav>
        </div>
    </header>

<main>
    @yield('main')
</main>


    <footer style="width: 100%;background-color:#106552 ;">

        <section id="references" style="padding: 1%;">
            <div class="container d-flex justify-content-center">

                <div class="row">


                    <br>
                    

                </div>
            </div>
        </section>

        <br>


        <div class="container copyright text-center" style="padding-bottom: 3%; color: white;">
            <p>Copyright &copy; Your 2019</p>

        </div>
    </footer>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>

</body>

</html>
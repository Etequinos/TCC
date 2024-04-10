<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-shrink" >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Celine Is Awesome</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="onboarding-container">
  <h1>Já nos Visitou Antes?</h1>
  <p>VENHA PARTICIPAR DO CLUBE FIDELIDADE</p>

  <div class="options">
    <a href="#join-loyalty-club" class="button">Join Loyalty Club</a>
    <a href="#enter-anonymously" class="button">Enter Anonimamente</a>
  </div>

  <h2 id="join-loyalty-club">Entre no clube de fidelidade</h2>
  <p>nsira seu CPF para fazer parte do nosso clube de fidelidade e aproveitar benefícios exclusivos.</p>
  <form action="/join-loyalty-club" method="post">
    <input type="text" name="cpf" placeholder="CPF" required>
    <button type="submit">Confirm</button>
  </form>

  <h2 id="enter-anonymously">Entre  Anonimamente</h2>
  <p>Você ainda pode desfrutar de nossos serviços sem aderir ao clube de fidelidade.</p>
  <a href="/anonymous-entry" class="button">Entre anonimamente.</a>
</div>

</body>
</html>
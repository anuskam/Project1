<?php

require_once 'php_libraries/bd.php';

$user_set = false;
if (isset($_SESSION['user'])) {
  $user_set = true;
  setcookie("points", $_SESSION['user']['points']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- AOS -->
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

  <!-- Hojas de estilo -->
  <link rel="stylesheet" href="/project1/style/reset.css">
  <link rel="stylesheet" href="/project1/style/index.css">
  <link rel="stylesheet" href="/project1/style/buttons.css">
  <link rel="stylesheet" href="/project1/style/style-navbar.css">
  <link rel="stylesheet" href="/project1/style/aboutUs.css">

  <!-- FONT MONTSERRAT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

  <link rel="shortcut icon" type="image/png" href="/project1/media/img/logo.png"/>
  <title>Landing Page</title>

</head>

<body>
  <?php

  $logState;
  if ($user_set) {
    require_once 'php_partials/navbar.php';
    $logState = "logged";
  } else {
    $logState = "no logged";
  }
  ?>

  <p id="logState"><?php echo $logState ?></p>

  <ul class="recomer??em">
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <?php
  require_once 'php_partials/buttons.php';
  ?>

  <?php if (isset($logState) && $logState != "logged"){?>
  <div id="recomer??Button">
    <a role="button" class="btn translate" href="/project1/index.php/#divulgacio" id="restoreExclamation">Recomer??em!</a>
  </div>
  <?php }?>

  <!-- temporary -->

  <!-- <?php require_once('./php_partials/message.php'); ?> -->

  <section id="divulgacio">
    <p data-aos="fade-up" data-aos-duration="1500" id="divulgation1" class="translate">El 96% de los peque??os negocios considera que la crisis provocada por la pandemia del coronavirus afectar?? de forma negativa o muy negativa a su actividad. Las restricciones de aforo y el cierre temporal de algunos de estos negocios han hecho que muchos de ellos se encuentren en una situaci??n econ??mica dif??cil.
      Para ayudar en estos momentos cr??ticos nace ???Recomer??em???.</p>
    <div data-aos="fade-up" data-aos-duration="1500" id="imgDiv1"></div>
    <div data-aos="fade-up" data-aos-duration="1500" id="imgDiv2"></div>
    <p data-aos="fade-up" data-aos-duration="1500" id="divulgation2" class="translate">???Recomer??em??? es un proyecto que pretende potenciar las compras en comercios locales en Barcelona. Para ello hemos creado cuatro juegos, mediante los que se pueden acumular puntos para acceder a promociones y descuentos en diferentes tiendas.
      ??Te apuntas? ??Sigue hacia abajo para conocer a Teresa y descubrir su historia!</p>

  </section>

  <!-- STORYTELLING -->
  <section id="story">
    <div data-aos="zoom-in" data-aos-duration="1500" class="part1">
      <div>
        <p class="translate" id="storyTelling1">??Quedan muy pocos d??as para Navidad y Teresa a??n tiene muchas cosas que hacer antes de que llegue! Acaba de recordar que a??n no ha comprado ning??n regalo para Marco, su nieto m??s exigente. Sin embargo, antes de ir a comprar tendr?? que conseguir dinero.</p>
      </div>
      <img src="/project1/media/img/Storytelling1.png" alt="">
    </div>
    <div data-aos="zoom-in" data-aos-duration="1500" class="part2">
      <img src="/project1/media/img/Storytelling2.png" alt="">
      <div>
        <p class="translate" id="storyTelling2">Adem??s, quiere comprar algunos discos de Villancicos para ambientar la comida familiar. Hablando de la comida??? ??a??n tiene que comprar algunos ingredientes que le faltan para prepararla! Reg??strate para ayudarla a trav??s de diferentes juegos, con los que ganar??s puntos para acceder a descuentos y promociones exclusivas y, como Teresa, fomentar el comercio local.</p>
      </div>
    </div>
  </section>

  <!-- ABOUT US -->
  <section id="aboutUs">
    <div class="main_content">
      <div data-aos="zoom-in" data-aos-duration="1500" style="text-align: center;" class="member">
        <img src="/project1/media/img/alex-me.jpg" width="150px" class="rounded-circle" alt="">
        <h3 class="fuente">??lex Cant??</h3>
        <p class="translate" id="aboutUs_Al">Estudiante de desarrollo de aplicaciones web durante el d??a, ??vido consumidor de Netflix durante la noche.
          Me gusta el esqu??, tocar el piano y molestar a mi gata en mi tiempo libre.
        </p>
      </div>

      <div data-aos="zoom-in" data-aos-duration="1500" style="text-align: center;" class="member">
        <img src="/project1/media/img/froilan-me.png" width="150px" class="rounded-circle" alt="">
        <h3>Froilan Enriquez</h3>
        <p class="translate" id="aboutUs_Fr">Soy un estudiante de desarrollo de aplicaciones web de Estados Unidos pero resido en Barcelona. Toco el ??rgano para el coro de mi iglesia y en mi tiempo libre toco la guitarra, paso tiempo con mi novia e intento aprender cosas nuevas.
        </p>
      </div>

      <div data-aos="zoom-in" data-aos-duration="1500" style="text-align: center;" class="member">
        <img src="/project1/media/img/anna-me.png" width="150px" class="rounded-circle" alt="">
        <h3>Anna Moreta</h3>
        <p class="translate" id="aboutUs_An">Soy crimin??loga y estudiante de desarrollo de aplicaciones web, lo que significa que en el trabajo me confuden con la que arregla impresoras.
          Me gustan los gatos y los juegos de mesa.
        </p>
      </div>

      <div data-aos="zoom-in" data-aos-duration="1500" style="text-align: center;" class="member">
        <img src="/project1/media/img/mireia-me.jpg" width="150px" class="rounded-circle" alt="">
        <h3>Mireia S??nchez</h3>
        <p class="translate" id="aboutUs_Mi">Despu??s de diplomarme en turismo, decid?? cambiar de aires y me embarqu?? en la aventura de ser desarrolladora web.
          Ahora mis lunes son menos lunes si tengo un t??, m??sica de fondo y un proyecto de javascript entre manos.
        </p>
      </div>
    </div>
    </div>
  </section>
  <script src="/project1/js/nomWebApp.js"></script>
  <script src="/project1/lang/ESP.js"></script>
  <script src="/project1/lang/ENG.js"></script>
  <script src="/project1/lang/CAT.js"></script>
  <script src="/project1/lang/FR.js"></script>
  <script src="/project1/lang/language.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destaques.css">
    <title>Document</title>

</head>
<body>
    
<?php //Fiz um codigo gigante, não funcionou, dessisti ?>


<div class="slideshow-container">

    <div class="texto">
        <h1>PRATOS EM DESTAQUE</h1>
    </div>

    <div class="valor">
        <h1>$VALOR FIDELIDADE</h1>
    </div>


  <div class="mySlides fade">
    <img src="../imagens/canva.png" style="width: 100%;">
  </div>

  <div class="mySlides fade">
    <img src="../imagens/pao.jpg" style="width:100%;">
  </div>

  <div class="mySlides fade">
    <img src="../imagens/coca.jpg" style="width:100%;">
  </div>
</div>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // 2 segundos
}
</script>

</body>
</html>
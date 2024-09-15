<?php
$producto1 = [
  'img' => 'recursitos/img/card01.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto2 = [
  'img' => 'recursitos/img/card02.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto3 = [
  'img' => 'recursitos/img/card03.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];

$producto4 = [

  'img' => 'recursitos/img/card04.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];

$producto5 = [
  'img' => 'recursitos/img/card05.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];

$producto6 = [
  'img' => 'recursitos/img/card06.jpg',
  'titulo' => 'card title',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];

$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto5];

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Mas </title>
  <link rel="stylesheet" href="recursitos/css/bootstrap.min.css">
</head>

<body>

  <!-- menu de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- logo de la marca -->
    <a class="navbar-brand" href="#">
      <img src="recursitos/img/logo.png" alt="" style="width: 35px;"> "Tiendas MAS"
    </a>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="recursitos/img/slide01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="recursitos/img/slide01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="recursitos/img/slide03.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<section>
    <div class="container">
      <div class="row">
        <?php foreach ($productos as $producto) { ?>
                  <div class="col-sm-12 cold-md-6">
                      <div class="row no-gutters border mt-1 m-3" style="height: 200px;">
                          <div class="col-md-4 ">
                            <img src="<?php echo $producto['img'] ?> "class="card-img-top"  style="width: 180px;"  alt="...">
                          </div>
                          <div class="col-md-8 ">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $producto['titulo'] ?> </h5>
                              <p class="card-text"><?php echo $producto['descripcion'] ?> </p>
                            </div>
                          <div>
                      </div>
                  </div>
        <?php } ?>
      </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>       


</body>

</html>
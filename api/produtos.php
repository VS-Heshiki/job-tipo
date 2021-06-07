<!DOCTYPE html>
<html lang="pt-br">

  <?php
    include ("./src/head.php")
  ?>
  <body>
  <?php
    include ("./src/header.php")
  ?>
    <main>
      <p class="title-about">Produtos</p>
      <img class="img-about" src="./images/produtos.jpg">
    </main>
    <section class="empty-space"></section>
    <section class="container">
      <div class="input-group mb-12">
        <div class="input-group-prepend">
          <div class="input-group-text d-block"><span class="iconify" data-icon="bx:bx-search" data-inline="false"></span></div>
        </div>
        <input type="text" class="form-control" id="search" placeholder="Procurar">
      </div>
    </section>
    <section class="empty-space"></section>
    <section class="container">
      <div class="products">
        <div class="row">
          <div class="col-sm card-product scr1">
            <a href="#">
              <p class="text-img-pro">Pedestral e suporte</br>cilíndrico</p>
              <img class="img-products" src="./images/home-slide02.jpg">
            </a>
          </div>
          <div class="col-sm card-product scr2">
            <a href="#">
              <p class="text-img-pro">Pilar</p>
              <img class="img-products" src="./images/home-slide03.jpg">
            </a>
          </div>
          <div class="col-sm card-product scr3">
            <a href="#">
              <p class="text-img-pro">Castanha e roldana</p>
              <img class="img-products" src="./images/home-slide04.jpg">
            </a>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-4 card-product scr4">
            <a href="#">
              <p class="text-img-pro">Pino</p>
              <img class="img-products" src="./images/home-slide05.jpg">
            </a>
          </div>
          <div class="col-4 card-product scr5">
            <a href="#">
              <p class="text-img-pro">Suspensão</p>
              <img class="img-products" src="./images/home-slide06.jpg">
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="empty-space"></section>
    <?php
      include ("./src/sectionClientes.php")
    ?>
    <?php
      include ("./src/footer.php")
    ?>
    <?php
      include ("./src/scripts.php")
    ?>
  </body>
</html>
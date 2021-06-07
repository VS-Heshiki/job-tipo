<!DOCTYPE html>
<html lang="pt-br">

  <?php
    include ("./src/head.php")
  ?>
  <body>
  <?php
    include ("./src/header.php")
  ?>
    <main id="img-carousel">
      <div id="carousel1" class="owl-carousel owl-theme">
        <div class="item"><p class="text-image">Mais de 40 países atendidos</p><img src="./images/home-paises.jpg"></div>
        <div class="item"><p class="text-image">Confiança e qualidade em Isoladores há mais de 65 anos</p><img src="./images/home-slide07.jpg"></div>
        <div class="item"><p class="text-image">Certificada ISO 9001</p><img src="./images/home-slide08.jpg"></div>
        <div class="item"><p class="text-image">Um dos maiores fabricantes de Isoladores da América Latina</p><img src="./images/home-slide09.jpg"></div>
        <div class="item"><p class="text-image">Área total: 76.000 m²</br>Parque fabril: 25.000 m²</p><img src="./images/sobre-cst4.jpg"></div>
      </div>
    </main>
    <section class="empty-space"></section>
    <section class="container">
      <div class="card-text">
        <div class="card text-center mb-5" style="width: 18rem;">
          <div class="card-body">
            <span class="iconify card-icon" data-icon="carbon:flag" data-inline="false"></span>
            <p class="card-title">Empresa</p>
            <a href="#" class="card-click">Conheça nossa história</a>
          </div>
        </div>
        <div class="card text-center mb-5" style="width: 18rem;">
          <div class="card-body">
            <span class="iconify card-icon" data-icon="et:document" data-inline="false"></span>
            <p class="card-title">Catálogo</p>
            <a href="#" class="card-click">Clique aqui para baixar nosso catálogo</a>
          </div>
        </div>
        <div class="card text-center mb-5" style="width: 18rem;">
          <div class="card-body">
            <span class="iconify card-icon" data-icon="bx:bx-search-alt" data-inline="false"></span>
            <p class="card-title">Pesquisa</p>
            <a href="#" class="card-click">Encontre aqui seu produto</a>
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




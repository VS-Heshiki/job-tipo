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
      <div>
        <p class="title-about">Sobre</p>
        <img class="img-about" src="./images/sobre-cst3.jpg">
      </div>
    </main>
    <section class="empty-space"></section>
    <section class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="alltext-about regular">
            <p class="title-text">A CST é um dos maiores fabricantes de isoladores da América Latina, 
              há 65 anos fornecendo produtos de alta qualidade para mais de 40 países.
            </p>
            <span class="text-about">Com 220 colaboradores e um parque fabril de 25 mil m2 em uma área de 76 mil m2, 
              dispõe de toda a infraestrutura necessária para desenvolver, produzir e distribuir para todo o mundo.</br></span>
            <p>&nbsp;</p>
            <span class="text-about">Nossa capacidade de produção mensal é de 400 toneladas de porcelana e 25 mil isoladores de vidro.</br></span>
            <p>&nbsp;</p>
            <span class="text-about">Garantir a qualidade e a confiabilidade técnica dos produtos é um dos principais objetivos da CST, 
              que investe pesado em capacitação e treinamentos para a equipe, 
              tendo em vista o fornecimento de isoladores atendendo plenamente as características e requisitos técnicos aplicáveis, 
              e almejando a máxima satisfação dos clientes.</br></span>
            <p>&nbsp;</p>
            <span class="text-about">Localizada estrategicamente há 40 km do aeroporto internacional de Viracopos e 340 km do porto de Santos, 
              distribuímos com agilidade para todas as regiões do Brasil e do Mundo.</span>
          </div>
        </div>
        <div class="col-md-8">
          <div id="carousel3" class="owl-carousel owl-theme">
            <div class="item"><img src="./images/0J7A8659_1.jpg"></div>
            <div class="item"><img src="./images/0J7A8817_1.jpg"></div>
            <div class="item"><img src="./images/0J7A8880.jpg"></div>
            <div class="item"><img src="./images/0J7A8885.jpg"></div>
            <div class="item"><img src="./images/0J7A8898-2.jpg"></div>
            <div class="item"><img src="./images/raios.jpg"></div>
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

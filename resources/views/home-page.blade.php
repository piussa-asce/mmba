<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>MMBA Advogados</title>
    <meta name="viewport" content="width=350, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Lato:800,600,500,400,700|Inter:600" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/navbar.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      @include('navbar')
      <!-- Hero Section -->
      <section class="hero" id="hero">
        <div class="hero-content">
          <p>MEDINA MONTEIRO</p>
          <p>BENSIMON</p>
          <p class="highlighted">ADVOGADOS</p>
          <button class="contact-btn" onclick="goTo('contacts')">FALE CONNOSCO</button>
        </div>
      </section>
      <!-- About Us Section -->
      <section class="about" id="about">
          
        <div class="about-content">
          <div class="about-text">
            <p class="subtitle">PROPÓSITO, ESTRATÉGIA E COMPROMISSO</p>
            <h2>SOBRE NÓS</h2>
            <p>
              Construímos relações de confiança e oferecemos soluções jurídicas estratégicas e personalizadas.
              <br /><br />
              Com uma equipa experiente e focada na ética e transparência, atuamos em diversas áreas do direito, sempre em busca de soluções inovadoras.
              <br /><br />
              Seja na prevenção de conflitos, na defesa dos seus direitos ou no planeamento jurídico empresarial, garantimos a segurança que procura.
            </p>

            <div class="cards">
              <div class="card">
                <h3>FOCO NO CLIENTE</h3>
                <p>
                  A nossa prioridade é compreender e atender
                  as necessidades dos nossos clientes
                </p>
              </div>

              <div class="card">
                <h3>EXCELENCIA</h3>
                <p>
                  Comprometemo-nos a oferecer o melhor, 
                  com dedicação e cuidado em cada detalhe
                </p>
              </div>
            </div>

            <button class="contact-btn dark" onclick="goTo('contacts')">FALE CONNOSCO</button>
          </div>

          <img src="/home/about_image.jpg" alt="" class="about-image">

        </div>
      </section>
      <!-- Services Section -->

      <section class="services" id="services">
        <div class="services-messages">
          <div class="title">
            <p class="services-small-title">SERVIÇOS</p>
            <h2 class="services-big-message">APOIO JURÍDICO DE <span class="services-big-message white">CONFIANÇA</span>,</h2>
            <h2 class="services-big-message">À MEDIDA DAS SUAS NECESSIDADES </h2>
          </div>
        </div>
        <div class="carousel-container">
          <img src="/svg/home/left.svg" class="arrow left"></img>  
          <div class="carousel">
            <div class="services-cards" id="services-cards">
              <!-- dynamically filled -->
            </div>
          </div>
          <img src="/svg/home/right.svg" class="arrow right"></img>
          <div class="indicators" id="indicators"></div>
        </div>
      </section>

      <section class="team">
        <img src="/home/team_photo.jpg" alt="team photo" class="team-photo">
        <div class="text">
          <h2 class="text-title">CONFIANÇA, RIGOR E <span class="yellow">COMPROMISSO</span></h2>
          <p class="yellow">Mais do que advogados, somos parceiros nas decisões que moldam o seu futuro.</p>
          <p>Com diferentes percursos e áreas de especialização, a nossa equipa combina conhecimento técnico com uma visão estratégica e humana do Direito.</p>
          <p>Trabalhamos em conjunto para garantir  soluções sólidas, personalizadas e orientadas para resultados reais.</p>
          <button class="contact-btn dark" onclick="goTo('team')">SABER MAIS</button>
        </div>
      </section>


      @include('footer')
    </div>

    <script src="/js/home.js" async defer></script>
    <script src="/js/nav.js" async defer></script>
  </body>
</html>
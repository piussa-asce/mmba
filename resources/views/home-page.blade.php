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
  </head>
  <body>
    <div class="container">
      @include('navbar')
      <!-- Hero Section -->
      <section class="hero" id="hero">
        <div class="hero-content">
          <div class="hero-text">
            <span>MEDINA MONTEIRO</span>
            <span>BENSIMON</span>
            <span class="highlight">ADVOGADOS</span>
          </div>
          <!-- <p class="hero-quote">"A DEMOCRACIA VAI PARA ALÉM DO DIREITO"</p> -->
          <button class="contact-btn " onclick="goTo('contacts')">FALE CONNOSCO</button>
        </div> 
      </section>

      <!-- About Us Section -->
      <section class="about" id="about">
          
        <div class="about-content">
          <div class="about-text">
            <p class="subtitle">PROPÓSITO, ESTRATÉGIA E COMPROMISSO</p>
            <h2>SOBRE NÓS</h2>
            <p>
              CONSTRUÍMOS RELAÇÕES DE CONFIANÇA E OFERECEMOS SOLUÇÕES
              JURÍDICAS ESTRATÉGICAS E PERSONALIZADAS.
              <br /><br />
              COM UMA EQUIPA EXPERIENTE E FOCADA NA ÉTICA E TRANSPARÊNCIA,
              ATUAMOS EM DIVERSAS ÁREAS DO DIREITO, SEMPRE EM BUSCA DE
              SOLUÇÕES INOVADORAS.
              <br /><br />
              SEJA NA PREVENÇÃO DE CONFLITOS, NA DEFESA DOS SEUS DIREITOS OU
              NO PLANEAMENTO JURÍDICO EMPRESARIAL, GARANTIMOS A SEGURANÇA E
              TRANQUILIDADE QUE PROCURA.
            </p>

            <div class="cards">
              <div class="card">
                <h3>FOCO NO CLIENTE</h3>
                <p>
                  A NOSSA PRIORIDADE É COMPREENDER E ATENDER AS NECESSIDADES
                  DOS NOSSOS CLIENTES
                </p>
              </div>

              <div class="card">
                <h3>EXCELENCIA</h3>
                <p>
                  COMPROMETEMO-NOS A OFERECER O MELHOR, COM DEDICAÇÃO E
                  CUIDADO EM CADA DETALHE.
                </p>
              </div>
            </div>

            <button class="contact-btn dark" onclick="goTo('contacts')">FALE CONNOSCO</button>
          </div>

          <div class="about-image">
            <img class="rectangle top" alt="Rectangle" src="/home/rectangle-20.svg" />
            <img class="rectangle bottom" alt="Rectangle" src="/home/rectangle-20.svg" />
          </div>
        </div>
      </section>
      <!-- Services Section -->
      <section class="services" id="services">
        <div class="services-header">
          <h2>OS NOSSOS SERVIÇOS</h2>
          <p>
            Priorizamos sempre a confiança, a clareza e a proximidade com os
            nossos clientes.
          </p>
        </div>

        <div class="services-grid" id="servicesGrid"></div>

        <button class="contact-btn dark" onclick="goTo('services')">VER MAIS</button>
      </section>
      @include('footer')
    </div>

    <script>

        // Services data
        const services = [
        {
            title: "SERVIÇOS JURÍDICOS",
            icon: "/home/scales-of-justice-1.png",
            alt: "Scales of justice",
        },
        {
            title: "DIREITO ADMINISTRATIVO",
            icon: "/home/regulation-1.png",
            alt: "Regulation",
        },
        {
            title: "CONTRATAÇÃO PÚBLICA",
            icon: "/home/suitcase-1.png",
            alt: "Suitcase",
        },
        {
            title: "DIREITO DA FAMÍLIA",
            icon: "/home/family-1.png",
            alt: "Family",
        },
        {
            title: "ARBITRAGENS",
            icon: "/home/handshake-1.png",
            alt: "Handshake",
        },
        {
            title: "DIREITO IMOBILIÁRIO",
            icon: "/home/home-1.png",
            alt: "Home",
        },
        {
            title: "DIREITO CIVIL",
            icon: "/home/court-1.png",
            alt: "Court",
        },
        {
            title: "DIREITO PENAL",
            icon: "/home/law-book-1.png",
            alt: "Law book",
        },
        ];

        // Populate services grid
        function populateServices() {
            const servicesGrid = document.getElementById('servicesGrid');
            
            services.forEach(service => {
                const serviceItem = document.createElement('div');
                serviceItem.className = 'service-item';
                
                serviceItem.innerHTML = `
                <img src="${service.icon}" alt="${service.alt}" />
                <p>${service.title}</p>
                `;
                
                servicesGrid.appendChild(serviceItem);
            });
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', () => {
            populateServices();
        });
        
    </script>
    <script src="/js/nav.js" async defer></script>
  </body>
</html>
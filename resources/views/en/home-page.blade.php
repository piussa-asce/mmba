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
      @include('en.navbar')
      <!-- Hero Section -->
      <section class="hero" id="hero">
        <div class="hero-content">
          <p>MEDINA MONTEIRO</p>
          <p>BENSIMON</p>
          <p class="highlighted">ADVOGADOS</p>
          <button class="contact-btn" onclick="goTo('contacts')">CONTACT US</button>
        </div>
      </section>
      <!-- About Us Section -->
      <section class="about" id="about">
          
        <div class="about-content">
          <div class="about-text">
            <span class="subtitle">PURPOSE, STRATEGY AND COMMITMENT</span>
            <h2>ABOUT US</h2>
            <p>
            We build relationships based on trust and deliver strategic, tailored legal solutions.
            <br /><br />
            With an experienced team guided by ethics and transparency, we operate across multiple areas of law, always striving for innovative approaches.
            <br /><br />
            Whether it's conflict prevention, the protection of your rights, or business legal planning, we guarantee the legal assurance you’re after.
            </p>

            <div class="cards">
              <div class="card">
                <h3>Client Focused</h3>
                <p>
                  Our priority is to understand and meet our clients’ needs.
                </p>
              </div>

              <div class="card">
                <h3>EXCELLENCE</h3>
                <p>
                  We are committed to delivering excellence,
                  with dedication and attention to every detail.
                </p>
              </div>
            </div>

            <button class="contact-btn dark" onclick="goTo('contacts')">CONTACT US</button>
          </div>

          <img src="/home/about_image.jpg" alt="" class="about-image">

        </div>
      </section>
      <!-- Services Section -->

      <section class="services" id="services">
        <div class="services-messages">
          <div class="title">
            <p class="services-small-title">SERVICES</p>
            <h2 class="services-big-message"><span class="services-big-message white">TRUSTED </span>LEGAL SUPPORT,</h2>
            <h2 class="services-big-message">TAILORED TO YOUR NEEDS</h2>
          </div>
          <p class="services-message">We work to protect your interests, prevent conflicts, and drive the secure growth of your business.</p>
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
          <div class="text-titles">
            <span class="subtitle">TEAM</span>
            <h2 class="text-title">TRUST, RIGOR, AND <span class="yellow">COMMITMENT</span></h2>
          </div>
          <p class="yellow">More than just lawyers, we are partners in the decisions that shape your future.</p>
          <p>With diverse backgrounds and areas of expertise, our team combines technical knowledge with a strategic and human approach to the law.</p>
          <p>We work together to ensure solid, tailored solutions focused on real results.</p>
          <button class="contact-btn dark" onclick="goTo('team')">LEARN MORE</button>
        </div>
      </section>

      @include('en.footer')
    </div>

    <script src="/js/home.js" async defer></script>
    <script src="/js/nav.js" async defer></script>
  </body>
</html>
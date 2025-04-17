<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Contactos</title>

  <link rel="stylesheet" href="/css/contact.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/css/fonts.css">

</head>

<body>
  <div class="container">
    @include('navbar-fixed')
    <main class="main">
      <div class="cont-grid">
        <section class="contact-section">
          <div class="contact-grid">
            <div class="contact-left">
              <h1 class="title">Entre em contacto</h1>
              <div class="company-name">
                <span class="company-text">MEDINA MONTEIRO </span>
                <span class="company-text">BENSIMON </span>
                <span class="company-highlight">ADVOGADOS </span>
              </div>
              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d389.1629926956701!2d-9.13997387553408!3d38.710830268706246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spt!4v1744738483933!5m2!1sen!2spt"
                  width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
            <grid>
              <div class="contact-right">
                <div class="contact-info">
                  <div class="contact-item">
                    <div class="icon">
                      <img src="/icons/location.svg" alt="Location" />
                    </div>
                    <div class="info">
                      <h3>MORADA</h3>
                      <p>Rua Garrett, n.º 19, 2ºC<br>1200-203 Lisboa, Portugal</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <div class="icon">
                      <img src="/icons/mail.svg" alt="Email" />
                    </div>
                    <div class="info">
                      <h3>EMAIL</h3>
                      <a href="mailto:MMBADVOGADOS@GMAIL.COM">geral@mmba.pt</a>
                    </div>
                  </div>

                  <div class="contact-item">
                    <div class="icon">
                      <img src="/icons/phone.svg" alt="Phone" />
                    </div>
                    <div class="info">
                      <h3>TELEFONE</h3>
                      <p>(+351) 218 386 856</p>
                    </div>
                  </div>
                </div>
              </div>
            </grid>
          </div>
        </section>
      </div>
    </main>
  </div>
  @include("footer")
  <script src="/js/nav.js" async defer></script>
</body>

</html>
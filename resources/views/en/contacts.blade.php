<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Contacts</title>

  <link rel="stylesheet" href="/css/contact.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/css/fonts.css">

</head>

<body>
  <div class="container">
    @include('en.navbar-fixed')
    <main class="main">
      <div class="cont-grid">
        <section class="contac-section">
          <div class="contac-grid">
            <div class="contac-left">
              <p class="subtitle">CONTACTS</p>
              <h1 class="title">Contact Us</h1>
              <div class="company-name">
                <span class="company-text">MEDINA MONTEIRO </span>
                <span class="company-text">BENSIMON </span>
                <span class="company-highlight">ADVOGADOS </span>
              </div>
              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.328210089264!2d-9.139702388731006!3d38.7106259300787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193478d5482ec3%3A0x2138374e42d84c2!2sR.%20Garrett%2019%2C%201200-092%20Lisboa!5e0!3m2!1sen!2spt!4v1744887177185!5m2!1sen!2spt"
                  width="860" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <grid>
              <div class="contac-right">
                <div class="contac-info">
                  <div class="contac-item">
                    <div class="icon">
                      <img src="/icons/location.svg" alt="Location" />
                    </div>
                    <div class="info">
                      <h3>ADDRESS</h3>
                      <p>Rua Garrett, n.º 19, 2ºC<br>1200-203 Lisboa, Portugal</p>
                    </div>
                  </div>

                  <div class="contac-item">
                    <div class="icon">
                      <img src="/icons/mail.svg" alt="Email" />
                    </div>
                    <div class="info">
                      <h3>EMAIL</h3>
                      <a href="mailto:MMBADVOGADOS@GMAIL.COM">geral@mmba.pt</a>
                    </div>
                  </div>

                  <div class="contac-item">
                    <div class="icon">
                      <img src="/icons/phone.svg" alt="Phone" />
                    </div>
                    <div class="info">
                      <h3>PHONE NUMBER</h3>
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
  @include("en.footer")
  <script src="/js/nav.js" async defer></script>
</body>

</html>
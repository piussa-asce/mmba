<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Equipa MMBA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:800,600,500,400,700|Inter:600" rel="stylesheet">
    <link rel="stylesheet" href="/css/people.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer-dark.css">
</head>

<body>
    <div class="container">
        @include('en.navbar')

        <!-- Hero Section -->
        <section class="hero-section">
            <h3>TEAM</h3>
            <div class="hero">
                <div class="hero-title">
                    <h1>
                        <span>UNITED BY </span>
                        <span class="highlight">EXCELLENCE</span>,<br>
                        <span>COMMITTED TO SUCCESS.</span>
                    </h1>
                </div>
                <div class="hero-quote">
                    <p>
                        "Our team is made up of experienced and 
                        dedicated professionals who work together to 
                        provide effective and innovative legal solutions. 
                        We believe that excellence comes from teamwork 
                        and our commitment to our clients."
                    </p>
                </div>
            </div>
        </section>

        <section id="people">

        </section>

        @include('en.footer-dark')
    </div>
    <script src="/js/people.js" async defer></script>
    <script src="/js/nav.js" async defer></script>
</body>

</html>
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
        @include('pt.navbar')

        <!-- Hero Section -->
        <section class="hero-section">
            <h3>EQUIPA</h3>
            <div class="hero">
                <div class="hero-title">
                    <h1>
                        <span>UNIDOS PELA </span>
                        <span class="highlight">EXCELÊNCIA</span>,<br>
                        <span>COMPROMETIDOS COM O SUCESSO.</span>
                    </h1>
                </div>
                <div class="hero-quote">
                    <p>
                        "A nossa equipa é formada por profissionais experientes e
                        dedicados, que trabalham em conjunto para oferecer
                        soluções jurídicas eficazes e inovadoras. Acreditamos que a
                        excelência vem do trabalho em equipa e do compromisso com os
                        nossos clientes."
                    </p>
                </div>
            </div>
        </section>

        <section id="people">

        </section>

        @include('pt.footer-dark')
    </div>
    <script src="/js/people.js" async defer></script>
    <script src="/js/nav.js" async defer></script>
</body>

</html>
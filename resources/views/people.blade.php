<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:800,600,500,400,700|Inter:600" rel="stylesheet">
        <link rel="stylesheet" href="/css/people.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/footer-dark.css">
    </head>
    <body>
        @include('navbar')
        <!-- Page Title -->
        <div class="page-title">
          <h1>EQUIPA</h1>
        </div>

        <!-- Hero Section -->
        <section class="hero-section">
          <div class="hero-title">
            <h2>
              <span>UNIDOS PELA </span>
              <span class="highlight">EXCELÊNCIA</span>
              <span>COMPROMETIDOS COM O SUCESSO.</span>
            </h2>
          </div>
          <div class="hero-quote">
            <p>
              "A NOSSA EQUIPA É FORMADA POR PROFISSIONAIS EXPERIENTES E
              DEDICADOS, QUE TRABALHAM EM CONJUNTO PARA OFERECER
              SOLUÇÕES JURÍDICAS EFICAZES E INOVADORAS. ACREDITAMOS QUE A
              EXCELÊNCIA VEM DO TRABALHO COLABORATIVO E DO COMPROMISSO COM OS
              NOSSOS CLIENTES."
            </p>
          </div>
        </section>

        <section id="people">

        </section>

        @include('footer-dark')

        <script>
            const teamMembers = [
                {
                    id: 1,
                    name: "Bruno Medina Monteiro",
                    title: "OF COUNSEL, LISBON",
                    description:
                    "O advogado iniciou o seu percurso profissional há 20 anos, e integrou a AFMA em 2023.\nTem desenvolvido diferentes competências e experiência em áreas como o Direito Administrativo, Contratação Pública, Empreitadas Públicas e Privadas, Arbitragens e Direito Imobiliário.",
                    quote:
                    '"Um advogado é um defensor incansável da justiça, comprometido em proteger os direitos dos seus clientes com dedicação e integridade."',
                    image: "/people/image-6.png",
                    imagePosition: "left",
                },
                {
                    id: 2,
                    name: "Dafne Bensimon",
                    title: "OF COUNSEL, LISBON",
                    description:
                    "O advogado iniciou o seu percurso profissional há 20 anos, e integrou a AFMA em 2023.\nTem desenvolvido diferentes competências e experiência em áreas como o Direito Administrativo, Contratação Pública, Empreitadas Públicas e Privadas, Arbitragens e Direito Imobiliário.",
                    quote:
                    '"Um advogado é um defensor incansável da justiça, comprometido em proteger os direitos dos seus clientes com dedicação e integridade."',
                    image: "/people/image-7.png",
                    imagePosition: "right",
                },
                {
                    id: 3,
                    name: "Tomás da Silva Freitas",
                    title: "OF COUNSEL, LISBON",
                    description:
                    "O advogado iniciou o seu percurso profissional há 20 anos, e integrou a AFMA em 2023.\nTem desenvolvido diferentes competências e experiência em áreas como o Direito Administrativo, Contratação Pública, Empreitadas Públicas e Privadas, Arbitragens e Direito Imobiliário.",
                    quote:
                    '"Um advogado é um defensor incansável da justiça, comprometido em proteger os direitos dos seus clientes com dedicação e integridade."',
                    image: "/people/image-8.png",
                    imagePosition: "left",
                },
                {
                    id: 4,
                    name: "André da Silva Freitas",
                    title: "OF COUNSEL, LISBON",
                    description:
                    "O advogado iniciou o seu percurso profissional há 20 anos, e integrou a AFMA em 2023.\nTem desenvolvido diferentes competências e experiência em áreas como o Direito Administrativo, Contratação Pública, Empreitadas Públicas e Privadas, Arbitragens e Direito Imobiliário.",
                    quote:
                    '"Um advogado é um defensor incansável da justiça, comprometido em proteger os direitos dos seus clientes com dedicação e integridade."',
                    image: "/people/image-9.png",
                    imagePosition: "right",
                },
            ];

            function goTo(id) {
                document.getElementById(id).scrollIntoView({behavior: 'smooth'});
            }

            window.addEventListener('scroll', () => {
                if (window.scrollY > 240) navbar.style.backgroundColor = '#000';
                else navbar.style.background = 'none';
            });

            document.addEventListener('DOMContentLoaded', () => {
                populateTeam();
            });

            function populateTeam() {
                const people = document.getElementById('people');
                
                teamMembers.forEach(member => {
                    const teamCard = document.createElement('div');
                    teamCard.className = 'team-card';
                    if (member.id %2 == 1 || window.innerWidth < 768) {
                        teamCard.innerHTML = `
                            <div class="team-content ${member.imagePosition}">
                                <img
                                    class="member-image"
                                    alt="${member.name}"
                                    src="${member.image}"
                                />
                                <div class="member-info">
                                    <h3>${member.name}</h3>
                                    <p class="member-title">${member.title}</p>
                                    <p class="member-description">${member.description}</p>
                                    <hr class="separator" />
                                    <p class="member-quote">${member.quote}</p>
                                </div>
                            </div>
                        `;
                    } else {
                        teamCard.innerHTML = `
                            <div class="team-content ${member.imagePosition}">
                                <div class="member-info">
                                    <h3>${member.name}</h3>
                                    <p class="member-title">${member.title}</p>
                                    <p class="member-description">${member.description}</p>
                                    <hr class="separator" />
                                    <p class="member-quote">${member.quote}</p>
                                </div>
                                <img
                                    class="member-image"
                                    alt="${member.name}"
                                    src="${member.image}"
                                />
                            </div>
                        `;
                    }
                    
                    people.appendChild(teamCard);
                });
            }
            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) navbar.style.backgroundColor = '#000';
                else navbar.style.background = 'none';
            });

        </script>
    </body>
</html>
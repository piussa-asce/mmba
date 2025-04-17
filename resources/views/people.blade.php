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
        @include('navbar')

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

        @include('footer-dark')
    </div>

    <script>
        const teamMembers = [
            {
                id: 1,
                name: "Bruno Medina Monteiro",
                title: "Advogado",
                description:
                    "O advogado iniciou o seu percurso profissional há mais de 20 anos, tendo fundado a MMBA em 2025 após uma sólida experiência em várias sociedades de advogados. Desenvolve a sua prática sobretudo nas áreas de Direito Administrativo, Contratação Pública, Empreitadas Públicas e Privadas, Arbitragens e Direito Imobiliário.",
                quote:
                    '"Um advogado é um defensor incansável da justiça, comprometido em proteger os direitos dos seus clientes com dedicação e integridade."',
                image: "/people/image-bruno-people.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/bruno-medina-monteiro-5817688a/",
                cv: "###########",
            },
            {
                id: 2,
                name: "Dafne Bensimon",
                title: "Advogada",
                description:
                    "Advogada com um percurso marcado por uma prática consistente e internacional, fundou a MMBA em 2025. Tem experiência consolidada em Direito Imobiliário, Direito dos Estrangeiros, Nacionalidade e Direito Administrativo. Acompanha de perto transações e projetos imobiliários de distintas naturezas, com uma abordagem cuidadosa e eficaz.",
                quote:
                    '"A advocacia é o equilíbrio entre o rigor técnico e a empatia humana — é nisso que reside a verdadeira excelência."',
                image: "/people/image-dafne-people.png",
                imagePosition: "right",
                linkedin: "https://www.linkedin.com/in/dafne-bensimon-0453111aa/",
                cv: "#",
            },
            {
                id: 3,
                name: "Tomás da Silva Freitas",
                title: "Advogado",
                description:
                    "Licenciado em Direito e com formação avançada em Corporate Finance, iniciou a sua prática na advocacia em 2023. Colabora com a MMBA com especial enfoque nas áreas de Direito Societário, Direito Comercial e Direito Penal, trazendo uma abordagem analítica e determinada aos desafios jurídicos.",
                quote:
                    '"Na advocacia, conhecimento é poder — mas é a coragem em agir que verdadeiramente transforma."',
                image: "/people/image-8.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/tom%C3%A1s-da-silva-freitas-144a5b221/",
                cv: "#",
            },
            {
                id: 4,
                name: "André da Silva Freitas",
                title: "Advogado",
                description:
                    "Advogado desde 2024, com formação pela Faculdade de Direito da Universidade de Lisboa. Traz para a MMBA uma prática focada no Direito Civil e no Direito da Família e Sucessões, exercendo com rigor, proximidade e profundo respeito pelas dimensões humanas de cada caso.",
                quote:
                    '"Ser advogado é escutar com atenção, aconselhar com sabedoria e agir com justiça."',
                image: "/people/image-andre-people.png",
                imagePosition: "right",
                linkedin: "https://www.linkedin.com/in/andr%C3%A9-silva-freitas-7339b62b1/",
                cv: "#",
            },
            {
                id: 5,
                name: "Inês Kol de Carvalho",
                title: "Advogada",
                description:
                    "Com uma carreira marcada pela versatilidade e experiência multidisciplinar, Inês integrou a MMBA em 2025. Desenvolve a sua prática nas áreas de Direito Imobiliário, Contencioso Civil, Direito dos Estrangeiros, Direito da Família e Nacionalidade, acompanhando com rigor técnico diversas transações e processos complexos.",
                quote:
                    '"Na prática jurídica, cada detalhe conta — é na atenção ao pormenor que reside a confiança e a segurança do cliente."',
                image: "/people/image-ines-people.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/in%C3%AAskoldecarvalho/",
                cv: "#",
            },
            {
                id: 6,
                name: "Margarida Barros",
                title: "Assistente Administrativa",
                description:
                    "Responsável pelos serviços administrativos e recursos humanos. Integrou a equipa de advogados em 2017, assumindo desde então um papel fundamental no apoio à gestão interna e ao bom funcionamento do escritório.",
                quote:
                    '',
                image: "/people/image-margarida-people.png",
                imagePosition: "right",
                linkedin: "#",
                cv: "#",
            },
        ];

        document.addEventListener('DOMContentLoaded', () => {
            populateTeam();
        });

        function populateTeam() {
            const people = document.getElementById('people');

            teamMembers.forEach(member => {
                const teamCard = document.createElement('div');
                teamCard.className = 'team-card';

                if (member.id == 6 && window.innerWidth > 768) {
                    teamCard.innerHTML = `
                        <div class="team-content ${member.imagePosition}">
                            <div class="member-info">
                                <h2>${member.name}</h2>
                                <p class="member-title">${member.title}</p>
                                <p class="member-description">${member.description}</p>
                                ${member.quote ? `
                                    <hr class="line" />
                                    <p class="member-quote">${member.quote}</p>
                                ` : ''}
                            </div>
                            <img
                                class="member-image"
                                alt="${member.name}"
                                src="${member.image}"
                            />
                        </div>
                    `;
                } 
                else if (member.id == 6 && window.innerWidth <= 768) {
                    teamCard.innerHTML = `
                        <div class="team-content ${member.imagePosition}">
                            <img
                                class="member-image"
                                alt="${member.name}"
                                src="${member.image}"
                            />
                            <div class="member-info">
                                <h2>${member.name}</h2>
                                <p class="member-title">${member.title}</p>
                                <p class="member-description">${member.description}</p>
                                ${member.quote ? `
                                    <hr class="line" />
                                    <p class="member-quote">${member.quote}</p>
                                ` : ''}
                            </div>
                        </div>
                    `;
                }
                else if (member.id % 2 === 1 || window.innerWidth <= 768) {
                    teamCard.innerHTML = `
                        <div class="team-content ${member.imagePosition}">
                            <img
                                class="member-image"
                                alt="${member.name}"
                                src="${member.image}"
                            />
                            <div class="member-info">
                                <h2>${member.name}</h2>
                                <p class="member-title">${member.title}</p>
                                <p class="member-description">${member.description}</p>
                                ${member.quote ? `
                                    <hr class="line" />
                                    <p class="member-quote">${member.quote}</p>
                                ` : ''}
                                <div class="social-links">
                                    <a href="${member.linkedin}" target="_blank" rel="noopener noreferrer">
                                        <img class="social-link" src="/icons/linkedin.svg" alt="LinkedIn" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                    /* 
                    <a href="${member.cv}" target="_blank" rel="noopener noreferrer">
                                        <img class="social-link" src="/icons/cv.svg" alt="CV" />
                                    </a>
                    */
                } else {
                    teamCard.innerHTML = `
                        <div class="team-content ${member.imagePosition}">
                            <div class="member-info">
                                <h2>${member.name}</h2>
                                <p class="member-title">${member.title}</p>
                                <p class="member-description">${member.description}</p>
                                ${member.quote ? `
                                    <hr class="line" />
                                    <p class="member-quote">${member.quote}</p>
                                ` : ''}
                                <div class="social-links">
                                    <a href="${member.linkedin}" target="_blank" rel="noopener noreferrer">
                                        <img class="social-link" src="/icons/linkedin.svg" alt="LinkedIn" />
                                    </a>
                                </div>
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
    </script>
    <script src="/js/nav.js" async defer></script>
</body>

</html>
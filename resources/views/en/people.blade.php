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

    <script>
        const teamMembers = [
            {
                id: 1,
                name: "Bruno Medina Monteiro",
                title: "Lawyer",
                description:
                    "The lawyer began his professional career over 20 years ago, founding MMBA in 2025 after gaining solid experience in several law firms. He primarily focuses on the areas of Administrative Law, Public Procurement, Public and Private Contracts, Arbitration, and Real Estate Law.",
                quote:
                    '"A lawyer is an unwavering defender of justice, committed to protecting the rights of their clients with dedication and integrity."',
                image: "/people/image-bruno-people.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/bruno-medina-monteiro-5817688a/",
                cv: "###########",
            },
            {
                id: 2,
                name: "Dafne Bensimon",
                title: "Lawyer",
                description:
                    "A lawyer with a career marked by consistent and international practice, she founded MMBA in 2025. She has solid experience in Real Estate Law, Immigration Law, Nationality, and Administrative Law. She closely monitors various real estate transactions and projects, with a careful and effective approach.",
                quote:
                    '"Law is the balance between technical rigor and human empathy — this is where true excellence lies."',
                image: "/people/image-dafne-people.png",
                imagePosition: "right",
                linkedin: "https://www.linkedin.com/in/dafne-bensimon-0453111aa/",
                cv: "#",
            },
            {
                id: 3,
                name: "Inês Kol de Carvalho",
                title: "Lawyer",
                description:
                    "With a career marked by versatility and multidisciplinary experience, Inês joined MMBA in 2025. She develops her practice in the areas of Real Estate Law, Civil Litigation, Immigration Law, Family Law, and Nationality, closely overseeing various transactions and complex cases with technical precision.",
                quote:
                    '"In legal practice, every detail matters — it is in the attention to detail that the trust and security of the client reside."',
                image: "/people/image-ines-people.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/in%C3%AAskoldecarvalho/",
                cv: "#",
            },
            {
                id: 4,
                name: "Tomás da Silva Freitas",
                title: "Lawyer",
                description:
                    "With a degree in Law and advanced training in Corporate Finance, he began practicing law in 2023. He collaborates with MMBA, with a particular focus on Corporate Law, Commercial Law, and Criminal Law, bringing an analytical and determined approach to legal challenges.",
                quote:
                    '"In law, knowledge is power — but it is the courage to act that truly transforms."',
                image: "/people/image-8.png",
                imagePosition: "right",
                linkedin: "https://www.linkedin.com/in/tom%C3%A1s-da-silva-freitas-144a5b221/",
                cv: "#",
            },
            {
                id: 5,
                name: "André da Silva Freitas",
                title: "Lawyer",
                description:
                    "A lawyer since 2024, with a degree from the Faculty of Law of the University of Lisbon. He brings to MMBA a practice focused on Civil Law and Family and Inheritance Law, working with precision, closeness, and deep respect for the human aspects of each case.",
                quote:
                    '"Being a lawyer is about listening attentively, advising wisely, and acting with justice."',
                image: "/people/image-andre-people.png",
                imagePosition: "left",
                linkedin: "https://www.linkedin.com/in/andr%C3%A9-silva-freitas-7339b62b1/",
                cv: "#",
            },
            {
                id: 6,
                name: "Margarida Barros",
                title: "Administrative Assistant",
                description:
                    "Responsible for administrative services and human resources. She joined the team of lawyers in 2017, playing a key role in supporting internal management and the smooth operation of the office since then.",
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

                if (member.id == 6 && window.innerWidth > 1200) {
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
                else if (member.id == 6 && window.innerWidth <= 1200) {
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
                else if (member.id % 2 === 1 || window.innerWidth <= 1200) {
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
const services = [
{
    title: "DIREITO COMERCIAL",
    icon: "/svg/home/comercial.svg",
},
{
    title: "DIREITO ADMINISTRATIVO",
    icon: "/svg/home/direito_administrativo.svg",
},
{
    title: "ARBITRAGEM",
    icon: "/svg/home/arbitragem.svg",
},
{
    title: "DIREITO IMOBILIÁRIO",
    icon: "/svg/home/imobiliario.svg",
},
{
    title: "DIREITO CIVIL",
    icon: "/svg/home/civil.svg",
},
{
    title: "DIREITO DO TRABALHO",
    icon: "/svg/home/direito_trabalho.svg",
},
{
    title: "DIREITO PENAL",
    icon: "/svg/home/penal.svg",
},
{
    title: "CONTRATAÇÃO PÚBLICA",
    icon: "/svg/home/contratacao_publica.svg",
},
{
    title: "DIREITO SOCIETÁRIO",
    icon: "/svg/home/societario.svg",
},
{
    title: "DIREITO DE APOIO À INTEGRAÇÃO DE ESTRANGEIROS",
    icon: "/svg/home/integracao.svg",
},
{
    title: "DIREITO DA FAMÍLIA E SUCESSÕES",
    icon: "/svg/home/familia.svg",
},
{
    title: "DIREITO DO TURISMO",
    icon: "/svg/home/turismo.svg",
}
];

// Populate services grid
function populateServices() {
    const servicesGrid = document.getElementById('services-cards');
    
    services.forEach(service => {
        const serviceItem = document.createElement('div');
        serviceItem.className = 'services-card';
        
        serviceItem.innerHTML = `
        <img src="${service.icon}" alt="${service.alt}" class="service-image" />
        <p class="service-title">${service.title}</p>
        `;
        
        servicesGrid.appendChild(serviceItem);
    });
}

populateServices();

// carousel

const track = document.getElementById('services-cards');
let indicators = document.getElementById('indicators');
const arrowRight = document.querySelector(".arrow.right"); 
const arrowLeft = document.querySelector(".arrow.left"); 
const itemsPerSlide = 8; // 4 columns x 2 rows
const totalItems = 12;
const columnsPerSlide = 4;
const columnWidth = 300; // item + gap
let currentColumn = 0;

// Setup indicators
let totalSlides = Math.ceil(totalItems / columnsPerSlide);
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('span');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => goToSlide(i));
    indicators.appendChild(dot);
}

function getItemsPerSlide() {
    const containerWidth = track.parentElement.offsetWidth;
    const itemWidth = 300; // or get this dynamically if needed
    return Math.floor(containerWidth / itemWidth);
}

const updateIndicators = () => {
    indicators.querySelectorAll('span').forEach((dot, i) => {
      dot.classList.toggle('active', i === currentColumn);
    });
};

const goToSlide = (index) => {
    currentColumn = index;
    let offset;
    if (window.innerWidth <= 540) {
        offset = -index * 215;
    }
    else if (window.innerWidth <= 768) {
        offset = -index * 375;
    }
    else if (window.innerWidth <= 1503) {
        offset = -index * 600;
    }
    else {
        offset = -index * columnWidth;
    }
    track.style.transform = `translateX(${offset}px)`;
    updateIndicators();
};

document.querySelector('.arrow.left').addEventListener('click', () => {
    currentColumn = Math.max(0, currentColumn - 1);
    goToSlide(currentColumn);
    console.log(currentColumn);
});

document.querySelector('.arrow.right').addEventListener('click', () => {
    currentColumn = Math.min(totalSlides - 1, currentColumn + 1);
    goToSlide(currentColumn);
    console.log(currentColumn);
});

// Drag setup
let startX = 0;
let currentX = 0;
let isDragging = false;
track.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX;
    track.style.transition = 'none';
});

document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    currentX = e.pageX;
    const deltaX = currentX - startX;
    track.style.transform = `translateX(${(-currentColumn * columnsPerSlide * columnWidth) + deltaX}px)`;
});

document.addEventListener('mouseup', (e) => {
    if (!isDragging) return;
    isDragging = false;
    const deltaX = e.pageX - startX;
    if (deltaX < -100 && currentColumn < totalSlides - 1) {
        currentColumn++;
    } else if (deltaX > 100 && currentColumn > 0) {
        currentColumn--;
    }
    goToSlide(currentColumn);
    track.style.transition = 'transform 0.3s ease';
});
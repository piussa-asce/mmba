const navEl = document.getElementById('navbar');
const subMenu = document.getElementById('submenu');
const subMenuLogo = document.getElementById('sub-menu-logo');
const navLinks = document.getElementById('nav-links');
const logo = document.getElementById('logo');
const lang = document.getElementById('lang');

if (window.scrollY > 5) {
    navEl.classList.add('navbar-scroll');
    navLinks.style.color = 'black';
    lang.style.color = "black";
    logo.src = "/svg/logo-black.svg";
    subMenuLogo.src = "/svg/burger-black.svg";
}

window.addEventListener('scroll', () => {
    let path = window.location.pathname;
    if (path.startsWith("/privacy") || path.startsWith("/terms") || path.startsWith("/contacts")) return;
    if (window.scrollY > 5) {
        navEl.classList.add('navbar-scroll');
        navLinks.style.color = 'black';
        lang.style.color = "black";
        logo.src = "/svg/logo-black.svg";
        subMenuLogo.src = "/svg/burger-black.svg";
    }
    else {
        navEl.classList.remove('navbar-scroll');
        navLinks.style.color = 'white';
        lang.style.color = "white";
        logo.src = "/svg/logo-white.svg";
        subMenuLogo.src = "/svg/burger.svg";
        
    }
});

function toggleSubMenu(open) {
    open ? subMenu.style.display = 'flex' : subMenu.style.display = 'none';
}

function getLanguage() {
    return location.pathname.split("/").slice(-1) == "en" ? "EN" : "PT";
}

function goTo(id) {
    let path = window.location.pathname;
    let currentLang = getLanguage();
    if (id == "#about") {
        if (path != "/" && path != "/en") window.location.href = currentLang == "EN" ? "/en#about" : "/#about";
        document.getElementById("about").scrollIntoView({behavior: 'smooth'});
    }
    if (id == "#services") {
        if (path != "/" && path != "/en") window.location.href = currentLang == "EN" ? "/en#services" : "/#services";
        document.getElementById("services").scrollIntoView({behavior: 'smooth'});
    }  
    if (id == "logo") {
        if (path != "/" && path != "/en") window.location.href = currentLang == "EN" ? "/en" : "/";
        else document.getElementById("hero").scrollIntoView({behavior: 'smooth'});  
    }
    if (id == "team") window.location.href = currentLang == "EN" ? "/team/en" : "/team";
    if (id == "contacts") window.location.href = currentLang == "EN" ? "/contacts/en" : "/contacts";
    if (subMenu.style.display == 'flex') subMenu.style.display = 'none';
}

function toggleLanguage() {
    let lang = getLanguage();
    let newLang = lang == "PT" ? "EN" : "PT";
    // if services or about us is involved
    let hash = location.href.split('#').pop();
    if (hash == "about" || hash == "services") {
        if (newLang == "EN") location.href = "/en";
        if (newLang == "PT") location.href = "/";
        return;
    }
    // other
    if (location.href.slice(-1) == "/") {
        if (newLang == "EN") location.href += "en"
        else location.href = location.href.slice(0, -3);
        return;
    } else {
        if (newLang == "EN") location.href = location.href + "/en"
        else location.href = location.href.slice(0, -2);
    }
}
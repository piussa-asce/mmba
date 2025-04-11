const navEl = document.getElementById('navbar');
const subMenu = document.getElementById('submenu');
const navLinks = document.getElementById('nav-links');
const logo = document.getElementById('logo');

if (window.scrollY > 30) {
    navEl.classList.add('navbar-scroll');
}

window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
        navEl.classList.add('navbar-scroll');
        navLinks.style.color = "black";
        logo.src = "svg/logo-black.svg"
    }
    else {
        navEl.classList.remove('navbar-scroll');
        navLinks.style.color = "white";
        logo.src = "/svg/logo-white.svg"
    }
});

function toggleSubMenu(open) {
    open ? subMenu.style.display = 'flex' : subMenu.style.display = 'none';
}

function goTo(id) {
    if (id == "#about") {
        if (window.location.pathname != "/") window.location.href = "/#about";
        document.getElementById("about").scrollIntoView({behavior: 'smooth'});
    }
    if (id == "#services") {
        if (window.location.pathname != "/") window.location.href = "/#services";
        document.getElementById("services").scrollIntoView({behavior: 'smooth'});
    }  
    if (id == "logo") {
        console.log(window.location.pathname);
        if (window.location.pathname != "/") window.location.href = "/";
        else document.getElementById("hero").scrollIntoView({behavior: 'smooth'});  
    }
    if (id == "team") window.location.href = "/team";
    if (id == "contacts") window.location.href = "/contacts";   
    if (id == "services") window.location.href = "/services";   
    if (subMenu.style.display == 'flex') subMenu.style.display = 'none';
}

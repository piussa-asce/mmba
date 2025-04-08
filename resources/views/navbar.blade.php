<section id="navbar" class="">
    <nav>
        <img class="logo" alt="MMBA Logo" src="logo.png" onclick="goTo('logo')"/>
        <img class="sub-menu-logo" src="/burger.svg" onclick="toggleSubMenu(true)"/> <!-- appears after 1000px -->
        <div class="nav-links">
            <a class="nav-link" onclick="goTo('#about')">SOBRE NÓS</a>
            <a class="nav-link" onclick="goTo('team')">EQUIPA</a>
            <a class="nav-link" onclick="goTo('#services')">SERVIÇOS</a>
            <button class="contact-btn" onclick="goTo('contacts')">CONTACTOS</button>
        </div>
        <div id="submenu" class="sub-menu">
            <img src="/svg/back.svg" height=50 width=50 alt="" class="back" onclick="toggleSubMenu(false)">
            <img src="/logo-black.png" height=60 width=350 alt="" onclick="goTo('logo')">
            <div class="submenu-button" onclick="goTo('#about')">SOBRE NÓS</div>
            <div class="submenu-button" onclick="goTo('team')">EQUIPA</div>
            <div class="submenu-button" onclick="goTo('#services')">SERVIÇOS</div>
            <div class="submenu-button" onclick="goTo('contacts')">CONTACTOS</div>
        </div>
    </nav>
</section>
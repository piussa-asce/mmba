<section id="navbar" class="navbar-scroll">
    <nav>
        <img id="logo" class="logo" alt="MMBA Logo" src="/svg/logo-black.svg" onclick="goTo('logo')"/>
        <img class="sub-menu-logo" src="/burger.svg" onclick="toggleSubMenu(true)"/> <!-- appears after 62.5rem -->
        <div class="nav-links" style="color: white;" id="nav-links">
            <a class="nav-link" onclick="goTo('#about')">SOBRE NÓS</a>
            <a class="nav-link" onclick="goTo('team')">EQUIPA</a>
            <a class="nav-link" onclick="goTo('#services')">SERVIÇOS</a>
            <a class="nav-link bold" onclick="goTo('contacts')">CONTACTOS</a>
            <img src="/svg/sep.svg" width="10" alt="sep">
            <div id="lang" onclick="toggleLanguage()" style="color:white;">PT</div>
        </div>
        <div id="submenu" class="sub-menu">
            <img src="/svg/back.svg" height=50 width=50 alt="" class="back" onclick="toggleSubMenu(false)">
            <img src="/svg/logo-black.svg" height=60 width=350 alt="" onclick="goTo('logo')">
            <div class="submenu-button" onclick="goTo('#about')">SOBRE NÓS</div>
            <div class="submenu-button" onclick="goTo('team')">EQUIPA</div>
            <div class="submenu-button" onclick="goTo('#services')">SERVIÇOS</div>
            <div class="submenu-button" onclick="goTo('contacts')">CONTACTOS</div>
            <div id="submenu-lang" onclick="toggleLanguage()">PT</div>
        </div>
    </nav>
</section>
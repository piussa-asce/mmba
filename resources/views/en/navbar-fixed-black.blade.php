<section id="navbar" class="navbar-scroll">
    <nav>
        <img id="logo" class="logo" alt="MMBA Logo" src="/svg/logo-black.svg" onclick="goTo('logo')"/>
        <img class="sub-menu-logo" src="/burger.svg" onclick="toggleSubMenu(true)"/> <!-- appears after 62.5rem -->
        <div class="nav-links" style="color: white;" id="nav-links">
            <a class="nav-link" onclick="goTo('#about')">ABOUT US</a>
            <a class="nav-link" onclick="goTo('team')">TEAM</a>
            <a class="nav-link" onclick="goTo('#services')">SERVICES</a>
            <a class="nav-link bold" onclick="goTo('contacts')">CONTACTS</a>
        </div>
        <div id="submenu" class="sub-menu">
            <img src="/svg/back.svg" height=50 width=50 alt="" class="back" onclick="toggleSubMenu(false)">
            <img src="/svg/logo-black.svg" height=60 width=350 alt="" onclick="goTo('logo')">
            <div class="submenu-button" onclick="goTo('#about')">ABOUT US</div>
            <div class="submenu-button" onclick="goTo('team')">TEAM</div>
            <div class="submenu-button" onclick="goTo('#services')">SERVICES</div>
            <div class="submenu-button" onclick="goTo('contacts')">CONTACTS</div>
        </div>
    </nav>
</section>
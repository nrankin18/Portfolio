<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header class="main-header">
    <img class="icon" src="img/icon.png">
    <nav class="nav">
        <ul id="nav-ul">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="index.php#experience">Experience</a></li>
            <li class="icon-spacer"></li>
            <li class="nav-item"><a href="aviation.php">Aviation</a></li>
            <li class="nav-item"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <nav class="nav-mobile">
        <ul id="nav-ul-mobile">
            <li class="mobile-nav-item"><a href="index.php">Home</a></li>
            <li class="mobile-nav-item"><a href="index.php#experience">Experience</a></li>
            <li class="mobile-nav-item"><a href="aviation.php">Aviation</a></li>
            <li class="mobile-nav-item"><a href="contact.php">Contact</a></li>
            <li class="mobile-nav-menu"><a onclick="showMobileNav()" href="#"><i class="fa fa-bars"></i></a></li>
        </ul>
    </nav>
</header>

<script>
    var menuShown = false;
    function showMobileNav() {
        var menu = document.getElementById('mobile-nav-menu');
        var menuUl = document.getElementById('nav-ul-mobile');
        var navItems = document.getElementsByClassName("mobile-nav-item");

        if (!menuShown) {
            for (var i = 0; i < navItems.length; i++) {
                navItems[i].style.display = "inline";
                menuShown = true;
                menuUl.style.padding= "110px 0 0 0";
            }
        } else {
            for (var i = 0; i < navItems.length; i++) {
                navItems[i].style.display = "none";
                menuShown = false;
                menuUl.style.padding= "0";
            }
        }
    }
</script>
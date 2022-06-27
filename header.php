<head>
    <link rel="stylesheet" href="/css/header.css">
</head>
<header>
    <div class="left-menu">
        <a href="/acces_au_cabinet/"><div>Accès au cabinet</div></a>
        <a href="/a_propos_de_moi/"><div>A propos de moi</div></a>
        <!-- <a href="/nous_contacter/"><div>Me contacter</div></a> -->
    </div>
    <a href="/" class="logo"><img class="img" src="/assets/img/Logo.svg" alt="logo" height="100%" width="100%"></a>
    <div class="right-menu">
        <a href="/que_faisons_nous/"><div>Que faisons nous ?</div></a>
        <!-- <a href="/historique_osteo/"><div>Historique</div></a> -->
        <a href="/questions/"><div>Vos questions</div></a>
    </div>
    
</header>
<script>
    var lastScrollTop = 0;
    window.addEventListener("scroll", function(){
        if (scrollY > 2) {
            document.querySelector("header").classList.add("scrolled");
        }
        else{
            document.querySelector("header").classList.remove("scrolled");
        }
        
        // détécter le sens du scroll et changer la classe du header
        var st = window.pageYOffset || document.documentElement.scrollTop;
        if (st > lastScrollTop){
            document.querySelector("header").classList.add("scrolled-down");
        } else {
            document.querySelector("header").classList.remove("scrolled-down");
        }
        lastScrollTop = st;
    });
</script>
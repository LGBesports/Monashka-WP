<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?v=2">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media.css?v=4">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/site.webmanifest">
    <script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92710237, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92710237" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body>
<div id="smooth-wrapper">
    <div id="smooth-content">
    <header class="header">
        <div class="container-wrap">
            <div class="container-h">
                <div class="wrap">
                    <nav class="nav">
                        <ul>
                            <li><a href="/">Главная</a> </li>
                            <li><a href="<?php echo get_template_directory_uri() ?>/monashka.html">Monashka</a></li>
                            <li><a href="<?php echo get_template_directory_uri() ?>/gorilla.html">Gorilla</a></li>
                            <li><a href="<?php echo get_template_directory_uri() ?>/mason.html">Masons</a></li>
                            <li><a href="<?php echo get_template_directory_uri() ?>/sertificates.html">Сертификаты</a></li>
                            <li><a class="active-nav" href="/blog/">Блог</a></li>
                        </ul>
                    </nav>
                    <div class="header__age">
                        18<span>+</span>
                    </div>
                    <div class="header__social">
                        <a href="https://instagram.com/monashkaglk?igshid=YmMyMTA2M2Y="><img class="inst" src="<?php echo get_template_directory_uri() ?>/img/inst.svg" alt=""></a>
                        <a href="https://t.me/Monashka_GIK"><img class="tg" src="<?php echo get_template_directory_uri() ?>/img/tg.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>


    </header>
    <header class="header-mob">
        <div class="open">
            <img src="<?php echo get_template_directory_uri() ?>/img/header-mob.svg" alt="">
        </div>
        
        <div class="menu">
            <img class="close" src="<?php echo get_template_directory_uri() ?>/img/Close.webp" alt="">
            <nav>
                <ul>
                    <li><a class="full" href="/"></a> <a class="closing" href="/">Главная</a></li>
                    <li><a class="full" href="<?php echo get_template_directory_uri() ?>/monashka.html"></a> <a class="closing" href="/monashka.html">Monashka</a>
                    </li>
                    <li><a class="full" href="<?php echo get_template_directory_uri() ?>/gorilla.html"></a> <a class="closing" href="/gorilla.html">Gorilla</a>
                    </li>
                    <li><a class="full" href="<?php echo get_template_directory_uri() ?>/mason.html"></a> <a class="closing" href="/mason.html">Masons</a></li>
                    <li><a class="full" href="<?php echo get_template_directory_uri() ?>/sertificates.html"></a> <a class="closing" href="<?php echo get_template_directory_uri() ?>/sertificates.html">Сертификаты</a></li>
                    <li><a class="full" href="/blog/"></a> <a class="closing" href="/blog/">Блог</a></li>

                </ul>
                <div class="social">
                    <a href="https://instagram.com/monashkaglk?igshid=YmMyMTA2M2Y=">
                        <img src="<?php echo get_template_directory_uri() ?>/img/inst.svg" alt="">

                    </a>
                    <a href="https://t.me/Monashka_GIK">
                        <img src="<?php echo get_template_directory_uri() ?>/img/tg.svg" alt="">
                    </a>
                </div>
            </nav>


        </div>
    </header>
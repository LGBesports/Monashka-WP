<?php wp_footer(); ?>
<footer class="footer">
    <div class="container">
        <div class="wrap">
            <nav class="nav">
                <ul>
                    <li><a href="/">Главная</a> </li>
                    <li><a href="<?php echo get_template_directory_uri() ?>/monashka.html">Monashka</a></li>
                    <li><a href="<?php echo get_template_directory_uri() ?>/gorilla.html">Gorilla</a></li>
                    <li><a href="<?php echo get_template_directory_uri() ?>/mason.html">Masons</a></li>
                </ul>
                <ul class="ul-bot">
                    <li><a href="<?php echo get_template_directory_uri() ?>/sertificates.html">Сертификаты</a> </li>
                    <li><a href="/blog/">Блог</a> </li>
                </ul>
            </nav>
            <div class="social">
                <a href="https://instagram.com/monashkaglk?igshid=YmMyMTA2M2Y="><img src="<?php echo get_template_directory_uri() ?>/img/footer-inst.svg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
                <a href="https://t.me/Monashka_GIK"><img src="<?php echo get_template_directory_uri() ?>/img/footer-tg.svg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="warning">
                <div class="text">Настоящий ресурс служит для предоставления ознакомительной информации и не
                    используется в рекламных или маркетинговых целях.
                    Материалы на сайте не являются предложениями о продаже или покупке какого-либо продукта.
                </div>
                <div class="red">18<span>+</span></div>
            </div>
        </div>

    </div>
</footer>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/smooth.js"></script>
  <script>
    gsap.registerPlugin(ScrollSmoother);
    let smoother = new ScrollSmoother.create({
  smooth: 1,   // seconds it takes to "catch up" to native scroll position
  effects: true // look for data-speed and data-lag attributes on elements and animate accordingly
});
  </script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>

</body>

</html>
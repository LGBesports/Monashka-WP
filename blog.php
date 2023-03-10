<?php
/*
Template Name: blog
*/
?>


<?php get_header(); ?>

<main class="blog">
    <section class="blog__wrapper">
        <h1>Все статьи</h1>


        <?php

        /* Новости */
        $args = [
            'cat' => 2,
            'posts_per_page' => -1
            
        ];

        $posts = get_posts($args);

        ?>

        <?php the_content(); ?>
        <div class="items__list news">
            <?php

            foreach ($posts as $post) {

                $link = get_permalink($post->ID);
                $img = get_the_post_thumbnail_url($post->ID);

            ?>
                <div class="blog__item wow fadeIn">
                    <div class="blog__image">
                        <a href="<?php echo $link; ?>"></a><a href="<?php echo $link; ?>"><img src="<?php echo $img; ?>" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
                    </div>
                    <div class="blog__text">

                        <h2>
                            <?php echo $post->post_title; ?>
                        </h2>

                        <p>
                            <?php echo $post->post_excerpt; ?>
                        </p>
                        
                        <button><a href="<?php echo $link; ?>">Читать</a></button>
                    </div>
                </div>
            <?php

            }

            ?>
        </div>




        <h3>
            Популярные статьи
        </h3>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog50.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog11.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Исследование Центра контроля и профилактики заболеваний (CDC) в США не выявило эпидемии вейпинга
                    среди подростков.
                </h2>

                <p>Хотя многие верят в обратное


                </p>
                <button><a href="/blog50.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog49.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog10.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Развитие технологий в производстве вейп-устройств
                </h2>

                <p>в 2022 году наблюдалось активное развитие технологий в производстве вейп-устройств, что приводило
                    к появлению новых моделей и усовершенствованию уже существующих.


                </p>
                <button><a href="/blog49.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog48.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog9.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Онлайн-выставка вейп-продуктов Vapitaly Online
                </h2>

                <p>Мероприятие было организовано в связи с ограничениями, связанными с пандемией COVID-19.


                </p>
                <button><a href="/blog48.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog47.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog8.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Мой опыт использования жидкостей для вейпа Monashka GLK
                </h2>

                <p>Я уже долгое время занимаюсь вейпингом и пробовал множество различных жидкостей для вейпа, но
                    только Monashka GLK стал моим постоянным выбором.
                </p>
                <button><a href="/blog47.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog46.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog7.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    От классики до экзотики: Разнообразие вкусов жидкостей для вейпинга
                </h2>

                <p>Разнообразие вкусов - одна из главных привлекательных особенностей жидкостей для вейпинга.
                </p>
                <button><a href="/blog46.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog45.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog6.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вреден или безвреден? Никотин Шредингера
                </h2>

                <p>Несмотря на то, что, по оценкам, более 80 миллионов человек в мире используют вейпинг — на 95%
                    менее вредную альтернативу курению — нападки на...
                </p>
                <button><a href="/blog45.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog44.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog5.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Безопасно ли парить жидкость с истекшим сроком годности?
                </h2>

                <p>Вопрос о том, безопасно ли курить просроченную электронную жидкость, вызывает много споров в
                    сообществе вейперов.
                </p>
                <button><a href="/blog44.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog43.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost7-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Strange Breakfast Frost
                </h2>

                <p>Скромная, милая девушка, казалось бы ангел, спустившийся с небес. Однако не тут-то было. За
                    маской простоты и невинности скрывается настоящая и ненасытная страстью бестия. Любительница
                    коктейля с сочной клубникой и сладким манго.
                </p>
                <button><a href="/blog43.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog42.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost6-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Apple Pinapple Frost
                </h2>

                <p>Скромная, милая девушка, казалось бы ангел, спустившийся с небес. Однако не тут-то было. За
                    маской простоты и невинности скрывается настоящая и ненасытная страстью бестия. Любительница
                    коктейля с сочной клубникой и сладким манго.
                </p>
                <button><a href="/blog42.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog41.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost5-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Milkshake Frost
                </h2>

                <p>Послушница изучая очередной параграф смотрит на часы и с нетерпеньем ждет покрова ночи. В ночи
                    скусить супер холодный и молочный вкус- что-то незабываемое.
                </p>
                <button><a href="/blog41.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog40.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost4-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Kiwi Relax Frost
                </h2>

                <p>Сегодня было много важных дел, пока расслабиться в ванной. Но в этот раз она оказалась холодной,
                    либо же вкус замороженных фруктов охладили тут все.
                </p>
                <button><a href="/blog40.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog39.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost3-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Girl Raspberry Frost
                </h2>

                <p>Да будет ночь и девочки-малинки покажут свой истинный облик. Какая же сочная и ледяная машина.
                    Мне никогда не забыть ее Терский вкус.
                </p>
                <button><a href="/blog39.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog38.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost2-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Cola Vanilla Frost</h2>

                <p>Дайте девочке прохладительный напиток, она уже горит. Известный вкус -Cola Vanilla с ананасовым
                    послевкусием. В этот раз Cola идёт с добавление двойного льда.</p>
                <button><a href="/blog38.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog37.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/frost1-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Pineapple Apple Frost</h2>

                <p>Запретный плод сладок, разорви оковы, сломай стереотипы. Ледяное яблоко, такого не пробовал ещё
                    никто. Давай вместе со мной.</p>
                <button><a href="/blog37.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog36.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new14-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Watermelon Strawberry</h2>

                <p>Аромат двух летних ягод, свежесть арбуза и сладость клубники вскружит вам голову воспоминаниями о
                    тёплых днях.</p>
                <button><a href="/blog36.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog35.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new13-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Peach Bilberry</h2>

                <p>Нежный, мягкий аромат, который включает в себя нотки свежего персика и тонкий аромат лесной ягоды
                    черники. Сочетание запахов крайне мягкое и нежное, но с небольшой кислинкой.</p>
                <button><a href="/blog35.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog34.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common15-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Straw Mango Berry</h2>

                <p>Скромная, милая девушка, казалось бы ангел, спустившийся с небес. Однако не тут-то было. За
                    маской простоты и невинности скрывается настоящая и ненасытная страстью бестия. Любительница
                    коктейля с сочной клубникой и сладким манго.</p>
                <button><a href="/blog34.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog33.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common14-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Strange Breakfast</h2>

                <p>Очередной прекрасный день наша героиня начинает с чашечки кофе и Доски Уиджи. Густой кофейный
                    вкус. Немного терпкий, но в тот же момент манящий своим запахом и утонченным вкусом.</p>
                <button><a href="/blog33.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog32.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common13-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Apple Pinapple</h2>

                <p>Запретный плод сладок, разорви оковы, сломай стереотипы. Вкуси яблоко, как это сделала сама Ева.
                    Нотки ананаса добавят вкусу экзотичности и пикантности.</p>
                <button><a href="/blog32.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog31.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common12-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Snow Queen</h2>

                <p>Поддайся зову снежной королевы. Порой стоит вовремя охладиться. Вкус свежих фруктов смешанных с
                    кусочками льда. Поистине неотъемлем в жаркие дни.</p>
                <button><a href="/blog31.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog29.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common10-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Milk Shake</h2>

                <p>Послушница изучая очередной параграф смотрит на часы и с нетерпеньем ждет покрова ночи. Хочется
                    вкусить молочный шейк с свежей клубникой и бананом.</p>
                <button><a href="/blog29.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog28.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common9-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Maracuja Energy</h2>

                <p>Взорви ампулу энергии после службы и окунись в прелести ночи. Яркий вкус фруктового энергетика
                    заряжающий энергией бессонным ночей. Напомни себе, что такое ночная жизнь без сна одним лишь
                    вкусом.</p>
                <button><a href="/blog28.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog27.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common8-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус MangoGrad</h2>

                <p>Бросает в дрожь от осознания что через пару минут можно будет бросить учебники и раствориться в
                    МангоГраде. Манящий сладостный виноград так и мании вкусить его. В сочетании с манго получается
                    умопомрачительный вкус, который захочется ещё.</p>
                <button><a href="/blog27.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog26.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common7-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Kiwi Relax</h2>

                <p>Сегодня было много важных дел, пора отдохнуть в ванной. Вкус напоминающий травы для расслабления
                    с примесью чего-то освежающего и фруктового</p>
                <button><a href="/blog26.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog25.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common6-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Girls Raspberry</h2>

                <p>Да будет ночь и девочки-малинки покажут свой истинный облик. Заигрывающая умопомрачительная
                    сладко-сочная малина.</p>
                <button><a href="/blog25.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog24.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common5-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Fruit Gum</h2>

                <p>Классная жвачка, правда постоянно к мантии липнет. Когда мне нечего делать, то я люблю пожевать
                    фруктовую девочку. Ничего так не радует, как она.</p>
                <button><a href="/blog24.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog23.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common3-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Citrus X</h2>

                <p>Х - значит вкусно. Что-то неизвестное всегда интересует, особенно когда оно освежает
                    кисло-сладким вкусом цитруса.</p>
                <button><a href="/blog23.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog22.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common2-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Berry Fruit</h2>

                <p>Мои родители читали мне сказки каждую ночь, и я верила в то, что и я сказочная принцесса.
                    Впрочем, как и каждая маленькая девочка. Попивала фруктово-ягодный коктейль и думала о
                    прекрасном будущем</p>
                <button><a href="/blog22.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog21.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/common1-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Babaika Cookies</h2>

                <p>Что может быть лучше чаепития, только чаепитие с Пастором. Темный вкус печенья с нотками кокоса.
                    Зачем нам баунти, когда есть они.</p>
                <button><a href="/blog21.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog20.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new7-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>01.03.2023</span>
                <h2>
                    Вкус Strowberry Aloe Puply</h2>

                <p>Классное сочетание сладости клубники и травянистой свежести алое. Микс для тех, кто любит
                    интересные, свежие сочетания</p>
                <button><a href="/blog20.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog19.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new6-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус Orange Puply</h2>

                <p>Освежающий аромат спелых цитрусовых фруктов вас непременно очарует своей фруктовой сладостью.
                    Букет аромата оставляет после себя весьма приятное послевкусие.</p>
                <button><a href="/blog19.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog18.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new4-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус Tropic Puply</h2>

                <p>Невероятный микс совершенно разных ароматов. Запах будет раскрываться то сладостью экзотических
                    фруктов, то цитрусовыми нотками.</p>
                <button><a href="/blog18.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog17.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new5-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус PINEAPPLE MANGO Puply</h2>

                <p>Вкус для любителей тропических фруктов. Вам наверняка придется по вкусу классный микс сладкого
                    ананаса с кислинкой и сочного манго.</p>
                <button><a href="/blog17.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog16.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new3-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус COLA VANILA BUBBLES</h2>

                <p>Почувствуй оригинальный вкус ванильной Кока-Колы, ее аромат, и даже – пузырьки у себя во рту, ты
                    не устоишь перед соблазном её попробовать.</p>
                <button><a href="/blog16.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog15.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new2-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус 7UP BUBBLES</h2>

                <p>Пузырящийся аромат, который создан на основе лайма и лимона, крутое, освежающее сочетание не
                    оставит вас равнодушным.</p>
                <button><a href="/blog15.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog14.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/new1-h.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус MOUNTAIN DEW BUBBLES</h2>

                <p>Знакомый вкус и аромат любимой газировки, заключённый в жидкость для под-системы, сможет вам
                    поднять настроение своей сладостью, а пузырьки вскружат вам голову.</p>
                <button><a href="/blog14.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog13.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/orange-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус SPRITE BUBBLES</h2>

                <p>Благодаря тандему лайма и лимона с добавлением пузырьков , образуется насыщенный, газированный
                    вкус напитка «Спрайт», отличный способ попробовать известный вкус в новом формате!</p>
                <button><a href="/blog13.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog12.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/grusha-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус DUSHES BUBBLES</h2>

                <p>Насыщенный вкус лимонада, при парении ощущается винно-сладкий, чуть вяжущий с кислинкой вкус и
                    сильный аромат, а эффект газировки, создаёт ощущение, будто пьёшь прохладный лимонад</p>
                <button><a href="/blog12.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog11.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/fanta-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус FANTA BUBBLES</h2>

                <p>Ощущается яркий вкус апельсиновой газировки с лопающимися пузырьками! Подойдёт для пляжного
                    настроения! Всегда игристый и насыщений вкус!</p>
                <button><a href="/blog11.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog10.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/redbul-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус REDBULL BUBBLES</h2>

                <p>При парении ощущается четкий вкус охлаждённого Ред Булла с эффектом пузырьков после которого
                    остаётся мягкое послевкусие! Отлично подойдёт для повседневного использования!</p>
                <button><a href="/blog10.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog9.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/cola-hover.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Вкус COLA BUBBLES</h2>

                <p>Всем знакомый вкус в новом формате, при парении не приедается, в меру сладкий и приятный вкус!
                </p>
                <button><a href="/blog9.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog8.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog4.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Обзор популярных вкусы жидкости для электронных сигарет, которые наиболее популярны. (часть 2)
                </h2>

                <p>В этой статье мы представим обзор самых популярных вкусов жидкостей для электронных сигарет среди
                    наших клиентов.</p>
                <button><a href="/blog8.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog7.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog4.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Обзор популярных вкусы жидкости для электронных сигарет, которые наиболее популярны. (часть 1)
                </h2>

                <p>В этой статье мы представим обзор самых популярных вкусов жидкостей для электронных сигарет среди
                    наших клиентов.</p>
                <button><a href="/blog7.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog6.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog3.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>
                    Ингредиенты в жидкостях для электронных сигарет: что входит в состав и как это влияет на
                    качество и вкус? </h2>

                <p>"Электронный сок", которым заполняются картриджи, обычно содержит никотин (который извлекается из
                    табака), пропиленгликоль, ароматизаторы и другие химические вещества.</p>
                <button><a href="/blog6.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog4.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog2.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>Сравнение жидкостей на основе VG/PG соотношения: что это значит и как выбрать правильное? (часть
                    2) </h2>

                <p>Электронные сигареты являются популярной альтернативой традиционным сигаретам. Они работают путем
                    нагревания жидкости, которая превращается в пар и вдыхается пользователем. </p>
                <button><a href="/blog4.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog4.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog2.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>Сравнение жидкостей на основе VG/PG соотношения: что это значит и как выбрать правильное? (часть
                    2) </h2>

                <p>Электронные сигареты являются популярной альтернативой традиционным сигаретам. Они работают путем
                    нагревания жидкости, которая превращается в пар и вдыхается пользователем. </p>
                <button><a href="/blog4.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog3.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog2.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>Сравнение жидкостей на основе VG/PG соотношения: что это значит и как выбрать правильное? (часть
                    1) </h2>

                <p>Электронные сигареты являются популярной альтернативой традиционным сигаретам. Они работают путем
                    нагревания жидкости, которая превращается в пар и вдыхается пользователем. </p>
                <button><a href="/blog3.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog2.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog1.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>Как выбрать правильную жидкость для электронной сигареты? (часть 2) </h2>

                <p>Существует множество различных вкусов электронных жидкостей, от фруктов до конфет и кофе, но как
                    понять, какой из них подходит именно вам? </p>
                <button><a href="/blog2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/blog1.php"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/blogimg/blog1.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>28.02.2023</span>
                <h2>Как выбрать правильную жидкость для электронной сигареты? (часть 1) </h2>

                <p>Существует множество различных вкусов электронных жидкостей, от фруктов до конфет и кофе, но как
                    понять, какой из них подходит именно вам? </p>
                <button><a href="/blog1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news1.php"></a><a href=""><img src="https://i.ytimg.com/vi/Ye2IpdKS-88/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>Презентация MONAH by Monashka GLK </h2>

                <p>Коллаборация вейп-блогера Миша Коробка с нами подарила вам улётные сочетания ягод и фруктов в
                    формате Salt для POD систем. </p>
                <button><a href="/news1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news4.php"><img src="https://i.ytimg.com/vi/HqI_ct5zykA/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>УЛЬТРА СОЛЕВОЙ НИКОТИН ЧТО ЭТО? MONASHKA GLK</h2>

                <p>Обзор Михаила Бухарева на нашу линейку жидкости MONASHKA <br> ЧАСТЬ 1</p>
                <button><a href="/news4.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news4.2.php"><img src="https://i.ytimg.com/vi/HqI_ct5zykA/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>УЛЬТРА СОЛЕВОЙ НИКОТИН ЧТО ЭТО? MONASHKA GLK</h2>

                <p>Обзор Михаила Бухарева на нашу линейку жидкости MONASHKA <br> ЧАСТЬ 2</p>
                <button><a href="/news4.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news4.3.php"><img src="https://i.ytimg.com/vi/HqI_ct5zykA/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>УЛЬТРА СОЛЕВОЙ НИКОТИН ЧТО ЭТО? MONASHKA GLK</h2>

                <p>Обзор Михаила Бухарева на нашу линейку жидкости MONASHKA <br> ЧАСТЬ 3</p>
                <button><a href="/news4.3.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news4.4.php"><img src="https://i.ytimg.com/vi/HqI_ct5zykA/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>УЛЬТРА СОЛЕВОЙ НИКОТИН ЧТО ЭТО? MONASHKA GLK</h2>

                <p>Обзор Михаила Бухарева на нашу линейку жидкости MONASHKA <br> ЧАСТЬ 4</p>
                <button><a href="/news4.4.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news5.php"><img src="https://i.ytimg.com/vi/bRRXYz2QvBo/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 ЖИДКОСТЕЙ НА 2021 ГОД</h2>

                <p>Наша жидкость вошла в топ-5 по версии Moontelll <br> ЧАСТЬ 1</p>
                <button><a href="/news5.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news5.2.php"><img src="https://i.ytimg.com/vi/bRRXYz2QvBo/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 ЖИДКОСТЕЙ НА 2021 ГОД</h2>

                <p>Наша жидкость Monashka вошла в топ-2 по версии Moontelll <br> ЧАСТЬ 2</p>
                <button><a href="/news5.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news6.php"><img src="https://i.ytimg.com/vi/iRelw2OJz4s/sddefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 ЖИДКОСТЕЙ ПО ИТОГАМ 2021 ГОДА +РОЗЫГРЫШ ПОДА</h2>

                <p>Наша жидкость Masons вошла в топ-1 по версии Moontelll <br> ЧАСТЬ 1</p>
                <button><a href="/news6.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news6.2.php"><img src="https://i.ytimg.com/vi/iRelw2OJz4s/sddefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 ЖИДКОСТЕЙ ПО ИТОГАМ 2021 ГОДА +РОЗЫГРЫШ ПОДА</h2>

                <p>Наша жидкость Masons вошла в топ-1 по версии Moontelll <br> ЧАСТЬ 2</p>
                <button><a href="/news6.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news6.3.php"><img src="https://i.ytimg.com/vi/iRelw2OJz4s/sddefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 ЖИДКОСТЕЙ ПО ИТОГАМ 2021 ГОДА +РОЗЫГРЫШ ПОДА</h2>

                <p>Наша жидкость Masons вошла в топ-1 по версии Moontelll <br> ЧАСТЬ 3</p>
                <button><a href="/news6.3.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news7.php"><img src="https://i.ytimg.com/vi_webp/rCymh7kEMzM/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>КРАШ-ТЕСТ САМОГО ХРУПКОГО ПОДА - VAPORESSO BARR. ЖИЖА С ЦВЕТНЫМ ПАРОМ- MONASHKA GLK</h2>

                <p>TPL tv проводит краш тест VAPORESSO BARR и рекоммендует линейку жидкости Monashka с цветным
                    паром<br> ЧАСТЬ 1</p>
                <button><a href="/news7.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news7.1.php"><img src="https://i.ytimg.com/vi_webp/rCymh7kEMzM/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>КРАШ-ТЕСТ САМОГО ХРУПКОГО ПОДА - VAPORESSO BARR. ЖИЖА С ЦВЕТНЫМ ПАРОМ- MONASHKA GLK</h2>

                <p>TPL tv проводит краш тест VAPORESSO BARR и рекоммендует линейку жидкости Monashka с цветным
                    паром<br> ЧАСТЬ 2</p>
                <button><a href="/news7.1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news7.2.php"><img src="https://i.ytimg.com/vi_webp/rCymh7kEMzM/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>КРАШ-ТЕСТ САМОГО ХРУПКОГО ПОДА - VAPORESSO BARR. ЖИЖА С ЦВЕТНЫМ ПАРОМ- MONASHKA GLK</h2>

                <p>TPL tv проводит краш тест VAPORESSO BARR и рекоммендует линейку жидкости Monashka с цветным
                    паром<br> ЧАСТЬ 3</p>
                <button><a href="/news7.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news8.php"><img src="https://i.ytimg.com/vi/JZT4j3aKRn0/mqdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ПЫТАЮСЬ УНИЧТОЖИТЬ AEGIS BOOST и MASONS С ВЕКТОРНЫМ НИКОТИНОМ</h2>

                <p>TPL tv проводит краш тест AEGIS BOOST и рекоммендует линейку жидкости Masons<br> ЧАСТЬ 1</p>
                <button><a href="/news8.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news8.1.php"><img src="https://i.ytimg.com/vi/JZT4j3aKRn0/mqdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ПЫТАЮСЬ УНИЧТОЖИТЬ AEGIS BOOST и MASONS С ВЕКТОРНЫМ НИКОТИНОМ</h2>

                <p>TPL tv проводит краш тест AEGIS BOOST и рекоммендует линейку жидкости Masons<br> ЧАСТЬ 2</p>
                <button><a href="/news8.1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news8.2.php"><img src="https://i.ytimg.com/vi/JZT4j3aKRn0/mqdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ПЫТАЮСЬ УНИЧТОЖИТЬ AEGIS BOOST и MASONS С ВЕКТОРНЫМ НИКОТИНОМ</h2>

                <p>TPL tv проводит краш тест AEGIS BOOST и рекоммендует линейку жидкости Masons<br> ЧАСТЬ 3</p>
                <button><a href="/news8.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news8.3.php"><img src="https://i.ytimg.com/vi/JZT4j3aKRn0/mqdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ПЫТАЮСЬ УНИЧТОЖИТЬ AEGIS BOOST и MASONS С ВЕКТОРНЫМ НИКОТИНОМ</h2>

                <p>TPL tv проводит краш тест AEGIS BOOST и рекоммендует линейку жидкости Masons<br> ЧАСТЬ 4</p>
                <button><a href="/news8.3.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    1</p>
                <button><a href="/news9.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.1.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    2</p>
                <button><a href="/news9.1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.2.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    3</p>
                <button><a href="/news9.2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.3.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    4</p>
                <button><a href="/news9.3.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.4.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    5</p>
                <button><a href="/news9.4.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.5.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    6</p>
                <button><a href="/news9.5.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news9.6.php"><img src="https://i.ytimg.com/vi_webp/Py8nrNe3fWo/maxresdefault.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ОДНОРАЗОВЫЕ ЖИЖКИ</h2>

                <p>Михаил Бухарев подробно описал преимущества нашей жидкости по сравнению с конкурентами<br> ЧАСТЬ
                    7</p>
                <button><a href="/news9.6.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news10.php"><img src="<?php echo get_template_directory_uri() ?>/img/bloger.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ДОБАВИЛ САХАР в ЖИЖУ, НАГРЕЛ и ПОПАРИЛ. Новая Monashka Bubbles</h2>

                <p>TPL tv добавил в нашу жидкость САХАР!? Интересно что получилось<br> ЧАСТЬ 1</p>
                <button><a href="/news10.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news10.1.php"><img src="<?php echo get_template_directory_uri() ?>/img/bloger.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ДОБАВИЛ САХАР в ЖИЖУ, НАГРЕЛ и ПОПАРИЛ. Новая Monashka Bubbles</h2>

                <p>TPL tv добавил в нашу жидкость САХАР!? Интересно что получилось<br> ЧАСТЬ 2</p>
                <button><a href="/news10.1.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news10.2.php"><img src="<?php echo get_template_directory_uri() ?>/img/bloger.webp" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ДОБАВИЛ САХАР в ЖИЖУ, НАГРЕЛ и ПОПАРИЛ. Новая Monashka Bubbles</h2>

                <p>TPL tv добавил в нашу жидкость САХАР!? Интересно что получилось<br> ЧАСТЬ 3</p>
                <button><a href="/news10.2.php">Читать</a></button>
            </div>
        </div>


        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news2.php"><img src="https://i.ytimg.com/vi/qHSXMNwwqLk/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGFMgZShPMA8=&rs=AOn4CLBS7Y_V0qbykTkK6y8fEgiMYQme8g" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>Как выбрать жидкость Какие Критерии?</h2>

                <p>В этой статье мы предлагаем посмотреть видео, в котором подробно рассматривается проблема покупки
                    первой жидкости для электронных сигарет.</p>
                <button><a href="/news2.php">Читать</a></button>
            </div>
        </div>
        <div class="blog__item wow fadeIn">
            <div class="blog__image">
                <a href="/news3.php"><img src="https://i.ytimg.com/vi/2wVy5_lr_2M/maxresdefault.jpg" alt="Жидкость для вейпа 💨 Купить жидкость для электронных сигарет в Москве."></a>
            </div>
            <div class="blog__text">
                <span>08.11.2022</span>
                <h2>ТОП 5 POD систем 2022</h2>

                <p>В этой статье мы рекммендуем к просмотру видео от ребят из vardex. Они собрали топ 5 POD
                    систем,через которые вкус нашей жидкости раскроится в полной мере!</p>
                <button><a href="/news3.php">Читать</a></button>
            </div>
        </div>
    </section>
</main>

    

    <?php get_footer(); ?>
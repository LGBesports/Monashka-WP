<?php

/* Template Name: Новости */

get_header();

/* Новости */
$args = [
	'cat' => 4
];

$posts = get_posts($args);

?>

<main class="blog">

	<section class="news__wrapper">
	<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
	
				<h1><?php echo get_the_title(); ?></h1>
				
				
				<?php 
				$content = str_replace('&nbsp;'," ",get_the_content());

				$content = preg_replace( '/\s+/', ' ', $content );
				
				echo $content;
				?>
				<?php
global $post;
$postid = $post -> ID;
$args = array(
'orderby' => 'rand',
'showposts' => '3',
'post__not_in' => array($postid)
);
query_posts($args);
while (have_posts()) : the_post();
echo '<li class="randomlink"><a href="'.get_permalink().'" title="'.the_title('','',false).'" target="_blank">'.the_title('','',false).'</a></li>';
endwhile;
?>
	</section>
	<section class="form">
		<div class="container">
			<div class="form__title">Оставьте заявку и мы свяжемся с вами в ближайшее время</div>


			<div method="post" action="<?php echo get_template_directory_uri() ?>/mailer.php" class="accept">

				<div class="data">
					<!-- <input type="text" id="name" name="name" placeholder="Введите имя *" required>
					<input name="phone" class="tel" placeholder="+7(___)___-__-__" required>
					<input type="text" id="location" name="location" placeholder="Введите город *" >
					<input type="text" id="letter" name="letter" placeholder="Введите сообщение(не обязательно)" > -->
					<?php  echo do_shortcode('[contact-form-7 id="233" title="Основная форма"]');?>
				</div>
				<div class="radio__button">
					<!-- <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button> -->
					<p>Нажимая кнопку “отправить заявку”, вы даете согласие на обработку своих персональных
						данных
					</p>
				</div>

			</div>

		</div>
	</section>
	<section>
	<div class="iframewrap"><iframe src="/wp-content/themes/blank-wordpress-theme-master/try.html" name="myIFrame" scrolling="no" width="100%" height="100%"></iframe></div>
	</section>
	


</main>

<?php

get_footer();

?>
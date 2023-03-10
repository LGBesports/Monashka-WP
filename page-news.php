<?php

/* Template Name: Новости */

get_header();

/* Новости */
$args = [
	'cat' => 1
];

$posts = get_posts($args);

?>
<main class="main__wrapper">
	<div class="container news">
		<h1><?php echo get_the_title(); ?></h1>
		<?php the_content(); ?>
		<div class="items__list news">
			<?php

			foreach ($posts as $post) {

				$link = get_permalink($post->ID);
				$img = get_the_post_thumbnail_url($post->ID);

			?>
				<div class="item_ news">
					<div class="item_img">
						<a href="<?php echo $link; ?>" title="<?php echo $post->post_title; ?>" style="background-image: url(<?php echo $img; ?>);"></a>
					</div>
					<div class="item_info">
						<a href="<?php echo $link; ?>" title="<?php echo $post->post_title; ?>">
							<h2><?php echo $post->post_title; ?></h2>
						</a>
						<p><?php echo $post->post_excerpt; ?>...</p>
						<p><a href="<?php echo $link; ?>" title="Читать далее">читать далее</a></p>
					</div>
				</div>
			<?php

			}

			?>
		</div>
	</div>
</main>
<?php

get_footer();

?>
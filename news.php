<?php
/*
 Template Name: Шаблон для Новости
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

   <div class="page container news">

      <div class="entry-header">
         <h2><?php $sp_obj->get_title(); ?></h2>
      </div>

      <div class="slider-anons-xxx">
         <?php
         $pc = new WP_Query('cat=5&posts_per_page=100'); ?>
         <?php while ($pc->have_posts()) : $pc->the_post(); ?>

            <?php if (get_field('архив')) { ?>

            <?php } else { ?>

               <div class="events__item wow fadeIn" data-wow-duration="3s" data-wow-delay="0s">
                  <div class="events__thumbnail"><?php the_post_thumbnail(array()); ?></div>
                  <div class="events__content">
                     <span><?php the_date(); ?></span>
                     <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                     <p><?php the_content();
                        ?></p>
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="events__button">Читать</div>
                     </a>
                  </div>
               </div>


            <?php } ?>

         <?php endwhile; ?>
      </div>

   </div>

<?php endwhile;


get_footer();

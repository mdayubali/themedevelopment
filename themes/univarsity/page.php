<?php

get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php get_theme_file_uri('/images/ocean.jpg');?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?> </h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

      
      <div class="metabox metabox--position-up metabox--with-home-link">

      <?php 
        $theParent = wp_get_post_parent_id( get_the_ID() );
        if ( $theParent ) { ?> 
           <p>
            <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $theParent ) ?> </a> <span class="metabox__main"> <?php the_title();?></span>
          </p>
        <?php 
          
        }
      ?>
      </div>

      <?php 
        $testArray  = get_pages( array(
          'child_of' => get_the_ID()
        ) );
      ?>
      
      <?php 
      if( $theParent or $testArray ) {
        ?>
          <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
          
          <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }
            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order'
            ));
          ?>
          <!-- <li class="current_page_item"><a href="<?php #echo esc_url( site_url('/our-history')); ?>">Our History</a></li>
          <li><a href="<?php #echo esc_url( site_url('/our-goals')); ?>">Our Goals</a></li> -->
        </ul>
      </div>
        <?php 
      } ?>

      

      <div class="generic-content">
        <?php the_content();?>
      </div>
    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>

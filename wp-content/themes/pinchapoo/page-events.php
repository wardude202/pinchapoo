<?php /* Template Name: EventsPage */ ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Pinchapoo - a cheeky way to help</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
    <?php get_header(); ?>

    <!-- Main -->
    <div id="main">

        <!-- Content -->

        <section class="main">
            <div class="inner">

                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- <div class="post-header"> -->
                    <!--<div class="date">< ?php the_time( 'M j y' ); ?></div> -->
                    <header class="major">
                        <span class="category">a cheeky way to help</span>
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <!--<div class="author">< ?php the_author(); ?></div> -->
                    <!--</div><!--end post header-->
                    <div class="entry clear">
                        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <!--< ?php edit_post_link(); ?> -->
                        <!-- < ?php wp_link_pages(); ?> </div>
                    <!--end entry-->
                        <div class="post-footer">
                            <!-- <div class="comments">< ?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                        </div><!--end post footer-->
                        </div><!--end post-->
                        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
        <!-- </section> -->

        <!-- Current Events -->
       <!--  <section class="main">
            <div class="inner"> -->
                <div class="postlist">
                    <?php
                    $args = array( 'category_name' => 'Events' );

                    $gossposts = get_posts( $args );
                    $i = 1;
                    if(count($gossposts) === 0) { echo "No upcoming events - check back soon!"; }
                    foreach ( $gossposts as $post ) : setup_postdata( $post ); ?>
                    <?php if( $i == 1 ){ echo("<div class='row'>"); } ?>
                        <div class="6u 12u$(small)">
                        <article>
                            <span class="image fit"><img src="<?php the_post_thumbnail_url(); ?>" /></span>
                            <!--</div>
                            <div class="6u 12u$(small)"> -->
                            <header>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </header>
                            <p><?php the_excerpt(); ?></p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="<?php the_permalink(); ?>" class="button">More Info</a></li>
                                </ul>
                            </footer>
                           <!-- </div> -->
                        </article>
                    </div>
                    <?php if( $i % 2 == 0) { echo("</div>"); $i=1; } else { $i++; } ?>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>


        <!-- Past Events -->
                <hr>
                <h2>Past Events</h2>
                <div class="postlist">
                    <?php
                    $args = array( 'category_name' => 'Past Events' );
                    $gossposts = get_posts( $args );
                    $i = 1;
                    foreach ( $gossposts as $post ) : setup_postdata( $post ); ?>
                       <?php if( $i == 1 ){ echo("<div class='row'>"); } ?>
                        <div class="4u 12u$(medium)">
                        <article>
                            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('medium', array( 'class' => 'thumbnail alignleft' )); ?>
                            <header>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </header>
                            <p><?php the_excerpt(); ?></p>
                            <footer>
                                <ul class="actions">
                                </ul>
                            </footer>
                        </article>
                        </div>
                        <?php if( $i % 3 == 0) { echo("</div>"); $i=1; } else { $i++; } ?>

                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <?php get_footer(); ?>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

</body>
</html>


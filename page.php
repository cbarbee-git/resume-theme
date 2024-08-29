<?php get_header(); ?>

<div class="main">

    <div class="lazy-bg section-title thumbnail-bg left" style="background: url('<?php echo(THEME_TEMPLATE_URI) ?>/assets/images/coding.webp');">
        <div class="pg-container">
            <div class="inner page-title-inner">
                <hr class="pr-page-title-hr">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="breadcrumbs-warp">
                    <div class="inner">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content">
        <div id="primary" class="pg-container">
            <?php the_content(); ?>

            <?php
            if(is_page('Portfolio')){
            $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $child_query = new WP_Query( $args );
            $count = 1;
            $poject_count = $child_query->post_count;
            ?>

            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                <?php $reverse_class = ($count % 2 == 0) ? 'reverse' : ''; ?>
                <div <?php post_class(); ?>>  
                    <?php
                    $child_post_ID = get_the_ID();
                    if(get_field('show_divider_above_archives_list', $child_post_ID)){
                        if(get_field('divider_headline_text', $child_post_ID)) {
                            echo("<h5 class=\"sub-header\">".get_field('divider_headline_text', $child_post_ID)."</h5>");
                        }
                    }
                    ?>
                    <h3 class="project_headline <?php echo($reverse_class); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <div class="project_content <?php echo($reverse_class); ?>">
                        <?php  
                        if ( has_post_thumbnail() ) {
                            $url = wp_get_attachment_url( get_post_thumbnail_id($child_post_ID), 'thumbnail' );
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <img class="project_thumbnail" src="<?php echo($url); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            </a>
                        <?php
                        }
                        ?>
                        <p>
                        <?php
                            echo(chad_custom_excerpts(50, $post->ID));
                         ?>
                         </p>
                    </div>
                </div>

            <?php
            $count++;
            endwhile; 
            wp_reset_postdata();
            }

            if(get_field('additional_content', $post->ID)){
                echo("<div class=\"additonal_content\">");
                echo(get_field('additional_content', $post->ID));
                echo("</div>");
            }

            if($post->post_parent === 10){//this is a child of the 'Portfolio' page
                $tags = get_the_tags($post->ID);
                if($tags){
                    echo("<ul class=\"wp-tag-cloud\" role=\"list\">\n");
                    foreach($tags as $tag) {
                        echo("\t<li>".$tag->name."</li>\n");
                    }
                    echo("</ul>\n");
                }

            ?>
                <div class="page big-button-container">
                    <a class="btn" href="<?php echo( get_permalink(10) ); ?>">
                        <i class="fa-solid fa-arrow-left"></i> View Full Portfolio
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
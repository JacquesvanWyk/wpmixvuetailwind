<?php
/*
Template Name:Shop Page
*/

get_header();?>
    <div id="app" class="w-full">

        <div class="container">
            <p class="text-6xl"><?php the_title();?></p>
        </div>
            <div class="row">
                <div class="w-full">
                    <div class="content rounded shadow-lg p-10">
                        <?php if(have_posts()): while(have_posts()): the_post();?>

                            <?php the_content();?>

                        <?php endwhile; else: endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>
<?php get_header();?>
    <div class="container">

        <div class="pageheader text-center">

        </div>
        <div class="row">
            <div class="col-9">
                <div class="content rounded shadow-lg p-10">
                    <?php if(have_posts()): while(have_posts()): the_post();?>

                        <p class="text-6xl"><?php the_title();?></p>

                        <img src="<?php the_post_thumbnail_url('post_image');?>" alt="">

                        <?php the_excerpt();?>

                    <?php endwhile; else: endif;?>
                </div>
            </div>
            <div class="col-3">
                <div class="sidebar-content list-none rounded shadow-lg p-10 sticky top-0">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>
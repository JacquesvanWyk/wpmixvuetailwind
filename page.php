<?php get_header();?>
    <div id="app" class="w-full">
        <div class="container">
            <img src="<?php the_post_thumbnail_url('post_image');?>" alt="">
            <div class="pageheader text-center">
                <p class="text-6xl"><?php the_title();?></p>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="content rounded shadow-lg p-10">
                        <?php if(have_posts()): while(have_posts()): the_post();?>

                            <?php the_content();?>

                        <?php endwhile; else: endif;?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="sidebar-content list-none rounded shadow-lg p-10 sticky top-0">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gotoTop""><i class="fas fa-caret-up"></i></div>
<?php get_footer();?>
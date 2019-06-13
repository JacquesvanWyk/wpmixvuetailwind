<?php get_header();?>
<div class="container">
    <img src="<?php the_post_thumbnail_url('post_image');?>" alt="">
    <div class="pageheader text-center">
        <p class="text-6xl"><?php the_title();?></p>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="content">
                <?php if(have_posts()): while(have_posts()): the_post();?>

                    <?php the_content();?>

                <?php endwhile; else: endif;?>
            </div>
        </div>
        <div class="col-3">
            <?php get_sidebar();?>
        </div>
    </div>


</div>

<?php get_footer();?>
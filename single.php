<?php get_header(); ?>
    <div class="container">
        <div class="pageheader text-center">
        </div>
        <div class="row">

            <div class="md:w-2/3 py-5 pr-5">
                <div class="content rounded shadow-lg p-10">
                    <div class="py-2">
                        <a href="<?php echo site_url(); ?>/category/blog/" class="text-teal-500">&#x2190; Back to Posts</a>
                    </div>
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="">
                        <?php endif; ?>
                        <p class="text-6xl text-center"><?php the_title(); ?></p>
                        <?php the_content(); ?>
                    <?php endwhile; else: endif; ?>
                </div>
            </div>
            <div class="md:w-1/3 py-5">
                <div class="sidebar-content list-none rounded shadow-lg p-10 sticky top-0">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>


    </div>

<?php get_footer(); ?>
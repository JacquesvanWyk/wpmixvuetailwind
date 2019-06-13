<?php get_header();?>

<div id="app" class="w-full">
    <div class="container mx-auto px-4 py-10 max-w-4xl">
        <div class="bg-white shadow-lg p-8 rounded-lg">
            <h1 class="text-4xl font-bold text-center leading-tighter mb-6">Laravel Mix + TailwindCSS + Vue.js</h1>
            <div class="text-xl font-medium text-center">
                <p>
                    Create something beautiful!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <?php if(have_posts()): while(have_posts()): the_post();?>

    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>


<?php get_footer();?>

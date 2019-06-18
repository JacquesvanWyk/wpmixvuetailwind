<?php get_header(); ?>
<div id="app" class="w-full">
    <div class="container">
        <div class="pageheader text-center">
        </div>
        <div class="row">
            <div class="md:w-2/3 py-5">
                <?php if (have_posts()): while (have_posts()):
                    the_post(); ?>

                    <?php if (in_category(3)) { ?>

                    <div class="max-w-sm w-full lg:max-w-full lg:flex shadow py-2">
                        <div class="flex-col pl-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url(<?php the_post_thumbnail_url(); ?>) !important;" title="Woman holding a mug">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
<!--                                <div class="items-stretch w-1/3 bg-cover rounded-t lg:rounded-t-none lg:rounded-l">-->
<!--                                    <img src="--><?php //the_post_thumbnail_url();?><!--" alt="--><?php //the_title(); ?><!--">-->
<!--                                </div>-->
                            </a>
                            <div class="text-sm flex py-2">
                                <p class="text-gray-900 leading-none"><?php the_author(); ?> </p>
                                <p class="text-gray-600 leading-none pl-2">Aug 18</p>

                            </div>
                            <div class="">
                                <p class="text-sm text-gray-600 flex items-center">
                                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                    </svg>
                                    <?php the_tags(); ?>
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-2 flex flex-col justify-between leading-normal">
                            <div class="mb-4">
                                <div class="text-gray-900 font-bold text-xl mb-2"><a href="<?php the_permalink(); ?>"><p class="text-xl"><?php the_title(); ?></p></a></div>
                                <p class="text-gray-700 text-base"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="flex items-center">
                                <div class="pr-2">
                                    <form action="<?php the_permalink(); ?>">
                                        <button class="bg-white hover:bg-gray-800 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded mt-1">
                                            Read
                                        </button>
                                    </form>
                                </div>
    <!--                            <img class="w-10 h-10 rounded-full mr-4" src="--><?php //echo get_avatar('user_email');?><!--" alt="Avatar of Jonathan Reinink">-->

                            </div>
                            <div class="">

                            </div>
                        </div>
                    </div>


                <?php } ?>
                <?php endwhile;
                else:
                endif; ?>
                <div class="pagination shadow p-4 mt-2">
                    <?php
                    global $wp_query;

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                    ?>
                </div>
            </div>

        <div class="md:w-1/3 p-5">
            <div class="sidebar-content list-none rounded shadow-lg p-10 sticky top-0">
                <?php dynamic_sidebar('blog-sidebar'); ?>
            </div>
        </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>





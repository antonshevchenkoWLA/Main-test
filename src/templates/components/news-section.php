<?php
$news_section = get_sub_field("news_section");
$heading      = !empty($news_section["heading"]) ? $news_section["heading"] : '';
$heading_2      = !empty($news_section["heading_2"]) ? $news_section["heading_2"] : '';
$text         = !empty($news_section["text"]) ? $news_section["text"] : '';
$button_text  = !empty($news_section["button_text"]) ? $news_section["button_text"] : __('View All News', 'prosekwptheme');
$layout       = !empty($news_section["layout"]) ? $news_section["layout"] : '';
?>

<?php if ($heading || $text): ?>
    <div id="Latest News" class="container">
        <?php if ($heading_2): ?>
            <p class="ease-left text-left pt-6 font-bold uppercase text-[20px] text-navy-blue  border-t-2  border-t-[var(--divider-line-blue)] " data-scroll><?php echo wp_kses_post($heading_2); ?></p>
        <?php endif; ?>
        <?php if ($heading): ?>
            <h2 class="ease-right leading-[1] text-left  text-navy-blue font-light " data-scroll><?php echo wp_kses_post($heading); ?></h2>
        <?php endif; ?>

        <?php if ($text): ?>
            <h6 class="text-left text-navy-blue font-light " data-scroll><?php echo wp_kses_post($text); ?></h6>
        <?php endif; ?>
    </div>
<?php endif; ?>


<?php $news_args = array(
        'post_type'      => 'post',
        'orderby'        => 'date',
        'order'          => 'desc',
        'posts_per_page' => '6',
        'post_status'    => 'publish',
);
$news            = new WP_Query($news_args); ?>
<?php if ($news->have_posts()): ?>
    <div class="px-side-offset ease-btm <?php echo $layout === "grid" ? "" : "swiper news"; ?>" data-scroll>
        <div class="<?php echo $layout === "grid" ? "grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6" : "swiper-wrapper"; ?>">
            <?php while ($news->have_posts()): $news->the_post(); ?>
                <div class="<?php echo $layout === "grid" ? "" : "swiper-slide"; ?>">
                    <?php get_component('loop-news', ["time" => true]); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_query(); ?>

<div class="flex flex-row-reverse items-center justify-between py-8 ease-left container" data-scroll>
    <?php if ($layout === "slider"): ?>
        <div class="flex gap-x-8 swiper-nav  " >
            <?php get_component('swiper-nav', ['prefix' => 'news']); ?>
        </div>
    <?php endif; ?>

    <a class="flex items-center gap-x-4 p-3 pl-6 pr-6 swiper-nav border border-[var(--bright-blue)] text-[var(--navy-blue)]"href="<?php echo esc_url(get_the_permalink(get_option('page_for_posts'))); ?>"

       class="button button-alt"><?php echo esc_html($button_text); ?>
        <svg width="25" height="15" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.6889 1.41406L23.4 10.1252M23.4 10.1252L14.6889 18.8363M23.4 10.1252L1 10.1252" stroke="#071359" stroke-width="2" stroke-linecap="square"/>
        </svg>


    </a>
</div>
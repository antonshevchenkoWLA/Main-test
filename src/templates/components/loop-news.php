<article <?php post_class(); ?>>
    <a href="<?php echo esc_url( get_permalink() ); ?>" <?php echo $external_link ? 'target="_blank"' : ''; ?> class="link-with-zoom-img group">
        <div class="overflow-hidden mb-2 aspect-video rounded-lg">
            <?php $image = [ 'image' => get_post_thumbnail_id() ]; ?>
            <?php echo get_attachment_fallback( $image ); ?>
        </div>
        <div>
            <div class="mb-4 line-clamp-3">
                <h6 class="ease-left text-left pt-5 font-light text-navy-blue" data-scroll><?php echo esc_html( get_the_title() ); ?></h6>
            </div>

            <div class="flex justify-between items-center  ">
                <time class="text-mb" datetime="<?php echo get_the_time( 'c' ); ?>">
                    <?php echo get_the_date( 'd.m.y' ); ?>
                </time>

                <span class="text-mb font-light text-[var(--navy-blue)]  tracking-wider ">
                Read article
            </span>
            </div>
        </div>
    </a>
</article>
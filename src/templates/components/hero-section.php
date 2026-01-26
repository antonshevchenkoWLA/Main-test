<?php
$slide = $args; // Get slide array data that was passed on.
?>
<div class="relative h-full px-0 lg:px-0 py-4 lg:py-0  ease-btm" data-scroll>



    <div class="absolute top-0 right-0 bottom-0 left-0 z-10 "></div>

    <div class="z-50 relative text-left container pt-2">
        <?php if (!empty($slide['heading'])): ?>
            <h2 class="text-navy-blue font-light ">
                <?php echo esc_html($slide['heading']); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($slide['text'])): ?>
            <p class="font-light text-navy-blue  leading-10">
                <?php echo wp_kses_post($slide['text']); ?>
            </p>
        <?php endif; ?>

        <?php if (!empty($slide["button"])): ?>
            <?php echo get_button($slide["button"], "button") ?>
        <?php endif; ?>
    </div>
    <div class=" top-0 right-0 bottom-0 left-0 z-0 backdrop">
        <?php echo get_attachment_fallback($slide['image']); ?>
    </div><!-- .backdrop -->
</div>
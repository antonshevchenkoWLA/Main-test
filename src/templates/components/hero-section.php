<?php
$slide = $args; // Get slide array data that was passed on.
?>
<div class="relative h-full px-0 lg:px-0 py-4 lg:py-0  ease-btm" data-scroll>



    <div class="absolute top-0 right-0 bottom-0 left-0 z-10 "></div>

    <div class="z-50 relative text-left container pt-2">
        <?php if (!empty($slide['heading'])): ?>
            <h2 class="text-navy-blue font-light ease-left" data-scroll="">
                <?php echo esc_html($slide['heading']); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($slide['text'])): ?>
            <h4 class="ease-right font-light text-navy-blue  leading-10" data-scroll="">
                <?php echo wp_kses_post($slide['text']); ?>
            </h4>
        <?php endif; ?>

        <?php if (!empty($slide["button"])): ?>
            <?php echo get_button($slide["button"], "button") ?>
        <?php endif; ?>
    </div>
    <div class=" inset-0 z-0 backdrop">
        <div class="relative w-full h-[10%] overflow-hidden">
            <?php echo get_attachment_fallback($slide['image']); ?>

            <!-- SVG animation INSIDE image -->
            <svg
                class="absolute inset-0 w-full h-[93%] pointer-events-none"
                viewBox="0 0 1584 700"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid meet"
            >
                <path class="svg-line delay-0"
                      d="M1568 376.81C1568 381.228 1571.58 384.81 1576 384.81C1580.42 384.81 1584 381.228 1584 376.81C1584 372.392 1580.42 368.81 1576 368.81C1571.58 368.81 1568 372.392 1568 376.81ZM0 376.81C0 381.228 3.58172 384.81 8 384.81C12.4183 384.81 16 381.228 16 376.81C16 372.392 12.4183 368.81 8 368.81C3.58172 368.81 0 372.392 0 376.81ZM1576 376.81V375.31H8V376.81V378.31H1576V376.81Z"
                      fill="white"/>

                <path class="svg-line delay-1" d="M933.26 377V699.81" stroke="white" stroke-width="3"/>
                <path class="svg-line delay-2" d="M250.1 377C298 377 338.88 377 338.88 465.78V659.81" stroke="white" stroke-width="3"/>
                <path class="svg-line delay-3" d="M785 376.748C832.9 376.748 874.28 378.81 874.28 290.03V0" stroke="white" stroke-width="3"/>
                <path class="svg-line delay-4" d="M1499 376.81C1499 533.107 1372.3 659.81 1216 659.81C1059.7 659.81 933 533.107 933 376.81" stroke="white" stroke-width="3"/>
            </svg>
        </div>
    </div>

    <!-- .backdrop -->
</div>
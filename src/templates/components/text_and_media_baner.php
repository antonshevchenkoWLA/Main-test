<?php
$text_image_block = get_sub_field("text_and_media_baner");
$heading_1        = ! empty($text_image_block["heading_1"]) ? $text_image_block["heading_1"] : '';
$heading_2        = ! empty($text_image_block["heading_2"]) ? $text_image_block["heading_2"] : '';
$heading_3        = ! empty($text_image_block["heading_3"]) ? $text_image_block["heading_3"] : '';
$heading_4        = ! empty($text_image_block["heading_4"]) ? $text_image_block["heading_4"] : '';
$text             = ! empty($text_image_block["text"]) ? $text_image_block["text"] : '';
$text_copy             = ! empty($text_image_block["text_copy"]) ? $text_image_block["text_copy"] : '';
$button           = ! empty($text_image_block["button"]) ? $text_image_block["button"] : '';
$media_element    = ! empty($text_image_block["media_element"]) ? $text_image_block["media_element"] : '';
$media_element 	  = get_media_element(['media_element' => $media_element, 'autoplay' => true]);
$image_position   = ($media_element && $text_image_block["image_position"] === 'right') ? 'flex-row-reverse' : '';



?>

<?php if ($heading_1 || $heading_2 || $text ): ?>
<div class="bg-[linear-gradient(25deg,#2C8CFF_0%,#2A87F9_12%,#277BE8_29%,#2068CD_47%,#184CA7_67%,#0D2977_88%,#071359_100%)]"
    xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<div class="container ">
        <div id="Get in Touch" class=" gap-8 md:flex-row lg:gap-16 text-white">
            <?php if ($heading_1): ?>
                <p class="text-white ease-left text-left pt-6 font-bold uppercase text-[20px] text-navy-blue  border-t-2  border-t-[var(--divider-line-blue)]" data-scroll><?php echo esc_html($heading_1); ?></p>
            <?php endif; ?>
            <?php if ($heading_2): ?>
                <h2 class="text-white ease-right leading-[1] text-left pt-9 pb-9 md:pb-10 text-navy-blue font-light " data-scroll><?php echo wp_kses_post($heading_2); ?></h2>
            <?php endif; ?>
            <?php if ($text): ?>
                <h5 class="text-white md:w-[73%] md:text-[1.8rem] ease-left text-left text-navy-blue font-light pb-10 mb-0 pt-6" data-scroll><?php echo wp_kses_post($text); ?></h5>
            <?php endif; ?>
            <?php if ($button): ?>
                <div class="ease-left w-[17rem] flex items-center gap-x-4 p-3 pl-6 pr-6 swiper-nav border-2 border-white hover:bg-[var(--bright-blue)] hover:text-white text-[var(--navy-blue)]" data-scroll>
                    <?php echo get_button($button, " text-white "); ?>
                    <svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.4222 1.41406L23.4 6.39184M23.4 6.39184L18.4222 11.3696M23.4 6.39184L1 6.39184"
                              stroke="white" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>





<?php endif; ?>
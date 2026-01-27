<?php
$text_image_block = get_sub_field("text_and_mediasecond");
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

<?php if ($heading_1 || $heading_2 || $text || $media_element): ?>
	<div class="container ">
        <div id="about" class=" gap-8 md:flex-row lg:gap-16 ">
            <?php if ($heading_1): ?>
                <p class="ease-left text-left pt-6 font-bold uppercase text-[20px] text-navy-blue  border-t-2  border-t-[var(--divider-line-blue)]" data-scroll><?php echo esc_html($heading_1); ?></p>
            <?php endif; ?>
            <?php if ($heading_2): ?>
                <h2 class="ease-right leading-[1] text-left pt-9 pb-9 md:pb-10 text-navy-blue font-light " data-scroll><?php echo wp_kses_post($heading_2); ?></h2>
            <?php endif; ?>
            <?php if ($text): ?>
                <h5 class="md:w-[73%] md:text-[1.8rem] ease-left text-left text-navy-blue font-light pb-10 mb-0 pt-6" data-scroll><?php echo wp_kses_post($text); ?></h5>
            <?php endif; ?>
            <?php if ($heading_1): ?>
                <h3 class="ease-left text-left pt-10 font-normal   text-navy-blue  border-t-2  border-t-[var(--divider-line-blue)]" data-scroll><?php echo esc_html($heading_3); ?></h3>
            <?php endif; ?>
            <?php if ($text): ?>
                <h5 class="md:w-[73%] ease-right md:text-[1.8rem] text-left text-navy-blue font-light  pt-6" data-scroll><?php echo wp_kses_post($text_copy); ?></h5>
            <?php endif; ?>

        </div>


	</div>
<?php endif; ?>
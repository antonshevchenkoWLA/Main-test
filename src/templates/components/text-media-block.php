<?php
$text_image_block = get_sub_field("text_and_media");
$heading_1        = ! empty($text_image_block["heading_1"]) ? $text_image_block["heading_1"] : '';
$heading_2        = ! empty($text_image_block["heading_2"]) ? $text_image_block["heading_2"] : '';
$text             = ! empty($text_image_block["text"]) ? $text_image_block["text"] : '';
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
                <h2 class="ease-right text-left pt-9 pb-9 md:pb-32 text-navy-blue font-light " data-scroll><?php echo esc_html($heading_2); ?></h2>


            <?php endif; ?>
        </div>
		<div class="flex flex-col gap-8 md:flex-row lg:gap-16 <?php echo $image_position; ?>">




			<?php if ($heading_1 || $heading_2 || $text || $button): ?>

				<div class="w-full pr-20 flex  items-end <?php echo !empty($image_position) ? 'ease-left' : 'ease-right'; ?>" data-scroll>

					<?php if ($text): ?>
						<h5 class="text-left text-navy-blue font-light border-t-2  border-t-[var(--divider-line-blue)] pt-6"><?php echo wp_kses_post($text); ?></h5>
					<?php endif; ?>

				</div>
			<?php endif; ?>
            <?php if ($media_element): ?>
                <div class="w-full h-full aspect-square lg:aspect-video <?php echo !empty($image_position) ? 'ease-right' : 'ease-left'; ?>" data-scroll>
                    <?php echo $media_element; ?>
                </div>
            <?php endif; ?>
		</div>
	</div>
<?php endif; ?>
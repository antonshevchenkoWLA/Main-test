<?php
$accordion_section = get_sub_field("accordion_section");
$heading_1        = ! empty($accordion_section["heading_1"]) ? $accordion_section["heading_1"] : '';
$text       = ! empty($accordion_section["text"]) ? $accordion_section["text"] : '';
$accordion         = ! empty($accordion_section["accordion"]) ? $accordion_section["accordion"] : [];

if ($accordion) : ?>
<div class="bg-[#F4F9FB]">
	<div id="investment-strategy" class="bg-[#F4F9FB] container flex items-end pt-0 flex flex-col gap-8 md:flex-row lg:gap-16 ">
		<div class="accordion accordion-container accordions-list gap-8 md:flex-row lg:gap-16">
            <?php if ($heading_1): ?>
            <h3 class="ease-left text-left pt-10 font-normal  pb-10 text-navy-blue  border-t-2  border-t-[var(--divider-line-blue)]" data-scroll><?php echo esc_html($heading_1); ?></h3>
            <?php endif; ?>
			<?php foreach ($accordion as $accordion_item) : ?>
				<div class="group/accordion-item mb-7 sm:mb-8 last:mb-0 ease-btm accordion-item accordion-button" data-scroll>
					<div class="group/accordion-header accordion-header">
						<h3 class="border-current border-b font-light  pb-1 text-[#071359] hover:opacity-100  group-[.is-active]/accordion-item:opacity-100 opacity-40     "    >
							<button class=" group-[.is-active]/accordion-item:text-[#2C8CFF]  flex justify-between items-center gap-2.5 pr-4 sm:pr-2.5 outline-none w-full text-left accordion-trigger">
								<?php echo esc_html($accordion_item['heading']) ?? ''; ?>
								<span class="ml-auto w-5 sm:w-7 h-5 sm:h-7 accordion-icon-1"></span>
							</button>
						</h3>
					</div>

					<div class="accordion-body">
						<div class="w-full ">
							<div class="py-4 sm:py-8 1212">
								<?php echo wp_kses_post($accordion_item['text']) ?? ''; ?>
<!--								--><?php //echo get_button($accordion_item["button"], "button button-alt"); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
        <div  class=" gap-8 md:flex-row lg:gap-16 ease-right "data-scroll>
            <svg xmlns="http://www.w3.org/2000/svg" width="677" height="640" fill="none" viewBox="0 0 677 640"><path stroke="url(#a)" stroke-miterlimit="10" stroke-width="3" d="M362.11 632.88C534.91 632.88 675 492.8 675 319.99S534.91 7.11 362.11 7.11 49.22 147.2 49.22 320s140.09 312.89 312.9 312.89Z"/><path stroke="url(#b)" stroke-miterlimit="10" stroke-width="3" d="M362.11 632.88a69.81 69.81 0 1 0 0-139.63 69.81 69.81 0 0 0 0 139.63Z"/><path stroke="url(#c)" stroke-miterlimit="10" stroke-width="3" d="M362.12 632.88c59.86 0 108.39-48.53 108.39-108.39S421.98 416.1 362.1 416.1c-59.86 0-108.38 48.53-108.38 108.39s48.52 108.39 108.39 108.39Z"/><path stroke="url(#d)" stroke-miterlimit="10" stroke-width="3" d="M362.11 632.89c82.65 0 149.66-67 149.66-149.66s-67-149.66-149.66-149.66-149.66 67-149.66 149.66 67 149.66 149.66 149.66Z"/><path stroke="url(#e)" stroke-miterlimit="10" stroke-width="3" d="M362.11 632.89c107.93 0 195.43-87.5 195.43-195.42 0-107.93-87.5-195.42-195.43-195.42S166.7 329.55 166.7 437.47c0 107.93 87.5 195.42 195.42 195.42Z"/><path stroke="url(#f)" stroke-miterlimit="10" stroke-width="3" d="M362.11 632.89c137.23 0 248.47-111.24 248.47-248.46S499.34 135.97 362.1 135.97c-137.22 0-248.46 111.24-248.46 248.46S224.89 632.89 362.1 632.89Z"/><defs><linearGradient id="a" x1="583.36" x2="140.88" y1="98.76" y2="541.23" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><linearGradient id="b" x1="411.48" x2="312.75" y1="513.7" y2="612.43" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><linearGradient id="c" x1="438.76" x2="285.48" y1="447.85" y2="601.13" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><linearGradient id="d" x1="467.94" x2="256.29" y1="377.41" y2="589.05" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><linearGradient id="e" x1="500.3" x2="223.94" y1="299.29" y2="575.65" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><linearGradient id="f" x1="537.8" x2="186.43" y1="208.75" y2="560.11" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient></defs></svg>

        </div>
    </div>
</div>
<?php endif; ?>

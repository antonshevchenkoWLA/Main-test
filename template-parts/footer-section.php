<?php
$footer = get_field('footer_section_edit', 'option');
?>

<footer id="site-footer" class="bg-white">
    <div class="container py-20">

        <div class="grid grid-cols-1 md:grid-cols-[1fr_2fr_1fr_1fr] gap-20">

            <!-- LOGO -->
            <div class="max-w-[300px] ease-left" data-scroll>
                <!-- SVG LOGO -->
                <svg width="193" height="64" viewBox="0 0 193 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <svg width="193" height="64" viewBox="0 0 193 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6184 15.0283L0 40.4984H4.95036L7.53226 34.0421H19.0101L21.592 40.4984H26.7218L16.1392 15.0283H10.6147H10.6184ZM9.11124 30.132L13.2721 19.7279L17.433 30.132H9.11124Z" fill="#2C8CFF"/>
                        <path d="M39.7805 21.9512C37.2345 21.9512 34.866 22.992 33.6459 25.2511V22.3818H29.162V40.4984H33.6818V30.812C33.6818 27.7275 35.5837 25.8971 38.2374 25.8971C41.0346 25.8971 42.3624 27.7275 42.3624 30.2737V40.4984H46.918V29.3047C46.918 25.0716 44.1925 21.9512 39.7805 21.9512Z" fill="#2C8CFF"/>
                        <path d="M57.7593 14.9561L53.2396 17.3587V22.3814H48.7293V26.1119H53.2396V35.0087C53.2396 39.0264 54.8544 40.4979 59.2306 40.4979H63.9657V36.6955H59.9483C58.3335 36.6955 57.7612 36.1213 57.7612 34.544V26.1138H63.9676V22.3832H57.7612V14.9579L57.7593 14.9561Z" fill="#2C8CFF"/>
                        <path d="M131.968 35.0088C131.968 39.0265 133.582 40.4979 137.959 40.4979H142.694V36.6956H138.676C137.061 36.6956 136.489 36.1213 136.489 34.5441V26.1139H142.696V22.3833H136.489V14.958L131.969 17.3607V22.3833H127.837V26.1139H131.969V35.0107L131.968 35.0088Z" fill="#2C8CFF"/>
                        <path d="M150.755 22.3818H146.235V40.4984H150.755V22.3818Z" fill="#2C8CFF"/>
                        <path d="M168.45 32.7495C168.056 35.3694 166.048 36.9467 163.572 36.9467C160.739 36.9467 158.442 34.8311 158.442 31.4575C158.442 28.0839 160.703 25.9683 163.572 25.9683C165.689 26.0042 167.445 27.1168 168.02 29.0529H172.791C172.001 24.6763 168.199 21.877 163.572 21.877C158.406 21.877 153.886 25.787 153.886 31.4556C153.886 37.1242 158.227 41.0343 163.572 41.0343C168.379 41.0343 172.504 37.8779 173.042 32.7476H168.45V32.7495Z" fill="#2C8CFF"/>
                        <path d="M184.571 21.8789C179.871 21.9148 176.751 24.3912 175.926 27.6193H180.769C181.343 26.2914 182.778 25.5396 184.642 25.5396C186.865 25.5396 188.373 26.6881 188.516 28.7319L182.059 29.6291C177.431 30.2751 175.278 32.2471 175.278 35.5848C175.278 38.5259 177.752 41.0022 182.308 41.0022C184.997 41.0022 187.366 40.0332 188.658 38.0612V40.4998H192.998V29.1625C192.998 24.6424 189.627 21.8808 184.569 21.8808L184.571 21.8789ZM188.516 32.7496C188.516 35.4413 186.255 37.4492 183.028 37.4492C181.09 37.4492 179.979 36.4084 179.979 35.2259C179.979 33.7186 181.092 32.929 183.063 32.6438L188.516 31.8542V32.7515V32.7496Z" fill="#2C8CFF"/>
                        <path d="M148.494 20.1467C149.96 20.1467 151.148 18.9585 151.148 17.4928C151.148 16.0271 149.96 14.8389 148.494 14.8389C147.028 14.8389 145.84 16.0271 145.84 17.4928C145.84 18.9585 147.028 20.1467 148.494 20.1467Z" fill="#2C8CFF"/>
                        <path d="M137.732 58.6729C135.618 58.6559 134.055 57.2468 134.055 54.8063C134.055 52.3658 135.686 50.9227 137.732 50.9397C139.209 50.9567 140.429 51.7123 140.824 53.0364H143.78C143.23 50.288 140.773 48.4482 137.732 48.4482C134.158 48.4482 131.255 51.0077 131.255 54.8063C131.255 58.6049 134.039 61.1644 137.732 61.1644C140.996 61.1644 143.676 59.0167 143.986 55.8207H141.168C140.911 57.5906 139.536 58.6899 137.732 58.6729Z" fill="#2C8CFF"/>
                        <path d="M149.414 51.9374C147.077 51.9374 145.497 53.1577 145.102 54.8067H147.867C148.073 54.257 148.658 53.9642 149.448 53.9642C150.375 53.9642 150.942 54.4289 150.995 55.2015L148.005 55.6473C145.789 55.974 144.758 56.9015 144.758 58.4825C144.758 59.9426 145.91 61.1459 148.109 61.1459C149.431 61.1459 150.479 60.6472 151.081 59.7537V60.9041H153.556V55.4924C153.556 53.2408 151.924 51.9355 149.416 51.9355L149.414 51.9374ZM150.995 57.2302C150.995 58.4164 149.895 59.172 148.658 59.172C147.903 59.172 147.455 58.7602 147.455 58.2785C147.455 57.7118 147.884 57.368 148.641 57.2472L150.995 56.8694V57.2302Z" fill="#2C8CFF"/>
                        <path d="M160.89 51.9208C159.721 51.9208 158.759 52.3855 158.176 53.2261V52.1777H155.667V63.9985H158.262V60.1149C158.863 60.8025 159.756 61.1463 160.839 61.1463C163.073 61.1463 165.032 59.2725 165.032 56.5411C165.032 53.8097 163.177 51.9189 160.892 51.9189L160.89 51.9208ZM160.289 58.8796C159.103 58.8796 158.176 57.9521 158.176 56.611V56.4731C158.176 55.1339 159.086 54.2045 160.289 54.2045C161.56 54.2045 162.437 55.132 162.437 56.5411C162.437 57.9502 161.56 58.8777 160.289 58.8777V58.8796Z" fill="#2C8CFF"/>
                        <path d="M175.408 48.6737L172.813 49.9619V52.1776H170.666V54.2913H172.813V58.037C172.813 60.0468 173.586 60.9063 175.871 60.9063H178.345V58.7756H176.421C175.665 58.7756 175.406 58.4488 175.406 57.7782V54.2894H178.343V52.1757H175.406V48.6699L175.408 48.6737Z" fill="#2C8CFF"/>
                        <path d="M184.117 51.9374C181.781 51.9374 180.2 53.1577 179.805 54.8067H182.572C182.778 54.257 183.362 53.9642 184.153 53.9642C185.081 53.9642 185.647 54.4289 185.7 55.2015L182.71 55.6473C180.493 55.974 179.463 56.9015 179.463 58.4825C179.463 59.9426 180.616 61.1459 182.814 61.1459C184.136 61.1459 185.184 60.6472 185.787 59.7537V60.9041H188.261V55.4924C188.261 53.2408 186.629 51.9355 184.121 51.9355L184.117 51.9374ZM185.698 57.2302C185.698 58.4164 184.599 59.172 183.362 59.172C182.606 59.172 182.159 58.7602 182.159 58.2785C182.159 57.7118 182.587 57.368 183.345 57.2472L185.698 56.8694V57.2302Z" fill="#2C8CFF"/>
                        <path d="M192.966 48.707H190.371V60.9056H192.966V48.707Z" fill="#2C8CFF"/>
                        <path d="M167.935 51.1783C168.699 51.1783 169.319 50.5584 169.319 49.7937C169.319 49.0291 168.699 48.4092 167.935 48.4092C167.17 48.4092 166.55 49.0291 166.55 49.7937C166.55 50.5584 167.17 51.1783 167.935 51.1783Z" fill="#2C8CFF"/>
                        <path d="M169.223 52.1758H166.628V60.9082H169.223V52.1758Z" fill="#2C8CFF"/>
                        <path d="M76.5068 32.6422L81.9596 31.8527V32.7499C81.9596 35.4416 79.6988 37.4495 76.4709 37.4495C74.5331 37.4495 73.4225 36.4087 73.4225 35.2263C73.4225 33.7189 74.535 32.9312 76.5068 32.6441V32.6422ZM126.583 30.4511C126.583 47.2681 112.95 60.9022 96.1345 60.9022C79.3191 60.9022 65.6863 47.2681 65.6863 30.4511C65.6863 13.6341 79.3191 0 96.1364 0C112.954 0 126.585 13.6323 126.585 30.4511H126.583ZM86.4434 29.1629C86.4434 24.6427 83.072 21.8811 78.014 21.8811C73.3149 21.917 70.1947 24.3915 69.3693 27.6215H74.212C74.7862 26.2936 76.2216 25.5418 78.0858 25.5418C80.3088 25.5418 81.816 26.6903 81.9596 28.7341L75.502 29.6313C70.8746 30.2773 68.7215 32.2512 68.7215 35.587C68.7215 38.5281 71.1957 41.0044 75.7513 41.0044C78.4409 41.0044 80.8094 40.0354 82.1012 38.0634V40.502H86.4415V29.1647L86.4434 29.1629ZM103.561 22.1663H100.985C97.9364 22.2022 96.0344 23.2789 95.0296 25.5022V22.3817H90.6175V40.4982H95.1373V31.3861C95.1732 27.512 96.6086 26.5071 100.052 26.5071H103.561V22.1663ZM124.046 32.7499H119.455C119.06 35.3679 117.052 36.9471 114.576 36.9471C111.743 36.9471 109.446 34.8315 109.446 31.4579C109.446 28.0843 111.705 25.9687 114.576 25.9687C116.693 26.0046 118.45 27.1172 119.024 29.0533H123.795C123.005 24.6767 119.203 21.8773 114.576 21.8773C109.41 21.8773 104.891 25.7874 104.891 31.456C104.891 37.1246 109.231 41.0347 114.576 41.0347C119.383 41.0347 123.508 37.8783 124.046 32.748V32.7499Z" fill="url(#paint0_linear_10054_87)"/>
                        <defs>
                            <linearGradient id="paint0_linear_10054_87" x1="117.666" y1="8.91942" x2="74.6027" y2="51.9787" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#071359"/>
                                <stop offset="0.12" stop-color="#0D2977"/>
                                <stop offset="0.33" stop-color="#184CA7"/>
                                <stop offset="0.53" stop-color="#2068CD"/>
                                <stop offset="0.71" stop-color="#277BE8"/>
                                <stop offset="0.88" stop-color="#2A87F9"/>
                                <stop offset="1" stop-color="#2C8CFF"/>
                            </linearGradient>
                        </defs>
                    </svg>

                </svg>
            </div>

            <!-- MENU + EMAIL -->
            <div>
                <nav class="ease-top space-y-4 text-[var(--navy-blue)]"data-scroll>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer',
                        'depth' => 1,
                        'menu_class' => 'space-y-3',
                        'container' => false,
                    ]);
                    ?>
                </nav>

                <?php if (!empty($footer['mail_text'])): ?>
                    <div class="  md:text-[16px] text-[var(--navy-blue)] mt-2 font-light leading-relaxed text-[18px] border-t-2  pt-6 border-t-[var(--divider-line-blue)] ease-top"data-scroll>
                        <?php echo wp_kses_post($footer['mail_text']); ?>
                    </div>
                <?php endif; ?>

                <!-- SOCIALS -->
                <div class="flex gap-4 mt-6 ease-btm"data-scroll>
                    <?php foreach (['twitter','youtube'] as $social): ?>
                        <?php if (!empty($footer["{$social}_link"])): ?>
                            <a href="<?php echo esc_url($footer["{$social}_link"]); ?>"
                               target="_blank"
                               class="w-8 h-8 flex items-center justify-center border rounded-full
                                      hover:bg-[var(--bright-blue)] hover:text-white transition">
                                <?php echo get_social_icons($social); ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- LOCATIONS LEFT -->
            <div class="text-sm text-[var(--navy-blue)] space-y-10">
                <div>
                    <h3 class="ease-top mb-10 md:text-[32px] font-light font-light"data-scroll>
                        <?php echo wp_kses_post($footer['locations']); ?>
                    </h3>
                    <h3 class="ease-top mb-1 pt-4 md:text-[32px] font-light border-t-2  border-t-[var(--divider-line-blue)]"data-scroll>
                        <?php echo wp_kses_post($footer['united_states']); ?>
                    </h3>
                    <?php if (!empty($footer['united_states_second'])): ?>
                        <p class="ease-btm mt-2 leading-relaxed text-[18px]"data-scroll>
                            <?php echo wp_kses_post($footer['united_states_second']); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div>

                    <h3 class="ease-top mb-1 pt-4 md:text-[32px] font-light border-t-2  border-t-[var(--divider-line-blue)]" data-scroll >
                        <?php echo wp_kses_post($footer['united_kingdom']); ?>
                    </h3>
                    <?php if (!empty($footer['united_kingdom_second'])): ?>
                        <p class="ease-btm mt-2 leading-relaxed text-[18px]"data-scroll>
                            <?php echo wp_kses_post($footer['united_kingdom_second']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- LOCATIONS RIGHT -->
            <div class="text-sm text-[var(--navy-blue)]">

                <h3 class="ease-top mb-1 pt-4 md:mt-[84.8px] md:text-[32px] font-light border-t-2  border-t-[var(--divider-line-blue)]data-scroll"data-scroll>
                    <?php echo wp_kses_post($footer['india']); ?>
                </h3>
                <?php if (!empty($footer['india_second'])): ?>
                    <p class="ease-btm mt-2 leading-relaxed text-[18px]"data-scroll >
                        <?php echo wp_kses_post($footer['india_second']); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- BOTTOM  -->
            <div class="ease-btm md:col-span-3 md:col-start-2

                        flex flex-col md:flex-row text-left items-center content-center
                         gap-5 "data-scroll>
                <p class="mb-1 text-[var(--navy-blue)]  md:text-[16px] font-normal ">© <?php echo date('Y'); ?> <?php echo esc_html($footer['copyright_text']); ?></p>
                <?php if (!empty($footer['terms'])): ?>
                    <p class="mb-1 text-[var(--navy-blue)]  md:text-[16px] font-normal" href="<?php echo esc_url($footer['terms']); ?>">Terms of Use</p>
                <?php endif; ?>
                <?php if (!empty($footer['privacy'])): ?>
                    <p class="mb-1 text-[var(--navy-blue)]  md:text-[16px] font-normal" href="<?php echo esc_url($footer['privacy']); ?>">Privacy Policy</p>
                <?php endif; ?>
                <?php if (!empty($footer['disclaimer'])): ?>
                    <p class="mb-1 text-[var(--navy-blue)]  md:text-[16px] font-normal" href="<?php echo esc_url($footer['disclaimer']); ?>">Disclaimer</p>
                <?php endif; ?>


            </div>

        </div> <!-- grid -->

    </div> <!-- container -->
</footer>

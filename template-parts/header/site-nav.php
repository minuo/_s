<nav id="site-navigation" class="main-navigation">
    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ibooks'); ?></button> -->
    <div class="menu-button-container">
        <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
            <span class="dropdown-icon open"><?php esc_html_e('Menu', 'twentytwentyone'); ?>
                <?php echo ibooks_get_icon_svg('ui', 'menu'); // phpcs:ignore WordPress.Security.EscapeOutput?>
            </span>
            <span class="dropdown-icon close"><?php esc_html_e('Close', 'twentytwentyone'); ?>
                <?php echo ibooks_get_icon_svg('ui', 'close'); // phpcs:ignore WordPress.Security.EscapeOutput?>
            </span>
        </button><!-- #primary-mobile-menu -->
    </div><!-- .menu-button-container -->
    <?php
    wp_nav_menu(
    array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'primary-menu-container',
            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
            'fallback_cb'     => false,
        )
);
    ?>
</nav><!-- #site-navigation -->
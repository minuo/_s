<header id="masthead" class="site-header">
    <div class="site-header-main">
        <div class="site-header-branding-menu">
            <?php get_template_part('template-parts/header/site-branding'); ?>
            <?php get_template_part('template-parts/header/site-nav'); ?>
        </div>
        <div class="site-header-search">
            <form role="search" method="get" class="search-form" action="http://localhost/wpdev/">
                <label>
                    <span class="screen-reader-text">搜索：</span>
                    <input type="search" class="search-field" placeholder="搜索…" value="" name="s">
                </label>
                <input type="submit" class="search-submit" value="搜索">
            </form>
        </div>
    </div>
    
</header><!-- #masthead -->
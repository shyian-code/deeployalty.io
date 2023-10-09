<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head >
    <!-- Set up Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta property="og:title" content="DEEPLOYALTY DIGITAL PLATFORM FOR CUTTING-EDGE RETAILERS AND BANKS" />
    <meta property="og:description" content="Client base engagement and monetization without incurring costs associated with complex design" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://deeployalty.io/wp-content/uploads/2023/03/deeployalty-cover.png" />
    <?php
        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));
    ?>
    <meta property="og:url" content="<?php echo $current_url; ?>" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T5KWKBH');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <!-- Remove Microsoft Edge's & Safari phone-email styling -->
    <meta name="format-detection" content="telephone=no,email=no,url=no">

    <!-- Add external fonts below (GoogleFonts / Typekit) -->
    <link rel="preload" href="/wp-content/themes/deep-loyalty/assets/fonts/MonaSans.woff2" as="font" type="font/woff2" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class('no-outline'); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5KWKBH"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->


<!-- BEGIN of header -->
<header class="header">
    <div class="container menu-container px-md-g">
        <div class="row no-gutters-xs">
            <div class="col-lg-3 col-xl-3">
                <div class="logo text-left medium-text-left">
                    <span class="h1"><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo('name'); ?></span></span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-9 col-xl-9 p-0">
                <?php if (has_nav_menu('header-menu')) : ?>
                    <div class="navbar navbar-expand-xl">
                        <div class="logo-mobile text-left medium-text-left d-sm-block d-lg-none">
                            <span class="h1"><?php show_custom_logo(); ?><span class="css-clip"><?php echo get_bloginfo('name'); ?></span></span>
                        </div>
                        <button class="navbar-toggler" type="button"
                                data-toggle="collapse"
                                data-target="#mainMenu"
                                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">

                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <nav class="collapse navbar-collapse" id="mainMenu">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header-menu navbar-nav flex-wrap w-100',
                                'container' => false,
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'walker' => new Bootstrap_Navigation(),
                            )); ?>

                            <div class="navbar-lang-wrapper navbar-lang">
                                <?php
                                    $translations = pll_the_languages( array( 'raw' => 1 ) );
                                    $translations = array_values($translations);
                                foreach($translations as $key => $language) :
                                    ?>
                                    <a class="navbar-lang__link navbar-lang__link" href="<?= $language['url']; ?>"
                                       target="_self"><?= mb_strtoupper($language['slug']); ?></a>
                                       
                                       <?php if( $key + 1 < count($translations) ): ?>
                                            <span class="navbar-lang__link-divider">|</span>
                                       <?php endif; ?>
                                
                                <?php endforeach; ?>
                            
                            </div>
                        </nav>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</header>
<!-- END of header -->

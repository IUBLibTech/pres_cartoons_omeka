<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|GeorgiaPro:regular" media="screen" rel="stylesheet" type="text/css"/>
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
//    queue_css_file(array('iconfonts','style','lugar_file'));
queue_css_file(array('iconfonts','icon-font','iulibraries_drupal1','iulibraries_drupal2','iu-framework.min','style','iulibraries_omeka'), $version=NULL);
    queue_css_url('//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    echo head_css();

    echo theme_header_background();
    ?>

    <?php
    ($backgroundColor = get_theme_option('background_color')) || ($backgroundColor = "#FFFFFF");
    ($textColor = get_theme_option('text_color')) || ($textColor = "#444444");
    ($linkColor = get_theme_option('link_color')) || ($linkColor = "#888888");
    ($buttonColor = get_theme_option('button_color')) || ($buttonColor = "#000000");
    ($buttonTextColor = get_theme_option('button_text_color')) || ($buttonTextColor = "#FFFFFF");
    ($titleColor = get_theme_option('header_title_color')) || ($titleColor = "#000000");
    ?>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: <?php echo $titleColor; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
        a:link {
            color: <?php echo $linkColor; ?>;
        }
        a:visited {
            color: <?php echo thanksroy_brighten($linkColor, 40); ?>;
        }
        a:hover, a:active, a:focus {
            color: <?php echo thanksroy_brighten($linkColor, -40); ?>;
        }

        .button, button,
        input[type="reset"],
        input[type="submit"],
        input[type="button"],
        .pagination_next a,
        .pagination_previous a {
          background-color: <?php echo $buttonColor; ?>;
          color: <?php echo $buttonTextColor; ?> ;
        }

        #search-form input[type="text"] {
            border-color: <?php echo $buttonColor; ?>
        }

        @media (max-width:768px) {
            #primary-nav li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 40); ?>;
            }

            #primary-nav li ul li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 20); ?>;
            }

            #primary-nav li li li {
                background-color: <?php echo thanksroy_brighten($buttonColor, -20); ?>;
            }
        }
    </style>
    <!-- JavaScripts -->
    <?php
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('vendor/jquery-accessibleMegaMenu');
    queue_js_file('globals');
    queue_js_file('default');
    echo head_js();
    ?>


<!-- Matomo -->
<script type="text/javascript">
 /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  var _paq = window._paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://webapp1.dlib.indiana.edu/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '93']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!--  End Matomo Code -->


</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header role="banner" style=" width: 100%;">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title" ><?php echo link_to_home_page(theme_logo()); ?></div>
        </header>

        <div id="wrap">
            <div class="menu-button button">Menu</div>
            <nav id="primary-nav" role="navigation">
                <?php echo public_nav_main(array('role' => 'navigation')); ?>
                <div id="search-container" role="search">
                    <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                    <?php else: ?>
                    <?php echo search_form(); ?>
                    <?php endif; ?>
                </div>
            </nav>
            <div id="content" role="main" tabindex="-1">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

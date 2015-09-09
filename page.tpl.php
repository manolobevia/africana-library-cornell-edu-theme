<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php
$theme_path = base_path() . 'sites/all/themes/africana-library-cornell-edu-theme/';
?>

<!-- <?php print $theme_path; ?> -->



<header class="interior">

    <section class="CUL-branding">

        <img src="<?php print $theme_path; ?>images/cul-africana-logo.svg" />

    </section>

    <!--<nav>
        <ul>
            <li><a href="#">Home /</a></li>
            <li><a class="active" href="#">About /</a></li>
            <li><a href="#">Collections /</a></li>
            <li><a href="#">Reference & Instruction /</a></li>
            <li><a href="#">Africana Center /</a></li>
            <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></a></li>
        </ul>
    </nav>-->

    <!--Inside Africana / Mission / History / Staff / Library in the Life of Black People  / Contact / Hours-->


    <a class="sandwich" href="#" title="Show navigation"></a>

    <nav id="nav">

        <ul class="first-level">
            <li>
                <a href="index.html">Home</a> /
            </li>

            <li>

                <a class="active" href="http://www.google.com">About</a> /

                <div class="wrapper">

                    <p class="second-level">Second Level</p>

                    <ul class="third-level">
                        <li>Third Level Lorem Ipsum</li>
                        <li>Third Level Lorem Ipsum</li>
                        <li>Third Level Lorem Ipsum</li>
                    </ul>
                            
                </div>

            </li>

            <li>

                <a href="http://www.google.com">Collection</a> /

                <div class="wrapper">

                    <p class="second-level">Second Level</p>

                    <ul class="third-level">
                        <li>Third Level Lorem Ipsum</li>
                        <li>Third Level Lorem Ipsum</li>
                        <li>Third Level Lorem Ipsum</li>
                    </ul>
                            
                </div>

            </li>

            <li>
                <a href="#">Reference & Instruction</a> /
            </li>

            <li>
                <a href="#">Africana Center</a> /
            </li>

            <li>
                <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></a></li>
            </li>

        </ul>
    </nav>



</header>

<div class="hero"></div>

<section class="row page-content">

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-item">

        <nav class="breadcrumbs">

            <ul>
                <!--<li><a href="">Inside Africana / </a></li>
                <li><a href="">Mission / </a></li>
                <li><a href="">History / </a></li>
                <li><a href="">Staff / </a></li>
                <li><a href="">Library in the Life of Black People  / </a></li>
                <li><a href="">Contact / </a></li>
                <li><a href="">Hours </a></li>-->
                <li><a href="#">About / </a></li>
                <li><a href="#">Mission</a></li>
            </ul>
        </nav>

		<h2><?php print $title ?></h2>
        <?php print render($page['content']); ?>

        <!-- H2 for headers P for text -->
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-nav">

        <nav>
        
            <h3>New Film <i class="fa fa-film"></i></h3>
            <p><a href="#">The book of Negroes</a></p> 

            <h3>Special Collections <i class="fa fa-film"></i></h3>
            <p><a href="#">Hip Hop Collection</a></p> 


            <h3>New Book <i class="fa fa-film"></i></h3>
            <p><a href="#">African renaissance and Afro-Arab spring</a></p> 


        </nav>  


         

    </div>



</section>

<footer>

    <nav>

        <ul>
            <li><a class="active" href="#">Home / </a></li>
            <li><a href="#">About / </a></li>
            <li><a href="#">Collections / </a></li>
            <li><a href="#">Reference & Instruction / </a></li>
            <li><a href="#">Africana Center</a></li>

        </ul>

    </nav>

     <address>
        John Henrik Clarke Africana Library <a href="https://www.google.com/maps/place/310+Triphammer+Rd,+Ithaca,+NY+14850/@42.457342,-76.483041,17z/data=!3m1!4b1!4m2!3m1!1s0x89d08223058b0ccd:0x9f116572ce7f1fa"><span class="glyphicon glyphicon-map-marker"></span></a><br />
        Cornell University<br />
        310 Triphammer Road<br />
        Ithaca, NY 14853<br />
        <a href="tel:6072553822">607-255-3822 </a> 
    </address> 

    <div class="social-links">

        <a href="#"><img src="<?php print $theme_path; ?>images/facebook-icon.png"></a>
        <a href="#"><img src="<?php print $theme_path; ?>images/share-icon.png"></a>

    </div>

</footer>

<footer class="cul">

    <div class="wrapper">

    CORNELL UNIVERSITY LIBRARIES

    <nav>
        <p><strong>Library Resources:</strong></p>
        <ul>
            <li><a href="#">Library Website / </a></li>
            <li><a href="#">Search / </a></li>
            <li><a href="#">Catalog / </a></li>
            <li><a href="#">Articles & Full-Text / </a></li>
            <li><a href="#">Databases /</a></li>
            <li><a href="#">E-journal Titles /</a></li>
            <li><a href="#">Images</a></li>

        </ul>

    </nav>

    <p>©2015 Cornell University Library / <a href="tel:6072554144">(607) 255-4144 </a>  / Privacy</p>

    <a class="btn-give" href="#">GIVE TO THE LIBRARY</a>

    </div>
</footer>



    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/utils.js"></script>

    <script type="text/javascript">

        $( '#nav li:has('.wrapper')' ).doubleTapToGo();

    </script>
		
        
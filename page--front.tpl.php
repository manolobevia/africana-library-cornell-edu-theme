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
//$theme_path = base_path() . 'sites/all/themes/africana-library-cornell-edu-theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>


<header class="home">

    <section class="CUL-branding">

        <a href="http://www.cornell.edu"><img src="<?php print $theme_path; ?>images/cul-africana-logo.svg" /></a>

    </section>

    <section class="CUL-branding-mobile">

        <a href="http://www.cornell.edu"><img src="<?php print $theme_path; ?>images/cu-logo.png" /></a>

    </section>

    <h1><a href="https://www.library.cornell.edu/">Cornell University Library</a></h1>
    <h2><a href="/">John Henrik Clarke Africana Library</a></h2>


    <a class="sandwich" href="#" title="Show navigation"></a>

    <nav id="nav">

        <ul class="first-level">
            <li>
                <a id="home" href="/">Home</a> /
            </li>

            <li>

                <a id="about" href="/about">About</a> /

                <div class="wrapper">

                    <ul class="second-level">

                        <li><a href="/inside">Inside</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="https://www.library.cornell.edu/libraries">Hours</a></li>
                        <li><a href="/contact">Staff</a></li>
                        <li><a href="/mission">Mission</a></li>
                        <li><a href="/history">History</a></li>
                        <li><a href="library">Library in the life of black people</a></li>

                    </ul>

                </div>

            </li>

            <li>

                <a id="collections" href="/collections">Collections</a> /

                <div class="wrapper">

                    <ul class="second-level">

                        <li><a href="/thesis">Theses</a></li>
                        <li><a href="/africa">Internet Resources</a></li>
                        <li><a href="//selecteddatabases">Databases</a></li>
                        <li><a href="/">Reserves</a></li>
                        <li><a href="/online-lectures">Online lectures</a></li>
                        <li><a href="/film-collection">Films</a></li>
                        <li><a href="/">Special Collections</a></li>
                        <li><a href="/audio">Audio</a></li>
                        <li><a href="/digital-historical">Historical</a></li>
                        <li><a href="/microform">Microform</a></li>
                        <li><a href="/newspapers">Newspaper</a></li>
                        <li><a href="/">Willard Straight (doc)</a></li>
                        <li><a href="/">Willard Straight (images)</a></li>

                    </ul>

                </div>



            </li>

            <li>
                <a id="guides" href="/guides">Guides</a> /

                <div class="wrapper">

                    <ul class="second-level">

                        <li><a href="/courseguides">Course</a></li>
                        <li><a href="/libguides">Subject</a></li>


                    </ul>

                </div>
            </li>

            <li>
                <a id="reference-and-instruction" href="/reference-and-instruction">Reference & Instruction</a> /

                <div class="wrapper">

                    <ul class="second-level">

                        <li><a href="/requestinstruction">Instruction Request</a></li>
                        <li><a href="/requestconsultation">Reference Consultation</a></li>


                    </ul>

                </div>
            </li>


            <li>
                <a href="http://www.asrc.cornell.edu/">Africana Center</a> /
            </li>

            <li>
               <a class="show-hide-search" title="Search our Site" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
           </li>

           <!-- Menu structure
           <li>

                <a href="#">Parent Link</a> /

                <div class="wrapper">

                    <p class="second-level">Second Level Link</p>

                    <ul class="third-level">

                        <li>Third Level Link</li>
                        <li>Third Level Link</li>
                        <li>Third Level Link</li>

                    </ul>

                </div>

            </li>-->

        </ul>
    </nav>



</header>

<!-- SEARCH BOX -->
<section class="search-home">

    <!-- Pay attention to METHOD -->
    <form id="search" name="form1" method="get" action="https://search.library.cornell.edu">

        <label for="name">Search <span class="search-filter-selected">Library Catalog</span></label>


        <div class="filtered-search">

            <input type="text" class="search-homepage" name="q" value="" id="edit_keys" />

            <!--<select name="search_type" id="search_type" size="1" onChange="chgAction()" class="form-control filter">

                <option value="catalog" selected="selected">Library Catalog</option>
                <option value="worldcat">WorldCat</option>
                <option value="site">Site Search</option>

            </select>-->

            <div class="filter-search"><span class="active">Library Catalog</span> <span class="glyphicon glyphicon-chevron-down"></span>

              <ul id="filter-search-nav">
                  <li role="listitem"><a href="#" title="">Library Catalog</a></li>
                  <li role="listitem"><a href="#" title="">Site Search</a></li>
              </ul>

          </div>



            <!--a class="filter" href="#">LAW LIBRARY <span class="caret-icon">></span></a> -->
            <button type="submit" class="submit-search" href="#">
              <span class="glyphicon glyphicon-search"></span>
            </button>

        </div>

        <ul class="external-search">
          <li><a href="#">Databases</a> / </li>
          <li><a href="#">Research Guides</a></li>
        </ul>
    </form>

</section>

<div class="hero"></div>
<div class="henrik-clarke"></div>

<section class="row highlights">

    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <header>

            <h1>New Films <i class="fa fa-film"></i></h1>

            <figure>
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights.png" alt="" />
            </figure>

            <h2>The book of Negroes</h2>

        </header>

        <p>A universal story of loss, courage and triumph, this recounts the extraordinary journey of Aminata Diallo, an indomitable African woman who survives ...</p>

        <a class="btn-link" href="#" title="View more films">MORE FILMS</a>

        <a class="text-link" href="#" title="Request this film">REQUEST FILM</a>

    </article>

    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <header>

            <h1>New Films <i class="fa fa-film"></i></h1>

            <figure>
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights.png" alt="" />
            </figure>

            <h2>The book of Negroes</h2>

        </header>

        <p>A universal story of loss, courage and triumph, this recounts the extraordinary journey of Aminata Diallo, an indomitable African woman who survives ...</p>

        <a class="btn-link" href="#" title="View more films">MORE FILMS</a>

        <a class="text-link" href="#" title="Request this film">REQUEST FILM</a>

    </article>

    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <header>

            <h1>New Films <i class="fa fa-film"></i></h1>

            <figure>
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights.png" alt="" />
            </figure>

            <h2>The book of Negroes</h2>

        </header>

        <p>A universal story of loss, courage and triumph, this recounts the extraordinary journey of Aminata Diallo, an indomitable African woman who survives ...</p>

        <a class="btn-link" href="#" title="View more films">MORE FILMS</a>

        <a class="text-link" href="#" title="Request this film">REQUEST FILM</a>

    </article>

</section>

<section class="row features">

    <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

        <header>

            <h1>Selected Databases</h1>

        </header>

        <ul>

            <li>Black Freedom Struggle in the 20th Century</li>

            <li>Caribbean Literature</li>

            <li>Africa Knowledge Project</li>

            <li>Black Studies Center Oxford African American Studies Center Africa Wide</li>

        </ul>

        <a class="btn-link" href="#" title="View more databases">MORE DATABASES</a>

    </article>

    <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

        <header>

            <h1>Selected Databases</h1>

        </header>

        <figure>
            <img class="photo-feature" src="<?php print $theme_path; ?>images/online-lecture.png" alt="" />
        </figure>

        <p>RacRace Activism, and Art: A Converstation with Danny Glover," September 25, 2012</p>

        <a class="btn-link" href="#" title="View more lectures">MORE LECTURES</a>

    </article>

    <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

        <header>

            <h1>Online Resources</h1>

        </header>

        <ul>

            <li>Course Guides</li>
            <li>Subject Guides</li>
            <li>African American Studies</li>
            <li>African Studies</li>
            <li>Caribbean Stu</li>

         </ul>

        <a class="btn-link" href="#" title="View more resources">MORE RESOURCES</a>

    </article>


    <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

        <header>

            <h1>AFRICANA Studies & Research Center</h1>

        </header>

        <figure>
            <img class="photo-feature" src="<?php print $theme_path; ?>images/africana-studies.png" alt="" />
        </figure>

        <ul><li>Africana courses</li></ul>

        <h2>EVENTS/ 2015</h2>

        <ul>
            <li>April 14 - Olufemi Taiwo</li>
            <li>April 7 - Riley Snorton</li>
        </ul>


    </article>

</section>

<footer class="africana">

    <div class="wrapper">

        <nav>

            <ul>
                <li><a id="#home" href="#">Home / </a></li>
                <li><a id="href="#about" /about">About / </a></li>
                <li><a id="href="#colecctions" /collections">Collections / </a></li>
                <li><a id="href="#guides" /guides">Guides / </a></li>
                <li><a id="href="#reference-and-instruction" /reference-and-instruction">Reference & Instruction / </a></li>
                <li><a href="http://www.asrc.cornell.edu/">Africana Center</a> / </li>
                <li><a id="href="#contact" /contact">Contact Us</a></li>

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

            <a href="http://www.facebook.com/africanalibrary"><img src="<?php print $theme_path; ?>images/facebook-icon.png"></a>
            <a href="http://share.cornell.edu/"><img src="<?php print $theme_path; ?>images/share-icon.png"></a>

        </div>
    </div>

</footer>

<footer class="cul">

    <div class="wrapper">

    <a href="https://www.library.cornell.edu/libraries">CORNELL UNIVERSITY LIBRARIES</a>

    <nav>
        <p><strong>Library Resources:</strong></p>
        <ul>
            <li><a href="https://www.library.cornell.edu/">Library Website / </a></li>
            <li><a href="http://search.library.cornell.edu/">Search / </a></li>
            <li><a href="http://newcatalog.library.cornell.edu/">Catalog / </a></li>
            <li><a href="http://cornell.summon.serialssolutions.com/">Articles & Full-Text / </a></li>
            <li><a href="http://newcatalog.library.cornell.edu/databases">Databases /</a></li>
            <li><a href="http://erms.library.cornell.edu/">E-journal Titles /</a></li>
            <li><a href="#https://www.library.cornell.edu/visual-resources">Images</a></li>

        </ul>

    </nav>

    <p>©2015 Cornell University Library / <a href="tel:6072554144">(607) 255-4144 </a>  / <a href="https://www.library.cornell.edu/privacy">Privacy</a></p>

    <a class="btn-give" href="http://alumni.library.cornell.edu/content/give-library">GIVE TO THE LIBRARY</a>

    </div>
</footer>






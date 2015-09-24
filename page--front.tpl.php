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
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 612 141" enable-background="new 0 0 612 141" xml:space="preserve">
        <g>
            <path fill="#FFFFFF" d="M49.4,95.6c6.8,5.3,13.5,8.2,13.7,8.3l0.5,0.2l0.5-0.2c0.3-0.1,6.9-3,13.7-8.3c9.1-7.1,13.9-15.2,13.9-23.4
                V34.5H35.4v37C35.5,80,40.3,88.3,49.4,95.6z M62.4,84c-0.3-0.1-0.6-0.2-1-0.2h-0.1c-1.4,0-2.4,0.1-3.5,0.2s-2.2,0.2-3.8,0.2
                c-0.7,0-1.4,0-1.9,0V66.6h0.2c0.7,0,1.5,0,2.6,0c0.9,0,1.9-0.1,3-0.2c0.6-0.1,1.3-0.1,2-0.2c1.2-0.1,2.2,0.1,2.2,0.1
                c0.1,0,0.2,0.1,0.3,0.1V84L62.4,84z M89.2,72.1c0,15.4-18.9,25.8-24.5,28.6v-14c0.1-0.1,0.2-0.2,0.3-0.3c0.3-0.3,0.5-0.5,1-0.5
                c1.3,0,2.3,0.1,3.4,0.2s2.2,0.2,3.9,0.2c1.7,0,3,0,3,0l0.9-0.1V81h2.2v-2.8h-2.2v-5.1h2.2v-2.8h-2.2v-5.7h-1c-0.4,0-0.8,0-1.3,0
                c-0.7,0-1.5,0-2.5,0c-0.8,0-1.7-0.1-2.8-0.2c-0.6-0.1-1.3-0.1-2-0.2c-1.5-0.2-2.8,0.1-2.9,0.1c0,0,0,0-0.1,0v-5.4h24.6V72.1z
                 M64.7,84.1V66.3c0.1-0.1,0.3-0.1,0.5-0.2c0,0,1.1-0.2,2.3-0.1c0.7,0.1,1.4,0.1,2,0.2c1.1,0.1,2.1,0.2,3,0.2s1.6,0,2.2,0h0.5v17.7
                c-0.5,0-1.2,0-1.9,0c-1.6,0-2.7-0.1-3.8-0.2c-1.1-0.1-2.1-0.2-3.5-0.2C65.4,83.8,65,83.9,64.7,84.1z M38.2,37.2h51.1v19.1H38.2
                V37.2z M38.2,58.9h24.2v5.3c-0.4-0.1-1.5-0.2-2.7-0.1c-0.7,0.1-1.4,0.1-2,0.2c-1.1,0.1-2,0.2-2.8,0.2c-1,0-1.8,0-2.5,0
                c-0.5,0-0.9,0-1.3,0h-1v5.1h-2.4v2.8h2.4v5.1h-2.4v2.8h2.4V86l0.9,0.1c0.1,0,1.4,0.1,3,0c1.7,0,2.9-0.1,3.9-0.2
                c1.1-0.1,2-0.2,3.3-0.2c0.5,0,0.7,0.1,0.9,0.5c0,0,0.1,0.1,0.1,0.2v14C56.3,97.6,38,87.2,38,71.3L38.2,58.9z M59.5,39.1H45.2v1
                c0,3.1,0,8.4,0,8.6c0.1,1.1,0.8,2.1,2.2,3c1.7,1.2,4.3,2.7,4.4,2.7l0.5,0.3l0.5-0.3c0.1-0.1,2.9-1.6,4.6-2.7c2-1.3,2.1-2.6,2.1-3
                c0-0.2,0-4.8,0-8.6V39.1L59.5,39.1z M47.2,41.1h10.2c0,0.8,0,1.7,0,2.6H47.2C47.2,42.8,47.2,41.9,47.2,41.1z M57.4,48.6
                c0,0.5-0.7,1-1.2,1.4c-1.2,0.8-3.1,1.9-4,2.4c-0.8-0.5-2.6-1.5-3.8-2.4c-0.8-0.5-1.3-1.1-1.3-1.4c0-0.1,0-1.3,0-2.9h10.2
                C57.5,47.2,57.5,48.4,57.4,48.6z M83.8,38.6H69.1v1c0,3.9,0,8.6,0,8.8c0.1,1.1,0.8,2.1,2.2,3c1.8,1.2,4.4,2.7,4.5,2.8l0.5,0.3
                l0.5-0.3c0.1-0.1,3-1.6,4.7-2.8c2.1-1.4,2.1-2.6,2.1-3c0-0.2,0-4.9,0-8.8L83.8,38.6z M81.7,48.4c0,0.5-0.7,1.1-1.2,1.4
                c-1.3,0.8-3.2,1.9-4.1,2.4c-0.9-0.5-2.6-1.6-3.9-2.4c-0.4-0.3-1.3-0.9-1.3-1.5c0-0.1,0-0.2,0-0.5l5-3.6l5.5,3.7
                C81.7,48.1,81.7,48.3,81.7,48.4z M76.1,41.7l-5,3.6c0-1.4,0-3.2,0-4.7h10.5c0,1.6,0,3.3,0,4.8L76.1,41.7z M67.3,70.3l0.9,0.1
                c0.6,0.1,1.2,0.1,1.7,0.1l2.9,0.1v-2l-2.9-0.1c-0.4,0-0.9-0.1-1.5-0.1l-1-0.1c-0.3,0-0.5,0-0.7,0l0.1,2
                C67,70.3,67.1,70.3,67.3,70.3z M70,74.1c-0.4,0-0.9-0.1-1.4-0.1c-0.3,0-0.7-0.1-1-0.1s-0.5,0-0.7,0v2c0.1,0,0.3,0,0.5,0
                c0.4,0,0.7,0.1,1,0.1c0.6,0.1,1.1,0.1,1.6,0.1c0.6,0,1.5,0,2.2,0H73v-2h-0.8C71.5,74.1,70.6,74.1,70,74.1z M70,79.8
                c-0.4,0-0.9-0.1-1.5-0.1c-0.3,0-0.7-0.1-1-0.1s-0.5,0-0.7,0l0.1,2c0.1,0,0.3,0,0.5,0c0.4,0,0.7,0.1,1,0.1c0.6,0.1,1.2,0.1,1.6,0.1
                h0.8c0.8,0,1.8,0,2.1,0.1v-2c-0.3,0-1.3,0-2.1,0L70,79.8z M57.4,70.5c0.5,0,1-0.1,1.7-0.1c0.3,0,0.6-0.1,1-0.1c0.2,0,0.3,0,0.5,0
                v-2c-0.2,0-0.4,0-0.7,0c-0.4,0-0.7,0.1-1,0.1c-0.6,0.1-1.1,0.1-1.5,0.1l-2.9,0.1v2L57.4,70.5z M58.8,73.9C58.2,74,57.7,74,57.3,74
                l-2.9,0.1v2l2.9-0.1c0.5,0,1-0.1,1.7-0.1l0.9-0.1c0.2,0,0.3,0,0.4,0l0.1-2c-0.2,0-0.4,0-0.7,0L58.8,73.9z M58.8,79.6
                c-0.6,0.1-1.1,0.1-1.6,0.1c-0.9,0-2.4,0.1-2.8,0.1v2c0.4,0,1.9-0.1,2.9-0.1c0.5,0,1-0.1,1.7-0.1l1-0.1c0.1,0,0.3,0,0.4,0v-2
                c-0.2,0-0.4,0-0.7,0L58.8,79.6z M12.9,64.2c2.5,0,4-1.6,4.2-4.4c0-0.5,0-1.1-0.1-1.9v-0.2h-2.1l0.2,0.4c0.1,0.3,0.2,1,0.2,1.6
                c-0.1,1.4-1.2,2.3-2.7,2.2c-1.7-0.1-2.6-1.1-2.6-2.5c0-0.5,0.1-1,0.5-1.5l0.3-0.4l-2-0.3l-0.1,0.2c-0.3,0.5-0.4,1.3-0.5,1.9
                c-0.2,2.9,1.4,4.8,4.3,4.9C12.6,64.2,12.7,64.2,12.9,64.2z M13.2,54.4c0.6,0.2,1.1,0.2,1.6,0.2c1.9,0,3.3-1.1,3.9-3
                c0.3-1.2,0.2-2.2-0.3-3.1c-0.5-1-1.6-1.7-2.9-2.1c-0.5-0.2-1.1-0.2-1.5-0.2c-1.9,0-3.3,1.1-3.9,3C9.4,51.6,10.6,53.6,13.2,54.4z
                 M11.9,49.6c0.3-1.1,1.2-1.3,1.9-1.3c0.3,0,0.7,0.1,1.1,0.2c0.9,0.3,1.6,0.7,1.9,1.3c0.2,0.4,0.3,0.8,0.1,1.3
                c-0.3,1.1-1.2,1.3-1.9,1.3c-0.4,0-0.7-0.1-1.1-0.2C12.7,51.9,11.5,51,11.9,49.6z M21.8,43.1l-2.9-1.6l0.1-0.2
                c0.3-0.5,0.5-0.5,0.9-0.4l2.9,0.4l1.1-2.1l-3.8-0.4c-0.3,0-0.5,0-0.7,0c0-0.8-0.4-1.6-1.2-2c-0.4-0.2-0.8-0.3-1.2-0.3
                c-1.4,0-2.1,1.4-2.8,2.6l-1,1.9l7.6,4.1L21.8,43.1z M17.3,40.5l-0.1,0.2L15.8,40l0.1-0.2c0.3-0.6,0.7-1.2,1.3-0.9
                c0.2,0.1,0.3,0.2,0.4,0.4C17.7,39.7,17.5,40.2,17.3,40.5z M26.6,35.6l-3.9-3.2l5.6,1.3l1.5-1.9l-6.6-5.5l-1.4,1.6l3.9,3.2l-5.5-1.3
                l-1.6,2l6.6,5.5L26.6,35.6z M36.3,26.2l-1.2-1.4l-2.4,2l-1-1.3l2.2-1.8l-1.2-1.4l-2.2,1.8L29.6,23l2.4-1.9l-1.2-1.4L26.7,23
                l5.4,6.7L36.3,26.2z M43.4,21.9l-0.9-1.6l-2.7,1.5l-3.3-5.9L34.6,17l4.2,7.5L43.4,21.9z M50.7,19.1l-0.6-1.8l-2.9,1l-2.3-6.4
                l-2.1,0.7l2.9,8.1L50.7,19.1z M59.4,17.7c0.2,0,0.3,0,0.5,0c1.2-0.1,2.1-0.5,2.6-1.1s0.7-1.5,0.6-2.5l-0.4-5.4l-2.2,0.2l0.4,4.9
                c0.1,1.7-0.6,2-1.2,2.1c-0.1,0-0.1,0-0.2,0c-0.5,0-1.2-0.2-1.3-1.9l-0.4-4.9l-2.2,0.2l0.5,5.4C56.3,16.7,57.4,17.7,59.4,17.7z
                 M69.2,12.6l1.9,5.4l2.4,0.3l1.2-8.6l-2.1-0.3l-0.7,5L70,9l-2.4-0.3l-1.2,8.6l2.1,0.3L69.2,12.6z M81.1,11.6l-2-0.7l-2.6,8.2
                l2.1,0.7L81.1,11.6z M92.1,16.4l-2-1l-4.2,4.3l0.9-5.9l-2-1.1l-1.3,9l2.1,1.1L92.1,16.4z M94.2,28.8l1.2-1.5l-2.5-1.9l1-1.3
                l2.2,1.7l1.1-1.5L95,22.6l0.8-1.1l2.4,1.9l1.2-1.5l-4-3.2l-5.3,6.8L94.2,28.8z M97.8,32.4l2.5-2.2l0.1,0.2c0.3,0.4,0.3,0.5,0.1,1
                l-1.3,2.5l1.6,1.8l1.7-3.4c0.1-0.1,0.2-0.4,0.2-0.7c0.7,0.3,1.6,0.2,2.3-0.4c1.9-1.6,0.4-3.3-0.7-4.6l-1.4-1.6l-6.5,5.7L97.8,32.4z
                 M102.9,27.9l0.1,0.2c0.3,0.4,0.6,0.8,0.6,1.1c0,0.2-0.1,0.3-0.3,0.4c-0.2,0.1-0.3,0.2-0.5,0.2c-0.4,0-0.8-0.4-1-0.7l-0.1-0.2
                L102.9,27.9z M105.8,39.4c-0.4,0.2-1-0.2-1.2-0.6c-0.3-0.5-0.4-1-0.4-1.7v-0.5l-2,0.9l0.1,0.4c0.2,0.7,0.3,1.1,0.7,1.8
                c0.7,1.2,1.6,1.8,2.6,1.8c0.5,0,0.9-0.1,1.4-0.4c1.5-0.9,1.3-2.3,1.1-3.4c-0.1-0.7-0.2-1.2,0.1-1.4c0.2-0.1,0.3-0.1,0.4-0.1
                c0.4,0,0.7,0.4,0.8,0.5c0.2,0.4,0.4,0.9,0.5,1.4l0.1,0.4l1.8-0.8v-0.2c-0.1-0.6-0.4-1.2-0.8-1.9c-0.9-1.6-2.5-2.1-3.9-1.2
                c-1.5,0.9-1.3,2.3-1.1,3.3S106.2,39.2,105.8,39.4z M106.8,47.2l8-3.3l-0.8-2l-8,3.3L106.8,47.2z M114.9,50l-6.6,1.6l0.5,2.1
                l6.6-1.6l0.5,2.2l1.8-0.4l-1.6-6.5l-1.8,0.4L114.9,50z M109.8,60.5l0.1,2.2l3.4-0.2l5.4,2.8l-0.1-2.4l-3.2-1.6l3-1.9l-0.1-2.6
                l-5.1,3.4L109.8,60.5z M14.5,80.3l1.8-0.5l-0.8-2.6l1.3-0.4l0.8,2.7l1.8-0.5L18,74.1l-8.3,2.4l0.6,2.1l3.4-1L14.5,80.3z M22.2,87.4
                c0.3-1,0.2-2.1-0.3-3.2c-0.8-1.6-2-2.4-3.5-2.4c-0.7,0-1.5,0.2-2.3,0.6C14.8,83,14,83.9,13.6,85c-0.3,1-0.2,2.1,0.3,3.2
                c0.8,1.5,2,2.4,3.6,2.4c0.7,0,1.5-0.2,2.3-0.6C21,89.4,21.9,88.5,22.2,87.4z M18.8,87.9c-0.5,0.3-1.1,0.4-1.6,0.4
                c-0.8,0-1.3-0.3-1.6-1c-0.2-0.5-0.3-0.9-0.1-1.3c0.2-0.6,0.8-1.2,1.6-1.6c0.5-0.2,1-0.4,1.5-0.4c0.8,0,1.3,0.3,1.6,1
                c0.2,0.5,0.3,0.9,0.1,1.3C20.1,87,19.6,87.5,18.8,87.9z M28.3,94.2l-3.9,3.1c-1,0.8-1.8,0.9-2.4,0.2c-0.2-0.3-0.3-0.6-0.3-0.9
                c0.1-0.4,0.4-0.9,1-1.4l3.9-3.1l-1.4-1.7l-4.3,3.4c-0.9,0.7-1.4,1.5-1.4,2.3s0.3,1.6,1,2.5c0.8,1.1,1.7,1.6,2.7,1.6
                c0.7,0,1.4-0.3,2.1-0.9l4.3-3.4L28.3,94.2z M35.6,101.2l-3.2,3.9l1.2-5.6l-1.9-1.6l-5.5,6.7l1.7,1.3l3.2-3.9l-1.2,5.6l1.9,1.5
                l5.5-6.7L35.6,101.2z M42,105.3l-2.2-1.1l-3.9,7.7l2.2,1.1c1.1,0.5,2,0.8,2.9,0.8c1.5,0,2.7-0.8,3.5-2.4
                C45.7,108.8,44.9,106.8,42,105.3z M42.4,110.4c-0.4,0.9-1.2,1.4-2.1,1.4c-0.4,0-0.7-0.1-1.1-0.3l-0.5-0.3l2.2-4.4l0.5,0.3
                c0.6,0.3,1,0.8,1.2,1.3C42.8,109.1,42.7,109.7,42.4,110.4z M46.8,116.7l5.2,1.4l0.5-1.8l-3-0.8l0.4-1.6l2.8,0.7l0.5-1.8l-2.8-0.7
                l0.4-1.3l3,0.8l0.5-1.8l-5.1-1.4L46.8,116.7z M59.5,110.4l-2.5-0.1l-0.5,8.6L59,119c0.2,0,0.4,0,0.6,0c2.9,0,4.4-1.4,4.6-4
                c0.1-1.3-0.2-2.4-0.9-3.1C62.5,111,61.2,110.5,59.5,110.4z M59.4,117.2h-0.6l0.3-4.9h0.6c1.2,0.1,2.3,1,2.2,2.6
                C61.8,116.5,60.5,117.2,59.4,117.2z M71.8,109.8l-1.5,9.1l2.3-0.5l0.3-1.9l2.8-0.6l1.1,1.7l2.4-0.5l-5.1-7.7L71.8,109.8z
                 M73.1,114.5l0.3-2.3l1.2,1.9L73.1,114.5z M80,114.2l0.7,2.1l2.1-0.7l-0.8-2.1L80,114.2z M84.3,105.5l-2.2,1.2l4.1,7.6l2.2-1.2
                c2.9-1.6,3.6-3.6,2.3-6.1C89.3,104.4,87.1,103.9,84.3,105.5z M87.8,111.3l-0.5,0.3l-2.3-4.3l0.5-0.3c0.3-0.2,0.7-0.3,1.1-0.3
                c0.9,0,1.6,0.5,2.1,1.3C89.4,109.4,88.8,110.7,87.8,111.3z M92.3,108.2l1.3,1.8l1.8-1.3l-1.3-1.8L92.3,108.2z M95.7,97.2l-0.4,3.4
                l1.9,0.3l0.2-1.4l4.1,4.2l1.6-1.6L97,95.9L95.7,97.2z M107.4,92.6c-0.7-0.5-1.5-0.6-2.4-0.3c0-0.9-0.4-1.6-1-2
                c-1.1-0.8-2.5-0.3-3.6,1.1c-1,1.4-0.9,2.8,0.3,3.7c0.6,0.4,1.4,0.5,2.1,0.3c-0.1,0.9,0.2,1.6,0.9,2.1c0.5,0.4,1,0.5,1.5,0.5
                c0.9,0,1.7-0.5,2.5-1.5c0.6-0.8,0.9-1.6,0.8-2.4C108.4,93.6,108.1,93.1,107.4,92.6z M103.3,93.3c-0.3,0.2-0.6,0.4-0.9,0.4
                c-0.1,0-0.3,0-0.4-0.1c-0.4-0.3-0.2-0.8,0-1.1c0.1-0.2,0.3-0.3,0.5-0.3c0.1,0,0.3,0.1,0.5,0.2C103.3,92.5,103.4,92.9,103.3,93.3z
                 M106.3,95.6c-0.3,0.4-0.8,0.5-1.2,0.2c-0.3-0.3-0.5-0.6-0.4-1.2c0.6-0.4,1.1-0.5,1.5-0.2c0.2,0.1,0.3,0.3,0.3,0.5
                C106.5,95.1,106.5,95.4,106.3,95.6z M111.4,84.1c-1.5-0.7-2.9-0.3-3.6,1.1c-0.2,0.4-0.3,0.8-0.2,1.2c-0.5-0.4-1-1.1-0.6-2
                c0.2-0.4,0.5-0.7,0.8-1l0.3-0.2l-1.6-1.1l-0.2,0.2c-0.4,0.4-0.8,0.9-1.1,1.5c-0.4,0.9-0.5,1.7-0.2,2.5c0.5,1.4,1.9,2.3,3,2.9
                c1,0.5,1.8,0.7,2.5,0.7c1.1,0,1.9-0.5,2.5-1.6C113.7,86.5,113.2,85,111.4,84.1z M111.3,87.4c-0.1,0.3-0.4,0.4-0.7,0.4
                c-0.2,0-0.5-0.1-0.7-0.2c-0.4-0.2-0.7-0.5-0.8-0.7c-0.1-0.2,0-0.3,0-0.5c0.1-0.3,0.3-0.4,0.6-0.4c0.2,0,0.5,0.1,0.8,0.2
                c0.4,0.2,0.6,0.4,0.7,0.7C111.4,87,111.4,87.2,111.3,87.4z M114.4,75.4c-1.7-0.5-3.1,0.3-3.6,1.9c0,0.2-0.1,0.3-0.1,0.4l-1-0.3
                l0.9-3l-1.7-0.5l-1.5,5l4.8,1.5V80c0-0.5,0.1-0.9,0.2-1.3s0.6-1.4,1.5-1.2c1,0.3,0.8,1.4,0.7,1.7c-0.2,0.6-0.5,1-0.8,1.4l-0.3,0.3
                l2,0.7l0.1-0.2c0.3-0.6,0.6-1.3,0.8-1.8c0.3-1,0.3-1.9-0.1-2.7C115.9,76.1,115.2,75.6,114.4,75.4z M19.8,63.8
                c0,24,19.5,43.6,43.6,43.6S107,87.9,107,63.8S87.5,20.2,63.4,20.2S19.8,39.9,19.8,63.8z M63.4,21.7c23.2,0,42.1,18.8,42.1,42.1
                c0,23.2-18.8,42.1-42.1,42.1S21.3,87.1,21.3,63.8C21.3,40.7,40.3,21.7,63.4,21.7z M63.4,4.2C30.5,4.2,3.8,30.9,3.8,63.9
                c0,32.9,26.7,59.6,59.6,59.6S123,96.8,123,63.9C123,30.9,96.4,4.2,63.4,4.2z M63.4,121.9c-32.1,0-58-26-58-58
                c0-32.1,26-58.1,58-58.1c32.1,0,58,26,58,58.1C121.5,95.9,95.5,121.9,63.4,121.9z"/>
        </g>
        <g>
            <path fill="#FFFFFF" d="M157.1,46c1.1,0,2.1-0.2,2.9-0.6c0.8-0.4,1.7-1,2.5-1.8l2.1,2.2c-2,2.3-4.5,3.4-7.5,3.4s-5.3-0.9-7.3-2.8
                c-1.9-1.9-2.9-4.3-2.9-7.1c0-2.9,1-5.3,2.9-7.2c2-1.9,4.4-2.9,7.4-2.9s5.5,1.1,7.5,3.3l-2.1,2.3c-0.9-0.9-1.8-1.5-2.6-1.9
                c-0.8-0.3-1.8-0.5-2.9-0.5c-2,0-3.6,0.6-4.9,1.9c-1.3,1.3-2,2.9-2,4.8c0,2,0.7,3.6,2,4.9C153.8,45.4,155.3,46,157.1,46z M180.1,47
                c-1.5,1.5-3.3,2.2-5.5,2.2s-4.1-0.7-5.5-2.2c-1.5-1.5-2.2-3.3-2.2-5.4c0-2.1,0.7-3.9,2.2-5.4s3.3-2.2,5.5-2.2s4.1,0.7,5.5,2.2
                c1.5,1.5,2.2,3.3,2.2,5.4C182.3,43.7,181.6,45.5,180.1,47z M171.3,45.1c0.9,0.9,2,1.3,3.3,1.3s2.5-0.4,3.3-1.3
                c0.9-0.9,1.3-2,1.3-3.5s-0.4-2.6-1.3-3.5c-0.9-0.9-2-1.3-3.3-1.3s-2.5,0.4-3.3,1.3c-0.9,0.9-1.3,2.1-1.3,3.5S170.4,44.2,171.3,45.1
                z M193.6,37.2c-1.5,0-2.7,0.5-3.5,1.5s-1.2,2.3-1.2,4V49h-3.1V34.3h3.1v3c0.5-0.9,1.2-1.7,2-2.3c0.9-0.6,1.8-0.9,2.7-0.9V37.2
                C193.7,37.2,193.6,37.2,193.6,37.2z M200,41v8h-3.1V34.3h3.1V37c0.5-0.9,1.2-1.6,2.1-2.1c0.9-0.5,1.8-0.8,2.8-0.8
                c1.7,0,3,0.5,4,1.5s1.5,2.5,1.5,4.4v9h-3v-8.1c0-2.7-1.1-4.1-3.4-4.1c-1.1,0-2,0.4-2.8,1.1C200.4,38.6,200,39.7,200,41z M228.5,43
                H217c0.1,1.1,0.6,1.9,1.5,2.6c0.9,0.7,1.9,1,3.1,1c1.8,0,3.2-0.6,4.2-1.7l1.8,1.9c-1.6,1.6-3.7,2.5-6.2,2.5c-2.1,0-3.8-0.7-5.3-2.1
                c-1.5-1.4-2.2-3.2-2.2-5.5s0.7-4.2,2.2-5.5c1.5-1.4,3.2-2,5.2-2s3.7,0.6,5.1,1.8c1.4,1.2,2.1,2.9,2.1,5L228.5,43L228.5,43z
                 M216.9,40.5h8.4c0-1.2-0.4-2.2-1.2-2.8c-0.8-0.7-1.7-1-2.9-1s-2.2,0.3-3.1,1C217.2,38.4,216.9,39.4,216.9,40.5z M235,49h-3.1V28.5
                h3.1V49z M242.6,49h-3.1V28.5h3.1V49z M259.5,44.6c0.9,1,2.1,1.5,3.6,1.5s2.7-0.5,3.6-1.5s1.3-2.4,1.3-4.2V29.6h3.3v10.8
                c0,2.8-0.8,4.9-2.3,6.4s-3.5,2.3-5.9,2.3s-4.4-0.8-5.9-2.3s-2.3-3.6-2.3-6.4V29.6h3.3v10.7C258.2,42.1,258.6,43.5,259.5,44.6z
                 M278.9,41v8h-3.1V34.3h3.1V37c0.5-0.9,1.2-1.6,2.1-2.1s1.8-0.8,2.8-0.8c1.7,0,3,0.5,4,1.5s1.5,2.5,1.5,4.4v9h-3.1v-8.1
                c0-2.7-1.1-4.1-3.4-4.1c-1.1,0-2,0.4-2.8,1.1C279.3,38.6,278.9,39.7,278.9,41z M293.9,31.2c-0.4-0.4-0.6-0.8-0.6-1.4
                c0-0.5,0.2-1,0.6-1.4s0.8-0.6,1.4-0.6c0.5,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.8,0.6,1.4c0,0.5-0.2,1-0.6,1.4s-0.8,0.6-1.4,0.6
                C294.7,31.8,294.3,31.6,293.9,31.2z M296.8,49h-3.1V34.3h3.1V49z M305.1,49l-5.9-14.7h3.2l4.5,11.1l4.5-11.1h3.2L308.7,49H305.1z
                 M330.9,43h-11.5c0.1,1.1,0.6,1.9,1.5,2.6c0.9,0.7,1.9,1,3.1,1c1.8,0,3.2-0.6,4.2-1.7l1.8,1.9c-1.6,1.6-3.7,2.5-6.2,2.5
                c-2.1,0-3.8-0.7-5.3-2.1c-1.5-1.4-2.2-3.2-2.2-5.5s0.7-4.2,2.2-5.5c1.5-1.4,3.2-2,5.2-2s3.7,0.6,5.1,1.8s2.1,2.9,2.1,5L330.9,43
                L330.9,43z M319.3,40.5h8.4c0-1.2-0.4-2.2-1.2-2.8c-0.8-0.7-1.7-1-2.9-1s-2.2,0.3-3.1,1S319.3,39.4,319.3,40.5z M342,37.2
                c-1.5,0-2.7,0.5-3.5,1.5s-1.2,2.3-1.2,4V49h-3.1V34.3h3.1v3c0.5-0.9,1.2-1.7,2-2.3c0.9-0.6,1.8-0.9,2.7-0.9V37.2
                C342.1,37.2,342,37.2,342,37.2z M355.7,44.6c0,1.4-0.5,2.5-1.5,3.4s-2.3,1.3-3.9,1.3c-1.1,0-2.2-0.2-3.3-0.6
                c-1.2-0.4-2.2-0.9-3.1-1.6l1.5-2.4c1.7,1.3,3.4,1.9,5,1.9c0.7,0,1.3-0.2,1.7-0.5c0.4-0.3,0.6-0.7,0.6-1.2c0-0.7-1-1.4-2.9-2
                c-0.1-0.1-0.3-0.1-0.3-0.1c-3.1-0.8-4.6-2.2-4.6-4.1c0-1.4,0.5-2.5,1.6-3.3s2.4-1.2,4.1-1.2s3.3,0.5,4.8,1.5l-1.2,2.3
                c-1.2-0.8-2.5-1.2-3.9-1.2c-0.7,0-1.3,0.1-1.8,0.4c-0.5,0.3-0.7,0.7-0.7,1.2s0.2,0.8,0.7,1.1c0.3,0.2,0.8,0.3,1.4,0.5
                c0.6,0.1,1.1,0.3,1.6,0.4c0.5,0.1,0.9,0.3,1.3,0.5s0.9,0.4,1.4,0.8C355.2,42.2,355.7,43.2,355.7,44.6z M359.4,31.2
                c-0.4-0.4-0.6-0.8-0.6-1.4c0-0.5,0.2-1,0.6-1.4s0.8-0.6,1.4-0.6c0.5,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.8,0.6,1.4c0,0.5-0.2,1-0.6,1.4
                s-0.8,0.6-1.4,0.6C360.3,31.8,359.8,31.6,359.4,31.2z M362.4,49h-3.1V34.3h3.1V49z M370.7,36.8v7.5c0,0.7,0.2,1.3,0.6,1.7
                s0.9,0.6,1.5,0.6c0.7,0,1.3-0.3,1.9-1l1.3,2.2c-1.1,1-2.3,1.5-3.6,1.5c-1.3,0-2.4-0.5-3.4-1.4c-0.9-0.9-1.4-2.1-1.4-3.7v-7.4h-1.9
                v-2.5h1.9v-4.7h3.1v4.6h3.9v2.5L370.7,36.8L370.7,36.8z M380.3,54.8c-1.3,0-2.6-0.5-3.7-1.5l1.4-2.5c0.6,0.6,1.3,0.9,2,0.9
                s1.3-0.2,1.7-0.7c0.4-0.5,0.6-1,0.6-1.6c0-0.3-2-5.3-5.9-15.1h3.3l4.4,10.8l4.4-10.8h3.3l-7.1,17.5c-0.4,1-1,1.7-1.8,2.3
                C382.1,54.6,381.3,54.8,380.3,54.8z M402.4,49V29.6h3.3v16.2h8.8v3.1C414.5,49,402.4,49,402.4,49z M417.9,31.2
                c-0.4-0.4-0.6-0.8-0.6-1.4c0-0.5,0.2-1,0.6-1.4s0.8-0.6,1.4-0.6c0.5,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.8,0.6,1.4c0,0.5-0.2,1-0.6,1.4
                s-0.8,0.6-1.4,0.6C418.7,31.8,418.2,31.6,417.9,31.2z M420.8,49h-3.1V34.3h3.1V49z M433.1,33.9c2,0,3.7,0.7,5.1,2
                c1.4,1.4,2.1,3.2,2.1,5.4s-0.7,4.1-2.1,5.5s-3,2.1-4.9,2.1s-3.5-0.8-5-2.4v2.2h-3.1V28.4h3.1v8.3C429.6,35,431.1,33.9,433.1,33.9z
                 M428.3,41.7c0,1.4,0.4,2.5,1.3,3.4c0.8,0.9,1.9,1.3,3.1,1.3s2.3-0.4,3.2-1.3c0.9-0.9,1.4-2,1.4-3.4s-0.4-2.6-1.3-3.5
                s-1.9-1.4-3.2-1.4c-1.2,0-2.3,0.5-3.1,1.4C428.9,39.1,428.3,40.3,428.3,41.7z M451.5,37.2c-1.5,0-2.7,0.5-3.5,1.5s-1.2,2.3-1.2,4
                V49h-3V34.3h3.1v3c0.5-0.9,1.2-1.7,2-2.3c0.9-0.6,1.8-0.9,2.7-0.9v3.1C451.6,37.2,451.6,37.2,451.5,37.2z M466.6,49h-2.8v-2
                c-1.2,1.5-2.8,2.2-4.9,2.2c-1.5,0-2.8-0.4-3.8-1.3s-1.5-2-1.5-3.5s0.5-2.5,1.6-3.2s2.5-1.1,4.3-1.1h4v-0.6c0-2-1.1-2.9-3.3-2.9
                c-1.4,0-2.8,0.5-4.3,1.5l-1.4-1.9c1.8-1.4,3.8-2.1,6.1-2.1c1.7,0,3.1,0.4,4.2,1.3c1.1,0.9,1.6,2.3,1.6,4.1V49H466.6z M463.5,43.5
                v-1.2H460c-2.2,0-3.3,0.7-3.3,2.1c0,0.7,0.3,1.3,0.8,1.6s1.3,0.6,2.3,0.6s1.8-0.3,2.6-0.8C463.2,45.3,463.5,44.4,463.5,43.5z
                 M478.7,37.2c-1.5,0-2.7,0.5-3.5,1.5s-1.2,2.3-1.2,4V49h-3.1V34.3h3.1v3c0.5-0.9,1.2-1.7,2-2.3c0.9-0.6,1.8-0.9,2.7-0.9V37.2
                C478.8,37.2,478.8,37.2,478.7,37.2z M483.8,54.8c-1.3,0-2.6-0.5-3.7-1.5l1.4-2.5c0.6,0.6,1.3,0.9,2,0.9s1.3-0.2,1.7-0.7
                c0.4-0.5,0.6-1,0.6-1.6c0-0.3-2-5.3-5.9-15.1h3.3l4.4,10.8l4.4-10.8h3.3l-7.1,17.5c-0.4,1-1,1.7-1.8,2.3
                C485.7,54.6,484.8,54.8,483.8,54.8z"/>
        </g>
        <g>
            <path fill="#FFFFFF" d="M149.4,68.9v-4.2h13.4v18.2c0,3.2-0.8,5.6-2.4,7.2c-1.6,1.6-3.7,2.4-6.3,2.4c-3.2,0-6-1.1-8.2-3.4l2.6-3.7
                c1.8,1.7,3.5,2.6,5.3,2.6c1.2,0,2.2-0.4,3.1-1.2c0.9-0.8,1.3-2,1.3-3.7V68.9L149.4,68.9L149.4,68.9z M193.3,88.5
                c-2.8,2.7-6.2,4.1-10.3,4.1s-7.6-1.4-10.3-4.1c-2.8-2.7-4.2-6.1-4.2-10.2s1.4-7.5,4.2-10.2S178.9,64,183,64s7.6,1.4,10.3,4.1
                c2.8,2.7,4.2,6.1,4.2,10.2C197.6,82.4,196.2,85.8,193.3,88.5z M189.9,71.2c-1.9-1.9-4.2-2.9-6.9-2.9s-5,1-6.9,2.9s-2.8,4.3-2.8,7.1
                c0,2.8,0.9,5.1,2.8,7.1c1.9,1.9,4.2,2.9,6.9,2.9s5-1,6.9-2.9s2.8-4.3,2.8-7.1C192.7,75.6,191.8,73.2,189.9,71.2z M203.5,92.4V64.8
                h4.7v12h13.7v-12h4.7v27.6h-4.7V81.1h-13.7v11.3H203.5z M255,64.7h4.7v27.6h-5.1L239,72.2v20.1h-4.7V64.7h4.7l16,20.6V64.7z
                 M278.1,92.4V64.8h4.7v12h13.7v-12h4.7v27.6h-4.7V81.1h-13.7v11.3H278.1z M328.3,64.7v4.4h-14.7v7.3h13.2v4.1h-13.2v7.4h15.2v4.4
                h-19.9V64.7L328.3,64.7L328.3,64.7z M355.4,64.7h4.7v27.6H355l-15.6-20.1v20.1h-4.7V64.7h4.7l16,20.6V64.7z M389.9,73.7
                c0,4.6-2,7.4-6,8.6l7.2,10h-5.9l-6.6-9.3h-6.1v9.3h-4.7V64.7h10.3c4.2,0,7.2,0.7,9,2.1C388.9,68.2,389.9,70.6,389.9,73.7z
                 M383.7,77.6c0.9-0.8,1.4-2.1,1.4-3.9s-0.5-3-1.5-3.7s-2.7-1-5.2-1h-5.9v9.8h5.8C381,78.8,382.7,78.4,383.7,77.6z M396.6,64.7h4.7
                v27.6h-4.7V64.7z M408.9,64.7h4.7v13.5l12.6-13.5h5.9l-11,12.1l11.3,15.5H427l-9.2-12.1l-4,4.3v7.7H409V64.7H408.9z M460.3,88.1
                c1.6,0,3-0.3,4.1-0.8c1.2-0.5,2.4-1.4,3.6-2.6l3,3.1c-2.9,3.2-6.5,4.9-10.6,4.9s-7.6-1.3-10.4-4s-4.1-6.1-4.1-10.2
                s1.4-7.5,4.2-10.3s6.3-4.1,10.6-4.1c4.3,0,7.9,1.6,10.7,4.7l-3,3.2c-1.3-1.3-2.6-2.1-3.7-2.6c-1.2-0.5-2.5-0.8-4.1-0.8
                c-2.8,0-5.1,0.9-7,2.7c-1.9,1.8-2.8,4.1-2.8,6.9s0.9,5.1,2.8,7C455.4,87.2,457.7,88.1,460.3,88.1z M476.8,92.4V64.8h4.7V88h12.6
                v4.4H476.8z M503.1,86.1l-2.8,6.3h-5l12.2-27.6h5l12.2,27.6h-5l-2.8-6.3H503.1z M515,81.8l-5-11.4l-5,11.4H515z M550.6,73.7
                c0,4.6-2,7.4-6,8.6l7.2,10H546l-6.6-9.3h-6.1v9.3h-4.7V64.7h10.3c4.2,0,7.2,0.7,9,2.1S550.6,70.6,550.6,73.7z M544.4,77.6
                c0.9-0.8,1.4-2.1,1.4-3.9s-0.5-3-1.5-3.7s-2.7-1-5.2-1h-5.9v9.8h5.8C541.7,78.8,543.5,78.4,544.4,77.6z M557.3,64.7h4.7v13.5
                l12.6-13.5h5.9l-11,12.1l11.3,15.5h-5.5l-9.3-12l-4,4.3v7.7h-4.7V64.7z M604.6,64.7v4.4h-14.7v7.3h13.2v4.1h-13.2v7.4h15.2v4.4
                h-19.9V64.7L604.6,64.7L604.6,64.7z M152.4,125.2l-2.8,6.3h-5l12.2-27.6h5l12.2,27.6h-5l-2.8-6.3H152.4z M164.3,120.9l-5-11.4
                l-5,11.4H164.3z M182.4,108.2v7.6h12.2v4.3h-12.2v11.4h-4.7v-27.6h18.4v4.3C196.2,108.2,182.4,108.2,182.4,108.2z M223.8,112.8
                c0,4.6-2,7.4-6,8.6l7.2,10h-5.9l-6.6-9.3h-6.1v9.3h-4.7v-27.6H212c4.2,0,7.2,0.7,9,2.1S223.8,109.7,223.8,112.8z M217.6,116.7
                c0.9-0.8,1.4-2.1,1.4-3.9s-0.5-3-1.5-3.7s-2.7-1-5.2-1h-5.9v9.9h5.8C214.8,117.9,216.6,117.5,217.6,116.7z M230.5,103.8h4.7v27.6
                h-4.7V103.8z M255.5,127.2c1.6,0,3-0.3,4.1-0.8c1.2-0.5,2.4-1.4,3.6-2.6l3,3.1c-2.9,3.2-6.5,4.9-10.6,4.9s-7.6-1.3-10.4-4
                c-2.8-2.7-4.1-6.1-4.1-10.2s1.4-7.5,4.2-10.3s6.3-4.1,10.6-4.1s7.9,1.6,10.7,4.7l-3,3.2c-1.3-1.3-2.6-2.1-3.7-2.6
                c-1.2-0.5-2.5-0.8-4.1-0.8c-2.8,0-5.1,0.9-7,2.7c-1.9,1.8-2.8,4.1-2.8,6.9s0.9,5.1,2.8,7C250.7,126.3,252.9,127.2,255.5,127.2z
                 M275.9,125.2l-2.8,6.3h-5l12.2-27.6h5l12.2,27.6h-5l-2.8-6.3H275.9z M287.8,120.9l-5-11.4l-5,11.4H287.8z M322.1,103.8h4.7v27.6
                h-5.1l-15.6-20.1v20.1h-4.7v-27.6h4.7l16,20.6V103.8z M338.3,125.2l-2.8,6.3h-5l12.2-27.6h5l12.2,27.6h-5l-2.8-6.3H338.3z
                 M350.2,120.9l-5-11.4l-5,11.4H350.2z M374.6,131.4v-27.6h4.7V127h12.6v4.4H374.6z M397,103.8h4.7v27.6H397V103.8z M421.5,131.4
                h-12.1v-27.6h10.7c1.9,0,3.5,0.2,4.8,0.7c1.4,0.4,2.4,1.1,3,1.8c1.3,1.4,1.9,3,1.9,4.8c0,2.2-0.7,3.8-2.1,4.8
                c-0.5,0.4-0.8,0.6-1,0.7s-0.5,0.2-1,0.5c1.7,0.4,3.1,1.1,4.1,2.3c1,1.2,1.5,2.6,1.5,4.4c0,1.9-0.7,3.6-2,5.1
                C427.9,130.6,425.2,131.4,421.5,131.4z M413.9,115.3h5.9c3.4,0,5.1-1.1,5.1-3.4c0-1.3-0.4-2.3-1.2-2.8c-0.8-0.5-2.1-0.9-3.8-0.9h-6
                V115.3z M413.9,127.1h7.3c1.7,0,3-0.3,3.9-0.8s1.4-1.6,1.4-3.1c0-2.4-2-3.7-5.9-3.7h-6.7L413.9,127.1L413.9,127.1z M459.3,112.8
                c0,4.6-2,7.4-6,8.6l7.2,10h-5.9l-6.6-9.3h-6.1v9.3h-4.7v-27.6h10.3c4.2,0,7.2,0.7,9,2.1S459.3,109.7,459.3,112.8z M453.1,116.7
                c0.9-0.8,1.4-2.1,1.4-3.9s-0.5-3-1.5-3.7s-2.7-1-5.2-1h-5.9v9.9h5.8C450.4,117.9,452.2,117.5,453.1,116.7z M469.9,125.2l-2.8,6.3
                h-5l12.2-27.6h5l12.2,27.6h-5l-2.8-6.3H469.9z M482,120.9l-5-11.4l-5,11.4H482z M517.5,112.8c0,4.6-2,7.4-6,8.6l7.2,10h-5.9
                l-6.6-9.3h-6.1v9.3h-4.7v-27.6h10.3c4.2,0,7.2,0.7,9,2.1C516.5,107.3,517.5,109.7,517.5,112.8z M511.3,116.7
                c0.9-0.8,1.4-2.1,1.4-3.9s-0.5-3-1.5-3.7s-2.7-1-5.2-1h-5.9v9.9h5.8C508.5,117.9,510.3,117.5,511.3,116.7z M534.6,131.4h-4.7v-10.9
                l-10.3-16.7h5.1l7.5,12.6l7.5-12.6h5.1l-10.3,16.7v10.9H534.6z"/>
        </g>
        <g opacity="0">
            <a xlink:href="http://google.com">
            <circle fill="#445DAD" cx="63.4" cy="64.6" r="58.2"/>
            </a>
        </g>
        <g opacity="0">
            <a xlink:href="https://www.library.cornell.edu/">
            <rect x="141.3" y="22.8" fill="#445DAD" width="366.3" height="32"/>
            </a>
        </g>
        <g opacity="0">
            <a xlink:href="/">
            <rect x="144.6" y="60.9" fill="#445DAD" width="464.1" height="76.6"/>
            </a>
        </g>
        </svg>

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


    <section class="hours">

        <a title="Today's Hours" href="#">

            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
            TODAY’S HOURS:  
            <span class="status">OPEN</span> until 6pm

        </a>

    </section>



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
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights-1.jpg" alt="" />
            </figure>

            <h2>The book of Negroes</h2>

        </header>

        <p>A universal story of loss, courage and triumph, this recounts the extraordinary journey of Aminata Diallo, an indomitable African woman who survives ...</p>

        <a class="btn-link" href="#" title="View more films">MORE FILMS</a>

        <a class="text-link" href="#" title="Request this film">REQUEST FILM</a>

    </article>

    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <header>

            <h1>Special Collections <i class="fa fa-archive"></i></h1>

            <figure>
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights-2.jpg" alt="" />
            </figure>

            <h2>Hip Hop Collection</h2>

        </header>

        <p>We are pleased to announce the arrival of the Bill Adler Archive with the opening of "Def Jam at 30: Declarations of an Independent - 1984-1985," a website which explores Def Jam’s ground-breaking first year! ...</p>

        <a class="btn-link" href="#" title="View more films">MORE COLLECTIONS</a>

    </article>

    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        <header>

            <h1>New Books <i class="fa fa-book"></i></h1>

            <figure>
              <img class="photo-highlight" src="<?php print $theme_path; ?>images/highlights-3.jpg" alt="" />
            </figure>

            <h2>African renaissance and Afro-Arab spring</h2>

        </header>

        <p>The hope and despair surrounding the Afro-Arab Spring in North Africa has only begun to be played out in regional and global politics. And the call for an African ...</p>

        <a class="btn-link" href="#" title="View more films">MORE BOOKS</a>

        <a class="text-link" href="#" title="Request this film">REQUEST BOOK</a>

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

            <h1>Online Lectures</h1>

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






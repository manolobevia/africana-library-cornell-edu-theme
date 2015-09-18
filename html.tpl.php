<?php
//$theme_path = base_path() . 'sites/all/themes/africana-library-cornell-edu-theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php print $head; ?>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
       
        <title><?php print $head_title; ?></title>

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!--<link rel="shortcut icon" href="../favicon.ico">-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- removing initial-scale=1.0 disables zooming capabilities -->

        <!-- Google fonts -->
          <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        
        <?php print $styles; ?>

        <!-- Optional theme -->
        <link href="<?php print $theme_path; ?>css/styles.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

        <!--[if gte IE 9]>
        <![endif]-->

        <?php print $scripts; ?>


    </head>

    <body class="homepage <?php print $classes; ?>" <?php print $attributes;?>>

    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="<?php print $theme_path; ?>js/doubletaptogo.js"></script>
    <script type="text/javascript" src="<?php print $theme_path; ?>js/utils.js"></script>
    </body>
</html>




<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Team Archives | <?php print _cg("page_title"); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- The styles -->
        <link id="bs-css" href="<?php print _MEDIA_URL ?>css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php print _MEDIA_URL ?>css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php print _MEDIA_URL ?>css/charisma-app.css" rel="stylesheet">
        <link href="<?php print _MEDIA_URL ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php print _MEDIA_URL ?>css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php print _MEDIA_URL ?>css/chosen.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/uniform.default.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/colorbox.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/opa-icons.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/uploadify.css' rel='stylesheet'>
        <link href='<?php print _MEDIA_URL ?>css/style.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php print _MEDIA_URL ?>img/favicon.ico">



    </head>

    <body>
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand"  href="<?php print _U ?>">Team Archives</a>  


                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> admin</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php l('profile') ?>">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php print _U ?>?logout=1">Logout</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->


                    </div>
                </div>
            </div>
            <!-- topbar ends -->
        <?php } ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <?php if(isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'school'){ ?>
                                    <li class="mainNav "><a class="ajax-link" href="<?php print _U ?>schools"><span class="hidden-tablet">Schools</span></a></li>
                                    <li class="mainNav "><a class="ajax-link" href="<?php print _U ?>videos"><span class="hidden-tablet">Videos</span></a></li> 
                                <?php } else { ?>
                                <li class="mainNavParent nav-header hidden-tablet pointer" onclick="$('.mainNav').toggle()"><i class="icon-home"></i> Dashboard</li>
                                <li class="mainNav "><a class="ajax-link" href="<?php print _U ?>schools"><span class="hidden-tablet">Schools</span></a></li>
                                <li class="mainNav "><a class="ajax-link" href="<?php print _U ?>videos"><span class="hidden-tablet">Videos</span></a></li>
                                <li class="mainNav "><a class="ajax-link" href="<?php print _U ?>sponsors"><span class="hidden-tablet">Sponsors</span></a></li>
                                
                                <li class="settingsNavParent nav-header hidden-tablet pointer" onclick="$('.settingsNav').toggle()"><i class="icon-wrench"></i> Settings</li>
                                <li class="settingsNav "><a class="ajax-link" href="<?php print _U ?>subscriptions"><span class="hidden-tablet">Subscriptions</span></a></li>
                                
                                <li class="billsNavParent nav-header hidden-tablet pointer" onclick="$('.billsNav').toggle()"><i class="icon-file"></i> Bills</li>
                                <li class="billsNav "><a class="ajax-link" href="<?php print _U ?>invoices"><span class="hidden-tablet">Invoices</span></a></li>
                               <?php } ?>
                            </ul>
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                    </noscript>

                    <div id="content" class="span10">
                        <!-- content starts -->
                    <?php } ?>
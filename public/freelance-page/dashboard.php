<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Raice bla bla bla.">
    <meta name="keywords" content="Raice, freelancer, nganggur cuan">
    <meta name="author" content="Awaludin AR">
    <title>Home | RAICE</title>
    <link rel="apple-touch-icon" href="<?= $BASE_URL; ?>/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $BASE_URL; ?>/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN RAICE CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/app.css">
    <!-- END RAICE CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/css/plugins/calendars/clndr.css">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/app-assets/fonts/meteocons/style.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL; ?>/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- fixed-top-->
    <?php 
    require_once "parts/header.php";
    ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
      <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="icon-home"></i><span data-i18n="nav.dash.main">Dashboard</span></a>
            <ul class="dropdown-menu">
              <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown">eCommerce</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-project.html" data-toggle="dropdown">Project</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown">Analytics</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-crm.html" data-toggle="dropdown">CRM</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-fitness.html" data-toggle="dropdown">Fitness</a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-note"></i><span data-i18n="nav.templates.main">Templates</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vertical</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="../vertical-menu-template" data-toggle="dropdown">Classic Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../vertical-compact-menu-template" data-toggle="dropdown">Compact Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../vertical-content-menu-template" data-toggle="dropdown">Content Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../vertical-overlay-menu-template" data-toggle="dropdown">Overlay Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../vertical-multi-level-menu-template" data-toggle="dropdown">Multi-level Menu</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Horizontal</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template" data-toggle="dropdown">Classic</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../horizontal-top-icon-menu-template" data-toggle="dropdown">Top Icon</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-drawer"></i><span data-i18n="nav.layouts.temp">Layouts</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Page layouts</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="horizontal-layout-1-column.html" data-toggle="dropdown">1 column</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Det. Sidebar</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle="dropdown">Detached left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Detached sticky left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle="dropdown">Detached right sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Detached sticky right sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle="dropdown">Static layout</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-light.html" data-toggle="dropdown">Light layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle="dropdown">Dark layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-semi-dark.html" data-toggle="dropdown">Semi dark layout</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbars</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="navbar-light.html" data-toggle="dropdown">Navbar Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-dark.html" data-toggle="dropdown">Navbar Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-semi-dark.html" data-toggle="dropdown">Navbar Semi Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-brand-center.html" data-toggle="dropdown">Brand Center</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-components.html" data-toggle="dropdown">Navbar Components</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-styling.html" data-toggle="dropdown">Navbar Styling</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vertical Nav</a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navigation Types</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="../vertical-menu-template" data-toggle="dropdown">Vertical Menu</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../vertical-multi-level-menu-template" data-toggle="dropdown">Vertical MMenu</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../vertical-overlay-menu-template" data-toggle="dropdown">Vertical Overlay</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../vertical-compact-menu-template" data-toggle="dropdown">Vertical Compact</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../vertical-content-menu-template" data-toggle="dropdown">Vertical Content</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Horizontal Nav</a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navigation Types</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template" data-toggle="dropdown">Left Icon Navigation</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../horizontal-top-icon-menu-template" data-toggle="dropdown">Top Icon Navigation</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-fixed.html" data-toggle="dropdown">Fixed Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-flipped.html" data-toggle="dropdown">Flipped Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-submenu-click.html" data-toggle="dropdown">Submenu on Click</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-submenu-hover.html" data-toggle="dropdown">Submenu on Hover</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-light.html" data-toggle="dropdown">Light Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-dark.html" data-toggle="dropdown">Dark Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-right-side-icons.html" data-toggle="dropdown">Right side icons</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-no-dropdown.html" data-toggle="dropdown">No Dropdown Arrow</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-disabled.html" data-toggle="dropdown">Disabled Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-badge-pills.html" data-toggle="dropdown">Badge &amp; Pills</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-styling.html" data-toggle="dropdown">Navigation Styling</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Page Headers</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-basic.html" data-toggle="dropdown">Breadcrumbs basic</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top.html" data-toggle="dropdown">Breadcrumbs top</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-bottom.html" data-toggle="dropdown">Breadcrumbs bottom</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top-with-description.html" data-toggle="dropdown">Breadcrumbs top with desc</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button.html" data-toggle="dropdown">Breadcrumbs with button</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-round-button.html" data-toggle="dropdown">Breadcrumbs with button 2</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button-group.html" data-toggle="dropdown">Breadcrumbs with buttons</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-description.html" data-toggle="dropdown">Breadcrumbs with desc</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-search.html" data-toggle="dropdown">Breadcrumbs with search</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-stats.html" data-toggle="dropdown">Breadcrumbs with stats</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Footers</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="footer-light.html" data-toggle="dropdown">Footer Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-dark.html" data-toggle="dropdown">Footer Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-transparent.html" data-toggle="dropdown">Footer Transparent</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-fixed.html" data-toggle="dropdown">Footer Fixed</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-components.html" data-toggle="dropdown">Footer Components</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-folder"></i><span data-i18n="nav.category.general">General</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Color Palette</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="color-palette-primary.html" data-toggle="dropdown">Primary palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-danger.html" data-toggle="dropdown">Danger palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-success.html" data-toggle="dropdown">Success palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-warning.html" data-toggle="dropdown">Warning palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-info.html" data-toggle="dropdown">Info palette</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-red.html" data-toggle="dropdown">Red palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-pink.html" data-toggle="dropdown">Pink palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-purple.html" data-toggle="dropdown">Purple palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-deep-purple.html" data-toggle="dropdown">Deep Purple palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-indigo.html" data-toggle="dropdown">Indigo palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-blue.html" data-toggle="dropdown">Blue palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-light-blue.html" data-toggle="dropdown">Light Blue palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-cyan.html" data-toggle="dropdown">Cyan palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-teal.html" data-toggle="dropdown">Teal palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-green.html" data-toggle="dropdown">Green palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-light-green.html" data-toggle="dropdown">Light Green palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-lime.html" data-toggle="dropdown">Lime palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-yellow.html" data-toggle="dropdown">Yellow palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-amber.html" data-toggle="dropdown">Amber palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-orange.html" data-toggle="dropdown">Orange palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-deep-orange.html" data-toggle="dropdown">Deep Orange palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-brown.html" data-toggle="dropdown">Brown palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-blue-grey.html" data-toggle="dropdown">Blue Grey palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-grey.html" data-toggle="dropdown">Grey palette</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Starter kit</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/horizontal-layout-1-column.html" data-toggle="dropdown">1 column</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Det. Sidebar</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-content-detached-left-sidebar.html" data-toggle="dropdown">Detached left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Detached sticky left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-content-detached-right-sidebar.html" data-toggle="dropdown">Detached right sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Detached sticky right sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-static.html" data-toggle="dropdown">Static layout</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-light.html" data-toggle="dropdown">Light layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-dark.html" data-toggle="dropdown">Dark layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template/layout-semi-dark.html" data-toggle="dropdown">Semi dark layout</a>
                  </li>
                </ul>
              </li>
              <li data-menu=""><a class="dropdown-item" href="changelog.html" data-toggle="dropdown">Changelog</a>
              </li>
              <li class="disabled" data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Disabled Menu</a>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Menu levels</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Second level</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Second level child</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Third level</a>
                      </li>
                      <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Third level child</a>
                        <ul class="dropdown-menu">
                          <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Fourth level</a>
                          </li>
                          <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Fourth level</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown mega-dropdown nav-item" data-menu="megamenu"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-screen-tablet"></i><span data-i18n="nav.category.pages">Pages</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="email-application.html"><i class="icon-envelope"></i>Email Application</a>
                      </li>
                      <li><a class="dropdown-item" href="chat-application.html"><i class="icon-bubbles"></i>Chat Application</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-briefcase"></i>Project</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="project-summary.html"><i></i>Project Summary</a>
                          </li>
                          <li><a class="dropdown-item" href="project-tasks.html"><i></i>Project Task</a>
                          </li>
                          <li><a class="dropdown-item" href="project-bugs.html"><i></i>Project Bugs</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="scrumboard.html"><i class="icon-check"></i>Scrumboard</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-doc"></i>Invoice</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="invoice-summary.html"><i></i>Invoice Summary</a>
                          </li>
                          <li><a class="dropdown-item" href="invoice-template.html"><i></i>Invoice Template</a>
                          </li>
                          <li><a class="dropdown-item" href="invoice-list.html"><i></i>Invoice List</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="page-checkout.html"><i class="icon-basket-loaded"></i>Checkout page</a>
                      </li>
                      <li><a class="dropdown-item" href="page-pricing.html"><i class="icon-notebook"></i>Pricing page</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-film"></i>Timelines</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="timeline-center.html"><i></i>Timelines Center</a>
                          </li>
                          <li><a class="dropdown-item" href="timeline-left.html"><i></i>Timelines Left</a>
                          </li>
                          <li><a class="dropdown-item" href="timeline-right.html"><i></i>Timelines Right</a>
                          </li>
                          <li><a class="dropdown-item" href="timeline-horizontal.html"><i></i>Timelines Horizontal</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-user"></i>Users</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="user-profile.html"><i></i>Users Profile</a>
                          </li>
                          <li><a class="dropdown-item" href="user-cards.html"><i></i>Users Cards</a>
                          </li>
                          <li><a class="dropdown-item" href="users-contacts.html"><i></i>Users List</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-picture"></i>Gallery</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="gallery-grid.html"><i></i>Gallery Grid</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-grid-with-desc.html"><i></i>Gallery Grid with Desc</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-masonry.html"><i></i>Masonry Gallery</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-masonry-with-desc.html"><i></i>Masonry Gallery with Desc</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-hover-effects.html"><i></i>Hover Effects</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-magnifier"></i>Search</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="search-page.html"><i></i>Search Page</a>
                          </li>
                          <li><a class="dropdown-item" href="search-website.html"><i></i>Search Website</a>
                          </li>
                          <li><a class="dropdown-item" href="search-images.html"><i></i>Search Images</a>
                          </li>
                          <li><a class="dropdown-item" href="search-videos.html"><i></i>Search Videos</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-lock-open"></i>Authentication</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="login-simple.html"><i></i>Login Simple</a>
                          </li>
                          <li><a class="dropdown-item" href="login-with-bg.html"><i></i>Login with Bg</a>
                          </li>
                          <li><a class="dropdown-item" href="login-with-bg-image.html"><i></i>Login with Bg Image</a>
                          </li>
                          <li><a class="dropdown-item" href="login-with-navbar.html"><i></i>Login with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="login-advanced.html"><i></i>Login Advanced</a>
                          </li>
                          <li><a class="dropdown-item" href="register-simple.html"><i></i>Register Simple</a>
                          </li>
                          <li><a class="dropdown-item" href="register-with-bg.html"><i></i>Register with Bg</a>
                          </li>
                          <li><a class="dropdown-item" href="register-with-bg-image.html"><i></i>Register with Bg Image</a>
                          </li>
                          <li><a class="dropdown-item" href="register-with-navbar.html"><i></i>Register with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="register-advanced.html"><i></i>Register Advanced</a>
                          </li>
                          <li><a class="dropdown-item" href="unlock-user.html"><i></i>Unlock User</a>
                          </li>
                          <li><a class="dropdown-item" href="recover-password.html"><i></i>Recover Password</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-question"></i>Error</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="error-400.html"><i></i>Error 400</a>
                          </li>
                          <li><a class="dropdown-item" href="error-400-with-navbar.html"><i></i>Error 400 with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="error-401.html"><i></i>Error 401</a>
                          </li>
                          <li><a class="dropdown-item" href="error-401-with-navbar.html"><i></i>Error 401 with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="error-403.html"><i></i>Error 403</a>
                          </li>
                          <li><a class="dropdown-item" href="error-403-with-navbar.html"><i></i>Error 403 with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="error-404.html"><i></i>Error 404</a>
                          </li>
                          <li><a class="dropdown-item" href="error-404-with-navbar.html"><i></i>Error 404 with Navbar</a>
                          </li>
                          <li><a class="dropdown-item" href="error-500.html"><i></i>Error 500</a>
                          </li>
                          <li><a class="dropdown-item" href="error-500-with-navbar.html"><i></i>Error 500 with Navbar</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase" data-toggle="dropdown"><i class="icon-paper-clip"></i>Others
                </h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i></i>Coming Soon</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="coming-soon-flat.html"><i></i>Flat</a>
                          </li>
                          <li><a class="dropdown-item" href="coming-soon-bg-image.html"><i></i>Bg image</a>
                          </li>
                          <li><a class="dropdown-item" href="coming-soon-bg-video.html"><i></i>Bg video</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="under-maintenance.html"><i></i>Maintenance</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-screen-desktop"></i><span data-i18n="nav.category.ui">UI</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="card-bootstrap.html" data-toggle="dropdown">Bootstrap</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-headings.html" data-toggle="dropdown">Headings</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-options.html" data-toggle="dropdown">Options</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-actions.html" data-toggle="dropdown">Action</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-draggable.html" data-toggle="dropdown">Draggable</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Advance Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="card-statistics.html" data-toggle="dropdown">Statistics</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-weather.html" data-toggle="dropdown">Weather</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-charts.html" data-toggle="dropdown">Charts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-interactive.html" data-toggle="dropdown">Interactive</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-maps.html" data-toggle="dropdown">Maps</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-social.html" data-toggle="dropdown">Social</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-ecommerce.html" data-toggle="dropdown">E-Commerce</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle="dropdown">Grid</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle="dropdown">Typography</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle="dropdown">Text utilities</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle="dropdown">Syntax highlighter</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle="dropdown">Helper classes</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle="dropdown">Alerts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-callout.html" data-toggle="dropdown">Callout</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html" data-toggle="dropdown">Basic Buttons</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-buttons-extended.html" data-toggle="dropdown">Extended Buttons</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle="dropdown">Carousel</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle="dropdown">Collapse</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle="dropdown">Dropdowns</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle="dropdown">List Group</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle="dropdown">Modals</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle="dropdown">Pagination</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle="dropdown">Navs Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle="dropdown">Tabs Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle="dropdown">Pills Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle="dropdown">Tooltips</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle="dropdown">Popovers</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle="dropdown">Badges</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle="dropdown">Pill Badges</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle="dropdown">Progress</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle="dropdown">Media Objects</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-scrollable.html" data-toggle="dropdown">Scrollable</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-loaders.html" data-toggle="dropdown">Loaders</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Extra Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle="dropdown">Sweet Alerts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-tree-views.html" data-toggle="dropdown">Tree Views</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle="dropdown">Toastr</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle="dropdown">Ratings</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-context-menu.html" data-toggle="dropdown">Context Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-noui-slider.html" data-toggle="dropdown">NoUI Slider</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-date-time-dropper.html" data-toggle="dropdown">Date Time Dropper</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-lists.html" data-toggle="dropdown">Lists</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-toolbar.html" data-toggle="dropdown">Toolbar</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-unslider.html" data-toggle="dropdown">Unslider</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-knob.html" data-toggle="dropdown">Knob</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-long-press.html" data-toggle="dropdown">Long Press</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-offline.html" data-toggle="dropdown">Offline</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-zoom.html" data-toggle="dropdown">Zoom</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Icons</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="icons-feather.html" data-toggle="dropdown">Feather</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-font-awesome.html" data-toggle="dropdown">Font Awesome</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-meteocons.html" data-toggle="dropdown">Meteocons</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-simple-line-icons.html" data-toggle="dropdown">Simple Line Icons</a>
                  </li>
                </ul>
              </li>
              <li data-menu=""><a class="dropdown-item" href="animation.html" data-toggle="dropdown">Animation</a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-note"></i><span data-i18n="nav.category.forms">Forms</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Form Elements</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown">Form Inputs</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle="dropdown">Input Groups</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-input-grid.html" data-toggle="dropdown">Input Grid</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle="dropdown">Extended Inputs</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle="dropdown">Checkboxes &amp; Radios</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown">Switch</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Select</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle="dropdown">Select2</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-selectize.html" data-toggle="dropdown">Selectize</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-selectivity.html" data-toggle="dropdown">Selectivity</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-select-box-it.html" data-toggle="dropdown">Select Box It</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-dual-listbox.html" data-toggle="dropdown">Dual Listbox</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle="dropdown">Tags Input</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown">Validation</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Form Layouts</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle="dropdown">Basic Forms</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle="dropdown">Horizontal Forms</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle="dropdown">Hidden Labels</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-form-actions.html" data-toggle="dropdown">Form Actions</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-row-separator.html" data-toggle="dropdown">Row Separator</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-bordered.html" data-toggle="dropdown">Bordered</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-striped-rows.html" data-toggle="dropdown">Striped Rows</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-layout-striped-labels.html" data-toggle="dropdown">Striped Labels</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Form Wizard</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="form-wizard-circle-style.html" data-toggle="dropdown">Circle Style</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-wizard-notification-style.html" data-toggle="dropdown">Notification Style</a>
                  </li>
                </ul>
              </li>
              <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle="dropdown">Form Repeater</a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-grid"></i><span data-i18n="nav.category.tables">Tables</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Bootstrap Tables</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="table-basic.html" data-toggle="dropdown">Basic Tables</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-border.html" data-toggle="dropdown">Table Border</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-sizing.html" data-toggle="dropdown">Table Sizing</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-styling.html" data-toggle="dropdown">Table Styling</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-components.html" data-toggle="dropdown">Table Components</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">DataTables</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle="dropdown">Basic Initialisation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle="dropdown">Advanced initialisation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle="dropdown">Styling</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle="dropdown">Data Sources</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle="dropdown">API</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">DataTables Ext.</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-autofill.html" data-toggle="dropdown">AutoFill</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-basic.html" data-toggle="dropdown">Basic Buttons</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-html-5-data-export.html" data-toggle="dropdown">HTML 5 Data Export</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-flash-data-export.html" data-toggle="dropdown">Flash Data Export</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-column-visibility.html" data-toggle="dropdown">Column Visibility</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-print.html" data-toggle="dropdown">Print</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-api.html" data-toggle="dropdown">API</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-reorder.html" data-toggle="dropdown">Column Reorder</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-fixed-columns.html" data-toggle="dropdown">Fixed Columns</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-key-table.html" data-toggle="dropdown">Key Table</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-row-reorder.html" data-toggle="dropdown">Row Reorder</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-select.html" data-toggle="dropdown">Select</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-fix-header.html" data-toggle="dropdown">Fix Header</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-responsive.html" data-toggle="dropdown">Responsive</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-visibility.html" data-toggle="dropdown">Column Visibility</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Handson Table</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="handson-table-appearance.html" data-toggle="dropdown">Appearance</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-rows-columns.html" data-toggle="dropdown">Rows Columns</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-rows-only.html" data-toggle="dropdown">Rows Only</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-columns-only.html" data-toggle="dropdown">Columns Only</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-data-operations.html" data-toggle="dropdown">Data Operations</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-cell-features.html" data-toggle="dropdown">Cell Features</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-cell-types.html" data-toggle="dropdown">Cell Types</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-integrations.html" data-toggle="dropdown">Integrations</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="handson-table-utilities.html" data-toggle="dropdown">Utilities</a>
                  </li>
                </ul>
              </li>
              <li data-menu=""><a class="dropdown-item" href="table-jsgrid.html" data-toggle="dropdown">jsGrid</a>
              </li>
            </ul>
          </li>
          <li class="dropdown mega-dropdown nav-item" data-menu="megamenu"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-plus"></i><span data-i18n="nav.category.addons">Add Ons</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-3" data-mega-col="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase" data-toggle="dropdown"><i class="icon-edit2"></i>Editors
                </h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="editor-quill.html"><i></i>Quill</a>
                      </li>
                      <li><a class="dropdown-item" href="editor-ckeditor.html"><i></i>CKEditor</a>
                      </li>
                      <li><a class="dropdown-item" href="editor-summernote.html"><i></i>Summernote</a>
                      </li>
                      <li><a class="dropdown-item" href="editor-tinymce.html"><i></i>TinyMCE</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i></i>Code Editor</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="code-editor-codemirror.html"><i></i>CodeMirror</a>
                          </li>
                          <li><a class="dropdown-item" href="code-editor-ace.html"><i></i>Ace</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase" data-toggle="dropdown"><i class="icon-air-play"></i>jQuery UI
                </h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="jquery-ui-interactions.html"><i></i>Interactions</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-navigations.html"><i></i>Navigations</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-date-pickers.html"><i></i>Date Pickers</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-autocomplete.html"><i></i>Autocomplete</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-buttons-select.html"><i></i>Buttons &amp; Select</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-slider-spinner.html"><i></i>Slider &amp; Spinner</a>
                      </li>
                      <li><a class="dropdown-item" href="jquery-ui-dialog-tooltip.html"><i></i>Dialog &amp; Tooltip</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase" data-toggle="dropdown"><i class="icon-tune"></i>Other Addons
                </h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-calendar5"></i>Pickers</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="pickers-date-&amp;-time-picker.html"><i></i>Date &amp; Time Picker</a>
                          </li>
                          <li><a class="dropdown-item" href="pickers-color-picker.html"><i></i>Color Picker</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="add-on-block-ui.html"><i class="icon-security"></i>Block UI</a>
                      </li>
                      <li><a class="dropdown-item" href="add-on-image-cropper.html"><i></i>Image Cropper</a>
                      </li>
                      <li><a class="dropdown-item" href="add-on-drag-drop.html"><i class="icon-arrow-move"></i>Drag &amp; Drop</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-cloud-upload3"></i>File Uploader</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="file-uploader-dropzone.html"><i></i>Dropzone</a>
                          </li>
                          <li><a class="dropdown-item" href="file-uploader-jquery.html"><i></i>jQuery File Upload</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-calendar4"></i>Event Calendars</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="#"><i></i>Full Calendar</a>
                            <ul class="mega-menu-sub">
                              <li><a class="dropdown-item" href="full-calender-basic.html"><i></i>Basic</a>
                              </li>
                              <li><a class="dropdown-item" href="full-calender-events.html"><i></i>Events</a>
                              </li>
                              <li><a class="dropdown-item" href="full-calender-advance.html"><i></i>Advance</a>
                              </li>
                              <li><a class="dropdown-item" href="full-calender-extra.html"><i></i>Extra</a>
                              </li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="calendars-clndr.html"><i class="icon-calendar2"></i>CLNDR</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase" data-toggle="dropdown"><i class="icon-table2"></i>Internationalization
                </h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="i18n-resources.html"><i></i>Resources</a>
                      </li>
                      <li><a class="dropdown-item" href="i18n-xhr-backend.html"><i></i>XHR Backend</a>
                      </li>
                      <li><a class="dropdown-item" href="i18n-query-string.html?lng=en"><i></i>Query String</a>
                      </li>
                      <li><a class="dropdown-item" href="i18n-on-init.html"><i></i>On Init</a>
                      </li>
                      <li><a class="dropdown-item" href="i18n-after-init.html"><i></i>After Init</a>
                      </li>
                      <li><a class="dropdown-item" href="i18n-fallback.html"><i></i>Fallback</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown mega-dropdown nav-item" data-menu="megamenu"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-graph"></i><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-bar-graph-2"></i>google Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="google-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="google-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="google-pie-charts.html"><i></i>Pie charts</a>
                          </li>
                          <li><a class="dropdown-item" href="google-scatter-charts.html"><i></i>Scatter charts</a>
                          </li>
                          <li><a class="dropdown-item" href="google-bubble-charts.html"><i></i>Bubble charts</a>
                          </li>
                          <li><a class="dropdown-item" href="google-other-charts.html"><i></i>Other charts</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-bubble_chart"></i>Echarts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="echarts-line-area-charts.html"><i></i>Line &amp; Area charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-bar-column-charts.html"><i></i>Bar &amp; Column charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-pie-doughnut-charts.html"><i></i>Pie &amp; Doughnut charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-scatter-charts.html"><i></i>Scatter charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-radar-chord-charts.html"><i></i>Radar &amp; Chord charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-funnel-gauges-charts.html"><i></i>Funnel &amp; Gauges charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-combination-charts.html"><i></i>Combination charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-advance-charts.html"><i></i>Advance charts</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-stats-dots"></i>Chartjs</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="chartjs-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-pie-doughnut-charts.html"><i></i>Pie &amp; Doughnut charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-scatter-charts.html"><i></i>Scatter charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-polar-radar-charts.html"><i></i>Polar &amp; Radar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-advance-charts.html"><i></i>Advance charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-stats-bars2"></i>D3 Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="d3-line-chart.html"><i></i>Line Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="d3-bar-chart.html"><i></i>Bar Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="d3-pie-chart.html"><i></i>Pie Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="d3-circle-diagrams.html"><i></i>Circle Diagrams</a>
                          </li>
                          <li><a class="dropdown-item" href="d3-tree-chart.html"><i></i>Tree Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="d3-other-charts.html"><i></i>Other Charts</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-arrow-graph-up-right"></i>C3 Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="c3-line-chart.html"><i></i>Line Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-bar-pie-chart.html"><i></i>Bar &amp; Pie Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-axis-chart.html"><i></i>Axis Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-data-chart.html"><i></i>Data Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-grid-chart.html"><i></i>Grid Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-transform-chart.html"><i></i>Transform Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="c3-other-charts.html"><i></i>Other Charts</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-stats-bars"></i>Chartist</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="chartist-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartist-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartist-pie-charts.html"><i></i>Pie charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-timeline"></i>Dimple Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="dimple-line-area-chart.html"><i></i>Line &amp; Area Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="dimple-bar-column-chart.html"><i></i>Bar &amp; Column Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="dimple-pie-ring-chart.html"><i></i>Pie &amp; Ring Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="dimple-step-chart.html"><i></i>Step Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="dimple-scatter-chart.html"><i></i>Scatter Chart</a>
                          </li>
                          <li><a class="dropdown-item" href="dimple-bubble-chart.html"><i></i>Bubble Chart</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="morris-charts.html"><i class="icon-graphic_eq"></i>Morris Charts</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-pie-graph2"></i>Flot Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="flot-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="flot-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="flot-pie-charts.html"><i></i>Pie charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="rickshaw-charts.html"><i class="icon-grain"></i>Rickshaw Charts</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-map22"></i>Maps</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="#"><i></i>google Maps</a>
                            <ul class="mega-menu-sub">
                              <li><a class="dropdown-item" href="gmaps-basic-maps.html"><i></i>Maps</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-services.html"><i></i>Services</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-overlays.html"><i></i>Overlays</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-routes.html"><i></i>Routes</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-utils.html"><i></i>Utils</a>
                              </li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="#"><i></i>Vector Maps</a>
                            <ul class="mega-menu-sub">
                              <li><a class="dropdown-item" href="#"><i></i>jQuery Mapael</a>
                                <ul class="mega-menu-sub">
                                  <li><a class="dropdown-item" href="vector-maps-mapael-basic.html"><i></i>Basic Maps</a>
                                  </li>
                                  <li><a class="dropdown-item" href="vector-maps-mapael-advance.html"><i></i>Advance Maps</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="vector-maps-jvector.html"><i></i>jVector Map</a>
                              </li>
                              <li><a class="dropdown-item" href="vector-maps-jqv.html"><i></i>JQV Map</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content container center-layout mt-2">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Sales stats -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-star font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right">5,879</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Products</span>
                                    <span class="info float-right"><i class="ft-arrow-up info"></i> 16.89%</span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 danger float-right">423</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Orders</span>
                                    <span class="danger float-right"><i class="ft-arrow-up danger"></i> 5.14%</span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-shuffle font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 success float-right">61%</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Conversion</span>
                                    <span class="success float-right"><i class="ft-arrow-down success"></i> 2.24%</span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-wallet font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 warning float-right">$6,87M</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Profit</span>
                                    <span class="warning float-right"><i class="ft-arrow-up warning"></i> 43.84%</span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Sales stats -->
<!-- Sales by Campaigns & Year -->
<div class="row">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Smooth Area Chart</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <ul class="list-inline text-center">
                        <li>
                            <h6><i class="ft-circle grey lighten-1"></i> iPhone</h6>
                        </li>
                        <li>
                            <h6><i class="ft-circle success"></i> Samsung</h6>
                        </li>
                    </ul>
                    <div id="smooth-area-chart" class="height-350"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="mobile-sales" class="height-300"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1">
                    <span class="text-muted">Total mobile units sold and total earning statistics.</span>
                </div>
                <ul class="list-inline text-center clearfix mt-1">
                    <li class="mr-3"><span class="text-muted">Total Units Sold</span><h2 class="block">18.6 k</h2></li>
                    <li><span class="text-muted">Total Earnings</span><h2 class="block">64.54 M</h2></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ Sales by Campaigns & Year -->

<!-- Recent Orders -->
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card white bg-info text-center">
            <div class="card-content">
                <div class="card-body py-3">
                    <img src="<?= $BASE_URL; ?>/app-assets/images/elements/01.png" alt="element 01" width="140" class="float-left">
                    <h4 class="white mt-3 mb-2">Brand Minute</h4>
                    <p class="card-text">Donut toffee candy brownie.</p>
                    <button class="btn btn-info btn-darken-3">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card bg-info">
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="ft-bar-chart-2 white font-large-2 float-left"></i>
                        </div>
                        <div class="media-body white text-right">
                            <h3 class="white">1,278</h3>
                            <span>Most Loved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="ft-arrow-right"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Invoice#</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate">PO-10521</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">Elizabeth W.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-532521</td>
                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                <td class="text-truncate">Doris R.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                <td class="text-truncate">$ 5685.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-05521</td>
                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                <td class="text-truncate">Andrew D.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">$ 152.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-15521</td>
                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                <td class="text-truncate">Megan S.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">$ 1450.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-32521</td>
                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                <td class="text-truncate">Walter R.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                <td class="text-truncate">$ 685.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Recent Orders -->
<!-- Map Based Selling -->
<div class="row">
    <div class="col-12">
        <div class="card box-shadow-0">
            <div class="card-content">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div id="world-map-markers" class="height-450"></div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card-body">
                            <h4 class="card-title py-1 text-center">Sales All Over The World</h4>
                            <div class="row">
                                <div class="col-xl-12 col-lg-4 col-sm-12">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Total Profit <i class="ft-arrow-up success"></i> <span class="teal accent-3">6.89%</span></span>
                                            <h2 class="mb-0">$47.8K</h2>
                                        </div>
                                        <div class="media-right media-top pr-2">
                                            <i class="ft-trending-up font-large-1"></i>
                                        </div>
                                    </div>
                                    <div id="map-total-profit" class="height-75"></div>
                                </div>
                                <div class="col-xl-12 col-lg-4 col-sm-12">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Total Orders <i class="ft-arrow-down deep-orange accent-3"></i> <span class="deep-orange accent-3">4.27%</span></span>
                                            <h2 class="mb-0">789</h2>
                                        </div>
                                        <div class="media-right media-top pr-2">
                                            <i class="ft-shopping-cart font-large-1"></i>
                                        </div>
                                    </div>
                                    <div id="map-total-orders" class="height-75"></div>
                                </div>
                                <div class="col-xl-12 col-lg-4 col-sm-12">
                                    <div class="sales pr-2">
                                        <div class="sales-today mb-1">
                                            <p class="m-0">Today <span class="sucess float-right"><i class="ft-arrow-up success"></i> 6.89%</span></p>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="sales-yesterday">
                                            <p class="m-0">Yesterday <span class="deep-orange accent-2 float-right"><i class="ft-arrow-down deep-orange accent-3"></i> 4.18%</span></p>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-deep-orange" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Map Based Selling -->

<!-- social updates -->
<div class="row">
    <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card bg-twitter white">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="text-center mb-1">
                        <i class="ft-twitter font-large-3"></i>
                    </div>
                    <div class="tweet-slider">
                        <ul class="text-center">
                            <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</li>
                            <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</li>
                            <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                            <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card border-info text-center bg-transparent">
            <div class="card-content">
                <img src="<?= $BASE_URL; ?>/app-assets/images/elements/07.png" alt="element 04" width="140" class="float-left mt-3">
                <div class="card-body pt-3">
                    <h4 class="mt-3">New Arriaval</h4>
                    <p class="card-text">Donut toffee candy brownie souffl?? macaroon.</p>
                    <button class="btn btn-info">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card bg-facebook white">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="text-center mb-1">
                        <i class="ft-facebook font-large-3"></i>
                    </div>
                    <div class="fb-post-slider">
                        <ul class="text-center">
                            <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                            <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                            <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                            <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ social updates -->
<!-- most selling products -->
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-content">
                <img class="card-img-top img-fluid" src="<?= $BASE_URL; ?>/app-assets/images/carousel/25.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4>Smart Wearable</h4>
                    <p class="card-text">Oat cake ice cream candy chocolate cake.</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <span class="float-left">$349</span>
                <span class="float-right">Add To Cart <i class="ft-shopping-cart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card text-center">
            <div class="card-content">
                <img class="card-img-top img-fluid" src="<?= $BASE_URL; ?>/app-assets/images/carousel/24.png" alt="Card image cap">
                <div class="card-body">
                    <h4>Formal Shoes</h4>
                    <p class="card-text">Some quick example text.</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <span class="btn btn-outline-grey">$159</span>
                        <button type="button" class="btn btn-outline-grey">Shop Now <i class="ft-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-content">
                <img class="card-img-top img-fluid" src="<?= $BASE_URL; ?>/app-assets/images/carousel/22.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4>Sunglass</h4>
                    <p class="card-text">Some quick example text.</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <span class="float-left">
                    <del class="grey">$99</del>
                    <span class="ml-1">$49</span>
                </span>
                <span class="float-right"><i class="ft-heart"></i> Like</span>
            </div>
        </div>
    </div>
</div>
<!--/ most selling products-->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/extensions/underscore-min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/extensions/clndr.min.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/charts/echarts/echarts.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/vendors/js/extensions/unslider-min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN RAICE JS-->
    <script src="<?= $BASE_URL; ?>/app-assets/js/core/app-menu.js"></script>
    <script src="<?= $BASE_URL; ?>/app-assets/js/core/app.js"></script>
    <!-- END RAICE JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= $BASE_URL; ?>/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
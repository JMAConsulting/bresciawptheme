<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Directory Detail | Brescia</title>
  <meta name="description" content="brescia">
  <meta name="author" content="brescia">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#faa21b">
  <meta name="theme-color" content="#ffffff">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha256-eSi1q2PG6J7g7ib17yAaWMcrr5GrtohYChqibrV7PBE=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/addons/bootstrap-4/jquery.smartmenus.bootstrap-4.min.css" integrity="sha256-IbVTniyadRTitKPpYX/0NvZ1dyrr0e1sD4+MR9q4CWM=" crossorigin="anonymous" />
  <link rel="stylesheet" id="mainCss" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all">


  <?php wp_head();?>
</head>
<body class="home brescia">

<div class="siteWrap">


  <ul class="skip-links" aria-label="skip links">
    <li>
      <a href="#mainContent">
        Skip to main content
      </a>

    </li>
    <li>
      <a href="#mainNav">
        Skip to Main Menu
      </a>

    </li>
  </ul>

  <header class="navbar navbar-expand-lg fixed-top mainHeader">
    <div class="contentWidth">
      <span class="navbar-brand mainLogo"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brescia_logo.svg" alt="brescia university college" width="251" height="91"></a></span>
      <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target="#mainNavs" aria-controls="mainNavs" aria-expanded="false" aria-label="Toggle Site Navigations">
        <span class="icon-bar b1"></span>  <span class="icon-bar b2"></span>  <span class="icon-bar b3"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="mainNavs">
        <nav aria-label="Main Site Navigation" class="ml-auto" id="mainNav">
            <?php $locations = get_nav_menu_locations();
              if ( isset( $locations['primary']) ) {
                $menu = get_term( $locations['primary'], 'nav_menu');
                if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
                  foreach ( $items as $item ) {
                    if ($item->menu_item_parent == 0) {
                      // Top Level Menu Items
                      $topLevel[$item->ID]['main'] = [$item->title => $item->url];
                    }
                    else {
                      $topLevel[$item->menu_item_parent]['sub'][$item->ID] = [$item->title => $item->url];
                    }
                  }
                }
              }
              foreach ($topLevel as $id => $menuItem) {
                $section = ceil(count($menuItem['sub']) / 4);
                $topLevel[$id]['sub'] = array_chunk($menuItem['sub'], $section);
              }
            ?>

              <?php
                  foreach ($topLevel as $id => $type) {
                    foreach ($type as $level => $menuVal) {
                        $child = '';
                      if ($level == 'main') {
                          $title = key($menuVal);
                          if (!empty($type['sub'])) {
                            $parents[$id] = '<li class="dropdown menu-large nav-item">
                             <a href="' . $menuVal[$title] . '" class="dropdown-toggle nav-link">' . $title . '</a>
                             <ul class="dropdown-menu megamenu mega-menu">';
                          }
                          else {
                            $parents[$id] = '<li class="dropdown menu-large nav-item">
                             <a href="' . $menuVal[$title] . '" class="nav-link">' . $title . '</a>';
                          }
                        }
                      if ($level == 'sub' && !empty($type[$level])) {
                        $child = '<li class="dropdown-item">
                                      <div class="row">';
                        foreach ($menuVal as $index => $value) {
                          $child .= '<div class="col-lg-3 mmCol"><ul>';
                          foreach ($value as $subTitle => $subUrl) {
                                foreach ($subUrl as $sTitle => $sUrl) {
                                    $child .= '<li><a href="' . $sUrl . '">' . $sTitle . '</a></li>';
                                }
                            }
                          $child .= '</ul></div>';
                        }
                        $child .= '</div></li>';
                        $children[$id][] = $child;
                      }
                    }
                  }
              ?>
            <ul class="navbar-nav">
                <?php
                foreach ($parents as $id => $parent) {
                    echo $parent;
                    if (!empty($children[$id])) {
                      foreach ($children[$id] as $childVal) {
                        echo $childVal;
                      }
                      echo "</ul></li>";
                    }
                    else {
                      echo "</li>";
                    }
                }

                ?>
            </ul>

        </nav><!-- main site nav -->

        <div class="tertMenu">
          <div class="contentWidth">
            <nav aria-label="tertiary navigation" id="tertMenu" class="tertNav">
              <?php wp_nav_menu( array( 'menu' => 'Tertiary menu', 'container' => '', ) ); ?>
            </nav>


            <nav aria-label="tertiary navigation 2" id="tertMenu2" class="tertNav ml-auto">
              <ul>
                <li>
                  <button class="d-none d-lg-block searchTrigger">
                    <span class="sr-only">Toggle Search</span><span aria-hidden="true" class="brescicon-search d-none d-md-block"></span>
                  </button>
                  <!-- <form class="mainSearch" aria-label="Site Search" aria-hidden="true">
                    <div class="form-group">
                      <label for="sitesearch">Site Search</label>
                      <input id="sitesearch" type="search" Title="search" class="form-control" tabindex="-1">
                      <button type="submit" tabindex="-1" class="d-inline-block d-lg-none"><span class="sr-only">Submit Search</span></button>
                    </div>
                  </form> -->
                  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="mainSearch" aria-label="Site Search" aria-hidden="true">
                    <div class="form-group">
                      <label for="sitesearch">Site Search</label>
                      <input id="sitesearch" type="search" Title="search" name="s" value=" <?php echo get_search_query(); ?>" class="form-control" tabindex="-1">
                      <button type="submit" id="searchsubmit" tabindex="-1" class="d-inline-block d-lg-none" value="<?php esc_attr__('Search'); ?>"><span class="sr-only">Submit Search</span></button>
                    </div>
                  </form>
                </li>
                <li>
                  <a href="https://brescia.uwo.ca/give">Give</a>
                </li>
                <li>
                  <button class="dropdown-toggle" id="resourceBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                  </button>
                  <?php wp_nav_menu( array( 'menu' => 'Resources (Header)', 'container' => '', 'menu_class' => 'dropdown-menu') ); ?>
                </li>

              </ul>
            </nav>
          </div> <!--contentWidth-->
        </div> <!-- tertMenu -->
      </div>  <!-- collapse offcanvas -->
    </div><!--contentWidth-->
  </header>











  <div class="container">
    <div class="row breadRow justify-content-center d-none d-md-flex">	<!-- OUnote: justify class changed to center for pages with no LSB -->
      <div class="col-12 col-lg-9">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
          </ol>
        </nav>
      </div>
    </div>

    <main class="row justify-content-center" id="mainContent">	<!-- OUnote: justify class added for pages with no LSB -->

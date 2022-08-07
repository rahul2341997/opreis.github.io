<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Opreis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>
	
	<!-- Fontawesome css file -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
	
	<!-- carousel css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">

	<!-- Animate css file -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">

	<!-- Custom css file -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom-after-login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'opreis' ); ?></a>
	
<header class="sticky-header">
    <div class="top_header">
        <div class="container">
            <div class="top_header_container">
                <div class="top_headerl">
                    <ul style="margin: 0;">
                        <li><p style="margin-bottom: 0;">HAVE ANY QUESTION?</p></li>
                        <li>
                            <a href="tel:(00) 123 456 789">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.16333 1.22222C2.2 1.76611 2.29167 2.29778 2.43833 2.805L1.705 3.53833C1.45444 2.805 1.29556 2.02889 1.24056 1.22222H2.16333ZM8.18889 8.56778C8.70833 8.71444 9.24 8.80611 9.77778 8.84278V9.75333C8.97111 9.69833 8.195 9.53944 7.45556 9.295L8.18889 8.56778ZM2.75 0H0.611111C0.275 0 0 0.275 0 0.611111C0 6.34944 4.65056 11 10.3889 11C10.725 11 11 10.725 11 10.3889V8.25611C11 7.92 10.725 7.645 10.3889 7.645C9.63111 7.645 8.89167 7.52278 8.20722 7.29667C8.14611 7.27222 8.07889 7.26611 8.01778 7.26611C7.85889 7.26611 7.70611 7.32722 7.58389 7.44333L6.23944 8.78778C4.51 7.90167 3.09222 6.49 2.21222 4.76056L3.55667 3.41611C3.72778 3.245 3.77667 3.00667 3.70944 2.79278C3.48333 2.10833 3.36111 1.375 3.36111 0.611111C3.36111 0.275 3.08611 0 2.75 0Z" fill="#525FE1"/>
                                </svg>
                                (00) 123 456 789
                            </a>
                        </li>
                        <li>
                            <a href="mailto:hello@writeabout.com">
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.51727 0C0.683296 0 0 0.683296 0 1.51727V9.48273C0 10.3167 0.683296 11 1.51727 11H15.5517C16.3856 11 17.0689 10.3167 17.0689 9.48273V1.51727C17.0689 0.683296 16.3856 0 15.5517 0H1.51727ZM1.51727 0.758548H15.5517C15.9784 0.758548 16.3102 1.09034 16.3102 1.5171V9.48256C16.3102 9.90935 15.9784 10.2411 15.5517 10.2411H1.51727C1.09048 10.2411 0.758717 9.90932 0.758717 9.48256V1.5171C0.758717 1.09031 1.09051 0.758548 1.51727 0.758548ZM14.5915 2.25793V2.25806C14.5016 2.26613 14.4176 2.30609 14.3545 2.37064L9.10342 6.98736C8.77177 7.2792 8.28453 7.27907 7.95368 6.98736L2.71449 2.37064H2.71436C2.63908 2.30066 2.53854 2.26428 2.43588 2.26984C2.28097 2.27963 2.14762 2.38281 2.09933 2.53045C2.05091 2.67796 2.09748 2.84001 2.21654 2.9395L5.17392 5.54724L2.2225 8.05416V8.05429C2.13122 8.11369 2.06997 8.20934 2.05409 8.31702C2.03822 8.42471 2.0693 8.53398 2.13968 8.61719C2.20993 8.70027 2.31246 8.74922 2.42133 8.75147C2.53021 8.75385 2.63472 8.70927 2.70854 8.6291L5.74886 6.05695L7.44989 7.55633C8.06267 8.09675 8.98832 8.0957 9.60121 7.55633L11.314 6.05099L14.3603 8.6291C14.4341 8.70927 14.5386 8.75385 14.6475 8.75147C14.7564 8.74922 14.8589 8.70027 14.9291 8.61719C14.9995 8.53398 15.0306 8.42471 15.0147 8.31702C14.9988 8.20934 14.9376 8.11369 14.8463 8.05429L11.8889 5.54737L14.8523 2.93963V2.9395C14.988 2.83789 15.0399 2.65864 14.9793 2.50028C14.9187 2.34192 14.7603 2.24297 14.5915 2.25792L14.5915 2.25793Z" fill="#525FE1"/>
                                </svg>
                                hello@writeabout.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top_headerr">
                    <ul style="margin: 0;">
                        <li><a href="http://localhost/Opreis/register">Register</a></li>
                        <li><a href="#">login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                  <div class="site-logo">
                    <a href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
                    </a>
                </div>  
                <div class="menu_wrapper">
                    <div class="offcanvas offcanvas-end" id="navbarToggler">
                        <div class="offcanvas-header">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav ml-auto my-navigation">

                        </ul>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	 => 'navbar-nav',
								)
							);
						?>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarToggler" aria-controls="navbarToggler">
                          <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>





<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'opreis' ); ?></a>

	<header id="masthead" class="site-header">

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'opreis' ); ?></button>
			
		</nav>#site-navigation -->
	</header><!-- #masthead -->

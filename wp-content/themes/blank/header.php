<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="http://localhost/rimando_tipz/wp-content/themes/blank/css/tipz.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="header">
        <nav>
          <ul>
              <li><a href="http://localhost/rimando_tipz/home/">Home</a></li>
              <li><a href="http://localhost/rimando_tipz/shop/">Shop</a></li>
              <li><a href="http://localhost/rimando_tipz/about/">About</a></li>
              <li><a href="http://localhost/rimando_tipz/contact/">Contact</a></li>
              <li><a href="http://localhost/rimando_tipz/my-account/">My Account</a></li>
              <li><a href="http://localhost/rimando_tipz/cart/">My Cart</a></li>
          </ul>
        </nav>
        <div class="logo">
           <a href="http://localhost/rimando_tipz/home">
            <img src="http://localhost/rimando_tipz/wp-content/uploads/2021/04/logo1.png" width="100px" height="100px"></a>
        </div>
    </div>


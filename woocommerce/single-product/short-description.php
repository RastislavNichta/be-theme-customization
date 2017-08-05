<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

if ( ! $post->post_excerpt ) return;
?>
<h5>Chcete využiť vernostný bonus? Bezplatne sa <a href="https://www.lyoness.com/sk/registration/partner/307146" target="blank" style="text-decoration:underline; font-weight: 600;">zaregistrujte tu</a>.</h5>
<div itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
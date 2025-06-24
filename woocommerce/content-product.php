<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<?php
	$main_image_url = get_the_post_thumbnail_url($product->get_id(), 'woocommerce_thumbnail');
	$attachment_ids = $product->get_gallery_image_ids();
	$hover_image_url = isset($attachment_ids[0]) ? wp_get_attachment_image_url($attachment_ids[0], 'woocommerce_thumbnail') : '';
	?>

	<div class="product-hover-image-wrapper">
	  <a href="<?php the_permalink(); ?>">
		<?php if ($main_image_url): ?>
		  <img src="<?php echo esc_url($main_image_url); ?>" alt="<?php the_title(); ?>" class="main-image" />
		<?php endif; ?>

		<?php if ($hover_image_url): ?>
		  <img src="<?php echo esc_url($hover_image_url); ?>" alt="<?php the_title(); ?>" class="hover-image" />
		<?php endif; ?>
	  </a>
	</div>

	<?php
	do_action( 'woocommerce_shop_loop_item_title' );
	do_action( 'woocommerce_after_shop_loop_item_title' );
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
<style>
	.product-hover-image-wrapper {
  position: relative;
  overflow: hidden;
}

.product-hover-image-wrapper img {
  width: 100%;
  display: block;
  position: relative;
}

.product-hover-image-wrapper .hover-image {
  position: absolute;
  top: 0;
  left: 100%;
  opacity: 0;
  transition: left 0.6s ease, opacity 0.6s ease;
  z-index: 2;
}

.product-hover-image-wrapper.hover-active .hover-image {
  left: 0;
  opacity: 1;
}

.product-hover-image-wrapper .main-image {
  transition: opacity 0.6s ease;
  z-index: 1;
}

.product-hover-image-wrapper.hover-active .main-image {
  opacity: 1;
}


</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const products = document.querySelectorAll('.product-hover-image-wrapper');

  products.forEach(product => {
    product.addEventListener('mouseenter', () => {
      product.classList.add('hover-active');
    });

    product.addEventListener('mouseleave', () => {
      product.classList.remove('hover-active');
    });
  });
});
</script>

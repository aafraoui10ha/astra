<?php
defined('ABSPATH') || exit;
get_header('shop');
?>

<section>
    <div class="col-12">
       <div class="" style="
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg');
     background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 0;
    text-align: center;
    color: white;
    height: 710px;
    background-attachment: fixed;
    top: 0;
    position: relative;
    margin-top: -150px;">
        <div class="row">
            <div class="col-6">
           <div  class="d-flex justify-content-end align-content-end">
              <h1>Bienvenue dans notre Boutique</h1>
        <p>Découvrez nos produits exclusifs</p>
           </div>
        </div>
        </div>
       </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    // Remove ID, class, and style from <div id="content" class="site-content" style="display: block;">
    $('#content.site-content').removeAttr('id').removeAttr('class').removeAttr('style');

    // Change class "ast-container" to "row"
    $('.ast-container').removeClass('ast-container').addClass('row');
});
</script>

<?php if ( astra_page_layout() === 'left-sidebar' ) { ?>

	<?php get_sidebar(); ?>
         <?php do_action('woocommerce_before_main_content'); ?>
       <div class="container my-5">
         <div class="row">
        <!-- Sidebar -->
        
<?php } ?>
        <!-- Main Product Grid -->

        <div class="col-lg-12 container">
            <?php
            

            do_action('woocommerce_archive_description');

            if (woocommerce_product_loop()) {

                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();

                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                do_action('woocommerce_after_shop_loop');
            } else {
                do_action('woocommerce_no_products_found');
            }

            do_action('woocommerce_after_main_content');
            ?>
        </div>
    </div>
</div>

<style>
    .ast-separate-container .ast-woocommerce-container{
  padding:10px !important;
}
</style>


<?php
get_footer('shop');

<?php

/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>



<section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg')!important;">
	<div class="overlay">
		<div class="container h-100 d-flex justify-content-center align-items-end text-center position-relative">
			<div class="hero-content mb-5">
				<h1 class="hero-title mb-2"><?php the_title(); ?></h1>
				<p class="hero-date mb-1"><?php echo get_the_date('F j, Y'); ?></p>
				<span class="line mt-2 d-block mx-auto"></span>
			</div>
		</div>
	</div>
</section>
<!-- hero section end -->
<!-- cetegor section start -->
<section class="category-breadcrumb-section mt-5 ">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if (is_single()) {
					$post_id = get_the_ID();

					$blog_page_id = get_option('page_for_posts');
					$blog_url = get_permalink($blog_page_id);
					$blog_title = get_the_title($blog_page_id);

					$categories = get_the_category($post_id);
					if (!empty($categories)) {
						$main_category = $categories[0];
						$cat_url = get_category_link($main_category->term_id);
						$cat_name = $main_category->name;
					}
					//  adriss blog
					$post_title = get_the_title($post_id);

					//   tree category
					echo '<p class="text-center mb-4 text-dark breadcrumb-category text-capitalize">';
					echo '<a href="' . esc_url($blog_url) . '" class="text-dark text-decoration-none">Blog</a> / ';
					if (!empty($categories)) {
						echo '<a href="' . esc_url($cat_url) . '" class="text-dark text-decoration-none">' . esc_html($cat_name) . '</a> / ';
					}
					echo '<span class="spancate">' . esc_html($post_title) . '</span>';
					echo '</p>';
				}
				?>
			</div>
		</div>
	</div>
</section>

<!-- cetegor section end -->
<!--  -->
<section>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-md-6 mb-4 justify-content-center" data-aos="fade-up" data-aos-delay="300">
				<div class="image-box position-relative overflow-hidden order-1 order-md-1">
					<?php if (has_post_thumbnail()) : ?>
						<img class="img-fluid productimg blog-item" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>">
					<?php else : ?>
						<img class="img-fluid productimg blog-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="default image">
					<?php endif; ?>
				</div>

				<span class="line2"></span>
				<div class="col-12 comment-zone mt-5 w-100 order-3 order-md-3">
					<?php
					if (comments_open() || get_comments_number()) {
						comments_template();
					}
					?>
				</div>
				<span class="line2"></span>

			</div>

			<div class="col-md-6 d-flex justify-content-center align-items-center text-center order-2 order-md-2">
				<div class="single-content">
					<?php the_content(); ?>
				</div>
			</div>

		</div>
	</div>

</section>




<style>
	.spancate {
		color: #646246;
	}

	div>from>p>input {
		background: #000 !important;
		color: #000 !important;
	}

	.ast-separate-container .comment-respond {
		padding: 0 !important;
		margin: 0 !important;
	}

	.ast-separate-container .comments-title,
	.ast-separate-container .ast-comment-list li.depth-1,
	ol,
	ul {
		padding: 0 !important;
		margin: 0 !important;
	}

	.line2 {
		display: block;
		width: 100%;
		height: 1px;
		background-color: #000;
		margin: 50px 0;
	}

	.blog-item {
		border-radius: 10px;
	}

	.blog-item:hover img {
		border-radius: 10px !important;

	}




	.image-box {
		position: relative;
		width: 100%;
		height: 500px;
		overflow: hidden;
		border-radius: 10px;

	}

	.image-box img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: transform 0.5s ease;
		border-radius: 10px;

	}

	.image-box:hover img {
		transform: scale(1.1);
		border-radius: 10px !important;
		/* Zoom In */
	}

	.hero-section {
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		min-height: 710px;
		position: relative;
		color: white;
		display: flex;
		align-items: center;
		margin-top: -150px;
	}

	.overlay {
		width: 100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.hero-title {
		font-size: 3rem;
		font-weight: bold;
	}

	.hero-date {
		font-size: 1.1rem;
		margin-top: 20px;
	}

	.line {
		width: 90px;
		height: 1px;
		background-color: #fff;
		border-radius: 2px;
	}

	/* Responsive */
	@media (max-width: 768px) {
		.hero-section {
			position: center;
			margin-top: 0;
			min-height: 500px;
		}

		.hero-title {
			font-size: 2rem;
		}

		.hero-date {
			font-size: 1rem;
			width: 90%;
			margin: 0 auto;
			text-align: center;
		}


		.line {
			margin-top: 10px;
		}
	}
</style>


<script>
	jQuery(document).ready(function($) {
		// Remove ID, class, and style from <div id="content" class="site-content" style="display: block;">
		$('#content.site-content').removeAttr('id').removeAttr('class').removeAttr('style');

		// Change class "ast-container" to "row"
		$('.ast-container').removeClass('ast-container').addClass('row');
	});
</script>
<?php get_footer(); ?>
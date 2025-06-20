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

get_header('blog'); ?>
<?php
$is_blog = is_home() || is_archive() || is_category() || is_tag();
?>
<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="<?php echo $is_blog ? 'active' : ''; ?>">Blog</a>


<section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg')!important;">
	<div class="overlay">
		<div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center">
			<h1 class="hero-title" data-aos="fade-right" data-aos-delay="300">
				<?php single_cat_title(); ?>
			</h1>
			<p class="hero-description col-md-6" data-aos="fade-right" data-aos-delay="300">
				<?php echo category_description(); ?>
			</p>
			<span class="line mt-3"></span>
		</div>
	</div>
</section>

<style>
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

	.hero-description {
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
			margin-top: 0;
			min-height: 500px;
		}

		.hero-title {
			font-size: 2rem;
		}

		.hero-description {
			font-size: 1rem;
			width: 90%;
		}

		.line {
			margin-top: 10px;
		}
	}
</style>

<!-- section cont bloge and show all category -->
<section class="category-list-section py-4">
	<div class="container">
		<div class="row justify-content-between align-items-center gy-3">

			<div class="col-md-6 col-12 text-md-start text-center">
				<h3 class="mb-3" data-aos="fade-right" data-aos-delay="300">Filter by Category</h3>
				<div class="category-list d-flex flex-wrap justify-content-md-start justify-content-center gap-2">
					<?php
					$post_categories = get_categories([
						'taxonomy'   => 'category',
						'hide_empty' => true,
					]);

					$blog_page_url = get_permalink(get_option('page_for_posts')); // for return to page blog page

					echo '<button data-aos="fade-up" data-aos-delay="300">
        <a class="text-decoration-none btn1 text-lowercase" href="' . esc_url($blog_page_url) . '">All blog</a>
      </button>&nbsp;';

					foreach ($post_categories as $category) {
						$category_link = get_category_link($category->term_id);
						echo '<button data-aos="fade-up" data-aos-delay="300"><a class="text-decoration-none btn1 text-lowercase" href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></button>&nbsp;';
					}

					?>
				</div>
			</div>

			<div class="col-md-4 col-12 text-md-end text-center">
				<p class="mt-3 mt-md-0" data-aos="fade-left" data-aos-delay="300">
					<?php
					$current_category = get_queried_object();
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'cat' => $current_category->term_id,
						'post_status' => 'publish'
					);
					$query = new WP_Query($args);
					$post_count = $query->found_posts;

					echo 'Posts in this category: ' . $post_count;
					wp_reset_postdata();
					?>
				</p>
			</div>

		</div>
	</div>
</section>

<style>
	.category-list-section {
		margin-top: 40px;
		margin-bottom: 40px;
	}

	.category-list-section>div {}

	section>div>div>div>div>button {
		border-color: transparent !important;
		padding: 0px !important;
	}

	section>div>div>div>div>button:hover {
		border-color: transparent !important;
		background-color: transparent !important;
		padding: 0px !important;
	}
</style>

<!-- end section cont bloge and show all category -->
<!-- blog section -->
<section>
	<div class="container">
		<div class="row justify-content-center">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'cat' => get_queried_object_id()
			);

			$query = new WP_Query($args);

			$delay = 0;

			if ($query->have_posts()):
				while ($query->have_posts()): $query->the_post();
					$image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
					$post_title = get_the_title();
					$post_date = get_the_date('d/m/Y');
			?>
					<div class="col-md-8 mb-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
						<a href="<?php the_permalink(); ?>" class="text-decoration-none">
							<div class="image-box position-relative overflow-hidden">
								<?php if ($image_url): ?>
									<img class="img-fluid productimg blog-item" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>">
								<?php else: ?>
									<img class="img-fluid productimg blog-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="default image">
								<?php endif; ?>
								<p class="blog-text"><?php echo esc_html($post_title); ?></p>
								<p class="blog-date"><?php echo 'Date: ' . esc_html($post_date); ?></p>
							</div>
						</a>
					</div>

			<?php
					$delay += 500;
				endwhile;
				wp_reset_postdata();
			else:
				echo '<p>No posts found.</p>';
			endif;
			?>
		</div>

	</div>
</section>
<style>
	.blog-item {
		border-radius: 10px;
	}

	.blog-text {
		font-size: 16px;
		color: #333;
		margin-top: 10px;
	}

	.blog-date {
		font-size: 14px;
		color: #666;
		margin-top: 10px;
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
		border-radius: 10px;

		/* Zoom In */
	}

	.blog-text {
		position: absolute;
		top: 80%;
		left: 2%;
		color: white;
		font-size: 2rem;
		z-index: 2;
		text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
		margin: 0;
		text-align: center;
	}

	.blog-date {
		position: absolute;
		bottom: 10px;
		left: 2%;
		font-size: 0.9rem;
		color: #fff;
		z-index: 2;
		text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
		margin: 0;
	}
</style>
<!-- end section blog  -->
<!-- script for delete class ast-container -->


<script>
	jQuery(document).ready(function($) {
		// Remove ID, class, and style from <div id="content" class="site-content" style="display: block;">
		$('#content.site-content').removeAttr('id').removeAttr('class').removeAttr('style');

		// Change class "ast-container" to "row"
		$('.ast-container').removeClass('ast-container').addClass('row');
	});
</script>
<?php get_footer('blog'); ?>
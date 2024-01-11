<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

include 'Parsedown.php';
$Parsedown = new Parsedown();

get_header();
?>
	<main id="primary" class="site-main">
	<?php
		// Include WordPress post submission functions
		require_once(ABSPATH . 'wp-admin/includes/post.php');

		// Check if the form is submitted
		if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['my_post_content'])) {
				// Prepare post data
				$my_post = array(
						'post_content'  => $_POST['my_post_content'],
						'post_status'   => 'publish'
				);

				// Insert the post into the database
				wp_insert_post( $my_post );
		}
	?>

	<form method="post" class="fe-editor">
		<label for="my_post_content">What's on your mind?</label>
		<textarea name="my_post_content" id="my_post_content"></textarea>
		<input type="submit" value="Submit">
	</form>

	<section>
		<h2>💡 Ideas</h2>
	<?php
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
			?>
			<article class="idea">
				<?php echo $Parsedown->text(get_the_content()); ?>
				<div class="idea-actions">
					<?php
						// Display the edit post link
						$edit_post_link = get_edit_post_link(get_the_ID());

						if ($edit_post_link) {
							echo '<p><a href="' . $edit_post_link . '">📝 Edit</a></p>';
						}

						// Display the delete post link
						$delete_post_link = get_delete_post_link(get_the_ID());

						if ($delete_post_link) {
							echo '<p><a href="' . $delete_post_link . '">✅ Done</a></p>';
						}
					?>
				</div>
			</article>
			<?php
			}
				wp_reset_postdata();
			} else { ?>
				<p>❌ No ideas found</p>
		<?php
			}
		?>
	</section>
	</main><!-- #main -->

	<script>
		setInterval(() => {
			if (document.getElementById('my_post_content').value === '') {
				location.reload(true);
			}
		}, 1000 * 60 * 5); // 5 minutes
	</script>
<?php
get_footer();

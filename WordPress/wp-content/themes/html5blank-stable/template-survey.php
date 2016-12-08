<?php /* Template Name: Survey */ get_header();

	if(isset($_GET['id'])){ $id = $_GET['id']; }
	if(isset($_GET['url'])){ $url = $_GET['url']; }else{ $url = home_url(); }

	echo '<div class="warning good redirect"><strong>DONE! </strong> You will taken back to the lesson shortly.</div>';
	$content = do_shortcode('[ninja_form id='.$id.']');
?>

	<main role="main">
		<section>
			<article data-url="<?=$url;?>" data-quiz="<?=$id;?>" data-user="<?=get_current_user_id();?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?=$content?>

			<article>
		</section>
	</main>

<?php get_footer(); ?>
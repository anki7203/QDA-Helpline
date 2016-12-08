<?php /* Template Name: Quiz */ get_header();

	if(isset($_GET['id'])){ $id = $_GET['id']; }
	if(isset($_GET['url'])){ $url = $_GET['url']; }else{ $url = home_url(); }

	if(is_user_logged_in()){ 
		echo '<div class="warning good redirect"><strong>DONE! </strong> You will taken back to the lesson shortly.</div>';
		$content = do_shortcode('[WpProQuiz '.$id.']');
	}else{
		echo '<div class="warning"><strong>WARNING: </strong> You must be signed in to take quizes!</div>'; 
		echo '<script>setTimeout(function(){ window.location.replace("'.$url.'"); }, 5000);</script>';
	}	
?>

	<main role="main">
		<section>
			<article data-url="<?=$url;?>" data-quiz="<?=$id;?>" data-user="<?=get_current_user_id();?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?=$content?>

			<article>
		</section>
	</main>

<?php get_footer(); ?>
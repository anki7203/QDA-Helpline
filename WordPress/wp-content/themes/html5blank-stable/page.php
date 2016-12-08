<?php /* Template Name: Quiz */
	get_header();

	$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
	$pages = array();
	foreach ($pagelist as $page) {
	   $pages[] += $page->ID;
	}

	$current = array_search($post->ID, $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];

	$children = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) );

	if(!is_user_logged_in()){ 
		echo '<div class="warning"><strong>WARNING: </strong> You are not signed in! Your progress cannot be saved or analyzed.</div>'; 
	}else{
		echo '<div id="user" data-id="'.get_current_user_id().'"></div>';
	}
	if($children){
		$next = '<a href="#" class="next start">Start<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
		$prev = '';
	}
	if($post->post_parent){
		if($nextID){ 
			$next = '<a href="'.get_permalink($nextID).'" class="next">Next<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>';
		}else{
			$next = '<a href="#" class="next finish">Complete<i class="fa fa-check-circle" aria-hidden="true"></i></a>';
		}
		if($prevID){ 
			$prev = '<a href="'.get_permalink($prevID).'" class="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>Back</a>'; 
		}else{
			$prev = '<a href="'.get_permalink(wp_get_post_parent_id($page->ID)).'" class="prev restart"><i class="fa fa-repeat" aria-hidden="true"></i>Restart</a>';
		}
	}
?>

	<main role="main">
		<section>
			<h1><?=$prev;?><?php the_title(); ?><?=$next;?></h1>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			<article>


		</section>
	</main>

<?php get_footer(); ?>
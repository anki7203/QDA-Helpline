<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<?php
			if(!is_user_logged_in()){
				echo '<h1>Welcome to QDA Helpline!</h1>';
				echo '<p>The goal of this tutorial is help individuals in sectors that produce large amounts of qualitative data engage more deeply with their work. It is our hope that by participating in this course you will learn more about the basics of qualitative data analysis (QDA), and how software may be able to help you throughout the analytical processes.</p>';
				echo '<a class="signin-btn" href="#">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a>';
			}else{
				echo '<h1>Welcome '.$current_user->display_name.'</h1>';
				echo '<p style="text-align:center;">Select a lesson from the left to pick up where you left off.</p>';
			}
		?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

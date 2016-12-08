<?php /* Template Name: Docs */ get_header(); ?>

	<main role="main">
		<section class="docs">
			<article data-url="<?=$url;?>" data-quiz="<?=$id;?>" data-user="<?=get_current_user_id();?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1>Team</h1>
				<div class="team">
					<div class="member">
						<img src="https://graph.facebook.com/10154806304810739/picture?width=400" alt="Emily Porter" />
						<h1>Emily Porter</h1>
						<h2>Information</h2>
						<h3><a href="emailto:emily.e.porter@colorado.edu">emily.e.porter@colorado.edu</a></h3>
					</div>
					<div class="member">
						<img src="https://lh5.googleusercontent.com/-hJKFOFzP5bk/AAAAAAAAAAI/AAAAAAAAAAs/11Vl_wyu-qs/photo.jpg?sz=400" alt="Andrew Kiproff" />
						<h1>Andrew Kiproff</h1>
						<h2>Developer</h2>
						<h3><a href="emailto:andrew.kiproff@colorado.edu">andrew.kiproff@colorado.edu</a></h3>
					</div>
					<div class="member">
						<img src="https://graph.facebook.com/10154809731359090/picture?width=400" alt="Ole Bjelland" />
						<h1>Ole Bjelland</h1>
						<h2>Editor</h2>
						<h3><a href="emailto:ole.bjelland@colorado.edu">ole.bjelland@colorado.edu</a></h3>
					</div>
					<div class="member">
						<img src="https://lh3.googleusercontent.com/-ntN48oPsFp8/AAAAAAAAAAI/AAAAAAAAAqA/0W-BPc5ba2Q/photo.jpg?sz=400" alt="Chris Bopp" />
						<h1>Chris Bopp</h1>
						<h2>Director</h2>
						<h3><a href="emailto:chris.bopp@colorado.edu">chris.bopp@colorado.edu</a></h3>
					</div>
				</div>
				<br><br><br><br><br><br><br><br>
				<h1>Mentality</h1>
				<?php echo get_post_field('post_content', 354); ?>
				<br><br><br><br><br><br><br><br>
				<h1>Links</h1>
				<div class="links">
					<a class="github" href="https://github.com/anki7203/QDA-Helpline/" target="_blank">QDA Helpline on Github <i class="fa fa-github" aria-hidden="true"></i></a>
					<a class="google" href="#" target="_blank">QDA Helpline on Dive <i class="fa fa-google" aria-hidden="true"></i></a>
				</div>
			<article>
		</section>
	</main>

<?php get_footer(); ?>
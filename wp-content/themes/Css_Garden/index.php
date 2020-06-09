
<!-- this is hesder section  using custom css and walker.php  -->
<?php get_header();?>
<!-- this is end header  -->
<body id="css-zen-garden">
<div class="page-wrapper">	
<!-- this is intro   section  -->
<section class="intro" id="zen-intro">
		<header role="banner">
			<h1>CSS Zen Garden</h1>
			<h2>The Beauty of <abbr title="Cascading Style Sheets">CSS</abbr> Design</h2>
		</header>

		<div class="summary" id="zen-summary" role="article">
			<p>A demonstration of what can be accomplished through <abbr title="Cascading Style Sheets">CSS</abbr>-based design. Select any style sheet from the list to load it into this page.</p>
			<p>Download the example <a href="/examples/index" title="This page's source HTML code, not to be modified.">html file</a> and <a href="/examples/style.css" title="This page's sample CSS, the file you may modify.">css file</a></p>
		</div>
	
		<div class="preamble" id="zen-preamble" role="article">
			<h3>The Road to Enlightenment</h3>
			<p>Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible <abbr title="Document Object Model">DOM</abbr>s, broken <abbr title="Cascading Style Sheets">CSS</abbr> support, and abandoned browsers.</p>
			<p>We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the <abbr title="World Wide Web Consortium">W3C</abbr>, <abbr title="Web Standards Project">WaSP</abbr>, and the major browser creators.</p>
			<p>The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn to use the time-honored techniques in new and invigorating fashion. Become one with the web.</p>
		</div>
	</section>
<!-- this is en intro   -->
<!-- i try to get all post from CMS in wordpress in this design -->
<div class="main supporting" id="zen-supporting" role="main">
	<?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
   <div class="<?php the_title(); ?>"   id="zen-<?php the_title();?>" <?php post_class(); ?> role="article">
     <?php 
    $id=get_The_ID();
      if($id== 8):?>
	  <h3 style=" display: none;"><?php the_title(" ") ?></h3>
      <?php else: ?>
	   <h3><?php the_title(); ?></h3>
     <?php endif ;?>
      <p> <?php the_content(); ?></p>
    </div><!--end post-->
     <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	</div><!--end navigation-->
  <?php  endelse :?>
<?php else : ?>
<?php endif; ?> 

<!-- this is requirment section  -->
<div class="Requirements" id="zen-requirements" role="article">
			<h3>Requirements</h3>
			<p>Where possible, we would like to see mostly <abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr> usage. <abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr> should be limited to widely-supported elements only, or strong fallbacks should be provided. The CSS Zen Garden is about functional, practical <abbr title="Cascading Style Sheets">CSS</abbr> and not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your <abbr title="Cascading Style Sheets">CSS</abbr> validates.</p>
			<p>Luckily, designing this way shows how well various browsers have implemented <abbr title="Cascading Style Sheets">CSS</abbr> by now. When sticking to the guidelines you should see fairly consistent results across most modern browsers. Due to the sheer number of user agents on the web these days &#8212; especially when you factor in mobile &#8212; pixel-perfect layouts may not be possible across every platform. That&#8217;s okay, but do test in as many as you can. Your design should work in at least IE9+ and the latest Chrome, Firefox, iOS and Android browsers (run by over 90% of the population).</p>
			<p>We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum, and try to incorporate unique and interesting visual themes to your work. We&#8217;re well past the point of needing another garden-related design.</p>
			<p>This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited exceptions, see <a href="http://www.mezzoblue.com/zengarden/submit/guidelines/">submission guidelines</a>), but we ask you release your <abbr title="Cascading Style Sheets">CSS</abbr> under a Creative Commons license identical to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="View the Zen Garden's license information.">one on this site</a> so that others may learn from your work.</p>
			<p role="contentinfo">By <a href="http://www.mezzoblue.com/">Dave Shea</a>. Bandwidth graciously donated by <a href="http://www.mediatemple.net/">mediatemple</a>. Now available: <a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">Zen Garden, the book</a>.</p>
		</div>
		</div>
	<!-- this is footer section  -->
			<?php  get_footer();?>
	<!-- this is  end footer  -->
</div>
	<!-- this is sidebar  section  -->
<?php get_sidebar();?>
<!-- this is  end sidebar    -->

</div>

<div class="extra1" role="presentation"></div><div class="extra2" role="presentation"></div><div class="extra3" role="presentation"></div>
<div class="extra4" role="presentation"></div><div class="extra5" role="presentation"></div><div class="extra6" role="presentation"></div>
</body>
</html>
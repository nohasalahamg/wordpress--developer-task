
	<aside class="sidebar" role="complementary">
		<div class="wrapper">

			<div class="design-selection"  id="design-selection">
				<h3 class="select">Select a Design:</h3>
				<nav role="navigation">
	



				<?php
				wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
	
	'menu'              => "my-custom-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "wrapper", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'container_id'      => "", // (string) The ID that is applied to the container.
    'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    'before'            => "", // (string) Text before the link markup.
	'after'             => "", // (string) Text after the link markup.
	'walker'=> new your_themename_top_menu(),
	'depth'=>'0',
	



	
	) ) 
;

?>

	
				</nav>
			</div>

			<div class="design-archives" id="design-archives">
				<h3 class="archives">Archives:</h3>
				<nav role="navigation">
				<?php
				wp_nav_menu( array( 
    'theme_location' => 'my-resource-menu', 
	
	'menu'              => "my-resource-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'container_id'      => "", // (string) The ID that is applied to the container.
    'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    'before'            => "", // (string) Text before the link markup.
	'after'             => "", // (string) Text after the link markup.
	'walker'=> new your_themename_resource_menu(),
	'depth'=>'0',
	



	
	) ) 
;

?>
				</nav>
			</div>

			<div class="zen-resources" id="zen-resources">
				<h3 class="resources">Resources:</h3>
				<ul>
					<li class="view-css">
						<a href="style.css" title="View the source CSS file of the currently-viewed design.">
							View This Design&#8217;s <abbr title="Cascading Style Sheets">CSS</abbr>						</a>
					</li>
					<li class="css-resources">
						<a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS.">
							<abbr title="Cascading Style Sheets">CSS</abbr> Resources						</a>
					</li>
					<li class="zen-faq">
						<a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden.">
							<abbr title="Frequently Asked Questions">FAQ</abbr>						</a>
					</li>
					<li class="zen-submit">
						<a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file.">
							Submit a Design						</a>
					</li>
					<li class="zen-translations">
						<a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page.">
							Translations						</a>
					</li>
				</ul>
			</div>

			
		</div>
	</aside>
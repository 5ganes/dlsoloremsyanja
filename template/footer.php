</div>
		
		</div>
		<div id="footer" class="cf">
			<div id="widgets-wrap-footer" class="widget-column-3 cf">
				<div id="text-5" class="widget-footer frontier-widget widget_text">
					<h4 class="widget-title">फ़ेसबुकमा जोडिनुहोस</h4>
					<div class="textwidget">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkrishighar%2F&tabs=timeline&width=290px&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300px" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
				
				<div id="text-8" class="widget-footer frontier-widget widget_text">
					<?php
					$you=$conn->fetchArray($groups->getById(YOUTUBE));
					?>
					<h4 class="widget-title"><?=$you['name']?></h4>
					<div class="textwidget">
					<iframe width="300" height="300" src="<?=$you['contents']?>" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
				
				<div id="text-7" class="widget-footer frontier-widget widget_text">
					<?php
					$contact=$conn->fetchArray($groups->getById(CONTACT));
					?>
					<h4 class="widget-title"><?=$contact['name']?></h4>
					<div class="textwidget">
						<?=$contact['shortcontents'];?>
					</div>
				</div>
			</div>
		</div>
		<div id="bottom-bar" class="cf">
			<span id="bottom-bar-text">© Copyright <?=date('Y');?>. DADO Saptari, Nepal. All Right Reserved.</span>	
			<span id="theme-link"><a href="http://www.krishighar.com/">Powered by: Team Krishighar</a></span>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.menu-item-has-children').click(function(){
				$('.nav-main > .menu-item-has-children').not(this).removeClass('toggle-on');
				$(this).not().parents().removeClass('toggle-on');
				$(this).toggleClass('toggle-on');
			});
		});
	</script>
	<link rel="stylesheet" id="msnb_notice_style-css" href="css/msnb_style.css" type="text/css" media="all">
	<link rel="stylesheet" id="ewic-frontend-css-css" href="css/frontend.css" type="text/css" media="all">
	<link rel="stylesheet" id="ewic-bxslider-css-css" href="css/jquery.bxslider.css" type="text/css" media="all">
	<link rel="stylesheet" id="ewic-prettyphoto-css-css" href="css/prettyPhoto.css" type="text/css" media="all">
	<script type="text/javascript" src="js/bjqs-1.3.min.js"></script>
	<script type="text/javascript" src="js/wp-embed.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">
		jQuery( document ).ready( function($) {
			$( '#basic-slider' ).bjqs( {
				animtype : 'fade',
				width : 480,
				height : 340,
				animduration : 500,
				animspeed : 5000,
				automatic : true,
				showcontrols : true,
				nexttext : '<span class="slider-next"></span>',
				prevtext : '<span class="slider-prev"></span>',
				showmarkers : false,
				usecaptions : true,
				responsive : true
			} );
		} );
	</script>
</body>
</html>
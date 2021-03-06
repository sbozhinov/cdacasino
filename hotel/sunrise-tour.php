<?php $meta_keywords = "hotel, coeur d'alene casino, resort, northwest, idaho, worley, spa, restaurants, dining, cafe"; ?>
<?php $meta_description = "Our seventh major expansion has resulted in a true destination resort to rival any in the entire Northwest. Our sunrise rooms provide the relaxation and comfort you deserve."; ?>
<?php $wrapper_bg = "sunrisetour_bg"; ?>
<?php $page_title = "Coeur d'Alene Casino Resort: Sunrise Room Tour"; ?>
<?php include('../includes_2ndlevel/header.php'); ?>


<div id="main_secondary"  ><!--  main -->

<div id="container">
				

				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="content">
					
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					 <div id="sunrise_text">
    <h2>Sunrise Room Tours</h2>
    <p>
Our seventh major expansion has resulted in a true destination resort to rival any in the entire Northwest. In addition to world-class gaming, we offer six destination restaurants, the largest day spa in the Northwest, a top-rated golf course, plus all the recreational amenities that come from being located in an unparalleled environment of lakes and mountains.
    </p>
                                </div><!-- end sunrise text -->
				</div>
 
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						<li>
                <!-- "Large" image location -->         <a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/01.jpg" title="CDA Sunrise Hotel tour picture #01">
		<!-- "Thumbnail" image location -->             <img src="../images/hotel/sunrisetour/thumbnails/1.png" alt="CDA Sunrise Hotel tour picture #01" />
							</a>
							<div class="caption">
								

							</div>
						</li>

						<li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/02.jpg" title="CDA Sunrise Hotel tour picture #02">
								<img src="../images/hotel/sunrisetour/thumbnails/2.png" alt="CDA Sunrise Hotel tour picture #02" />
							</a>
							<div class="caption">


							</div>
						</li>

						<li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/03.jpg" title="CDA Sunrise Hotel tour picture #03">
								<img src="../images/hotel/sunrisetour/thumbnails/3.png" alt="CDA Sunrise Hotel tour picture #03" />
							</a>
							<div class="caption">


							</div>
						</li>

						<li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/04.jpg" title="CDA Sunrise Hotel tour picture #04">
								<img src="../images/hotel/sunrisetour/thumbnails/4.png" alt="CDA Sunrise Hotel tour picture #04" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #05">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #05" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #06">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #06" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #07">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #07" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #08">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #08" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #09">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #09" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #10">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #10" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #11">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #11" />
							</a>
							<div class="caption">

							</div>
						</li>
                                                                                                <li>
							<a class="thumb" name="leaf" href="../images/hotel/sunrisetour/main/05.jpg" title="CDA Sunrise Hotel tour picture #12">
								<img src="../images/hotel/sunrisetour/thumbnails/5.png" alt="CDA Sunrise Hotel tour picture #12" />
							</a>
							<div class="caption">

							</div>
						</li>


					</ul>
				</div>
		



                                
			</div><!-- end sunrise gallery #content -->



		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '340px', 'float' : 'left', 'margin-left': '15px'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});

				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 16,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         false,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>
<div class="clear" ></div>

<span class="sunrise_quicklinks" >
 <?php include('../includes_2ndlevel/quicklinks.php'); ?>
</span>

<div class="clear" ></div>

</div><!-- end main -->


<?php include('../includes_2ndlevel/footer.php'); ?>


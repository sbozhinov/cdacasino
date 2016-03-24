<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <link rel="stylesheet" href="./css/cda.css" type="text/css"/>
        <script type="text/javascript">
            var preload = new Array();
            preload[0] = "./images/header/cdalogohover.png";
            preload[1] = "./images/header/menu_dropdown.png";
            preload[2] = "./images/backgrounds/MiddleBackground.jpg";
            var loadedimages = new Array();
            for(var i=0; i < preload.length; i++)
            {
                loadedimages[i] = new Image();
                loadedimages[i].src = preload[i];
            };
        </script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="./images/footer/favicon.ico" type="image/x-icon" />
        <title><?php echo ($page_title); ?></title>
        <meta name="description" content="<?php echo ($meta_description); ?>" />
        <meta name="keywords" content="<?php echo ($meta_keywords); ?>" />

        <script type="text/javascript" src="./js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="./js/easySlider1.7.js"></script>
        <script type="text/javascript" src="./js/jquery.nivo.slider.pack.js"></script>

        <script type="text/javascript">
            /*nivo slideshow settings*/
            jQuery.noConflict();
            jQuery(window).load(function() {
                jQuery('.slider').nivoSlider({
                    effect: 'slideInRight', // Specify sets like: 'fold,fade,sliceDown'
                    animSpeed: 700, // Slide transition speed
                    pauseTime: 5000, // How long each slide will show
                    startSlide: 0, // Set starting Slide (0 index)
                    directionNav: false, // Next & Prev navigation
                    directionNavHide: true, // Only show on hover
                    controlNav: true, // 1,2,3... navigation
                    pauseOnHover: true, // Stop animation while hovering
                    controlNavThumbs: false, // Use thumbnails for Control Nav
                    controlNavThumbsFromRel: false, // Use image rel for thumbs
                    keyboardNav: true, // Use left & right arrows
                    manualAdvance: false // Force manual transitions

                });
            });

        </script>
        <?php $url = $_SERVER['REQUEST_URI'] ?>
    </head>
    <body>

        <div id="wrapper" class="<?php if (isset($wrapper_bg)) {
            echo ($wrapper_bg);
        } else
            echo "wrapper_bg" ?>"  >

                <div id="header">

                    <!-- google search -->
                    <div id="search">
                        <form   action="./search.php" method="post">
                            <input  type="text" name="q" class="search_text" value="search site..."/>
                            <input id="submit" type="submit" name="search" value="Search" />
                        </form>
                    </div>
                    <script type="text/javascript">
                        jQuery.noConflict();
                        jQuery('input[name=q]').focus(function(){
                            if (jQuery(this).val() == 'search site...')
                                jQuery(this).val('');
                        });
                        jQuery('input[name=q]').blur(function(){
                            if (jQuery(this).val() == '')
                                jQuery(this).val('search site...');
                        });
                    </script>

                    <!-- end google search box-->


                <div id="navigation">

                    <div id="left_nav_links">
                        <ul>
                            <li><a href="./events" <?php  if (preg_match("/\bevents\b/", $url) &&  !preg_match("/\bgolf\b/", $url) ) { echo "id=\"selected\"";  }?>>events</a><ul>
                                    <li><a href="./events">Events Calendar</a></li>
                                    <li><a href="http://www.hofboxing.com/" target="_blank" >House of Fury</a></li>
                                </ul>
                            </li>
                            <li  ><a href="./gaming" <?php  if (preg_match("/\bgaming\b/", $url)  ) { echo "id=\"selected\"";  }?> >gaming</a>
                                <ul><li><a href="./gaming">Overview</a></li>
                                    <li><a href="./gaming/bingo.php">Bingo</a></li>
                                    <li><a href="./gaming/lucky-you.php">Lucky You</a></li>
                                    <li><a href="./gaming/newsletter.php">Newsletter</a></li>
                                    <li><a href="./gaming/off-track-betting.php">Off-Track Betting</a></li>
                                    <li><a href="./gaming/catalog.php">Rewards Catalog</a></li>
                                    <li><a href="./gaming/rewards-club.php">Rewards Club</a></li>
                                    <li><a href="./gaming/slots.php">Slots</a></li>
                                </ul>
                            </li>
                            <li ><a href="./golf" <?php  if (preg_match("/\bgolf\b/", $url)  ) { echo "id=\"selected\"";  }?>>golf</a>
                                <ul><li><a href="./golf">Golf Overview</a></li>
                                    <li><a href="./golf/course-tour.php">Course Tour</a></li>
                                    <li><a href="./golf/daily-rates.php">Daily Rates</a></li>
                                    <li><a href="./golf/events-promos.php">Events/Promos</a></li>
                                    <li><a href="./golf/group-events.php">Group Events</a></li>
                                    <li><a href="./golf/microputt.php">Microputt Golf Game</a></li>
                                    <li><a href="./golf/newsletter.php">Newsletter</a></li>
                                    <li><a href="http://estore.cdacasino.com/zencart/" target="_blank">Store</a></li>
                                    <li><a href="./golf/scorecard.php">Scorecard</a></li>
                                    <li><a href="./golf/twisted-earth-grill.php">Twisted Earth Grill</a></li>
                                </ul>
                            </li>
                            <li><a href="./hotel" <?php  if (preg_match("/\bhotel\b/", $url)  ) { echo "id=\"selected\"";  }?> >hotel</a><ul>
                                    <li><a href="./hotel">Overview</a></li>
                                    <li><a href="./hotel/banquets.php">Banquets</a></li>
                                    <li><a href="./hotel/conferences.php">Conferences</a></li>
                                    <li><a href="https://www.myfidelio.net/webui/AvailabilitySearch.aspx?chain=IQ&#38;property=USCD" target="_blank" >Reservations</a></li>
                                    <li><a href="./hotel/sunrise-tour.php">Sunrise Room Tour</a></li>
                                    <li><a href="./hotel/sunset-tour.php">Sunset Room Tour</a></li>
                                </ul>
                            </li>
                            <li><a href="./spa" <?php  if (preg_match("/\bspa\b/", $url)  ) { echo "id=\"selected\"";  }?> >spa</a><ul>
                                    <li><a href="./spa">Overview</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="right_nav_links">
                        <ul >
                            <li><a href="./restaurants" <?php  if (preg_match("/\brestaurants\b/", $url)  ) { echo "id=\"selected\"";  }?>>restaurants</a><ul>
                                    <li><a href="./restaurants">Overview</a></li>
                                    <li><a href="./restaurants/banquets.php">Banquets</a></li>
                                    <li><a href="./restaurants/bar-welukws.php" >Bar Welukws</a></li>
                                    <li><a href="./restaurants/food-court.php">Food Court</a></li>
                                    <li><a href="./restaurants/high-mt-grill.php">High Mt. Grill</a></li>
                                    <li><a href="./restaurants/high-mt-buffet.php">High Mt. Buffet</a></li>
                                    <li><a href="./restaurants/gathering-place.php">Hn'ya'(pqi'n'n </a></li>
                                    <li><a href="./restaurants/nighthawk-lounge.php">Nighthawk Lounge</a></li>
                                    <li><a href="./restaurants/sweetgrass-cafe.php">Sweetgrass Café</a></li>
                                    <li><a href="./restaurants/steakhouse.php">Ts'elusm</a></li>
                                    <li><a href="./restaurants/twisted-earth-grill.php">Twisted Earth Grill</a></li>
                                </ul>
                            </li>
                            <li><a href="./commerce.php">reservations</a></li>
                            <li><a href="./commerce.php" <?php  if (preg_match("/\bcommerce\b/", $url)  ) { echo "id=\"selected\"";  }?>>store</a></li>
                            <li><a href="./directions" <?php  if (preg_match("/\bdirections\b/", $url)  ) { echo "id=\"selected\"";  }?>>directions</a><ul>
                                    <li><a href="./directions">By Car</a></li>
                                    <li><a href="http://www.idahocitylink.com/" target="_blank">By Local Transit</a></li>
                                    <li><a href="./directions/by-shuttle.php">By Shuttle</a></li>
                                    <li><a href="http://www.spokaneairports.net/" target="_blank">By Plane</a></li>
                                    <li><a href="http://www.amtrak.com/servlet/ContentServer?pagename=Amtrak/HomePage" target="_blank">By Train</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div><!-- navigation-->
                <div id="cda_logo"><a href="./" title="Coeur d'Alene Casino Homepage">
                        <img src="./images/header/cdalogo2.png" alt="Coeur d'Alene Casino Homepage" onmouseover="this.src='./images/header/cdalogohover.png'" onmouseout="this.src='./images/header/cdalogo2.png'"/></a>
                </div>


            </div> <!-- header-->
            <div class="clear"></div>

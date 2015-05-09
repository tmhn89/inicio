<?php include 'elements/session.php'; ?>
<?php include 'elements/head.html'; ?>
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>
    <?php
        if(isset($_SESSION['login']) && isset($_SESSION['supervisor'])) {
            include 'elements/header_sup.html';
        } else {
            header("Location: index"); 
        }
    ?>
<!--start-->
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">Our Portfolio</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">Treasures of Team Inicio in BizDevLab2015 course</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->

<!--start section-->

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>        
        <div class="grid grid_6">
            <h2 class="subtitle greydark">OUR STORY</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space40"></div>
            <a href="http://www.youtube.com/embed/E4LULoaqxUE" class="open-popup-link" style="outline: none">
                <img src="img/play.png" style="height: 220px; width: 500px; border-radius: 5px;"/>
            </a>                
        </div>
        <div class="grid grid_6">
            <h2 class="subtitle greydark">LESSON LEARNED</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space40"></div>
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <p style="margin-bottom: 10px;">Inicio is a non-profit organisation that provides children with practical, hands-on experiences that help them explore their interests, discover their passion, and find the right high school program. </p>
                <p style="margin-bottom: 10px;">We offer a two year program where students attend engaging workshops corresponding to the 18 high school programs, tour companies to see their daily activities, and get in touch with professionals working in the industry.</p>
                <!--p><a href="pages.html" class="nicdark_mpopup_ajax">The only thing we need is your curiosity.</a></p-->            
                <p><a href="#pages" class="nicdark_mpopup_window">The only thing we need is your curiosity.</a></p>
            </div>
            <div id="pages" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide" style="width: 0; margin: 0 auto;">
                <div class="nicdark_margin20">
                    <div class="nicdark_space20"></div>        
                    <div class="flipbook-viewport">
                        <div class="container">
                            <div class="flipbook">
                                <div class="page" style="background-image:url(img/ll/Slide1.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide2.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide3.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide4.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide5.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide6.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide7.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide8.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide9.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide10.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide11.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide12.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide13.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide14.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide15.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide16.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide17.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide18.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide19.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide20.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide21.png)"></div>
                                <div class="double" style="background-image:url(img/ll/Slide1.png)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nicdark_space40"></div>        
        <div class="grid grid_12">
            <h2 class="subtitle greydark">CANVASES & DIAGRAMS</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_5">
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <div class="nicdark_mpopup_gallery">
                    <div class="nicdark_margin100 size100" style="border: 1px solid #EE9393">
                        <a href="img/portfolio/bc1.png" title="First Iteration"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/bc1.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100" style="border: 1px solid #EE9393">
                        <a href="img/portfolio/bc2.png" title="Second Iteration"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/bc2.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100" style="border: 1px solid #EE9393">
                        <a href="img/portfolio/bc3.png" title="Thrid Iteration"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/bc3.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>                                                
                </div>
                <h4 class="center greydark">Business Model Canvases</h4>
            </div>  
        </div>
        <div class="grid grid_7">
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <div class="nicdark_mpopup_gallery">
                    <!--div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d1.png" title="Evaluation matrix"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d1.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div-->
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d2.png" title="Value Proposition Diagram"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d2.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d3.png" title="Archetype Diagram: School"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d3.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d4.png" title="Archetype Diagram: Businesss"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d4.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>  
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d5.png" title="Channel Diagram"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d5.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/d6.png" title="Get/Keep/Grow Diagram"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/d6.png" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <h4 class="center greydark">Diagrams</h4>
            </div>
        </div>

        <div class="nicdark_space40"></div>
        <div class="grid grid_8">
            <h2 class="subtitle greydark">OUR ACTIVITIES IN PICTURES</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_4">
            <h2 class="subtitle greydark">AND VIDEOS</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>             
        <div class="grid grid_8">         
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <div class="nicdark_mpopup_gallery">
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img1.jpg" title="First meeting - idea brainstorming"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img1.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img2.jpg" title="First meeting - idea brainstorming"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img2.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img3.jpg" title="We think of a project helping the kids with education information"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img3.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img4.jpg" title="Drawing first business model canvas"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img4.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img5.jpg" title="Try to concrete the business idea"><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img5.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/portfolio/img6.jpg" title="And here it is..."><img alt="" class="nicdark_radius nicdark_opacity" src="img/portfolio/img6.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>                
                </div>
            </div>
        </div>        
        <div class="grid grid_4">
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <div class="nicdark_mpopup_gallery">            
                    <div class="nicdark_margin100 size100">
                        <a href="https://www.youtube.com/watch?v=E4LULoaqxUE" class="mfp-iframe" style="outline: none;" title="Our short introduction">
                            <img src="img/play.png" style="margin-left: -62px; height: 100px; " class="nicdark_radius nicdark_opacity"/>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img2.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img2.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>                    
                </div>
            </div>
        </div>

        <div class="nicdark_space40"></div>        
        <div class="grid grid_12">
            <h2 class="subtitle greydark">PEOPLE WE MET</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_12">
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <div class="nicdark_mpopup_gallery">
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img1.jpg" title=""><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img1.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img2.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img2.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img3.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img3.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img4.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img4.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img5.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img5.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="nicdark_margin100 size100">
                        <a href="img/footer/img6.jpg" title="IMAGE EXAMPLE"><img alt="" class="nicdark_radius nicdark_opacity" src="img/footer/img6.jpg" style="height: 100px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>

        <div class="nicdark_space40"></div>        
        <div class="grid grid_12">
            <h2 class="subtitle greydark">LINKS & REFERENCES</h2>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_12">
            <div class="nicdark_bg_grey nicdark_radius nicdark_shadow nicdark_clearfix" style="padding: 20px">            
                <!-- <a href="http://scb.se/en_/Finding-statistics/Statistics-by-subject-area/Education-and-research/Education-of-the-population/Youths-without-completed-upper-secondary-school-education/Aktuell-pong/2007A01/Reasons-for-study-drop-out/" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Reason for study drop out</a>
                <a href="http://skl.se/skolakulturfritid/skolaforskola/sklssatsningarutvecklaskolan/pluginfarregymnasieavhopp.2132.html" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Percentage of students that finish high school </a>
                <a href="http://www.skolverket.se/om-skolverket/andra-sprak-och-lattlast/in-english/the-swedish-education-system/upper-secondary-school/about" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Information about the 18 upper secondary school programs</a>
                <a href="https://sweden.se/society/education-in-sweden/" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Education in Sweden</a>
                <a href="http://www.government.se/sb/d/10485" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Information about changes to upper secondary school and the requirements</a>
                <a href="http://books.google.com/books/about/Managing_the_Nonprofit_Organization.html?id=69f6ZdmAdz8C" class="nicdark_press nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Peter Drucker: Managing the Nonprofit Organization</a> -->
                <ul class="nicdark_list border">
                    <li class="nicdark_border_grey">
                        <p>Reason for study drop out <a href="http://scb.se/en_/Finding-statistics/Statistics-by-subject-area/Education-and-research/Education-of-the-population/Youths-without-completed-upper-secondary-school-education/Aktuell-pong/2007A01/Reasons-for-study-drop-out/" class="nicdark_press nicdark_btn nicdark_bg_bluedark extrasmall nicdark_radius nicdark_shadow white right">Link</a></p> 
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Percentage of students that finish high school <a href="http://skl.se/skolakulturfritid/skolaforskola/sklssatsningarutvecklaskolan/pluginfarregymnasieavhopp.2132.html" class="nicdark_press nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Link</a></p> 
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Information about the 18 upper secondary school programs <a href="http://www.skolverket.se/om-skolverket/andra-sprak-och-lattlast/in-english/the-swedish-education-system/upper-secondary-school/about" class="nicdark_press nicdark_btn nicdark_bg_bluedark extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>   
                        <div class="nicdark_space15"></div>
                    </li>
                        
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Education in Sweden <a href="https://sweden.se/society/education-in-sweden/" class="nicdark_press nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>   
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Information about changes to upper secondary school and the requirements <a href="http://www.government.se/sb/d/10485" class="nicdark_press nicdark_btn nicdark_bg_bluedark extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>                            
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Peter Drucker: Managing the Nonprofit Organization <a href="#" class="nicdark_btn nicdark_bg_green extrasmall nicdark_radius nicdark_shadow white right">Book</a></p>    
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>World Development Indicators - Sweden <a href="http://data.worldbank.org/country/sweden" class="nicdark_btn nicdark_bg_bluedark extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>    
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Education, Work, Guidance in Sweden <a href="http://www.dokumaten.se/Pubs/0d838e84-fe4e-4a20-b8de-5ea851f7fbd3/education-work-guidance-in-sweden.pdf" class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>    
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Creating a Classroom Makerspace <a href="http://ehm.sagepub.com/content/93/1/25.full.pdf+html" class="nicdark_btn nicdark_bg_bluedark extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>    
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>Ten Nonprofit Funding Models <a href="http://www.ssireview.org/articles/entry/ten_nonprofit_funding_models" class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Link</a></p>    
                    </li>
                        
                </ul>
            </div>
        </div>

        <div class="nicdark_space40"></div>

    </div>

</section>    
<!--end-->
<?php include 'elements/footer.html';?>
</div>
    </div>

    <!--main-->
    <script src="js/main/jquery.min.js"></script> <!--Jquery-->
    <script src="js/main/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/main/excanvas.js"></script> <!--canvas need for ie-->

    <!--plugins-->
    <script src="js/plugins/revslider/jquery.themepunch.tools.min.js"></script> <!--revslider-->
    <script src="js/plugins/revslider/jquery.themepunch.revolution.min.js"></script> <!--revslider-->

    <!--menu-->
    <script src="js/plugins/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/plugins/menu/tinynav.min.js"></script> <!--tinynav-->

    <!--other-->
    <script src="js/plugins/isotope/isotope.pkgd.min.js"></script> <!--isotope-->
    <script src="js/plugins/mpopup/jquery.magnific-popup.min.js"></script> <!--mpopup-->
    <script src="js/plugins/scroolto/scroolto.js"></script> <!--Scrool To-->
    <script src="js/plugins/nicescrool/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/plugins/inview/jquery.inview.min.js"></script> <!--inview-->
    <script src="js/plugins/parallax/jquery.parallax-1.1.3.js"></script> <!--parallax-->
    <script src="js/plugins/countto/jquery.countTo.js"></script> <!--jquery.countTo-->
    <script src="js/plugins/countdown/jquery.countdown.js"></script> <!--countdown-->
    
    <!--settings-->
    <script src="js/settings.js"></script> <!--settings-->
<!--custom js-->
<script type="text/javascript">
	jQuery(document).ready(function() {

		//START SLIDE
		jQuery('.nicdark_slide1').show().revolution(
		{
			dottedOverlay:"none",
			delay:16000,
			startwidth:1170,
			startheight:500,
			hideThumbs:200,
			
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"preview2",
			
			touchenabled:"on",
			onHoverStop:"on",
			
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,
									
			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
									
			keyboardNavigation:"off",
			
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,
					
			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner4",
			
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",
			
			autoHeight:"off",						
			forceFullWidth:"off",						
									
			hideTimerBar: "on",					
									
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,						
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath:"rs-plugin/videojs/",
			fullScreenOffsetContainer: ""	
		});
		//END SLIDE
		
		

		//START PARALLAX SECTIONS
		$('#nicdark_parallax_big_image').parallax("50%", 0.3);
		$('#nicdark_parallax_2_btns').parallax("50%", 0.3);
		$('#nicdark_parallax_countdown').parallax("50%", 0.3);
		$('#nicdark_parallax_counter').parallax("50%", 0.3);
		//END PARALLAX SECTIONS

		

		//START COUNTDOWN GRID SECTION
		//variables
		var endDate = "May 12, 2015 15:00:00";
		var grid = "grid_3";
		//insert the class nicdark_displaynone in the var if you wnat to hide the visualization
		var display_years = "nicdark_displaynone";
		var display_days = "";
		var display_hours = "";
		var display_minutes = "";
		var display_seconds = "";
		//call
		$(".nicdark_countdown").countdown({
		  date: endDate,
		  render: function(data) {
		    $(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
		  }
		});
		//END COUNTDOWN GRID SECTION

        $('.my-calendar').datepicker({inline: true});

        $('.ui-datepicker-calendar a.ui-state-default:contains("12")').addClass('date-workshop-phys').attr('title', 'Workshop: Artbots making');
        $('.ui-datepicker-calendar a.ui-state-default:contains("18")').addClass('date-workshop-tech').attr('title', 'Workshop: Kids Hack Day');

        $('.ui-datepicker-calendar a.ui-state-default:contains("13")').addClass('date-event').attr('title', 'Event: Do this at that place');
        $('.ui-datepicker-calendar a.ui-state-default:contains("25")').addClass('date-event').attr('title', 'Event: Do another thing at another place');
        $('.ui-datepicker-calendar a.ui-state-default:contains("31")').addClass('date-event').attr('title', 'Event: Do this at that place the second time');

        <?php 
            if(isset($_SESSION['join'])) {
        ?>
            $('.ui-datepicker-calendar a.ui-state-default:contains("30")').addClass('date-workshop-tech').attr('title', 'Workshop: Programming is fun');
        <?php        
            }
        ?>

	});
</script>
<script type="text/javascript" src="js/plugins/turnjs/modernizr.2.5.3.min.js"></script>
<script type="text/javascript">

    $('.open-popup-link').magnificPopup({
        markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
          '</div>',
        type: 'iframe',
        iframe: {
        patterns: {
            youtube: {
                  index: 'youtube.com',
                  src: 'http://www.youtube.com/embed/E4LULoaqxUE?autoplay=1' // URL that will be set as a source for iframe. 
                },
            }   
        }
    });

    function loadApp() {

        $('.mfp-close').remove();

        var flipbook = $('.flipbook');

        // Check if the CSS was already loaded
        
        if (flipbook.width()==0 || flipbook.height()==0) {
            setTimeout(loadApp, 10);
            return;
        }

        $('.flipbook .double').scissor();

        // Create the flipbook

        $('.flipbook').turn({
                // Elevation

                elevation: 50,
                
                // Enable gradients

                gradients: true,
                
                // Auto center this flipbook

                autoCenter: true,                

        }).addClass('mfp-image-holder').append('<button title="Close (Esc)" type="button" class="mfp-close" style="top: -44px">×</button>');

        //$('.mfp-bg.mfp-ready').attr('style', 'pointer-events: none'); 
        //$('.page-wrapper').attr('style','z-index: 2000!important');
    }

// Load the HTML4 version if there's not CSS transform

yepnope({
    test : Modernizr.csstransforms,
    yep: ['js/plugins/turnjs/turn.min.js'],
    nope: ['js/plugins/turnjs/turn.html4.min.js'],
    both: ['js/plugins/turnjs/scissor.min.js', 'css/double-page.css'],
    complete: loadApp
});
</script>
<!--custom js-->

</body>  
</html>
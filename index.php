<?php include 'elements/session.php'; ?>
<?php include 'elements/head.html'; ?>
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>
    <?php
        if(isset($_SESSION['login'])) {
            include 'elements/header_user.html';   
        } else {
            include 'elements/header.html';   
        }
    ?>
<!--start-->
<!--start section-->
<section class="nicdark_section">

    <div class="tp-banner-container">
        <div class="nicdark_slide1" >
            
            <ul>                                
                <!--start first-->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                    <img src="img/slide/slide1.jpg"  alt="" data-lazyload="img/slide/slide1.jpg" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
                <!--end first-->


                <!--start second-->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="img/slide/slide2.jpg"  alt="" data-lazyload="img/slide/slide2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
                <!--end second-->

            </ul>
            
        </div>
    </div>

</section>
<!--end section-->
<!--start section-->

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">ABOUT US</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_12">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow" style="padding: 20px">
                <p style="margin-bottom: 10px;">Inicio is a non-profit organisation that provides children with practical, hands-on experiences that help them explore their interests, discover their passion, and find the right high school program. We offer a two year program where students attend engaging workshops corresponding to the 18 high school programs, tour companies to see their daily activities, and get in touch with professionals working in the industry.</p>
                <p>The only thing we need is your curiosity.</p>
            </div>  
        </div>
        <div class="nicdark_space10"></div>
        
        <?php include 'elements/about.html'; ?>

    </div>
    <!--end nicdark_container-->
     
</section>
<!--end section-->
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <div class="grid grid_2">
        </div>

        <div class="grid grid_8">
            <div class="nicdark_textevidence nicdark_bg_green nicdark_shadow nicdark_radius"  style="text-align: center">
                <div class="nicdark_margin20">
                    <h3 class="white">2 YEAR PROGRAM</h3>
               </div>           
            </div>            

            <div class="grid grid_4" style="margin-left: 0;">
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center" style="padding: 20px 0;">
                    <h3>Year 1</h3>
                    <div class="nicdark_space20"></div>
                    <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_red small nicdark_shadow nicdark_radius white">Workshops</a>
                    <div class="nicdark_space20"></div>
                    <p>18 workshops corresponding</p>
                    <p>all available highschool programs</p>
                </div>
            </div>

            <div class="grid grid_4" style="margin-right: 0;">
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center" style="padding: 20px 0;">
                    <h3>Year 2</h3>
                    <div class="nicdark_space20"></div>
                    <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white">Company Tours</a>
                    <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white">Personal Mentors</a>
                    <div class="nicdark_space20"></div>
                    <p>18 company visits to see their daily activities</p>
                    <p>Personal mentors fitted for your needs</p>
                </div>
            </div>
            <div class="nicdark_space10"></div>

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center" style="padding: 20px 0;">
                <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white">Industry Contacts</a>
                <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">Extracurricular Events</a>
                <a href="" class="nicdark_zoom nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white">Activity Tracking</a>
                <div class="nicdark_space20"></div>
                <p>Industry contacts gathered from your visits</p>
                <p>After school events to inspire your passions</p>
                <p>Keep track of your 2 year progress</p>
            </div>

        </div>        

        <div class="grid grid_2">
        </div>              

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR TEAM</h1>
            <div class="nicdark_space20"></div>            
            <div class="nicdark_divider left big"><span class="nicdark_bg_violet nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="team">
            <?php include 'elements/team.html'; ?>
        </div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">CONTACT US</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_12"></div>

        <?php include 'elements/contact.html'; ?>


        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->
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

    });
</script>
<!--custom js-->

</body>  
</html>
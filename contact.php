<?php include 'elements/head.html'; ?> 
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>
    <?php include 'elements/session.php'; ?> 

<!--start-->
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">INICIO</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">TOWARD YOUR DREAMS</h3>
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


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR TEAM</h1>
            <div class="nicdark_space20"></div>            
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <?php include 'elements/team.html'; ?>

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

<div class="nicdark_space3 nicdark_bg_gradient"></div>
<?php include 'elements/footer.html'; ?>
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


        //START PARALLAX SECTIONS
        $('#nicdark_parallax_title').parallax("50%", 0.3);
        //END PARALLAX SECTIONS


    });
</script>
<!--custom js-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>


</body>  
</html>
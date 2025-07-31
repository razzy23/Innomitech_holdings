<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Innomi Solar</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    <?php include 'header.php' ?>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading solar-header" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Innomi Solar</h2>
                        <span>Clean Power. Clear Future.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-heading">
                    <h2>Harness the Sun. Power the Future.</h2>
                    <span>We’re working on something exciting!<br/><br/>Our Solar PV Systems will soon bring smart, sustainable energy solutions right to your driveway, rooftop, or business.
                        <br/>Whether you're looking to power your home, reduce your carbon footprint, or integrate solar into your vehicles and projects, we're engineering a solution that meets the highest standards of performance, efficiency, and reliability.
                    </span>
                    <br/><br/>
                    <h7>Coming Soon.</h7>
                    <ul style="list-style-type: circle;">
                        <li><span>Residential & commercial solar solutions</span></li>
                        <li><span>High-efficiency PV panels</span></li>
                        <li><span>Battery storage integration</span></li>
                        <li><span>EV-compatible solar options</span></li>
                    </ul>
                    <div class="main-border-button">
                        <a href="products.html">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script src="assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        fetch('footer.html')
       .then(response => response.text())
       .then(data => {
         document.getElementById('footer-placeholder').innerHTML = data;
       });

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>

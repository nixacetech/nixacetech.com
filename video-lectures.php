<?php
$title = 'Nixace Technologies | About';

$keywords='';

$description='';
?>

<?php include 'include/header.php'; ?>
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css" />
 	<header id="head" class="secondary">
            <div class="container">
                    <h1>Video Lectures</h1>
                    <p></p>
                </div>
    </header>

    <?php include 'include/form.php'; ?>
    <!-- container -->
    <section class="container wrapper">
        <div class="row">
            <!-- main content -->
            <section class="container">
                <h3>What is special about our Videos?</h3>
                <p>
                    <ul>
                        <li>The length of our single video is not more than 20mins. This has been planned keeping in mind that the attention span which a individual can focus without any distraction is 20mins</li>
                        <li>Our videos are in sync with the study material that we have provided.</li>
                        <li>Covers basics that are required from IPCC</li>
                    </ul>
                </p>               
                <h3>Our videos are structured in following manner</h3>
                <p>
                    <ul>
                        <li>Video on concept explanation</li>
                        <li>Video on example from institute notes</li>
                        <li>Problems are solved from each module, and special care is taken to ensure that different problems are solved.</li>
                    </ul>
                </p>
                <h3>Demo Video</h3>
                <div class="row" id="video_slider">
                    <div class="box">                            
                        <a class="fancybox fancybox-media fancybox.iframe" href="https://www.youtube.com/embed/KDUnAcZlETk?autoplay=1&rel=0">       
                         <img src="assets/images/video1.jpg" alt=""> 
                          <h3 class="text-center">Theory of Futures & Forwards</h3>   
                        </a>                    
                     </div>
                     <div class="box">                            
                        <a class="fancybox fancybox-media fancybox.iframe" href="https://www.youtube.com/embed/VtvgvDnxkto?autoplay=1&rel=0">       
                         <img src="assets/images/v2.jpg" alt="">  
                          <h3 class="text-center">Dividend Discount Methodology Gordon Growth Model Theory</h3>  
                        </a>                    
                     </div>
                     <div class="box">                            
                        <a class="fancybox fancybox-media fancybox.iframe" href="https://www.youtube.com/embed/4Wruyo4Au-Y?autoplay=1&rel=0">
                         <img src="assets/images/v3.jpg" alt="">   
                          <h3 class="text-center">Time Value of Money</h3> 
                        </a>                    
                     </div>               
                </div>
            </section>      
        </div>
    </section>
  
  <?php include 'include/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <script>
    jQuery('#video_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: 1,
  responsive: [   
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
});
  </script>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
      name="description"
      content="VVWORX - Your Voice in the Future of Marketing" >
    <title> VVWORX - Your Voice in the Future of Marketing </title>
    <link rel="icon" href="assets/img/favicon-32x32.png" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="assets/custom/style.css" rel="stylesheet">
    <link href="assets/custom/responsive.css" rel="stylesheet">
    <style>
      /* video */
      #animatedSentence {
      opacity: 0;
      }
      .fade-up-in {
      animation: fadeUpIn 1.8s forwards;
      }
      .fade-up-out {
      animation: fadeUpOut 1.8s forwards;
      }
      @keyframes fadeUpIn {
      0% {
      opacity: 0;
      transform: translateY(40px);
      }
      100% {
      opacity: 1;
      transform: translateY(0);
      }
      }
      @keyframes fadeUpOut {
      0% {
      opacity: 1;
      transform: translateY(0);
      }
      100% {
      opacity: 0;
      transform: translateY(-40px);
      }
      }
      /* Replace these fade-up-* classes */
      .fade-up-in-img {
      animation: blurIn 1.8s ease-in-out forwards;
      }
      .fade-up-out-img {
      animation: blurOut 1.8s ease-in-out forwards;
      }
      @keyframes blurIn {
      0% {
      filter: blur(6px);
      opacity: 0;
      }
      100% {
      filter: blur(0);
      opacity: 1;
      }
      }
      @keyframes blurOut {
      0% {
      filter: blur(0);
      opacity: 1;
      }
      100% {
      filter: blur(5px);
      opacity: 0;
      }
      }
      @keyframes zoomInImg {
      0% {
      opacity: 0;
      transform: scale(0.8);
      }
      100% {
      opacity: 1;
      transform: scale(1);
      }
      }
      @keyframes zoomOutImg {
      0% {
      opacity: 1;
      transform: scale(1);
      }
      100% {
      opacity: 0;
      transform: scale(1.1);
      }
      }
      .service-wrapper { 
      opacity: 0.4;
      filter: blur(5px);
      transform: scale(0.92) translateY(20px);
      transition: all 0.6s ease-in-out;
      pointer-events: none;
      z-index: 1;
      }
      .service-wrapper.active {
      opacity: 1;
      filter: blur(0);
      transform: scale(1) translateY(0);
      pointer-events: auto;
      z-index: 10;
      } 
      
      /* video  */
      .scale-animate {
      transform: scale(0.6);
      opacity: 0;
      transition: transform 2s ease, opacity 1s ease;
      }
      .scale-animate.active {
      transform: scale(1);
      opacity: 1;
      }
      /* main banner */
   
      /* Fixed content inside sticky section */
      .section-content {
      position: absolute;
      top: 20%;
      left: 0;
      width: 100%;
      height: 100vh; 
      pointer-events: none;
      }
      video {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      object-fit: cover;
      z-index: -1;
      } 
 
    </style>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <section id="overview" class="section ">
      <video autoplay muted loop playsinline>
        <source src="assets/img/bg-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="video-overlay-content section-content  align-items-center">
        <div class="row" style="margin:0;">
          <div class="col-md-7">
            <h5 class="caption-head1">
              We are  
            </h5>
            <div class="gradient-text caption-sentence"  > 360° Degree</div>
          </div>
          <div class="col-md-5 position-relative">
            <div class="banner-wrapper   image1">  
              <img src="assets/img/banner1.png" class="banner-img img-fluid" alt="banner 1" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="vision" class="bg-vision d-flex justify-content-center align-items-center ">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-12">
            <div >
              <h5 class="vision-title" >
                Your Voice in the <br> Future of Marketing.
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="py-4">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-12 d-flex justify-content-center align-items-center">
            <div>
              <h5 class="service-title">
                Our Services
              </h5>
            </div>
          </div>
        </div>
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/strategy.jpeg" class="services-img img-fluid" alt="services11">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
                Strategy
              </h4>
              <p class="service-desc">
               We translate your aspirations into a precise and actionable blueprint for achieving your goals.
              </p>
              <div> 
        <span class="service-tags"> Brand Strategy </span>
        <span class="service-tags"> Brand Voice </span>
        <span class="service-tags"> GTM Strategy </span>
        <span class="service-tags"> Campaign Strategy </span>
        <span class="service-tags"> PR Strategy </span>
        <span class="service-tags"> Social Media Strategy </span>
              </div>
             </div>
          </div>
        </div>
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/brand.jpg" class="services-img img-fluid" alt="services12">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
               Branding & Design
              </h4>
              <p class="service-desc">
                We transform your vision into a tangible and impactful brand experience.
              </p>
              <div> 
          <span class="service-tags"> Brand Identity Design </span>
          <span class="service-tags"> Office Branding </span>
          <span class="service-tags"> Event Branding </span>
          <span class="service-tags"> Print & Digital Creatives </span>
          <span class="service-tags"> Website Design </span>
          <span class="service-tags"> UI/UX Design </span>
              </div>
             </div>
          </div>
        </div>
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/content.jpeg" class="services-img img-fluid" alt="services13">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
                Content & Production
              </h4>
              <p class="service-desc">
                We bring your story to life, crafting impactful content experiences that resonate.
              </p>
              <div> 

            <span class="service-tags"> Influencer Marketing </span>
           <span class="service-tags">  Conceptualization of Content </span>
           <span class="service-tags">  High Quality Video Shoot & Production </span>
           <span class="service-tags">  Reel Production </span>
           <span class="service-tags">  Motion Graphics </span>
           <span class="service-tags">  Creative Copywriting </span>
           <span class="service-tags">  Blogs / Articles </span>
              </div>
             </div>
          </div>
        </div>

        
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/digital.jpeg" class="services-img img-fluid" alt="services14">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
               Digital Marketing
              </h4>
              <p class="service-desc">
               We convert digital footprints into tangible results, connecting you with your audience and driving results.
              </p>
              <div>  

<span class="service-tags"> Growth Marketing (Push & Pull Mediums) </span>
<span class="service-tags"> Social Media Management Packages </span>
<span class="service-tags"> SEO Optimization & Ranking </span>
              </div>
             </div>
          </div>
        </div>

        
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/vua.jpeg" class="services-img img-fluid" alt="services13">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
                Agent Vua
              </h4>
              <p class="service-desc">
               AI Powered Calling Agent for all your Pre-Sales / Post-Sales & Customer Support Requirements

              </p>
              <div>                 
                <span class="service-tags"> AI Powered, Human like conversations </span>
                <span class="service-tags">  Real time objection handling </span>
                <span class="service-tags">  CRM Integrated </span>
                <span class="service-tags">  Available 24*7 </span>
              </div>
             </div>
          </div>
        </div>

        
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/vision.png" class="services-img img-fluid" alt="services13">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
                Agent Vision
              </h4>
              <p class="service-desc">
              
Fast, Affordable, Production Quality Films - Generated by AI
              </p>
              <div> 
  <span class="service-tags"> Project Walkthroughs </span>
 <span class="service-tags">  Launch Videos </span>
 <span class="service-tags">  Reel / Content Generation </span>
 <span class="service-tags">  Production & Films </span>
              </div>
             </div>
          </div>
        </div>

        
        <div class="service-wrapper">
          <div class="row no-gutters ">
            <div class="col-md-5">                    
              <img src="assets/img/xr.jpeg" class="services-img img-fluid" alt="services13">
            </div>
            <div class="col-md-7">
              <h4 class="service-head">
                Agent XR
              </h4>
              <p class="service-desc">
               Don't leave it to their Imagination, Immerse them in the Experience

              </p>
              <div>  
 <span class="service-tags">  Virtual Reality </span>
<span class="service-tags">   Digital Twins </span>
<span class="service-tags">   Mixed Reality </span>
<span class="service-tags">   Realistic Renderings </span>
              </div>
             </div>
          </div>
        </div>


      </div>
    </section>
    <section id="about" class="vh-100 d-flex align-items-center">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="about-title" data-aos="fade-right"   data-aos-delay="300" 
              data-aos-duration="1000"
              data-aos-easing="ease-in-out">
              Our <br> Foundation
              <img src="assets/img/about-after.png" class="about-after-img spin-ring" alt="about1"> 
            </div>
          </div>
          <div class="col-md-6 ">
            <ul class="about-list">
              <li 
                data-aos="fade-up" 
                data-aos-delay="300" 
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <span class="list-head gradient-text"> Creativity </span>
                <span class="list-desc gradient-text"> Creativity that inspires </span>
              </li>
              <li 
                data-aos="fade-up" 
                data-aos-delay="300" 
                data-aos-duration="1200"
                data-aos-easing="ease-in-out">
                <span class="list-head gradient-text"> Innovation </span>
                <span class="list-desc gradient-text">  Technology that keeps You ahead </span>
              </li>
              <li 
                data-aos="fade-up" 
                data-aos-delay="300" 
                data-aos-duration="1400"
                data-aos-easing="ease-in-out">
                <span class="list-head gradient-text"> Strategic Thinking  </span>
                <span class="list-desc gradient-text">  Strategy that always makes you Win </span>
              </li>
              <li 
                data-aos="fade-up" 
                data-aos-delay="300" 
                data-aos-duration="1500"
                data-aos-easing="ease-in-out">
                <span class="list-head gradient-text">  Customer Centricity  </span>
                <span class="list-desc gradient-text">  Everything is about "You" </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div> 
    </section> 
    <?php include("includes/footer.php"); ?>
    <script src="assets/custom/jquery.js" ></script>
    <script src="assets/js/bootstrap.bundle.min.js" ></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" ></script>
    <script src="assets/custom/app.js" ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        AOS.init();
      });
    </script>
    <script>
      $(window).on('load', function () { 
      
        $('#loader-overlay').delay(500).fadeOut('slow');
      });
    </script>
    <script>
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
      })
    </script>
    <script>
      const video = document.getElementById('video');
      const overlay = document.getElementById('videoOverlay');
      
      overlay.addEventListener('click', function() {
        overlay.style.display = 'none';
        video.play();
      });
    </script>  
    <script>
      document.addEventListener("DOMContentLoaded", () => {
      const wrappers = document.querySelectorAll(".service-wrapper");
      
      function updateActiveWrapper() {
      const windowCenter = window.innerHeight / 2 + window.scrollY;
      
      let closestEl = null;
      let closestDistance = Infinity;
      
      wrappers.forEach((el) => {
       const rect = el.getBoundingClientRect();
       const elCenter = rect.top + window.scrollY + rect.height / 2;
       const distance = Math.abs(windowCenter - elCenter);
      
       if (distance < closestDistance) {
         closestDistance = distance;
         closestEl = el;
       }
      });
      
      wrappers.forEach((el) =>
       el.classList.toggle("active", el === closestEl)
      );
      }
      
      window.addEventListener("scroll", updateActiveWrapper);
      window.addEventListener("resize", updateActiveWrapper);
      updateActiveWrapper();
      });
    </script>
    <script>
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
          } else {
            entry.target.classList.remove('active'); // optional: remove if you want reverse on scroll out
          }
        });
      }, { threshold: 0.2 });
      
      document.querySelectorAll('.scale-animate').forEach(el => observer.observe(el));
    </script>
    <!-- banner section --> 


  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
      name="description"
      content="Contact" >
    <title> Contact | VVWORX </title>
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
      .form-control {
      border: none;
      border-bottom: 1px solid #ccc;
      border-radius: 0;
      box-shadow: none;
      padding-left: 0;
      background: #eef0ff;
      }
      .form-control:focus {
      border-bottom: 2px solid #6210ff;
      box-shadow: none;
      }
      ::placeholder {
      color: #aaa;
      opacity: 1;
      }
       .form-tags.active {
    background-color: #6210ff;
    color: white;
  }
    </style>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <div id="contact-page" ></div>
    <section class="bg-contact-page ">
      <div class="container  vh-100 d-flex align-items-center">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div>
            <h5 class="contact-title">
              Reach Us
            </h5>            
            <p class="contact-desc pb-3">
              At Voix & Vision Worx, we are dedicated to transforming your aspirations into tangible achievements. We partner with businesses to navigate complex challenges and unlock new possibilities, leveraging our expertise to deliver innovative and impactful solutions. Our commitment is to your success, helping you connect, engage, and grow in an ever-evolving landscape. Contact us today to explore how our collaborative approach can help achieve your strategic goals.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <h5 class="contact-head"> I am interested in  </h5>
          <div>
            <span class="service-tags form-tags"> Strategy </span>
            <span class="service-tags form-tags"> Branding & Design </span>
            <span class="service-tags form-tags"> Content & Production </span>
            <span class="service-tags form-tags"> Digital Marketing </span>
            <span class="service-tags form-tags"> Agent Vua</span>
            <span class="service-tags form-tags"> Agent Vision</span>
            <span class="service-tags form-tags"> Agent XR</span> 
          </div>
        </div>
        <div class="col-md-6">
          <form class="py-2" method="POST" action="sendmail.php">
  <div class="mb-3">
    <input type="hidden" class="form-control" placeholder="Services" name="services[]" id="services-input" required>
  </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Full Name" name="name" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email ID" name="email_address" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Company Name" name="company">
            </div>
            <div class="mb-3">
              <input type="tel" class="form-control" placeholder="Phone" name="phone" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" placeholder="Message" rows="2" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-main">Submit <img src="assets/img/arrow-right.svg" ></button>
          </form>
        </div>
      </div>
      </div>
      <div class="container  py-5">
      <div class="row no-gutters">
        <div class="col-md-12 ">
          <div class="py-5">
            <h5 class="contact-title">
              our presence
            </h5>
          </div>
          <img src="assets/img/map.png" class="map-img img-fluid" alt="map"/>
        </div>
      </div>
      </div>
      <div class="container py-5 align-items-center">
        <div class="row no-gutters">
          <div class="col-md-12">
            <h5 class="contact-title pt-5">
              Looking for VUA filling
            </h5>
            <p class="text-copening"> Current Opening </p>
            <div class="text-center">
          <span class="service-tags"> Brand Manager </span>
         <span class="service-tags">  UI Designer </span>
         <span class="service-tags">  Marketing Intern </span>
         <span class="service-tags">  Senior Designer </span>
         <span class="service-tags">  Animator </span>
         <span class="service-tags">  Business Development </span>
            </div>
            <p class="text-mail"> Work with us:  <a href="mailto:hr@vvworx.com"> hr@vvworx.com </a> </p>
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
  // Fade out loader after 500ms delay (optional)
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
  $('.form-tags').on('click', function () {
    $(this).toggleClass('active');

    // Collect all active tag texts
    let selectedServices = $('.form-tags.active').map(function () {
      return $(this).text().trim();
    }).get();

    // Update input value as comma-separated string or joined by pipe
    $('#services-input').val(selectedServices.join(', '));
  });
</script>
  </body>
</html>
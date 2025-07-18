
    <section id="footer" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <img src="assets/img/logo-footer.svg" class="footer-logo" alt="Logo Footer"> 
              <p class="social-p"> Follow us: </p>
             <ul class="social-ul">
              <li> <a href="https://www.linkedin.com/company/voix-vision-worx/"><i class="fab fa-linkedin"></i></a> </li>
              <li> <a href="https://www.facebook.com/people/Voix-Vision-Worx/61575858395596/"><i class="fab fa-facebook"></i></a> </li>
              <li> <a href="http://instagram.com/vvworx/"><i class="fab fa-instagram"></i></a> </li>
              <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
            </ul>

            </div>
          </div>
          <div class="col-6 col-md-4">
            <div>
              <p class="footer-title"> Pages  </p>
              <ul class="footer-ul">
                <li> <a href="index.php"> Home</a> </li>
                <li> <a href="about.php"> About</a> </li>
                <li> <a href="contact.php"> Contact</a> </li>
                <li> <a href="privacy-policy.php"> Privacy Policy</a> </li>
              </ul>
            </div>
          </div>
        <div class="col-6 col-md-4">
          <div>
            <p class="footer-title"> Locations  </p>
            <ul class="footer-ul">
            
              <li>  
                 <a tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="hover"  data-bs-content="14th Floor, Office No 1402, Burjuman

Business Tower, Burjuman, Dubai.

+971 56 189 9800">Dubai</a>
              </li>
              <li>  
                 <a tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="hover"  data-bs-content="Unit No 711, A Wing, Centrum Business Square, Road No 16,

Wagle Estate, Thane(W) - 400604

+91 877 96 32312">Mumbai</a>
              </li>
              <li>  
                 <a tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="hover"  data-bs-content="Office 3B, 2nd Floor, Building 3, Cerebrum IT Park,

Kalyaninagar, 411032.

+91 797 67 48422">Pune</a>
              </li> 
            </ul>
          </div>
        </div>
      </div>
      </div>
    </section>

    
    <div class="container-fluid d-block d-sm-none fix-callback">
      <div class="row">
        <div class="col-6">
          <a href="tel:+918850295464">
            <img
              src="assets/img/icons/telephone-outbound-w.svg"
              class="img-fluid"
              alt="call icon"
            />
            Call Now
          </a>
        </div>
        <div class="col-6">
          <a href="https://wa.me/918850295464?text=Hi,%20I'm%20interested%20in%20your%20Marketing%20Services.%20Could%20you%20please%20share%20more%20details%20about" 
   target="_blank"  
          >
            <img
              src="assets/img/icons/whatsapp-w.svg"
              class="img-fluid"
              alt="whatsapp icon"
            />
            WhatsApp
          </a>
        </div> 
      </div>
    </div>


    
    <!-- Button to Open Modal -->
<button type="button" class="btn btn-main btn-sidebar" data-bs-toggle="modal" data-bs-target="#enquireModal">
  Enquire Now
</button>

<!-- Modal Structure -->
<div class="modal fade" id="enquireModal" tabindex="-1" aria-labelledby="enquireModalLabel" aria-hidden="true" 
      data-bs-backdrop="static"
      data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="enquireModalLabel"> I am interested in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="py-2" method="POST" action="sendmail.php">
  <div class="mb-3">
    <select class="form-control" name="services[]">
      <option value=""> Select Service </option>
       <option value="Strategy" > Strategy </option>
            <option value="Branding & Design" > Branding & Design </option>
            <option value="Content & Production" > Content & Production </option>
            <option value="Digital Marketing" > Digital Marketing </option>
            <option value="Agent Vua" > Agent Vua</option>
            <option value="Agent Vision" > Agent Vision</option>
            <option value="Agent XR" > Agent XR</option> 
</select>
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
</div>

 
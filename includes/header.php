

<?php
// Get current file name
$current_page = basename($_SERVER['REQUEST_URI']);

?>
<!-- Loader Overlay -->
<div id="loader-overlay">
  <div class="loader-content">
    <img src="assets/img/logo.svg" alt="Loading...">
  </div>
</div>


<div class="offcanvas offcanvas-end canvas-header" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a  class="nav-link <?= ($current_page == '' || $current_page == 'index.php') ? 'active' : '' ?>"  href="index.php"> 
                Home 
                </a>
              </li>
            
              <li class="nav-item">
                <a  class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>" href="about.php">
                About 
                </a>
              </li>
              <li class="nav-item">
                <a  class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>" href="contact.php">
                Contact
                </a>
              </li>
            </ul>
  </div>
</div>
    <header class="fixed-top">
      <nav class="navbar navbar-light bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">                             
          <span>
          <img src="assets/img/logo.svg" class="img-fluid main-logo" alt="logo" >
          </span>
          </a> 
          <div>
          <a class="btn call-btn d-none d-sm-inline-block" type="button"  href="tel:918850295464"> 
             <img src="assets/img/icons/telephone-outbound-w.svg" class="img-fluid call-icon" alt="Call" >
              88502 95464
</a>
          <button class="btn btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> 
             <img src="assets/img/menu-icon.png" class="img-fluid menu-icon" alt="Menu Toggle" >
          </button>

          

          
        </div>

        </div>
      </nav>
    </header>
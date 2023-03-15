        <footer id="footer" class="mt-0 py-5">
          <div class="container py-5">
            <div class="row justify-content-between">
              <div class="col-sm-12 col-lg-7 col-xl-6 d-none d-sm-flex">
                <div class="nav-footer w-100 pt-5 mt-0 mt-lg-4">
                  <div class="row justify-content-between">
                    <div class="col-auto mr-auto">
                      <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                      <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-big d-none d-lg-block m-0 p-relative bottom-10">
                          <li class="social-icons-instagram"><a href="https://www.instagram.com/norrskeneventos/" target="_blank" class="text-4" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                          <li class="social-icons-facebook"><a href="#" target="_blank" class="text-4" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="social-icons-youtube"><a href="#" target="_blank" class="text-4" title="Facebook"><i class="fab fa-youtube"></i></a></li>
                        </ul>                        
                      </div>							
                    </div>
                    <div class="col-auto">
                      <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-5 col-xl-6">
                <div class="d-flex justify-content-end custom-footer-copywriting pt-5 mt-0 mt-lg-4">
                  <p class="mb-0 text-left text-lg-right d-block w-100 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Norrsken. &copy; <span id="monthYear"></span>.  All Rights Reserved</p>
                </div>
              </div>
            </div>
          </div>
			  </footer>
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>
    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>
    <!-- Demo -->
    <script src="js/demos/demo-digital-agency-2.js"></script>
    <!-- Theme Custom -->
    <script src="js/custom.js"></script>
    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <script>
      const current = new Date();
      const month = ('0'+(current.getMonth()+1)).slice(-2);
      const year = current.getFullYear();
      const date_format =  [month,year].join('/');
      document.getElementById('monthYear').innerHTML=date_format;
    </script>
</body>
</html>
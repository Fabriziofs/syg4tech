  <div class="footer">
      <div class="container">
        <div class="row">
          <div class="social-media-logo">
            <img src="./assets/social-media-logos/svg/008-twitter.svg" alt="" />
          </div>
          <div class="social-media-logo">
            <img
              src="./assets/social-media-logos/svg/036-facebook.svg"
              alt=""
            />
          </div>
          <div class="social-media-logo">
            <img
              src="./assets/social-media-logos/svg/029-instagram.svg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="footer-credits">
          Iconos diseñados por
          <a href="http://www.freepik.com" title="Freepik">Freepik</a> from
          <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a>
        </div>
      </div>
  </div>

    <!-- js for toggle menu -->

    <script>
      var menuItems = document.getElementById("menuItems");
      menuItems.style.maxHeight = "0px";

      function menuToggle() {
        if (menuItems.style.maxHeight == "0px") {
          menuItems.style.maxHeight = "200px";
        } else {
          menuItems.style.maxHeight = "0px";
        }
      }
    </script>
    
    <!-- js for toggle from -->

    <script>
      var loginForm = document.getElementById("loginForm");
      var registerForm = document.getElementById("registerForm");
      var indicator = document.getElementById("indicator");

      function register() {
        registerForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
      }
      function login() {
        registerForm.style.transform = "translateX(300px)";
        loginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
      }
    </script>
  </body>
</html>
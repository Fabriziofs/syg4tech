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
          <a href="https://www.flaticon.es/" title="Flaticon"
            >www.flaticon.es</a
          >
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
  </body>
</html>
<?php
include 'ASSETS/PARTIALS/header.php';
?>

<!-- CONTACT AWAL -->
<div class="wadah_kontak" style="margin: 40px 50px 100px ">
  <section id="contact">
    <h1 class="section-header">Contact</h1>

    <div class="contact-wrapper">
      <!-- Left contact page -->

      <form method="POST" action="ASSETS/LOGIC/contact.php">
        <input name="name" type="text" class="feedback-input" placeholder="Name" />
        <input name="email" type="text" required class="feedback-input" placeholder="Email" />
        <textarea name="comment" class="feedback-input" placeholder="Comment"></textarea>
        <input name="submit" type="submit" value="SUBMIT" />
      </form>


      <!-- Left contact page -->

      <div class="direct-contact-container">
        <ul class="contact-list">
          <li class="list-item">
            <i class="fa fa-map-marker fa-2x"><span class="contact-text place">Bandung, Jawa Barat</span></i>
          </li>

          <li class="list-item">
            <i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="https://api.whatsapp.com/send?phone=089578332222" title="Give me a call">(+62)
                  895-2323-7450</a></span></i>
          </li>

          <li class="list-item">
            <i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:stalkerxstalk@gmail.com" title="Send me an email">stalkerxstalk@gmail.com</a></span></i>
          </li>
        </ul>

        <hr />
        <ul class="social-media-list">
          <li>
            <a href="#" target="_blank" class="contact-icon"> <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" target="_blank" class="contact-icon"> <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" target="_blank" class="contact-icon"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" target="_blank" class="contact-icon"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr />

        <div class="copyright">&copy; ALL OF OUR COMMUNICATIONS</div>
      </div>
    </div>
  </section>
</div>
<!-- CONTACT AKHIR -->

<!-- FOOTER -->
<footer class="footer-distributed">
  <div class="footer-left">
    <img src="/TUGAS_WEB/ASSETS/images/Lambang-Unjani.png" style="margin:-10px 110px 30px" />
    <p class="footer-company-name">© 2021 By Adrian Musa Alfauzan</p>
  </div>

  <div class="footer-center">
    <div class="map">
      <i class="fa fa-map-marker"></i>
      <p><span>808 - Kota Bandung, Bldg. No. K - 5, Sector - 33</span> Bandung, Jawa Barat - 400710</p>
    </div>

    <div style="margin-left: -165px;">
      <i class="fa fa-phone"></i>
      <p>+62 878 2112 1706</p>
    </div>
    <div style="margin-left: -125px;">
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:stalkerxstalk@gmail.com">stalkerxstalk@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About the company</span>
      We offer training and skill building courses across Technology, Design, Management, Science and
      Humanities.
    </p>
    <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
  </div>
</footer>
<!-- /FOOTER -->
<script src="ASSETS/JS/responsivenavbar.js"></script>
<script src="ASSETS/JS/carousel.js"></script>
<script src="ASSETS/JS/profile.js"></script>
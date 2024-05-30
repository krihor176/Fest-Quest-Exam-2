<?php wp_footer () ?>

<footer <?php body_class() ?>>
      <div class="footer-container">
        <div class="info-container">
        <div class="about-day-quest-container">
          <a href="<?php bloginfo("url") ?>"> <p class="about-us-text">ABOUT</p> </a>
          <br>
          <a href="<?php echo get_permalink(get_page_by_path("day-quest"))  ?>"> <p class="about-us-text">DAY QUEST</p> </a>
          <br>
          <a href="<?php echo get_permalink(get_page_by_path("evening-quest"))  ?>"> <p class="about-us-text">EVENING QUEST</p> </a>
        </div>

        <div class="about-us-more-container">
          <p class="about-text">LINKS</p>
          <br>
          <a href="https://fantasyfestival.dk/" target="_blank">
            <p class="about-text">Fanstasy Festival </p>
          </a>
          <br>
          <a href="https://www.ticketmaster.dk/artist/fantasyfestival-billetter/1233494" target="_blank">
          <p class="about-text">Tickets</p>
          </a>
        </div>
       

        
        <div class="contact-us-container">
          <p class="about-text">CONTACT US</p>
          <br>
          <p class="about-text mail"><a href="mailto:fantasyfestival@esbjerg.dk" target="_blank">fantasyfestival@esbjerg.dk</a></p>
          <br>
          <p class="about-text"><a href="tel:+4576162020">+45 76 16 20 20</a></p>
        </div>
        </div>

        <a href="https://www.esbjergbibliotek.dk/" target="_blank">
          <img class="fest-sponsor-1" src="<?php echo get_template_directory_uri() ?>/img/fest-sponsor-a.png">
        </a>

        <a href="https://oplev.esbjerg.dk/" target="_blank">
          <img class="fest-sponsor-2" src="<?php echo get_template_directory_uri() ?>/img/fest-sponsor-c.png">
        </a>

        <a href="https://www.esbjerg.dk/" target="_blank">
          <img class="fest-sponsor-3" src="<?php echo get_template_directory_uri() ?>/img/fest-sponsor-b.png">
        </a>
      </div>
      </footer>
    </body>
</html>
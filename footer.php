<footer>
    <div class= "footer">
        <h3 class="title_text_left_footer"><strong><?php echo get_theme_mod('name_of_category_7'); ?></strong> <?php echo get_theme_mod('name_of_category_8'); ?></h3>
        <form action="mail.php" method="POST">
          <input type="text" name="user_name" placeholder="Imię i nazwisko" class="form-control" required />
          <input type="text" name="user_email" placeholder="Adress e-mail" class="form-control" type="email" required />
          <input type="text" name="user_phone" placeholder="Numer telefonu" class="form-control" type="phone" required />
          <textarea rows="4" cols="50" type = "text" name="user_text" class="message" required></textarea>
          <div class="che"><input type="checkbox" class = "check_b" name ="agree"> Zgoda na ptzetwarzanie danych osobowych</div>
        <div id="welcomeDiv"  style="display:none;" class="answer_list">
          <button type = "button" onclick = "hideDiv()" class= "close_button">X</button>    
        </div>
        <button type = "submit" class= "btn btn-primary"><span class="Outsourcing1">WYŚLIJ</span></button>
        </form>
        <a href="Index.html">
        <div class="logo_footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/humanit_lable.svg" alt="image"></div>
      </a>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
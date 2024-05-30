<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>    
    <nav class="night-nav day-nav">
        <button class="hamburger" id="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
        <div class="dragonlogo " ><a href="<?php bloginfo("url") ?>">
        <img class="logo-dragon rotate" src="<?php echo get_template_directory_uri("url") ?>/img/logo.png">
        </div>
            <ul class="desktop-nav">
              <a href="<?php bloginfo("url") ?>"> <li>ABOUT</li> </a>
              <a href="<?php echo get_permalink(get_page_by_path("day-quest"))?>"> <li> DAY QUEST</li> </a> 
              <a href="<?php echo get_permalink(get_page_by_path("evening-quest"))?>"> <li> EVENING QUEST </li></a>
            </ul>
      </nav>

    <div class="modal" id="modal">
      <div class="modal-content">
        <div class="centered-content">
          <a href="<?php bloginfo("url") ?>">ABOUT</a>
          <a href="<?php echo get_permalink(get_page_by_path("day-quest"))?>">DAY QUEST</a>
          <a href="<?php echo get_permalink(get_page_by_path("evening-quest"))?>">EVENING QUEST</a>
        </div>
      </div>
    </div>
    

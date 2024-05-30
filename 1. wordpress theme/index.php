<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <title><?php bloginfo("name") ?></title>


    <?php
    $headline = get_field('headline');
    $welcomeparagraph = get_field ('welcome_paragraph');
    $welcomecont = get_field ('welcomecont');
    $questday = get_field ('quest_name_day');
    $dayagelimit = get_field ('day_age_limit');
    $daylocation = get_field ('day_location');
    $daydateandtime = get_field ('day_date_and_time');
    $questnight = get_field ('quest_name_night');
    $nightagelimit = get_field ('night_age_limit');
    $nightlocation = get_field ('night_location');
    $nightdateandtime = get_field ('night_date_and_time');
    $longday = get_field ('long_introduction_day');
    $smallday = get_field ('small_introduction_day');
    $longnight = get_field ('long_introduction_night');
    $smallnight = get_field ('small_introduction_night');
    $dayinformation = get_field ('day_quest_information');
    $nightinformation = get_field ('night_quest_information');
    $video = get_field ('video');
    ?>

    <div class="main-page"> 
      <div class="main-content">
        <div class="rectangle-div"></div>

        <div class="main-page-hero-background"></div>
        <img class="mountain-greens-1" src="<?php echo get_template_directory_uri() ?>/img/mountain-greens.png">
        <div class="anniversary-container">
          <p class="anniversary-big"><?php echo $welcomeparagraph ?></p>
          <p class="anniversary-invite"><?php echo $welcomecont ?></p>
        </div>
        <div class="welcome-to-the"><?php echo $headline ?></div>
        <div class="about-the-quests">About the quests</div>

        <img class="ticket-empty" src="<?php echo get_template_directory_uri() ?>/img/ticket-empty.png">

        <div class="day-quest"><?php echo $questday ?></div>
        <div class="age-6-parent">
          <div class="september-14"><?php echo $daydateandtime ?></div>
          <div class="place"><?php echo $daylocation ?></div>
          <div class="age-6-main">Age: <?php echo $dayagelimit ?>+</div>
        </div>

        
        <a href="https://www.ticketmaster.dk/artist/fantasyfestival-billetter/1233494" target="_blank">
          <button class="ticket-button1 buy-tickets">Buy tickets</button>
        </a>
        
        <a href="<?php echo get_permalink(get_page_by_path("day-quest"))  ?>">
          <button class="ticket-button2 find-out-more">Find out more</button>
        </a>
    
        <div class="anniversary-container1">
          <p class="anniversary"><?php echo $longday ?></p>
          <p class="anniversary anniversary-small-day"><?php echo $smallday ?></p></div>

        <img class="ticket-empty-2" src="<?php echo get_template_directory_uri() ?>/img/ticket-empty.png">


        <div class="evening-quest1"><?php echo $questnight ?></div>
        <div class="age-16-parent">
          <div class="september-14"><?php echo $nightdateandtime ?></div>
          <div class="place"><?php echo $nightlocation ?></div>
          <div class="age-6-main">Age: <?php echo $nightagelimit ?>+</div>
        </div>
        <div class="anniversary-container2">
          <p class="anniversary anniversary-phone-2"><?php echo $longnight ?></p>
          <p class="anniversary anniversary-phone-2"><?php echo $smallnight ?></p>
        </div>
        <a href="https://www.ticketmaster.dk/artist/fantasyfestival-billetter/1233494" target="_blank">
          <button class="ticket2-button1 buy-tickets2">Buy tickets</button>
        </a>
        
        <a href="<?php echo get_permalink(get_page_by_path("evening-quest"))  ?>">
          <button class="ticket2-button2 find-out-more2">Find out more</button>
        </a>
        
        <img class="dark-trees-2" src="<?php echo get_template_directory_uri() ?>/img/dark-trees-2.png">

        <img class="sparky-dragon" src="<?php echo get_template_directory_uri() ?>/img/sparky-dragon.png">

        <img class="mountain-1" src="<?php echo get_template_directory_uri() ?>/img/mountain-1.png">
        <img class="mountain-2" src="<?php echo get_template_directory_uri() ?>/img/mountain-1.png">


        <video class="video-template" controls muted>
          <source type="video/mp4" src="<?php echo $video["url"]?>"> 
        </video>

        <img class="dark-trees" src="<?php echo get_template_directory_uri() ?>/img/dark-trees.png">
      </div>
      

    </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>
    


<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <title>
            <?php the_title() ?>
        </title>
    
    <div class="modal" id="modal">
      <div class="modal-content">
        <div class="centered-content">
          <a href="<?php bloginfo("url") ?>">ABOUT</a>
          <a href="<?php echo get_permalink(get_page_by_path("day-quest")) ?>">DAY QUEST</a>
          <a href="<?php echo get_permalink(get_page_by_path("evening-quest"))  ?>">EVENING QUEST</a>
        </div>
      </div>
    </div>


    <?php
    $dialogue = get_field('dialogue');
    $dialogue2 = get_field('dialogue_2');
    $dialogue3 = get_field('dialogue_3');
    $dateandtime = get_field ('date_and_time');
    $location = get_field ('location');
    $age = get_field ('age');
    $questdescription = get_field ('quest_description');
    $question = get_field ('question');
    $welcometo = get_field ('welcome_to');
    $meetour = get_field ('meet_our');
    ?>
    
    
    <div class="main-page-day">
      <main class="morning-quest">
        <div class="shape"></div>
        <div class="mountain-day">
          <img class="mountain-day-image" src="<?php echo get_template_directory_uri() ?>/img/mountain-day.png">
          <div class="wizard">
            <img class="wizard-image" src="<?php echo get_template_directory_uri() ?>/img/wizard.png">
          </div>
        </div>
        <div class="info">
          <div class="inner-info">
            <div class="dialogue">
              <div class="rectangle-rounded">
                <div class="wizard-text">
                  <h3 class="are-ye-ready-container">
                    <p class="are-ye-ready"><?php echo $dialogue ?></p>
                    <p class="aye"><?php echo $dialogue2 ?></p>
                    <p class="then-buckle-up"><?php echo $dialogue3 ?></p>
                  </h3>
                </div>
              </div>
              <div class="small-flying-dragon">
                <img class="small-flying-dragon-image" src="<?php echo get_template_directory_uri() ?>/img/small-dragon.png">
              </div>
            </div>
          </div>
        </div>
        <div class="about1">
          <div class="about-details">
            <div class="about-details-child"></div>
            <div class="about-header">
              <h2 class="about-the-quest">About the Quest</h2>
            </div>
            <div class="event">
              <div class="event-details">
                <div class="september-14-"><?php echo $dateandtime ?></div>
                <div class="esbjerg-library-gate"><?php echo $location ?></div>
                <div class="age-6">Age: <?php echo $age ?>+</div>
              </div>
            </div>
            <div class="story">
              <div class="story-details">
                <img class="rock" src="<?php echo get_template_directory_uri() ?>/img/rock.png">
                <div class="description-parent">
                  <div class="description-box">
                    <p class="description-text"><?php echo $questdescription ?></p>
                    <p class="description-text-under"><?php echo $question ?> </p>
                    <div class="button-parent">
                      <a href="https://www.ticketmaster.dk/artist/fantasyfestival-billetter/1233494" target="_blank">
                        <button class="button-group buy-a-ticket">
                          <div class="buy-a-ticket-text">Buy a ticket!</div>
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="big-welcome">
                    <div class="welcome-to-fanstasy-quest">
                      <h2 class="welcome-to-text welcome-to-text-day"><?php echo $welcometo ?></h2>
                      <div class="meet-our-characters-wrapper">
                        <h2 class="meet-our-characters meet-our-characters-day"><?php echo $meetour ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fairy-and-mushroom">
                  <img class="mushroom-img" src="<?php echo get_template_directory_uri() ?>/img/mushroom.png">
                  <img class="fairy-img" src="<?php echo get_template_directory_uri() ?>/img/fairy.png">
                </div>
              </div>
            </div>

<?php $characterLoop = new WP_Query(array(
"post_type" => "Character",
"posts_per_page" => -1
)); ?>


<div class="everything">
                <?php if ($characterLoop->have_posts()) : ?>
                    <?php while ($characterLoop->have_posts()) : $characterLoop->the_post(); ?>
                        <?php $characterimg = get_field('character_img'); ?>
                            <div class="cardone">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cardbg.png">
                                <div class="character">
                                    <img id="mermaid" src="<?php echo $characterimg ["url"]; ?>" alt="Character Image">
                                </div>
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </main>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
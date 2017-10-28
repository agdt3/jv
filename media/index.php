<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vandermaas for Congress</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/custom.css">
  </head>
  <body>
    <div id="fb-root"></div>
    <?php include_once "header.php" ?>
    <div class="desktop-spacer is-hidden-mobile"></div>
    <div class="mobile-spacer is-hidden-tablet"></div>
    <?php include_once "hero.php" ?>
    <section class="section no-padding-bottom is-hidden-desktop">
      <?php include_once "mobile_buttons_fragment.php" ?>
    </section>
    <section class="section">
      <div class="columns is-desktop">
        <div class="column is-6-desktop is-offset-2-desktop is-12-tablet">
          <div class="news-wrapper">
            <h1 class="title is-1">
              <div class="section-toggle news-section-button">Latest News</div>
              <div class="section-toggle calendar-section-button">Upcoming Events<div>
            </h1>
            <section class="article-wrapper">
              <?php include_once article_fragment.php ?>
              <p class="has-text-right">
                <span class="button is-link learn-more-control">More News...</span>
              </p>
            </section>
            <section class="calendar-wrapper is-hidden">
              <div class="calendar">
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=votevandermaas%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FToronto" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
            </section>
          </div>
        </div>
        <?php
          $options = array(
            'show_support_button' => true,
            'show_updates_form' => true,
            'show_volunteer_button' => true,
            'show_district_button' => true,
            'show_twitter_box' => true,
            'show_facebook_box' => true,
          );
        ?>
        <?php include_once "sidebar.php"; ?>
      </div>
    </section>
    <?php include_once "footer.php"; ?>
    <script type="text/javascript" src="/main.js"></script>
  </body>
</html>

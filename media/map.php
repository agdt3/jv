<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en">
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
    <section class="section no-padding-bottom is-hidden-tablet">
      <container class="container">
        <a class="mobile-donate-button button is-large is-fullwidth has-text-centered is-danger">
          DONATE
        </a>
        <a class="mobile-involve-button button is-large is-fullwidth has-text-centered is-warning">
          Get involved
        </a>
      </container>
    </section>
    <section class="section">
      <div class="columns">
        <div class="column is-6-desktop is-offset-2-desktop is-8-tablet">
          <div class="district-map-wrapper">
            <h1 class="title is-1">District Map</h1>
            <figure>
              <iframe width="425" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
src="https://www.govtrack.us/congress/members/embed/mapframe?state=id&district=1&bounds=-121.879,50.226,-109.684,40.338"></iframe>
            </figure>
          </div>
          <div class="vote-buttons-wrapper columns">
            <h1 class="title is-1">Voter resources</h1>
            <div class="column">
              <a href="http://www.idahovotes.gov/YPP_NEW/AmIRegistered.aspx">Check if you're registered!</a>
            </div>
            <div class="column">
              <a href="http://www.idahovotes.gov/VoterReg/voter_registration.pdf">Click here to register!</a>
            </div>
          </div>
        </div>
        <?php include_once "sidebar.php"; ?>
      </div>
    </section>
    <?php include_once "footer.php"; ?>
    <script type="text/javascript" src="/main.js"></script>
  </body>
</html>

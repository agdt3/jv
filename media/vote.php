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
          <div class="vote-option-wrapper">
            <a class="anchor-tag" id="register_to_vote"></a>
            <article>
              <h1 class="title is-1">Register to Vote</h1>
              <div class="columns">
                <div class="column is-2">
                  <span><i class="fa fa-check-circle"></i></span>
                </div>
                <div class="column is-10">
                  <p>Follow the instructions on this form. Complete the form an deliver or send in to be eligible to vote</p>
                  <a href="http://www.idahovotes.gov/VoterReg/voter_registration.pdf">Click here to register!</a>
                </div>
              </div>
            </article>
            <a class="anchor-tag" id="check_registration"></a>
            <hr/>
            <article>
              <h1 class="title is-1">Am I Registered?</h1>
              <div class="columns">
                <div class="column is-2">
                  <span><i class="fa fa-question-circle"></i></span>
                </div>
                <div class="column is-10">
                  <p>Enter your information and make sure your address is correct</p>
                  <a href="http://www.idahovotes.gov/YPP_NEW/AmIRegistered.aspx">Click here to check if you're registered</a>
                </div>
              </div>
            </article>
            <a class="anchor-tag" id="voter_resources"></a>
            <hr/>
            <article>
              <h1 class="title is-1">Voter Resources</h1>
              <div class="columns">
                <div class="column is-2">
                  <span><i class="fa fa-group"></i></span>
                </div>
                <div class="column is-10">
                  <ul>
                    <li><a href="https://www.voteriders.org/">Voteriders</a></li>
                    <li><a href="https://www.fvap.gov/vao/vag">Absentee Voting Guide</a></li>
                    <li><a href="http://www.dmv.org/id-idaho/voter-registration.php">DMV Voting Registration</a></li>
                  </ul>
                </div>
              </div>
            </article>
            <a class="anchor-tag" id="district_map"></a>
            <hr/>
            <article>
              <div class="columns"
                <h1 class="title is-1">District Map</h1>
                <figure>
                  <img src="images/idaho_1st_district.png"/>
                </figure>
              </div>
            </article>
          </div>
        </div>
        <?php include_once "sidebar.php"; ?>
      </div>
    </section>
    <?php include_once "footer.php"; ?>
    <script type="text/javascript" src="/main.js"></script>
  </body>
</html>

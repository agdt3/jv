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
    <section class="section no-padding-bottom is-hidden-tablet">
      <?php include_once "mobile_buttons_fragment.php" ?>
    </section>
    <section class="section">
      <div class="columns is-desktop">
        <div class="column is-6-desktop is-offset-2-desktop is-12-tablet">
          <div class="vote-option-wrapper">
            <a class="anchor-tag" id="register_to_vote"></a>
            <article>
              <h1 class="title is-1 vote-section-header"><i class="fa fa-check-circle"></i>&nbsp;Register to Vote</h1>
              <div class="columns">
                <div class="column vote-section-icon is-2">
                  <span><i class="fa fa-check-circle"></i></span>
                </div>
                <div class="column vote-section-body is-10">
                  <p>Follow the instructions on this form. Complete the form an deliver or send in to be eligible to vote</p>
                  <a href="http://www.idahovotes.gov/VoterReg/voter_registration.pdf" target="_blank" >Click here to register!</a>
                  <br/>
                  <br/>
                  <p>Vote by Mail? Click below and follow the instructions on the 'Absentee Ballot Application Form'. Complete the form, print, sign, and mail or fax it in.</p>
                  <a href="http://idahovotes.gov/VoterReg/absentee.pdf" target="_blank">Click here to request an 'Absentee Ballot'!</a>
               </div>
              </div>
            </article>
            <a class="anchor-tag" id="check_registration"></a>
            <hr/>
            <article>
              <h1 class="title is-1 vote-section-header"><i class="fa fa-question-circle"></i>&nbsp;Am I Registered?</h1>
              <div class="columns">
                <div class="column vote-section-icon is-2">
                  <span><i class="fa fa-question-circle"></i></span>
                </div>
                <div class="column vote-section-body is-10">
                  <p>Enter your information and make sure your address is correct</p>
                  <a href="http://www.idahovotes.gov/YPP_NEW/AmIRegistered.aspx" target="_blank">Click here to check if you're registered</a>
                </div>
              </div>
            </article>
            <a class="anchor-tag" id="voter_resources"></a>
            <hr/>
            <article>
              <h1 class="title is-1 vote-section-header"><i class="fa fa-group"></i>&nbsp;Voter Resources</h1>
              <div class="columns">
                <div class="column vote-section-icon is-2">
                  <span><i class="fa fa-group"></i></span>
                </div>
                <div class="column vote-section-body is-10">
                  <ul>
                    <li><a href="https://www.voteriders.org/" target="_blank">Voteriders</a></li>
                    <li><a href="https://www.fvap.gov/vao/vag" target="_blank">Absentee Voting Guide</a></li>
                    <li><a href="http://www.dmv.org/id-idaho/voter-registration.php" target="_blank">DMV Voting Registration</a></li>
                  </ul>
                </div>
              </div>
            </article>
            <a class="anchor-tag" id="district_map"></a>
            <hr/>
            <article>
              <div class="columns">
                <div class="column is-12">
                  <h1 class="title is-1">District Map</h1>
                  <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.govtrack.us/congress/members/embed/mapframe?state=id&district=1&bounds=-120.197,49.045,-111.167,41.724"></iframe>
                </div>
              </div>
            </article>
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

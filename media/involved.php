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
    <section class="section">
      <div class="columns is-desktop">
        <div class="column is-6-desktop is-offset-2-desktop is-12-tablet">
          <div class="volunteer-form-wrapper box">
            <form id="volunteer-form">
              <h4 class="form-caption has-text-centered title is-4">
                VOLUNTEER!
              </h4>
              <div class="field is-grouped">
                <div class="control is-expanded">
                  <input class="input is-info" type="text" name="first_name" placeholder="First Name">
                </div>
                <div class="control is-expanded">
                  <input class="input is-info" type="text" name="last_name" placeholder="Last Name">
                </div>
              </div>
              <div class="field">
                <div class="control has-icons-left">
                  <input class="input is-info" type="email" name="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                <div class="control has-icons-left">
                  <input class="input is-info" type="tel" name="telephone" placeholder="Phone Number">
                  <span class="icon is-small is-left">
                    <i class="fa fa-phone"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                <div class="control has-icons-left">
                  <input class="input is-info" type="text" name="zip" placeholder="Zip Code">
                  <span class="icon is-small is-left">
                    <i class="fa fa-address-card"></i>
                  </span>
                </div>
              </div>
              <div class="control">
                <label class="label">How would you like to help?</label>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="endorse">
                    Endorse
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="intern">
                    Intern/Work at campaign HQ
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="house-party">
                    Hold a House-Party Fundraiser
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="register">
                    Register Voters
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="phonebank">
                    Phone Bank
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="canvas">
                    Go Door to Door
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="yardsign">
                    Get a Yard Sign
                  </label>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <textarea class="textarea" name="message" placeholder="Leave a message for James Vandermaas"></textarea>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <button id="volunteer-submit" class="button is-warning is-fullwidth"><span class="button-text">Submit</span><span class="button-success is-hidden"><i class="fa fa-check"></i></span></button>
                </div>
              </div>
            </form>
          </div>
          <hr/>
          <a class="anchor-tag" id="updates"></a>
          <div class="update-form-wrapper box">
            <form id="update-form">
              <h4 class="form-caption has-text-centered title is-4">
                GET UPDATES
              </h4>
              <div class="field">
                <div class="control has-icons-left">
                  <input class="input is-info" type="email" name="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                <div class="control has-icons-left">
                  <input class="input is-info" type="text" name="zip" placeholder="Zip Code">
                  <span class="icon is-small is-left">
                    <i class="fa fa-address-card"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <button id="update-submit" class="button is-warning is-fullwidth"><span class="button-text">Register</span><span class="button-success is-hidden"><i class="fa fa-check"></i></span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <?php
          $options = array(
            'show_support_button' => true,
            'show_updates_form' => false,
            'show_volunteer_button' => false,
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

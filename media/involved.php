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
    <section class="section">
      <div class="columns">
        <div class="column is-6-desktop is-offset-2-desktop is-8-tablet">
          <div class="volunteer-form-wrapper box">
            <form id="volunteer-form">
              <h4 class="form-caption has-text-centered title is-4">
                VOLUNTEER!
              </h4>
              <div class="field is-grouped">
								<div class="control is-expanded">
									<input class="input is-info" type="text" placeholder="First Name">
								</div>
								<div class="control is-expanded">
									<input class="input is-info" type="text" placeholder="Last Name">
								</div>
              </div>
							<div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
								</div>
              </div>
              <div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="tel" placeholder="Phone Number">
                  <span class="icon is-small is-left">
                    <i class="fa fa-phone"></i>
                  </span>
								</div>
              </div>
              <div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="text" placeholder="Zip Code">
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
                    <input type="checkbox">
                    Endorse
                  </label>
								</div>
              </div>
              <div class="field">
								<div class="control">
                  <label class="checkbox">
                    <input type="checkbox">
                    Register Voters
                  </label>
								</div>
              </div>
              <div class="field">
								<div class="control">
                  <label class="checkbox">
                    <input type="checkbox">
                    Phone Bank
                  </label>
								</div>
              </div>
              <div class="field">
								<div class="control">
                  <label class="checkbox">
                    <input type="checkbox">
                    Go Door to Door
                  </label>
								</div>
              </div>
              <div class="field">
								<div class="control">
                  <label class="checkbox">
                    <input type="checkbox">
                    Get a Yard Sign
                  </label>
								</div>
              </div>
              <div class="field">
                <div class="control">
                  <textarea class="textarea" placeholder="Leave a message for James Vandermaas"></textarea>
                </div>
              </div>
              <div class="field">
								<div class="control">
                  <button class="button is-warning is-fullwidth">Submit</button>
								</div>
							</div>
            </form>
          </div>
          <hr/>
          <div class="update-form-wrapper box">
            <form id="update-form">
              <h4 class="form-caption has-text-centered title is-4">
                GET UPDATES
              </h4>
							<div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
								</div>
							</div>
							<div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="text" placeholder="Zip Code">
                  <span class="icon is-small is-left">
                    <i class="fa fa-address-card"></i>
                  </span>
								</div>
							</div>
              <div class="field">
								<div class="control">
                  <button class="button is-warning is-fullwidth">Register</button>
								</div>
							</div>
            </form>
          </div>
        </div>
        <div class="sidebar-wrapper column is-2-desktop is-4-tablet">
          <a class="button sidebar-button is-danger is-fullwidth has-text-centered is-hidden-mobile">
            Give to the campaign
          </a>
          <div class="box update-form-wrapper">
            <form id="update-form">
              <h4 class="form-caption has-text-centered title is-4">
                Get Updates!
              </h4>
							<div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
								</div>
							</div>
							<div class="field">
								<div class="control has-icons-left">
									<input class="input is-info" type="text" placeholder="Zip Code">
                  <span class="icon is-small is-left">
                    <i class="fa fa-address-card"></i>
                  </span>
								</div>
							</div>
              <div class="field">
								<div class="control">
                  <button class="button is-warning is-fullwidth">Register</button>
								</div>
							</div>
            </form>
          </div>
          <a class="button sidebar-button is-warning is-fullwidth has-text-centered is-hidden-mobile">
            Volunteer
          </a>
          <div class="box">
            Twitter box
          </div>
          <div class="box">
            Facebook box
          </div>
        </div>
      </div>
    </section>
    <?php include_once "footer.php"; ?>
    <script type="text/javascript" src="/main.js"></script>
  </body>
</html>

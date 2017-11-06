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
    <section class="section no-padding-bottom is-hidden-desktop">
      <?php include_once "mobile_buttons_fragment.php" ?>
    </section>
    <section class="section">
      <div class="columns is-desktop">
        <div class="column is-6-desktop is-offset-2-desktop is-12-tablet">
          <a class="anchor-tag" id="bio"></a>
          <article>
            <h1 class="title is-3"><strong>Meet James...</strong></h1>
            <div class="about-main-content">
              <figure class="about-pic about-pic-left">
                <img src="images/James01_Bio1.jpg"></img>
              </figure>
              <p>
                James is probably like most of you. He went through the school of hard knocks… maybe harder than most.  He was born in Maryland, has two sisters, and was abandoned by his father when he was just a one year old. If you can imagine a divorced woman raising three kids – James and his two sisters – all by herself in the late 50’s and 60’s, you know that he had to grow up fast. His mother did the best she could, but they were raised in poverty. From about nine years old, James and his sisters had to work hard and contribute all they earned to help support the family. James moved out on his own at sixteen, joking that to be able to get by, he had to be eighteen for about three years, until he caught up!</p>
              <br/>
              <p>James has an early history of the public service spirit: at fourteen he volunteered at a local fire department and later became a fireman/EMT-paramedic.  Later, he turned to a career in law enforcement, from which he retired about 6 years ago.  Even while in law enforcement, James was no stranger to hard work and he also started several businesses, ran a successful telecommunications company, and has done business consulting and work on non-profits since.</p>
              <br/>
              <p>James is proud of his three wonderful sons.  He has been “mister mom” since 2000, eventually with full custody, and like many of us juggled quality time, work and daycare for years.  His oldest son is a Marine who served for nine years in the United States Marines Corps with three tours in Iraq.  His middle son is now working in Florida to be close to his sweetheart, and his youngest still lives here in Idaho.</p>
              <br/>
              <p>James has a wide range of knowledge and experience including; business management and consulting, Police/Fire 911 communications, dispatcher/trainer, SWAT Team, GIS Crime analysis mapping, Technical Services Unit, Vice-President on the P.A.L. (Police Activities League) Board, mentoring to youth and troubled kids to prevent gang activity, member of the County Sheriff’s Cliff and Dive Search and Rescue team, various homeland security related assignments, shop-steward & contract negotiator, and a bone marrow donor.</p>
          </div>
          </article>
          <hr/>
          <a class="anchor-tag" id="running"></a>
          <article>
            <h1 class="title is-3"><strong>Why I am Running!</strong></h1>
            <div class="about-main-content">
              <figure class="about-pic about-pic-right">
                <img src="images/family_bio.jpg"></img><p><font size="2">Very proud father with my son at his wedding. He served over 8 years, with three tours in Iraq.</font></p>
              </figure>
              <p>I am tired of sitting on the sidelines when I know the people of Idaho are not being properly represented or respected. I have good ideas and solutions that can help make life better for us all.</p>
              <br/>
              <p>I can see the big picture and am very solution oriented – we already have the tools to be able to do more with less – we just need the right leadership to get us there and get it done!</p>
            <br/>
              <p>America is a wonderful experiment in Democracy, but we must pay attention for it to work. We can no longer follow the few who think only of themselves, but work to elect people who listen to all of us, and want to represent ALL of us. Our Constitution puts people first, not any political party. And if we want a Constitutional representative government, we must elect those who put the interests of 'the people' first - NOT any Party! </p>
              </div>
          </article>
          <hr/>
          <a class="anchor-tag" id="support"></a>
          <article>
            <h1 class="title is-3"><strong>Ways to support</strong></h1>
            <?php include_once "support_fragment.php" ?>
          </article>
          <hr/>
          <a class="anchor-tag" id="endorsement"></a>
          <article>
            <h1 class="title is-3"><strong>Endorsements and Supporters</strong></h1><p></p>
            <h2 class="supporters-title subtitle is-4"><strong>Supporters</strong></h2>
            <div class="supporters-body">
              <div class="supporters-list-container">
              </div>
            </div>
            <hr>
            <h2 class="endorsements-title subtitle is-4"><strong>Endorsements</strong></h2>
            <div class="endorsements-body">
              <div class="endorsements-list-container">
              </div>
              <div class="endorsement-form-container box">
                <form id="endorsement-form">
                  <h4 class="form-caption has-text-centered title is-4">Endorse James Vandermaas!</h4>
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
                      <input class="input is-info" type="email" name="email" placeholder="Email (will not be published)">
                      <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                  <div class="field">
                    <div class="control">
                      <textarea class="textarea" maxlength="255" name="message" placeholder="Leave an endorsement for James Vandermaas"></textarea>
                    </div>
                  </div>
                  <div class="field">
                    <div class="control">
                      <button id="endorsement-submit" class="button is-warning is-fullwidth">Submit</button>
                    </div>
                  </div>
                </form>
              <div>
            </div>

          </article>
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

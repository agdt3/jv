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
            <h1 class="title is-1">Biography</h1>
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
              <p>James has a wide range of knowledge and experience including: Police/Fire 911 communications; dispatcher/trainer, SWAT Team, GIS Crime analysis mapping, Technical Services Unit, Vice-President on the P.A.L. (Police Activities League) Board, mentoring to youth and troubled kids to prevent gang activity, member of the County Sheriff’s Cliff and Dive Search and Rescue team, various homeland security related assignments, a bone marrow donor.</p>
          </div>
          </article>
          <hr/>
          <a class="anchor-tag" id="running"></a>
          <article>
            <h1 class="title is-1">Why I am Running!</h1>
            <div class="about-main-content">
              <figure class="about-pic about-pic-right">
                <img src="images/family_bio.jpg"></img>
              </figure>
              <p>I am a hard-working guy with a wide range of experience who is tired of sitting on the sidelines when I know I have good ideas and solutions that can help make life better for us all.</p>
              <br/>
              <p>I see the bigger picture and am very solution oriented – we already have the tools to be able to do more with less – we just need the right leadership to get us there and get it done!</p>
            </div>
          </article>
          <hr/>
          <a class="anchor-tag" id="plan"></a>
          <article>
            <h1 class="title is-1">Plan to Win</h1>
            <div class="main-content">
            <ul class="plan-list">
              <li><strong>Listen and Learn:</strong> It’s time that the politicians listened to the American people. I will be conducting a “Listening Tour” by physically going to all the small and large towns up and down the 1st District and learning from the people directly what is most important to them!</li>
              <li><strong>Connect and Respect:</strong> Returning to the same towns to build recognition and connect with the people. Answering as many voter questions as possible. Follow up on all unanswered questions, in person if possible.</li>
              <li><strong>GOTV:</strong> Implement the “We Miss You” and “Come back from the ‘R’ side” voter drives.</li>
              <li><strong>Good Government Matters:</strong> Make voters understand that “Government is not our enemy, those few self-interested ones running it are!”</li>
              <li><strong>Help Progressives:</strong> Begin the “Activate Idaho” coalition initiative.</li>
              <li><strong>In This Together:</strong> Helping constituents to see that that most of our major issues and problems are interconnected.</li>
              <li><strong>Promote the Common Good:</strong> I have a vision for Idaho, and America, of cohesion and compromise between Democrats, Progressives, Independents, and those Republicans that believe in our Constitution. I believe that we can all work toward the common good; by design and process, our Constitution is the framework for achieving a compromise that benefits all.</li>
              <li><strong>Civic Responsibility and Volunteerism:</strong> America is a wonderful experiment in Democracy that takes work.  We cannot follow the few who think only of themselves, but realize that America is not easy and America takes work!  We cannot complain about taxes, but then expect all the services and protections we receive. <strong>American is only as good as what we give!</strong></li>
            </ul>
          </article>
          <hr/>
          <a class="anchor-tag" id="support"></a>
          <article>
            <h1 class="title is-1">Ways to support</h1>
            <?php include_once "support_fragment.php" ?>
          </article>
          <hr/>
          <a class="anchor-tag" id="endorsement"></a>
          <article>
            <h1 class="title is-1">Endorsements and Supporters</h1>
            <ul>
            </ul>
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

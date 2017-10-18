<div class="column sidebar-wrapper is-2-desktop">
  <?php if ($options && $options['show_support_button']) { ?>
  <a class="button sidebar-button is-danger is-fullwidth has-text-centered is-hidden-touch" href="support.php">
    Support the campaign
  </a>
  <?php } ?>
  <?php if ($options && $options['show_updates_form']) { ?>
  <div class="box update-form-wrapper">
    <form id="update-form">
      <h4 class="form-caption has-text-centered title is-4">
        Get Updates!
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
          <button id="update-submit" class="button is-warning is-fullwidth">Register</button>
        </div>
      </div>
    </form>
  </div>
  <?php } ?>
  <?php if ($options && $options['show_volunteer_button']) { ?>
  <a href="involved.php" class="button sidebar-button is-warning is-fullwidth has-text-centered is-hidden-touch">
    Volunteer
  </a>
  <?php } ?>
  <?php if ($options && $options['show_district_button']) { ?>
  <a href="vote.php#district_map" class="button sidebar-button is-fullwidth has-text-centered">
    District Map
  </a>
  <?php } ?>
  <?php if ($options && $options['show_twitter_box']) { ?>
  <div class="box">
    <a class="twitter-timeline"
        href="https://twitter.com/votevandermaas">
      Tweets by @votevandermaas
    </a>
  </div>
  <?php } ?>
  <?php if ($options && $options['show_facebook_box']) { ?>
  <div class="box">
    <div class="fb-page" data-href="https://www.facebook.com/VoteVandermaas-123623828310861/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VoteVandermaas-123623828310861/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VoteVandermaas-123623828310861/">Votevandermaas</a></blockquote>
    </div>
  </div>
  <?php } ?>
</div>

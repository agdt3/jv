document.addEventListener('DOMContentLoaded', function () {
  /* NAVBAR */

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }

  /* LEARN MORE */
  var learnMoreButtons = document.querySelectorAll('.article-learn-more');
  if (learnMoreButtons.length > 0) {
    learnMoreButtons.forEach((el) => {
      el.addEventListener("click", (e) => {
        var id = el.dataset.id;
        var extraContent = document.querySelector('.extra-content[data-id="' + id + '"]');
        if (extraContent) {
          extraContent.classList.toggle('is-hidden');
        }
      });
    });
  }

  /* CAROUSEL */

  function getCurrentIndex($item) {
    return parseInt($item.dataset.index);
  }

  function getItemByIndex(index, max) {
    if (index < 1) {
      index = max;
    }
    else if (index > max) {
      index = 1;
    }

    return document.querySelector(".hero-image[data-index='" + index + "']");
  }

  function transitionItem($current, $next) {
    $current.classList.remove('active');
    $current.classList.add('is-hidden');

    $next.classList.remove('is-hidden');
    $next.classList.add('active');
  }

  var $rightControl = document.querySelector('.carousel-right-control');
  if ($rightControl) {
    $rightControl.addEventListener('click', function() {
      var itemCount = document.querySelectorAll('.hero-image').length;
      var $currentItem = document.querySelector('.active');
      var activeIndex = getCurrentIndex($currentItem);
      var $nextItem = getItemByIndex(activeIndex + 1, itemCount);
      transitionItem($currentItem, $nextItem);
     });
  }

  var $leftControl = document.querySelector('.carousel-left-control');
  if ($leftControl) {
    $leftControl.addEventListener('click', function() {
      var itemCount = document.querySelectorAll('.hero-image').length;
      var $currentItem = document.querySelector('.active');
      var activeIndex = getCurrentIndex($currentItem);
      var $nextItem = getItemByIndex(activeIndex - 1, itemCount);
      transitionItem($currentItem, $nextItem);
    });
  }

  var $learnMoreControl = document.querySelector('.learn-more-control');
  if ($learnMoreControl) {
    $learnMoreControl.addEventListener('click', function() {
      var $hiddenNews = document.querySelectorAll('article.media.is-hidden');
      var max = 3;
      if ($hiddenNews.length < 3) {
        max = $hiddenNews.length;
      }

      for (var i = 0; i < max; i++) {
        $hiddenNews[i].classList.remove('is-hidden');
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  function getFormData($form) {
    var form_map = {};
    if ($form) {
      var $input_fields = $form.getElementsByTagName("input");
      var $textareas = $form.getElementsByTagName("textarea");

      if ($input_fields.length > 0) {
        for (var i = 0; i < $input_fields.length; i++) {
          var $input_field = $input_fields[i];
          if ($input_field.type === 'text' || $input_field.type === 'tel' || $input_field.type === 'email') {
            form_map[$input_field.name] = $input_field.value;
          }
          else if ($input_field.type === 'checkbox') {
            form_map[$input_field.name] = $input_field.checked;
          }
        }
      }
      if ($textareas.length > 0) {
        for (var i = 0; i < $textareas.length; i++) {
          var $textarea = $textareas[i];
          form_map[$textarea.name] = $textarea.value;
        }
      }
    }
    return form_map;
  }

  function validateFormData(form_values_map, required_field_names) {
    var error_field_names = [];
    required_field_names.forEach(function(required_field_name) {
      if (form_values_map[required_field_name] === "" ||
          form_values_map[required_field_name] === undefined ||
          form_values_map[required_field_name] === false) {
        error_field_names.push(required_field_name);
      }
    });
    return error_field_names;
  }

  function showFormErrors($form, error_field_names) {
    if (!$form) return;

    error_field_names.forEach(function(error_field_name) {
      var $el = $form.querySelector("[name='" + error_field_name + "']");
      if ($el) {
        $el.classList.add("is-danger");
      }
    });
  }

  function buildJsonPostRequest(url, json_data, sheet_type) {
    var headers = new Headers({
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    });

    json_data['sheet_type'] = sheet_type;

    var init = {
      method: 'POST',
      headers: headers,
      cache: 'default',
      credentials: 'same-origin',
      body: JSON.stringify(json_data),
    };

    var req = new Request(url, init);

    return req;
  }

  var $volunteerButton = document.querySelector('#volunteer-submit');
  if ($volunteerButton) {
    $volunteerButton.addEventListener('click', function (e) {
      e.preventDefault();
      var $form = document.getElementById('volunteer-form');
      var form_values_map = getFormData($form);
      var handler_url = '/handler.php';
      var sheet_type = 'volunteer';

      var required_field_names = [
        'first_name',
        'last_name',
        'email',
        'telephone',
        'zip'
      ];

      var error_field_names = validateFormData(form_values_map, required_field_names);

      if (error_field_names.length > 0) {
        showFormErrors($form, error_field_names);
        return
      }
      else {
        $volunteerButton.disabled = true;
        var req = buildJsonPostRequest(handler_url, form_values_map, sheet_type);
        fetch(req)
        .then(response => {
          $volunteerButton.disabled = false;
          return response.json();
        })
        .then(data => {
          return data;
        })
        .catch(error => {
          $volunteerButton.disabled = false;
          return error;
        });
      }
    });
  }

  var $updateButton = document.querySelector('#update-submit');
  if ($updateButton) {
    $updateButton.addEventListener('click', function () {
      e.preventDefault();
      var $form = document.getElementById('update-form');
      var form_values_map = getFormData($form);
      var handler_url = '/handler.php';
      var sheet_type = 'update';

      var required_field_names = [
        'email',
        'zip'
      ];

      var error_field_names = validateFormData(form_values_map, required_field_names);

      if (error_field_names.length > 0) {
        showFormErrors($form, error_field_names);
        return
      }
      else {
        $updateButton.disabled = true;
        var req = buildJsonPostRequest(handler_url, form_values_map, sheet_type);
        fetch(req)
        .then(response => {
          $updateButton.disabled = false;
          return response.json();
        })
        .then(data => {
          return data;
        })
        .catch(error => {
          $updateButton.disabled = false;
          return error;
        });
      }
    });
  }
});

// Facebook
/*
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
*/

// Twitter
window.twttr = (function(d, s, id) {
    var js,
        fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};

    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));

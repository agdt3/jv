document.addEventListener('DOMContentLoaded', function () {
  /* NAVBAR */
  // Get all "navbar-burger" elements
  var $navbarBurger = document.querySelector('.navbar-burger');
  var $navbarMenu = document.querySelector('.navbar-menu');
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  var $navbarItems = document.querySelectorAll(".navbar-dropdown .navbar-item");

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(($el) => {
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

  if ($navbarItems.length >0) {
    $navbarItems.forEach(($navbarItem) => {
      $navbarItem.addEventListener("click", (e) => {
        if ($navbarBurger) {
          $navbarBurger.classList.toggle('is-active');
        }

        if ($navbarMenu) {
          $navbarMenu.classList.toggle('is-active');
        }
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
  var carousel = document.querySelector('.hero .carousel');

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
      var $currentItem = document.querySelector('.hero-image.active');
      var activeIndex = getCurrentIndex($currentItem);
      var $nextItem = getItemByIndex(activeIndex + 1, itemCount);
      transitionItem($currentItem, $nextItem);
     });
  }

  var $leftControl = document.querySelector('.carousel-left-control');
  if ($leftControl) {
    $leftControl.addEventListener('click', function() {

      var itemCount = document.querySelectorAll('.hero-image').length;
      var $currentItem = document.querySelector('.hero-image.active');
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

  // Start auto-rotate
  if (carousel) {
    setInterval(() => {
      var itemCount = document.querySelectorAll('.hero-image').length;
      var $currentItem = document.querySelector('.hero-image.active');
      var activeIndex = getCurrentIndex($currentItem);
      var $nextItem = getItemByIndex(activeIndex + 1, itemCount);
      transitionItem($currentItem, $nextItem);
    }, 5000);
  }
});

// Articles/Calendar
document.addEventListener('DOMContentLoaded', function () {
  var articleToggle = document.querySelector('.section-toggle.news-section-button');
  var calendarToggle = document.querySelector('.section-toggle.calendar-section-button');
  var articleSection = document.querySelector('.article-wrapper');
  var calendarSection = document.querySelector('.calendar-wrapper');

  if (articleToggle && calendarToggle) {
    articleToggle.addEventListener('click', () => {
      if (articleSection && calendarSection) {
        articleToggle.classList.add('active');
        calendarToggle.classList.remove('active');
        articleSection.classList.remove('is-hidden');
        calendarSection.classList.add('is-hidden');
      }
    });

    calendarToggle.addEventListener('click', () => {
      if (articleSection && calendarSection) {
        articleToggle.classList.remove('active');
        calendarToggle.classList.add('active');
        articleSection.classList.add('is-hidden');
        calendarSection.classList.remove('is-hidden');
      }
    });
  }
});

/* FORMS */
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
    $volunteerButtonText = $volunteerButton.querySelector('.button-text');
    $volunteerButtonSuccess = $volunteerButton.querySelector('.button-success');
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
        $volunteerButton.classList.add('is-loading');
        var req = buildJsonPostRequest(handler_url, form_values_map, sheet_type);
        fetch(req)
        .then(response => {
          $volunteerButton.classList.remove('is-loading');
          return response.json();
        })
        .then(data => {
          if (data.status > 200 && data.status < 300) {
            $volunteerButton.disabled = true;
            $volunteerButton.classList.add('is-success');
            $volunteerButton.classList.remove('is-warning');
            $volunteerButtonText.classList.add('is-hidden');
            $volunteerButtonSuccess.classList.remove('is-hidden');
          }
          else {
            $volunteerButton.disabled = false;
          }
          return data;
        })
        .catch(error => {
          $volunteerButton.disabled = false;
          $volunteerButton.classList.remove('is-loading');
          return error;
        });
      }
    });
  }

  var $updateButtons = document.querySelectorAll('#update-submit');
  if ($updateButtons.length > 0) {
    $updateButtons.forEach(($updateButton) => {
      $updateButtonText = $updateButton.querySelector('.button-text');
      $updateButtonSuccess = $updateButton.querySelector('.button-success');
      $updateButton.addEventListener('click', function(e) {
        e.preventDefault();
        var $form = $updateButton.parentElement.parentElement.parentElement.parentElement.querySelector("#update-form");
        var form_values_map = getFormData($form);
        var handler_url = '/handler.php';
        var sheet_type = 'updates';

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
          $updateButton.classList.add('is-loading');
          var req = buildJsonPostRequest(handler_url, form_values_map, sheet_type);
          fetch(req)
          .then(response => {
            $updateButton.classList.remove('is-loading');
            return response.json();
          })
          .then(data => {
            if (data.status > 200 && data.status < 300) {
              $updateButton.disabled = true;
              $updateButton.classList.add('is-success');
              $updateButton.classList.remove('is-warning');
              $updateButtonText.classList.add('is-hidden');
              $updateButtonSuccess.classList.remove('is-hidden');
            }
            else {
              $updateButton.disabled = false;
            }
            return data;
          })
          .catch(error => {
            $updateButton.disabled = false;
            $updateButton.classList.remove('is-loading');
            return error;
          });
        }
      });
    });
  }

  var $endorsementButton = document.querySelector('#endorsement-submit');
  if ($endorsementButton) {
    $endorsementButtonText = $endorsementButton.querySelector('.button-text');
    $endorsementButtonSuccess = $endorsementButton.querySelector('.button-success');
    $endorsementButton.addEventListener('click', function(e) {
      e.preventDefault();
      var $form = $endorsementButton.parentElement.parentElement.parentElement.parentElement.querySelector("#endorsement-form");
      var form_values_map = getFormData($form);
      var handler_url = '/handler.php';
      var sheet_type = 'endorsements';

      var required_field_names = [
        'first_name',
        'last_name',
        'email'
      ];

      var error_field_names = validateFormData(form_values_map, required_field_names);

      if (error_field_names.length > 0) {
        showFormErrors($form, error_field_names);
        return
      }
      else {
        $endorsementButton.disabled = true;
        $endorsementButton.classList.add('is-loading');
        var req = buildJsonPostRequest(handler_url, form_values_map, sheet_type);
        fetch(req)
        .then(response => {
          $endorsementButton.classList.remove('is-loading');
          return response.json();
        })
        .then(data => {
          if (data.status > 200 && data.status < 300) {
            $endorsementButton.disabled = true;
            $endorsementButton.classList.add('is-success');
            $endorsementButton.classList.remove('is-warning');
            $endorsementButtonText.classList.add('is-hidden');
            $endorsementButtonSuccess.classList.remove('is-hidden');
          }
          else {
            $endorsementButton.disabled = false;
          }
          return data;
        })
        .catch(error => {
          $endorsementButton.classList.remove('is-loading');
          return error;
        });
      }
    });
  }
});

/* LOAD ENDORSEMENT AND SUPPORTERS */
document.addEventListener('DOMContentLoaded', function () {
  var $supportersContainer = document.querySelector(".supporters-list-container");
  var $endorsementsContainer = document.querySelector(".endorsements-list-container");

  function buildJsonGetRequest(url, sheet_type) {
    var headers = new Headers({
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    });

    url = url + "?sheet_type=" + sheet_type;

    var init = {
      method: 'GET',
      headers: headers,
      cache: 'default',
      credentials: 'same-origin',
    };

    var req = new Request(url, init);

    return req;
  }

  function populateSupporters(data) {
    if ($supportersContainer && data.message.values) {
      var rows = data.message.values;
      var html = "<ul>";
      for (var i = 1; i < rows.length; i++) {
        var first_name = rows[i][0];
        var last_name = rows[i][1];
        var position = rows[i][2];

        html += "<li>" + first_name + " " + last_name + ", " + position + "</li>";
      }
      html += "</ul>";
      $supportersContainer.innerHTML = html;
    }
  }

  function populateEndorsements(data) {
    if ($endorsementsContainer && data.message.values) {
      var rows = data.message.values;
      var html = "<ul>";
      for (var i = 1; i < rows.length; i++) {
        var first_name = rows[i][0];
        var last_name = rows[i][1];
        var endorsement = rows[i][3];
        var valid = rows[i][4];

        if (valid !== "TRUE") continue;

        html += "<li>";
        html += "<q>" + endorsement + "</q>";
        html += "<p>" + "-" + first_name + " " + last_name + "</p>";
        html += "</li>";
      }
      html += "</ul>";
      $endorsementsContainer.innerHTML = html;
    }
  }

  if ($supportersContainer) {
    var sheet_type = 'supporters';
    var handler_url = '/handler.php';

    var req = buildJsonGetRequest(handler_url, sheet_type);
    fetch(req)
      .then(response => {
        return response.json();
      })
      .then(data => {
        populateSupporters(data);
      })
      .catch(error => {
        return error;
      });
  }

  if ($endorsementsContainer) {
    var sheet_type = 'endorsements';
    var handler_url = '/handler.php';

    var req = buildJsonGetRequest(handler_url, sheet_type);
    fetch(req)
      .then(response => {
        return response.json();
      })
      .then(data => {
        populateEndorsements(data);
      })
      .catch(error => {
        return error;
      });
  }
});

// Facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

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

document.addEventListener('DOMContentLoaded', function () {

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

  function getCurrentIndex($item) {
    return parseInt($item.dataset.index);
  }

  function getItemByIndex(index) {
    return document.querySelector(".hero-image[data-index='" + index + "']");
  }

  var $rightControl = document.querySelector(".carousel-right-control");
  $rightControl.addEventListener('click', function() {
    var $currentItem = document.querySelector('.active');
    var activeIndex = getCurrentIndex($currentItem);
    var $nextItem = getItemByIndex(activeIndex + 1);
    console.log($nextItem);
  });

  var $leftControl = document.querySelector(".carousel-left-control");
  $leftControl.addEventListener('click', function() {
    console.log("fdsa");
  });

});

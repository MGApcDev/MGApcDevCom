jQuery(document).ready(function ($) {
  // Taken from Medium article @(https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c#.yd0v5h41r)
  // Hide Header on on scroll down
  var didScroll;

  var lastScrollTop = 0;
  var delta = 5;
  $nav = $('nav#block-mgapcdev-mainnavigation');
  var navbarHeight = $nav.outerHeight();

  // on scroll, let the interval function know the user has scrolled
  $(window).scroll(function (event) {
    didScroll = true;
  });
  // run hasScrolled() and reset didScroll status
  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);
  function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta) {
      return;
    }
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $nav.removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $nav.removeClass('nav-up').addClass('nav-down');
      }
    }
    lastScrollTop = st;
  }
  $('.nav-burger').click(function () {
    $('.navbar-nav').toggleClass('closed');
  });
  
  
  // Android emote
  
  // Get id of random image
  function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
  }
  var id = getRandomInt(1, 42); // <-- needs to be changed on a regular basis, until better solution is found.
  $('.android-emote').append('<img onload="this.style.opacity=' + 1 + ';" src="/giffy/droid-' + id + '.gif" >').css('opacity', '1');
  $('.android-emote img').load(function () {
    $('.android-emote .spinner').addClass('fade-background-svg');
  });
  
  // Initalize github widget @(https://github.com/caseyscarborough/github-activity)
  var clientId = drupalSettings.mgapcdev.github.clientId;
  var clientSecret = drupalSettings.mgapcdev.github.clientSecret;
  
  GitHubActivity.feed({
    username: "MGApcDev",
    selector: "#github-widget",
    limit: 6,
    clientId: clientId,
    clientSecret: clientSecret,
  });
  
  // Twitter widget hack, remove photos from being displayed, 
  // full credit to @(https://twittercommunity.com/t/auto-expand-photos-always-on-for-embedded-timeline/62510/28)
  jQuery('.layout-content').on('DOMSubtreeModified propertychange',"#twitter-widget-0", function() {
      jQuery(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
      jQuery(".twitter-block").css("height", "100%");
  });
});
(function () {
  function ready(fn) {
    if (document.readyState !== "loading") {
      fn();
    } else {
      document.addEventListener("DOMContentLoaded", fn);
    }
  }

  ready(function () {
    var menuToggle = document.getElementById("menuToggle");
    var menuClose = document.getElementById("menuClose");
    var megaMenu = document.getElementById("megaMenu");

    if (menuToggle && menuClose && megaMenu) {
      menuToggle.addEventListener("click", function () {
        megaMenu.classList.add("open");
        megaMenu.setAttribute("aria-hidden", "false");
        menuToggle.setAttribute("aria-expanded", "true");
      });

      menuClose.addEventListener("click", function () {
        megaMenu.classList.remove("open");
        megaMenu.setAttribute("aria-hidden", "true");
        menuToggle.setAttribute("aria-expanded", "false");
      });
    }

    document.querySelectorAll("[data-scroll-top]").forEach(function (button) {
      button.addEventListener("click", function (event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    });

    var productSlider = document.querySelector(".productSlider");
    var productThumbs = document.querySelector(".productThumbs");

    if (window.Swiper && productSlider && productThumbs) {
      var thumbs = new Swiper(".productThumbs", {
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesProgress: true
      });

      new Swiper(".productSlider", {
        loop: false,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        thumbs: {
          swiper: thumbs
        }
      });
    }

    var videoPopup = document.getElementById("heroVideoPopup");
    var videoPlayer = videoPopup ? videoPopup.querySelector("[data-video-popup-player]") : null;
    var videoSource = videoPopup ? videoPopup.querySelector("[data-video-popup-source]") : null;
    var videoEmptyState = videoPopup ? videoPopup.querySelector("[data-video-popup-empty]") : null;
    var videoTrigger = document.querySelector("[data-video-popup-trigger]");
    var videoCloseControls = videoPopup ? videoPopup.querySelectorAll("[data-video-popup-close]") : [];
    var previousActiveElement = null;

    function closeVideoPopup() {
      if (!videoPopup || !videoPlayer || !videoSource) {
        return;
      }

      videoPopup.classList.remove("is-open");
      videoPopup.classList.remove("is-empty");
      videoPopup.setAttribute("aria-hidden", "true");
      document.body.classList.remove("video-popup-open");
      videoPlayer.pause();
      videoSource.setAttribute("src", "");
      videoPlayer.load();

      if (previousActiveElement) {
        previousActiveElement.focus();
        previousActiveElement = null;
      }
    }

    function openVideoPopup(trigger) {
      if (!videoPopup || !videoPlayer || !videoSource || !trigger) {
        return;
      }

      var videoUrl = trigger.getAttribute("data-video-url");

      previousActiveElement = trigger;
      videoPopup.classList.add("is-open");
      videoPopup.setAttribute("aria-hidden", "false");
      document.body.classList.add("video-popup-open");

      if (videoUrl) {
        videoPopup.classList.remove("is-empty");
        if (videoEmptyState) {
          videoEmptyState.hidden = true;
        }
        videoPlayer.hidden = false;
        videoSource.setAttribute("src", videoUrl);
        videoPlayer.load();
        videoPlayer.play().catch(function () {});
      } else {
        videoPopup.classList.add("is-empty");
        if (videoEmptyState) {
          videoEmptyState.hidden = false;
        }
        videoPlayer.hidden = true;
      }

      var closeButton = videoPopup.querySelector(".hero-video-popup__close");
      if (closeButton) {
        closeButton.focus();
      }
    }

    if (videoTrigger && videoPopup && videoPlayer && videoSource) {
      videoTrigger.addEventListener("click", function () {
        openVideoPopup(videoTrigger);
      });

      videoCloseControls.forEach(function (control) {
        control.addEventListener("click", closeVideoPopup);
      });

      document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && videoPopup.classList.contains("is-open")) {
          closeVideoPopup();
        }
      });
    }
  });
})();

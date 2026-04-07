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
    var megaMenu = document.getElementById("megaMenu");

    if (menuToggle && megaMenu) {
      var menuToggleIcon = menuToggle.querySelector("i");

      function setMenuState(isOpen) {
        megaMenu.classList.toggle("open", isOpen);
        megaMenu.setAttribute("aria-hidden", isOpen ? "false" : "true");
        menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
        menuToggle.setAttribute("aria-label", isOpen ? menuToggle.dataset.closeLabel : menuToggle.dataset.openLabel);
        menuToggle.classList.toggle("is-open", isOpen);

        if (menuToggleIcon) {
          menuToggleIcon.classList.toggle("bi-list", !isOpen);
          menuToggleIcon.classList.toggle("bi-x", isOpen);
        }
      }

      menuToggle.addEventListener("click", function () {
        setMenuState(!megaMenu.classList.contains("open"));
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

window.addEventListener("DOMContentLoaded", function () {
  "use strict";
  /*jshint -W007 */

  //Privacy policy

  let privacyOpen = document.querySelectorAll(".privacy a"),
    confid = document.querySelector(".confid"),
    privacyCloseBtn = document.querySelectorAll(".confid__back");

  privacyOpen.forEach(function (item) {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      confid.style.display = "block";
    });
  });

  privacyCloseBtn.forEach(function (item) {
    item.addEventListener("click", function () {
      confid.style.display = "none";
    });
  });

  // Slider

  let slideIndex = 1,
    slides = document.querySelectorAll(".slider__img"),
    descriptions = document.querySelectorAll(".slider__descr-item"),
    prev = document.querySelector(".slider__prev"),
    next = document.querySelector(".slider__next"),
    dotsWrap = document.querySelector(".slider__dots"),
    dots = document.querySelectorAll(".slider__dot");

  showSlides(slideIndex);
  function showSlides(n) {
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }

    slides.forEach((item) => (item.style.display = "none"));
    descriptions.forEach((item) => (item.style.display = "none"));
    dots.forEach((item) => item.classList.remove("slider__dot_active"));

    slides[slideIndex - 1].style.display = "block";
    descriptions[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("slider__dot_active");
  }

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  function currentSlide(n) {
    showSlides((slideIndex = n));
  }

  prev.addEventListener("click", function () {
    plusSlides(-1);
  });

  next.addEventListener("click", function () {
    plusSlides(1);
  });

  dotsWrap.addEventListener("click", function (event) {
    for (let i = 0; i < dots.length + 1; i++) {
      if (
        event.target.classList.contains("slider__dot") &&
        event.target == dots[i - 1]
      ) {
        currentSlide(i);
      }
    }
  });

  //Phone mask

  $("input[name='phone']").mask("+7 (999) 999-99-99");

  //Send email

  let form = document.querySelectorAll(".form"),
    input = document.querySelectorAll("input[name=phone]"),
    thanks = document.querySelector(".thanks");

  form.forEach(function (formItem) {
    formItem.addEventListener("submit", function (event) {
      event.preventDefault();
      let formData = new FormData(formItem);

      function postData(data) {
        let request = new XMLHttpRequest();
        request.open("POST", "mailer/smart.php");

        request.addEventListener("readystatechange", function () {
          if (request.readyState === 4 && request.status == 200) {
            thanks.style.display = "block";
          }
        });

        request.send(data);
      }

      function clearInput() {
        for (let x = 0; x < input.length; x++) {
          input[x].value = "";
        }
      }

      postData(formData);
      clearInput();
    });
  });

  //Thanks close

  let thanksClose = document.querySelector(".thanks__close");

  thanksClose.addEventListener("click", function () {
    thanks.style.display = "none";
  });
});

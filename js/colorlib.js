function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$(function () {
  $(".multiple-items").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    touchThreshold: 0,
    touchMove: false,
  });
});

$(function () {
  $(".s-multiple-items").slick({
    infinite: false,
    centerMode: true,
    centerPadding: "300px",
    prevArrow: '<button type="button" class="slick-prev">Prev</button>',
    touchThreshold: 0,
    touchMove: false,
    dots: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
          slidesToShow: 1,
        },
      },
    ],
  });
});

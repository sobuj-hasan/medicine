
function togglepopup(){
  document.getElementById("popup-1").classList.toggle("active");
}



$('.sec-6-dgn').slick({
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 1000,
  centerPadding: '60px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


$(document).ready(function(){
$('.slick-track').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 350,
  slidesToShow:3,
  slidesToScroll:3,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow:1,
        slidesToScroll: 1,
        infinite: true,
        dots:  false
		
      }
    }
  ]
});
});



$(document).ready(function(){
$('.slick-track1').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  speed: 350,
  slidesToShow:1,
  slidesToScroll:1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow:1,
        slidesToScroll: 1,
        infinite: true,
        dots:  false
		
      }
    }
  ]
});
});
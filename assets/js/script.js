
$('.brand-carousel').slick({
	arrows:false,
	autoplay:true,
	slidesToShow:6,
	slidesToScroll:1,
	rtl:true,
	 responsive: [
{
  breakpoint: 800,
  settings: {
    slidesToShow: 4,
    slidesToScroll: 1
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 1
  }
}
]});

  //Check to see if the window is top if not then display button
$(window).scroll(function(){
    if ($(this).scrollTop() > 200) {
        $('.back2top').fadeIn();
    } else {
        $('.back2top').fadeOut();
    }
});

//Click event to scroll to top
$('.back2top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
});
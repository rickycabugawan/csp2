/*---brand carousel --------------*/

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

/*----------back2top button---------*/

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

/*-------price range slider----------*/

var slider = $('#price-slider')[0];

if (slider) {
  noUiSlider.create(slider, {
    start: [ 0, 1000 ],
    step: 1,
    range: {
      'min': [  0 ],
      'max': [ 1000 ]
    }
  });
}

/*------price range input boxes-----------*/

priceMin = $('#min-price');
priceMax = $('#max-price');
slider = document.getElementById('price-slider');

slider.noUiSlider.on('update', function( values, handle ) {
  // console.log(values[handle]);
  priceMin.val(Math.round(slider.noUiSlider.get()[0]));
  priceMax.val(Math.round(slider.noUiSlider.get()[1]));
});

priceMin.change(function(){
  slider.noUiSlider.set(priceMin.val());
});

priceMax.change(function(){
  slider.noUiSlider.set(priceMax.val());
});


/*-----------filter accordion--------------*/
$('.toggle').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        // $this.parent().parent().find('li .inner').removeClass('show');
        // $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
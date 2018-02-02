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

var priceMin = $('#min-price').val();
var priceMax = $('#max-price').val();

if(priceMin == ""){
  priceMin = 0;
}

if(priceMax == ""){
  priceMax = 50000;
}


if (slider) {
  noUiSlider.create(slider, {
    start: [ priceMin, priceMax ],
    step: 1,
    range: {
      'min': [  0 ],
      'max': [ 50000 ]
    }
  });
}

/*------price range input boxes-----------*/

priceMin = $('#min-price');
priceMax = $('#max-price');

if (slider) {
  // slider = document.getElementById('price-slider');
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

}

if (slider) {
  $('#min-price,#max-price').on("input",function(){
    $("#price-slider")[0].noUiSlider.set([priceMin.val(),priceMax.val()]);
  });
  
}


/*---------shop-filter-------*/



// $("#price-slider")[0].noUiSlider.on('change',function() {
//   // console.log('hello')
//    min_price = $("#price-slider")[0].noUiSlider.get()[0];
//    max_price = $("#price-slider")[0].noUiSlider.get()[1];

//    console.log("Min price:" + min_price + "\nMax price:" + max_price );
// });

// $("input[name='os[]']").change(function() {
// var osFilters = $("input[name='os[]']:checked").map(function() {
//     return this.value;
// }).get().join(', ');
// console.log("OS:"+ osFilters);
// });

// $("input[name='manufacturer[]']").change(function() {
// var manufacturerFilters = $("input[name='manufacturer[]']:checked").map(function() {
//     return this.value;
// }).get().join(', ');
// console.log("Manufacturer:" + manufacturerFilters);
// });

// $('.sumbitFilter').click(function(){
//   $('.filterForms').submit();
// })


/*----------shop-sort-------*/

$('.sortby').change(function () {

  var url = new URL(window.location.href);

      url.searchParams.set('sortby',$('.sortby').val());
      window.location.href = url;

})

$('.page').change(function () {

  var url = new URL(window.location.href);

      url.searchParams.set('page',$('.page').val());
      url.searchParams.set('p',1);
      window.location.href = url;

})

$('.p').change(function () {

  var url = new URL(window.location.href);

      url.searchParams.set('p',$('.p').val());
      window.location.href = url;

})


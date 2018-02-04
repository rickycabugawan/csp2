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
        $('.basket-back2top').fadeIn();
    } else {
        $('.back2top').fadeOut();
        $('.basket-back2top').fadeOut();
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


/*---------search-box-------*/
function hideAutocomplete() {
  $('.search-bar').val("");
  $('.auto-complete').slideUp();

  setTimeout(function(){$('.search-bar').removeClass('search-bar-active')},400);
  setTimeout(function(){$('.search-bar-btn').removeClass('search-bar-btn-active')},400);
 } 

$('.search-bar').on('keyup',function () {
  console.log($('.search-bar').val())
  var keyWord = $('.search-bar').val();
  if (keyWord == 0){hideAutocomplete();}

  else {
    $('.search-bar').addClass('search-bar-active');
    $('.search-bar-btn').addClass('search-bar-btn-active');
    $('.auto-complete').slideDown();

    $.post('item-searcher.php',{
                keyword : keyWord,
            },function(data){
  
            $('.auto-complete').html(data);
            })
  }
});


$('.search-bar').blur(hideAutocomplete);



/*----------shop-sorter-------*/

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



/*------cart buttons ---------*/

$(document).on('click','.reload',function(){
            var cartindex = $(this).data('index');
            var max = $(this).data('max');
            var quantity = $('#'+cartindex).val();

            $('.alert-text').html(" Success: You have modified your shopping cart.")

            $.post('changequantity.php',{
                max : max,
                cartindex : cartindex,
                quantity : quantity
            },function(data){
            // console.log(quantity);
            $('.success-add').hide().slideDown()
            // $('.success-add').slideDown();
            setTimeout(function(){  $('.success-add').fadeOut(); }, 3000);
            $(".cart-container").load(window.location.href+" .cart-container");
            $(".shopping-cart").load(window.location.href+" .shopping-cart");
            })

            // $(".cart-container").load(location.href+" .cart-container>*","");
            // $(".shopping-cart").load(location.href+" .shopping-cart>*","");




        });


$(document).on('click','.trash',function(){
            var cartindex = $(this).data('index');

            $('.alert-text').html(" Success: You have modified your shopping cart.")
             
            $.post('deleteitemcart.php',{
                cartindex : cartindex,
            },function(data){
            // console.log(quantity);
            $('.success-add').hide().slideDown();
            // $('.success-add').slideDown();
            setTimeout(function(){  $('.success-add').fadeOut(); }, 2000);
            $(".cart-container").load(window.location.href+" .cart-container");
            $(".shopping-cart").load(window.location.href+" .shopping-cart");


          })

            // $(".cart-container").load(location.href+" .cart-container>*","");
            // $(".shopping-cart").load(location.href+" .shopping-cart>*","");

        })

    

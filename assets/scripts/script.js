// init Isotope
var $grid = $('.grid').isotope();

// filter items on button click
$filters = $('.filter-button-group').on('click', 'button', function(){

  var filterValue = $(this).attr('data-filter');
  var filterValue;

  if ($(this).is('.is-checked')){
    // uncheck
    filterValue = '*';
  } else{
    filterValue = $(this).attr('data-filter');
    $filters.find('.is-checked').removeClass('is-checked');
  }

  $(this).toggleClass('is-checked');    
  $grid.isotope({ filter: filterValue });
});

// collapse mobile navbar when click
$(document).on('click','.navbar-collapse.in',function(e) {
  if( $(e.target).is('a:not(".dropdown-toggle")') ) {
      $(this).collapse('hide');
  }
});

$(document).ready(function(){

  // Scroll to section
  $('.nav-link').click(function(){    
    var divId = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(divId).offset().top - 145
    }, 500);
  });

  //Slick-carousel config
  $('.carousel-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.carousel'
  });

  $('.carousel').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.carousel-for',
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      }
    ]
  });



  $('form').submit(function(e){
    e.preventDefault();
    var name = $()
  });

});

$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

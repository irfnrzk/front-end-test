$(document).ready(function(){
  
  // Collapse mobile navbar when click
  $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a:not(".dropdown-toggle")') ) {
        $(this).collapse('hide');
    }
  });

  // Scroll to section
  $('.nav-link').click(function(){    
    var divId = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(divId).offset().top - 145
    }, 500);
  });

  // Slick-carousel config
  $('.carousel-top').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.carousel-bottom'
  });

  $('.carousel-bottom').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.carousel-top',
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

  // Bootstrap datepicker init
  $(".datepicker").datepicker({ 
    autoclose: true, 
    todayHighlight: true
  }).datepicker('update', new Date());

  $('.datepicker').click(function(){
    var popup =$(this).offset();
    var popupTop = popup.top - 40;
    $('.ui-datepicker').css({
      'top' : popupTop
    });
  });

  // Ajax form submission
  $('form').submit(function(e){
    event.preventDefault();
    var email = $('#form-email').val();
    var date = $("#form-date").val();
    var country = $('#countryselect').val();
    var submit = $('#form-submit').val();

    $('.form-message').load('mail.php', {
      email: email,
      submit: submit,
      date: date,
      country: country
    });

  });    
});

// init Isotope
var $grid = $('.grid');
$grid.isotope();

// filter items on button click
$filters = $('.filter-li-group').on('click', 'li', function(){
  
  var filterValue = "[data-state='"+$(this).attr('data-filter')+"']";
  var filterValue;
  
  if ($(this).is('.is-checked')){
    // uncheck
    filterValue = "";
  } else {
    filterValue = "[data-state='"+$(this).attr('data-filter')+"']";
    $filters.find('.is-checked').removeClass('is-checked');
  }
  
  $(this).toggleClass('is-checked');    
  $grid.isotope({ 
    itemSelector: '[data-state]',
    filter: filterValue });
  //$grid.isotope({ filter: filterValue }); 

  // display message if search is empty
  if ( !$grid.data('isotope').filteredItems.length ) {
    $('.message-div').fadeIn('slow');
  } else {
    $('.message-div').fadeOut('fast');
  };
});
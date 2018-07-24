// init Isotope
var $grid = $('.grid');
$grid.isotope();

// filter items on button click
$filters = $('.filter-li-group').on('click', 'li', function(){
  
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

  if ( !$grid.data('isotope').filteredItems.length ) {
    console.log('no');
    $('.message-div').fadeIn('slow');
  } else {
    $('.message-div').fadeOut('fast');
  };

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



  // $('form').submit(function(e){
  //   e.preventDefault();
  //   var name = $()
  // });

  // $('#submit').click(function() {
  //   var sEmail = $('#form_email').val();
  //   // Checking Empty Fields
  //   if ($.trim(sEmail).length == 0 ) {
  //     alert('All fields are mandatory');
  //     e.preventDefault();
  //   }
  //   if (validateEmail(sEmail)) {
  //   alert('Nice!! your Email is valid, now you can continue..');
  //   }
  //   else {
  //     alert('Invalid Email Address');
  //     e.preventDefault();
  //     }
  //   });
  //   // Function that validates email address through a regular expression.
    
});
  
// function validateEmail(sEmail) {
//   var filter = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
//   if (filter.test(sEmail)) {
//     return true;
//   } else {
//     return false;
//   }
// }

$(function () {
  $(".datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

// var data = {
//   email: $("#form_email").val(),
//   date: $("#form_date").val(),
//   //country: $("#countryselect").val(data.country)
// };

// $.ajax({
//   type: "POST",
//   url: "form_process.php",
//   data: data,
//   success: function(){
//       //$('.success').fadeIn(1000);
//   }
// });
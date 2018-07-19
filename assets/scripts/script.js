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
  
});
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  
</head>
<body>

  <?php
    // Read JSON file
    $json = file_get_contents('stores.json');

    // Decode JSON
    $stores = json_decode($json);
  ?>

  <?php foreach($stores as $store){  
      $result[$store->state] = null;
    } 
    $values = array_keys($result);
  ?>

  <div class="button-group filter-button-group">
    <?php foreach($values as $value) : ?>  
      <button data-filter=".<?= $store->state; ?>"><?= $value; ?></button>
    <?php endforeach; ?>
  </div>
    
  <ul class="grid">  
    <?php foreach ($stores as $store) : ?>
      <?php if ($store->status == true) { ?>
        <li class="<?= $store->state; ?>"><?= $store->state; ?></li>
      <?php } ?>    
    <?php endforeach; ?>
  </ul>


  <script>
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


  
  </script>



  
</body>
</html>
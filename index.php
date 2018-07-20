<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> 
<!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lion Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bower_components/featherlight/src/featherlight.css">
    <link rel="stylesheet" href="/bower_components/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/bower_components/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="dist/css/style.css">
    
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>  

  </head>
  <body>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <a class="navbar-brand-link" href="javascript:void(0);" title="Lion&amp;Lion"><img src="/assets/images/header-logo.png" alt="Lion&amp;Lion"></a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="#photos">Photos</a></li>
            <li><a class="nav-link" href="#blog">Blog</a></li>
            <li><a class="nav-link" href="#">Form</a></li>
            <li><a class="nav-link" href="#">Places</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container">        
        <a href="#" class="btn-lightbox" data-featherlight="#instructions">+instructions</a>
        <div class="lightbox" id="instructions">
          <p><strong>The task:</strong><br/>Using stores.json file and lion-test.psd (as the mock up):</p>
          <ul>
            <li>Implementation of the mockup as a full responsive template;</li>
            <li>Header should be fixed and links take you the sections of the page via scroll;</li>
            <li>A lightbox should be used to see the "instructions";</li>
            <li>The form should have validation;</li>
          </ul>
          <p><strong>For the places section, take this into account:</strong><br/></p>
          <ul>
            <li>Show all the stores, only which their "status" is set to "true", into rows of 3;</li>
            <li>Display unique "state" values as filters, at the top of the page (Note: must be done dynamically - do not hard code this);</li>
            <li>Implement filtering functionality on the state values, in which the stores of the same state as the filter, are loaded upon click [example: We have "California" shown as a state and hence a filter at the top of the page, once it is clicked, only the stores which their state is California are to be displayed];</li>
            <li>Whenever a filter is clicked for a second time (unselected), show all the valid stores again ("status":"true").</li>
          </ul>
        </div>

        <section id="photos">
          <h2 class="text-large text-bold title-section">Photos</h2>          
          <div class="section-container">
            <div class="carousel-container">
              <div class="carousel-for">
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
                <div><img src="http://via.placeholder.com/900x260"></div>
              </div>
              <div class="carousel">
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
                <div><img src="http://via.placeholder.com/350x150"></div>
              </div>
            </div>
          </div>         
        </section>

        <section id="blog">
          <h2 class="text-large text-bold title-section">Blog</h2>
          <div class="row">            
            <div class="col-sm-4">
              <div class="box-container">
                <a href="javascript:void(0);" class="image-container">
                  <img src="http://via.placeholder.com/300x100">
                </a>
                <div class="text-container">
                  <a href="javascript:void(0);" class="text-small text-grey text-link">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id sem nec nisl condimentum viverra a et velit. Donec eu tortor mi. Aliquam erat volutpat.</a>
                </div>
              </div>
            </div>            
            <div class="col-sm-4">
              <div class="box-container">
                <a href="javascript:void(0);" class="image-container">
                  <img src="http://via.placeholder.com/300x100">
                </a>
                <div class="text-container">
                  <a href="javascript:void(0);" class="text-small text-grey text-link">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id sem nec nisl condimentum viverra a et velit. Donec eu tortor mi. Aliquam erat volutpat.</a>
                </div>
              </div>
            </div>            
            <div class="col-sm-4">
              <div class="box-container">
                <a href="javascript:void(0);" class="image-container">
                  <img src="http://via.placeholder.com/300x100">
                </a>
                <div class="text-container">
                  <a href="javascript:void(0);" class="text-small text-grey text-link">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id sem nec nisl condimentum viverra a et velit. Donec eu tortor mi. Aliquam erat volutpat.</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        
        
        
        
        <?php
          // Read JSON file
          $json = file_get_contents('stores.json');
          // Decode JSON
          $stores = json_decode($json);
          ?>

        <?php foreach($stores as $store){  
          // Store unique "State" filters
          $result[$store->state] = null;
        } 
        $values = array_keys($result);
        ?>

        <div class="button-group filter-button-group">
          <?php foreach($values as $value) : ?>  
          <button data-filter=".<?= $value; ?>"><?= $value; ?></button>
          <?php endforeach; ?>
        </div>
        
        <ul class="grid">  
          <?php foreach ($stores as $store) : ?>
          <?php if (!$store->status == false) { ?>
            <li class="<?= $store->state; ?>"><?= $store->state; ?></li>
          <?php } ?>    
          <?php endforeach; ?>
        </ul>
          
      </div>
    </main>
      
      
      <script src="/bower_components/jquery-smooth-scrolling/jquery.smoothscroll.min.js"></script>
      <script src="/bower_components/jquery-migrate/jquery-migrate.min.js"></script>
      <script src="/bower_components/featherlight/release/featherlight.min.js"></script>
      <script src="/bower_components/slick-carousel/slick/slick.min.js"></script>
      <script src="/bower_components/isotope-layout/dist/isotope.pkgd.min.js"></script>
      <script src="/assets/scripts/script.js"></script>
  </body>
</html>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" rel="icon" href="favicon.ico" />
    <title>Lion Test</title>
    <link rel="stylesheet" href="dist/css/stylesheet.css">    
    
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
            <!-- <a class="navbar-brand-link" href="javascript:void(0);" title="Lion&amp;Lion"><img src="/assets/images/header-logo.png" alt="Lion&amp;Lion"></a> -->
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="#photos">Photos</a></li>
            <li><a class="nav-link" href="#blog">Blog</a></li>
            <li><a class="nav-link" href="#form-submission">Form</a></li>
            <li><a class="nav-link" href="#places">Places</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container">        
        <a href="#" class="btn-lightbox" data-featherlight="#instructions">+instructions</a>
        <div class="lightbox" id="instructions">
          <div class="container">
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
      </div>
        
      <section id="photos">
        <h2 class="text-large text-bold title-section">Photos</h2>          
        <div class="section-container">
          <div class="carousel-container">
            <div class="carousel-top hidden-xs">
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
              <div><img src="http://via.placeholder.com/900x260"></div>
            </div>
            <div class="carousel-bottom">
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

      <section id="form-submission">
        <h2 class="text-large text-bold title-section">Form</h2>   
        <span class="text-small text-grey">The fields with * are obligatory.</span>
        <form method="POST" action="mail.php">
          <div class="input-group">
            <label>*E-mail:</label>
            <input id="form-email" class="form-control" type="text" name="email" placeholder="Email">
          </div>
          <div class="input-group date datepicker" data-date-format="mm-dd-yyyy">
            <label>*Date:</label>
            <input id="form-date" class="form-control" type="text" name="date">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          </div>
          <div class="input-group">
            <label>*Country:</label>
            <select id="countryselect" class="form-control" name="country">
              <option value="Malaysia">Malaysia</option>
              <option value="Singapore">Singapore</option>
              <option value="Indonesia">Indonesia</option>
            </select>
          </div>
          <button id="form-submit" class="btn-lightbox" name="submit" type="submit" value="Send">Send</button>
          <p class="form-message"></p>
        </form>       
      </section>

      <section id="places">
        <h2 class="text-large text-bold title-section">Places</h2>
        <?php include('places.php'); ?>
        <ul class="list-nostyle filter-li-group">
          <?php foreach($values as $value) : ?>
            <li class="text-small text-bold" data-filter="<?= $value; ?>"><?= $value; ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="grid">  
          <?php foreach ($stores as $store) : ?>
            <?php if (!$store->status == false) { ?>
              <div class="col-xs-12 col-sm-4 zero-pad" data-state="<?= $store->state; ?>">
                <div class="box-filter">
                  <figure class="image-container">
                    <img src="<?= $store->image; ?>" alt="">
                  </figure>
                  <div class="text-container text-container-top">
                    <span class="text-small text-bold"><?= $store->name; ?></span>
                    <address><?= $store->address; ?><br><?= $store->state; ?></address>
                    <span class="text-small text-bold">Operating Hours</span>
                    <span class="text-small"><?= $store->operation_hours; ?></span>
                  </div>
                  <div class="text-container text-container-bottom">
                    <span class="text-small text-bold">Telephone</span>
                    <span class="text-small"><?= $store->phone; ?></span>
                  </div>
                  <a href="https://maps.google.com/?q=<?= $store->address; ?> <?= $store->state; ?>" target="_blank" class="box-filter-link text-bold text-small">Get Directions</a>                  
                </div>
              </div>
            <?php } ?>    
          <?php endforeach; ?>
        </div>
        <div class="message-div">
          <span>Sorry, the place you're looking for is currently not available. Check again soon!</span>
        </div>
      </section>    
    </main>

    <footer>
      <div class="container">
        <img src="/assets/images/footer-logo.png" alt="Lion&amp;Lion">
        <address>
          Suite 17-1, Hampshire Place,<br>
          No.1, Jalan Mayang Sari,<br>
          50450, Kuala Lumpur Malaysia<br>
          E: <a href="mailto:info@lionandlion.com" target="_blank">info@lionandlion.com</a><br>
          T: <a href="tel:+60327800950" target="_blank">+60327800950</a>
        </address>
      </div>
    </footer>

    <script src="/dist/js/bundle-min.js"></script>
  </body>
</html>
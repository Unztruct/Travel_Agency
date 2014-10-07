<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="travel_agency.css">
        <meta charset="UTF-8">
        <title>TravelAgency</title>
        
    </head>
    <body>
        <div id="wrapper">
        
        <?php
        // put your code here
        ?>
        
         
        
        
            <h1 id="title">INSERT TITLE</h1>
          
            
            
            <nav  class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li class="active"><a href="#">Menue</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
        <form id="searchbar" class="nav navbar-nav navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <!--<button type="submit" class="btn  btn-default">Submit</button>-->
      </form>
      <button type="Submit" class="btn  btn-default">Sub the mit</button>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
            
            <!--End of navbar-->      
            
            
            <div id="slideshow">
            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="Bilder/rsz_exotic1.jpg" alt="bild1">
      <div class="carousel-caption">
          
          
          
          <h2>Assorted Title1</h2>
      </div>
    </div>
    <div class="item">
        <img src="Bilder/rsz_exotic2.jpg" alt="bild2">
      <div class="carousel-caption">
        <h2>Assorted Title2</h2>
        
       
      </div>
    </div>
      <div class="item">
          <img src="Bilder/rsz_exotic3.jpg" alt="bild3">
      <div class="carousel-caption">
        <h2>Assorted Title3</h2>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
                
                
       </div>
            <!--End of slideshow-->
            

            
            
            
            
            
            
            
            <div id="Firstarticle" class="col-lg-3 col-lg-offset-3">
                <h2>Firstarticle</h2>
                
                
                
                
                <img class="img-responsive" src="Bilder/airplane.jpg" alt="airplanes">
                
                <p class="text-center">
                    Cras ac elit enim. Nunc maximus massa a turpis bibendum mattis. Ut ultrices pellentesque tristique. Fusce fermentum leo vel neque accumsan, id lacinia dui imperdiet. 
                    
                    
                </p>
                
            </div>
            
            <!--End of first article-->
            
            
            
            <div id="Secondarticle" class="col-lg-3">
                <h2>Secondarticle</h2>
                
             
                
                
                <img class="img-responsive" src="Bilder/exoticjewelry.jpg" alt="airplanes">
                
                <p class="text-center">
                    Cras ac elit enim. Nunc maximus massa a turpis bibendum mattis. Ut ultrices pellentesque tristique. Fusce fermentum leo vel neque accumsan, id lacinia dui imperdiet. 
                    
                    
                </p>
                
            </div>
            
            <!--End of second article--> 
            
            
           
            
            <div id="row" class="col-lg-offset-4" class="col-lg-3">
                
                <div class="panel-group"   id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <h2>Gebrony</h2>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
             
              
          <h3>
              Collapse First
          </h3>   
          <p>"Lum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  
          
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
  

              
              
              
            
             
              
             

      </div>
    </div>
  </div>
                    <!--End of first collapse-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
         <h2>What is cooking</h2>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       
          <h3>Collapse Second</h3>
          
          
          <p>Aliquam eu dui et elit blandit efficitur. In eget ipsum orci. Vestibulum viverra sem vel mauris vulputate malesuada. In hac habitasse platea dictumst. Praesent dui quam, ornare ut libero vitae, luctus finibus ipsum. Vestibulum diam purus, porta ut blandit in, bibendum et velit. Etiam ac cursus risus.</p>
      
      <!--End of second collapse-->
      </div>
    </div>
  </div>
                    <!--End of second collapse-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            <h2>Contact Information</h2>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
          <h3>Collapse Third</h3>
          
          <p>Vivamus quis maximus massa, pharetra facilisis risus. Morbi finibus, dui vitae sagittis gravida, neque purus aliquam nisl, ut elementum neque diam id eros.</p>
          
       

          
          
          <!--End of third collapse--> 
      </div>
    </div>
       <!--End of third collapse--> 
  </div>
</div>
           
            
                
                
                
                
            </div>
            
            
             <!--End of collapse-->    
            
            
            
            
            
        <!--End of wrapper-->
        </div>
        
      
        
        
        <
             
             
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        
        
        
        
    </body>
    
</html>

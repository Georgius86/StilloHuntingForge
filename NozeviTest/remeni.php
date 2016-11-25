<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
      
   <?php
   
    include_once 'head.php';
    
    ?>
      
      
  </head>
  <body>
     
    <?php
    
    include_once 'zaglavlje.php';  
    
   include_once 'izbornik.php';   
    
    ?>
    <hr/> 
    
    <!--sidebar 1-->
    
    <div class="row">
        
        <div class="large-2 columns sizeo"><h4>Lovačka društva</h4><br>
            <p class="sidebar">
                "Fazan" Darda<br><br>
                "Fazan" Darda<br><br>
                "Fazan" Darda<br><br>
                "Fazan" Darda<br><br>
                "Fazan" Darda<br><br>
            </p>
        </div>
        
    <div class="large-8 columns sizeo">    
  <div class="large-4 columns sizeo">

    <div class="image-wrapper overlay-fade-in">
      
      <img src="<?php echo $putanjaNozevi; ?>img/remen.jpg"" alt="Vrhunska kvaliteta." />
      
      <div class="image-overlay-content">
        <h2>jedna rupa</h2>
        <p class="price">€49.99</p>
        <a href="<?php echo $putanjaNozevi; ?>lovackinozevi/twoside.php" class="button">Look</a>
      </div>
    
    </div>
  
  </div>
  <div class="large-4 columns sizeo">

    <div class="image-wrapper overlay-slide-in-left">
      
      <img src="<?php echo $putanjaNozevi; ?>img/remen2.jpg"" alt="Vrhunska kvaliteta." />
      
      <div class="image-overlay-content">
        <h2>dvije rupe</h2>
        <p class="price">€49.99</p>
        <a href="<?php echo $putanjaNozevi; ?>lovackinozevi/oneside.php" class="button">Look</a>
      </div>
    
    </div>
  
  </div> 
  <div class="large-4 columns sizeo">

    <div class="image-wrapper overlay-fade-in-new-background">
      
      <img src="<?php echo $putanjaNozevi; ?>img/kais.jpg"" alt="Vrhunska kvaliteta." />
      
      <div class="image-overlay-content">
        <h2>futrole</h2>
        <p class="price">€49.99</p>
        <a href="<?php echo $putanjaNozevi; ?>lovackinozevi/special.php" class="button">Want?</a>
      </div>
    
    </div>
  
  </div>
        </div>
    <!-- sidebar 2-->            
    
        <div class="large-2 columns sizeo"><h4>Društvene mreže</h4><br>
        <p class="sidebar">
            <a href="#"><i class="fi-social-facebook"></i> Facebook</a><br><br>
                <a href="#"><i class="fi-social-twitter"></i> Twitter</a><br><br>
                <a href="#"><i class="fi-social-instagram"></i> Instagram</a><br><br>
                <a href="#"><i class="fi-social-linkedin"></i> Linkedin</a><br><br>
            </p>
        </div>
</div>
    
    
        
    <?php
    
    include_once 'podnozje.php';
    
    include_once 'skripte.php';  
    
    ?>

    
  </body>
</html>






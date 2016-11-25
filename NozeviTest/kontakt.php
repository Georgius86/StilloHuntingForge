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
    <br><br>
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
         
        <!-- Main Page Content and Sidebar -->
 
    <!-- Contact Details -->
    <div class="large-9 columns">
 
        
        <h5>Budimo u kontaktu!</h5><br>
    
        <p>Voljeli bismo se čuti s vama! </P>
        <p>Ukoliko imate želju naručiti nešto, ili imate posebne želje možete nas kontaktirati pomoću obrasca u nastavku.</p>
      <p>
         Možete me kontaktirati i na telefon, pa ćemo se dogovoriti oko detalja!
      </p>
 <br><br>
      
        
      
          <div class="content" data-slug="panel1">
              <fieldset class="fieldset">
            <form>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline">Vaše ime</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" id="yourName" placeholder="Jane Smith">
                </div>
              </div>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline"> Vaša e-mail adresa</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" id="yourEmail" placeholder="jane@smithco.com">
                </div>
              </div>
              <label>Što Vas zanima?</label>
              <textarea rows="4"></textarea>
              <button type="submit" class="button tiny desno">Submit</button>
              </fieldset>
            </form>
          </div>
                    
      </div>
    
 
    <!-- End Contact Details -->
 
 
    <!-- Sidebar -->
 
 
    <div class="large-3 columns">
      
      <!-- Clicking this placeholder fires the mapModal Reveal modal -->
      <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.350531405058!2d18.709109800000004!3d45.62369410000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cdc531320cd61%3A0xec17491b4a8757fb!2sUl.+kralja+Tomislava+1D%2C+31326%2C+Mece!5e0!3m2!1shr!2shr!4v1424103736847" width="300" height="200" frameborder="0" style="border:0"></iframe><br/>
        <p><a data-open="exampleModal1">Pogledaj mapu</a></p>
      </p>
      <p class="fi-marker">
        Kralja Tomislava 1d<br>
        Mece, Darda 31326, Hrvatska
      </p>
      <p class="fi-telephone">
          +385 98 934 71 04
      </p>
        <p class="fi-mail">
          djordje.etf@gmail.com
      </p>  
    </div>
    
    <!--Modal-->
    <div class="reveal" id="exampleModal1" data-reveal data-close-on-click="true" data-animation-in="fade" data-animation-out="fade-out">
  <h3>Nalazimo se ovdje!</h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.350531405058!2d18.709109800000004!3d45.62369410000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cdc531320cd61%3A0xec17491b4a8757fb!2sUl.+kralja+Tomislava+1D%2C+31326%2C+Mece!5e0!3m2!1shr!2shr!4v1424103736847" width="550" height="400" frameborder="0" style="border:0"></iframe>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    <!-- End Sidebar -->
  
 
  <!-- End Main Content and Sidebar -->
        
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
<!-- Map Modal -->
 
  
    
  </body>
</html>






<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
      
   <?php
   
    include_once '../head.php';
    
    ?>
      
      
  </head>
  <body>
     
    <?php
    
    include_once '../zaglavlje.php';  
    
   include_once '../izbornik.php';   
    
    ?>
    <hr/>   
    
    <div class="row">
        
        <!--sidebar 1-->
        <div class="large-2 columns sizeo"><h4>Lovačka društva</h4><br>
            <p class="sidebar">
                "Fazan" Darda<br><br>
                "Fazan" Lug<br><br>
                "Srndać" Beli Manastir<br><br>
                "Jelen" Jagodnjak<br><br>
                "Jelen" Kopačevo<br><br>
            </p>
        </div>  
    
     <div class="large-8 columns sizeo">
                  
    <!--BODY 1-->
  <div class="row">
      
      
      <!--Tab 1-->
      <div class="large-4 columns sizeo">
      <img class="thumbnail" src="<?php echo $putanjaNozevi; ?>img/3.jpg"" alt="Vrhunska kvaliteta.">
      <h3>Vrhunska kvaliteta čelika</h3>
      <p class="thumb">
          "Vrhunska kvaliteta čelika uz ručno brušenje i graviranje!"
      </p>
      
                  
      </div>
      
      <!--Tab 2-->
   <div class="large-4 columns sizeo">
       
       <img class="thumbnail" src="<?php echo $putanjaNozevi; ?>img/2.jpg"" alt="Koža.">
       <h3>Prava koža</h3>
      <p class="thumb">
           "Vrhunska kvaliteta čelika uz ručno brušenje i graviranje!"
      </p>
                               
</div>
      
      <!--Tab 3-->
      <div class="large-4 columns sizeo">
          <img class="thumbnail" src="<?php echo $putanjaNozevi; ?>img/4.jpg"" alt="Koža.">
          <h3>Ručna izrada</h3>
             
          <p class="thumb">
               "Vrhunska kvaliteta čelika uz ručno brušenje i graviranje!"
          </p>
    </div>
       
   
    </div>
    
             
<div class="row">
    
      <div class="large-12 columns sizeo">
          <h2>Novosti</h2><br>                                   
        <hr class="hrr"/>                
        
        <div class="large-8 columns sizeo">
            
            <!--forma za upis NOVOVOSTI-->
                 
                 <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                     <fieldset class="fieldset">
                         <legend class="lborder">
							Obavijest:
						</legend>
                         <br>
						<div class="row">
							
							<div class="large-12 columns">
								<fieldset>
								<div class="row">
									<div class="large-3 columns">
										<label for="naziv">Naslov:</label>
									</div>
									<div class="large-9 columns">
						<input type="text"  name="naziv" id="naziv" />
									</div>
								</div>
								<div class="row">
									<div class="large-12 columns">
										<label class="tekstlijevo" for="opis" >Tekst:</label>
									</div>									
								</div>
								<br />
								<div class="row">
									<div class="large-12 columns">
										   		
										<textarea class="opissrednje"   name="opis" rows="10" cols="20">Ovdje upišite obavijest</textarea>							
									</div>
								</div>									
								</fieldset>																																																															
							</div>
						</div>
						
												
						<div class="row">
			
			<div class="large-12 columns">
				<button type="submit"
						class="button tiny desno"
                                                value="Završi">
                                                    Upiši
                                </button>
				</div>
				
				</div>	
						
						
					</fieldset>
				</form>
                 
                 <!--kraj forme za upis NOVOSTI-->
         
                   <!--NOVOSTI-->
                 
            <h3>Lorem ipsum dolor</h3><br>
           <p>
            Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus. Et neque vivamus. Amet orci ac hendrerit tempus iaculis, pede erat sed eros wisi, varius in at nunc vel dui erat. Pharetra turpis aliquam dignissim in et, rutrum a commodo. Arcu taciti elit aliquam auctor sit facilisi, nec etiam dolor aenean habitant, eget condimentum dapibus erat nec suspendisse, orci ullamcorper tellus. Sodales sit ac diam, tortor orci et sit. Mus ut diam vel, aut sed, enim tristique pulvinar.
Curabitur quis, vitae sapien massa. Iaculis amet, blandit sed pretium urna pretium mauris ut. Curabitur fermentum. Suspendisse luctus tellus eu vestibulum parturient viverra. Suscipit elit nec morbi sapien sed, nonummy fermentum viverra ac diam sit id. Morbi sed gravida tortor, mauris integer hac libero phasellus dui posuere, non est ipsum sem libero et aute, justo semper mollis turpis, sit amet duis vitae. Nec pretium dolor vel venenatis non, enim sed felis lectus, aliquam non minim posuere consequat ac, nulla sed donec viverra, non ac hac. Libero consequat aliquet sem, euismod elit amet dolor suscipit, blandit porttitor fermentum est tincidunt id donec.
           </p><br>
           <hr class="hrr"/>
           <h3>Lorem ipsum dolor</h3><br>
           <p>
            Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus. Et neque vivamus. Amet orci ac hendrerit tempus iaculis, pede erat sed eros wisi, varius in at nunc vel dui erat. Pharetra turpis aliquam dignissim in et, rutrum a commodo. Arcu taciti elit aliquam auctor sit facilisi, nec etiam dolor aenean habitant, eget condimentum dapibus erat nec suspendisse, orci ullamcorper tellus. Sodales sit ac diam, tortor orci et sit. Mus ut diam vel, aut sed, enim tristique pulvinar.
Curabitur quis, vitae sapien massa. Iaculis amet, blandit sed pretium urna pretium mauris ut. Curabitur fermentum. Suspendisse luctus tellus eu vestibulum parturient viverra. Suscipit elit nec morbi sapien sed, nonummy fermentum viverra ac diam sit id. Morbi sed gravida tortor, mauris integer hac libero phasellus dui posuere, non est ipsum sem libero et aute, justo semper mollis turpis, sit amet duis vitae. Nec pretium dolor vel venenatis non, enim sed felis lectus, aliquam non minim posuere consequat ac, nulla sed donec viverra, non ac hac. Libero consequat aliquet sem, euismod elit amet dolor suscipit, blandit porttitor fermentum est tincidunt id donec.
        </p><br>
        <hr class="hrr"/>
        <h3>Lorem ipsum dolor</h3><br>
        <p>
            Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus. Et neque vivamus. Amet orci ac hendrerit tempus iaculis, pede erat sed eros wisi, varius in at nunc vel dui erat. Pharetra turpis aliquam dignissim in et, rutrum a commodo. Arcu taciti elit aliquam auctor sit facilisi, nec etiam dolor aenean habitant, eget condimentum dapibus erat nec suspendisse, orci ullamcorper tellus. Sodales sit ac diam, tortor orci et sit. Mus ut diam vel, aut sed, enim tristique pulvinar.
Curabitur quis, vitae sapien massa. Iaculis amet, blandit sed pretium urna pretium mauris ut. Curabitur fermentum. Suspendisse luctus tellus eu vestibulum parturient viverra. Suscipit elit nec morbi sapien sed, nonummy fermentum viverra ac diam sit id. Morbi sed gravida tortor, mauris integer hac libero phasellus dui posuere, non est ipsum sem libero et aute, justo semper mollis turpis, sit amet duis vitae. Nec pretium dolor vel venenatis non, enim sed felis lectus, aliquam non minim posuere consequat ac, nulla sed donec viverra, non ac hac. Libero consequat aliquet sem, euismod elit amet dolor suscipit, blandit porttitor fermentum est tincidunt id donec.
        </p><br>
        </div>
        
        <!--Novosti arhiva sidebar-->
        
        <div class="large-4 columns">
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            <hr class="hrr"/>
            <h3>Lorem ipsum dolor</h3><br>
            <p>
           Lorem ipsum dolor sit amet, morbi morbi vel pellentesque sit convallis velit. Tempor egestas, congue ipsum congue velit nulla, ut vitae nec luctus.      
            </p><br>
            
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
    
    include_once '../podnozje.php';
    
    include_once '../skripte.php';  
    
    ?>

    
  </body>
</html>




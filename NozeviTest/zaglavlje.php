
    <div class="row okolo ">
    
      <div class="large-3 columns ">
          <img class="slika" src="<?php echo $putanjaNozevi; ?>/img/deer.png" >
      </div>
    
      <div class="large-6 columns">
          <p style="color:green; font-size:10px; text-align: right;"><a style="color:green;"data-open="exampleModal2">admin/Login</a></p>
          <h1>Stillo hunting forge </h1>
        <p class="rr">"The finest steel has to go through the hottest fire." <br>Richard M. Nixon
</p>
      </div>
    <div class="large-3 columns ">
                    
          <img class="slika3" src="<?php echo $putanjaNozevi; ?>/img/deer.png" >
          
      </div>
    </div>

<!--Modal-->
    <div class="reveal" id="exampleModal2" data-reveal data-close-on-click="true" data-animation-in="fade" data-animation-out="fade-out">
  <fieldset>
					<legend style="font-color:green; text-align:center;">Admin/Login
			</legend>
				<form method="post" id="forma"
				action="<?php echo $_SERVER['PHP_SELF'] ?>">
					<div class="row">
						<div class="large-3 columns">
							<label for="korisnickoIme">Korisnik</label>
						</div>
						<div class="large-9 end columns">
							<input type="text"
							id="korisnickoIme"
							name="korisnik" value="ddordevic"/>
							<small id="gki" class="error">Obavezno korisničko ime</small>
						</div>

					</div>
					<div class="row">
						<div class="large-3 columns">
							<label for="lozinkaKorisnika">Lozinka</label>
						</div>
						<div class="large-9 end columns">
							<input type="password"
							id="lozinkaKorisnika"
							name="lozinka" value="ddd"/>
							<small id="gl" class="error">Obavezno lozinka</small>
						</div>
						<input type="submit" class="button tiny desno" value="Logiraj se" />
				</form>
				</fieldset>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


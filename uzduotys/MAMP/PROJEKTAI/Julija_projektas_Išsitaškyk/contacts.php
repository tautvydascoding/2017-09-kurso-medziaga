<section id="location" class="location container-fluid">
    <div class="row">
      <div class="col-lg-5 col-sm-12 p-0 google-maps">
        <div class="map-responsive">
          <iframe src="https://snazzymaps.com/embed/16067" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg col-sm-12 address px-5">
        <h2>Mūsų adresas</h2>
        <address>
        <div class="logoText mb-3">
          <div class="logoTextTop">Išsitaškyk!</div>
            <div class="logoTextBottom">Daužymo kambarys
          </div>
        </div>
        <p>
          Girstupio g. 6, Kaunas<br>
          <abbr>Tel:</abbr><strong> +370 684 34 273</strong>
        </p>
      </address>
        <div class="icons">
          <img src="./images/fb.png" alt="facebook" width="50px">
          <img src="./images/ms.png" alt="messanger" width="50px">
          <img src="./images/call.png" alt="call" width="50px">
        </div>
      </div>

      <div class="col-lg-4 col-sm-12 forma mt-3 px-5">
        <form action="siusti.php" method="post">
          <input type="text" name="name" class="form-control" placeholder="Vardas*" required/>
          <input type="email" name="email" class="form-control" placeholder="El.paštas*" required/>
          <input type="tel" name="telnum" class="form-control" placeholder="Telefono numeris" />
          <label for="question"></label>
          <textarea class="form-control" name="question" placeholder="Žinutė*" rows="10" required></textarea>
          <button class="button" type="submit" name="siusti">SIŲSTI</button>
        </form>
      </div>
    </div>
</section>


		<!-- <section id="rezervacija" class="rez">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h2>Rezervacija</h2>
				</div>
				<div class="col">
					<a href="tel:+37068434273">+370 684 34 273</a>
				</div>
				<div class="col">
					<div class="call">aaa</div>
				</div>
			</div>
		</div>
	</section> -->

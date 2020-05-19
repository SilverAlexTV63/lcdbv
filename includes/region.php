<header class="masthead text-white text-center" style="padding: 4rem; padding-bottom: 1rem; background-color: white">
    <div class="container">
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="results.php">
                <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="border-dark form-control form-control-lg" type="text" placeholder="Rechercher un restaurant ..."></div>
                    <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: #ff9966; border-color: #990000">Rechercher</button></div>
                </div>
            </form>
        </div>
    </div>
  <div class="container d-xl-flex justify-content-xl-start" style="padding: 3rem; padding-bottom: 0;">
		<div class="col arround"><br></div>
            <div class="col">
              <style>

                svg {
                  width: 100%;
                  height: auto;
                  display: block;
                }

                /* remplissage hover */
                .heyo-map:hover {
                  fill: #990000;
                }

                /* remplissage origine */
                .enabled-map {
                  fill: #ff9966;
                  cursor: pointer;
                  stroke: #000000;
                  stroke-width: 1px;
                }

                /* numéro département */
                .numdep {
                  fill: #FFFFFF;
                  font-size: 20px;
                  font-family: Helvetica, Arial, sans-serif;
                  pointer-events: none;
                }
                .numdepidf {
                  fill: #FFFFFF;
                  font-size: 15px;
                  font-family: Helvetica, Arial, sans-serif;
                  pointer-events: none;
                }
                .numdepparis {
                  fill: #FFFFFF;
                  font-size: 5px;
                  font-family: Helvetica, Arial, sans-serif;
                  pointer-events: none;
                }

                /* nom département */
                .description-map {
                  pointer-events: none;
                  position: absolute;
                  font-size: 18px;
                  text-align: center;
                  background-color: rgba(255,255,255,.9);
                  padding: 10px 15px;
                  z-index: 5;
                  height: 90px;
                  line-height: 30px;
                  margin: 0 auto;
                  color: #21669e;
                  border-radius: 5px;
                  box-shadow: 0 0 0 1px #eee;
                  display: none;
                }
                .description-map.active {
                  display: block;
                }
                .description-map:after {
                  position: absolute;
                  left: 50%;
                  top: 100%;
                  width: 0;
                  height: 0;
                  margin-left: -10px;
                  border-left: 10px solid transparent;
                  border-right: 10px solid transparent;
                  border-top: 10px solid white;
                }

                .col.arround {
                  padding: 0;
                  margin: 0;
                  max-width: 15%;
                }

              </style>

<input class="checkbox-cb" id="checkbox-cb" type="checkbox" />
<div class="cookie-bar">
  <span class="message">En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies ou autres traceurs. <a href="#">En savoir plus</a></span>
  <span class="mobile">Nous utilisons des cookies <a href="#">En savoir plus</a></span>
  <label for="checkbox-cb" class="close-cb">Oui</label>
</div>

<!-- viewBox="0 0 548.2 564.3" enable-background="new 0 0 548.2 564.3" paris: viewBox="250 100 100 100"-->
<svg version="1.0" id="Layer_1" viewBox="278 260 228 170" overflow="visible" style="margin-bottom: 50px;">
<!-- DEBUT AUVERGNE RHONE ALPES -->

	<a class="svglink" href="<?php echo $liendep['03']; ?>" title="<?php echo $descdep['03']; ?>" alt="<?php echo $descdep['03']; ?>">
	  <path id="<?php echo $descdep['03']; ?>" class="enabled-map" d="M363.55,285.35
	l-1.6-2.4l-7.9-2.9l-6.7-13.5l-5.9,6l-4.4-3.7l-2.8,1.7l-6.4-0.1l-5.7-6.4h-0.1h-4l-4.8,3.7l-8.4,2.9l-2.3,1.9l1.7,5.4l-1.7,2.3
	l-8.7,1l-3.5,5.9v0.1l1.1,3.9c2.4,1.6,4.9,3.3,7.4,4.8l3.6,8.4l2.5,1.2l11.2-8l2.3,1.7l-1.2,2.8l4.4,4.5l3.3-0.5l1.6,2.5
	l13.1,0.5l1.4,3.2l6.4,0.4l3.5,4.3l5.5-4.8l-1.5-12.4l0.5-3l3.9-1.3l3.7-4.6L363.55,285.35z"/>
	</a>
	<text class="numdep" x="320" y="295" id="<?php echo $descdep['03']; ?>">03</text>

	<a class="svglink" href="<?php echo $liendep['01']; ?>" title="<?php echo $descdep['01']; ?>" alt="<?php echo $descdep['01']; ?>">
	  <path id="<?php echo $descdep['01']; ?>" class="enabled-map" d="M419.15,283.25
	l-4.8-3.3l-5.4,1.3l-5.9-1.5l-5.9,20.9l-1.5,8l3.1,9.2l2.8-0.5l3.7,5.7l6.4-0.5l6,2l3-5.1l2.9-0.7l11.1,15.2l5.7-6.7l2.3-13.6
	l0,0l-0.8-9.3h2.9l2.8-2.9h-0.3l0.5-5l5.8-3.6l1.1-6.9l-3.5-2l-4.7,6.5l-5.4,3.2l-3.9,0.2l-0.4-2.8l-3.4-1.6l-4,4.4l-2.9,0.1
	l-0.1-3h-2.9L419.15,283.25z"/>
	</a>
	<text class="numdep" x="410" y="315" id="<?php echo $descdep['01']; ?>">01</text>


	<a class="svglink" href="<?php echo $liendep['42']; ?>" title="<?php echo $descdep['42']; ?>" alt="<?php echo $descdep['42']; ?>">
	  <path id="<?php echo $descdep['42']; ?>" class="enabled-map" d="M354.95,299.75
	l1.5,12.4l-5.5,4.8l2.5,2.7l-2.1,6.3l4.7,7.7l4.6,3.8l2.7,7.5l-3,7.1l2.8-0.8l2.3,2l2.8-0.4l6.2-3l6,2.2l0.7,5.5l2.6-1l2.2,2.4
	l3.5-0.8l3.2-4.9l5-2.7v-4.4l-0.2-1.1h0.1l-4.6-2.6l-0.9-3l-5.9-2.1l-4.6-4.1l-1.1-3l1.3-2.5l-2.3-1.6l1.7-5.9l-5.2-6.7l1.6-8.6
	l4.9-3.5l-2.1-3v0.1l-5.7,3.9l-2.1-2.2l-8,1.5l-5.2-3.3v-3l-3.9,1.3L354.95,299.75z"/>
	</a>
	<text class="numdep" x="355" y="330" id="<?php echo $descdep['42']; ?>">42</text>

	<a class="svglink" href="list-resto.php" title="<?php echo $descdep['63']; ?>" alt="<?php echo $descdep['63']; ?>">
	  <path id="<?php echo $descdep['63']; ?>" class="enabled-map" d="M324.95,306.05
	l-3.3,0.5l-4.4-4.5l1.2-2.8l-2.3-1.7l-11.2,8l-2.5-1.2l-0.5,4.1l2.3,6.7l-9.4,8.6l4.5,5.5l1.2,5.6l-1.7,2.4l1.2,7.9l7.5,3.5
	l1.5,2.5l6.7,0.3l6.5,5.4l3.7-4.1v-0.1l9.6-3.2l8.5,0.1l5.2,3.2l11.1-0.7l3-7.1l-2.7-7.5l-4.6-3.8l-4.7-7.7l2.1-6.3l-2.5-2.7
	l-3.5-4.3l-6.4-0.4l-1.4-3.2l-13.1-0.5L324.95,306.05z"/>
	</a>
	<text class="numdep" x="320" y="337" id="<?php echo $descdep['63']; ?>">63</text>

	<a class="svglink" href="<?php echo $liendep['15']; ?>" title="<?php echo $descdep['15']; ?>" alt="<?php echo $descdep['15']; ?>">
	  <path id="<?php echo $descdep['15']; ?>" class="enabled-map" d="M315.75,351.45
	l-6.7-0.3l-1.5-2.5l-7.5-3.5l0.7,6l-6.2-2l-0.7,3.5l-7.5,9.5l1.8,2.2l-2.3,1.9l-0.3,3.5l-3.1,1.1l1.5,3.4l-3.2,1.9h-0.1l1,5.4
	l3.8,6l-1.7,5.8l3.3,5l5.1-3.2l6.4,1.5l3.8-4.8l3-9.1l4.7-4.2l5.2,4l1.3,4.2l2.4,1.6l-0.5,3l2.6,5.1l6.9-15.9l1.7,2.3l6.8-5.7
	l1-1l-3.5-8l3.4-0.2l-2.6-1.1l-3.3-8.7l-5.5-1.5v-4v0.1l-3.7,4.1L315.75,351.45z"/>
	</a>
	<text class="numdep" x="295" y="375" id="<?php echo $descdep['15']; ?>">15</text>

	<a class="svglink" href="<?php echo $liendep['43']; ?>" title="<?php echo $descdep['43']; ?>" alt="<?php echo $descdep['43']; ?>">
	  <path id="<?php echo $descdep['43']; ?>" class="enabled-map" d="M360.35,352.05
	l-11.1,0.7l-5.2-3.2l-8.5-0.1l-9.6,3.2v4l5.5,1.5l3.3,8.7l2.6,1.1l-3.4,0.2l3.5,8l2.3,1.7l1.5,5.7l6.4,1.2l0.1-2.8l2.9,0.2l9,7.7
	l6.7-6.4l5.9-1.9l3.4-5.9l3.4-0.4l-0.7-2.8l2.6-2.3l1.5-5.2l2.6,1.2v-3.1l0.9-4.1l-2.2-2.4l-2.6,1l-0.7-5.5l-6-2.2l-6.2,3
	l-2.8,0.4l-2.3-2L360.35,352.05z"/>
	</a>
	<text class="numdep" x="345" y="375" id="<?php echo $descdep['43']; ?>">43</text>

	<a class="svglink" href="<?php echo $liendep['38']; ?>" title="<?php echo $descdep['38']; ?>" alt="<?php echo $descdep['38']; ?>">
	  <path id="<?php echo $descdep['38']; ?>" class="enabled-map" d="M409.45,334.65
	l-6.9,1.5l-2.5,2.5l1.9,2.5l-4.4,3.9h-0.1l0.2,1.1v4.4l2,4.2l9-3.1l4.9,2.7l3.3,7.8l-1.1,6.3l2.7-1l8.2,1.9l3-1.7l0.9,17.5l3-0.5
	l5.3,4l5.9,0.8l1-3.1l5.5-1.2l0.9-2.8l12.6-3.9l3.1,1.1l0.4-5.8l-4.4-3.1l-1.8-4.2l1.6-3.8l-5.2-1.5l-1-5.4l2.3-5.5l-2.7-6.3
	l-9.4-2.1l-0.3,2.8l-6.2-0.2l-6.5-10.5l-11.1-15.2l-2.9,0.7l-3,5.1l-6-2l0.4,7.1L409.45,334.65z"/>
	</a>
	<text class="numdep" x="425" y="365" id="<?php echo $descdep['38']; ?>">38</text>

	<a class="svglink" href="<?php echo $liendep['69']; ?>" title="<?php echo $descdep['69']; ?>" alt="<?php echo $descdep['69']; ?>">
	  <path id="<?php echo $descdep['69']; ?>" class="enabled-map" d="M402.55,336.15
	l6.9-1.5l2.6-5l-0.4-7.1l-6.4,0.5l-3.7-5.7l-2.8,0.5l-3.1-9.2l1.5-8l-5.7-7.7l-1.6,2.3l-2.5-1.5l-2.2,1.7l-2.2-1.8l-2.3,1.9
	l-0.3,3v-0.1l2.1,3l-4.9,3.5l-1.6,8.6l5.2,6.7l-1.7,5.9l2.3,1.6l-1.3,2.5l1.1,3l4.6,4.1l5.9,2.1l0.9,3l4.6,2.6l4.4-3.9l-1.9-2.5
	L402.55,336.15z"/>
	</a>
	<text class="numdep" x="380" y="330" id="<?php echo $descdep['69']; ?>">69</text>

	<a class="svglink" href="<?php echo $liendep['73']; ?>" title="<?php echo $descdep['73']; ?>" alt="<?php echo $descdep['73']; ?>">
	  <path id="<?php echo $descdep['73']; ?>" class="enabled-map" d="M440.35,327.25
	l-5.7,6.7l6.5,10.5l6.2,0.2l0.3-2.8l9.4,2.1l2.7,6.3l-2.3,5.5l1,5.4l5.2,1.5l7.7,3.5l2-2l6.1-1.2v-0.1l19.3-8.2l2-3.7l-1.2-2.6
	l2.8-5.2l-7.3-5.1l-2.2-5.5l0.7-3.1l-5.6-2.3l-2.8-2.6l-0.5-3l-2.2,1.5l-6.2-2.3l-2.2-1.8l0.5-3l-2.4-1.6l-9.4,13.9l-4.6-3.6
	l-3.2-0.8l-2.6,1.6l-3-1.7l-1.3-2.5l-2.7-0.9l-2.7-6.7L440.35,327.25z"/>
	</a>
	<text class="numdep" x="465" y="350" id="<?php echo $descdep['73']; ?>">73</text>

	<a class="svglink" href="<?php echo $liendep['07']; ?>" title="<?php echo $descdep['07']; ?>" alt="<?php echo $descdep['07']; ?>">
	  <path id="<?php echo $descdep['07']; ?>" class="enabled-map" d="M397.65,350.55
	l-5,2.7l-3.2,4.9l-3.5,0.8l-0.9,4.1v3.1l-2.6-1.2l-1.5,5.2l-2.6,2.3l0.7,2.8l-3.4,0.4l-3.4,5.9l-5.9,1.9l-6.7,6.4l2.1,9.1
	l4.2,8.3l2.7,5.9l7.8,5l7.1-4.4l0.1,3.2l2.5-2.3h2.8l6,3.5l-0.1-3.7l2.1-14.4l3-5.9l-1-7.1l3.5-4.5l1.5-6.2l-3.8-11.3l-0.5-10.3
	L397.65,350.55z"/>
	</a>
	<text class="numdep" x="375" y="400" id="<?php echo $descdep['07']; ?>">07</text>

	<a class="svglink" href="<?php echo $liendep['26']; ?>" title="<?php echo $descdep['26']; ?>" alt="<?php echo $descdep['26']; ?>">
	  <path id="<?php echo $descdep['26']; ?>" class="enabled-map" d="M399.65,354.75
	l0.5,10.3l3.8,11.3l-1.5,6.2l-3.5,4.5l1,7.1l-3,5.9l-2.1,14.4l5.9,0.7l3.5,4.2l8.7-3.8l2.4,1.3l2.5-2.2l0.5,5.9l9.3,0.7l0.1,2.9
	l5.2,2.3l4.3-4.8l2.3-0.1l1-0.2l0.2-4.7l-10-5.6l-1.5-2.8l3.3-5l4.1,1.4l2.5-2.5l-3-2.3l2.5-6.7l5.8-0.4l0.3-3.3l-5.9-0.8l-5.3-4
	l-3,0.5l-0.9-17.5l-3,1.7l-8.2-1.9l-2.7,1l1.1-6.3l-3.3-7.8l-4.9-2.7L399.65,354.75z"/>
	</a>
	<text class="numdep" x="405" y="400" id="<?php echo $descdep['26']; ?>">26</text>

	<a class="svglink" href="<?php echo $liendep['74']; ?>" title="<?php echo $descdep['74']; ?>" alt="<?php echo $descdep['74']; ?>">
	  <path id="<?php echo $descdep['74']; ?>" class="enabled-map" d="M481.45,286.45
	l0.5-2.8l-3.4-0.7l-8.4,0.6l-5,4.2l-3.5-1.5l-2.8,5.8l2.4,3.1l-7,5.4l-6.7,0.9l-2.8,2.9h-2.9l0.8,9.3l0,0l2.7,6.7l2.7,0.9
	l1.3,2.5l3,1.7l2.6-1.6l3.2,0.8l4.6,3.6l9.4-13.9l2.4,1.6l-0.5,3l2.2,1.8l6.2,2.3l2.2-1.5v-0.2l0.1-0.2l8.3-8l1-3.1l-3.4-4.6
	l-7.8-7.4l2.3-6.1L481.45,286.45z"/>
	</a>
	<text class="numdep" x="460" y="310" id="<?php echo $descdep['74']; ?>">74</text>

<!-- FIN AUVERGNE RHONE ALPES -->
</svg>

<form action="region.php" method="post">
    <select name="region" size="1">
    <?php for ($i=0; $i<13; $i++) { ?>
            <option>Region XX</option>
    <?php } ?>
    </select>
    <button type="button" class="btn btn-primary" style="background-color: #ff9966; border-color: #990000;">Voir la liste des restaurants</button>
</form>
  

<div class="description-map"></div>
			</div>
            <div class="col arround"></div>
        </div>
</header>
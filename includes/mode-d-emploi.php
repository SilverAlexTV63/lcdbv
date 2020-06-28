<style>

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #ff9966;
  border: 1px solid #990000;
  color: white;
  padding: 3% 5%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #990000;
  boder: solid #ff9966;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text],
input[type=email],
input[type=tel],
textarea {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus,
input[type=email]:focus,
input[type=tel]:focus,
textarea:focus{
  background-color: #fff;
  border-bottom: 2px solid #ff9966;
}

input[type=text]:focus::placeholder,
input[type=email]:focus::placeholder,
input[type=tel]:focus::placeholder,
textarea:focus::placeholder {
  opacity: 0;
}

input[type=text]:placeholder,
input[type=email]:placeholder,
input[type=tel]:placeholder,
textarea:placeholder {
  color: #cccccc;
}

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

*:focus {
    outline: none;
}

#icon {
  width:60%;
}
</style>

<div class="container mode-d-emploi-first">
    <div class="col stats" id="stats">
        <p>Actuellement le Club des Bons Vivants c'est :</p>
        <ul>
            <li class="active members-dropdown">XXXXXX membres ▼</li>
            <style>
                li.active.members-dropdown:hover {
                    cursor: pointer;
                }
            </style>
            <li class="active">XXXXX restaurateurs</li>
            <li class="active">XXXXX menus disponibles</li>
        </ul>
        <ul class="members-dropdown-items-list">
            <li  class="members-dropdown-items">XX% de femmes</li>
            <li  class="members-dropdown-items">XX% d'hommes</li>
            <li  class="members-dropdown-items">XX% de +25 ans</li>
        </ul>
    </div>
</div>
<script>
    class Dropdown {
        constructor() { 
            this.container = document.getElementById("stats");
            this.dropdownMenu = this.container.querySelector(".members-dropdown");
            this.dropdownItems = this.container.querySelectorAll(".members-dropdown-items");
            this.dropdownMenu.addEventListener("click", () => {this.show()});
            this.i = 0;
        }

        show(){
        if (this.i === 0){
            for (let dropdownItem of this.dropdownItems) {
            dropdownItem.className= "members-dropdown-items active";
            };
            this.container.querySelector(".members-dropdown-items-list").style.display = "flex";
            this.i = 1;
        }
        else if (this.i === 1){
            for (let dropdownItem of this.dropdownItems) {
            dropdownItem.className= "members-dropdown-items";
            };
            this.container.querySelector(".members-dropdown-items-list").style.display = "none";
            this.i = 0;
        }
    };
    }

    const dropdown = new Dropdown();
    
</script>
<div class="container">
    <div class="col">
        <h2 style="text-decoration: underline; text-align: center">Mode d'emploi</h2>
        <p>C'est très simple: <span style="font-weight: bold;">Envoyez vos menus, nous nous chageons du reste.</span></p>
        <ul style="list-style-type: disclosure-closed;">
            <li>Diffusion de l'information par courriel,</li>
            <li>Mise en ligne sur le site internet,</li>
            <li>Parution dans la liste des nouveaux menus pendant 3 semaines minimum,</li>
            <li>Livre d'or contrôlé, par des modérateurs qualifiés, plusieurs fois par jour,</li>
            <li>Plan d'accès sur carte intéractive,</li>
            <li>Référencement de votre restaurant sur les moteurs de recherche.</li>
        </ul>
        <p>C'est pour un restaurant, une formidable publicité <span style="text-decoration: underline">parfaitement</span> ciblée</p>
    </div>
</div>
<div class="container" style="margin-bottom: 20px;">
    <h2 style="text-decoration: underline; text-align: center;margin-bottom: 20px;">Tarifs</h2>
    <div class="row" style="justify-content: center; align-items: center;">
        <div class="col" style="margin: 0 1rem; max-width: 18rem;">
            <div class="card text-center" style="width: 18rem;box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);">
            <div class="card-body">
                <h5 style="text-decoration: underline; font-weight: bold;">Gratuit</h5>
                <small>0€/mise à jour</small>
                <p>Saisissez vos cartes et vos menus</p>
                <hr>
                <p>Diaporama photos</p>
                <hr>
                <p>Reportage vidéo</p>
                <hr>
                <p>Mises à jour gratuites</p>
                <input class="fadeIn second" type="submit" value="Inscription"></input>
            </div>
            </div>
        </div>
        <div class="col" style="margin: 0 1rem;max-width: 18rem;">
            <div class="card text-center" style="width: 18rem;box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);">
            <div class="card-body">
                <h5 style="text-decoration: underline; font-weight: bold;">Payant</h5>
                <small>100€/mise à jour</small>
                <p>Nous scannons vos documents</p>
                <hr>
                <p><a href="https://www.leclubdesbonsvivants.com/recapitulatif.pdf" target="_blank">Récapitulatif des pièces à envoyer</a></p>
                <h5>100€/mise à jour</h5>
            </div>
        </div>
    </div>
</div>
</div>
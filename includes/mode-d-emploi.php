<div class="container mode-d-emploi-first">
    <div class="col stats" id="stats">
        <p>Actuellement le Club des Bons Vivants c'est :</p>
        <ul>
            <li class="active members-dropdown">XXXXXX membres ▼</li>
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
        <p>C'est très simple: Envoyez vos menus, nous nous chageons du reste.</p>
        <ul>
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
<div class="container">
    </div>
    <h4 style="text-decoration: underline">Le tarif :</h4>
    <div class="row">
        <div class="col" style="margin: 0 1rem; max-width: 18rem;">
            <div class="card text-center" style="width: 18rem;">
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
                <button class="btn btn-primary">Inscription</button>
            </div>
            </div>
        </div>
        <div class="col" style="max-width: 18rem;">
            <div class="card text-center" style="width: 18rem;">
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
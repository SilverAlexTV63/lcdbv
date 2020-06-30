<div class="container-fluid" style="margin-top: 1rem;">
    <div class="col btn-container" style="padding: 0;">
        <a class="btn btn-primary btn-add-carte">➕ Ajouter une Carte</a>
        <a class="btn btn-primary btn-add-menu">➕ Ajouter un Menu</a>
        <a class="btn btn-primary btn-add-menu-carte">➕ Ajouter un Menu Carte</a>
        <a class="btn btn-primary btn-add-carte-pizzas">➕ Ajouter un Carte des Pizzas</a>
        <a class="btn btn-primary btn-add-carte-vins">➕ Ajouter un Carte des Vins</a>
        <a class="btn btn-primary btn-add-carte-boissons">➕ Ajouter un Carte des Boissons</a>
    </div>
    <div id="main"></div>
</div>
<script>
$('.btn-add-carte').each((_index, element) => {
    $(element).click(()=>{
        $('#main').append(`
        <div id="carte">
            <div id="entrees">
                <h2 class="element-carte">Entrees</h2>
                <a class="btn btn-primary btn-add-entree">➕ Ajouter une Entree</a>
            </div>
            <div id="plats">
                <h2 class="element-carte">Plats</h2>
                <a class="btn btn-primary btn-add-plat">➕ Ajouter un Plat</a>
            </div>
            <div id="desserts">
                <h2 class="element-carte">Desserts</h2>
                <a class="btn btn-primary btn-add-dessert">➕ Ajouter un Dessert</a>
            </div>
            <a class="btn btn-primary btn-remove-carte">Supprimer la carte</a>
        </div>
        <script src="assets/saisie/carte.js"><\/script>
        `);
        $(element).addClass('display-none');
    });
});
$('.btn-add-menu').each((_index, element) => {
    let menu = 0;
    $(element).click(() => {
        $('#main').append(`
            <div id="menu` + menu + `">
                <label name="menu` + menu + `-titre">Titre du menu</label>
                <input type="text" name="menu` + menu + `-titre" class="form-control">

                <label name="menu` + menu + `-prix">Prix du menu</label>
                <input type="number" name="menu` + menu + `-prix" class="form-control"><span class="euro">€</span>
                
                <label name="menu` + menu + `-contenu">Contenu du menu</label>
                <textarea name="menu` + menu + `-contenu" class="form-control"></textarea>
                
                <a class="btn btn-primary" id="btn-remove-menu` + menu + `">Supprimer le menu</a>
            </div>
            <script>
                $('#btn-remove-menu` + menu + `').each((_index, element) => {
                    $(element).click(() => {
                        let r = confirm('Sûr ?\\nOui!');
                        if (r == true) {
                            $('#menu` + menu + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        menu++;
    });
});
$('.btn-add-menu-carte').each((_index, element) => {
    let menuCarte = 0;
    $(element).click(() => {
        $('#main').append(`
            <div id="menu-carte` + menuCarte + `">
                <label name="menu-carte` + menuCarte + `-titre">Titre du menu carte</label>
                <input type="text" name="menu` + menuCarte + `-titre" class="form-control">

                <label name="menu-carte` + menuCarte + `-prix">Prix du menu carte</label>
                <input type="number" name="menu-carte` + menuCarte + `-prix" class="form-control"><span class="euro">€</span>

                <div id="entrees-menu-carte` + menuCarte + `">
                    <h2 class="element-carte">Entrees</h2>
                    <a class="btn btn-primary btn-add-entree">➕ Ajouter une Entree</a>
                </div>
                <div id="plats-menu-carte` + menuCarte + `">
                    <h2 class="element-carte">Plats</h2>
                    <a class="btn btn-primary btn-add-plat">➕ Ajouter un Plat</a>
                </div>
                <div id="desserts-menu-carte` + menuCarte + `">
                    <h2 class="element-carte">Desserts</h2>
                    <a class="btn btn-primary btn-add-dessert">➕ Ajouter un Dessert</a>
                </div>

                <a class="btn btn-primary" id="btn-remove-menu-carte` + menuCarte + `">Supprimer le menu carte</a>
            </div>
            <script src="assets/saisie/menu-carte.js"><\/script>
            <script>
                $('#btn-remove-menu-carte` + menuCarte + `').each((_index, element) => {
                    $(element).click(() => {
                        let r = confirm('Sûr ?\\nOui!');
                        if (r == true) {
                            $('#menu-carte` + menuCarte + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        menuCarte++;
    });
});
$('.btn-add-carte-pizzas').each((_index, element) => {
    $(element).click(()=>{
        $('#main').append(`
        <div id="carte-pizzas">
            <h2 class="element-carte">Pizzas</h2>
            <a class="btn btn-primary btn-add-pizza">➕ Ajouter une Pizza</a>
            <div id="pizzas"></div>
            <a class="btn btn-primary btn-remove-carte-pizzas">Supprimer la carte des pizzas</a>
        </div>
        <script src="assets/saisie/carte-pizzas.js"><\/script>
        `);
        $(element).addClass('display-none');
    });
});
$('.btn-add-carte-vins').each((_index, element) => {
    $(element).click(()=>{
        $('#main').append(`
        <div id="carte-vins">
            <div id="blancs">
                <h2 class="element-carte">Vins Blancs</h2>
                <a class="btn btn-primary btn-add-blanc">➕ Ajouter un Vin Blanc</a>
            </div>
            <div id="rouges">
                <h2 class="element-carte">Vins Rouges</h2>
                <a class="btn btn-primary btn-add-rouge">➕ Ajouter un Vin Rouge</a>
            </div>
            <div id="roses">
                <h2 class="element-carte">Vins Rosés</h2>
                <a class="btn btn-primary btn-add-rose">➕ Ajouter un Vin Rosé</a>
            </div>
            <div id="champagnes">
                <h2 class="element-carte">Champages</h2>
                <a class="btn btn-primary btn-add-champagne">➕ Ajouter un Champagne</a>
            </div>
            <a class="btn btn-primary btn-remove-carte-vins">Supprimer la carte des vins</a>
        </div>
        <script src="assets/saisie/carte-vins.js"><\/script>
        `);
        $(element).addClass('display-none');
    });
});
$('.btn-add-carte-boissons').each((_index, element) => {
    $(element).click(()=>{
        $('#main').append(`
        <div id="carte-boissons">
            <div id="aperitifs">
                <h2 class="element-carte">Aperitifs</h2>
                <a class="btn btn-primary btn-add-aperitif">➕ Ajouter un Aperitif</a>
            </div>
            <div id="digestifs">
                <h2 class="element-carte">Digestifs</h2>
                <a class="btn btn-primary btn-add-digestif">➕ Ajouter un Digestif</a>
            </div>
            <div id="bieres">
                <h2 class="element-carte">Bières</h2>
                <a class="btn btn-primary btn-add-biere">➕ Ajouter une Bière</a>
            </div>
            <div id="softs">
                <h2 class="element-carte">Softs</h2>
                <a class="btn btn-primary btn-add-soft">➕ Ajouter un Soft</a>
            </div>
            <div id="cocktails">
                <h2 class="element-carte">Cocktails</h2>
                <a class="btn btn-primary btn-add-cocktail">➕ Ajouter un Cocktail</a>
            </div>
            <a class="btn btn-primary btn-remove-carte-boissons">Supprimer la carte des boissons</a>
        </div>
        <script src="assets/saisie/carte-boissons.js"><\/script>
        `);
        $(element).addClass('display-none');
    });
});
</script>
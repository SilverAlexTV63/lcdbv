$('button.btn-add-carte').each((_index, element) => {
    $(element).click(() => {
        let main = $(element).parent().parent().attr('id');
        $('#' + main).append(`
        <div id="carte">
            <div id="elements-carte">
                <h2 class="elements-title">Entrees</h2>
                <button class="btn btn-primary btn-add-entree">Ajouter une Entrée</button>
                <div class="entrees"></div>
                <h2 class="elements-title">Plats</h2>
                <button class="btn btn-primary btn-add-plat">Ajouter un Plat</button>
                <div class="plats"></div>
                <h2 class="elements-title">Desserts</h2>
                <button class="btn btn-primary btn-add-dessert">Ajouter un Dessert</button>
                <div class="desserts"></div>
            </div>
            <button class="btn btn-primary btn-remove-carte">Supprimer la carte</button>
        </div>
        <script src="assets/js/saisie/ajout-element.js"></script>
        `);
        $(element).addClass('display-none');
    });
});

$('button.btn-add-menu').each((_index, element) => {
    let menuID = 0;
    $(element).click(() => {
        let main = $(element).parent().parent().attr('id');
        $('#' + main).append(`
        <div class="menu" id="menu` + menuID + `">
            <input type="text">
            <input type="number"><span class="euro">€</span>
            <textarea class="description-entree rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-menu">Supprimer le menu</button>
        </div>
        <script src="assets/js/saisie/ajout-element.js"></script>
        `);
        menuID++;
    });
});

$('button.btn-add-menu-carte').each((_index, element) => {
    let menuCarteID = 0;
    $(element).click(() => {
        let main = $(element).parent().parent().attr('id');
        $('#' + main).append(`
        <div class="menu-carte" id="menu-carte` + menuCarteID + `">
            <input type="text">
            <input type="number"><span class="euro">€</span>
            <div id="elements-menu-carte">
                <h2 class="elements-title">Entrees</h2>
                <button class="btn btn-primary btn-add-entree">Ajouter une Entrée</button>
                <div class="entrees"></div>
                <h2 class="elements-title">Plats</h2>
                <button class="btn btn-primary btn-add-plat">Ajouter un Plat</button>
                <div class="plats"></div>
                <h2 class="elements-title">Desserts</h2>
                <button class="btn btn-primary btn-add-dessert">Ajouter un Dessert</button>
                <div class="desserts"></div>
            </div>
            <button class="btn btn-primary btn-remove-menu-carte">Supprimer le menu carte</button>
        </div>
        <script src="assets/js/saisie/ajout-element.js"></script>
        `);
        menuCarteID++;
    });
});

$('button.btn-add-carte-vins').each((_index, element) => {
    $(element).click(() => {
        let main = $(element).parent().parent().attr('id');
        $('#' + main).append(`
        <div id="carte-vins">
            <div id="elements-vin">
                <h2 class="elements-title">Vins</h2>
                <button class="btn btn-primary btn-add-vin">Ajouter un Vin</button>
                <div class="vins"></div>
            </div>
            <button class="btn btn-primary btn-remove-carte-vins">Supprimer la carte des vins</button>
        </div>
        <script src="assets/js/saisie/ajout-element.js"></script>
        `);
        $(element).addClass('display-none');
    });
});

$('button.btn-add-carte-boissons').each((_index, element) => {
    $(element).click(() => {
        let main = $(element).parent().parent().attr('id');
        $('#' + main).append(`
        <div id="carte-boissons">
            <div id="elements-boisson">
                <h2 class="elements-title">Boissons</h2>
                <button class="btn btn-primary btn-add-boisson">Ajouter une Boisson</button>
                <div class="boissons"></div>
            </div>
            <button class="btn btn-primary btn-remove-carte-boissons">Supprimer la carte des boissons</button>
        </div>
        <script src="assets/js/saisie/ajout-element.js"></script>
        `);
        $(element).addClass('display-none');
    });
});
$('button.btn-remove-carte').each((_index, element) => {
    $(element).click(() => {
        let r = confirm("Souhaitez vous réellement supprimer cette carte ?\nSi vous cliquez sur OK la carte sera supprimer definitivement.");
        if (r == true) {
            $(element).parent().remove();
            $('button.btn-add-carte').removeClass('display-none');
        }
    });
});

$('button.btn-add-entree').each((_index, element) => {
    let entreeID = 0;
    $(element).click(() => {
        $('.entrees').append(`
        <div class="element-carte" id="element` + entreeID + `">
            <input type="text" class="titre-entree">
            <div class="price">
                <input type="number"><span class="euro">€</span>
            </div>
            <textarea class="description-entree rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-entree">Supprimer l'entrée</button>
        </div>
        <script src="assets/js/saisie/supprimer-element.js"></script>
        `);
        entreeID++;
    });
});

$('button.btn-add-plat').each((_index, element) => {
    let platID = 0;
    $(element).click(() => {
        $('.plats').append(`
        <div class="element-carte" id="element` + platID + `">
            <input type="text" class="titre-plat">
            <div class="price">
                <input type="number"><span class="euro">€</span>
            </div>
            <textarea class="description-plat rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-plat">Supprimer le plat</button>
        </div>
        <script src="assets/js/saisie/supprimer-element.js"></script>
        `);
        platID++;
    });
});

$('button.btn-add-dessert').each((_index, element) => {
    let dessertID = 0;
    $(element).click(() => {
        $('.desserts').append(`
        <div class="element-carte" id="element` + dessertID + `">
            <input type="text" class="titre-dessert">
            <div class="price">
                <input type="number"><span class="euro">€</span>
            </div>
            <textarea class="description-dessert rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-dessert">Supprimer le dessert</button>
        </div>
        <script src="assets/js/saisie/supprimer-element.js"></script>
        `);
        dessertID++;
    });
});

$('button.btn-remove-menu').each((_index, element) => {
    $(element).click(() => {
        let menuID = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer ce menu ?\nSi vous cliquez sur OK le menu sera supprimer definitivement.");
        if (r == true) {
            $('#' + menuID).remove();
        }
    });
});

$('button.btn-remove-menu-carte').each((_index, element) => {
    $(element).click(() => {
        let menuCarteID = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer ce menu carte?\nSi vous cliquez sur OK le menu carte sera supprimer definitivement.");
        if (r == true) {
            $('#' + menuCarteID).remove();
        }
    });
});

$('button.btn-remove-carte-vins').each((_index, element) => {
    $(element).click(() => {
        let r = confirm("Souhaitez vous réellement supprimer cette carte des vins?\nSi vous cliquez sur OK la carte des vins sera supprimer definitivement.");
        if (r == true) {
            $(element).parent().remove();
            $('button.btn-add-carte-vins').removeClass('display-none');
        }
    });
});

$('button.btn-add-vin').each((_index, element) => {
    let vinID = 0;
    $(element).click(() => {
        $('.vins').append(`
        <div class="element-vin" id="element` + vinID + `">
            <input type="text" class="titre-vin">
            <select class="type-vin">
                <option value="" autofocus>== Choisissez le type de vin ==</option>
                <option value="blanc">Vin Blanc</option>
                <option value="rouge">Vin Rouge</option>
                <option value="rose">Vin Rosé</option>
                <option value="champagne">Champagne</option>
            </select>
            <div class="price">
                <input type="number"><span class="euro">€</span>
                <input type="number"><span class="euro">€</span>
                <input type="number"><span class="euro">€</span>
                <input type="number"><span class="euro">€</span>
                <input type="number"><span class="euro">€</span>
            </div>
            <textarea class="description-vin rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-vin">Supprimer le vin</button>
        </div>
        <script src="assets/js/saisie/supprimer-element.js"></script>
        `);
        vinID++;
    });
});

$('button.btn-remove-carte-boissons').each((_index, element) => {
    $(element).click(() => {
        let r = confirm("Souhaitez vous réellement supprimer cette carte des boissons?\nSi vous cliquez sur OK la carte des boissons sera supprimer definitivement.");
        if (r == true) {
            $(element).parent().remove();
            $('button.btn-add-carte-boissons').removeClass('display-none');
        }
    });
});

$('button.btn-add-boisson').each((_index, element) => {
    let boissonID = 0;
    $(element).click(() => {
        $('.boissons').append(`
        <div class="element-boisson" id="element` + boissonID + `">
            <input type="text" class="titre-boisson">
            <select class="type-boisson">
                <option value="" autofocus>== Choisissez le type de boisson ==</option>
                <option value="aperitif">Apéritif</option>
                <option value="digestif">Digestif</option>
                <option value="biere">Bière</option>
                <option value="soft">Soft</option>
                <option value="cocktail">Cocktail</option>
            </select>
            <div class="price">
                <input type="number"><span class="euro">€</span>
            </div>
            <textarea class="description-boisson rows="5" cols="33"><\/textarea>
            <button class="btn btn-primary btn-remove-boisson">Supprimer la boisson</button>
        </div>
        <script src="assets/js/saisie/supprimer-element.js"></script>
        `);
        boissonID++;
    });
});
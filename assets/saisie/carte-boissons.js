/*Supprimer la carte des boissons*/
$('.btn-remove-carte-boissons').each((_index, element) => {
    $(element).click(() => {
        let r = confirm('Sûr ?\nOui !');
        if (r == true) {
            $('#carte-boissons').remove();
            $('.btn-add-carte-boissons').removeClass('display-none');
        };
    });
});

/*Ajout Aperitif*/
$('.btn-add-aperitif').each((_index, element) => {
    let aperitif = 0;
    $(element).click(() => {
        $('#aperitifs').append(`
            <div id="aperitif` + aperitif + `">
                <label name="aperitif` + aperitif + `-titre">Titre de l'Aperitif</label>
                <input type="text" name="aperitif` + aperitif + `-titre" class="form-control">

                <label name="aperitif` + aperitif + `-description">Description de l'Aperitif</label>
                <input type="text" name="aperitif` + aperitif + `-description" class="form-control">

                <label>Prix :</label>
                <label name="aperitif` + aperitif + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="aperitif` + aperitif + `-prix-verre"><span class="euro">€</span>
                <label name="aperitif` + aperitif + `-prix-25-cl">25 cl</label>
                <input type="text" name="aperitif` + aperitif + `-prix-25-cl"><span class="euro">€</span>
                <label name="aperitif` + aperitif + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="aperitif` + aperitif + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="aperitif` + aperitif + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="aperitif` + aperitif + `-prix-pichet"><span class="euro">€</span>
                <label name="aperitif` + aperitif + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="aperitif` + aperitif + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-aperitif` + aperitif + `" class="form-control">Supprimer l'aperitif</a>
            </div>
            <script>
                $('#btn-remove-aperitif` + aperitif + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#aperitif` + aperitif + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        aperitif++;
    });
});

/*Ajout Digestif*/
$('.btn-add-digestif').each((_index, element) => {
    let digestif = 0;
    $(element).click(() => {
        $('#digestifs').append(`
            <div id="digestif` + digestif + `">
                <label name="digestif` + digestif + `-titre">Titre du Digestif</label>
                <input type="text" name="digestif` + digestif + `-titre" class="form-control">

                <label name="digestif` + digestif + `-description">Description du Digestif</label>
                <input type="text" name="digestif` + digestif + `-description" class="form-control">

                <label>Prix :</label>
                <label name="digestif` + digestif + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="digestif` + digestif + `-prix-verre"><span class="euro">€</span>
                <label name="digestif` + digestif + `-prix-25-cl">25 cl</label>
                <input type="text" name="digestif` + digestif + `-prix-25-cl"><span class="euro">€</span>
                <label name="digestif` + digestif + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="digestif` + digestif + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="digestif` + digestif + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="digestif` + digestif + `-prix-pichet"><span class="euro">€</span>
                <label name="digestif` + digestif + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="digestif` + digestif + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-digestif` + digestif + `" class="form-control">Supprimer le digestif</a>
            </div>
            <script>
                $('#btn-remove-digestif` + digestif + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#digestif` + digestif + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        digestif++;
    });
});

/*Ajout Bière*/
$('.btn-add-biere').each((_index, element) => {
    let biere = 0;
    $(element).click(() => {
        $('#bieres').append(`
            <div id="biere` + biere + `">
                <label name="biere` + biere + `-titre">Titre de la Bière</label>
                <input type="text" name="biere` + biere + `-titre" class="form-control">

                <label name="biere` + biere + `-description">Description de la Bière</label>
                <input type="text" name="biere` + biere + `-description" class="form-control">

                <label>Prix :</label>
                <label name="biere` + biere + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="biere` + biere + `-prix-verre"><span class="euro">€</span>
                <label name="biere` + biere + `-prix-25-cl">25 cl</label>
                <input type="text" name="biere` + biere + `-prix-25-cl"><span class="euro">€</span>
                <label name="biere` + biere + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="biere` + biere + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="biere` + biere + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="biere` + biere + `-prix-pichet"><span class="euro">€</span>
                <label name="biere` + biere + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="biere` + biere + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-biere` + biere + `" class="form-control">Supprimer la Bière</a>
            </div>
            <script>
                $('#btn-remove-biere` + biere + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#biere` + biere + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        biere++;
    });
});

/*Ajout Soft*/
$('.btn-add-soft').each((_index, element) => {
    let soft = 0;
    $(element).click(() => {
        $('#softs').append(`
            <div id="soft` + soft + `">
                <label name="soft` + soft + `-titre">Titre du Soft</label>
                <input type="text" name="soft` + soft + `-titre" class="form-control">

                <label name="soft` + soft + `-description">Description du Soft</label>
                <input type="text" name="soft` + soft + `-description" class="form-control">

                <label>Prix :</label>
                <label name="soft` + soft + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="soft` + soft + `-prix-verre"><span class="euro">€</span>
                <label name="soft` + soft + `-prix-25-cl">25 cl</label>
                <input type="text" name="soft` + soft + `-prix-25-cl"><span class="euro">€</span>
                <label name="soft` + soft + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="soft` + soft + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="soft` + soft + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="soft` + soft + `-prix-pichet"><span class="euro">€</span>
                <label name="soft` + soft + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="soft` + soft + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-soft` + soft + `" class="form-control">Supprimer le soft</a>
            </div>
            <script>
                $('#btn-remove-soft` + soft + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#soft` + soft + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        soft++;
    });
});

/*Ajout cocktail*/
$('.btn-add-cocktail').each((_index, element) => {
    let cocktail = 0;
    $(element).click(() => {
        $('#cocktails').append(`
            <div id="cocktail` + cocktail + `">
                <label name="cocktail` + cocktail + `-titre">Titre du Cocktail</label>
                <input type="text" name="cocktail` + cocktail + `-titre" class="form-control">

                <label name="cocktail` + cocktail + `-description">Description du Cocktail</label>
                <input type="text" name="cocktail` + cocktail + `-description" class="form-control">

                <label>Prix :</label>
                <label name="cocktail` + cocktail + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="cocktail` + cocktail + `-prix-verre"><span class="euro">€</span>
                <label name="cocktail` + cocktail + `-prix-25-cl">25 cl</label>
                <input type="text" name="cocktail` + cocktail + `-prix-25-cl"><span class="euro">€</span>
                <label name="cocktail` + cocktail + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="cocktail` + cocktail + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="cocktail` + cocktail + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="cocktail` + cocktail + `-prix-pichet"><span class="euro">€</span>
                <label name="cocktail` + cocktail + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="cocktail` + cocktail + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-cocktail` + cocktail + `" class="form-control">Supprimer le cocktail</a>
            </div>
            <script>
                $('#btn-remove-cocktail` + cocktail + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#cocktail` + cocktail + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        cocktail++;
    });
});
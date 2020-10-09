/*Supprimer la carte des vins*/
$('.btn-remove-carte-vins').each((_index, element) => {
    $(element).click(() => {
        let r = confirm('Sûr ?\nOui !');
        if (r == true) {
            $('#carte-vins').remove();
            $('.btn-add-carte-vins').removeClass('display-none');
        };
    });
});

/*Ajout Blanc*/
$('.btn-add-blanc').each((_index, element) => {
    let blanc = 0;
    $(element).click(() => {
        $('#blancs').append(`
            <div id="blanc` + blanc + `">
                <label name="blanc` + blanc + `-titre">Titre du Vin Blanc</label>
                <input type="text" name="blanc` + blanc + `-titre" class="form-control">

                <label name="blanc` + blanc + `-description">Description du Vin Blanc</label>
                <input type="text" name="blanc` + blanc + `-description" class="form-control">

                <label>Prix :</label>
                <label name="blanc` + blanc + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="blanc` + blanc + `-prix-verre"><span class="euro">€</span>
                <label name="blanc` + blanc + `-prix-25-cl">25 cl</label>
                <input type="text" name="blanc` + blanc + `-prix-25-cl"><span class="euro">€</span>
                <label name="blanc` + blanc + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="blanc` + blanc + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="blanc` + blanc + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="blanc` + blanc + `-prix-pichet"><span class="euro">€</span>
                <label name="blanc` + blanc + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="blanc` + blanc + `-prix-bouteille"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-blanc` + blanc + `" class="form-control">Supprimer le vin blanc</a>
            </div>
            <script>
                $('#btn-remove-blanc` + blanc + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#blanc` + blanc + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        blanc++;
    });
});

/*Ajout Rouge*/
$('.btn-add-rouge').each((_index, element) => {
    let rouge = 0;
    $(element).click(() => {
        $('#rouges').append(`
            <div id="rouge` + rouge + `">
                <label name="rouge` + rouge + `-titre">Titre du Vin Rouge</label>
                <input type="text" name="rouge` + rouge + `-titre" class="form-control">

                <label name="rouge` + rouge + `-description">Description du Vin Rouge</label>
                <input type="text" name="rouge` + rouge + `-description" class="form-control">

                <label>Prix :</label>
                <label name="rouge` + rouge + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="rouge` + rouge + `-prix-verre"><span class="euro">€</span>
                <label name="rouge` + rouge + `-prix-25-cl">25 cl</label>
                <input type="text" name="rouge` + rouge + `-prix-25-cl"><span class="euro">€</span>
                <label name="rouge` + rouge + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="rouge` + rouge + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="rouge` + rouge + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="rouge` + rouge + `-prix-pichet"><span class="euro">€</span>
                <label name="rouge` + rouge + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="rouge` + rouge + `-prix-bouteille"><span class="euro">€</span>
                
                <a class="btn btn-primary" id="btn-remove-rouge` + rouge + `" class="form-control">Supprimer le vin rouge</a>
            </div>
            <script>
                $('#btn-remove-rouge` + rouge + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#rouge` + rouge + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        rouge++;
    });
});

/*Ajout rose*/
$('.btn-add-rose').each((_index, element) => {
    let rose = 0;
    $(element).click(() => {
        $('#roses').append(`
            <div id="rose` + rose + `">
                <label name="rose` + rose + `-titre">Titre du Vin Rosé</label>
                <input type="text" name="rose` + rose + `-titre" class="form-control">

                <label name="rose` + rose + `-description">Description du Vin Rosé</label>
                <input type="text" name="rose` + rose + `-description" class="form-control">

                <label>Prix :</label>
                <label name="rose` + rose + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="rose` + rose + `-prix-verre"><span class="euro">€</span>
                <label name="rose` + rose + `-prix-25-cl">25 cl</label>
                <input type="text" name="rose` + rose + `-prix-25-cl"><span class="euro">€</span>
                <label name="rose` + rose + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="rose` + rose + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="rose` + rose + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="rose` + rose + `-prix-pichet"><span class="euro">€</span>
                <label name="rose` + rose + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="rose` + rose + `-prix-bouteille"><span class="euro">€</span>
                
                <a class="btn btn-primary" id="btn-remove-rose` + rose + `" class="form-control">Supprimer le vin rosé</a>
            </div>
            <script>
                $('#btn-remove-rose` + rose + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#rose` + rose + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        rose++;
    });
});

/*Ajout champagne*/
$('.btn-add-champagne').each((_index, element) => {
    let champagne = 0;
    $(element).click(() => {
        $('#champagnes').append(`
            <div id="champagne` + champagne + `">
                <label name="champagne` + champagne + `-titre">Titre du Champagne</label>
                <input type="text" name="champagne` + champagne + `-titre" class="form-control">

                <label name="champagne` + champagne + `-description">Description du Champagne</label>
                <input type="text" name="champagne` + champagne + `-description" class="form-control">

                <label>Prix :</label>
                <label name="champagne` + champagne + `-prix-verre">Verre 12.5 cl</label>
                <input type="text" name="champagne` + champagne + `-prix-verre"><span class="euro">€</span>
                <label name="champagne` + champagne + `-prix-25-cl">25 cl</label>
                <input type="text" name="champagne` + champagne + `-prix-25-cl"><span class="euro">€</span>
                <label name="champagne` + champagne + `-prix-demi-bouteille">Demi Bouteille 37.5 cl</label>
                <input type="text" name="champagne` + champagne + `-prix-demi-bouteille"><span class="euro">€</span>
                <label name="champagne` + champagne + `-prix-pichet">Pichet 50 cl</label>
                <input type="text" name="champagne` + champagne + `-prix-pichet"><span class="euro">€</span>
                <label name="champagne` + champagne + `-prix-bouteille">Bouteille 75cl</label>
                <input type="text" name="champagne` + champagne + `-prix-bouteille"><span class="euro">€</span>
                
                <a class="btn btn-primary" id="btn-remove-champagne` + champagne + `" class="form-control">Supprimer le champagne</a>
            </div>
            <script>
                $('#btn-remove-champagne` + champagne + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#champagne` + champagne + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        champagne++;
    });
});
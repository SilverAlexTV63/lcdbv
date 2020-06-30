/*Ajout Entree*/
$('.btn-add-entree').each((_index, element) => {
    let entree = 0;
    $(element).click(() => {
        $(element).parent().append(`
            <div id="entree` + entree + `">
                <label name="entree` + entree + `-titre">Titre de l'entrée</label>
                <input type="text" name="entree` + entree + `-titre" class="form-control">

                <label name="entree` + entree + `-description">Description de l'entrée</label>
                <input type="text" name="entree` + entree + `-description" class="form-control">

                <label name="entree` + entree + `-prix">Prix de l'entrée</label>
                <input type="text" name="entree` + entree + `-prix"><span class="euro">€</span>
                <a class="btn btn-primary" id="btn-remove-entree` + entree + `" class="form-control">Supprimer l'entrée</a>
            </div>
            <script>
                $('#btn-remove-entree` + entree + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#entree` + entree + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        entree++;
    });
});

/*Ajout Plat*/
$('.btn-add-plat').each((_index, element) => {
    let plat = 0;
    $(element).click(() => {
        $(element).parent().append(`
            <div id="plat` + plat + `">
                <label name="plat` + plat + `-titre">Titre du plat</label>
                <input type="text" name="plat` + plat + `-titre" class="form-control">

                <label name="plat` + plat + `-description">Description du plat</label>
                <input type="text" name="plat` + plat + `-description" class="form-control">

                <label name="plat` + plat + `-prix">Prix du plat</label>
                <input type="text" name="plat` + plat + `-prix" class="form-control"><span class="euro">€</span>
                <a class="btn btn-primary" id="btn-remove-plat` + plat + `">Supprimer le plat</a>
            </div>
            <script>
                $('#btn-remove-plat` + plat + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#plat` + plat + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        plat++;
    });
});

/*Ajout Dessert*/
$('.btn-add-dessert').each((_index, element) => {
    let dessert = 0;
    $(element).click(() => {
        $(element).parent().append(`
            <div id="dessert` + dessert + `">
                <label name="dessert` + dessert + `-titre">Titre du dessert</label>
                <input type="text" name="dessert` + dessert + `-titre" class="form-control">

                <label name="dessert` + dessert + `-description">Description du dessert</label>
                <input type="text" name="dessert` + dessert + `-description" class="form-control">

                <label name="dessert` + dessert + `-prix">Prix du dessert</label>
                <input type="text" name="dessert` + dessert + `-prix" class="form-control"><span class="euro">€</span>
                <a class="btn btn-primary" id="btn-remove-dessert` + dessert + `">Supprimer le dessert</a>
            </div>
            <script>
                $('#btn-remove-dessert` + dessert + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#dessert` + dessert + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        dessert++;
    });
});
/*Supprimer la carte des pizzas*/
$('.btn-remove-carte-pizzas').each((_index, element) => {
    $(element).click(() => {
        let r = confirm('Sûr ?\nOui !');
        if (r == true) {
            $('#carte-pizzas').remove();
            $('.btn-add-carte-pizzas').removeClass('display-none');
        };
    });
});

/*Ajout Pizza*/
$('.btn-add-pizza').each((_index, element) => {
    let pizza = 0;
    $(element).click(() => {
        $('#pizzas').append(`
            <div id="pizza` + pizza + `">
                <label name="pizza` + pizza + `-titre">Titre de la Pizza</label>
                <input type="text" name="pizza` + pizza + `-titre" class="form-control">

                <label name="pizza` + pizza + `-description">Description de la Pizza</label>
                <input type="text" name="pizza` + pizza + `-description" class="form-control">

                <label>Prix :</label>
                <label name="pizza` + pizza + `-prix-tres-petite">Très Petite</label>
                <input type="text" name="pizza` + pizza + `-prix-tres-petite"><span class="euro">€</span>
                <label name="pizza` + pizza + `-prix-petite">Petite</label>
                <input type="text" name="pizza` + pizza + `-prix-petite"><span class="euro">€</span>
                <label name="pizza` + pizza + `-prix-moyenne">Moyenne</label>
                <input type="text" name="pizza` + pizza + `-prix-moyenne"><span class="euro">€</span>
                <label name="pizza` + pizza + `-prix-grande">Grande</label>
                <input type="text" name="pizza` + pizza + `-prix-grande"><span class="euro">€</span>
                <label name="pizza` + pizza + `-prix-tres-grande">Très Grande</label>
                <input type="text" name="pizza` + pizza + `-prix-tres-grande"><span class="euro">€</span>

                <a class="btn btn-primary" id="btn-remove-pizza` + pizza + `" class="form-control">Supprimer la pizza</a>
            </div>
            <script>
                $('#btn-remove-pizza` + pizza + `').each((_index, element)=>{
                    $(element).click(()=>{
                        let r = confirm('Sûr ?\\nOui !');
                        if (r == true){
                            $('#pizza` + pizza + `').remove();
                        };
                    });
                });
            <\/script>
        `);
        pizza++;
    });
});
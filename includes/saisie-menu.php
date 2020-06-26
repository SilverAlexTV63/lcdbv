<div class="container-fluid" id="addButtonContainer" style="margin-top: 1rem;">
    <div class="col btn-container" style="padding: 0;">
        <button class="btn btn-primary btn-add-carte">➕ Ajouter Carte</button>
        <button class="btn btn-primary btn-add-menu">➕ Ajouter Menu</button>
        <button class="btn btn-primary btn-add-menu-carte">➕ Ajouter Menu Carte</button>
        <button class="btn btn-primary btn-add-carte-vins">➕ Ajouter Carte des Vins</button>
        <button class="btn btn-primary btn-add-carte-pizzas">➕ Ajouter Carte des Pizzas</button>
        <button class="btn btn-primary btn-add-carte-boissons">➕ Ajouter Carte des Boissons</button>
        <script type="text/javascript">
            let carteI = 0;
            let carteEntree = 0;
            let cartePlat = 0;
            let carteDessert = 0;
            $('button.btn-add-carte').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="carte`+ carteI +`">
                    <hr>
                        <h4>Carte</h4>
                        <div id="entrees`+ carteI +`">
                            <h3>Entrées</h3>
                            <button class="btn btn-primary btn-add-entreee`+ carteI +`">➕ Ajouter une entrée</button>
                        </div>
                        <div id="plats`+ carteI +`">
                            <h3>Plats</h3>
                            <button class="btn btn-primary btn-add-element">➕ Ajouter un plat</button>
                        </div>
                        <div id="desserts`+ carteI +`">
                            <h3>Desserts</h3>
                            <button class="btn btn-primary btn-add-element">➕ Ajouter un dessert</button>
                        </div>
                    <button class="btn btn-primary btn-remove-carte`+ carteI +`">➖ Supprimer la carte</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-carte`+ carteI +`').click(()=>{
                    $('#carte`+ carteI +`').remove();
                    $('.btn-add-carte').removeClass('display-none');
                });
                <\/script>
                `);
                carteI ++;
                $('.btn-add-carte').addClass('display-none');
            });
        });

        let menuI = 0;
            $('button.btn-add-menu').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="menu`+ menuI +`">
                    <hr>
                        <h4>Menu</h4>
                    <button class="btn btn-primary btn-add-element">➕ Ajouter un élément</button>
                    <button class="btn btn-primary btn-remove-menu`+ menuI +`">➖ Supprimer le menu</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-menu`+ menuI +`').click(()=>{
                    $('#menu`+ menuI +`').remove();
                });
                <\/script>
                `);
                menuI ++;
            });
        });

        let menuCarteI = 0;
            $('button.btn-add-menu-carte').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="menuCarte`+ menuCarteI +`">
                    <hr>
                        <h4>Menu Carte</h4>
                    <button class="btn btn-primary btn-add-element">➕ Ajouter un élément</button>
                    <button class="btn btn-primary btn-remove-menuCarte`+ menuCarteI +`">➖ Supprimer le menu carte</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-menuCarte`+ menuCarteI +`').click(()=>{
                    $('#menuCarte`+ menuCarteI +`').remove();
                });
                <\/script>
                `);
                menuCarteI ++;
            });
        });

        let carteVinsI = 0;
            $('button.btn-add-carte-vins').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="carteVins`+ carteVinsI +`">
                    <hr>
                        <h4>Carte des vins</h4>
                    <button class="btn btn-primary btn-add-element">➕ Ajouter un élément</button>
                    <button class="btn btn-primary btn-remove-carteVins`+ carteVinsI +`">➖ Supprimer la carte des vins</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-carteVins`+ carteVinsI +`').click(()=>{
                    $('#carteVins`+ carteVinsI +`').remove();
                    $('.btn-add-carte-vins').removeClass('display-none');
                });
                <\/script>
                `);
                carteVinsI ++;
                $('.btn-add-carte-vins').addClass('display-none');
            });
        });

        let cartePizzasI = 0;
            $('button.btn-add-carte-pizzas').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="cartePizzas`+ cartePizzasI +`">
                    <hr>
                        <h4>Carte des Pizzas</h4>
                    <button class="btn btn-primary btn-add-element">➕ Ajouter un élément</button>
                    <button class="btn btn-primary btn-remove-cartePizzas`+ cartePizzasI +`">➖ Supprimer la carte des pizzas</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-cartePizzas`+ cartePizzasI +`').click(()=>{
                    $('#cartePizzas`+ cartePizzasI +`').remove();
                    $('.btn-add-carte-pizzas').removeClass('display-none');
                });
                <\/script>
                `);
                cartePizzasI ++; 
                $('.btn-add-carte-pizzas').addClass('display-none');
            });
        });

        let carteBoissonsI = 0;
            $('button.btn-add-carte-boissons').each((_index, element)=>{
            $(element).click(()=>{
                let id = $(element).parent().parent().attr('id');
                $('#' + id).append(`
                <div  id="carteBoissons`+ carteBoissonsI +`">
                    <hr>
                        <h4>Carte des Boissons</h4>
                    <button class="btn btn-primary btn-add-element">➕ Ajouter un élément</button>
                    <button class="btn btn-primary btn-remove-carteBoissons`+ carteBoissonsI +`">➖ Supprimer la carte des boissons</button>
                </div>
                
                <script type="text/javascript">
                $('button.btn-remove-carteBoissons`+ carteBoissonsI +`').click(()=>{
                    $('#carteBoissons`+ carteBoissonsI +`').remove();
                    $('.btn-add-carte-boissons').removeClass('display-none');
                });
                <\/script>
                `);
                cartePizzasI ++;
                $('.btn-add-carte-boissons').addClass('display-none');
            });
        });

        </script>
    </div>
</div>

$('button.btn-remove-entree').each((_index, element) => {
    $(element).click(() => {
        let elementCarte = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer cette entrée ?\nSi vous cliquez sur OK l'entree sera supprimer definitivement.");
        if (r == true) {
            $('#' + elementCarte).remove();
        };
    });
});

$('button.btn-remove-plat').each((_index, element) => {
    $(element).click(() => {
        let elementCarte = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer ce plat ?\nSi vous cliquez sur OK le plat sera supprimer definitivement.");
        if (r == true) {
            $('#' + elementCarte).remove();
        };
    });
});

$('button.btn-remove-dessert').each((_index, element) => {
    $(element).click(() => {
        let elementCarte = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer ce dessert ?\nSi vous cliquez sur OK le dessert sera supprimer definitivement.");
        if (r == true) {
            $('#' + elementCarte).remove();
        };
    });
});

$('button.btn-remove-vin').each((_index, element) => {
    $(element).click(() => {
        let elementVin = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer ce vin ?\nSi vous cliquez sur OK le vin sera supprimer definitivement.");
        if (r == true) {
            $('#' + elementVin).remove();
        };
    });
});

$('button.btn-remove-boisson').each((_index, element) => {
    $(element).click(() => {
        let elementBoisson = $(element).parent().attr('id');
        let r = confirm("Souhaitez vous réellement supprimer cette boisson ?\nSi vous cliquez sur OK la boisson sera supprimer definitivement.");
        if (r == true) {
            $('#' + elementBoisson).remove();
        };
    });
});
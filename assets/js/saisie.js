$('button.btn-repondre').each((_index, element) => {
    $(element).click(() => {
        let id = $(element).parent().attr('id');
        $(element).css({
            "display": "none",
        });
        $('#' + id).append(`
        <div class="container">
            <hr>
            <h4 id="comment-redacion">Répondre au commentaire</h4>
            <small class="form-text text-muted" style="margin-bottom: 10px;">Réservé au restaurateur</small>
            <form action="" method="post">
                <input type="hidden" value="`+ id + `">
                <div class="form-row">
                    <div class="col">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Mme">
                            <label class="form-check-label" for="Mme">Mme</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Mr">
                            <label class="form-check-label" for="Mr">Mr</label>
                            </div>
                        </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Nom" placeholder="Nom">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="fonction" placeholder="Fonction dans l'établissement">
                    </div>
                </div>
                <textarea class="form-control" name="reponse" style="margin: 10px 0;"></textarea>
                <button class="btn btn-primary btn-send" style="border-color: #990000; background-color: #ff9966;">Envoyer</button>
            </form>
        </div>
        `);
    });
});
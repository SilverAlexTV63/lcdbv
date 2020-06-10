class Ajout {
    constructor(btn) {
        this.carteI = this.menuI = this.menuCarteI = thus.carteVinsI = this.cartePizzasI = this.carteBoissonsI = 0;
        this.id = btn.parents().parents().attribute('id');
        btn.addEventListener('click', () => { this.add() });
    }
}

container = document.getElementById(addButtonContainer);
btn = container.querySelector(".btn-add");

console.log(this.id = btn.parents().parents().attribute('id'));
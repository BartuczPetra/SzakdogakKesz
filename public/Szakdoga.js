class Szakdoga {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;

        this.nev = this.elem.children(".szakdogacime");
        this.githublink = this.elem.children(".githublink");
        this.oldallink = this.elem.children(".oldallink");
        this.tagokneve = this.elem.children(".tagok");
        this.modosit = this.elem.children(".modosit");
        this.torol = this.elem.children(".torol");
        this.setAdat(this.adat);

        this.modosit.on("click", () => {
            this.modositKattintas();
        });
        this.torol.on("click", () => {
            this.torolKattintas();
        });
    }

    setAdat(adat) {
        this.nev.html(adat.szakdoga_nev);
        this.githublink.html(adat.githublink);
        this.oldallink.html(adat.oldallink);
        this.tagokneve.html(adat.tagokneve);
    }

    modositKattintas() {
        this.modositKattintasTrigger();
    }
    torolKattintas() {
        this.torolKattintasTrigger();
    }

    modositKattintasTrigger() {
        let esemeny = new CustomEvent("modositKattintas", { detail: this.adat });
        window.dispatchEvent(esemeny);
    }

    torolKattintasTrigger() {
        let esemeny = new CustomEvent("torolKattintas", { detail: this.adat });
        window.dispatchEvent(esemeny);
    }
}
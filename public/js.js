$(function() {
    let szakdogakVegpont = "/api/szakdogak";
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);

    ajax.getAjax(szakdogakVegpont, adatbeolvas);


    const szuloElem = $(".szulo");
    const sablonElem = $(".sablon");

    function adatbeolvas(tomb) {
        $(".szulo").empty();
        tomb.forEach(function(adat) {
            let ujElem = sablonElem.clone().appendTo(szuloElem);
            const szakdoga = new Szakdoga(ujElem, adat);
            console.log(adat);
        });
    }


    sablonElem.remove();


    $(window).on("torolKattintas", (event) => {
        let adat = event.detail;
        ajax.deleteAjax(szakdogakVegpont, adat.id);
        ajax.getAjax(szakdogakVegpont, adatbeolvas);
    });

    $(window).on("modositKattintas", (event) => {
        let adat = event.detail;
        $("#szakdoga_nev").val(adat.szakdoga_nev);
        $("#tagokneve").val(adat.tagokneve);
        $("#oldallink").val(adat.oldallink);
        $("#githublink").val(adat.githublink);
    });

    $("#uj").on("click", () => {
        const adat = {
            szakdoga_nev: $("#szakdoga_nev").val(),
            tagokneve: $("#tagokneve").val(),
            oldallink: $("#oldallink").val(),
            githublink: $("#githublink").val(),
        };
        ajax.postAjax(szakdogakVegpont, adat);
        ajax.getAjax(szakdogakVegpont, adatbeolvas);
    });
});

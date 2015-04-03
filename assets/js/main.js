$(document).on("ready", function() {
    //$("#btc-value").maskMoney({precision: 8});

    $("#btc-value").on("keyup", function(e) {
        var btcValue = (($(this).val()).replace(/\,/g, ""));
        var brlValue = $("#brl-value").data("val");
        var result = parseFloat(btcValue) * parseFloat(brlValue);

        if (isNaN(result)) {
            $("#brl-value").val("");
        } else {
            $("#brl-value").val(result.toFixed(2)).currency({hidePrefix: true, region: "BRL", thousands: ".", decimal: ","});
        }
    });

    $("#brl-value").maskMoney({thousands:'.', decimal:',', affixesStay: false});

    $("#brl-value").on("keyup", function(e) {
        var brlValue = (($(this).val()).replace(/\./g, "")).replace(",", ".");
        console.log(brlValue);
        var btcValue = $(this).data("val");
        var result = parseFloat(brlValue) / parseFloat(btcValue);

        if (isNaN(result)) {
            $("#btc-value").val("");
        } else {
            $("#btc-value").val(result.toFixed(8).trim(0));
        }
    });


    //setInterval(function() {
    //    $.getJSON("ajax.php", function(data) {
    //        $("#average").find(".brl-value").data("val", data.avg).val(data.avg);
    //        $("#bitcointoyou").find(".brl-value").data("val", data.bty).val(data.bty);
    //        $("#foxbit").find(".brl-value").data("val", data.fox).val(data.fox);
    //        $("#localbitcoins").find(".brl-value").data("val", data.lb).val(data.lb);
    //    });
    //}, 5000)
});

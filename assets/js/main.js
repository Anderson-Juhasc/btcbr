$(document).on("ready", function() {

    $("#head-btn").on("click", function(e) {
        var collapse = $(".head-collapse");

        collapse.toggle();

        e.preventDefault();
    });

    $("input[name=source]").on("click", function() {
        if ($("input[name=source]:checked").val() !== "MEDIA") {
            window.location = "index.php?fonte=" + $("input[name=source]:checked").val();
        } else {
            window.location = "index.php";
        }
    });

    $("#btc-value").on("keyup", function(e) {
        var btcValue = (($(this).val()).replace(/\,/g, ""));
        var brlValue = $("#brl-value").data("val");
        var result = btcValue * brlValue;

        if (isNaN(result)) {
            $("#brl-value").val("");
        } else {
            $("#brl-value").val(result.toFixed(2)).currency({hidePrefix: true, region: "BRL", thousands: ".", decimal: ","});
        }
    });

    $("#brl-value").maskMoney({thousands:'.', decimal:',', affixesStay: false});

    $("#brl-value").on("keyup", function(e) {
        var brlValue = (($(this).val()).replace(/\./g, "")).replace(",", ".");
        var btcValue = $(this).data("val");
        var result = brlValue / btcValue;

        if (isNaN(result)) {
            $("#btc-value").val("");
        } else {
            $("#btc-value").val(result.toFixed(8));
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

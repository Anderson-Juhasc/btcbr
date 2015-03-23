$(document).ready(function() {
    $(".btc-value").on("keyup", function(e) {
        var result = ($(this).val()).replace(",", ".") * $(this).parents('.rate').find(".brl-value").data("val");

        $(this).parents('.rate').find(".brl-value").val(result.toFixed(2));
    });

    $(".brl-value").on("keyup", function(e) {
        var result = ($(this).val()).replace(",", ".") / $(this).data("val");

        $(this).parents('.rate').find(".btc-value").val(result.toFixed(8).trim(0));
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

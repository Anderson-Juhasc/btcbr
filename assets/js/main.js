$(document).ready(function() {
    var btcField = $(".btc-value");
    var brlField = $(".brl-value");

    //brlField.currency({
    //    region: "BRL", // The 3 digit ISO code you want to display your currency in
    //    thousands: ".", // Thousands separator
    //    decimal: ",",   // Decimal separator
    //    decimals: 2, // How many decimals to show
    //    hidePrefix: true, // Hide any prefix
    //    hidePostfix: false, // Hide any postfix
    //    convertFrom: "", // If converting, the 3 digit ISO code you want to convert from,
    //    convertLoading: "(Converting...)", // Loading message appended to values while converting
    //});

    $(".btc-value").on("keyup", function(e) {
        var result = ($(this).val()).replace(",", ".") * $(this).parents('.rate').find(".brl-value").data("val");

        $(this).parents('.rate').find(".brl-value").val(result.toFixed(2));
    });

    $(".brl-value").on("keyup", function(e) {
        var result = ($(this).val()).replace(",", ".") / $(this).data("val");

        $(this).parents('.rate').find(".btc-value").val(result.toFixed(8));
    });
});

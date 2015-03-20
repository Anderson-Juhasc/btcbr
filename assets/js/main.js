$(document).ready(function() {
    var btcField = $("#btc-value");
    var brlField = $("#brl-value");

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

    $("#btc-value").on("keyup", function(e) {
        console.log($(this).val());
        console.log(brlField.data("val"));
        var result = ($(this).val()).replace(",", ".") * brlField.data("val");

        brlField.val(result.toFixed(2));

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
    });

    $("#brl-value").on("keyup", function(e) {
        var result = ($(this).val()).replace(",", ".") / $(this).data("val");

        btcField.val(result.toFixed(8));
    });
});

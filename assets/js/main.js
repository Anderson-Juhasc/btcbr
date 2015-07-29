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
        var btcValue = $(this).val();
        var brlValue = $("#brl-value").data("val");
        var result = btcValue * brlValue;

        if (isNaN(result)) {
            $("#brl-value").val("");
        } else {
            $("#brl-value").val(result.toFixed(2));
        }
    });

    $("#brl-value").on("keyup", function(e) {
        var brlValue = $(this).val();
        var btcValue = $(this).data("val");
        var result = brlValue / btcValue;

        if (isNaN(result)) {
            $("#btc-value").val("");
        } else {
            $("#btc-value").val(result.toFixed(8));
        }
    });
});

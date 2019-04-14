$(document).ready(function () {
    $("#submit").click(function () {
        $.ajax({
            type: "POST",
            url: "roomAirVolumeCalculation.php",
            data: {length: $("#length").val(),
                    height: $("#height").val(),
                    width: $("#width").val()},
            cache: false,
            success: function (html) {
                $("#results").html(html);
            }
        })
    })
})
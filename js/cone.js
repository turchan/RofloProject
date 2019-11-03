$(document).ready(function() {

    $('#formCone').submit(function() {
        var radius = $("#radius").val();
        var height_value = $("#height_value").val();

        var volume = height_value / 3 * 3.1415 * (radius * radius);

        var cone_length = Math.sqrt(Math.pow(height_value, 2) + Math.pow(radius, 2));
        var surface = 3.1415 * radius * (parseInt(radius)+ parseInt(cone_length));

        $('#results').append('<h3>Radius: <strong id="radius_result"></strong></h3>');
        $('#results').append('<h3>Height Value: <strong id="height_value_result"></strong></h3>');
        $('#results').append('<h3>Volume: <strong id="volume"></strong></h3>');
        $('#results').append('<h3>Total surface area: <strong id="surface"></strong></h3>');

        $("#radius_result").html(radius);
        $("#height_value_result").html(height_value);
        $("#volume").html(volume.toFixed(3));
        $("#surface").html(surface.toFixed(3));
    });
});
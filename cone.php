<!doctype html>
<html lang="en">
<head>
    <?php include "templates/meta.php"?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/cone.js"></script>
</head>
<body>
    <?php include "templates/navigation.php"?>

    <div class="formInput">
        <div class="container">
            <form id="formCone">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1>Information</h1>
                        <p>For calculating the volume of the cone and total surface area you need to input only
                            two variables: Radius (R) and Height value (H). Others variables are constants</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div class="form-group">
                            <label>Radius (R): </label>
                            <input id="radius" type="number" class="form-control form-control-lg" placeholder="Number" name="">
                        </div>
                        <div class="form-group">
                            <label>Height value (H): </label>
                            <input id="height_value" type="number" class="form-control form-control-lg" placeholder="Number" name="">
                        </div>
                        <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                    </div>
                </div>
            </form>
            <br/>
            <div id="results"></div>
        </div>
    </div>

</body>
</html>
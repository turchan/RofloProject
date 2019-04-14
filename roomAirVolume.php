<!doctype html>
<html lang="en">
<head>
    <?php include "templates/meta.php"?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/room.js"></script>
</head>
<body>

    <?php include "templates/navigation.php"?>

    <div class="formInput">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1>Information</h1>
                        <p>For calculating the room air volume you need to input: length, width and height of the room values</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div class="form-group">
                            <label>Length: </label>
                            <input id="length" type="number" class="form-control form-control-lg" placeholder="Number" name="">
                        </div>
                        <div class="form-group">
                            <label>Width: </label>
                            <input id="width" type="number" class="form-control form-control-lg" placeholder="Number" name="">
                        </div>
                        <div class="form-group">
                            <label>Height: </label>
                            <input id="height" type="number" class="form-control form-control-lg" placeholder="Number" name="">
                        </div>
                        <input id="submit" type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                    </div>
                </div>
            </form>
            <br/>
            <div id="results"></div>
        </div>
    </div>

</body>
</html>
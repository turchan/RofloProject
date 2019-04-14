<!doctype html>
<html lang="en">
<head>
    <?php include "templates/meta.php"?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php include "templates/navigation.php" ?>

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Follow me on vk.com
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Here you can find general information about me, my childhood, have a contact with me and look the main activities in my life</p>
                    <a href="https://vk.com/tturcha">https://vk.com/tturcha</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Follow me on facebook.com
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Here you can find general information about me, about my studies and university life, have a contact with me and look the main activities in my life</p>
                    <a href="https://www.facebook.com/tturcha">https://www.facebook.com/tturcha</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Follow me on instagram.com
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Here you can find the photos of my every day, my adventures and the most interesting places where I have been</p>
                    <a href="https://www.instagram.com/___turcha___/">https://www.instagram.com/___turcha___/</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
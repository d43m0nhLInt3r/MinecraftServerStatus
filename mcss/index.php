<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Minecraft Server Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var tm = 300,
                display = document.querySelector('#time');
            startTimer(tm, display);

        };
    </script>

</head>

<body>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="h5 navbar-brand my-0 me-md-auto fw-normal" href="./../index.php">Website</a>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="index.php">MCSS</a>
            <a class="p-2 text-dark" href="#">Link</a>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row mb-3 text-center" style="height: 300px;">
            <div class="col-6 vw-50 ">
                <div class="card mb-4 shadow-sm" style="height: 300px;">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Server Status</h4>
                    </div>
                    <div class="card-body">
                        <iframe frameborder="0" width="100%" height="100%" src="MinecraftServerStatus.php"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-6 vw-50">
                <div class="card mb-4 shadow-sm"  style="height: 300px;">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Usage</h4>
                    </div>
                    <div class="card-body">
                        <iframe frameborder="0" width="100%" height="100%" src="Usage.php"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom">
        <div class="container-fluid">
            <div class="bg-warning text-center w-100">
                Refresh in <span id="time">05:00</span>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

<?php
header('Refresh: 600; url=index.php');
?>
    
</html>

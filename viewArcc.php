<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="/index.css" rel="stylesheet">
    <title>Project-arCc</title>
</head>

<body class="limit1130 bg-light">
    <nav class="navbar navbar-expand-lg sticky-top" id="menu"></nav>
    <div class="container-fluid" id="banner"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">


                <h1>List of approved files: </h1>
                <?php
                    $files = array_slice(scandir('./repository_approved'), 2);

                    sort($files); // this does the sorting
                    echo '<ul>';
                    foreach($files as $file){
                       echo'<li><a href="./repository_approved/'.$file.'">'.$file.'</a></li>';
                    }
                    echo '</ul>';
                ?>



            </div>
            <div class="col-lg-3 dark-gray" id="keyDetails"></div>
        </div>
    </div>

    <footer class="footer" id="footer"></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<script>
    $(function() {
        $("#menu").load("menu.html", function() {
            var pg = '/Project-arCc' + window.location.href.substring(window.location.href.lastIndexOf("/"));
            $('a[href="' + pg + '"]').parent('li').addClass('active');
        });
        $("#banner").load("banner.html");
        $("#keyDetails").load("keyDetails.html");
        $("#footer").load("footer.html");
    });

</script>

</html>

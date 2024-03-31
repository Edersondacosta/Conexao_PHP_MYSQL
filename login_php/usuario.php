<?php
include("verificacao.php");
if ($_SESSION['setor'] != 'user'){
    header("location: index.php");
    exit();
    }
    ?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row pt-1 pb-1">
        <div class="col-lg-12 text-center">
            <h4 class="text-center">Carousel with Three input search</h4>
            <h6 class="text-center">awesome responsive image slider with a search bar</h6>
        </div>
    </div>
</div>
<section class="search-sec">
    <div class="container">
    <form method="POST" action="user_action.php" class="form">
                            <div class="form-group">
                                <label for="username" class="text-white">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="setor" class="text-white">Setor:</label><br>
                                <input type="text" name="setor" id="setor" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
    </div>
</section>


</body>
</html>
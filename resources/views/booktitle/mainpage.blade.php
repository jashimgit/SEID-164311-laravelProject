<?php
if(!isset($_SESSION)) session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <style>
        h1, h3, h2 {
            text-align: center;
            font-family: Lato Light;

        }
        body {

            /*background-color: #a4aaae;*/
            background-image: url("/image/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: auto;

            }
        #footer {
            text-align: center;
        }
        a   {
            color: rebeccapurple;
            font-family: "Lato Light";
            }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }


    </style>

    <title>Home</title>

</head>

<body >



<!-- Navigation Bar started -->

<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a  class="navbar-brand" href="/booktitle">Welcome Laravel Project</a>
    </div>

    <!-- Search Bar started -->
<!--   <div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button class="btn btn-danger" type="submit">Submit</button>

        </form>
    </div>   -->

    <!-- Search Bar Ended  -->

</nav>

<!-- Navigation Bar ended -->



<<div class="container-fluid">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-2"></div>

        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-8 ">
            <marquee behavior="" direction=""><h1>Project Developed in Laravel</h1></marquee>
            <h1> Project Book Title</h1><br>
            <div class="col-md-6">
                <a href='/booktitle/create'  class='btn btn-success' role='button'><span class='glyphicon glyphicon-star'> Create New Data </a>
            </div>
            <div class="col-md-6">
                <a href='/booktitle/index'  class='btn btn-success' role='button'><span class='glyphicon glyphicon-star'> View All Data </a>
            </div>
        </div>
        <div class=" col-lg-3 col-md-3  col-sm-3 col-xs-2"></div>
    </div>


</div>

<br><br><br><br>
<div class="col-md-12" id="footer">

        {{--<h3>Implemented by <b><a href="https://www.facebook.com/jashim787">Jashim Uddin</b></h3></a>--}}

</div>





</body>
</html>
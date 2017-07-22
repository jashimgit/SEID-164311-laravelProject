<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Book list</title>
</head>
<body>

<!-- Navigation Bar started -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a  class="navbar-brand" href="/booktitle"> Home </a>
    </div>

    <div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button class="btn btn-danger" type="submit">Submit</button>

        </form>
    </div>


</nav>

<!-- Navigation Bar ended -->



<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 style="text-align: center; color: #1b6d85">Book Information</h2>
            <form class="form-horizontal " action="store" method="post">

                {!! csrf_field() !!}
                <div class="form-group ">
                    <label for="booktitle" >Book Title</label>

                    <input type="text" class="form-control" name="bookTitle" placeholder="Enter Book Name" >
                </div>


                <div class="form-group">
                    <label for="authorname" >Author Name</label>

                    <input type="text" class="form-control" name="authorName" placeholder="Enter Author Name">
                </div>

                <input class="btn btn-success" type="submit" value="submit">
                <a href='/booktitle/index' class='btn btn-primary' role='button'>  <span class='glyphicon glyphicon-home'> Return Home</a>

                 <a href='/booktitle/' class='btn btn-primary' role='button'>  <span class='glyphicon glyphicon-home'> Return to  Dashboard </a>

        </div>

    </div>
    <div class="col-md-3"></div>
</div>
<br>
<br>
<br>
<div class="col-md-12">
    <h2 style="text-align: center; font-family: 'Lato Light'">Implemented by <b><a href="https://www.facebook.com/jashim787">Jashim Uddin</b></h2></a>
</div>



</body>
</html>


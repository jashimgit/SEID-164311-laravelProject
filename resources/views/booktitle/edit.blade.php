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
        <a  class="navbar-brand" href="/booktitle">Book Title</a>
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


<h2 style="text-align: center; color: #1b6d85">Book Information</h2>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation">
                    <a href="/booktitle"><i class="glyphicon glyphicon-chevron-right"></i> Dashboard</a>
                </li>
                <li role="presentation">
                    <a href="/booktitle/create"><i class="glyphicon glyphicon-chevron-right"></i> Add New Book</a>
                </li>
                <li role="presentation">
                    <a href="/booktitle/index"><i class="glyphicon glyphicon-chevron-right"></i> View All Book List</a>
                </li>

            </ul>
        </div>
        <div class="col-md-6">

            <form class="form-horizontal " action="update" method="post">

                {!! csrf_field() !!}
                <div class="form-group ">
                    <label for="booktitle" >Book Title</label>

                    <input type="text" class="form-control" name="bookTitle" placeholder="Enter Book Name" value="{!! $booktitle->booktitle !!}" >
                </div>


                <div class="form-group">
                    <label for="authorname" >Author Name</label>

                    <input type="text" class="form-control" name="authorName" placeholder="Enter Author Name" value="{!! $booktitle->authorname !!}">
                </div>

                <input class="btn btn-success" type="submit" value="Update">
                <a href='/booktitle/index' class='btn btn-primary' role='button'>  <span class='glyphicon glyphicon-home'> Return Home</a>
                <input type="hidden" name="id" value="{!! $booktitle->id !!}">
        </div>

    </div>
    <div class="col-md-3"></div>
</div>


<div class="col-md-12">
    <h1 style="font-family: 'Lato Light'; text-align: center">Implemented by <b>Jashim Uddin</b></h1>
</div>


</body>
</html>


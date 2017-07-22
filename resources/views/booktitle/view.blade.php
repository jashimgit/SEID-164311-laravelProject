<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <style>
        tr.td{
            font-family: Lato;
        }
    </style>
    <title>single book info</title>
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

<h1 style="color: #000; text-align: center">Single Book Information </h1>

<!------------  Nav bar started -------------------------->


<!--------------- Nav bar ended -------------------->

<div class="container">
    <div class="row">
        <div class="col-md-2">
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
                <li role="presentation">
                    <a href="/booktitle/index"><i class="glyphicon glyphicon-chevron-right"></i> Back </a>
                </li>

            </ul>
        </div>
        <div class="col-md-7">
            <table class="table table-bordered table-striped">

                <tr>
                    <td>ID</td>
                    <td>Book Title</td>
                    <td>Author Name</td>
                </tr>
                <tr>
                    <td>{!! $booktitle->id !!}</td>
                    <td>{!! $booktitle->booktitle !!}</td>
                    <td>{!! $booktitle->authorname !!}</td>
                </tr>

            </table>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<div class="col-md-12">
    <h1 style="text-align: center"; font-family="Lato" >Implemented by <b><a href="https://www.facebook.com/jashim787">Jashim Uddin</b></h1></a>
</div>

</body>
</html>
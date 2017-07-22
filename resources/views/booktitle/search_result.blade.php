<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <style>
        .sidebar{
            list-style-type: none;
            display: inline-block;
            background-color: deeppink;
        }
    </style>
    <title>All Booktitle</title>
</head>
<body>
<!-- Navigation Bar started -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a  class="navbar-brand" href="/booktitle">Book Title</a>
    </div>

    <div>
        <form class="navbar-form navbar-left" role="search" method="post" name="search" action="search_result">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button class="btn btn-danger" type="submit">Submit</button>

        </form>
    </div>


</nav>

<!-- Navigation Bar ended -->
<h2 style="text-align: center; font-family: Lato"> All Book Information</h2>

<div class="container-fluid">
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
                    <a href="/booktitle/index"><i class="glyphicon glyphicon-chevron-right"></i> Back </a>
                </li>

            </ul>
        </div>
        <div class="col-md-8">
            Total: {!! $searchResult->total() !!} Book (s) <br>

            Showing: {!! $searchResult->count() !!} Book (s) <br>

            {!! $searchResult->links() !!}
            <table class="table table-bordered table-striped">

                <tr>

                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Action Button</th>

                </tr>

                @foreach($searchResult as $booktitle)

                    <tr>

                        <td>{!! $booktitle->id !!}</td>
                        <td>{!! $booktitle->booktitle !!}</td>
                        <td>{!! $booktitle->authorname !!}</td>
                        <td>
                            <a href='/booktitle/view/{!! $booktitle->id !!}'  class='btn btn-info' role='button'><span class='glyphicon glyphicon-eye-open'> View</a>
                            <a href='/booktitle/edit/{!! $booktitle->id !!}'  class='btn btn-success' role='button'><span class='glyphicon glyphicon-edit'> Edit</a>

                            <a href='/booktitle/delete/{!! $booktitle->id !!}' class='btn btn-danger' role='button' onclick='return confirm_delete()'> <span class='glyphicon glyphicon-warning-sign'> Delete </a>

                        </td>



                    </tr>



                @endforeach
            </table>
            </form>
            {!! $searchResult->links() !!}


        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="col-md-12">
    <h1 style="font-family: 'Lato Light'; text-align: center">Implemented by <b>Jashim Uddin</b></h1>
</div>



</body>
</html>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

    <title> All Booktitle </title>
</head>
<body>

<!-- Navigation Bar started -->

<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a  class="navbar-brand" href="/booktitle">Book Title</a>
    </div>

    <div>
        <form class="navbar-form navbar-left" role="search" method="post" action="search_result">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="keyword" >
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

            </ul>
        </div>
        <div class="col-md-8">
            Total: {!! $allBookTitle->total() !!} Book (s) <br>

            Showing: {!! $allBookTitle->count() !!} Book (s) <br>

            {!! $allBookTitle->links() !!}
            <table class="table table-hover table-bordered">

                <tr>

                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Action Button</th>

                </tr>

                @foreach($allBookTitle as $booktitle)

                    <tr>

                        <td>{!! $booktitle->id !!}</td>
                        <td>{!! $booktitle->booktitle !!}</td>
                        <td>{!! $booktitle->authorname !!}</td>
                        <td>
                            <a href='/booktitle/view/{!! $booktitle->id !!}'  class='btn btn-info' role='button'><span class='glyphicon glyphicon-eye-open'> View</a>
                            <a href='/booktitle/edit/{!! $booktitle->id !!}'  class='btn btn-success' role='button'><span class='glyphicon glyphicon-edit'> Edit</a>

                            <a href='/booktitle/delete/{!! $booktitle->id !!}' class='btn btn-danger' role='button' <span class='glyphicon glyphicon-warning-sign'> Delete </a>

                        </td>



                    </tr>



                @endforeach
            </table>
            </form>
            {!! $allBookTitle->links() !!}


        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="col-md-12">
    <h1 style="text-align: center"; font-family="Lato" >Implemented by <b><a href="https://www.facebook.com/jashim787">Jashim Uddin</b></h1></a>
</div>



</body>
</html>






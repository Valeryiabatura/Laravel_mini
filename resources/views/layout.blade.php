<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Phonebook</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="{{ route('home') }}">Телефонный справочник</a>
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <form method="get" action="{{ route('search') }}">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

    <div class="row mt-3 mb-3">
        <div class="col-md-12">

           @yield('content')

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

</div><!-- ./container-->


</body>
</html>

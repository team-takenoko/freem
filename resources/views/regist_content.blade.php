<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Freem</title>
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Freem</a>
                <form class="form-inline col-12">
                    <div class="form-group mx-auto">
                        <input type="text" class="form-control" id="search" placeholder="Search">
                        <button type="submit" class="btn btn-dark">Search</button>
                    </div>
                </form>
            </nav>
        </header>

        <main class="flex-shrink-0" role="main">
            <div class="container" style="padding: 60px 15px 0px 15px;">
                <form action="/upload" method="POST" class="form-inline col-12">
                    {{ csrf_field() }}
                    <div class="form-group mx-auto">
                        <input type="text" class="form-control col-12" name="title" id="upload-content-title" placeholder="Title">
                        <input type="text" class="form-control col-12" name="description" id="upload-content-description" placeholder="Description">
                        <button type="submit" class="btn btn-dark col-12">Registration</button>
                    </div>
                </form>
            </div>
        </main>

    </body>
</html>

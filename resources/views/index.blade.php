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
                <div class="row">
                    <div class="card col-2 my-1" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title1</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title2</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title3</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title4</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title5</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title6</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title7</h5>
                        </div>
                    </div>
                    <div class="card col-2 my-1 my-1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title8</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>

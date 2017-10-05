<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEMNIX</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="header">
        <nav class="navbar navbar-gemnix">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Gemnix</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="header_image_container">
            <img src="/img/header_background.png" />
        </div>
        <div class="droplet">
            <img src="/img/HeaderDroplet.png" />
        </div>
    </div>

    <div class="info_blocks">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block">
                        <div class="icon"><img src="/img/gebruiksvriendelijk.svg" /></div>
                        <div class="title">Gebruiksvriendelijk</div>
                        <div class="text">
                            Vivamus nulla elit, aliquam sed accumsan at, vehicula ac metus. Donec vulputate massa tellus,
                            in elementum lacus vestibulum ac.
                            Sed fringilla massa at magna pharetra, in tempor lorem luctus. Phasellus tristique felis tortor,
                            eget sagittis diam egestas laoreet. Praesent sagittis dolor nulla, vitae rhoncus orci sagittis ac.
                            Nullam sed orci in elit lobortis tincidunt id nec orci. Maecenas lacinia sagittis massa id blandit.
                            Cras malesuada massa sit amet lobortis gravida. Suspendisse potenti. Donec lacinia, ante sed scelerisque luctus,
                            augue tellus interdum dolor, vel auctor nibh nisi nec felis. Quisque mollis nisi quis sem vulputate posuere.
                            Sed consectetur augue ac lorem molestie, quis consectetur est pellentesque.
                        </div>
                        <a href="#" class="btn btn-blue">Gebruiksvriendelijk</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="icon"><img src="/img/responsive.svg" /></div>
                        <div class="title">Responsive</div>
                        <div class="text">
                            Vivamus nulla elit, aliquam sed accumsan at, vehicula ac metus. Donec vulputate massa tellus,
                            in elementum lacus vestibulum ac.
                            Sed fringilla massa at magna pharetra, in tempor lorem luctus. Phasellus tristique felis tortor,
                            eget sagittis diam egestas laoreet. Praesent sagittis dolor nulla, vitae rhoncus orci sagittis ac.
                            Nullam sed orci in elit lobortis tincidunt id nec orci. Maecenas lacinia sagittis massa id blandit.
                            Cras malesuada massa sit amet lobortis gravida. Suspendisse potenti. Donec lacinia, ante sed scelerisque luctus,
                            augue tellus interdum dolor, vel auctor nibh nisi nec felis. Quisque mollis nisi quis sem vulputate posuere.
                            Sed consectetur augue ac lorem molestie, quis consectetur est pellentesque.
                        </div>
                        <a href="#" class="btn btn-blue">Responsive</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="icon"><img src="/img/opmaat.svg" /></div>
                        <div class="title">Op maat</div>
                        <div class="text">
                            Vivamus nulla elit, aliquam sed accumsan at, vehicula ac metus. Donec vulputate massa tellus,
                            in elementum lacus vestibulum ac.
                            Sed fringilla massa at magna pharetra, in tempor lorem luctus. Phasellus tristique felis tortor,
                            eget sagittis diam egestas laoreet. Praesent sagittis dolor nulla, vitae rhoncus orci sagittis ac.
                            Nullam sed orci in elit lobortis tincidunt id nec orci. Maecenas lacinia sagittis massa id blandit.
                            Cras malesuada massa sit amet lobortis gravida. Suspendisse potenti. Donec lacinia, ante sed scelerisque luctus,
                            augue tellus interdum dolor, vel auctor nibh nisi nec felis. Quisque mollis nisi quis sem vulputate posuere.
                            Sed consectetur augue ac lorem molestie, quis consectetur est pellentesque.
                        </div>
                        <a href="#" class="btn btn-blue">Op maat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <img src="/img/Pencil.svg" />
                    <sub>over ons</sub>
                    <div class="text">
                        Vivamus nulla elit, aliquam sed accumsan at, vehicula ac metus. Donec vulputate massa tellus,
                        in elementum lacus vestibulum ac.
                        Sed fringilla massa at magna pharetra, in tempor lorem luctus. Phasellus tristique felis tortor,
                        eget sagittis diam egestas laoreet. Praesent sagittis dolor nulla, vitae rhoncus orci sagittis ac.
                        Nullam sed orci in elit lobortis tincidunt id nec orci. Maecenas lacinia sagittis massa id blandit.
                        Cras malesuada massa sit amet lobortis gravida. Suspendisse potenti. Donec lacinia, ante sed scelerisque luctus,
                        augue tellus interdum dolor, vel auctor nibh nisi nec felis. Quisque mollis nisi quis sem vulputate posuere.
                        Sed consectetur augue ac lorem molestie, quis consectetur est pellentesque.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <h2>CONTACT</h2>
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-4">
                            <input type="text" class="form-control" placeholder="Volledige naam">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Telefoon nummer">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="text" class="form-control" placeholder="Email adres">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-blue" type="submit">Aanvraag versturen</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="topSection">

            <div class="alphaSplitter"><img src="/img/TopFooterAlpha.png"></div>
        </div>
        <div class="bottomSection">

        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
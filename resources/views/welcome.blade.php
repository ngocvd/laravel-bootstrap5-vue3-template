<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="antialiased">
    <div id="app" class="container">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <div class="container">
                    <a href="../" class="navbar-brand">Bootswatch</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="themes">
                                    <a class="dropdown-item" href="../default/">Default</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../cerulean/">Cerulean</a>
                                    <a class="dropdown-item" href="../cosmo/">Cosmo</a>
                                    <a class="dropdown-item" href="../cyborg/">Cyborg</a>
                                    <a class="dropdown-item" href="../darkly/">Darkly</a>
                                    <a class="dropdown-item" href="../flatly/">Flatly</a>
                                    <a class="dropdown-item" href="../journal/">Journal</a>
                                    <a class="dropdown-item" href="../litera/">Litera</a>
                                    <a class="dropdown-item" href="../lumen/">Lumen</a>
                                    <a class="dropdown-item" href="../lux/">Lux</a>
                                    <a class="dropdown-item" href="../materia/">Materia</a>
                                    <a class="dropdown-item" href="../minty/">Minty</a>
                                    <a class="dropdown-item" href="../morph/">Morph</a>
                                    <a class="dropdown-item" href="../pulse/">Pulse</a>
                                    <a class="dropdown-item" href="../quartz/">Quartz</a>
                                    <a class="dropdown-item" href="../sandstone/">Sandstone</a>
                                    <a class="dropdown-item" href="../simplex/">Simplex</a>
                                    <a class="dropdown-item" href="../sketchy/">Sketchy</a>
                                    <a class="dropdown-item" href="../slate/">Slate</a>
                                    <a class="dropdown-item" href="../solar/">Solar</a>
                                    <a class="dropdown-item" href="../spacelab/">Spacelab</a>
                                    <a class="dropdown-item" href="../superhero/">Superhero</a>
                                    <a class="dropdown-item" href="../united/">United</a>
                                    <a class="dropdown-item" href="../vapor/">Vapor</a>
                                    <a class="dropdown-item" href="../yeti/">Yeti</a>
                                    <a class="dropdown-item" href="../zephyr/">Zephyr</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../help/">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://blog.bootswatch.com/">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Default <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="download">
                                    <a class="dropdown-item" rel="noopener" target="_blank" href="https://jsfiddle.net/bootswatch/mLascy62/">Open in JSFiddle</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../_vendor/bootstrap/dist/css/bootstrap.min.css" download>bootstrap.min.css</a>
                                    <a class="dropdown-item" href="../_vendor/bootstrap/dist/css/bootstrap.css" download>bootstrap.css</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-md-auto">
                            <li class="nav-item">
                                <a target="_blank" rel="noopener" class="nav-link" href="https://github.com/thomaspark/bootswatch/"><i class="fa fa-github"></i> GitHub</a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/bootswatch"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cards</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            Sử dụng facebook icon trong bootstrap icon
                            <b-icon-facebook></b-icon-facebook>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        Ấn vào nút Alert để gọi hàm canhbao
                        <button @click="canhbao">Alert</button>
                            
                        </div>
                    </div>

                </div>
            </div>
            <hr class="mx-0 px-0">
            <footer id="footer" style="background-color: #efefef;">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled">
                            <li class="float-end"><a href="#top">Back to top</a></li>
                            <li><a href="https://blog.bootswatch.com/">Blog</a></li>
                            <li><a href="https://blog.bootswatch.com/rss/">RSS</a></li>
                            <li><a href="https://twitter.com/bootswatch">Twitter</a></li>
                            <li><a href="https://github.com/thomaspark/bootswatch">GitHub</a></li>
                            <li><a href="../help/#api">API</a></li>
                            <li><a href="../help/#donate">Donate</a></li>
                        </ul>
                        <p>Made by <a href="https://thomaspark.co/">Thomas Park</a>.</p>
                        <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT License</a>.</p>
                        <p>Based on <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>. Icons from <a href="https://fontawesome.com/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <scroll-to-top />
    <script>
        var myMixin = {
            data() {
                return {
                    style: 'info'
                }
            },
            methods: {
                hello: function() {
                    console.log('hello from mixin!')
                },
                canhbao: function() {
                    alert("cảnh báo");
                },
            }
        }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The store @yield('page-title', 'Home')</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        .containers {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


        .card {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            text-align: center;

        }

        /* Style the image */
        .containersi {
            .card {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }

        }

        .card img {
            width: 100%;
            max-width: 200px;
            margin-bottom: 10px;
            margin: auto;
        }


        .card h3,
        .card p {
            margin: 5px 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="px-3 py-2 text-bg-dark border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>

                            <div class="dropdown">
                                <button class="dropbtn">products</button>
                                <div class="dropdown-content">
                                    <a href="/">products</a>
                                    <a href="products/create">add product</a>
                                    <a href="#">update product</a>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="/categories" class="nav-link text-white">
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="/images" class="nav-link text-white">
                                Images
                            </a>
                        </li>
                        <li>
                            <a href="/contacts" class="nav-link text-white">
                                Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
    </header>


    <main class="container-fluid">@yield('page-content')</main>


    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-body-secondary" href="https://www.facebook.com/bbc" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="text-body-secondary" href="https://www.facebook.com/bbc" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="text-body-secondary" href="https://www.facebook.com/bbc" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </div>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Hello, world!</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row header">
                <div class="col-md-6">
                    <div class="row">
                        
                    <a href="index.php">
                        <img src="image/logo.jpg" alt="logo" class="img-fluid" width="70px">        
                    </a>
                    <h2>Hệ thống quản lý bệnh viện HP</h2>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="row">
                        <div class="language">
                            <a href="" class="float-end"><img src="image/vi.jpg" alt="vietnamese"></a>
                            <a href="" class="float-end"><img src="image/en.jpg" alt="english"></a>

                        </div>
                    </div>
                    <div class="row account">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  float-end text-dark" href="#"
                                id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tên đăng nhập
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid overflow-hidden bg-light">
            <nav class="navbar navbar-expand-lg navbar-light main-nav">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Quản lý bệnh nhân</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i
                                    class="fas fa-search text-primary"></i></button>
                        </form>
                    </div>
                </div>
            </nav>

        </div>
        </header>
    </main>
    </div>
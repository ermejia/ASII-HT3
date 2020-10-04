<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Antigua Burger Menu</title>
    <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/2921/2921822.svg" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link href="webjars/bootstrap/4.5.2/css/bootstrap.min.css"
          rel="stylesheet">
    <script src="webjars/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="webjars/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="https://www.flaticon.com/svg/static/icons/svg/184/184556.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Antigua Burger
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="menuD1.php"> Menú D1<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menuD2.php"> Menú D2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menuD3.php"> Menú D3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menuA1.php"> Menú A1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menuA2.php"> Menú A2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menuC.php"> Menú C </a>
            </li>
        </ul>
    </div>
</nav>


<div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://www.skyboxxatl.net/img/back1.jpg);">
        <h2 align="center" class="mb-4">
            Desayuno 3 Antigua Burger
            Q. 18
        </h2>
    </div>
</div>

<div class="container py-5">
    <div class= "jumbotron bg-gray text-black-50">
        <form name="menu" method="post" action="menuServlet">
            <div class="container">
                <ul>
                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-3" id="demo"></div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="3" name="idmenu" value="3"  id="idmenu" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="Customer"  name="customer">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="Tax Id" name="taxid">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Avena" id="opt1" name="opt1" readonly>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Fruta" id="opt2" name="opt2" readonly>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Bebida" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="opt3" name="opt3" class="custom-select">
                                    <option value="0" selected>Open this select menu</option>
                                    <option value="10">Café</option>
                                    <option value="11">Té</option>
                                    <option value="12">Jugo</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <h3 align="center">Extras Menu Desayuno 2 </h3>
                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra1" name="extra1" class="custom-select">
                                    <option value="0" selected>Extra Huevos</option>
                                    <option value="1">Revueltos</option>
                                    <option value="2">Estrellados</option>
                                    <option value="3">Omelette</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra1" name="cextra1">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra2" name="extra2" class="custom-select">
                                    <option value="0" selected>Extra Frijoles</option>
                                    <option value="4">Parados</option>
                                    <option value="5">Volteados</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra2" name="cextra2">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra3" name="extra3" class="custom-select">
                                    <option value="0">Extra Platanos</option>
                                    <option value="6">Fritos</option>
                                    <option value="7">Cocidos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra3" name="cextra3">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra4" name="extra4" class="custom-select">
                                    <option value="0">Extra Pan</option>
                                    <option value="8">Pan Blanco</option>
                                    <option value="9">Pan Integral</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra4" name="cextra3">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra5" name="extra5" class="custom-select">
                                    <option value="0">Extra Bebida</option>
                                    <option value="14">Jugo de Naranja</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra5" name="cextra3">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra6" name="extra6" class="custom-select">
                                    <option value="0" selected>Extras</option>
                                    <option value="10">Crema</option>
                                    <option value="11">Queso</option>
                                    <option value="12">Tortillas</option>
                                    <option value="13">Fruta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra6" name="cextra4">
                            </div>
                        </div>
                    </li>

                    <div class="grid grid-3">
                        <button aling= "center" class="btn btn-dark" type="submit" >
                            <span class="back">
                            <img src="https://www.flaticon.com/premium-icon/icons/svg/2110/2110760.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                        </span><span class="front">Ordenar</span></button>
                    </div>

                </ul>
            </div>
        </form>
    </div>
</div>
<script src="js/menu.js"></script>
</body>
</html>
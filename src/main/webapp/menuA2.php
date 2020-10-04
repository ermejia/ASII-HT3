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
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://img4.goodfon.com/wallpaper/nbig/9/47/bliuda-assorti-spetsii.jpg);">
        <h2 align="center" class="mb-4">
            Almuerzo 2 Antigua Burger
            Q. 35
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
                                <input type="text" class="form-control" placeholder="4" name="idmenu" value="4"  id="idmenu" readonly>
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
                                <input class="form-control"  type="text" placeholder="Ensalada" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="opt1" name="opt1" class="custom-select">
                                    <option value="0" selected>Open this select menu</option>
                                    <option value="16">Verde</option>
                                    <option value="17">César</option>
                                    <option value="18">Asiática</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Pollo" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="opt2" name="opt2" class="custom-select">
                                    <option value="0" selected>Open this select menu</option>
                                    <option value="19">Frito</option>
                                    <option value="20">A la Parrilla</option>on>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Sopa" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="opt3" name="opt3" class="custom-select">
                                    <option value="0" selected>Open this select menu</option>
                                    <option value="24">Tomate</option>
                                    <option value="25">Frijol</option>on>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control"  type="text" placeholder="Bebida" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="opt4" name="opt4" class="custom-select">
                                    <option value="0" selected>Open this select menu</option>
                                    <option value="21">Gaseosa</option>
                                    <option value="22">Té Frio</option>
                                    <option value="23">Agua Pura</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <h3 align="center">Extras Menu Almuerzo 2 </h3>
                    <li>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="extra1" name="extra1" class="custom-select">
                                    <option value="0" selected>Extra Carne</option>
                                    <option value="15">Torta de Carne</option>
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
                                    <option value="0" selected>Extra Queso</option>
                                    <option value="16">Queso Amarillo</option>
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
                                    <option value="0">Extra Postre</option>
                                    <option value="17">Helado</option>
                                    <option value="18">Pastel</option>
                                    <option value="19">Flan</option>
                                    <option value="20">Gelatina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"  id="cextra3" name="cextra3">
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
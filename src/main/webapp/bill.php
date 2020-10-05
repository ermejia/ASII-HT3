<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antigua Burger Bill</title>
    <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/3566/3566525.svg" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link href="webjars/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet">
    <script src="webjars/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="webjars/jquery/3.0.0/jquery.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062544.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Burger Bill
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Nueva Orden<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <form method="post" action="downloadServlet">
                    <button class="btn btn-warning" type="submit" id="download" name="download" value="txt">TXT</button>
                </form>
            </li>
            <li class="nav-item active">
                <form method="post" action="downloadServlet">
                    <button class="btn btn-warning" type="submit" id="download" name="download" value="json">JSON</button>
                </form>
            </li>
            <li class="nav-item active">
                <form method="post" action="downloadServlet">
                    <button class="btn btn-warning" type="submit" id="download" name="download" value="xml">XML</button>
                </form>
            </li>
            <li class="nav-item active">
                <form method="post" action="downloadServlet">
                    <button class="btn btn-warning" type="submit" id="download" name="download" value="csv">CSV</button>
                </form>
            </li>
            <li class="nav-item active">
                <form method="post" action="downloadServlet">
                    <button class="btn btn-warning" type="submit" id="download" name="download" value="html">HTML</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
<body>
<div id="body" class="form-group">
</div>
<script src ="js/bill.js"></script>
</body>
</html>
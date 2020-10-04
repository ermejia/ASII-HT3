<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antigua Burger Login</title>
    <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/2170/2170153.svg" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link href="webjars/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet">
    <script src="webjars/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="webjars/jquery/3.0.0/jquery.min.js"></script>
</head>
<body>

<div class="sidenav" style="background-image: url(https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80);">
    <div class="login-main-text">
        <h2>Antigua Burger<br>Página de Acceso</h2>
    </div>
</div>

<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form name="loginForm" method="post" action="loginServlet">
                <div class="form-group">
                    <label>Cashier Name</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <button type="submit" class="btn btn-dark">Ingresar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>





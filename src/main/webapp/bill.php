<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antigua Burger Bill</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link href="webjars/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet">
    <script src="webjars/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="webjars/jquery/3.0.0/jquery.min.js"></script>
</head>
<body>
<div id="body" class="form-group">
</div>

<div>
    <form method="post" action="downloadServlet">
        <input type="submit" id="download" name="download" value="txt">
    </form>
    <form method="post" action="downloadServlet">
        <input type="submit" id="download" name="download" value="json">
    </form>
    <form method="post" action="downloadServlet">
        <input type="submit" id="download" name="download" value="xml">
    </form>
    <form method="post" action="downloadServlet">
        <input type="submit" id="download" name="download" value="csv">
    </form>
</div>


<script src ="js/bill.js"></script>
</body>
</html>
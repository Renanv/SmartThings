<html>

<head>
    <style>
        table {
            width:60%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            padding: 5px;
            text-align: center;
        }
        td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #e9e9e9;
        }
        table#t01 tr:nth-child(odd) {
            background-color: #fbfbfb;
        }
        table#t01 th {
            background-color: black;
            color: white;
        }

        body {
            font-family: Arial;
            background: #ffffff;
            margin: 0;
            overflow-x: hidden;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        .topnav a {
            float: right;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .column {
            float: left;
            width: 100%;
            padding-top: 30px;
            padding-left: 300px;
        }

    </style>
</head>
<body>
<div class="topnav">
    <a href="rensLog.php" style="float:left">Home</a>
    <a href="logout.php">Logout</a>
    <a href="settings.php">Settings</a>
</div>
<div class="column">
    <table id="t01">
        <tr>
            <th>Timestamp</th>
            <th>Actie</th>
        </tr>
        <tr>
            <td></td>
            <td>&#128065; &#10060;</td>
        </tr>

</div>
</table>
</body>
</html>
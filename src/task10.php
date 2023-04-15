
<?php
// task 10
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <select name="" id="category" value="" style="padding:10px;">
        <option value="Electronics">Electronics</option>
        <option value="Jewelry">Jewelry</option>
    </select>
    <select name="" id="items" value="" style="padding:10px;"></select>
    <select name="" id="ids" value="" style="padding:10px;"></select>
    <br><br><br><br>
    <table border=1>
        <thead> 
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>BRAND</th>
            </tr>
    </thead>
    <tbody id="desc"></tbody>
    </table>


    <script src="handler.js"></script>
</body>

</html>
<!-- task 9 -->
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
    <h1>Currency converter</h1>
    <input type="number" placeholder="currency" id='task9input' style="padding:10px; margin:10px;">&nbsp;&nbsp;&nbsp;
    <select name="" id="from" value="" style="padding:10px;">
        <option value="CHOOSE">SELECT</option>
        <option value="KWT">Kuwaiti dinar</option>
        <option value="GBP">British pound</option>
        <option value="EUR">Euro</option>
        <option value="RUPEE">Indian Rupee</option>
    </select>
    <span class="reverse" style="font-size:large;"><button><------></button></span>
    <select name="" id="to" value="" style="padding:10px;">
       <option value="CHOOSE">SELECT</option>
        <option value="GBP">British pound</option>
        <option value="KWT">Kuwaiti dinar</option>
        <option value="EUR">Euro</option>
        <option value="RUPEE">Indian Rupee</option>
    </select>
    <input type="number" placeholder="currency" id='task9res' style="padding:10px; margin:10px;">&nbsp;&nbsp;&nbsp;
   
  
   


    <script src="handler.js"></script>
</body>
</html>
<?php $info = MyHelper::info(); ?>
<html>
<head>
    <title> Internal Server error </title>
    <link rel="shortcut icon" type="image/png" href="{{asset($info->favicon)}}"/>
    <style>
        a{text-decoration: none;color:#fff;}
        a:hover{color: red;}
    </style>
</head>
<body>
<div  style="text-align: center">
    <img src="{{asset('images/default/500.jpg')}}" alt="Internal Server error!"><br>
    <a style="background: green;padding: 10px;border-radius:3px; " href="{{URL::to('/')}}"> Go Back to home </a>
</div>

</body>
</html>




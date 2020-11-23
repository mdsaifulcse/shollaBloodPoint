<?php $info = MyHelper::info(); ?>
<html>
    <head>
        <title> Page Not Found </title>
        <link rel="shortcut icon" type="image/png" href="{{asset($info->favicon)}}"/>
        <style>
            a{text-decoration: none;color:#fff;}
            a:hover{color: red;}
        </style>
    </head>
    <body>
    <div  style="text-align: center">
        <img src="{{asset('images/default/404.png')}}" alt="Page Not Found!"><br>
        <a style="background: green;padding: 10px;border-radius:3px; " href="{{URL::to('/')}}"> Go Back to home </a>
    </div>

    </body>
</html>




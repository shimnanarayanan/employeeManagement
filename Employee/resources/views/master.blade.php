<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Registration Form</title>
    <link href="../css/page.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .label-test
        {
            color:black;
             font-weight: bold; 
        }
        section{
    background-color: white;
}

 .span-test{
    border-color:red;
 }
    </style>
    
    
</head>
        
<body>
    @include('nav')
    
    

   @yield('content')
 


</body>

@include('footer')
       <script src="../js/page.min.js"></script>
       <script src="../js/script.js"></script>
</html>
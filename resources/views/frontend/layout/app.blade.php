     <title>@yield('title')</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     @include('../frontend/inc/styles')
     
<!--
Tooplate 2120 Ben Resume
https://www.tooplate.com/view/2120-ben-resume
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
@include('../frontend/inc/header')
@yield('content')



@include('../frontend/inc/scripts')

</body>
</html>
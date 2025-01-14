<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand bg-dark navbar-dark ">
   <div class="container">
       <a href="" class="navbar-brand">Logo</a>
       <ul class="navbar-nav">
           <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
           <li><a href="" class="nav-link">Product</a></li>
           <li><a href="{{route('student-create')}}" class="nav-link">Add-Student</a></li>
           <li><a href="{{route('student-index')}}" class="nav-link">Manage-Student</a></li>
           <li><a href="" class="nav-link">Full Name</a></li>
       </ul>
   </div>

</nav>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/sass/custom.scss' , 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

<header class="header">
<a href="{{route('post.index')}}"><div class="h-logo" >
    <img src={{asset("storage/$")}} alt="...">
</div>
    </a>
<div>
    <form class="d-flex" role="search" method="get" action="{{route('search')}}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
    <div>
        <ul class="header_ul">
            <li>
                <a href="">
                    <img src="...">
                    <p>wwwwwww</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="...">
                    <p>wwwwwww</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="...">
                    <p>wwwwwww</p>
                </a>
            </li>
        </ul>
    </div>
</header>

<div class="category">
    <ul class="small_category">
        <li><a href="#">Programming</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">News</a></li>
        <li><a href="{{route('post.create')}}">Create Post</a></li>

    </ul>
</div>

<div class="main_content">
@yield('content')


</div>

</body>
</html>

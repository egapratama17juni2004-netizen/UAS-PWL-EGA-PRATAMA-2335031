<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
MBG - Makanan Bergizi Gratis
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>


<body>


<nav class="navbar navbar-expand-lg navbar-light fixed-top">


<div class="container">


<a class="navbar-brand fw-bold" href="/">

🍜 MBG

</a>



<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">


<span class="navbar-toggler-icon"></span>


</button>




<div class="collapse navbar-collapse" id="menu">


<ul class="navbar-nav ms-auto">


<li class="nav-item">

<a class="nav-link" href="/">
Beranda
</a>

</li>


<li class="nav-item">

<a class="nav-link" href="/produk">
Menu Gizi
</a>

</li>


<li class="nav-item">

<a class="nav-link" href="/tentang">
Tentang MBG
</a>

</li>


<li class="nav-item">

<a class="nav-link" href="/kontak">
Kontak
</a>

</li>


</ul>


</div>


</div>


</nav>




@yield('content')




<footer>


<div class="container text-center">


<h5>
MBG - Makanan Bergizi Gratis
</h5>


<p>
Program penyediaan makanan sehat dan bergizi
</p>


<p>
© 2026 MBG Indonesia
</p>


</div>


</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<script>


window.addEventListener('scroll',()=>{


let elements=document.querySelectorAll('.reveal');


elements.forEach(el=>{


let position=el.getBoundingClientRect().top;


let screen=window.innerHeight;


if(position < screen - 100){


el.classList.add('active');


}


});


});


</script>

</body>


</html>
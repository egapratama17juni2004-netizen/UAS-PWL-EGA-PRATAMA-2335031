@extends('layouts.app')


@section('content')


<div class="container py-5 mt-5">



<div class="text-center mb-5">


<h1 class="fw-bold text-success">

Kontak Layanan MBG

</h1>


<p>

Sampaikan pertanyaan, saran, atau informasi terkait program makanan bergizi.

</p>


</div>






<div class="row">





<div class="col-md-7">



<div class="food-card p-4">



<form>



<div class="mb-3">


<label class="form-label">

Nama Lengkap

</label>


<input 
type="text"
class="form-control"
placeholder="Masukkan nama">


</div>





<div class="mb-3">


<label class="form-label">

Email

</label>


<input 
type="email"
class="form-control"
placeholder="Masukkan email">


</div>





<div class="mb-3">


<label class="form-label">

Pesan

</label>


<textarea

class="form-control"

rows="5"

placeholder="Tulis pesan">

</textarea>


</div>




<button class="btn btn-mbg">


Kirim Pesan


</button>




</form>


</div>



</div>







<div class="col-md-5 mt-4 mt-md-0">


<div class="food-card p-4">



<h4 class="text-success">

Informasi MBG

</h4>




<p>

📍 Lokasi:
Pusat Layanan MBG

</p>



<p>

☎ Telepon:
085841335862

</p>



<p>

✉ Email:
egapratama@mbg.id

</p>



<p>

🕒 Jam Layanan:
Senin - Sabtu

</p>



</div>


</div>






</div>




</div>



@endsection
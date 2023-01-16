@extends('homebase.main')

@section('home')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-3 mb-2 bg-secondary text-black bg-opacity-50">
                <div class="collumn">
                    <h3>ANIME</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/onepiece.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">ONE PIECE</h5>
                          <p class="card-text">By Eiichiro Oda</p>
                          <a href="/detail1" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>
                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">NARUTO VOL.1</h5>
                          <p class="card-text">By Masashi Kishimoto</p>

                          <a href="#" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/boruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">BORUTO VOL.1</h5>
                          <p class="card-text">By Masashi Kishimoto</p>

                          <a href="#" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/kuroko.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">KUROKO NO BASKET VOL.1</h5>
                          <p class="card-text">By Tadatoshi Fujimaki</p>

                          <a href="#" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

            </div>

        </div>
    </div>








</div>



@endsection

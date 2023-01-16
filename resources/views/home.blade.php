@extends('homebase.main')

@section('home')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="p-3 mb-2 bg-secondary text-black bg-opacity-50">
                <div class="collumn">
                    <h3>Book List</h3>
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
                        <img src="img/laskarpelangi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">LASKAR PELANGI</h5>
                          <p class="card-text">By Andrea Hirata</p>

                          <a href="/detail2" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/perangdunia1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">PERANG DUNIA 1</h5>
                          <p class="card-text">By Alfi Arifian</p>
                          <a href="/detail3" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <img src="img/ayatcinta.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">AYAT AYAT CINTA</h5>
                          <p class="card-text">Habiburrahman El Shirazy</p>

                          <a href="/detail4" class="btn text-bg-warning  ">Detail</a>
                        </div>
                      </div>

                </div>

            </div>

        </div>
    </div>








</div>



@endsection

@extends('layouts.app')

@section('content')
<div class="container overflow-hidden text-center">
    <div class="row">
        <div class="col-2 border-end border-light p-2 border-opacity-10" style="height: 800px;">
            <div class="card" style="width: 90px;float:right;">
                <a href="{{ route('persion') }}"><img src="https://assets.tumblr.com/images/default_avatar/octahedron_open_64.png" class="card-img-top"  width="50px" height="70px"></a>
            </div>
        </div>
        <div class="col-6 border-end border-light p-2 border-opacity-10" >
            <div class="d-flex justify-content-evenly ">
                <div class="p-3"><i class="fas fa-text-height " style="font-size: 30px;"></i></div>
                <div class="p-3"><i class="fas fa-photo-video text-warning" style="font-size: 30px;"></i></div>
                <div class="p-3"><i class="fas fa-quote-left " style="font-size: 30px;"></i></div>
                <div class="p-3"><i class="fas fa-video text-danger" style="font-size: 30px;"></i></i></div>
              </div>
            <div class="card" >
            <div class="d-flex mb-3">
              <div class="me-auto p-2">
                <h5 class="card-title float-start text-start p-3">dart</h5>
              </div>
              <div class="p-2">
              <div class="dropdown p-3">
                        <button class="btn  " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
              </div>
            </div>


            <img src="https://64.media.tumblr.com/91c3e0161344e3d5656b1158ee744882/d987a6232d3b59a0-f9/s1280x1920/ca939a645bb217b38ff1dce027a93fdcfda432f8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title float-start text-primary fst-italic">#Card title</h5><br>
              <p class="card-text float-start ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              <div class="container mt-3">
              <a href="#" title="
              " data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Popover text">aloooo</a>
              <span data-tooltip='Menu chính'>

<button class='btn' aria-label='Menu chính' role='Menu chính' type='button'>

<svg><use xlink:href='/responsive/sprite_v1_6.css.svg#ic_menu_black_24dp' xmlns:xlink='http://www.w3.org/1999/xlink'></use></svg>

</button>

</span>
              </div>
              <div class="d-flex flex-row-reverse">
                  <div class="p-2">
                  <a href="#" class="btn "><i class="fa-solid fa-heart fa-beat"></i></a>
                  </div>
                  <div class="p-2">
                  <a href="#" class="btn "><i class="fa-solid fa-comment fa-beat"></i></a>
                  </div>

                  <div class="p-2">
                  <a href="#" class="btn "><i class="fa-solid fa-share-nodes fa-beat"></i></a>
                  </div>
                  <div class="p-2">Flex item 3</div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-3 p-2" style="height: 800px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

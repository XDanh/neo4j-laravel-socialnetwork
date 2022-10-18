@extends('layouts.app')
@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
<style>
    .hovericon:hover {
    margin-top: -2px;
    }
    .slider {
    width: 100%;

    background-color: rgb(255, 255, 255);
    }

    .slick-slide {
    margin: 0px 20px;
    }

    .slick-slide  img{
    width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
    color: white;
    }
    .slick-slide {
    transition: all ease-in-out .3s;
    }

</style>
@endsection
@section('content')
    <div class="container overflow-hidden text-center">
        <div class="bg-light rounded-bottom position-relative" style="height: 450px; width:90%;margin-right: auto;margin-left: auto;">
            <div class="position-absolute bg-success bg-opacity-10  text-dark" style="bottom: 2%; right:1%;">
                <button type="button" class="btn btn-outline-success">
                    <i class="fa-solid fa-camera"></i> Thêm ảnh bìa
                </button>
            </div>
            <div class="bg-light position-absolute top-100 start-0 translate-middle rounded-circle" style="padding: 2px;margin-left:5px;">
                <div class=" position-absolute translate-middle rounded-4" style="top:80%;left:25px;">
                    <button type="button" class="btn btn-outline-success p-2 py-1 rounded-circle">
                        <i class="fa-solid fa-camera text-dark" style="font-size: 20px;"></i>
                    </button>
                </div>
                <button type="button" class="btn btn-outline-success rounded-circle p-0">
                    <img src="https://assets.tumblr.com/images/default_avatar/cone_open_96.png" class="rounded-circle"  alt="..." width="150px" height="140px;">
                </button>
            </div>
        </div>

        <div class="d-flex justify-content-start mb-5" style="margin-left:150px;">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                </li>
              </ul>
        </div>
    </div>
    <div class="text-center bg-success text-dark bg-opacity-50 p-1">
        <section class="container slider slider-nav p-3 mb-1 rounded" data-sizes="50vw">
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div><div class="card" style="width: 17rem;">
                <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </section>
        <div class="container" style="width: 80%;">
            <div class="row" style="background-color:black;">
                <div class="col-5 p-2">
                    <div class="order-md-last">
                        <ul class="list-group mb-3">
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6 class="my-0">اسم المنتج</h6>
                              <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$12</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6 class="my-0">المنتج الثاني</h6>
                              <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$8</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6 class="my-0">البند الثالث</h6>
                              <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$5</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                              <h6 class="my-0">رمز ترويجي</h6>
                              <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between">
                            <span>مجموع (USD)</span>
                            <strong>$20</strong>
                          </li>
                        </ul>

                        <form action="{{ route('user.store') }}" class="card p-2" method="post">
                            @csrf
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="رمز ترويجي" name="name">
                            <button type="submit" class="btn btn-secondary">تحقق</button>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="col-7 p-2">
                    <div class="bg-light rounded-top">
                        <div class="list-group-item list-group-item-action d-flex gap-3 p-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="twbs" width="50" height="50" class="rounded-circle">
                            <div class="d-flex justify-content-between" style="width: 100%;">
                                <div class="form-floating" style="width: 100%;">
                                    <input type="button" class="form-control rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal"  placeholder="name@example.com">
                                    <label for="floatingInput">Bạn muốn bán gì?</label>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-evenly bg-dark rounded-bottom ">
                        <div class="p-3 hovericon"><i class="fas fa-text-height text-light" style="font-size: 30px;"></i></div>
                        <div class="p-3 hovericon"><i class="fas fa-photo-video text-warning" style="font-size: 30px;"></i></div>
                        <div class="p-3 hovericon"><i class="fas fa-quote-left text-light" style="font-size: 30px;"></i></div>
                        <div class="p-3 hovericon"><i class="fas fa-video text-danger" style="font-size: 30px;"></i></i></div>
                    </div>
                    <div class="bg-dark mt-2 p-2 rounded ">
                        <div class="list-group-item list-group-item-action d-flex gap-3 p-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="twbs" width="40" height="40" class="rounded-circle">
                            <div class="d-flex justify-content-between">
                                <div class="form-floating text-light text-start fs-6">
                                    laaaaa
                                    <div class="form-floating text-light">5 tháng 10</div>
                                </div>
                            </div>
                            <div>
                            </div>
                            <div class="form-floating text-light text-end fs-6 ">
                                <div class="form-floating text-light">5 tháng 10</div>
                            </div>
                        </div>
                        <div class="card" >
                            <img src="https://img.freepik.com/free-photo/grunge-paint-background_1409-1337.jpg?w=2000" >
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="d-flex text-light border-top mt-2">
                            <div class="p-2 flex-grow-1"><a class="nav-link active" aria-current="page" href="#" style="font-size:20px;"><i class="fa-solid fa-thumbs-up"></i> Thích</a></div>
                            <div class="p-2 flex-grow-1"><a class="nav-link active" aria-current="page" href="#" style="font-size:20px;"><i class="fa-solid fa-message"></i> Bình luận</a></div>
                            <div class="p-2 flex-grow-1"><a class="nav-link active" aria-current="page" href="#" style="font-size:20px;"><i class="fa-solid fa-share"></i> Chia sẽ</a></div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{asset('slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,

            centerMode: true,
            focusOnSelect: true
        });
    });

    </script>
@endsection



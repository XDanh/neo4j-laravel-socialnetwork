<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mạng Xã Hội Nông Sản Việt Nam</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

    <nav>
        <div class="container">
            <h2 class="log">
                MXH
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder = "Tìm kiếm">
            </div>

            <div class="create">
                <label class="btn btn-primary" for="create-post">Đăng xuất</label>
                <div class="profile-photo">
                    <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="left">
                <a href="" class="profile">
                    <div class="profile-photo">
                        <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                    </div>
                    <div class="handle">
                        <h4>ABC</h4>
                    </div>
                </a>

                <div class="sidebar">
                   <a href="" class="menu-item active">
                    <span><i class="uil uil-home"></i></span> <h3>Trang chủ</h3>
                   </a>
                   <a href="" class="menu-item">
                    <span><i class="uil uil-store"></i></span> <h3>Sàn giao dịch</h3>
                   </a>
                   <a href="#" class="menu-item" id="notifications">
                    <span><i class="uil uil-bell"><small class="notification-count">3</small></i></span> <h3>Thông báo</h3>
                    <div class="notifications-popup">
                        <div>
                            <div class="profile-photo">
                                <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                            </div>
                            <div class="notification-body">
                                <b>Ten ABC</b> da theo doi ban
                                <small class="text-muted">1 phut truoc</small>
                            </div>
                        </div>
                        <div>
                            <div class="profile-photo">
                                <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                            </div>
                            <div class="notification-body">
                                <b>Ten ABC</b> da theo doi ban
                                <small class="text-muted">2 phut truoc</small>
                            </div>
                        </div>
                        <div>
                            <div class="profile-photo">
                                <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                            </div>
                            <div class="notification-body">
                                <b>Ten ABC</b> da theo doi ban
                                <small class="text-muted">3 phut truoc</small>
                            </div>
                        </div>
                    </div>
                   </a>
                   <a href="" class="menu-item" id="messages-notifications">
                    <span><i class="uil uil-chat"><small class="notification-count">4</small></i></span> <h3>Tin nhắn</h3>
                   </a>
                   <a href="#" class="menu-item" id="theme">
                    <span><i class="uil uil-palette"></i></span> <h3>Chủ đề giao diện</h3>
                   </a>
                   <a href="" class="menu-item">
                    <span><i class="uil uil-setting"></i></span> <h3>Cài đặt</h3>
                   </a>
                </div>

                <label for="create-post"></label>
            </div>
            <div class="middle">
                <form class="create-post">
                    <div class="profile-photo">
                        <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                    </div>
                    <input type="text" placeholder="Bạn đang suy nghĩ gì?" id="create-post">
                    <input type="file" name="" id="">
                    <input type="submit" value="Đăng bài" class="btn btn-primary">
                </form>

                <div class="feeds">
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>ABC</h3>
                                    <small>3 phut truoc</small>
                                </div>
                            </div>
                        </div>
                        <div class="photo">
                            <img src="https://media.ex-cdn.com/EXP/media.suckhoecongdongonline.vn/files/phamhuyen/2018/04/06/thanh-phan-dinh-duong-cua-qua-xoai-1349.jpg" alt="">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-thumbs-up"></i></span>
                                <span><i class="uil uil-comment"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <p>Co <b>3000</b> luot thich va <b>200</b> binh luan</p>
                        </div>

                        <div class="caption">
                            <p><b>ABC</b> can ban trai xoai</p>
                        </div>

                        <a href="" class="view-post">Xem bai viet</a>
                    </div>
<!-----------bai 1--------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>ABC</h3>
                                    <small>3 phut truoc</small>
                                </div>
                            </div>
                        </div>
                        <div class="photo">
                            <img src="https://media.ex-cdn.com/EXP/media.suckhoecongdongonline.vn/files/phamhuyen/2018/04/06/thanh-phan-dinh-duong-cua-qua-xoai-1349.jpg" alt="">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-thumbs-up"></i></span>
                                <span><i class="uil uil-comment"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <p>Co <b>3000</b> luot thich va <b>200</b> binh luan</p>
                        </div>

                        <div class="caption">
                            <p><b>ABC</b> can ban trai xoai</p>
                        </div>

                        <a href="" class="view-post">Xem bai viet</a>
                    </div>

<!-----------bai 2--------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="https://thao68.com/wp-content/uploads/2022/03/avatar-facebook-20.jpg" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>ABC</h3>
                                    <small>3 phut truoc</small>
                                </div>
                            </div>
                        </div>
                        <div class="photo">
                            <img src="https://media.ex-cdn.com/EXP/media.suckhoecongdongonline.vn/files/phamhuyen/2018/04/06/thanh-phan-dinh-duong-cua-qua-xoai-1349.jpg" alt="">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-thumbs-up"></i></span>
                                <span><i class="uil uil-comment"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <p>Co <b>3000</b> luot thich va <b>200</b> binh luan</p>
                        </div>

                        <div class="caption">
                            <p><b>ABC</b> can ban trai xoai</p>
                        </div>

                        <a href="" class="view-post">Xem bài viết</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<div class="customize-theme">
    <div class="card">
        <h2>Chủ đề giao diện</h2>
        <p class="text-muted">Tuỳ chỉnh cỡ chữ và màu nền</p>

        <div class="font-size">
            <h4>Cỡ chữ</h4>
            <div>
                <h6>Aa</h6>
                <div class="choose-size">
                    <span class="font-size-1"></span>
                    <span class="font-size-2"></span>
                    <span class="font-size-3 active"></span>
                    <span class="font-size-4"></span>
                    <span class="font-size-5"></span>
                </div>
                <h3>Aa</h3>
            </div>
        </div>

        <div class="background">
            <h4>Màu nền</h4>
            <div class="choose-bg">
                <div class="bg-1 active">
                    <span></span>
                    <h5 for="bg-1">Sáng</h5>
                </div>
                <div class="bg-2">
                    <span></span>
                    <h5 for="bg-2">Tối</h5>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</html>
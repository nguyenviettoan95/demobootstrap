<html>
    <head>
        <meta charset="utf-8">
        <title>Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" ><link>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" ><link>
        <link rel="stylesheet" type="text/css" href="css/begin.css"></link>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script type="text/javascript">
      $(window).scroll(function () {
          if ($(this).scrollTop() > 200) {
      $('#cuon').fadeIn();
          } else {
                $('#cuon').fadeOut();
          }
  });
       $(document).ready(function(){
          $('#cuon').click(function(){
            $("body,html").animate({scrollTop:0},600);
            //return false;
          });
       });
       </script>
    </head>
    <body class="container-fluid">
    <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div id="head">
                        <img alt="Fjords" src="img/logo81.png" ><br><br>
                        <div id="menu">
                        <div id="fixmenu">
                        <nav class="navbar navbar-inverse ">
                          <div class="container-fluid">
                            <div class="navbar-header visible-xs">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Trang chủ</a>
                            </div>
                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                              <li ><a href="#">Trang chủ</a></li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tuyển sinh
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Sau đại học</a></li>
                                  <li><a href="#">Đại học và Cao đẳng</a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đào Tạo<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Sau đại học</a></li>
                                  <li><a href="#">Đại học và Cao đẳng</a></li>
                                </ul>
                                </li>
                              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nghiên cứu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Chuyên san KHTN thuộc tạp chí PT KH&CN</a></li>
                                </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đơn vị<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Các phòng chức năng</a></li>
                                  <li><a href="#">Các khoa</a></li>
                                  <li><a href="#">Các phòng thí nghiệm</a></li>
                                  <li><a href="#">Các trung tâm</a></li>
                                </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đảng - Đoàn thể<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Đảng bộ</a></li>
                                  <li><a href="#">Công đoàn</a></li>
                                  <li><a href="#">Đoàn thanh niên-Hội sinh viên</a></li>
                                  <li><a href="#">Hội cựu chiến binh</a></li>
                                </ul>
                                </li>
                                <li ><a href="#">Trang web tin tức</a></li>
                            </ul>
                            </div>
                          </div>
                        </nav>
                        </div>
                        <!-- slide hình -->
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 col-12">
                        <div id="myCarousel" class="carousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                                  <div class="item active">
                                    <img src="img/la.jpg" alt="Los Angeles" style="width:100%;">
                                    <div class="carousel-caption">
                                      <h3>Los Angeles</h3>
                                      <p>LA is always so much fun!</p>
                                    </div>
                                  </div>
                                                              
                                  <div class="item">
                                    <img src="img/chicago.jpg" alt="Chicago" style="width:100%;">
                                    <div class="carousel-caption">
                                      <h3>Chicago</h3>
                                      <p>Thank you, Chicago!</p>
                                    </div>
                                  </div>
                                
                                  <div class="item">
                                    <img src="img/ny.jpg" alt="New York" style="width:100%;">
                                    <div class="carousel-caption">
                                      <h3>New York</h3>
                                      <p>We love the Big Apple!</p>
                                    </div>
                                  </div>
                                   <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
  
                            </div>
                              </div>
                </div>
                        <!-- kết thúc phần slide hình -->
                        </div>
                    </div>
                </div>
                 <div class="clearfix"></div><br>
                 <br>

                 <div class="container conten">
                    <div class="col-md-12 ">
                        <div class="tieude1">
                                TIN TỨC - SỰ KIỆN
                        </div>
                    </div>
                 
                 <div class="clearfix"></div><br>
                <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="tieude">
                            <P>THÔNG TIN DÀNH CHO CB-CNV-NLĐ</P>
                        </div>
                    <div class="panel panel-default panel-body">
                        <a href="http://www.hcmus.edu.vn/component/content/article/103-phong-qhqt-qlda/thong-tin-danh-cho-can-bo/116-khoa-hoc-tieng-anh-english-for-career-development-chuong-trinh-english-asean-fellow-cua-lanh-su-quan-my-tphcm?Itemid=437">Khóa học tiếng Anh "English for Career Development" - chương trình English ASEAN Fellow của Lãnh sự quán Mỹ TP.HCM</a><br><br>
                        <a href="http://www.hcmus.edu.vn/component/content/article/91-th%C3%B4ng-b%C3%A1o-d%C3%A0nh-cho-c%C3%A1n-b%E1%BB%99,-gi%E1%BA%A3ng-vi%C3%AAn/114-thong-bao-vv-chan-chinh-cong-tac-quan-ly-nha-nuoc-cac-nhiem-vu-kh-cn-cua-so-khoa-hoc-va-cong-nghe-tp-hcm?Itemid=437">Thông báo vv chấn chỉnh công tác quản lý nhà nước các nhiệm vụ KH&CN của Sở Khoa học và Công Nghệ Tp. HCM</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="tieude">
                                <P>THÔNG TIN DÀNH CHO NGƯỜI HỌC</P>
                            </div>
                    <div class="panel panel-default panel-body">
                        <a href="http://www.hcmus.edu.vn/component/content/article/109-ph%C3%B2ng-ctsv/thong-tin-danh-cho-sinh-vien/115-thong-bao-nhan-thuong-hk2-16-17-doi-voi-sinh-vien-dat-thanh-tich-cao-ky-xet-tuyen-nam-2016.html?Itemid=437">Thông báo nhận thưởng HK2/16-17 đối với sinh viên đạt thành tích cao kỳ xét tuyển năm 2016</a><br><br>
                        <a href="http://www.hcmus.edu.vn/component/content/article/85-th%C3%B4ng-b%C3%A1o-d%C3%A0nh-cho-sinh-vi%C3%AAn/111-thong-bao-vv-xet-tang-giai-thuong-le-van-thoi-danh-cho-de-tai-tot-nghiep-xuat-sac-nam-2017.html?Itemid=437">Thông báo vv xét tặng giải thưởng Lê Văn Thới dành cho đề tài tốt nghiệp xuất sắc năm 2017</a><br>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="tieude">
                            <P>TIN HOẠT ĐỘNG</P>
                        </div>
                    <div class="panel panel-default panel-body">
                        <a href="http://www.hcmus.edu.vn/component/content/article/80-tin-hoat-dong/125-truong-dai-hoc-khoa-hoc-tu-nhien-dhqg-hcm-cong-bo-diem-dai-hoc-cao-dang-chinh-quy-nam-2017?Itemid=437">Trường Đại học Khoa học Tự nhiên, ĐHQG-HCM công bố điểm đại học, cao đẳng chính quy năm 2017</a><br><br>
                        <a href="http://www.hcmus.edu.vn/component/content/article/80-tin-hoat-dong/122-dai-hoi-hoi-cuu-chien-binh-viet-nam-truong-dai-hoc-khoa-hoc-tu-nhien-nhiem-ky-vi-2017-2022?Itemid=437">Đại Hội Hội Cựu Chiến Binh Việt Nam Trường Đại Học Khoa Học Tự Nhiên - Nhiệm Kỳ VI (2017-2022)</a>
                    </div>
                </div>
              </div>
                <div class="clearfix"></div>
                <div class=" col-md-12">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 tieude2">
                        <strong>KẾ HOẠCH CHIẾN LƯỢC GIAI ĐOẠN 2016 - 2020 CỦA TRƯỜNG ĐẠI HỌC KHOA HỌC TỰ NHIÊN</strong><br><br>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                <div class="col-xs-12 col-sm-6">
                    
                    <img  class="img-responsive" alt="" src="img/frink_roatan_2015_460.jpg" style="width:500px;height:300px;"><br>
                    
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="sppd-ddon sppd-ddon-accordion">
                      <div class="sppd-ddon-content">
                        <div class="sppd-panel-group">
                          <div class="sppd-panel sppd-panel-default">
                            <div class="sppd-panel-heading active">
                              <span class="sppd-panel-title">
                                <i class="glyphicon glyphicon-tasks"></i>Giới thiệu
                              </span>
                              <span class="sppd-toggle-direction">
                                <i class="glyphicon glyphicon-menu-right"></i>
                              </span>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
                <footer>
                  Mọi thông tin liên quan đến trang web, xin vui lòng liên hệ theo địa chỉ Email: toankrb95@gmail.com<br>  
                                              Phát triển bởi NVT<br>
                </footer>
                
                <a href="#"><i class="glyphicon glyphicon-chevron-up" id = "cuon" aria-hidden="true"></i></a>
           </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </div>
    </body>
</html>
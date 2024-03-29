<?php
session_start();
if(!isset($_SESSION['login'])){
header("location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hahalolo</title>
    <script
      src="https://kit.fontawesome.com/511b6f8ac2.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <style>
        body {
          background-image: url("assets/img/bautroi.jpg");
          background-repeat: no-repeat;
          background-size: 100%;
        }
        </style>
    <div id="header">
      <div class="left">
          <img class="ms-4" src="assets/img/hahalolo.png" alt="">
          <span src="assets/img/2x/baseline_shopping_cart_white_24dp.png"></span>
      </div>
      <div class="mid d-flex ">
          <div>
              <div class="d-flex justify-content-center  "><span class="material-icons">
                      feed
                  </span></div>
              <div class=""><span>Bảng Tin</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      pedal_bike
                  </span></div>
              <div><span>Trải Nghiệm</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      location_on</div>
              <div><span>Tour</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      maps_home_work
                  </span></div>
              <div><span>Khách Sạn</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      flight
                  </span></div>
              <div><span class="">Vé Máy Bay</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      directions_car
                  </span></div>
              <div><span>Thuê Xe</span></div>
          </div>
          <div>
              <div class="d-flex justify-content-center"><span class="material-icons">
                      add_shopping_cart
                  </span></div>
              <div><Span>Mua Sắm</Span></div>
          </div>

      </div>
      <div class="right ">
          <span class="material-icons">
              shopping_cart
          </span>
          <span class="material-icons">
              credit_card
          </span>
          <?php
            if(isset($_SESSION['login'])){
                echo "<a class='' style='text-decoration: none'>".$_SESSION['login']."</a>";
                echo "<a class='' style='text-decoration: none' href='logout.php'><span class='material-icons'>
                logout
                </span></a>";
            }
            ?>
      </div>

  </div>
  <div class="container ">
  <div id="main">
      <!-- <img src="assets/img/bien.jpg" alt=""> -->

      <div class="text">
         <i> <h1 class="">Tìm nơi dừng chân hoàn hảo cùng Hahalolo!</h1></i>
          <h6>Từ những khu nghỉ dưỡng thanh bình đến những căn hộ sang trọng hiện đại</h6>
      </div>   
      <div class="search container ">
          <div class="div1 d-flex flex-column">
              <span>Bạn Muốn ở đâu ?</span>
              <input type="text">
          </div>
          <div class="div2 d-flex flex-column">
              <span>Ngày Nhận Phòng</span>
              <input type="date">
          </div>
          <div class="div3 d-flex flex-column">
              <div class="d-flex flex-column">
                  <span>Ngày Trả Phòng</span>
                  <input type="date">
              </div>
          </div>
          <div class="div4 d-flex flex-column">
              <div class="d-flex flex-column">
                  <span>Số Người</span>
                <select name="" id="">
                  <option value="">1 người lớn - 0 trẻ em - 1 phòng</option>
                  <option value="">2 người lớn - 0 trẻ em - 1 phòng</option>
                </select>
                  
              </div>
          </div>
          
          <div class="div5 d-flex flex-column">
          <a href="timkiem.php" class="d-flex justify-content-center"><button class="btn btn-primary " >Tìm Kiếm</button></a>
              <a style="text-decoration: none" href="">Tra cứu đặt phòng</a>
          </div>
      </div>
      </div>
      <!--  -->
      <div class="container-fluid mt-4">
        <h4>Chỗ nghỉ nổi bật</h4>
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo4.jpg" alt="" class ="card-img-top ">
              </div>
              <div class="card-body ">
                
                <h5>HAMPTON INN UTICA NY</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >172 - 180 North Genesee StrUtica NY 13502 US</a
                >
                <p class="card-text0 ">Giá mỗi đêm</p>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo3.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>HOMEWOOD SUITES BY HILTON SYRACUSE</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >6006 Fair Lakes Road East Syracuse NY 13057 US</a
                >
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">7.553.840 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo8.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>THE REVERIE SAIGON</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >22 to 36 Nguyen Hue Blvd Ho Chi Minh City 70000 VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">5.510.400 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo7.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>SOMERSET HO CHI MINH CITY</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
        
       
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo2.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>REX HOTEL</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >141 Nguyen Hue Boulevard DHO CHI MINH CITY 70000 VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo4.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>CITADINES REGENCY SAIGON</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</a
                >
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo5.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>VISSAI SAIGON HOTEL</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >144 Nguyen Van Troi StreetHo Chi Minh City 70000 VN</a
                >
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo1.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>SHERWOOD SUITES LIF</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >192 Nam Ky Khoi Nghia Ho Chi Minh City 700000 VN</a
                >
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
        
      
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo4.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>LOTTE HOTEL SAIGON</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >2A 4A Ton Duc Thang Street Ho Chi Minh 700000 VN
                </a>
                <p class="card-text0 g-3">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo1.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>THE REVERIE RESIDENTIAL SUITES</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >22 Nguyen Hue Boulevard Ho Chi Minh City 70000 VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 ">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo7.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>SEDONA SUITES HO CHI MINH CITY</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >67 Le Loi Boulevard Ho Chi Minh City VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="imgplace">
                <img src="assets/img/halo3.jpg" alt="" class ="card-img-top">
              </div>
              <div class="card-body">
                <h5>INTERCONTINENTAL SAIGON RESIDENCES</h5>
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps" class="card-link"
                  >CORNER NGUYEN DU ST. HAIHO CHI MINH CITY VN
                </a>
                <p class="card-text0">Giá mỗi đêm</p>
                <p class="card-text">3.212.563 đ</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
      

      <!-- ---- -->
      <div class="container ">
        <div class="row">
        <h4>Trải nghiệm du lịch cùng Hahalolo</h4>
        <div class=" col-md-6">
          
          <img src="assets/img/halo9.jpg" alt="" class="img-fluid rounded">
          <h2>Amiana Ưu đãi Đặc biệt – Vịnh Thiên Đường Mời Gọi Giá chỉ từ 1,750,000 VND</h2>
          <p class=" lead fs-6">
            Trải nghiệm vẻ đẹp bình yên mang đến những phút giây thật sự thư giãn dành riêng cho bạn trong tiết trời sang thu đang dần trải dài trên nền cát trắng dưới bầu trời xanh ngát tại Amiana Resort Nha Trang. Sẽ là tuần trăng mật thật lãng mạn hay trải nghiệm kỳ nghỉ đáng nhớ trên bãi biển hoặc tạo nên những phút giây sum họp bên gia đình, bạn bè với Ưu...
            <a href="">Xem thêm</a>
            </p>
        
        </div>
        <div class=" col-md-6 ">
          <div class="card1 g-3">
            <img src="assets/img/halo10.jpg"  alt="" class="img-fluid rounded">
            <div class="row1 ms-4 lh-1" >
            <h4>Tận hưởng kỳ nghỉ xa hoa giữa lòng thành phố tại khách sạn Arts Saigon – Mgallery sang-xịn-mịn</h4>
            <p class="lead fs-6 lh-1">
              Tổng Hợp Khuyến Mãi Các Khách Sạn Tại Đà Nẵng Nhân Dịp Cuối Năm 2021 1. KHUYẾN MẠI CUỐI NĂM VỚI NHIỀU ƯU ĐÃI TẠI CICILIA ĐÀ NẴNG!...
              <a href="">Xem thêm</a>
            </p>
            </div>
          </div>
          <div class="card1 g-3 ">
            <img src="assets/img/halo11.jpg"  alt="" class="img-fluid rounded">
            <div class="row1 ms-4 lh-1" >
            <h4>Tổng Hợp Khuyến Mãi Các Khách Sạn Tại Đà Nẵng Nhân Dịp Cuối Năm 2021</h4>
            <p class="lead fs-6 ">
              Tổng Hợp Khuyến Mãi Các Khách Sạn Tại Đà Nẵng Nhân Dịp Cuối Năm 2021 1. KHUYẾN MẠI CUỐI NĂM VỚI NHIỀU ƯU ĐÃI TẠI CICILIA ĐÀ NẴNG!...
              <a href="">Xem thêm</a>
            </p>
            </div>
          </div>
          <div class="card1 g-3">
            <img src="assets/img/halo12.jpg"  alt="" class="img-fluid rounded">
            <div class="row1 ms-4 lh-1" >
            <h4>Dabao Concept – Codo, tiệm cà phê mang tinh thần xứ Huế giữa lòng Sài Gòn</h4>
            <p class="lead fs-6 ">
              Tổng Hợp Khuyến Mãi Các Khách Sạn Tại Đà Nẵng Nhân Dịp Cuối Năm 2021 1. KHUYẾN MẠI CUỐI NĂM VỚI NHIỀU ƯU ĐÃI TẠI CICILIA ĐÀ NẴNG!...
              <a href="">Xem thêm</a>
            </p>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="button">Thêm nhiều trải nghiệm khác</button>
          
        </div>
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
  </body>
</html>

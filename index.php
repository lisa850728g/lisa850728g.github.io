<?php
try {
    //解析config.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/config.ini'));
    //对mysqli类进行实例化
    $con = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    if (mysqli_connect_errno()) {    //判断是否成功连接上MySQL数据库
      throw new Exception('資料庫連接錯誤！');  //如果连接错误，则抛出异常
    } else {
        echo '数据库连接成功！';   //打印连接成功的提示
    }
} catch (Exception $e) {        //捕获异常
  echo $e->getMessage();    //打印异常信息
}
$data=mysqli_query($con, "select * from News order by art_date desc limit 6");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/Style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Start of  Zendesk Widget script -->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=b01b0988-573e-4568-967a-b58513ed4fcf"> </script>
  <!-- End of  Zendesk Widget script -->
  <title>IEIT | International Entrepreneur Initiative Taiwan</title>
</head>

<body>
  <?php include('head.php') ?>
  <section class="banner-section">
    <div class="banner-overlay" style="width: 100%;height: 100%;position: absolute;z-index: 1;">
      <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.3);width: 100%;height: 100%;"></div>
    </div>
    <div class="banner-image" style="background-image:url('./img/taipei.jpg');opacity:1"></div>
    <div class="SIbanner-text">
      Come to Taiwan & make your business thrive
    </div>
  </section>
  <div class="subtitle"><a href="./index.php" style="color: #222831;">About IEIT</a></div>
  <section class="container mt-4">
    <div class="row">
      <div class="text-center col-lg-3 col-md-6">
        <a href="#AboutTaiwan"><img class="pic" src="img/icon1.png"></a>
        <div class="title3"><a href="#AboutTaiwan" style="color: #222831;">About Taiwan</a></div>
        <div class="title4">Learn more about Taiwan and get our chracteristics</div>
      </div>
      <div class="text-center col-lg-3 col-md-6">
        <img class="pic" data-toggle="collapse" data-target="#demo" src="img/icon2.png">
        <div class="title3" data-toggle="collapse" data-target="#demo">Permit & Regulations</div>
        <div id="demo" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
          <a href="./permit.php" style="color: #222831;font-weight: bold;">Visas</a>
          <br>
          <a href="./incorporation.php" style="color: #222831;font-weight: bold;">Incorporation</a>
        </div>
        <div class="title4">Know what you have to do before working in Taiwan</div>
      </div>
      <div class="text-center col-lg-3 col-md-6">
        <img class="pic" data-toggle="collapse" data-target="#demo1" src="img/icon3.png">
        <div class="title3" data-toggle="collapse" data-target="#demo1">Service</div>
        <div id="demo1" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
          <a href="./IA.php" style="color: #222831;font-weight: bold;">Incubator & Accelerator</a>
          <br>
          <a href="./incentive.php" style="color: #222831;font-weight: bold;">Government Incentive</a>
          <br>
          <a href="./CC.php" style="color: #222831;font-weight: bold;">Chamber & Community</a>
        </div>
        <div class="title4">Get more services and resources from the government</div>
      </div>
      <div class="text-center col-lg-3 col-md-6">
      <a href="#carouselExampleControls"><img class="pic" src="img/icon4.png"></a>
        <div class="title3"><a href="#carouselExampleControls" style="color: #222831;">News & Story</a></div>
        <div class="title4">Obtain the news and stories about entrepreneurship</div>
      </div>
    </div>
  </section>

  <section class="entity mb-5" id="AboutTaiwan">
    <div class="reason left">
      <div class="reason-inner">
        <div class="image">
          <div class="image-inner">
            <img src="img/introduction.jpeg" alt="">
              </div>
          </div>
          <div class="text">
            <div class="text-inner">
              <div style="float:left;">
                <img src="./img/earth.png" style="width:40px;height:40px;float:left;">
                <div style="display:inline-block;margin-left:12px;">
                  <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LOCATION</p>
                  <p style="margin-bottom:3px;" class="Introduction">Taiwan sits at the center of the Asia Pacific region</p>
                </div>
              </div>
              <div style="clear: both;"></div>
              <div style="float:left;margin-top:10px;">
                <img src="./img/airplane.png" style="width:40px;height:40px;float:left;">
                <div style="display:inline-block;margin-left:12px;">
                  <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">TRAFFIC</p>
                  <p style="margin-bottom:3px;" class="Introduction">Convenient public transportation systems</p>
                </div>
              </div>
              <div style="clear: both;"></div>
              <div style="float:left;margin-top:10px;">
                <img src="./img/hat.png" style="width:40px;height:40px;float:left;">
                <div style="display:inline-block;margin-left:12px;">
                  <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">EDUCATED WORKFORCE</p>
                  <p style="margin-bottom:3px;" class="Introduction">Large and highly educated workforce pool</p>
                </div>
              </div>
              <div style="clear: both;"></div>
              <div style="float:left;margin-top:10px;">
                <img src="./img/computer.png" style="width:40px;height:40px;float:left;">
                <div style="display:inline-block;margin-left:12px;" class="IT">
                  <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">IT CLUSTER</p>
                  <p style="margin-bottom:3px;" class="Introduction">IT industrial cluster plays a critical role</p>
                </div>
              </div>
              <div style="clear: both;"></div>
              <div style="float:left;margin-top:10px;">
                <img src="./img/handshake.png" style="width:40px;height:40px;float:left;">
                <div style="display:inline-block;margin-left:12px;">
                  <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LEGAL ENVIRONMENT</p>
                  <p style="margin-bottom:3px;width:auto;" class="Introduction">A rigorous legal and regulatory environment for<br>intellectual property and foreign investment</p>
                </div>
              </div>
              <div style="clear: both;"></div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="container mb-5 mt-2">
    <div class="row">
      <div class="col-sm-12 col-lg-6 intro-text">
        <p class="video-title">Sincere talk of enterprises</p>
        <p class="mb-3">Welcome to Taiwan to start your own business. Use IEIT to find your own business positioning and unique market opportunities.</p>
      </div>
      <div class="col-sm-12 col-lg-6">
        <iframe src="https://www.youtube.com/embed/nrcoqfM1cyA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="300px"></iframe>
      </div>
    </div>
  </section>

  
  <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
          <?php
          for ($i=1;$i<=(mysqli_num_rows($data)-3);$i++) {
            $News=mysqli_fetch_array($data);?>
            <div class="col-4">
              <?php echo "<a href=NewsContent.php?id=".$News['id']."><img class=\"pic2\" src=" . $News['pic'] . "></a>" ?>
              <p class="title5"><?php echo "<a href=NewsContent.php?id=".$News['id'].">" . mb_strimwidth(strip_tags($News['title']), 0, 45, "...", "UTF-8") . "</a>"?></p>
              <p class="title6"><?php echo mb_strimwidth(strip_tags($News['content']), 0, 100, "...", "UTF-8"); ?></p>
            </div>
          <?php
          }
          ?>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
          <?php
          for ($i=4;$i<=mysqli_num_rows($data);$i++) {
            $News=mysqli_fetch_array($data);?>
            <div class="col-4">
              <?php echo "<a href=NewsContent.php?id=".$News['id']."><img class=\"pic2\" src=" . $News['pic'] . "></a>" ?>
              <p class="title5"><?php echo "<a href=NewsContent.php?id=".$News['id'].">" . mb_strimwidth(strip_tags($News['title']), 0, 45, "...", "UTF-8") . "</a>"?></p>
              <p class="title6"><?php echo mb_strimwidth(strip_tags($News['content']), 0, 100, "...", "UTF-8"); ?></p>
            </div>
          <?php
          }
          ?>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="color: #212529">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only" style="color: #212529">Previous</span>
        </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="color: #212529">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" style="color: #212529">Next</span>
        </a>
    </div>
  </div>
  <script src="js/index.js"></script>
  <?php include('footer.php') ?>
  <?php
       mysqli_close($con);
  ?>
</body>

</html>

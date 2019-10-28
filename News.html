<?php
try {
    //解析config.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/config.ini'));
    //对mysqli类进行实例化
    $con = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    if (mysqli_connect_errno()) {    //判断是否成功连接上MySQL数据库
      throw new Exception('数据库连接错误！');  //如果连接错误，则抛出异常
    } else {
        //echo '数据库连接成功！你偷偷按F5齁';   //打印连接成功的提示
    }
} catch (Exception $e) {        //捕获异常
  echo $e->getMessage();    //打印异常信息
}

$data=mysqli_query($con, "select * from News order by art_date DESC");


        //幾筆資料
        $data_nums = mysqli_num_rows($data);
        echo $data_nums;
        //一頁10筆
        $per = 3;
        $pages = ceil($data_nums/$per);
        echo '<br>' . $pages;
        //假如$_GET["page"]未設置，則設定起始頁數，若已設置，則確認頁數只能夠是數值資料
        if (!isset($_GET["page"])) {
            $page = 1;
        } else {
            $page = intval($_GET["page"]);
        }
        //每一頁開始的資料序號
        $start = ($page - 1) * $per;
        if ($start != 0) {
            $start += 1;
        }
        $limit_sql =  "select * from News order by art_date DESC LIMIT " . $start . "," . $per;
        $data=mysqli_query($con, $limit_sql);
        mysqli_query("set character set 'utf8'");//讀庫
        mysqli_query("set names 'utf8'");//寫庫 
        //$result = mysqli_query($con, $limit_sql) or die("Error");
//echo mysqli_num_rows($data);
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
    <link rel="stylesheet" href="css/News.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <?php include('head.php') ?>
    <div id="NewsPage" class="container">
        <div>
        <div class="sc-box">
            <form action="News.php" method="post">
                <input type="text" class="sc-input" placeholder="請輸入關鍵字..." name="search">
                <input type="submit" class="sc-submit" name="searchbutton" value="Search">
            </form>
          </div>
            <?php
                if (isset($_POST[search]) and $_POST[search] == "") {
                    echo "<script>alert('Cannot be blank here');</script>";
                }
                $searchresult=$_POST[search];
                //echo '接收到的內容為: '.$searchresult . '<br>';
                //$user_input = implode(" ", $searchresult);
                //print_r(explode(" ",$searchresult));
                $user_input = explode(" ", trim($searchresult));
                //echo count($user_input) . "<br>";
                //for($j=0;$j<count($user_input);$j++){
                    //echo $user_input[$j]. "<br>";;
                //}
                //使用者input切割字串跟title的切割字串＆content的切割字串，可以直接用array下去比對，沒有input直接全部顯示，有input顯示搜結果
            ?>
        </div>
                    <div>
                        <div id="News">
                        </div>
                        <div class="NewsWord">
                            <p class="NewsTitle" style="">Taiwan’s NDC Says Government-Backed Project for Startups Has “Delivered Concrete Results”</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div style="background-color: #222831;height: 5px;margin-top: 18px;"></div>

        <div class="page">
        <?php
        $previous_page = $page-1;
        if ($previous_page != 0) {
            echo "<a href=?page=" . $previous_page . " class=\"navi-paging left\"><img src=\"img/arrowleft.png\"></a>";
            //← Previous</a>";
        } else {
            echo "<div class=\"no-navi\"/>";
        }
        echo "<p class=\"pagenumber\">".$page."</p>";

        $next_page = $page+1;
        if ($next_page != $pages +1 && $pages > 1) {
            echo "<a href=?page=".$next_page." class=\"navi-paging right\"><img src=\"img/arrowright.png\"></a>";
            //Next →</a>";
        }
        ?>
        </div>
    </div>
    <?php
       mysqli_close($con);
    ?>
  </body>
</html>

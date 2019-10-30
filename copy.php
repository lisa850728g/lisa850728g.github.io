<?php
try {
    //解析config.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/config.ini'));
    //对mysqli类进行实例化
    $con = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    mysqli_query("set names 'utf8'");
    if (mysqli_connect_errno()) {    //判断是否成功连接上MySQL数据库
      throw new Exception('数据库连接错误！');  //如果连接错误，则抛出异常
    } else {
        //echo '数据库连接成功！';   //打印连接成功的提示
    }
} catch (Exception $e) {        //捕获异常
  echo $e->getMessage();    //打印异常信息
}
header("Content-Type:text/html; charset=utf-8");
//echo mysqli_num_rows($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/NewsContent.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body style="position:relative">
    <?php include('head.php') ?>
    <div id="Page" class="container">
        <?php
            $id = $_GET["id"];
            $data=mysqli_query($con, "select * from wp_posts where id ='10257'");
            $News=mysqli_fetch_array($data);
            mysqli_query("set character set 'utf8'");//讀庫
            mysqli_query("set names 'utf8'");//寫庫 
        ?>
        <div class="title"><?php echo $News['post_title'];?></div>
        <div class="date mt-3 mb-3"><?php echo $News['post_date']?></div>
        <div class="clearfix"></div>
        <div>
            <div class="NewsContent pt-3 mb-5">
            t place to host the IIC," she added. 〔Original :Meet Startup @ TW〕 
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <?php
       mysqli_close($con);
    ?>
 </body>
</html>

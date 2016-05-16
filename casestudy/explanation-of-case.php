<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
    session_destroy();
}
$uid = $_SESSION['uid'];
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MustKnow</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="main">
                <!--[D] 추가 예정 -->
                <div role="main">
                  <ul id="container" class="tiles-wrap animated">
                    <?php
                        $type = "t7"; //사례해설 t7
                        $array = array(
                            array(
                                "title"=>"상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?",
                                "date"=>"2016-05-30",
                                "impt"=>"3",
                                "count"=>"20",
                                "txt"=>"우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경우에 일정한 기간의 거래로 채권·채무의 총"
                            ),
                            array(
                                "title"=>"계약 기간은 다 돼가고 장사는 더 하고 싶을 때",
                                "date"=>"2016-05-29",
                                "impt"=>"10",
                                "count"=>"1",
                                "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?"
                            ),
                            array(
                                "title"=>"내부자들과 영업비밀",
                                "date"=>"2016-05-28",
                                "impt"=>"7",
                                "count"=>"15",
                                "txt"=>"작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고"
                            ),
                            array(
                                "title"=>"분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?",
                                "date"=>"2016-05-27",
                                "impt"=>"7",
                                "count"=>"120",
                                "txt"=>"향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다..."
                            ),
                            array(
                                "title"=>"디즈니가 스타워즈를 인수할 수 있었던 비결",
                                "date"=>"2016-05-26",
                                "impt"=>"10",
                                "count"=>"7",
                                "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?"
                            ),
                            array(
                                "title"=>"스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지",
                                "date"=>"2016-05-26",
                                "impt"=>"10",
                                "count"=>"156",
                                "txt"=>"스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?"
                            )
                        );
                        $count = 0;
                        while(++$count <= 16){ 
                            $i = rand(0,5);
                    ?>
                    <li class="<? echo $type ?>" data-date="<? echo $array[$i]['date'] ?>" data-popularity="<? echo $array[$i]['impt'] ?>" data-issue="부동산">
                      <strong><em>사례해설 - 부동산</em></strong>
                      <h3><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></h3>
                      <span class="date"><? echo $array[$i]['date'] ?></span><span class="imp"> | 중요도 <? echo $array[$i]['impt'] ?></span><span class="imp"> | 조회수 <? echo $array[$i]['count'] ?></span>
                      <p><? echo mb_strimwidth($array[$i]['txt'],'0','120',"...","utf-8"); ?></p>
                      <button type="button" class="favorites">즐겨찾기 추가</button>
                    </li>
                    <? } ?>
                    <!-- End of grid blocks -->
                  </ul>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <ul class="pagination">
                            <li class="goto first"><a href="#">처음으로</a></li>
                            <li class="goto pre"><a href="#">이전</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li class="goto next"><a href="#">다음</a></li>
                            <li class="goto end"><a href="#">끝으로</a></li>
                        </ul>
                    </div>
                  <!--// 페이지네이션 -->
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <script>
    $( ".tiles-wrap li .favorites" ).click(function() {
      $( this ).toggleClass( "on" );
    });
    </script>
  </body>
</html>
<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
//    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
//    exit;
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <link rel="stylesheet" href="dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="dist/js/main/imagesloaded.pkgd.min.js"></script>
    <script src="dist/js/main/tickerme.js"></script>
    <script src="dist/js/main/wookmark.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini main">
    <?php include("pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("pages/tpl/header.tpl");
            include("pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="main">
                <div class="func">
                    <div class="ticker">
                        <ul id="ticker">
                            <li>머스트노우의 새로운 서비스를 오픈하였습니다.</li>
                            <li>계약 기간은 다 돼가고 장사는 더 하고 싶을 때</li>
                            <li>분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</li>
                            <li>상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?</li>
                        </ul>
                    </div>
                    <ol id="sortbys">
                      <li data-sortby="date" class="active">New</li>
                      <li data-sortby="issue">Issue</li>
                      <li data-sortby="popularity">Popular</li>
                    </ol>
                </div>
                <div role="main">
                  <ul id="container" class="tiles-wrap animated">
                    <li class="t1" data-date="2016-05-30" data-popularity="4" data-issue="icebear">
                      <strong><em>Case Study</em><em>사례해설 - 부동산</em></strong>
                      <h3>상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?</h3>
                      <span class="date">2016-05-30</span><span class="imp"> | 중요도 3</span>
                      <p>우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총...</p>
                    </li>
                    <li class="t2" data-date="2016-05-29" data-popularity="4" data-issue="camera">
                      <strong><em>REFERENCE</em><em>카드인포 - 부동산</em></strong>
                      <h3>계약 기간은 다 돼가고 장사는 더 하고 싶을 때</h3>
                      <span class="date">2016-05-29</span><span class="imp"> | 중요도 3</span>
                      <p>나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?</p>
                    </li>
                    <li class="t3" data-date="2016-05-28" data-popularity="3" data-issue="hand">
                      <strong><em>CASE STUDY</em><em>체크앤팁 - 계약</em></strong>
                      <h3>내부자들과 영업비밀</h3>
                      <span class="date">2016-05-28</span><span class="imp"> | 중요도 3</span>
                      <p>작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고</p>
                    </li>
                    <li class="t4" data-date="2016-05-27" data-popularity="3" data-issue="hand">
                      <strong><em>REFERENCE</em><em>칼럼 - 부동산</em></strong>
                      <h3>분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</h3>
                      <span class="date">2016-05-27</span><span class="imp"> | 중요도 3</span>
                      <p>향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다...</p>
                    </li>
                    <li class="t5" data-date="2016-05-26" data-popularity="3" data-issue="hand">
                      <img src="dist/img/main/Layer-40-copy.png" width="262" height="136" alt="">
                      <strong><em>REFERENCE</em><em>카드인포 - 부동산</em></strong>
                      <h3>디즈니가 스타워즈를 인수할 수 있었던 비결</h3>
                      <span class="date">2016-05-26</span><span class="imp"> | 중요도 3</span>
                      <p>나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?</p>
                    </li>
                    <li class="t6" data-date="2016-05-25" data-popularity="3" data-issue="hand">
                      <img src="dist/img/main/MergedLayers.png" width="262" height="136" alt="">
                      <strong><em>REFERENCE</em><em>카드인포 - 부동산</em></strong>
                      <h3>디즈니가 스타워즈를 인수할 수 있었던 비결</h3>
                      <span class="date">2016-05-25</span><span class="imp"> | 중요도 3</span>
                      <p>우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의...</p>
                    </li>
                    <li class="t7" data-date="2016-05-24" data-popularity="3" data-issue="hand">
                      <strong><em>Case study</em><em>사례해설 - 부동산</em></strong>
                      <h3>상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?</h3>
                      <span class="date">2016-05-24</span><span class="imp"> | 중요도 3</span>
                      <p>우선 상호계산이란 상인간 또는 상인 비상인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의...</p>
                    </li>
                    <li class="t8" data-date="2016-05-25" data-popularity="3" data-issue="hand">
                      <img src="dist/img/main/MergedLayers.png" width="262" height="136" alt="">
                      <strong><em>Case study</em><em>동영상강의 - 부동산</em></strong>
                      <h3>내부자들과 영업비밀</h3>
                      <span class="date">2016-05-25</span><span class="imp"> | 중요도 3</span>
                      <p>나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?</p>
                    </li>
                    <li class="t9" data-date="2016-05-24" data-popularity="3" data-issue="hand">
                      <strong><em>REFERENCE</em><em>칼럼 - 부동산</em></strong>
                      <h3>스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지</h3>
                      <span class="date">2016-05-24</span><span class="imp"> | 중요도 3</span>
                      <p>스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...</p>
                    </li>
                    <li class="t10" data-date="2016-05-23" data-popularity="3" data-issue="hand">
                      <strong><em>CASE STUDY</em><em>체크앤팁 - 부동산</em></strong>
                      <h3>분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?</h3>
                      <span class="date">2016-05-23</span><span class="imp"> | 중요도 3</span>
                      <p>스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...</p>
                    </li>
                    <!-- End of grid blocks -->
                  </ul>
                  <button type="button" class="memo_more">Load more...</button>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php $path="main"; include("pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
      
  </body>
</html>

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
    <link rel="stylesheet" href="/mustknow/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <link rel="stylesheet" href="dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/mustknow/plugins/select2/select2.full.min.js"></script>
    <script src="dist/js/main/imagesloaded.pkgd.min.js"></script>
    <script src="dist/js/main/wookmark.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("pages/tpl/header.tpl");
            include("pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="title-area search">
                <h2><span>계약</span><em>에 관한 검색 결과입니다.</em></h2>
            </div>
           <div class="content main">
                <div class="wrap_search_fnc">
                    <div class="sch_filter">
                        <div class="filter_area">
                            <div class="list-type _list-type">
                                <ul>
                                    <li class="card" style="margin-right: 8px;">
                                        <a href="#"><em>썸네일형</em></a>
                                    </li>
                                    <li class="list on">
                                        <a href="#"><em>리스트형</em></a>
                                    </li>
                                </ul>
                                <div class="sort">
                                    <select class="select2" style="width: 100%;">
                                      <option selected="selected">조회순</option>
                                      <option>카테고리순</option>
                                      <option>중요도순</option>
                                      <option>제목순</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap_search_sort">
                        <ol id="sortbys" class="search_sort">
                          <li data-filter="all" class="active">전체</li>
                          <li data-filter="casestudy">Case Study</li>
                          <li data-filter="reference">Reference</li>
                          <li data-filter="evaluation">Evaluation</li>
                          <li data-filter="form">Form</li>
                        </ol>
                    </div>
                </div>
                <div style="clear:both"></div>
                <?php
                    $type = "t7"; //사례해설 t7
                    $array = array(
                        array(
                            "title"=>"상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법?",
                            "date"=>"2016-05-30",
                            "impt"=>"3",
                            "count"=>"20",
                            "txt"=>"우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경우에 일정한 기간의 거래로 채권·채무의 총",
                            "type"=>"동영상강의"
                        ),
                        array(
                            "title"=>"계약 기간은 다 돼가고 장사는 더 하고 싶을 때",
                            "date"=>"2016-05-29",
                            "impt"=>"10",
                            "count"=>"1",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?",
                            "type"=>"체크앤팁"
                        ),
                        array(
                            "title"=>"내부자들과 영업비밀",
                            "date"=>"2016-05-28",
                            "impt"=>"7",
                            "count"=>"15",
                            "txt"=>"작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고",
                            "type"=>"사례해설"
                        ),
                        array(
                            "title"=>"분쟁이 생겼을 때 내용증명을 보내는 것이 유리한가요?",
                            "date"=>"2016-05-27",
                            "impt"=>"7",
                            "count"=>"120",
                            "txt"=>"향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다...",
                            "type"=>"Q&A"
                        ),
                        array(
                            "title"=>"디즈니가 스타워즈를 인수할 수 있었던 비결",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"7",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?",
                            "type"=>"동영상강의"
                        ),
                        array(
                            "title"=>"스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "txt"=>"스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?",
                            "type"=>"동영상강의"
                        )
                    );
                ?>
                 <!--[D] list view -->
                 <div class="table-list _table-list">
                    <table>
                        <caption>사례해설</caption>
                        <colgroup>
                            <col width="53px">
                            <col width="91px">
                            <col width="91px">
                            <col width="51px">
                            <col />
                            <col width="101px" />
                            <col width="89px" />
                            <col width="89px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col"><span>no.</span></th>
                                <th scope="col"><span>유형</span><em class="controller"></em></th>
                                <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                <th scope="col"><span>중요도</span><em class="controller"></em></th>
                                <th scope="col"><span>제목</span><em class="controller"></em></th>
                                <th scope="col"><span>작성자</span></th>
                                <th scope="col"><span>발행일</span><em class="controller"></em></th>
                                <th scope="col"><span>조회수</span><em class="controller"></em></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <td class="list-empty" colspan="8">
                                    <span>검색결과가 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,5);
                            ?>
                            <tr>
                                <td class="td-type-1"><span><? echo $count ?></span></td>
                                <td class="td-type-2"><span><? echo $array[$i]['type'] ?></span></td>
                                <td class="td-type-2"><span>형사고소</span></td>
                                <td class="td-type-2"><span><? echo $array[$i]['impt'] ?></span></td>
                                <td class="title"><a href="explanation-of-case-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                <td class="td-type-1"><span>홍길동</span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['count'] ?></span></td>
                            </tr>
                            <? } ?>
                        </tbody>
                     </table>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination" style="margin-top:18px">
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
                <!--//[D] list view -->
                <div role="main">
                   <div class="wrap_container _wrap_container" style="display:none">
                      <ul id="container" class="tiles-wrap animated miniso _tiles-wrap">
                        <li class="t7" data-filter-class='["all", "casestudy"]'>
                            <strong><em>사례해설 - 부동산</em></strong>
                            <h3><a href="casestudy/explanation-of-case-detail.php">내부자들과 영업비밀</a></h3>
                            <span class="date">2016-05-28</span><span class="imp"> | 중요도 7</span><span class="imp"> | 조회수 15</span>
                            <p><a href="explanation-of-case-detail.php">작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고</a></p>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t3" data-filter-class='["all", "casestudy"]'>
                            <strong><em>체크앤팁 - 계약</em></strong>
                            <h3><a href="casestudy/explanation-of-case-detail.php">내부자들과 영업비밀</a></h3>
                            <span class="date">2016-05-28</span><span class="imp"> | 중요도 7</span><span class="imp"> | 조회수 15</span>
                            <p><a href="explanation-of-case-detail.php">작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고</a></p>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t11" data-filter-class='["all", "form"]'>
                          <strong><em>계약서-부동산</em></strong>
                            <h3><a href="contract-detail.php">직매입 표준거래계약서</a></h3>
                          <span class="date">2016-05-28</span><span class="imp"> | 중요도 7</span><span class="imp"> | 조회수 15</span>
                            <p><a href="contract-detail.php">작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고</a></p>
                           <b>999,000</b>
                          <button type="button" class="ls_down">form 보관함 추가</button>
                          <button type="button" class="download">                      	
                            <ul class="file_type" style="display:none;bottom:30px;right:21px">
                                <li class="zip">
                                    <span>
                                        <a href="#">zip</a>	
                                    </span>                            				
                                </li>
                                <li class="hwp">
                                    <span>
                                        <a href="#">hwp</a>	
                                    </span>                            				
                                </li>
                                <li class="pdf">
                                    <span>
                                        <a href="#">pdf</a>	
                                    </span>                            				
                                </li>
                                <li class="doc">
                                    <span>
                                        <a href="#">doc</a>	
                                    </span>                            				
                                </li>
                            </ul>
                          </button>
                        </li>
                        <li class="t4" data-filter-class='["all", "reference"]'>
                            <strong><em>칼럼 - 부동산</em></strong>
                            <h3><a href="column-detail.php">상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한...</a></h3>
                            <span class="date">2016-05-30</span><span class="imp"> | 중요도 3</span><span class="imp"> | 조회수 20</span>
                            <div class="video"><a href="column-detail.php" class="img"><img src="/mustknow//dist/img/main/@temp_3.png"></a></div>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t13" data-filter-class='["all", "evaluation"]'>
                            <strong><em>사례해설 - 부동산</em></strong>
                            <h3><a href="evaluation/diagnosis-detail.php">협상 중급 - 2016 중급 회계 제목 중급 경제법률시험</a></h3>
                            <span class="date">2016-05-29</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 1</span>
                            <button type="button" class="status rm-progress">즐겨찾기 추가</button>
                        </li>
                        <li class="t15" data-filter-class='["all", "evaluation"]'>
                            <strong><em>사례해설 - 부동산</em></strong>
                            <h3><a href="evaluation/diagnosis-detail.php">협상 중급 - 2016 중급 회계 제목 중급 경제법률시험</a></h3>
                            <span class="date">2016-05-29</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 1</span>
                            <button type="button" class="status rm-progress2">즐겨찾기 추가</button>
                        </li>
                        <li class="t5" data-filter-class='["all", "reference"]'>
                          <a href="card-info-detail.php" class="img"><img src="/dist/img/main/Layer-40-copy.png" width="262" height="135" alt=""></a>
                          <strong><em>카드인포 - 부동산</em></strong>
                            <h3><a href="card-info-detail.php">계약 기간은 다 돼가고 장사는 더 하고 싶을 때</a></h3>
                          <span class="date">2016-05-29</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 1</span>
                          <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t12" data-filter-class='["all", "casestudy"]'>
                          <strong><em>Q&amp;A - 형사고소</em></strong>
                            <h3><a href="check-and-tip-detail.php">계약해제조항 작성 시 반드시 알아두어야 할 5 가지는 어...</a></h3>
                          <span class="date">2016-05-30</span><span class="imp"> | 조회수 20 | </span><span class="answer_status"></span>
                            <p><a href="check-and-tip-detail.php">원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바...</a></p>
                          <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t12" data-filter-class='["all", "casestudy"]'>
                          <strong><em>Q&amp;A - 형사고소</em></strong>
                            <h3><a href="check-and-tip-detail.php">법원 명령에 구글의 이름이 명시되어 있다면 어떻게 되나요?</a></h3>
                          <span class="date">2016-05-27</span><span class="imp"> | 조회수 120 | </span><span class="answer_status"></span>
                            <p><a href="check-and-tip-detail.php">원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바...</a></p>
                          <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t8" data-filter-class='["all", "casestudy"]'>
                          <a href="video-lectures-detail.php" class="img"><img src="/mustknow/dist/img/main/@temp.png" width="262" height="135" alt=""></a>
                          <strong><em>동영상강의 - 부동산</em></strong>
                            <h3><a href="video-lectures-detail.php">스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지</a></h3>
                          <span class="date">2016-05-26</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 156</span>
                          <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t4" data-filter-class='["all", "reference"]'>
                            <strong><em>칼럼 - 부동산</em></strong>
                            <h3><a href="column-detail.php">계약 기간은 다 돼가고 장사는 더 하고 싶을 때</a></h3>
                            <span class="date">2016-05-29</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 1</span>
                            <a href="column-detail.php" class="img"><img src="/mustknow//dist/img/main/@temp_2.png"></a>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t3" data-filter-class='["all", "casestudy"]'>
                            <strong><em>체크앤팁 - 계약</em></strong>
                            <h3><a href="check-and-tip-detail.php">스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지</a></h3>
                            <span class="date">2016-05-26</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 156</span>
                            <p><a href="check-and-tip-detail.php">스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?</a></p>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t5" data-filter-class='["all", "reference"]'>
                            <a href="card-info-detail.php" class="img"><img src="/dist/img/main/Layer-40-copy.png" width="262" height="135" alt=""></a>
                            <strong><em>카드인포 - 부동산</em></strong>
                            <h3><a href="card-info-detail.php">상호계산계약관계에 있는 업체에 제3의 업체로부터 양수한...</a></h3>
                            <span class="date">2016-05-30</span><span class="imp"> | 중요도 3</span><span class="imp"> | 조회수 20</span>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t7" data-filter-class='["all", "casestudy"]'>
                            <strong><em>사례해설 - 부동산</em></strong>
                            <h3><a href="explanation-of-case-detail.php">스톡옵션을 줄려고 할 때 반드시 알아야 할 6가지</a></h3>
                            <span class="date">2016-05-26</span><span class="imp"> | 중요도 10</span><span class="imp"> | 조회수 156</span>
                            <p><a href="explanation-of-case-detail.php">스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?</a></p>
                            <button type="button" class="favorites">즐겨찾기 추가</button>
                        </li>
                        <li class="t11" data-filter-class='["all", "form"]'>
                            <strong><em>고소장-부동산</em></strong>
                            <h3><a href="manual-detail.php">출판물에 의한 명에회손죄 고소장</a></h3>
                            <span class="date">2016-05-30</span><span class="imp"> | 중요도 3</span><span class="imp"> | 조회수 20</span>
                            <p><a href="manual-detail.php">우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경...</a></p>
                            <b>999,000</b>
                            <button type="button" class="ls_down">form 보관함 추가</button>
                            <button type="button" class="download">                      	
                              <ul class="file_type" style="display: none;bottom:30px;right:21px">
                                <li class="zip"><span><a href="#">zip</a></span></li>
                                <li class="hwp"><span><a href="#">hwp</a></span></li>
                                <li class="pdf"><span><a href="#">pdf</a></span></li>
                                <li class="doc"><span><a href="#">doc</a></span></li>
                              </ul>
                          </button>
                        </li>
                        <!-- End of grid blocks -->
                      </ul>
                      <button type="button" class="memo_more">Load more...</button>
                    </div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php $path="main"; include("pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Once the page is loaded, initalize the plug-in. -->
    <script type="text/javascript">
        var wookmark;
        $("._list-type li.card").click(function(){

          imagesLoaded('#container', function() {
            wookmark = new Wookmark('#container', {
              align: 'left',
              offset: 16, // Optional, the distance between grid items
              itemWidth: 262, // Optional, the width of a grid item
              comparator: null,
              verticalOffset: 16
            });
          });
        });
        // Setup filter buttons when jQuery is available
        var $filters = $('#sortbys li');

        /**
        * When a filter is clicked, toggle it's active state and refresh.
        */
        var onClickFilter = function(event) {
            var $item = $(event.currentTarget),
                    itemActive = $item.hasClass('active');

            if (!itemActive) {
              $filters.removeClass('active');
              itemActive = true;
            } else {
              itemActive = false;
            }
            $item.toggleClass('active');

            // Filter by the currently selected filter
            wookmark.filter(itemActive ? [$item.data('filter')] : []);
        }
        // Capture filter click events.
        $('#sortbys').on('click.wookmark-filter', 'li', onClickFilter);

        $("._list-type li").click(function(event){
            event.preventDefault();
            $("._table-list,._wrap_container").toggle();
            $(this).parents("ul").find("li").toggleClass( "on" );
            console.log($(this).parents("ul").find("li"));
        });
        //Initialize Select2 Elements
        $(".select2").select2({
            minimumResultsForSearch: -1
        });
    </script>
  </body>
</html>

<? 
if($path == "main") {
?>
<footer class="main-footer">
    <div class="policy">
      <ul class="p_link">
        <li><a href="#">회사소개</a></li>
        <li><a href="#">이용약관</a></li>
        <li><a href="#">개인정보취급방침</a></li>
        <li><a href="#">저작권 정책</a></li>
        <li><a href="#">책임의 한계</a></li>
        <li><a href="#">고객센터</a></li>
      </ul>
    </div>
    <div class="info">(주)머스트노우 | (135-876)서울시 강남구 테헤란로63길 14(삼성동 142-2) 인화빌딩 5층 | 대표이사 조우성 | Tel. 02-568-2420 | Fax. 02-568-2421<br>E-mail. webmaster@mustknow.co.kr | 사업자 등록번호 : <a href="">220-88-66022</a> | 통신판매업신고번호 : <a href="">구로-0926</a> | 개인정보보호 책임자 : 이민하</div>
    <div class="copyright">1. 콘텐츠의 명칭 : 법률정보    2. 콘텐츠의 제작 및 표시 : 2016년 5월 16일(업그레이드 콘텐츠의 경우 갱신일)<br>3. 콘텐츠 제작자 : ㈜머스트노우    4. 콘텐츠의 이용조건 : 이용약관 및 머스트노우 서비스안내와 같음 (무단 복제금지)<br>5. 콘텐츠의 보호기간 : ㈜머스트노우 사이트의 모든 콘텐츠는 「콘텐츠산업 진흥법」에 따라 제작 또는 갱신일로부터 5년간 보호됨</div>
    <div class="wrap_sns">
        <ul class="sns">
            <li><a href="#" class="cacao">cacao</a></li>
            <li><a href="#" class="twitter">twitter</a></li>
            <li><a href="#" class="facebook">facebook</a></li>
        </ul>
    </div>
    <div class="cr">© MUSTKNOW 2015. All rights reserved</div>
</footer>
<!-- 메인 UI -->

<!-- Once the page is loaded, initalize the plug-in. -->
<script type="text/javascript">
(function ($) {
  $('#ticker').tickerme();

  imagesLoaded('#container', function () {
    function comparatorDate(a, b) {
      return $(a).data('date') > $(b).data('date') ? -1 : 1;
      console.log()
    }
    function comparatorIssue(a, b) {
      return $(a).data('issue') < $(b).data('issue') ? -1 : 1;
    }
    function comparatorPopularity(a, b) {
      return $(a).data('popularity') > $(b).data('popularity') ? -1 : 1;
    }

    // Get a reference to your grid items.
    var wookmark,
        $sortbys = $('#sortbys li');

    // Call the layout function.
    wookmark = new Wookmark('#container', {
      align: 'left',
      offset: 16, // Optional, the distance between grid items
      itemWidth: 262, // Optional, the width of a grid item
      comparator: comparatorDate,
      verticalOffset: 16
    });

    /**
     * When a filter is clicked, toggle it's active state and refresh.
     */
    var onClickSortBy = function(e) {
      e.preventDefault();
      var comparator;
      $currentSortby = $(this);
      switch ($currentSortby.data('sortby')) {
        case 'date':
          comparator = comparatorDate;
          break;
        case 'popularity':
          comparator = comparatorPopularity;
          break;
        case 'issue':
        default:
          comparator = comparatorIssue;
          break;
      }

      $sortbys.removeClass('active');
      $currentSortby.addClass('active');

      wookmark.updateOptions({
        comparator: comparator
      });
    }

    // Capture filter click events.
    $sortbys.click(onClickSortBy);
  });
    
})(jQuery);
</script>
<? }else if($path !== "main") {?>
<footer class="main-footer in">
    <div class="policy">
      <ul class="p_link">
        <li><a href="#">회사소개</a></li>
        <li><a href="#">이용약관</a></li>
        <li><a href="#">개인정보취급방침</a></li>
        <li><a href="#">저작권 정책</a></li>
        <li><a href="#">책임의 한계</a></li>
        <li><a href="#">고객센터</a></li>
      </ul>
    </div>
    <div class="wrap_sns">
        <ul class="sns">
            <li><a href="#" class="cacao">cacao</a></li>
            <li><a href="#" class="twitter">twitter</a></li>
            <li><a href="#" class="facebook">facebook</a></li>
        </ul>
    </div>
    <div class="cr">© MUSTKNOW 2015. All rights reserved</div>
</footer>
<!-- 메인 UI -->
<? } ?>
   
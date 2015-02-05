<?php session_start();?>
<div class="jumbotron">
  <hr /> 
    <script src="/libs/plugins/jquery.tablesorter.min.js"></script>
    <script src="/libs/plugins/jquery.tablesorter.widgets.min.js"></script>
    <script src="/libs/plugins/pages/jquery.tablesorter.pager.min.js"></script>
    <link href="/libs/plugins/pages/jquery.tablesorter.pager.css" rel="stylesheet">
  <h2>轉蛋/王卡</h2>
  <div class="pager">
          第<select class="gotoPage"></select>頁
          <img src="/libs/plugins/pages/icons/first.png" class="first" alt="First" title="First page" />
          <img src="/libs/plugins/pages/icons/prev.png" class="prev" alt="Prev" title="Previous page" />
          <span class="pagedisplay"></span>
          <img src="/libs/plugins/pages/icons/next.png" class="next" alt="Next" title="Next page" />
          <img src="/libs/plugins/pages/icons/last.png" class="last" alt="Last" title= "Last page" />
          每頁<select class="pagesize">
            <option value="15">15</option>
            <option  selected="selected" value="25">25</option>
            <option value="35">35</option>
            <option value="50">50</option>
          </select>筆
  </div>
  <table class='table table-hover' style='width:100%;' id='table_content'>
    <thead><tr><th>玩家</th><th>內容</th><th>轉蛋</th><th>時間</th></tr></thead>
    <tbody>
      <?php
        include "lib/dbaccount.php";
        try {
            //開始交易
            $db_conn->beginTransaction();
            //查詢IP是否重覆
            $sql = "SELECT * 
                    from bet
                    order by b_time desc";
            $stmt = $db_conn->prepare($sql);
            $stmt->execute(); 
            while($rows = $stmt->fetch()){
              echo "<tr><td>".$rows['b_who']."</td><td>".$rows['b_item']."</td><td>".$rows['b_from']."</td><td>".$rows['b_time']."</td></tr>";
            }
            //交易完成
            $db_conn->commit();
            
        } catch (PDOException $e) {
            //交易失敗，回復初始狀態
            $db_conn->rollBack();
            echo "A database problem has occurred: ". $e->getMessage();
            //echo "error1";
            exit;
        }
        $db_conn = null; //結束與資料庫連線
      ?>
    </tbody>
  </table>
</div>
 <script>
var pagerOptions = {
          container: $(".pager"),
          output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
          fixedHeight: true,
          removeRows: false,
          cssGoto: '.gotoPage'
};
$("#table_content").tablesorter({
  widthFixed: true,
  showProcessing: true,
  headerTemplate: '{content} {icon}',
  widgets: ['uitheme', 'zebra', 'filter', 'scroller'],
  widgetOptions: {
  scroller_barWidth: 17,
  scroller_jumpToHeader: true,
  scroller_idPrefix: 's_',
  filter_hideFilters : true
} 
}).tablesorterPager(pagerOptions);
</script>
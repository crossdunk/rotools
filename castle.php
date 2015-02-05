<style>
.clock{
  right:20px;
  position: absolute;
  background: #A7D1FC;
  color:#000000;
  font-size: 20px;
  border-radius: 5px;
  padding-left:5px;
  padding-right:5px;
  font-family: Impact;
}
.ation{
  right:20px;
  top:130px;
  background: #FEADC1;
  position: absolute;
  font-size: 20px;
  border-radius: 5px;
  padding-left:5px;
  padding-right:5px;
  font-family: '微軟正黑體';
}
</style>

<script src='/rotools/js/gvg.js'></script>
<?php
require_once 'permission.php';
?>
<?php if($_SESSION['guild']=='ch'){?>
<div class='clock'>

</div>
<div class='ation'>
<p>目前暫定時間差距為14秒，如果有確定的時間差距請跟我說！</p>
</div>
<h2 class="sub-header">
  GVG　　<button id="update" class="btn-lg btn btn-warning">Update</button>
</h2>
<h3><small id="uptime"><?=date("h:i:s", time())?></small></h3>
<!-- Nav tabs -->
<ul class="nav nav-pills">
  <li class="active"><a  href="#gvg_con" data-toggle="tab">GVG(三)</a></li>
  <li><a href="#se_con" data-toggle="tab">SE(六)</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="gvg_con">
    <div class="table-responsive ">
      <table class="table table-striped col-md-12">
        <thead>
          <tr>
            <th class="text-right">中央</th><th>公會</th>
            <th class="text-right">新城</th><th>公會</th>
            <th class="text-right">吉分</th><th>公會</th>
            <th class="text-right">斐楊</th><th>公會</th>
          </tr>
        </thead>
        <tbody id="gvg">
        </tbody>
      </table>
    </div>
  </div>
  <div class="tab-pane" id="se_con">
    <div class="table-responsive row">
      <div class="col-md-6">
        <table class="table table-striped col-md-12">
          <thead>
            <tr>
              <th class="text-right">朱諾</th>
              <th >公會</th>
              <th class="text-right">拉赫</th><th>公會</th>
            </tr>
          </thead>
          <tbody id="te">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--<div class="row">
★
  <span class="label label-danger">敵</span>：敵人
  <span class="label label-success">BC</span>：BC防守/攻
  <span class="label label-success">CH</span>：機會防守/攻
</div>-->
<br />
<div class="row">
  <div class='col-md-12'>
  <span>最後被攻下三座為</span>：<br /><span id='last_castle'></span>
  </div>
</div>
<br />
<div class="row">
  <div class='col-md-12'>
  <span>公會為</span>：<br /><span id='last_owner'></span>
  </div>
</div>
<div class="row">
  (越前面代表越後面攻下)
</div>
<br />
<div class="row">
  <div class='col-md-12'>
  <span class='label label-success'>代表我方</span>  <span class='label label-danger'>代表敵方</span>
  </div>
</div>

<?php
}else{
  echo "<p class='bg-success bigtext'>網頁跳轉中，請稍候。</p>";
}

?>

<script>
function ShowTime(){
　var NowDate=new Date();
　var h=NowDate.getHours();
　var m=NowDate.getMinutes();
　var s=NowDate.getSeconds();
  s = s - 14;
  if(s.toString().length < 2 ) s = '0'+s;
　 $('.clock').text(h+'：'+m+'：'+s+'');
　setTimeout('ShowTime()',500);
}
ShowTime();
</script>
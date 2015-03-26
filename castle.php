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
.alert{
  text-align: center;
}
.alert span{
  cursor:pointer;
  background:#D2EFF7;
  margin-right: 4px;
  margin-left: 4px;
  padding-right: 4px;
  padding-left: 4px;
  font-weight: 900;
}
  .tips{
    display:none;
    width:100%;
    height:100%;
    background: rgba(50%,50%,50%,0.8);
    position:fixed;
    z-index: 99;
    top:0px;
    left:0px;
  }
  .content{
    margin:auto;
    margin-top:100px;
    width:600px;
    height:500px;
    border-radius: 10px;
    overflow-y:auto;
    text-align: center;
    background-color: #F9F0EF;
  }
  .content_p{
    color:#626262;
    font-weight: 900;
    text-align: left;
  }
  .close{
    width:100%;
    margin-top: 20px;
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
  GVG　　<button id="update" class="btn-lg btn btn-warning">Update</button> <button id='tips' class="btn-lg btn btn-info">2015/3/26新增功能說明</button>
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
          <tr>
            <td colspan='2' class='alert'><span>中1</span><span>中3</span><span>中5</span><span>中7</span><span>中9</span></td>
            <td colspan='2' class='alert'><span>新1</span><span>新2</span><span>新3</span><span>新7</span><span>新9</span></td>
            <td colspan='2' class='alert'><span>吉2</span><span>吉3</span><span>吉7</span><span>吉8</span><span>吉9</span></td>
            <td colspan='2' class='alert'><span>斐1</span><span>斐3</span><span>斐7</span><span>斐8</span><span>斐9</span></td>
          </tr>
        </thead>
        <tbody id="gvg" class='castle_tbody'>
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
            <tr>
            <td colspan='2' class='alert'><span>朱1</span><span>朱3</span><span>朱4</span><span>朱7</span><span>朱9</span></td>
            <td colspan='2' class='alert'><span>拉1</span><span>拉3</span><span>拉4</span><span>拉7</span><span>拉9</span></td>
          </tr>
          </thead>
          <tbody id="te" class='castle_tbody'>
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
  <span class='label label-success'>代表我方</span>  <span class='label label-danger'>代表敵方</span><br />
  GvG<span class='label label-success' id='g_our_count'></span>：<span class='label label-danger' id='g_their_count'></span><br />
  SE<span class='label label-success' id='s_our_count'></span>：<span class='label label-danger' id='s_their_count'></span><br />
  </div>
</div>

<div class='tips'>
  <div class='content'>
    <p class='content_p'>
    點擊
    <span class='alert'><span>城池</span></span>可換顏色，用來標記該城狀況，讓調度人員可以做適當調度。<br />
    </p>
    <br />
    <p class='content_p'>譬如中1已派勇者<span style='color:#F95353'> Lavi </span>駐守，該城被攻下的機會比較低。<br />
    可以點擊<span class='alert'><span>中1</span></span>一下，讓其顏色轉為綠色，代表安全、已經有人在守了，而且還是<span style='color:#F95353'>高手</span>在守、不容易被攻下。<br /><br />
    而機會有兩人在中5守城，因為機會比較弱，而且<span style='color:#F95353'>ㄏㄌ太變態</span>，被攻破的機會較高，可以點擊<span class='alert'><span>中5</span></span>三下，使其轉變為紅色，代表這座城比較危險，最後需要人去幫忙。
    </p>

    <p class='content_p'>
      發現某 J 開頭公會會長<span style='color:#F95353'> 法國人 </span>躲在<span class='alert'><span>新9</span></span>等待最後時機緊招，可以點擊<span class='alert'><span>新9</span></span>兩次，顏色變為黃色，代表這座城有可能會掉，再決定是否要去阻擋，或是 Let it go 。
    </p>
    <hr />
    <p class='content_p'>
    另外，此功能非連動式(只有個人視窗看的到)。<br />
    以上內容純屬虛構，如有雷同純屬巧合。<br />
    不一定要照著我舉的例子去標記，也可以綠色代表危險、或是代表最後要去破的城，全看使用的人如何去使用。<br />
    如果不小心點錯，多點幾下顏色就會變回藍色。
    </p>
    <button class='close'>Close</button>
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
  if(h==22 && m==58){
    $('body').css({'background-color':'#F7DAD4'});
  }else if(h==23 && m==01){
    $('body').css({'background-color':'#FFFFFF'});
  }
　setTimeout('ShowTime()',500);
}
ShowTime();

$('.close').bind('click',function(){
  $('.tips').hide();
});
$('#tips').bind('click',function(){
  $('.tips').show();
});
</script>
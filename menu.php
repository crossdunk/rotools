<style>
  .menu{
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
    padding: 50px;
    width:300px;
    height:500px;
    border-radius: 10px;
    overflow-y:auto;
    text-align: center;
  }
  .menu_btn{
    float:left;
    margin-bottom: 15px;
    width:200px;
    height:50px;
    padding-top: 12px;
    text-decoration: none;
    letter-spacing: 2px;
    border-radius: 5px;
    border: solid;
    background-color: #272822;
    border-color:#272822;
    color:#DCDDD7;
    font-weight: 900;
    text-align: center;
  }
  .menu_btn:hover{
    text-decoration: none;
    border: solid;
    background-color: #EDEDEB;
    border-color:#EDEDEB;
    color:#060011;
  }
</style>
<div class='menu'>
  <div class='content'>
    <a href='#' class='menu_btn cancel'>取消</a>
    <a href='/rotools/counter/' class='menu_btn'>計算機</a>
    <a href='/rotools/view_schat/' class='menu_btn'>廣播紀錄</a>
    <a href='/rotools/view_bet/' class='menu_btn'>轉蛋紀錄</a>
    <a href='/rotools/castle/' class='menu_btn'>GVG紀錄</a>
    <a href='/rotools/server/' class='menu_btn'>伺服器統計</a>
    <a href='/rotools/download/' class='menu_btn'>下載/影片</a>
    <a href='https://forum.fharr.com/forum.php' class='menu_btn'>幻想廳</a>
  </div>
</div>

<script>
$('#show_menu').bind('click',function(){
  $('.menu').show();
});
$('.cancel').bind('click',function(){
  $('.menu').hide();
});
</script>
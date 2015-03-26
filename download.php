<?php session_start();?>
<style>
h2{
  color:#581212;
}
</style>
<?php
require_once 'permission.php';
?>
<?php if($_SESSION['guild']=='ch'){?>
<div id='link_button'>
  <div id='commd_link'>
    <h2>一般連結</h2>
    <a target='_blank' type="button" class="btn btn-info" href='https://mega.co.nz/#!ylAm2IqB!7fg2W9W16FLC4cBkxmGfp5JJ0XJ4JIqpOjXplmHiNOI'>DS FT</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://mega.co.nz/#!6wQhHRLb!Bp2t3jb-_AMQdqpNWi66NuyCjI64jERFR0BB5avHgQ0'>RO主程式</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://drive.google.com/file/d/0Bx2pmY0-TnOpdUFqREE1ZGlsUGc/view'>OPENKORE(Google)</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://mega.co.nz/#!ew4ijT4Z!Ztg08Afkd8r9eW8mnq_obyBLUINQNlMHYnKMe3xT5VA'>OPENKORE(Mega)</a>
  </div>

  <div id='video'>
    <h2>影片</h2>
    <a target='_blank' type="button" class="btn btn-info" href='https://www.youtube.com/watch?v=eI8019GV8WY'>月貓最強神反應魅影追蹤者</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://www.youtube.com/watch?v=8MlvLmqPk_8'>月貓TE開天眼騎士領主</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://www.youtube.com/watch?v=uteXYbuuRLo'>2015/02/03 PVP 修羅</a>
    <a target='_blank' type="button" class="btn btn-info" href='https://www.youtube.com/user/z124157799/videos'>其餘影片</a>
  </div>
</div>
<?php
}else{
  echo "<p class='bg-success bigtext'>網頁跳轉中，請稍候。</p>";
}
?>

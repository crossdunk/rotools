<link rel="stylesheet" href="/rotools/css/server.css" />
<div class="jumbotron">
  <form class="form-horizontal" role="form" id='form'>
  <div class="form-group">
        <p class='server_tips' id='tips'>
          首先歡迎並感謝您來到這個頁面，為了避免重複投票，導致結果不準確<br />
          系統會利用IP的判斷，如果有玩複數以上的伺服器，請填一個最常玩的<br />
          感謝您的配合，謝謝！
        </p>
  </div>
    
  <div class="form-group">
        <div class="col-md-12 col-sm-12 grid">
          <label class='title'>伺服器：</label><select id='server' name='server'>
                  <option value=''>請選擇</option>
                  <optgroup label='月費伺服器'>
                    <option value='愛麗絲(月費)'>愛麗絲(月費)</option>
                    <option value='查爾斯(月費)'>查爾斯(月費)</option>
                  </optgroup>
                  <optgroup label='老朋友伺服器'>
                    <option value='愛麗絲(FREE)'>愛麗絲(FREE)</option>
                    <option value='查爾斯(FREE)'>查爾斯(FREE)</option>
                    <option value='洛奇(FREE)'>洛奇(FREE)</option>                   
                  </optgroup>
                  <optgroup label='免費伺服器'>
                    <option value='波利'>波利</option>
                    <option value='小雞'>小雞</option>
                    <option value='月夜貓'>月夜貓</option>
                    <option value='巴風特'>巴風特</option>
                    <option value='天使波利'>天使波利</option>
                    <option value='彩虹橋'>彩虹橋</option>
                  </optgroup>
                  <optgroup label='幸福伺服器'>
                    <option value='幸福'>幸福</option>
                  </optgroup>
                  </select>
        </div>

        <div class="col-md-12 col-sm-12 grid">
          <label class='title'>想說的話：</label><br /><textarea id='message' name='message' cols='40' rows='5'></textarea>
        </div>

        <div class="col-md-12 col-sm-12 grid">
        <label class='title'>請輸入驗證碼：</label><input maxlength='8' size='8' id="userstring" name="userstring" type="text" value="" />  <img src="/phpverify/imagebuilder.php" border="1" title="換一張" id='verify'> (點擊圖片可換一張哦！)<br >
        </div>

        <div class="col-md-12 col-sm-12 grid">
        <button id='send' class='btn btn-primary'>送出</button>
        </div>
  </div>
  </form>
  <hr />
  <h2>目前統計結果</h2>
  <table class='table ' style='width:300px;'>
    <thead><tr><th>伺服器</th><th>人數</th></tr></thead>
    <tbody>
      <?php
        include "lib/dbaccount.php";
        try {
            //開始交易
            $db_conn->beginTransaction();
            //查詢IP是否重覆
            $sql = "SELECT count(s_num) as num,s_server 
                    from server 
                    group by s_server 
                    order by num desc";
            $stmt = $db_conn->prepare($sql);
            $stmt->execute(); 
            while($rows = $stmt->fetch()){
              echo "<tr><td><a class='show_commend' href='".$rows['s_server']."'>".$rows['s_server']."</a></td><td>".$rows['num']."</td></tr>";
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

<div id='commend' class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <br />
      <span id='server_name'></span>
      <br />
      <table class='table' id='commend_table'>

      </table>
      <hr />
    </div>
  </div>
</div>

</div>
 <script>
   $('.show_commend').bind('click',function(){
    var server = $(this).attr('href');
    $('#server_name').text(server);
    $('#commend_table').text("");
     $url='/rotools/lib/get_server_commend_json.php?&time='+new Date().getTime();
        $.getJSON($url,{server:server},
            function(data) {
              $.each(data, function(key, val) {
              $('#commend_table').append("<tr><td>"+nl2br(val.s_message)+"</td></tr>");
            });
          });
    $('#commend').modal('show');
    return false;
   });

   var nl2br = function( str ) {
      return str.replace(/([^>])\n/g, '$1<br/>\n');
   } 

   $('#send').bind('click',function(){
      var server = $('#server').val();
      var message = $('#message').val();
      var userstring = $('#userstring').val();
      var $submit = $('#send');
      var verify = '0';
      if(''== server){
        $('#tips').text('請選擇伺服器哦！');
        $('#tips').addClass('red');
        return false;
      }else{
        $.ajax({
              url: "/phpverify/check_verify.php?&time"+new Date().getTime(),
              data: {userstring:userstring},
              type: "post",
              dataType: "text",
              beforeSend: function() {
                  $submit.hide();
                  verify = '0';
              },
              success: function(data) {
                  verify = data;
                  if(verify == '1') {
                        $.ajax({
                            url: "/rotools/lib/server_ajax.php?&time"+new Date().getTime(),
                            data: {server:server,message:message,userstring:userstring},
                            type: "post",
                            dataType: "text",
                            beforeSend: function() {
                          },
                           success: function(data) {
                              if(data == 'ok') {
                                  alert('資料已成功儲存，謝謝您！');
                                  document.location.href = '/rotools/home/';
                                }else if(data=='nook'){
                                  $('#tips').text('抱歉，發生不知名錯誤！');
                                }else if(data=='ipnook'){
                                  $('#tips').text('偵測到您的IP已經有選過囉！');
                                }else{
                                console.log(data);
                                }
                              $submit.show();
                            }
                        });
                  }else if(verify=='0'){
                    $('#tips').text('驗證碼錯誤哦！');
                    $submit.show();
                    //alert(data);
                  }else{
                    console.log(data);
                  }
              }
          });
      }
    return false;
   });

  $("#verify").bind('click',function(){ 
    $(this).attr("src",'/phpverify/imagebuilder.php?' + Math.random()); 
  }); 
</script>
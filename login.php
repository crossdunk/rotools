<style>
.alert{
  color:#055E67;
  font-size: 16px;
  font-weight: 900;
}
</style>
<div class="input-append">
  <p  class="bg-success alert">私人用途：城戰密碼，不知道的請找KK或是知道的人要密碼(11/07更改密碼)</p>
<input  type="text" id="password" name='password'>
<button id="login" class="btn btn-primary" data-loading-text="Loading...">Login</button>
</div>
<script>
$("#login").click(function(){
  var password = $('#password').val();
  $submit = $("#login");
  var check = true;
  if(password=="") var check = false;
  if(check){
  $.ajax({
            url: "/rotools/lib/login_ajax.php?&time"+new Date().getTime(),
            data: {password:password},
            type: "post",
            dataType: "text",
            beforeSend: function() {
                $submit.hide();
            },
            success: function(data) {
                $submit.show();
                if(data == 'ok') {
                    if("<?=$_SESSION['url']?>"!=''){
                      document.location.href = "<?=$_SESSION['url']?>";
                    }else{
                      document.location.href = '/rotools/home/';
                    }
                    
                }else if(data=='nook'){
                  alert("Password Error！");
                  //alert(data);
                }else{
                  console.log(data);
                }
            }
        });
 }else{
  alert('Must type Password！');
 }
});
</script>
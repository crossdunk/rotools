$(function() {
  function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
  var speed =3000,msg=0,title="",tb_html="",uptime;
  function httprequire(){
    uptime=new Date();
    $url='/rotools/lib/gvg_json.php?time='+new Date().getTime();
    $.getJSON($url,
      function(data) {
        $gvg_count = 0;
        $se_count = 0;
        $('#uptime').text(addZero(uptime.getHours())+":"+addZero(uptime.getMinutes())+":"+addZero(uptime.getSeconds()));
        $i=0;
        $j=0;
        tb_html="<tr>";
        tb_htmlSE="<tr>";
        tb_html_last_cas="";
        tb_html_last_owner="";
        $.each(data, function(key, val) {
          if(val.cas_area=="GVG"){
          
          $i++;
          if(val.cas_owner!='[γ執子之手。與子偕老°]' && val.cas_owner!='[RESTART〞機會]' && val.cas_owner!='[THE INCEPTION × 蝕夢]' && val.cas_owner!='[【西門】γHEGEMONY°]' && val.cas_owner!='[╪°BLACK_CONFLICT°╪]' && val.cas_owner!='[THE LNCEPTION × 蝕夢]' && val.cas_owner!='[SNAKE-MOAN]' && val.cas_owner!='[SNAKE_MOAN]'){
              $color = 'label-danger';
              $tag = '敵';
            }else{
              $gvg_count++;
              $color = 'label-success';
              $tag = '我';
            }
          $status="<span class=\"label "+ $color +" \">"+ $tag+"</span>";
          tb_html+="<td class=\"text-right\">"+$status+val.cas_ext+":</td>";
          tb_html+="</td><td class=\"text-left\" >"+val.cas_owner+"</td>";
          if($i%4==0) tb_html+="</tr><tr>";

          }else if(val.cas_area=="SE"){
            
            $j++;
          if(val.cas_owner!='[γ執子之手。與子偕老°]' && val.cas_owner!='[RESTART〞機會]' && val.cas_owner!='[THE INCEPTION × 蝕夢]' && val.cas_owner!='[【西門】γHEGEMONY°]' && val.cas_owner!='[╪°BLACK_CONFLICT°╪]' && val.cas_owner!='[THE LNCEPTION × 蝕夢]' && val.cas_owner!='[SNAKE-MOAN]' && val.cas_owner!='[SNAKE_MOAN]'){
              $color = 'label-danger';
              $tag = '敵';
            }else{
              $color = 'label-success';
              $tag = '我';
              $se_count++;
            }
          $status="<span class=\"label "+ $color +" \">"+ $tag+"</span>";
          tb_htmlSE+="<td class=\"text-right\">"+$status+val.cas_ext+":</td>";
          tb_htmlSE+="</td><td class=\"text-left\" >"+val.cas_owner+"</td>";
          if($j%2==0) tb_htmlSE+="</tr><tr>";
          }else if(val.cas_area==undefined){
            if(val.cas_owner!='[γ執子之手。與子偕老°]' && val.cas_owner!='[RESTART〞機會]' && val.cas_owner!='[THE INCEPTION × 蝕夢]' && val.cas_owner!='[【西門】γHEGEMONY°]' && val.cas_owner!='[╪°BLACK_CONFLICT°╪]' && val.cas_owner!='[THE LNCEPTION × 蝕夢]' && val.cas_owner!='[SNAKE-MOAN]' && val.cas_owner!='[SNAKE_MOAN]'){
              $color = 'label-danger';
              $tag = '敵';
            }else{
              $color = 'label-success';
              $tag = '我';
            }
            tb_html_last_cas +=  "<span class=\"label "+ $color +" \">"+val.cas_ext+"</span>  ";
            tb_html_last_owner +=  "<span class=\"label "+ $color +" \">"+val.cas_owner+"</span>  ";
          }
        });
        tb_html+="</tr>";
        $('#gvg').html(tb_html);
        $('#te').html(tb_htmlSE);
        $('#last_castle').html(tb_html_last_cas);
        $('#last_owner').html(tb_html_last_owner);
        $('#g_our_count').html($gvg_count);
        $('#g_their_count').html(20 - $gvg_count);
        $('#s_our_count').html($se_count);
        $('#s_their_count').html(10 - $se_count);
    });
    setTimeout(httprequire, speed);
  }
setTimeout(httprequire, speed);

$("html").keydown(function(){
        if(event.which == 13){
         $('#update').click();
        }
});

httprequire();
$('#update').click(httprequire);
});
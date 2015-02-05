
<link rel="stylesheet" href="/rotools/css/counter.css" />



<p><div id="fb-root"></div>
    <div class="fb-like" data-href="http://www.martin.com.tw/rotools/index.php?pages=counter" data-width="40" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></p>

<div class="jumbotron">

    <form class="form-horizontal" role="form">
      <input type="hidden" id="baseaspd"  />

      <div class="form-group">
        <p class='server_tips'>
          各位好，感謝各位不嫌棄這個網頁。<br />
          我想要做個統計，想知道各位是從哪個伺服器來的呢？<br />
          如果您方便的話，麻煩請點上方選單列的伺服器，或是點<a href='/rotools/server/' title='伺服器'>這裡</a>來進入頁面。<br />
          接下來只要點選您的伺服器並送出就好囉！小弟先在此感謝各位了！
        </p>
      </div>

      <!--第一行-->

      <div class="form-group">
        

        <div class="col-md-2 col-sm-2">
        <label for="level">BaseLV</label>
         <div>
         <select name="level" id="level" class="form-control" >
              <?php
               for($i=1;$i<=175;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
        </div>

      <div class="col-md-2 col-sm-2">
       <label for="job">Job</label>
        <div>
           <select name="job" id="job" class="form-control" >
              <option value="0">盧恩騎士</option>
              <option value="1">十字斬首者</option>
              <option value="2">遊俠</option>
              <option value="3">魅影追蹤者</option>
              <option value="4">皇家禁衛軍</option>
              <option value="5">修羅</option>
              <option value="6">主教</option>
              <option value="7">基因學者</option>
              <option value="8">妖術士</option>
              <option value="9">機械工匠</option>
              <option value='10'>樂師/浪跡(攻速不準)</option>
              <option value='11'>咒術士(攻速不準)</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 col-sm-2">
        <label class="control-label" for="arms">武器</label>
        <div>
          <select name="arms" id="arms" value="1" class="form-control" >
          </select>
        </div>
      </div>

        <div id="div_kid" class="checkbox col-md-1 col-sm-1">
        <label>
          <input id="kid" type="checkbox">小孩
        </label>      
        </div> 

        <div id="div_shield" class="checkbox col-md-1 col-sm-1">
        <label>
          <input id="shield" type="checkbox">盾
        </label>      
        </div>   

      <div id="div_lune" class="checkbox col-md-1 col-sm-1">
         <label>五盧<input type="checkbox" id="lune"></label>
      </div>

      
      </div>

      <!--第二行-->

      <div class="form-group">
        <div class="col-md-2 col-sm-2">
        <label for="str">Str</label>
        <div>
         <select name="str" id="str" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
        </div>
        <div class="col-md-1 col-sm-2">
          <label class='stat_' for="str2">+後STR</label>
          <input type="text" min="0" max="255" name="str2" id="str2" value="0" class="form-control" />
        </div>
      
       <!-- <label class="col-md-1 control-label" for="weapatk">武器ATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="weapatk" id="weapatk" value="0" class="form-control" />
        </div>
        <label class="col-md-2 control-label" for="weapmatk">武器MATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="weapmatk" id="weapmatk" value="0" class="form-control" />
        </div>-->
        
        <div class='col-md-3 col-sm-3'>
          <label  for="eqcastingtime">裝備減詠-%</label>
          <input type="text" min="0" max="500" name="eqcastingtime" id="eqcastingtime" value="0" class="form-control" />
        </div>
        <div id="div_lune_lv" class='col-md-3 col-sm-3'>
          <label>盧恩精熟</label>
          <div>
          <select name="lune_lv" id="lune_lv" class="form-control" >
              <?php
               for($i=10;$i>=0;$i--){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
        </div>
      </div>

      <!--第三行-->

      <div class="form-group">
        
        <div class="col-md-2 col-sm-2">
          <label for="agi">Agi</label>
          <select name="agi" id="agi" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>  
        <div class="col-md-1 col-sm-2">
          <label class='stat_' for="agi2">+後AGI</label>
          <input type="text" min="0" max="255" name="agi2" id="agi2" value="0" class="form-control" />
        </div>
        
        <div class="col-md-3 col-sm-3">
          <label  for="changetime">變詠時間(秒)</label>
          <input type="text" min="0" max="500" name="changetime" id="changetime" value="0" class="form-control" />
        </div>
      <!--  <label class="col-md-1 control-label" for="cure_weap_add">精鍊</label>
        <div class="col-sm-2">
          <select name="cure_weap_add" id="cure_weap_add"   class="form-control">
          </select>
        </div>
        <label class="col-sm-2 control-label" for="weaplv">武器等級</label>
        <div class="col-sm-2">
          <select name="weaplv" id="weaplv" value="1" class="form-control" >
            <option value="0">無</option>
            <option value="1">一</option>
            <option value="2">二</option>
            <option value="3">三</option>
            <option value="4">四</option>
          </select>
        </div> -->
      </div>

      <!--第四行-->

      <div class="form-group">
        
        <div class="col-md-2 col-sm-2">
          <label  for="vit">Vit</label>
         <select name="vit" id="vit" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
       
        <div class="col-md-1 col-sm-2">
          <label class='stat_' for="vit2">+後VIT</label>
          <input type="text" min="0" max="255" name="vit2" id="vit2" value="0" class="form-control" />
        </div>
        <!--<label class="col-md-1 control-label" for="skl_atk">技能ATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="skl_atk" id="skl_atk" value="0" class="form-control" />
        </div>-->
        <!--<label class="col-md-2 control-label" for="skl_matk">技能MATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="skl_matk" id="skl_matk" value="0" class="form-control" />
        </div>-->
        
        <div class="col-md-3 col-sm-3">
          <label  for="aspd1">攻速水</label>
          <select name="aspd1" id="aspd1" value="1" class="form-control" >
            <option value="0">無</option>
            <option value="10">集中</option>
            <option value="15">覺醒</option>
            <option value="20">菠色克</option>           
          </select>
        </div>
        
        <div class="col-md-1 col-sm-2">
          <label for="aspd3">ASPD+%</label>
          <input type="text" min="0" max="255" name="aspd2" id="aspd2" value="0" class="form-control" />
        </div>
        
        <div class="col-md-1 col-sm-2">
          <label  for="aspd3">ASPD+</label>
          <input type="text" min="0" max="255" name="aspd3" id="aspd3" value="0" class="form-control" />
        </div>

      </div>

      <!--第五行-->

      <div class="form-group">  
        <div class="col-md-2 col-sm-2">
          <label for="int">Int</label>
         <select name="int" id="int" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
      
        <div class="col-md-1 col-sm-2">
          <label class='stat_' for="int2">+後INT</label>
          <input type="text" min="0" max="255" name="int2" id="int2" value="0" class="form-control" />
        </div>
        <!--<label class="col-md-1 control-label" for="eq_atk">裝備ATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="eq_atk" id="eq_atk" value="0" class="form-control" />
        </div>-->
        <!--<label class="col-md-2 control-label" for="eq_matk">裝備MATK</label>
        <div class="col-sm-1">
          <input type="text" min="0" max="500" name="eq_matk" id="eq_matk" value="0" class="form-control" />
        </div>-->
        
        <div class="col-md-3 col-sm-3">
          <label  for="aspdskill">技能</label>
          <select name="aspdskill" id="aspdskill" value="1" class="form-control" >
            <option value="0">無</option>
            <option value="30">雙手劍加速</option>
            <option value="30">長矛加速</option>
            <option value="25">隊友所放速度激發</option>
            <option value="30">所有速度激發(或是自行施放速激)</option>
          </select>
        </div>
      </div>

      <!--第六行-->

      <div class="form-group">
        
        <div class="col-md-2 col-sm-2">
          <label  for="dex">Dex</label>
          <select name="dex" id="dex" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
        
        <div class=" col-md-1 col-sm-2">
          <label class='stat_' for="dex2">+後DEX</label>
          <input type="text" min="0" max="255" name="dex2" id="dex2" value="0" class="form-control" />
        </div>

        <div class="col-md-1 col-sm-2">
          <label for="mhp_add">MaxHp+</label>
          <input type="text" min="0" max="255" name="mhp_add" id="mhp_add" value="0" class="form-control" />
        </div>
        
        <div class="col-md-1 col-sm-2">
          <label  for="mhp_add2">MaxHp+%</label>
          <input type="text" min="0" max="255" name="mhp_add2" id="mhp_add2" value="0" class="form-control" />
        </div>

      </div>

      <!--第七行-->

      <div class="form-group">
        
        <div class="col-md-2 col-sm-2">
          <label  for="luk">Luk</label>
         <select name="luk" id="luk" class="form-control" >
              <?php
               for($i=1;$i<=130;$i++){
                echo "<option value=\"".$i."\">".$i."</option>";
               }
              ?>  
          </select>
        </div>
        
        <div class="col-md-1 col-sm-2">
          <label class='stat_' for="luk2">+後LUK</label>
          <input type="text" min="0" max="255" name="luk2" id="luk2" value="0" class="form-control" />
        </div>
      </div>

      <!--第八行-->

      <div class="form-group">
        <input type="hidden" name="number" id="number" value="100">
        <label class="col-md-2 col-sm-2">剩餘點數 <span id="output"></span>點</label>
      </div>    
    
  <div id="result" class='form-group'>
                    <table class="table table-hover  col-md-6 col-sm-6" >
                      <thead><tr><th>素質ATK</th><!--<th>傷害範圍:</th>--><th>素質MATK</th><th>FLEE</th><th>HIT</th><th>CRI</th><th>變詠時間</th><th>DEF</th><th>MDEF</th><th>ASPD</th></tr></thead>
                      <tbody>
                      <tr>
                          <td><span id='statk'></td><!--+ <span id="atk2">
                          </span><td  ><span id="mindamege"></span>~<span id="maxdamege"></span></td>-->
                          <td id="matk1">&nbsp;</td>
                          <td id="flee">&nbsp;</td>
                          <td id="hit">&nbsp;</td>
                          <td id="cri">&nbsp;</td>
                          <td id="castingtime"></td>
                          <td><span id="def1"></span>+<span id="def2">0</span></td>
                          <td><span id="mdef1"></span>+<span id="mdef2">0</span></td>
                          <td id="aspd">&nbsp;</td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="table table-hover  col-md-6 col-sm-6" id='hp_table'>
                      <thead><tr><th>LV.175 MaxHP</th></tr></thead>
                      <tbody>
                      <tr>
                          <td id='mhp'>&nbsp;</td>
                      </tr>
                      </tbody>
                    </table>
  </div>
</form>
<div class="panel-group" id="accordion" style="width:500px;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          治癒術
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <label for="cure_lv">治癒術等級:</label>
                                    <select name="cure_lv" id="cure_lv">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select><br />
                 <label for="">武器MATK:
                                    <input type="number" max="500" min="0" step="10" value="0" id="cure_weap" size="2"  />
                                </label>
                                <label for="cure_weap_lv">武器等級:
                                    <select name="cure_weap_lv" id="cure_weap_lv" >
                                        <option value="0" selected>空手</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </label>
                                <label for="cure_weap_add">武器精煉:</label>
                <select name="cure_weap_add" id="cure_weap_add" >
                <?php
                  for($i=0;$i<=20;$i++){
                    echo "<option value=\"".$i."\">".$i."</option>";
                  }
                ?>
                </select>
                <br />
                 <label for="cure_add1">增加*治癒*量%的技能、裝備、卡片:</label><input type="number" value="" name="cure_add1" id="cure_add1">%<br /> 
                 <label for="cure_add2">增加*恢復*量%的技能、裝備、卡片及道具:</label><input type="number" value="" name="cure_add2" id="cure_add2">%<br />
                 <label for="cure_add1">治癒術：</label><span id="curl_num"></span><br />
                 <label for="cure_num_h">高階治癒術(滿等)：</label><span id="curl_num_h"></span><br />
                 <label for="party">組隊人數 :
                                    <select name="party" id="party" >
                  <option value="0">無組隊</option>
                                    <?php
                                    for($i=1;$i<=12;$i++){
                                        echo "<option value=\"".$i."\">".$i."人</option>";
                                    }
                                    ?>
                                    </select>
                                </label><br />
                 <label for="curl_num_g">團補：</label><span id="curl_num_g"></span>
                                <br />
      </div>
    </div>
  </div>
</div>
<div class=''>
<div class="fb-comments" data-href="http://www.martin.com.tw/rotools/index.php?pages=counter" data-numposts="5" data-colorscheme="light"></div>
<!--<div id="myCanvasContainer" class=''>
      <canvas width="600" height="200" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
</div>
    <div id="tags">
      <ul>
        <li><a href="#" ><img src='/rotools/images/c1.png'></a></li>
        <li><a href="#" ><img src='/rotools/images/c2.png'></a></li>
        <li><a href="#" ><img src='/rotools/images/c3.png'></a></li>
        <li><a href="#" ><img src='/rotools/images/c4.png'></a></li>
      </ul>
    </div>-->
</div>
<script src="/rotools/js/ro.js"></script>
<script src="http://www.goat1000.com/jquery.tagcanvas.js" type="text/javascript"></script>
 <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    if(!$('#myCanvas').tagcanvas({
          maxSpeed: 0.1, minSpeed: 0.01,
          textHeight: 25, 
          fadeIn: 800,
          outlineOffset: 0, 
          depth: 0.97, 
          minBrightness: 0.2,
          wheelZoom: false, 
          reverse: true, 
          shadowBlur: 2, 
          shuffleTags: true,
          shadowOffset: [1,1], 
          stretchX: 1.7, 
          initial: [0,0.1], 
          clickToFront: 600
        },'tags')) {
          // something went wrong, hide the canvas container
          $('#myCanvasContainer').hide();
        }
</script>
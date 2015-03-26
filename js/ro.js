$(function(e) {
    //預設值
    var $number = new Array(175);
    $number[1] = 48, $number[2] = 51, $number[3] = 54, $number[4] = 57, $number[5] = 60, $number[6] = 64, $number[7] = 68, $number[8] = 72, $number[9] = 76, $number[10] = 80, $number[11] = 85, $number[12] = 90, $number[13] = 95, $number[14] = 100, $number[15] = 105, $number[16] = 111, $number[17] = 117, $number[18] = 123, $number[19] = 129, $number[20] = 135, $number[21] = 142, $number[22] = 149, $number[23] = 156, $number[24] = 163, $number[25] = 170, $number[26] = 178, $number[27] = 186, $number[28] = 194, $number[29] = 202, $number[30] = 210, $number[31] = 219, $number[32] = 228, $number[33] = 237, $number[34] = 246, $number[35] = 255, $number[36] = 265, $number[37] = 275, $number[38] = 285, $number[39] = 295, $number[40] = 305, $number[41] = 316, $number[42] = 327, $number[43] = 338, $number[44] = 349, $number[45] = 360, $number[46] = 372, $number[47] = 384, $number[48] = 396, $number[49] = 408, $number[50] = 420, $number[51] = 433, $number[52] = 446, $number[53] = 459, $number[54] = 472, $number[55] = 485, $number[56] = 499, $number[57] = 513, $number[58] = 527, $number[59] = 541, $number[60] = 555, $number[61] = 570, $number[62] = 585, $number[63] = 600, $number[64] = 615, $number[65] = 630, $number[66] = 646, $number[67] = 662, $number[68] = 678, $number[69] = 694, $number[70] = 710, $number[71] = 727, $number[72] = 744, $number[73] = 761, $number[74] = 778, $number[75] = 795, $number[76] = 813, $number[77] = 831, $number[78] = 849, $number[79] = 867, $number[80] = 885, $number[81] = 904, $number[82] = 923, $number[83] = 942, $number[84] = 961, $number[85] = 980, $number[86] = 1000, $number[87] = 1020, $number[88] = 1040, $number[89] = 1060, $number[90] = 1080, $number[91] = 1101, $number[92] = 1122, $number[93] = 1143, $number[94] = 1164, $number[95] = 1185, $number[96] = 1207, $number[97] = 1229, $number[98] = 1251, $number[99] = 1273, $number[100] = 1295, $number[101] = 1318, $number[102] = 1341, $number[103] = 1364, $number[104] = 1387, $number[105] = 1410, $number[106] = 1433, $number[107] = 1456, $number[108] = 1479, $number[109] = 1502, $number[110] = 1525, $number[111] = 1549, $number[112] = 1573, $number[113] = 1597, $number[114] = 1621, $number[115] = 1645, $number[116] = 1669, $number[117] = 1693, $number[118] = 1717, $number[119] = 1741, $number[120] = 1765, $number[121] = 1790, $number[122] = 1815, $number[123] = 1840, $number[124] = 1865, $number[125] = 1890, $number[126] = 1915, $number[127] = 1940, $number[128] = 1965, $number[129] = 1990, $number[130] = 2015, $number[131] = 2041, $number[132] = 2067, $number[133] = 2093, $number[134] = 2119, $number[135] = 2145, $number[136] = 2171, $number[137] = 2197, $number[138] = 2223, $number[139] = 2249, $number[140] = 2275, $number[141] = 2302, $number[142] = 2329, $number[143] = 2356, $number[144] = 2383, $number[145] = 2410, $number[146] = 2437, $number[147] = 2464, $number[148] = 2491, $number[149] = 2518, $number[150] = 2545, $number[151] = 2573, $number[152] = 2601, $number[153] = 2629, $number[154] = 2657, $number[155] = 2685, $number[156] = 2713, $number[157] = 2741, $number[158] = 2770, $number[159] = 2799, $number[160] = 2828, $number[161] = 2857, $number[162] = 2886, $number[163] = 2915, $number[164] = 2944, $number[165] = 2974, $number[166] = 3004, $number[167] = 3034, $number[168] = 3064, $number[169] = 3094, $number[170] = 3124, $number[171] = 3154, $number[172] = 3185, $number[173] = 3216, $number[174] = 3247, $number[175] = 3278;
    var $need = new Array(16);
    for (var i = 0; i < 16; i++) {
        $need[i] = new Array(3);
    }
    $need[0][0] = 11, $need[0][1] = 20, $need[1][0] = 21, $need[1][1] = 50, $need[2][0] = 31, $need[2][1] = 90, $need[3][0] = 41, $need[3][1] = 140, $need[4][0] = 51, $need[4][1] = 200, $need[5][0] = 61, $need[5][1] = 270, $need[6][0] = 71, $need[6][1] = 350, $need[7][0] = 81, $need[7][1] = 440, $need[8][0] = 91, $need[8][1] = 540, $need[9][0] = 100, $need[9][1] = 639, $need[10][0] = 105, $need[10][1] = 719, $need[11][0] = 110, $need[11][1] = 819, $need[12][0] = 115, $need[12][1] = 939, $need[13][0] = 120, $need[13][1] = 1079, $need[14][0] = 125, $need[14][1] = 1239, $need[15][0] = 130, $need[15][1] = 1419, $need[0][2] = 3, $need[1][2] = 4, $need[2][2] = 5, $need[3][2] = 6, $need[4][2] = 7, $need[5][2] = 8, $need[6][2] = 9, $need[7][2] = 10, $need[8][2] = 11, $need[9][2] = 16, $need[10][2] = 20, $need[11][2] = 24, $need[12][2] = 28, $need[13][2] = 32, $need[14][2] = 36, $need[15][2] = 36;
    //定義武器
    var $arms = new Array(18);
    $arms[0] = "空手", $arms[1] = "短劍", $arms[2] = "單手劍", $arms[3] = "雙手劍", $arms[4] = "單手槍", $arms[5] = "雙手槍", $arms[6] = "單手斧", $arms[7] = "雙手斧", $arms[8] = "鈍器", $arms[9] = "單手杖", $arms[10] = "雙手杖", $arms[11] = "弓", $arms[12] = "拳刃", $arms[13] = "書", $arms[14] = "拳套", $arms[15] = "樂器", $arms[16] = "鞭子", $arms[17] = "雙刀";
    var hands = new Array("3","5","7","10","12","11","17");
    //定義武器基本攻速
    var $job_baseASPD = new Array(17);
    for (var i = 0; i < 11; i++) {
        $job_baseASPD[i] = new Array(18);
    }
    //0:空手,1:短劍,2:單手劍,3:雙手劍,4:單手槍,5:雙手槍,6:單手斧,7:雙手斧,8:鈍器,9:單手杖,10:雙手杖,11:弓,12:拳刃,13:書,14:拳套,15:樂器,16:鞭子,17:雙刀
	//$job_baseASPD[5][0] = 156, $job_baseASPD[5][8] = 151, $job_baseASPD[5][14] = 155, $job_baseASPD[5][9] = 146 修羅
	//$job_baseASPD[6][0] = 149, $job_baseASPD[6][8] = 149, $job_baseASPD[6][9] = 134, $job_baseASPD[6][10] = 139, $job_baseASPD[6][13] = 150 主教
	//$job_baseASPD[7][0] = 154, $job_baseASPD[7][8] = 150, $job_baseASPD[7][6] = 146, $job_baseASPD[7][7] = 143, $job_baseASPD[7][1] = 144, $job_baseASPD[7][2] = 150基因
	//$job_baseASPD[8][0] = 154, $job_baseASPD[8][1] = 144, $job_baseASPD[8][13] = 149.6, $job_baseASPD[8][9] = 149, $job_baseASPD[8][10] = 149妖術
	//$job_baseASPD[9][0] = 154, $job_baseASPD[9][1] = 144, $job_baseASPD[9][2] = 144, $job_baseASPD[9][6] = 148, $job_baseASPD[9][7] = 141, $job_baseASPD[9][8] = 146機匠
    $job_baseASPD[0][0] = 154, $job_baseASPD[0][1] = 144, $job_baseASPD[0][2] = 142, $job_baseASPD[0][3] = 139, $job_baseASPD[0][4] = 134, $job_baseASPD[0][5] = 136, $job_baseASPD[0][6] = 146, $job_baseASPD[0][7] = 142, $job_baseASPD[0][8] = 149, $job_baseASPD[1][0] = 154, $job_baseASPD[1][1] = 152, $job_baseASPD[1][2] = 129, $job_baseASPD[1][6] = 114, $job_baseASPD[1][12] = 152, $job_baseASPD[1][17] = 152, $job_baseASPD[2][0] = 154, $job_baseASPD[2][1] = 144, $job_baseASPD[2][11] = 145, $job_baseASPD[3][0] = 154, $job_baseASPD[3][1] = 151, $job_baseASPD[3][2] = 147, $job_baseASPD[3][11] = 147, $job_baseASPD[4][0] = 154, $job_baseASPD[4][1] = 147, $job_baseASPD[4][2] = 149, $job_baseASPD[4][4] = 144, $job_baseASPD[4][5] = 144, $job_baseASPD[4][6] = 146, $job_baseASPD[4][8] = 150, $job_baseASPD[5][0] = 156, $job_baseASPD[5][8] = 151, $job_baseASPD[5][14] = 155, $job_baseASPD[5][9] = 146, $job_baseASPD[6][0] = 149, $job_baseASPD[6][8] = 149, $job_baseASPD[6][9] = 134, $job_baseASPD[6][10] = 139, $job_baseASPD[6][13] = 150, $job_baseASPD[7][0] = 154, $job_baseASPD[7][8] = 150, $job_baseASPD[7][6] = 146, $job_baseASPD[7][7] = 143, $job_baseASPD[7][1] = 144, $job_baseASPD[7][2] = 150, $job_baseASPD[8][0] = 154, $job_baseASPD[8][1] = 144, $job_baseASPD[8][13] = 149.6, $job_baseASPD[8][9] = 149, $job_baseASPD[8][10] = 149, $job_baseASPD[9][0] = 154, $job_baseASPD[9][1] = 144, $job_baseASPD[9][2] = 144, $job_baseASPD[9][6] = 148, $job_baseASPD[9][7] = 141, $job_baseASPD[9][8] = 146;
    //設定最小及最大atk範圍
    var $atkrange = new Array(5);
    for (var i = 0; i < 5; i++) {
        $atkrange[i] = new Array(2);
    }
    $atkrange[0][0] = 1, $atkrange[0][1] = 1, $atkrange[1][0] = 0.95, $atkrange[1][1] = 1.05, $atkrange[2][0] = 0.9, $atkrange[2][1] = 1.1, $atkrange[3][0] = 0.85, $atkrange[3][1] = 1.15, $atkrange[4][0] = 0.8, $atkrange[4][1] = 1.2;
    //設定各職業175基本MHP
    var mhp = new Array(12);
    mhp[0]=23125,mhp[1]=21218,mhp[2]=17418,mhp[3]=19775,mhp[4]=21725,mhp[5]=18106,mhp[6]=14543,mhp[7]=15625,mhp[8]=14793,mhp[9]=20781,mhp[10]=17412,mhp[11]=14062;
    $('#output').text($('#number').val());
   /* for (var i = 1; i <= 130; i++) {
        $('#str,#agi,#vit,#int,#dex,#luk').append($("<option></option>").attr("value", i).text(i));
    }
	for (var i = 1; i <= 20; i++) {
        $('#cure_weap_add').append($("<option></option>").attr("value", i).text("+"+i));
    }
	/*for (var i = 2; i <= 12; i++) {
        $('#party').append($("<option></option>").attr("value", i).text(i+"人"));
    }*/
    setArms(0);
    setBaseAspd();
    getvalue();
    setAtk();
    ////事件開始
    $('.form-group').change(getvalue);
    $('#level').change(function() {
        $('#number').val($number[$(this).val()] + 52);
        getvalue();
    });
    $('#job').change(function(e) {
        $('#arms').text("");
        setArms($(this).val());
        setBaseAspd();
    });
    $('#arms').change(setBaseAspd);
    $('#weaplv', '#lvatk', '#weapatk','#cardatk', '#bmi', '#carddamege1', '#carddamege2').change(setAtk);
	$('#cure_lv, #cure_weap, #cure_weap_lv,#cure_weap_add, #cure_add1, #cure_add2, #int,#dex,#luk,#level,#party').change(count_cure);
    ///////////函數區
    function setAspd() {
        var agi = Number($('#agi').val()) + Number($('#agi2').val());
        var dex = Number($('#dex').val()) + Number($('#dex2').val());
        var baseaspd = Number($('#baseaspd').text());
        var aspd1 = Number($('#aspd1').val());
        var aspdskill = Number($('#aspdskill').val());
        var aspd2 = Number($('#aspd2').val());
        var aspd3 = Number($('#aspd3').val());
        var arms = Number($('#arms').val());
        var job = $('#job').val();
        var shield = 0;   
        var lune = 0;
         $("#div_lune").hide();
        if(job=='0'){
            $("#div_lune").show();
        }else{
            $("#lune").attr("checked",false);
        }

        if($("#lune:checked").val()=="on"){
            var lune = $("#lune_lv").val() / 10 * 4 * ((100 - $("#aspd2").val()) / 100 );
            $("#div_lune_lv").show();
        }else{
            $("#div_lune_lv").hide();
            var lune = 0;
            }


        $("#div_shield").show();
        $.each(hands,function(key,value){
            if(arms==value) {
                $("#shield").attr("checked",false);
                $("#div_shield").hide();
            }
        });
        if($("#shield:checked").val()=="on"){
            switch(job)
            {
                case '0':
                    var shield = 4;
                    break;
                case '1':
                    var shield = 6;
                    break;
                case '2':
                    var shield = 4;
                    break;
                case '3':
                    var shield = 5;
                    break;
                case '4':
                    var shield = 6;
                    break;
                case '5':
                    var shield = 5;
                    break;
                case '6':
                    var shield = 4;
                    break;
                case '7':
                    var shield = 4;
                    break;
                case '8':
                    var shield = 5;
                    break;
                case '9':
                    var shield = 6;
                    break;
                default:
                    var shield = 0;
            }
        }
        //雙刀弓基本aspd,以145判斷何種公式
        if (baseaspd < 145)
        {
            aspd = baseaspd + Math.sqrt(agi * 10.09 + dex * 11 / 60) - shield;
            //ASPD=基本ASPD+(AGI*10.09+DEX*11/ 60)^0.5
        } else {
            //基本攻速大於145
            aspd = baseaspd + Math.sqrt(agi * 10.09 + dex * 11 / 60) * (1 - ((baseaspd - 144) *100) / 5000) - shield;
            //ASPD=基本ASPD+(AGI*10.09+DEX*11/ 60)^0.5*(1-(基本ASPD-144)/50)
            //雙刀公式ASPD=右手基本ASPD+(左手基本ASPD-194)/4+(AGI*10.01+DEX*11/60)^0.5*1.04518
            if (arms == 17)
                aspd = baseaspd + (baseaspd  - 194) / 4 + Math.sqrt(agi * 10.09 + dex * 11 / 60) * 1.05;
            //拿弓的公式ASPD=基本ASPD+(AGI*10.01+DEX*11/60)^0.5*(1-(基本ASPD-144)/50)
            if (arms == 11)
                aspd = baseaspd + Math.sqrt(agi * 10.01 + dex * 11 / 60) * (1 - (baseaspd - 144) / 50);
        }
        //ASPD'=200-(200-ASPD) * (1-攻速提升一/100)
        aspd = 200 - (200 - aspd) * (1 - (aspd1 * 100 + aspdskill * 100) / 10000);
        //最終ASPD=195-(195-ASPD') * (1-攻速提升二/100)+點攻速
        aspd = 195 - (195 - aspd) * (1 - (aspd2 * 100 / 10000)) + aspd3;
        aspd = Math.floor((aspd + lune)* 100) / 100 ;
        $('#aspd').text(aspd);
    }
    function setArms(val) {
        for (var i = 0; i <= 17; i++) {
            if ($job_baseASPD[val][i] > 0)
                $('#arms').append($("<option></option>").attr("value", i).text($arms[i]));
        }
    }
    function setBaseAspd() {
        var job = $('#job').val();
        var arms = $('#arms').val();
        $('#baseaspd').text($job_baseASPD[job][arms]);
        //if (arms==0) $('#weapatk,#weaplv').attr('disabled', true).val("0"); 
        //else $('#weapatk,#weaplv').attr('disabled', false); 
        setAspd();
    }
    function setAtk() {
        
    }
    function getvalue() {

        
        var job = $('#job').val();
        var baseLv = Number($('#level').val());
        var $total = $('#number').val();
        var mhp_add = Number($('#mhp_add').val());
        var mhp_add2 = Number($('#mhp_add2').val());
        var changetime = Number($('#changetime').val());
        var str = Number($('#str').val()) + Number($('#str2').val());
        var agi = Number($('#agi').val()) + Number($('#agi2').val());
        var vit = Number($('#vit').val()) + Number($('#vit2').val());
        var int = Number($('#int').val()) + Number($('#int2').val());
        var dex = Number($('#dex').val()) + Number($('#dex2').val());
        var luk = Number($('#luk').val()) + Number($('#luk2').val());
        var eqcastingtime = 1 - eval($('#eqcastingtime').val() / 100);
        $need_total = countnumber($('#str').val()) + countnumber($('#agi').val()) + countnumber($('#vit').val()) + countnumber($('#int').val()) + countnumber($('#dex').val()) + countnumber($('#luk').val());
		var matk1 = Math.floor(eval(int * 1.5)) + Math.floor(eval(dex * 0.2)) + Math.floor(eval(luk / 3)) + Math.floor(eval(baseLv * 0.25));
		//素質MATK＝ BaseLv×0.25 + INT×1.5+ DEX×0.2 + LUK/3
        var hit = Math.floor(eval(175 + dex + baseLv + (luk / 3)));
        var flee = Math.floor(eval(100 + agi + baseLv +(luk / 5)));
        var cri = Math.floor(eval(luk / 3)) + 1;
        if(changetime==0 || changetime ==''){
            var castingtime = '未設定變詠時間';
        }else{
            var castingtime = changetime * (1 - Math.sqrt(dex / 265 + int / 530)) * eqcastingtime;
            if(castingtime < 0){
                castingtime = '你已超過無詠標準哦！';
            }else if(castingtime == 0){
                castingtime = '剛剛好無變詠！';
            }else{
                 castingtime = Math.round(castingtime * 10000) / 10000;
            }
        }
       
        var def1 = Math.floor((baseLv + vit) / 2 + (agi / 5));
        var mdef1 = Math.floor(int + (baseLv / 4) + (vit / 5) + (dex / 5));
        var weapatk = Number($('#weapatk').val());//武器ATK
        var cardatk = Number($('#cardatk').val());//裝備卡片ATK
        var weaplv = Number($('#weaplv').val());//武器等級
        var lvatk = Number($('#lvatk').val());//武器精煉ATK
        var bmi = Number($('#bmi').val());//體型修正
        var kind = Number($('#kind').val());//屬性倍率
        var resist11 = Number($('#resist11').val());//裝備卡片+%
        var carddamege1 = Number($('#carddamege1').val());//種族增傷
        var carddamege2 = Number($('#carddamege2').val());//體型增傷
        var resist12 = Number($('#resist12').val());//敵人抗屬性
        var resist13 = Number($('#resist13').val());//敵人抗體型
        var skillatk = Number($('#skillatk').val());//技能倍率
        var atkup = Number($('#atkup').val());//傷害後倍率1
		var atkup2 = Number($('#atkup2').val());//傷害後倍率2
		var atkup3 = Number($('#atkup3').val());//傷害後倍率3
        var skillweap = Number($('#skillweap').val());//技能+ATK
        var resist2 = Number($('#resist2').val());//抗種族總合
        var firstdef = Number($('#firstdef').val());//前防
        var lastdef = Number($('#lastdef').val());//後防
		var arms = Number($('#arms').val());
        var maxhp_1 = (( mhp[job] * ((100+vit) / 100) + mhp_add )).toFixed(2);
        var maxhp_2 = (100 + mhp_add2) / 100;
        var maxhp = Math.floor(Math.round(maxhp_1) * maxhp_2);//算MHP
		var statk = Math.floor((str/1+luk/3+baseLv/4+dex/5) * 100) / 100;
		if (arms == 11 || arms == 15 || arms == 16) statk = Math.floor((dex/1+luk/3+baseLv/4+str/5) * 100) / 100;
		$('#atk2').text(weapatk + lvatk + cardatk);
        $('#statk').text(Math.round(statk * 100) / 100);
        //武器atk
        minfinweapatk = (weapatk * ((1 + str / 200) - weaplv * 0.05)) + lvatk;
        maxfinweapatk = (weapatk * ((1 + str / 200) + weaplv * 0.05)) + lvatk;

        /*裝備最終ATK＝〔（武器部分ATK+ 技能附加ATK總和）× 體形對應傷害比 + 卡片裝備附魔增加ATK總和〕×
         （1 + ATK+%型增加卡裝總和 + 階級增傷卡裝總和）×
         （1+ 體型增傷卡裝總和）×
         （1+種族增傷卡裝總和）
         */

        //最終武器ATK
        if (weaplv == 0)
            maxfinweapatk = 1, minfinweapatk = 1;

        minfinweapatk = ((minfinweapatk + skillweap) * bmi + cardatk) * ((100 + resist11) / 100) * ((100 + carddamege1) / 100) * ((100 + carddamege2) / 100);
        maxfinweapatk = ((maxfinweapatk + skillweap) * bmi + cardatk) * ((100 + resist11) / 100) * ((100 + carddamege1) / 100) * ((100 + carddamege2) / 100);

        //武器ATK * 屬性減免卡 * 階級減免卡 * 體型減免卡 * 武器等級浮動 * 屬性表
        //最終全部ATK
        minfinweapatk = minfinweapatk * ((100 - resist12) / 100) * ((100 - resist13) / 100);
        maxfinweapatk = maxfinweapatk * ((100 - resist12) / 100) * ((100 - resist13) / 100);

        if (kind > 0) {
            maxfinweapatk = maxfinweapatk * kind / 100;
            minfinweapatk = minfinweapatk * kind / 100;
        }

        minallweapatk = (2 * statk + minfinweapatk);
        maxallweapatk = (2 * statk + maxfinweapatk);
        //傷害段開始
        mindamege = Math.round(minallweapatk * (450 / (lastdef + 450)) * ((100 - resist2) / 100)) - firstdef;
        maxdamege = Math.round(maxallweapatk * (450 / (lastdef + 450)) * ((100 - resist2) / 100)) - firstdef;
        mindamege = mindamege * ((100 + atkup) / 100) * ((100 + atkup2) / 100) * ((100 + atkup3) / 100);
        maxdamege = maxdamege * ((100 + atkup) / 100) * ((100 + atkup2) / 100) * ((100 + atkup3) / 100);
        //傷害段結束

        $('#hp_table').show();

        if($('#kid:checked').val()=="on"){
            $total = $total - 52;
            $('#hp_table').hide();
        }

        var output = $total -$need_total;

        $('#mindamege').text(mindamege);
        $('#maxdamege').text(maxdamege);
        $('#output').text(output);
        $('#matk1').text(matk1);
        $('#hit').text(hit);
        $('#flee').text(flee);
        $('#cri').text(cri);
        $('#castingtime').text(castingtime);
        $('#def1').text(def1);
        $('#mdef1').text(mdef1);
        $('#mhp').text(maxhp);
        setAspd();
    }
    function countnumber(value) {
        $source = Number(value);
        var $sum = 0;
        if (($source < $need[0][0]) && $source != 1)
            $sum = (2 * ($source - 1));
        for (var i = 15; i >= 0; i--) {
            if ($source >= $need[i][0]) {
                $sum = $need[i][1];
                $source -= $need[i][0];
                $sum += ($need[i][2] * $source);
                i = (-i);
            }
        }
        return $sum;
    }
	
	function count_cure(){
//3*[(BASE+INT)/5](捨去小數)*治癒等級*(1+增加治癒量%的技能、裝備、卡片+增加恢復量%的技能、裝備、卡片及道具)+素質MATK+(武器MATK+精鍊MATK)*(1±0.1*武器等級)
	var base = Number($("#level").val()),int = Number($('#int').val()) + Number($('#int2').val()),cure_lv = Number($("#cure_lv").val()),cure_weap_add = Number($("#cure_weap_add").val()),cure_add1 = Number($("#cure_add1").val()),cure_add2 = Number($("#cure_add2").val()),cure_weap_lv = Number($("#cure_weap_lv").val()),cure_weap = Number($("#cure_weap").val());
	var dex = Number($('#dex').val()) + Number($('#dex2').val());
    var luk = Number($('#luk').val()) + Number($('#luk2').val());
	var party = Number($('#party').val());
	switch(cure_weap_lv)
		{
		case 1:
		  var weap_matk_lv = 1 * cure_weap_add;
		  break;
		case 2:
		  var weap_matk_lv = 3 * cure_weap_add;
		  break;
		case 3:
		  var weap_matk_lv = 5 * cure_weap_add;
		  break;
		case 4:
		  var weap_matk_lv = 7 * cure_weap_add;
		  break;
		default :
		  var  weap_matk_lv = 0 * cure_weap_add;
		} 
		
	var matk1 = Math.floor(eval(int * 1.5)) + Math.floor(eval(dex * 0.2)) + Math.floor(eval(luk / 3)) + Math.floor(eval(base * 0.25));
	var cure_num1 = Math.floor(Math.floor((base+int) / 5) * 3 * cure_lv * (1 + cure_add1 / 100 + cure_add2 / 100) + matk1 + (cure_weap + weap_matk_lv) * (1 - 0.1*cure_weap_lv));
	var cure_num2 = Math.floor(Math.floor((base+int) / 5) * 3 * cure_lv * (1 + cure_add1 /100 + cure_add2 / 100) + matk1 + (cure_weap + weap_matk_lv) * (1 + 0.1*cure_weap_lv));
	var g_cure_num1 = Math.floor(cure_num1 + (cure_num1 / 100) * ((party * 10) / 4 ));
	var g_cure_num2 = Math.floor(cure_num2 + (cure_num1 / 100) * ((party * 10) / 4 ));
	console.log(matk1);
	$("#curl_num").text(cure_num1+"~"+cure_num2);
	$("#curl_num_h").text(Math.floor(cure_num1*3.2)+"~"+Math.floor(cure_num2*3.2));
	$("#curl_num_g").text(g_cure_num1+"~"+g_cure_num2);
	}
	
	$('.collapse').collapse();
});
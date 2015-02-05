
	<style>
		#out_line{
			 max-width: 100%;
		}
		img {
    height: auto;
    max-width: 100%;
		}
		#right{
			margin-right: 50px;
		}
		@media (min-width: 767px) {
    #left {
    	float:left;
    }
		}
	</style>

<div id='out_line'>
	<div id="right">
		<img src="/rotools/images/yes.jpg" alt="chagce" >
	</div>
	<?php $clo = ($_SESSION["guild"]=='ch')?$clo = '#73B7FF':'#FF5755'; ?>
	<div id="left" style="color:<?=$clo?>">
			<span class="glyphicon">Ragnarok Online<br />
	Moonlight <br />
	Restart Chance since 2010.
	</span>
	</div>
</div>
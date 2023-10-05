<style>
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.6;
			opacity:.60;
			filter: alpha(opacity=60);
			/*test=no;*/
		}
		.white_content {
			display: none;
			position: absolute;
			top: 25%;
			left: 25%;

			width: 75%;
			margin-left: -300px;			

			height: 75%;
			
			margin-top: -150px;
			
			padding: 6px;
			border: 1px solid #cccccc;
			background-color: #cccccc;
			z-index:1002;
			overflow: auto;
		}
</style>		
<body bgcolor="lightblue">
<div id="light" class="white_content">
<img id="imagen_grande" width="100%" height="100%">
</div>		
<div id="fade" class="black_overlay" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';"></div>
<div align="center"><h1>GALERIA DE IMAGENES</H1></div>
<div align="left">
<?php for ($i=1;$i<100;$i++) {?>
<a href="javascript:;;" onclick="document.getElementById('imagen_grande').src='imagenes/imagen<?php echo str_pad($i,3,"0",STR_PAD_LEFT);?>.jpg';document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';"><img src="imagenes/imagen<?php echo str_pad($i,3,"0",STR_PAD_LEFT);?>.jpg" style="margin:25px" width="100" border=0/></a>
<?php } ?>
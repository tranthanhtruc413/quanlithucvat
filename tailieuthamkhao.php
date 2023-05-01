<?php 
	require_once('config.php');
	require_once('Listence/config.php');
	require_once('Listence/function_mysql.php');
?>
<html>
<head>

<?php
$table = "dt_thongtincongty";
$rows = array('seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','logo_cong_ty','tom_tat');
$where = null;
$order = null;
$website = null;
seo_web($table, $rows, $where, $order, $website);
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>fonts/style.css">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>css/style.css" type="text/css" />	
	<script src="<?php echo HTTP_SERVER;?>js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div class="warpper-w">
		<div class="warpper">
			<div class="bg-head">
				<div class="headding-w">
					<?php
						require_once('default/common/headding/headding.php');
					?>			
				</div>			
				<div class="header-w">
					<?php
						//require_once('default/common/header/header.php');
					?>			
				</div>	
			</div>
			<div class="menu-w">
				<?php
					$trangchu = "";
					$gioithieu = "";
					$danhsachduoclieu = "";
					$tailieuthamkhao = "class='active'";
					$tintuc = "";
					$baithuoc = "";
					require_once('default/common/menu/menu.php');
				?>			
			</div>			
			<div class="slider-w">
				<?php
					//require_once('default/common/slider/slider.php');
				?>			
			</div>				
			<div class="container-w">
				<?php
					require_once('default/module/home/home1.php');
				?>								
			</div>	
			<div class="footer-w">
				<?php
					require_once('default/common/footer/footer.php');
				?>			
			</div>			
		</div>
	</div>
</body>
</html>


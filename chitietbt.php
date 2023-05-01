<?php 
	require_once('config.php');
	require_once('Listence/config.php');
	require_once('Listence/function_mysql.php');
?>
<html>
<head>
<?php

		$seo = array('seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa');
		seo_web("dt_tintuc", $seo, "seo_url='".$_GET['id']."'", null, "");
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>fonts/style.css">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>css/style.css" type="text/css" />
	<script type="text/javascript" src="<?php echo HTTP_SERVER;?>js/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>default/module/dichvu/css/stylesheet.css">
</head>
<body>
	<div class="warpper-w">
		<div class="warpper">
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
			<div class="menu-w">
				<?php
					$trangchu = "";
					$gioithieu = "";
					$danhsachduoclieu = "";
					$tailieuthamkhao = "";
					$tintuc = "";
					$baithuoc = "class='active'";
					require_once('default/common/menu/menu.php');
				?>
			</div>	
			<div class="slidershow-w">
				<?php
					//require_once('default/common/slider/slider.php');
				?>				
			</div>	
			<div class="partner-w">
				<?php
					//require_once('default/common/partner/partner.php');
				?>					
			</div>
			<?php
			
			$so_luot_xem = 0;
			$ngay_duyet = "";
			$tieu_de = "";
			$cong_dung = "";
			$don_thuoc = "";
			$trieu_chung = "";
			$result_noidungchitiet = array();
			$where = "id='".$_GET['id']."'";
			$order = null;
			select_one($result_noidungchitiet, "dt_donthuoc", "*", $where, $order);
			if(count($result_noidungchitiet)>0){
				$tieu_de = $result_noidungchitiet[0]["tieu_de"];
				$so_luot_xem = $result_noidungchitiet[0]["so_luot_xem"];
				$cong_dung = $result_noidungchitiet[0]["cong_dung"];
				$trieu_chung = $result_noidungchitiet[0]["trieu_chung"];
				$don_thuoc = base64_decode($result_noidungchitiet[0]["don_thuoc"]);
				
				//echo $so_luot_xem;
				$so_luot_xem=$so_luot_xem+1;
				//echo $so_luot_xem;
				$bang = "dt_donthuoc";
				$dt_udview = array(
					'#id','so_luot_xem'
				);
				$giatritruong = array(
					$_GET['id'],$so_luot_xem
				);
				update_one($bang, $dt_udview, $giatritruong);
			}
			?>			
			<div class="container-w">
				<div class="container">
					<div class="container-left">
						<div class="detail-service">
							<div class="detail-title">
								<h4><a href="<?php echo HTTP_SERVER;?>index.php">Trang chủ</a><span>»</span><a href="<?php echo HTTP_SERVER;?>baithuoc-<?php echo seoname($tieu_de)."-".$_GET["id"];?>.html"><?php echo $tieu_de;?></a></h4>
							</div>
							<div class="detail-content">
								<div class="detail-name">
									<h4><?php echo $tieu_de; ?></h4>
								</div>
								<div class="detail-date">
									<!--span class="icon-calendar"> <?php echo $ngay_duyet;?></span>
									<span class="icon-user"> Quản lí</span-->
								</div>
								<div class="detail-info">
									<!--div  class="detail-info-im" style='float:left;text-align:center;'>
										<img style="width:30%;height:100%;" src="<?php  echo HTTP_SERVER.$anh_dai_dien;?>"/>
									</div-->
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<!--div style='width:100%;height:aotu;'>
											<span style='margin-top:0px;float:left;'>Tên gọi:</span><h3 style=''><?php echo $tieu_de;?></h3>
										</div-->
										
									</div>
									<div style='width:100%;height:aotu;float:left;margin-top:0%;'>
										<p style='width:100%;float:left;margin-top:0%;'><b>Triệu chứng bệnh:</b> <i><?php echo $trieu_chung;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'><b>Công dụng: </b><i><?php echo $cong_dung;?></i></p>
									</div>
									<?php
										echo $don_thuoc;
									?>
									
								</div>
							</div>
						</div>
					</div>
					<div class="container-right">
						<?php
							require_once('default/module/theright/theright.php');
						?>							
					</div>
				</div>				
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


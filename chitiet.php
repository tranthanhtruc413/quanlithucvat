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
					$danhsachduoclieu = "class='active'";
					$tailieuthamkhao = "";
					$tintuc = "";
					$baithuoc = "";
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
			$result_bo = array();
			$where = null;
			$order = null;
			select_one($result_bo, "dt_bo", "*", $where, $order);
			$result_chi = array();
			select_one($result_chi, "dt_chi", "*", $where, $order);
			$result_loai = array();
			select_one($result_loai, "dt_loai", "*", $where, $order);
			$result_lop = array();
			select_one($result_lop, "dt_lop", "*", $where, $order);
			$result_nganh = array();
			select_one($result_nganh, "dt_nganh", "*", $where, $order);
			$result_ho = array();
			select_one($result_ho, "dt_ho", "*", $where, $order);
			
			
			$id_bo = "";
			$id_chi = "";
			$id_ho = "";
			$id_loai = "";
			$id_lop = "";
			$id_nganh = "";
			
			
			$bo_phan_dung = "";
			$noi_song_thu_hai = "";
			$thanh_phan_hoa_hoc = "";
			$tinh_vi_tac_dung = "";
			$cong_dung_chi_dinh = "";
			$don_thuoc = "";
			
			$mo_ta = "";			
			$ten_goi_khac = "";
			$anh_dai_dien = "";
			$ngay_duyet = "";
			$tieu_de = "";
			$noi_dung = "";
			$result_noidungchitiet = array();
			$where = "id='".$_GET['id']."'";
			$order = null;
			select_one($result_noidungchitiet, "dt_thucvat", "*", $where, $order);
			if(count($result_noidungchitiet)>0){
				$id_bo = $result_noidungchitiet[0]["id_bo"];
				$id_chi = $result_noidungchitiet[0]["id_chi"];
				$id_ho = $result_noidungchitiet[0]["id_ho"];
				$id_loai = $result_noidungchitiet[0]["id_loai"];
				$id_lop = $result_noidungchitiet[0]["id_lop"];
				$id_nganh = $result_noidungchitiet[0]["id_nganh"];
				
				$bo_phan_dung = $result_noidungchitiet[0]["bo_phan_dung"];
				$noi_song_thu_hai = $result_noidungchitiet[0]["noi_song_thu_hai"];
				$thanh_phan_hoa_hoc = $result_noidungchitiet[0]["thanh_phan_hoa_hoc"];
				$tinh_vi_tac_dung = $result_noidungchitiet[0]["tinh_vi_tac_dung"];
				$cong_dung_chi_dinh = $result_noidungchitiet[0]["cong_dung_chi_dinh"];
				$don_thuoc = $result_noidungchitiet[0]["don_thuoc"];
				
				$mo_ta = $result_noidungchitiet[0]["mo_ta"];
				$ten_goi_khac = $result_noidungchitiet[0]["ten_goi_khac"];
				$anh_dai_dien = $result_noidungchitiet[0]["anh_dai_dien"];
				$tieu_de = $result_noidungchitiet[0]["ten_thuc_vat"];
				$so_luot_xem = $result_noidungchitiet[0]["so_luot_xem"];
				$noi_dung = base64_decode($result_noidungchitiet[0]["noi_dung"]);
				for($i=0;$i<count($result_bo);$i++){
					if($id_bo==$result_bo[$i]['id'])
						$id_bo = $result_bo[$i]["ten"];
				}
				for($i=0;$i<count($result_ho);$i++){
					if($id_ho==$result_ho[$i]['id'])
						$id_ho = $result_ho[$i]["ten"];
				}
				for($i=0;$i<count($result_chi);$i++){
					if($id_chi==$result_chi[$i]['id'])
						$id_chi = $result_chi[$i]["ten"];
				}
				for($i=0;$i<count($result_loai);$i++){
					if($id_loai==$result_loai[$i]['id'])
						$id_loai = $result_loai[$i]["ten"];
				}
				for($i=0;$i<count($result_nganh);$i++){
					if($id_nganh==$result_nganh[$i]['id'])
						$id_nganh = $result_nganh[$i]["ten"];
				}
				for($i=0;$i<count($result_lop);$i++){
					if($id_lop==$result_lop[$i]['id'])
						$id_lop = $result_lop[$i]["ten"];
				}
				//echo $so_luot_xem;
				$so_luot_xem=$so_luot_xem+1;
				//echo $so_luot_xem;
				$bang = "dt_thucvat";
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
								<h4><a href="<?php echo HTTP_SERVER;?>index.php">Trang chủ</a><span>»</span><a href="<?php echo HTTP_SERVER;?>chitiet-<?php echo seoname($tieu_de)."-".$_GET["id"];?>.html"><?php echo $tieu_de;?></a></h4>
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
									<div  class="detail-info-im" style='float:left;text-align:center;'>
										<img style="width:30%;height:100%;" src="<?php  echo HTTP_SERVER.$anh_dai_dien;?>"/>
									</div>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<div style='width:100%;height:aotu;'>
											<span style='margin-top:0px;float:left;'>Tên gọi:</span><h3 style=''><?php echo $tieu_de;?></h3>
										</div>
										<div style='width:100%;height:aotu;'>
										<?php
											if($ten_goi_khac!="null")
											 echo "<span style='margin-top:1px;float:left;'>Tên gọi khác:</span><h3>".$ten_goi_khac."</h3>";
										?>
										</div>
									</div>
									<div style='width:100%;height:aotu;float:left;margin-top:0%;'>
										<p style='width:100%;float:left;margin-top:0%;'>Ngành: <i><?php echo $id_nganh;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'>Lớp: <i><?php echo $id_lop;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'>Bộ: <i><?php echo $id_bo;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'>Họ: <i><?php echo $id_ho;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'>Chi: <i><?php echo $id_chi;?></i></p>
										<p style='width:100%;float:left;margin-top:0%;'>Loài: <i><?php echo $id_loai;?></i></p>
									</div>
									<?php
									if($noi_dung!=""){
										echo $noi_dung;
									}
									else{
										
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:0%;'>
										<p><b>Mô tả:</b><?php echo $mo_ta;?></p>
									</div>
									<?php
									if($bo_phan_dung!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Bộ phận dùng: </b> <?php echo $bo_phan_dung;?></p>
									</div>
									<?php
									}
									?>
									<?php
									if($noi_song_thu_hai!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Nơi sống: </b> <?php echo $noi_song_thu_hai;?></p>
									</div>
									<?php
									}
									?>
									<?php
									if($thanh_phan_hoa_hoc!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Thành phần hóa học: </b> <?php echo $thanh_phan_hoa_hoc;?></p>
									</div>
									<?php
									}
									?>
									<?php
									if($tinh_vi_tac_dung!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Tính vị tác dụng: </b> <?php echo $tinh_vi_tac_dung;?></p>
									</div>
									<?php
									}
									?>
									<?php
									if($cong_dung_chi_dinh!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Công dụng chỉ định: </b> <?php echo $cong_dung_chi_dinh;?></p>
									</div>
									<?php
									}
									?>
									<?php
									if($don_thuoc!='null'){
									?>
									<div style='width:100%;height:aotu;float:left;margin-top:1%;'>
										<p style='float:left'><b>Đơn thuốc: </b> <?php echo $don_thuoc;?></p>
									</div>
									<?php
									}
									}
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


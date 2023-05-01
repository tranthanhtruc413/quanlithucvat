<?php 
	require_once('config.php');
	require_once('Listence/config.php');
	require_once('Listence/function_mysql.php');
?>
<html>
<head>
<?php
	$seo = array('seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa');
	seo_web_chung("Quản lí thực vật","Quản lí thực vật","Quản lí thực vật, quan li thuc vat");
	$item = 6;
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>fonts/style.css">
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>css/style.css" type="text/css" />
	<script type="text/javascript" src="<?php echo HTTP_SERVER;?>js/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>default/module/tintuc/css/stylesheet.css">
	<script type="text/javascript">
		var item = 6;
	</script>
	<script type="text/javascript" src="<?php echo HTTP_SERVER;?>js/view_more.js"></script>
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
			<div class="container-w">
				<div class="container">
					<div class="container-left">
						<div class="new">
							<div class="title">
								<h4><span class="icon-newspaper"></span>Thực vật hữu ích</h4>
							</div>
							<?php
							$id_bo = "";
							$id_chi = "";
							$id_ho = "";
							$id_loai = "";
							$id_lop = "";
							$id_nganh = "";
							
							if(isset($_GET["ten_thuc_vat"])){
								$id_bo = $_GET["id_bo"];
								$id_chi = $_GET["id_chi"];
								$id_ho = $_GET["id_ho"];
								$id_loai = $_GET["id_loai"];
								$id_lop = $_GET["id_lop"];
								$id_nganh = $_GET["id_nganh"];
							}
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
							?>
						<form method=get>
							<div class="title" style="margin-top:5px;">
								<input id="ten_thuc_vat" name="ten_thuc_vat" value="<?php if(isset($_GET["ten_thuc_vat"])) echo $_GET["ten_thuc_vat"]; if(isset($_GET["sten_thucvat"])) echo $_GET["sten_thucvat"];?>" type="text" placeholder="Tên khoa học hoặc tên thường gọi..." style="padding:5px;width:70%;float:left;"/>
								<button style="margin-bottom:0px;margin-top:0px;" type="submit" value="someValue"><img width=25px height=25px src="<?php echo HTTP_SERVER;?>images/search.png" alt="SomeAlternateText" width="" height=""></button>
								<br>
								<select id="id_nganh" name="id_nganh" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Ngành</option>
									<?php 
									for($i=0;$i<count($result_nganh);$i++){
										$select = "";
										if($id_nganh==$result_nganh[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_nganh[$i]["id"]."'>".$result_nganh[$i]["ten"]."</option>";
									}
									?>
								</select>
								<select id="id_lop" name="id_lop" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Lớp</option>
									<?php 
									for($i=0;$i<count($result_lop);$i++){
										$select = "";
										if($id_lop==$result_lop[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_lop[$i]["id"]."'>".$result_lop[$i]["ten"]."</option>";
									}
									?>
								</select>
								<select id="id_bo" name="id_bo" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Bộ</option>
									<?php 
									for($i=0;$i<count($result_bo);$i++){
										$select = "";
										if($id_bo==$result_bo[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_bo[$i]["id"]."'>".$result_bo[$i]["ten"]."</option>";
									}
									?>
								</select>
								<select id="id_ho" name="id_ho" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Họ</option>
									<?php 
									for($i=0;$i<count($result_ho);$i++){
										$select = "";
										if($id_ho==$result_ho[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_ho[$i]["id"]."'>".$result_ho[$i]["ten"]."</option>";
									}
									?>
								</select>
								<select id="id_chi" name="id_chi" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Chi</option>
									<?php 
									for($i=0;$i<count($result_chi);$i++){
										$select = "";
										if($id_chi==$result_chi[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_chi[$i]["id"]."'>".$result_chi[$i]["ten"]."</option>";
									}
									?>
								</select>
								<select id="id_loai" name="id_loai" style="padding:5px;min-width:30%;margin-top:3px;">
									<option value=''>Chọn Loài</option>
									<?php 
									for($i=0;$i<count($result_loai);$i++){
										$select = "";
										if($id_loai==$result_loai[$i]['id'])
											$select = "selected='selected'";
										echo "<option ".$select." value='".$result_loai[$i]["id"]."'>".$result_loai[$i]["ten"]."</option>";
									}
									?>
								</select>
							</div>
							<input type='hidden' value="<?php echo HTTP_SERVER;?>" id="http_server_viewmore"/>
						</form>
							<div class="new-content" id="noidung_view_more">
							<?php
								$result_ctdichvutemp = array();
								$where = "1=1";
								if(isset($_GET["sten_thucvat"]))
									$where = $where." and (ten_thuc_vat like '%".$_GET["sten_thucvat"]."%' or ten_goi_khac like '%".$_GET["sten_thucvat"]."%' )";
								else{
									if(isset($_GET["ten_thuc_vat"])){
										if($_GET["ten_thuc_vat"]!="")
											$where = $where." and (ten_thuc_vat like '%".$_GET["ten_thuc_vat"]."%' or ten_goi_khac like '%".$_GET["ten_thuc_vat"]."%' )";
										if($_GET["id_nganh"]!="")
											$where = $where." and id_nganh = ".$_GET["id_nganh"];
										if($_GET["id_lop"]!="")
											$where = $where." and id_lop = ".$_GET["id_lop"];
										if($_GET["id_bo"]!="")
											$where = $where." and id_bo = ".$_GET["id_bo"];
										if($_GET["id_ho"]!="")
											$where = $where." and id_ho = ".$_GET["id_ho"];
										if($_GET["id_chi"]!="")
											$where = $where." and id_chi = ".$_GET["id_chi"];
										if($_GET["id_loai"]!="")
											$where = $where." and id_loai = ".$_GET["id_loai"];
									
									}
								}
								$order = "vi_tri asc";
								select_one($result_ctdichvutemp, "dt_thucvat", "*", $where, $order);
								
								$result_ctdichvu = array();
								$where = "1=1";
								if(isset($_GET["sten_thucvat"]))
									$where = $where." and (ten_thuc_vat like '%".$_GET["sten_thucvat"]."%' or ten_goi_khac like '%".$_GET["sten_thucvat"]."%' )";
								else{
									if(isset($_GET["ten_thuc_vat"])){
										if($_GET["ten_thuc_vat"]!="")
											$where = $where." and (ten_thuc_vat like '%".$_GET["ten_thuc_vat"]."%' or ten_goi_khac like '%".$_GET["ten_thuc_vat"]."%' )";
										if($_GET["id_nganh"]!="")
											$where = $where." and id_nganh = ".$_GET["id_nganh"];
										if($_GET["id_lop"]!="")
											$where = $where." and id_lop = ".$_GET["id_lop"];
										if($_GET["id_bo"]!="")
											$where = $where." and id_bo = ".$_GET["id_bo"];
										if($_GET["id_ho"]!="")
											$where = $where." and id_ho = ".$_GET["id_ho"];
										if($_GET["id_chi"]!="")
											$where = $where." and id_chi = ".$_GET["id_chi"];
										if($_GET["id_loai"]!="")
											$where = $where." and id_loai = ".$_GET["id_loai"];
									
									}
								}
								$order = "ten_thuc_vat asc limit 0,".$item;
								//$order = "ten_thuc_vat asc ";
								select_one($result_ctdichvu, "dt_thucvat", "*", $where, $order);
								for($i=0;$i<count($result_ctdichvu);$i++){
									$mota=$result_ctdichvu[$i]['mo_ta'];
									if (strlen(strstr($mota, 'null')) > 0)
										$mota ="<a href=\"".HTTP_SERVER."chitiet-".seoname($result_ctdichvu[$i]['ten_thuc_vat'])."-".$result_ctdichvu[$i]['id'].".html\"> >> Chi tiết</a>";
									echo "<div class=\"new-item\">
										<h4><a href=\"".HTTP_SERVER."chitiet-".seoname($result_ctdichvu[$i]['ten_thuc_vat'])."-".$result_ctdichvu[$i]['id'].".html\">".$result_ctdichvu[$i]['ten_thuc_vat']."</a></h4>
										<div class=\"new-item-com\">
											<!--span class=\"icon-calendar\"> 07/07/2016</span>
											<span class=\"icon-user\"> Quuản lí</span-->
										</div>
										<div class=\"new-item-post\">
											<div class=\"new-item-img\">
												<a href=\"".HTTP_SERVER."chitiet-".seoname($result_ctdichvu[$i]['ten_thuc_vat'])."-".$result_ctdichvu[$i]['id'].".html\"><img src=\"".HTTP_SERVER.$result_ctdichvu[$i]['anh_dai_dien']."\"></a>
											</div>
											<div class=\"new-item-name\">	
												<p style='height:100px;overflow: hidden;'>".$mota."</p>
											</div>	
										</div>
									</div>";
								}
							?>
							</div>
							<?php 
							if(count($result_ctdichvutemp)>count($result_ctdichvu))
								echo "<div class=\"see-more\">
									<a id='view_more' data-id='6'>Xem thêm</a>
								</div>";
							?>
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


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
	<script type="text/javascript" src="<?php echo HTTP_SERVER;?>js/view_more1.js"></script>
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
			<div class="container-w">
				<div class="container">
					<div class="container-left">
						<div class="new">
							<div class="title">
								<h4><span class="icon-newspaper"></span>Đơn thuốc</h4>
							</div>
							
						<form method=get>
							<div class="title" style="margin-top:5px;">
								<input id="ten_don_thuoc" name="ten_don_thuoc" value="<?php if(isset($_GET["ten_don_thuoc"])) echo $_GET["ten_don_thuoc"]; if(isset($_GET["sten_thucvat"])) echo $_GET["sten_thucvat"];?>" type="text" placeholder="Tên bệnh, triệu chứng bệnh hoặc công dụng của thuốc..." style="padding:5px;width:70%;float:left;"/>
								<button style="margin-bottom:0px;margin-top:0px;" type="submit" value="someValue"><img width=25px height=25px src="<?php echo HTTP_SERVER;?>images/search.png" alt="SomeAlternateText" width="" height=""></button>
								
							</div>
							<input type='hidden' value="<?php echo HTTP_SERVER;?>" id="http_server_viewmore"/>
						</form>
							<div class="new-content" id="noidung_view_more">
							<?php
								$result_ctdichvutemp = array();
								$where = "1=1";
								if(isset($_GET["ten_don_thuoc"])){
									if($_GET["ten_don_thuoc"]!="")
										$where = $where." and (tieu_de like '%".$_GET["ten_don_thuoc"]."%' or cong_dung like '%".$_GET["ten_don_thuoc"]."%' or trieu_chung like '%".$_GET["ten_don_thuoc"]."%')";
								}
								$order = "vi_tri asc";
								select_one($result_ctdichvutemp, "dt_donthuoc", "*", $where, $order);
								
								$result_ctdichvu = array();
								$where = "1=1";
								if(isset($_GET["ten_don_thuoc"])){
									if($_GET["ten_don_thuoc"]!="")
										$where = $where." and (tieu_de like '%".$_GET["ten_don_thuoc"]."%' or cong_dung like '%".$_GET["ten_don_thuoc"]."%' or trieu_chung like '%".$_GET["ten_don_thuoc"]."%')";
								}
								$order = "tieu_de asc limit 0,".$item;
								//$order = "ten_don_thuoc asc ";
								select_one($result_ctdichvu, "dt_donthuoc", "*", $where, $order);
								for($i=0;$i<count($result_ctdichvu);$i++){
									echo "<div class=\"new-item\">
										<h4><a href=\"".HTTP_SERVER."baithuoc-".seoname($result_ctdichvu[$i]['tieu_de'])."-".$result_ctdichvu[$i]['id'].".html\">".$result_ctdichvu[$i]['tieu_de']."</a></h4>
										<div class=\"new-item-com\">
											<!--span class=\"icon-calendar\"> 07/07/2016</span>
											<span class=\"icon-user\"> Quuản lí</span-->
										</div>
										<div class=\"new-item-post\">
											<div class=\"new-item-img\">
												<a href=\"".HTTP_SERVER."baithuoc-".seoname($result_ctdichvu[$i]['tieu_de'])."-".$result_ctdichvu[$i]['id'].".html\"><img src=\"".HTTP_SERVER."images/baithuoc.png\"></a>
											</div>
											<div class=\"new-item-name\">	
												<p style='height:100px;overflow: hidden;'>".$result_ctdichvu[$i]['cong_dung']."</p>
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


<?php
	session_start();
	require_once ("../config.php");
	require_once ("../Listence/function_mysql.php");
	if(isset($_POST['view_more']))
	{
		$result_ctdichvutemp = array();
								$where = "1=1";
								if($_POST["ten_thuc_vat"]!="")
											$where = $where." and ten_thuc_vat like '%".$_POST["ten_thuc_vat"]."%'";
										if($_POST["id_nganh"]!="")
											$where = $where." and id_nganh = ".$_POST["id_nganh"];
										if($_POST["id_lop"]!="")
											$where = $where." and id_lop = ".$_POST["id_lop"];
										if($_POST["id_bo"]!="")
											$where = $where." and id_bo = ".$_POST["id_bo"];
										if($_POST["id_ho"]!="")
											$where = $where." and id_ho = ".$_POST["id_ho"];
										if($_POST["id_chi"]!="")
											$where = $where." and id_chi = ".$_POST["id_chi"];
										if($_POST["id_loai"]!="")
											$where = $where." and id_loai = ".$_POST["id_loai"];
								$order = "vi_tri asc";
								select_one($result_ctdichvutemp, "dt_thucvat", "*", $where, $order);
								
		$bd = $_POST['view_more'];
		$item = $_POST['view_more_next'];

							$result_ctdichvu = array();
								$where = "1=1";
								
								if($_POST["ten_thuc_vat"]!="")
											$where = $where." and ten_thuc_vat like '%".$_POST["ten_thuc_vat"]."%'";
										if($_POST["id_nganh"]!="")
											$where = $where." and id_nganh = ".$_POST["id_nganh"];
										if($_POST["id_lop"]!="")
											$where = $where." and id_lop = ".$_POST["id_lop"];
										if($_POST["id_bo"]!="")
											$where = $where." and id_bo = ".$_POST["id_bo"];
										if($_POST["id_ho"]!="")
											$where = $where." and id_ho = ".$_POST["id_ho"];
										if($_POST["id_chi"]!="")
											$where = $where." and id_chi = ".$_POST["id_chi"];
										if($_POST["id_loai"]!="")
											$where = $where." and id_loai = ".$_POST["id_loai"];
								
								
								$order = "ten_thuc_vat asc limit ".$bd.",".$item;
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
								if(count($result_ctdichvutemp)>($bd+$item))
									echo "@@@1";
								else
									echo "@@@0";
	}
	else
	{
		echo "error";
	}
?>
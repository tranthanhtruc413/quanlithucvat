<?php
	session_start();
	require_once ("../config.php");
	require_once ("../Listence/function_mysql.php");
	if(isset($_POST['view_more']))
	{
		$result_ctdichvutemp = array();
								$where = "1=1";
								if($_POST["ten_don_thuoc"]!="")
										$where = $where." and (tieu_de like '%".$_POST["ten_don_thuoc"]."%' or cong_dung like '%".$_POST["ten_don_thuoc"]."%' or trieu_chung like '%".$_POST["ten_don_thuoc"]."%')";
								$order = "vi_tri asc";
								select_one($result_ctdichvutemp, "dt_donthuoc", "*", $where, $order);
								
		$bd = $_POST['view_more'];
		$item = $_POST['view_more_next'];

							$result_ctdichvu = array();
								$where = "1=1";
								
								if($_POST["ten_don_thuoc"]!="")
										$where = $where." and (tieu_de like '%".$_POST["ten_don_thuoc"]."%' or cong_dung like '%".$_POST["ten_don_thuoc"]."%' or trieu_chung like '%".$_POST["ten_don_thuoc"]."%')";
								
								
								$order = "tieu_de asc limit ".$bd.",".$item;
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
<?php
date_default_timezone_set("America/New_York");
date_default_timezone_set('Asia/Ho_Chi_Minh');
#region [Ham ho tro]
	function connect()
	{
		//$conn = mysqli_connect('localhost', 'davatar_bongda', '123456', 'davatar_bongda') or die ('Không thể kết nối tới database');
		$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die ('Không thể kết nối tới database');
		return $conn;
	}
	function login_website($table = "system_thongtinchung",$truong = array('system_username','system_password', 'system_role'), $username = "", $password = "")
	{
		$result = array();
		$where = $truong[0]."='".$username."' and ".$truong[1]."='".md5($password)."'";
		select_one($result, $table, "*", $where, null);
		return count($result)==1?$result[0][$truong[2]]:"error";
	}
	function login($table = "system_thongtinchung",$truong = array('system_username','system_password', 'system_role'), $username = "", $password = "", $role = 1)
	{
		$result = array();
		$where = $truong[0]."='".$username."' and ".$truong[1]."='".md5($password)."'";
		select_one($result, $table, "*", $where, null);
		return count($result)==1?$result[0][$truong[2]]:false;
	}
	function check_taikhoan($table = "system_thongtinchung",$truong = array('system_username'), $username = "")
	{
		$result = array();
		$where = $truong[0]." = '".$username."'";
		select_one($result, $table, "*", $where, null);
		return count($result)>0?true:false;
	}
	function set_image($images = "")
	{
		$sub = explode("/", $images);
		if(count($sub)>2){
			if($sub[1] != "upload"&&$sub[2] != "upload")
			{
				$img = "/";
				for($i = 3;$i<count($sub);$i++)
				{
					$img = $img.$sub[$i];
					if($i < (count($sub) - 1))
						$img = $img."/";
				}
				return $img;
			}
			else{
				if($sub[1] != "upload")
				{
					$img = "/";
					for($i = 2;$i<count($sub);$i++)
					{
						$img = $img.$sub[$i];
						if($i < (count($sub) - 1))
							$img = $img."/";
					}
					return $img;
				}
			}
		}else
		if(count($sub)>1){
			if($sub[1] != "upload")
			{
				$img = "/";
				for($i = 2;$i<count($sub);$i++)
				{
					$img = $img.$sub[$i];
					if($i < (count($sub) - 1))
						$img = $img."/";
				}
				return $img;
			}
		}
			return $images;
	}
	function seoname_khongkhoangcach($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>array('á','à','ả','ã','ạ','ă','ắ','ặ','ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','ậ'),
			'A'=>array('Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ','Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','Ậ'),
			'd'=>array('đ'),
			'D'=>array('Đ'),
			'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ'),
			'E'=>array('É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề','Ể','Ễ','Ệ'),
			'i'=>array('í','ì','ỉ','ĩ','ị'),
			'I'=>array('Í','Ì','Ỉ','Ĩ','Ị'),
			'o'=>array('ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','ợ'),
			'O'=>array('Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ','Ổ','Ỗ','Ộ','Ơ','Ớ','Ờ','Ở','Ỡ','Ợ'),
			'u'=>array('ú','ù','ủ','ũ','ụ','ư','ứ','ừ','ử','ữ','ự'),
			'U'=>array('Ú','Ù','Ủ','Ũ','Ụ','Ư','Ứ','Ừ','Ử','Ữ','Ự'),
			'y'=>array('ý','ỳ','ỷ','ỹ','ỵ'),
			'Y'=>array('Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
			''=>array(' ','&quot;','.','-–-')
		);
		foreach($unicode as $nonUnicode=>$uni){
			foreach($uni as $value)
			$str = @str_replace($value,$nonUnicode,$str);
			$str = preg_replace("/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/","",$str);
			$str = preg_replace("/-+-/","-",$str);
			$str = preg_replace("/^\-+|\-+$/","",$str);
		}
		return strtolower($str);
	}
	function seoname_khongdau($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>array('á','à','ả','ã','ạ','ă','ắ','ặ','ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','ậ'),
			'A'=>array('Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ','Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','Ậ'),
			'd'=>array('đ'),
			'D'=>array('Đ'),
			'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ'),
			'E'=>array('É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề','Ể','Ễ','Ệ'),
			'i'=>array('í','ì','ỉ','ĩ','ị'),
			'I'=>array('Í','Ì','Ỉ','Ĩ','Ị'),
			'o'=>array('ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','ợ'),
			'O'=>array('Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ','Ổ','Ỗ','Ộ','Ơ','Ớ','Ờ','Ở','Ỡ','Ợ'),
			'u'=>array('ú','ù','ủ','ũ','ụ','ư','ứ','ừ','ử','ữ','ự'),
			'U'=>array('Ú','Ù','Ủ','Ũ','Ụ','Ư','Ứ','Ừ','Ử','Ữ','Ự'),
			'y'=>array('ý','ỳ','ỷ','ỹ','ỵ'),
			'Y'=>array('Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
			''=>array('','&quot;','.','-–-')
		);
		foreach($unicode as $nonUnicode=>$uni){
			foreach($uni as $value)
			$str = @str_replace($value,$nonUnicode,$str);
			$str = preg_replace("/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/",' ',$str);
			$str = preg_replace("/-+-/","-",$str);
			$str = preg_replace("/^\-+|\-+$/"," ",$str);
		}
		return strtolower($str);
	}
	function seoname($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>array('á','à','ả','ã','ạ','ă','ắ','ặ','ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','ậ'),
			'A'=>array('Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ','Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','Ậ'),
			'd'=>array('đ'),
			'D'=>array('Đ'),
			'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ'),
			'E'=>array('É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề','Ể','Ễ','Ệ'),
			'i'=>array('í','ì','ỉ','ĩ','ị'),
			'I'=>array('Í','Ì','Ỉ','Ĩ','Ị'),
			'o'=>array('ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','ợ'),
			'O'=>array('Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ','Ổ','Ỗ','Ộ','Ơ','Ớ','Ờ','Ở','Ỡ','Ợ'),
			'u'=>array('ú','ù','ủ','ũ','ụ','ư','ứ','ừ','ử','ữ','ự'),
			'U'=>array('Ú','Ù','Ủ','Ũ','Ụ','Ư','Ứ','Ừ','Ử','Ữ','Ự'),
			'y'=>array('ý','ỳ','ỷ','ỹ','ỵ'),
			'Y'=>array('Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
			'-'=>array(' ','&quot;','.','-–-')
		);
		foreach($unicode as $nonUnicode=>$uni){
			foreach($uni as $value)
			$str = @str_replace($value,$nonUnicode,$str);
			$str = preg_replace("/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/","-",$str);
			$str = preg_replace("/-+-/","-",$str);
			$str = preg_replace("/^\-+|\-+$/","",$str);
		}
		return strtolower($str);
	}
	function check_giatrinull($truong, $giatritruong){
		$kiemtra = true;
		if(count($truong) == count($giatritruong)){
			for($i =0; $i<count($truong); $i++){
				if(strstr($truong[$i][0],"@") != ""){
					if($giatritruong[$i] == ""){
						$kiemtra = false;
						break;
					}
				}
			}
		}
		else{
			$kiemtra = false;
		}
		return $kiemtra;
	}
	function check_giatrinull_khoachinh($truong, $giatritruong){
		$kiemtra = true;
		if(count($truong) == count($giatritruong)){
			for($i =0; $i<count($truong); $i++){
				if(strstr($truong[$i][0],"@") != ""){
					if($giatritruong[$i] == ""){
						$kiemtra = false;
						break;
					}
				}
				if(strstr($truong[$i][0],"#") != ""){
					if($giatritruong[$i] == ""){
						$kiemtra = false;
						break;
					}
				}
			}
		}
		else{
			$kiemtra = false;
		}
		return $kiemtra;
	}
	function get_khoachinh($truong, $giatritruong, &$khoachinh, &$giatrikhoachinh){
		$vitri = 0;
		if(count($truong) == count($giatritruong)){
			for($i =0; $i<count($truong); $i++){
				if(strstr($truong[$i][0],"#") != ""){
					$truongis = $truong[$i];//Gia tri ban dau
					$temp = explode("#",$truongis);
					$khoachinh[$vitri] = $temp[1];
					$giatrikhoachinh[$vitri] = $giatritruong[$i];
					$vitri++;
				}
			}
		}
	}
	function get_notkhoachinh($truong, $giatritruong, &$notkhoachinh, &$giatrinotkhoachinh){
		$vitri = 0;
		if(count($truong) == count($giatritruong)){
			for($i =0; $i<count($truong); $i++){
				//if(strstr($truong[$i][0],"#") == "" && strstr($truong[$i][0],"@") == ""){
				if(strstr($truong[$i][0],"#") == ""){
					if(strstr($truong[$i][0],"@") != ""){
						$truongis = $truong[$i];//Gia tri ban dau
						$temp = explode("@",$truongis);
						$notkhoachinh[$vitri] = $temp[1];
						$giatrinotkhoachinh[$vitri] = $giatritruong[$i];
						$vitri++;
					}else{
						$notkhoachinh[$vitri] = $truong[$i];
						$giatrinotkhoachinh[$vitri] = $giatritruong[$i];
						$vitri++;
					}
				}
			}
		}
	}
	function get_user_ip() {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
	function get_IP(){
		$host = $_SERVER['HTTP_HOST']; //– ví dụ: Bạn vào http://sinhvienit.net/forum/showthread.php?t=2053 thì kết quả là sinhvienit.net
		$self = $_SERVER['PHP_SELF']; //– ví dụ: Bạn vào http://sinhvienit.net/forum/showthread.php?t=2053 thì kết quả là /forum/showthread.php
		$time = $_SERVER['REQUEST_TIME']; //–Thời gian mà Client gửi request, Ở dạng TIME _STAMP
		$query =$_SERVER['QUERY_STRING'];//– ví dụ: Bạn vào http://sinhvienit.net/forum/showthread.php?t=2053 thì kết quả là t=2053
		$root = $_SERVER['DOCUMENT_ROOT']; //–Thư mục gốc chứa mã nguồn. VD: /home/sinhvienit/public_html (Đối với Linux) hay C:\www (Đối với windows)
		//$r = $_SERVER['HTTP_REFERER']; //–Cái này bạn đang trên http://www.google.com.vn/search?q=sinhvienit mà click vào link tới sinhvienit.net thì nó có giá trị http://www.google.com.vn/search?q=sinhvienit
		//$rh = $_SERVER['REMOTE_HOST']; //–Hostname của người truy cập
		$rp = $_SERVER['REMOTE_PORT']; //–Port mà trình duyệt mở ra để kết nối tới server
		$url = $_SERVER['REQUEST_URI']; //– ví dụ: Bạn vào http://sinhvienit.net/forum/showthread.php?t=2053 thì kết quả là /forum/showthread.php?t=2053
		$sname = $_SERVER['SERVER_NAME'];//–Tên của server (Gần giống với computername) ở máy PC của mình. Ví dụ server.sinhvienit.net
		$ips = $_SERVER['SERVER_ADDR'];//–IP của server
		$ipc = $_SERVER['REMOTE_ADDR'];//–IP của người truy cập
		$br = $_SERVER['HTTP_USER_AGENT'];//–Thông tin về trình duyệt của người truy cập
		return $ipc;
	}
#endregion
#region [Ham insert]
	function insert_one($bang, $truong, $giatritruong)
	{
		$conn = connect();
		if(check_giatrinull($truong, $giatritruong)==true)
		{
			//Lay truong du lieu
			$sql = " insert into ".$bang."(";
			for($i=0; $i<count($truong); $i++){
				if($i == 0){
					$truongis = $truong[$i];//Gia tri ban dau
					if(strstr($truongis,"@") != ""){
						$temp = explode("@",$truongis);
						$truongis = $temp[1];
					}
					if(strstr($truongis,"#") != ""){
						$temp = explode("#",$truongis);
						$truongis = $temp[1];
					}
					$sql = $sql.$truongis;
				}
				else{
					$truongis = $truong[$i];//Gia tri ban dau
					if(strstr($truongis,"@") != ""){
						$temp = explode("@",$truongis);
						$truongis = $temp[1];
					}
					if(strstr($truongis,"#") != ""){
						$temp = explode("#",$truongis);
						$truongis = $temp[1];
					}
					$sql = $sql.", ".$truongis;
				}
			}
			$sql = $sql.")";
			//Lay gia tri du lieu
			$sql = $sql." values(";
			for($i=0; $i<count($giatritruong); $i++){
				if($i == 0){
					if(strcmp($giatritruong[$i],'')==0)
						$sql = $sql."null";
					else
						$sql = $sql."'".$giatritruong[$i]."'";
				}
				else{
					if(strcmp($giatritruong[$i],'')==0)
						$sql = $sql."null";
					else
					$sql = $sql.", "."'".$giatritruong[$i]."'";
				}
			}
			$sql = $sql.")";
			mysqli_set_charset($conn,'utf8');
			$kq = mysqli_query($conn, $sql);
			mysqli_close($conn);
			return $kq;
		}
		else{
			return false;
		}
	}
#endregion
#region [Ham cap nhat]
	function update_one($bang, $truong, $giatritruong){
		$conn = connect();
		if(check_giatrinull_khoachinh($truong, $giatritruong)==true){
			//Tim khoa chinh va tach khoa chinh ra khoi gia tri update
			$khoachinh = array();
			$giatrikhoachinh = array();
			$notkhoachinh = array();
			$giatrinotkhoachinh = array();
			get_khoachinh($truong, $giatritruong, $khoachinh, $giatrikhoachinh);
			get_notkhoachinh($truong, $giatritruong, $notkhoachinh, $giatrinotkhoachinh);
			//Update
			$sql = " update ".$bang;
			for($i = 0; $i<count($notkhoachinh); $i++){
				if($i == 0){
					$sql = $sql." set ".$notkhoachinh[$i]." = '".$giatrinotkhoachinh[$i]."'";
				}
				else{
					$sql = $sql.", ".$notkhoachinh[$i]." = '".$giatrinotkhoachinh[$i]."'";
				}
			}
			for($i = 0; $i<count($khoachinh); $i++){
				if($i == 0){
					$sql = $sql." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				}
				else{
					$sql = $sql." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				}
			}
			mysqli_set_charset($conn,'utf8');
			$kq = mysqli_query($conn, $sql);
			mysqli_close($conn);
			return $kq;
		}
		else{
			mysqli_close($conn);
			return false;
		}
	}
#endregion
#region [Ham xoa]
function delete_one_sanpham($bang, $khoa, $giatrikhoa, $vitri = null, $giatrivitri = null, $where_vitri = null){
	$conn = connect();
	if(check_giatrinull_khoachinh($khoa, $giatrikhoa)==true){
		$khoachinh = array();
		$giatrikhoachinh = array();
		get_khoachinh($khoa, $giatrikhoa, $khoachinh, $giatrikhoachinh);
		$sql = " delete from ".$bang;
		$sqlselect = " select * from ".$bang;
		for($i = 0; $i<count($khoachinh); $i++){
			if($i == 0){
				$sql = $sql." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				$sqlselect = $sqlselect." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
			else{
				$sql = $sql." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				$sqlselect = $sqlselect." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
		}
		$kqselect = mysqli_query($conn, $sqlselect);
		if(mysqli_num_rows($kqselect)>0){
			$kq = mysqli_query($conn, $sql);
			if($kq == 1 && $vitri != null){
				//Updatevitri
				$sqlupdatevitri = "select * from ".$bang." where ".$vitri." > ".$giatrivitri." ".$where_vitri." order by ".$vitri." asc";
				$resultupdatevitri = mysqli_query($conn, $sqlupdatevitri);
				while ($row = mysqli_fetch_assoc($resultupdatevitri)){
					$sqltemp = "update ".$bang." set ".$vitri." = ".($row[$vitri]-1); 
					for($i = 0; $i<count($khoachinh); $i++){
						if($i == 0){
							$sqltemp = $sqltemp." where ".$khoachinh[$i]." = '".$row[$khoachinh[$i]]."'";
						}
						else{
							$sqltemp = $sqltemp." and ".$khoachinh[$i]." = '".$row[$khoachinh[$i]]."'";
						}
					}
					//echo $sqltemp."<br>";
					$resultupdate = mysqli_query($conn, $sqltemp);
				}
			}
			mysqli_close($conn);
			return $kq;
		}
	}
	mysqli_close($conn);
	return false;
}
function delete_one($bang, $khoa, $giatrikhoa, $vitri = null, $giatrivitri = null){
	$conn = connect();
	if(check_giatrinull_khoachinh($khoa, $giatrikhoa)==true){
		$khoachinh = array();
		$giatrikhoachinh = array();
		get_khoachinh($khoa, $giatrikhoa, $khoachinh, $giatrikhoachinh);
		$sql = " delete from ".$bang;
		$sqlselect = " select * from ".$bang;
		for($i = 0; $i<count($khoachinh); $i++){
			if($i == 0){
				$sql = $sql." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				$sqlselect = $sqlselect." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
			else{
				$sql = $sql." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
				$sqlselect = $sqlselect." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
		}
		$kqselect = mysqli_query($conn, $sqlselect);
		if(mysqli_num_rows($kqselect)>0){
			$kq = mysqli_query($conn, $sql);
			if($kq == 1 && $vitri != null){
				//Updatevitri
				$sqlupdatevitri = "select * from ".$bang." where ".$vitri." > ".$giatrivitri." order by ".$vitri." asc";
				$resultupdatevitri = mysqli_query($conn, $sqlupdatevitri);
				while ($row = mysqli_fetch_assoc($resultupdatevitri)){
					$sqltemp = "update ".$bang." set ".$vitri." = ".($row[$vitri]-1); 
					for($i = 0; $i<count($khoachinh); $i++){
						if($i == 0){
							$sqltemp = $sqltemp." where ".$khoachinh[$i]." = '".$row[$khoachinh[$i]]."'";
						}
						else{
							$sqltemp = $sqltemp." and ".$khoachinh[$i]." = '".$row[$khoachinh[$i]]."'";
						}
					}
					//echo $sqltemp."<br>";
					$resultupdate = mysqli_query($conn, $sqltemp);
				}
			}
			mysqli_close($conn);
			return $kq;
		}
	}
	mysqli_close($conn);
	return false;
}
function delete_one_notvitri($bang, $truong, $giatritruong){
	$conn = connect();
	if(check_giatrinull_khoachinh($truong, $giatritruong)==true){
		//Tim khoa chinh va tach khoa chinh ra khoi gia tri update
		$khoachinh = array();
		$giatrikhoachinh = array();
		get_khoachinh($truong, $giatritruong, $khoachinh, $giatrikhoachinh);
		//Update
		$sql = " delete from ".$bang;
		for($i = 0; $i<count($khoachinh); $i++){
			if($i == 0){
			$sql = $sql." where ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
			else{
			$sql = $sql." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
		}
		mysqli_set_charset($conn,'utf8');
		$kq = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return $kq;
	}
	else{
		mysqli_close($conn);
		return false;
	}
}
#endregion
#region [Ham truy van csdl]

function seo_web_sanpham($table, $rows = array('seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','anh_dai_dien','tom_tat'), $where = null, $order = null, $website = null){
	$result = array();
	select_one($result, $table, "*", $where, $order);
	$title = "";
	$description = "";
	$keywords = "";
	$image = "";
	$content = "";
	for($i = 0; $i < count($result); $i++){
		if($i==0){
			if($result[$i][$rows[0]]!="")
				$title = $title.$result[$i][$rows[0]];
			else
				$title = $title.$result[$i][$rows[5]];
			$keywords = $keywords.$result[$i][$rows[2]];
			$description = $description.$result[$i][$rows[3]];
			$temp = explode("@" ,$result[$i][$rows[4]]);
			$temp_vdha = explode(";", $temp[1]);
			$hinh = explode(",", $temp_vdha[3]);
			$anh_sanpham = "/upload/images/none-image.png";
			for($h=0;$h<count($hinh);$h++){
				if($hinh[$h]!=""){
					$anh_sanpham = $hinh[$h];
					break;
				}
			}
			$image = HTTP_SERVER.$anh_sanpham;
			//$content = $result[$i][$rows[5]];
		}
		else{
			if($result[$i][$rows[0]]!="")
				$title = $title.$result[$i][$rows[0]];
			else
				$title = $title.$result[$i][$rows[5]];
			$keywords = $keywords.", ".$result[$i][$rows[2]];
			$description = $description.", ".$result[$i][$rows[3]];
			
			$temp = explode("@" ,$result[$i][$rows[4]]);
			$temp_vdha = explode(";", $temp[1]);
			$hinh = explode(",", $temp_vdha[3]);
			$anh_sanpham = "/upload/images/none-image.png";
			for($h=0;$h<count($hinh);$h++){
				if($hinh[$h]!=""){
					$anh_sanpham = $hinh[$h];
					break;
				}
			}
			$image = HTTP_SERVER.$anh_sanpham;
			//$content = $content.$result[$i][$rows[5]];
		}
	}
	echo "<title>Quản lí thực vật</title>";
	echo "<meta name=\"description\" content=\"".$content.$description."\">";
	echo "<meta name=\"keywords\" content=\"".$keywords."\">";
	
	$result = array();
	select_one($result, "dt_thongtincongty", "*", null, null);
	echo "<link href=\"".HTTP_SERVER.$result[0]['logo_cong_ty_bottom']."\" rel=\"icon\">";
	echo "<meta itemprop=\"image\" content=\"".$image."\">
	<meta property=\"og:url\" itemprop=\"url\" content=\"".diachi_url_hientai()."\">
	<meta property=\"og:title\" content=\"".$title."\">
	<meta property=\"og:description\" content=\"".$content.$description."\">
	<meta property=\"og:image\" content=\"".$image."\">
	<link rel=\"canonical\" href=\"".diachi_url_hientai()."\">
	<meta property=\"article:section\" content=\"\">
	<meta property=\"article:tag\" content=\"\">";
}
function seo_web($table, $rows = array('seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','anh_dai_dien','tom_tat'), $where = null, $order = null, $website = null){
	$result = array();
	select_one($result, $table, "*", $where, $order);
	$title = "";
	$description = "";
	$keywords = "";
	$image = "";
	$content = "";
	$temp="";
	for($i = 0; $i < count($result); $i++){
		if($i==0){
			if($result[$i][$rows[0]]!="")
				$title = $title.$result[$i][$rows[0]];
			else
				$title = $title.$result[$i][$rows[5]];
			$keywords = $keywords.$result[$i][$rows[2]];
			$description = $description.$result[$i][$rows[3]];
			$temp =  explode(",", $result[$i][$rows[4]]);
			$image = HTTP_SERVER.$temp[0];
			$content = $result[$i][$rows[5]];
		}
		else{
			if($result[$i][$rows[0]]!="")
				$title = $title.$result[$i][$rows[0]];
			else
				$title = $title.$result[$i][$rows[5]];
			$keywords = $keywords.", ".$result[$i][$rows[2]];
			$description = $description.", ".$result[$i][$rows[3]];
			$temp =  explode(",", $result[$i][$rows[4]]);
			$image = HTTP_SERVER.$temp[0];
			//$content = $content.$result[$i][$rows[5]];
		}
	}
	echo "<title>Quản lí thực vật</title>";
	echo "<meta name=\"description\" content=\"".$content.$description."\">";
	echo "<meta name=\"keywords\" content=\"".$keywords."\">";
	
	$result = array();
	select_one($result, "dt_thongtincongty", "*", null, null);
	echo "<link href=\"".HTTP_SERVER."images/icon.ico\" rel=\"icon\">";
	echo "<meta itemprop=\"image\" content=\"".$image."\">
	<meta property=\"og:url\" itemprop=\"url\" content=\"".diachi_url_hientai()."\">
	<meta property=\"og:title\" content=\"".$title."\">
	<meta property=\"og:description\" content=\"".$content.$description."\">
	<meta property=\"og:image\" content=\"".$image."\">
	<link rel=\"canonical\" href=\"".diachi_url_hientai()."\">
	<meta property=\"article:section\" content=\"\">
	<meta property=\"article:tag\" content=\"\">";
}
function seo_web_chung($table = "dt_thongtincongty",$title = "",$description = "",$keywords = ""){
	echo "<title>Quản lí thực vật</title>";
	echo "<meta name=\"description\" content=\"".$description."\">";
	echo "<meta name=\"keywords\" content=\"".$keywords."\">";
	$result = array();
	select_one($result, "dt_thongtincongty", "*", null, null);
	echo "<link href=\"".HTTP_SERVER."images/icon.ico\" rel=\"icon\">";
	echo "<meta itemprop=\"image\" content=\"".HTTP_SERVER.$result[0]['logo_cong_ty']."\">
	<meta property=\"og:url\" itemprop=\"url\" content=\"".diachi_url_hientai()."\">
	<meta property=\"og:title\" content=\"".$title."\">
	<meta property=\"og:description\" content=\"".$description."\">
	<meta property=\"og:image\" content=\"".HTTP_SERVER.$result[0]['logo_cong_ty']."\">
	<link rel=\"canonical\" href=\"".diachi_url_hientai()."\">
	<meta property=\"article:section\" content=\"\">
	<meta property=\"article:tag\" content=\"\">";
}
function select_one(&$resultreturn, $table , $rows = '*', $where = null, $order = null){
	$conn = connect();
	//Tao cau truy van
	$sql = 'SELECT '.$rows.' FROM '.$table;
    if($where != null)
        $sql .= ' WHERE '.$where;
    if($order != null)
        $sql .= ' ORDER BY '.$order;
	mysqli_set_charset($conn,'utf8');
	$result = mysqli_query($conn, $sql);
	if($result)
    {
		$numResults = mysqli_num_rows($result);
		for($i = 0; $i < $numResults; $i++)
        {
			$r = mysqli_fetch_array($result);
            $key = array_keys($r);
			for($x = 1; $x < count($key); $x+=2)
            {
				/*echo $key[$x]." ";*/
				if(count($key) >= 1)
					$resultreturn[$i][$key[$x]] = $r[$key[$x]];
				else if(mysqli_num_rows($result) < 1)
                    $resultreturn = null;
                else
                        $resultreturn[$key[$x]] = $r[$key[$x]];
			}
		}
	}
	mysqli_close($conn);
}
/*
	Cach lay ham select
	include "function_mysql.php";
	$result = array();
	select_one($result, "quangcaochinh", "*", null, null);
	for($i=0; $i<count($result); $i++){
		foreach($result[$i] as $key=>$value)
		{
			echo $key." => ".$value."<br />\n";
		}
		echo "<br>";
	}
*/
function select_combobox($table, $combobox, $name, $rows = '*', $where = null, $order = null){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' style='min-width:300px;'>";
		for($i=0; $i<count($result); $i++){
			echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
	echo "</select>";
}
function select_combobox_style($table, $combobox, $name, $rows = '*',$style='', $where = null, $order = null){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' ".$style.">";
		for($i=0; $i<count($result); $i++){
			echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
	echo "</select>";
}
function select_combobox_style_value($table, $combobox, $value = null, $name, $rows = '*',$style='', $where = null, $order = null){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' ".$style.">";
		for($i=0; $i<count($result); $i++){
			if($value!=null){
				if($value==$result[$i][$combobox[0]])
					echo "<option selected='selected' value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
				else
					echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
			}
			else
				echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
	echo "</select>";
}
function select_combobox_value($table, $combobox, $value = null, $name, $rows = '*', $where = null, $order = null){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' style='min-width:300px;'>";
		for($i=0; $i<count($result); $i++){
			if($value!=null){
				if($value==$result[$i][$combobox[0]])
					echo "<option selected='selected' value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
				else
					echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
			}
			else
				echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
	echo "</select>";
}
function select_combobox_value100($table, $combobox, $value = null, $name, $rows = '*', $where = null, $order = null){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' style='min-width:100px;'>";
		for($i=0; $i<count($result); $i++){
			if($value!=null){
				if($value==$result[$i][$combobox[0]])
					echo "<option selected='selected' value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
				else
					echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
			}
			else
				echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
	echo "</select>";
}
function select_combobox_value_default($table, $combobox, $value = null, $name, $rows = '*', $where = null, $order = null, $defaul = null, $onchange = ""){
	$conn = connect();
	$result = array();
	select_one($result, $table, $rows, $where, $order);
	echo "<select name='".$name."' ".$onchange." style='min-width:100px;'>";
	if($defaul!=null)
		echo $defaul;
	for($i=0; $i<count($result); $i++){
		if($value!=null){
			if($value==$result[$i][$combobox[0]])
				echo "<option selected='selected' value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
			else
				echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
		}
		else
			echo "<option value='".$result[$i][$combobox[0]]."'>".$result[$i][$combobox[1]]."</option>";
	}
	echo "</select>";
}
#endregion
#region [Ham IP Client]
	function insert_soluottruycap($table, $truong, $giatritruong, $giatringaytao = null, $time = 0){
		$conn = connect();
		$timenow = time();
		/*$timenow = time() + (24*60*60);
		echo 'Day: '. date('Y-m-d') ."<br>";
		echo 'Next Day: '. date('Y-m-d', $timenow) ."\n";*/
		if($giatringaytao!=null){//Neu khong cần kiểm tra ngày tạo
			
			$khoachinh = array();
			$giatrikhoachinh = array();
			get_khoachinh($truong, $giatritruong, $khoachinh, $giatrikhoachinh);
			$where = " 1 = 1";
			for($i=0;$i<count($khoachinh);$i++){
				if($giatrikhoachinh[$i]!="")
					$where =$where." and ".$khoachinh[$i]." = '".$giatrikhoachinh[$i]."'";
			}
			$order = " id desc limit 0,1";
			$result = array();
			select_one($result, $table , '*', $where, $order);
			if($time !=0){
				for($i=0;$i<count($result);$i++)
				{
					$thoigian = strtotime($result[$i]['ngaydanhgia']) + $time;
					if($thoigian <= $timenow){
						if(check_giatrinull($truong, $giatritruong)==true)
						{
						//Kiểm tra dữ liệu theo thời gian
							//Lay truong du lieu
							$sql = " insert into ".$table."(";
							for($i=0; $i<count($truong); $i++){
								if($i == 0){
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.$truongis;
								}
								else{
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.", ".$truongis;
								}
							}
							$sql = $sql.")";
							//Lay gia tri du lieu
							$sql = $sql." values(";
							for($i=0; $i<count($giatritruong); $i++){
								if($i == 0){
									$sql = $sql."'".$giatritruong[$i]."'";
								}
								else{
									$sql = $sql.", "."'".$giatritruong[$i]."'";
								}
							}
							$sql = $sql.")";
							mysqli_set_charset($conn,'utf8');
							$kq = mysqli_query($conn, $sql);
							mysqli_close($conn);
							return $kq;
						}
					}
				}
				if(count($result)<=0){
					if(check_giatrinull($truong, $giatritruong)==true)
						{
						//Kiểm tra dữ liệu theo thời gian
							//Lay truong du lieu
							$sql = " insert into ".$table."(";
							for($i=0; $i<count($truong); $i++){
								if($i == 0){
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.$truongis;
								}
								else{
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.", ".$truongis;
								}
							}
							$sql = $sql.")";
							//Lay gia tri du lieu
							$sql = $sql." values(";
							for($i=0; $i<count($giatritruong); $i++){
								if($i == 0){
									$sql = $sql."'".$giatritruong[$i]."'";
								}
								else{
									$sql = $sql.", "."'".$giatritruong[$i]."'";
								}
							}
							$sql = $sql.")";
							mysqli_set_charset($conn,'utf8');
							$kq = mysqli_query($conn, $sql);
							mysqli_close($conn);
							return $kq;
						}
				}
			}
			else{
				if(count($result)<=0){
						if(check_giatrinull($truong, $giatritruong)==true)
						{
						//Kiểm tra dữ liệu theo thời gian
							//Lay truong du lieu
							$sql = " insert into ".$table."(";
							for($i=0; $i<count($truong); $i++){
								if($i == 0){
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.$truongis;
								}
								else{
									$truongis = $truong[$i];//Gia tri ban dau
									if(strstr($truongis,"@") != ""){
										$temp = explode("@",$truongis);
										$truongis = $temp[1];
									}
									if(strstr($truongis,"#") != ""){
										$temp = explode("#",$truongis);
										$truongis = $temp[1];
									}
									$sql = $sql.", ".$truongis;
								}
							}
							$sql = $sql.")";
							//Lay gia tri du lieu
							$sql = $sql." values(";
							for($i=0; $i<count($giatritruong); $i++){
								if($i == 0){
									$sql = $sql."'".$giatritruong[$i]."'";
								}
								else{
									$sql = $sql.", "."'".$giatritruong[$i]."'";
								}
							}
							$sql = $sql.")";
							mysqli_set_charset($conn,'utf8');
							$kq = mysqli_query($conn, $sql);
							mysqli_close($conn);
							return $kq;
						}
				}
			}
			return false;
		}
		else{
			if(check_giatrinull($truong, $giatritruong)==true)
			{
			//Kiểm tra dữ liệu theo thời gian
				//Lay truong du lieu
				$sql = " insert into ".$bang."(";
				for($i=0; $i<count($truong); $i++){
					if($i == 0){
						$truongis = $truong[$i];//Gia tri ban dau
						if(strstr($truongis,"@") != ""){
							$temp = explode("@",$truongis);
							$truongis = $temp[1];
						}
						if(strstr($truongis,"#") != ""){
							$temp = explode("#",$truongis);
							$truongis = $temp[1];
						}
						$sql = $sql.$truongis;
					}
					else{
						$truongis = $truong[$i];//Gia tri ban dau
						if(strstr($truongis,"@") != ""){
							$temp = explode("@",$truongis);
							$truongis = $temp[1];
						}
						if(strstr($truongis,"#") != ""){
							$temp = explode("#",$truongis);
							$truongis = $temp[1];
						}
						$sql = $sql.", ".$truongis;
					}
				}
				$sql = $sql.")";
				//Lay gia tri du lieu
				$sql = $sql." values(";
				for($i=0; $i<count($giatritruong); $i++){
					if($i == 0){
						$sql = $sql."'".$giatritruong[$i]."'";
					}
					else{
						$sql = $sql.", "."'".$giatritruong[$i]."'";
					}
				}
				$sql = $sql.")";
				mysqli_set_charset($conn,'utf8');
				$kq = mysqli_query($conn, $sql);
				mysqli_close($conn);
				return $kq;
			}
			else{
				return false;
			}
		}
	}
#endregion
#region [Ngay_xuli]
	function ngay_thang_nam($ngay = '1993-03-15',$style = '/'){
		$ketqua = "00-00-0000";
		if(strtotime($ngay)!=strtotime($ketqua)){
			$d = getdate(strtotime($ngay));
			if(strlen($d['mday'])==1)
				$day = '0'.$d['mday'];
			else
				$day = $d['mday'];
			if(strlen($d['mon'])==1)
				$month = '0'.$d['mon'];
			else
				$month = $d['mon'];
			$ketqua = $day.$style.$month.$style.$d['year'];
		}
		return $ketqua;
	}
	function thang_ngay_nam($ngay = '1993-03-15',$style = '/'){
		$ketqua = "00-00-0000";
		if(strtotime($ngay)!=strtotime($ketqua)){
			$d = getdate(strtotime($ngay));
			if(strlen($d['mday'])==1)
				$day = '0'.$d['mday'];
			else
				$day = $d['mday'];
			if(strlen($d['mon'])==1)
				$month = '0'.$d['mon'];
			else
				$month = $d['mon'];
			$ketqua = $month.$style.$day.$style.$d['year'];
		}
		return $ketqua;
	}
	function nam_thang_ngay($ngay = '1993-03-15',$style = '/'){
		$ketqua = "00-00-0000";
		if(strtotime($ngay)!=strtotime($ketqua)){
			$d = getdate(strtotime($ngay));
			if(strlen($d['mday'])==1)
				$day = '0'.$d['mday'];
			else
				$day = $d['mday'];
			if(strlen($d['mon'])==1)
				$month = '0'.$d['mon'];
			else
				$month = $d['mon'];
			$ketqua = $d['year'].$style.$month.$style.$day;
		}
		return $ketqua;
	}
	function ngay_hienthi($thoigianconlai = '1000',$style = 'ngày,@ giờ@ phút@ giây'){
		$hienthi = "";
		$ngay = floor($thoigianconlai/(24*60*60));
		$thoigianconlai = $thoigianconlai - $ngay*(24*60*60);
		$gio = floor($thoigianconlai/(60*60));
		$thoigianconlai = $thoigianconlai - $gio*(60*60);
		$phut = floor($thoigianconlai/(60));
		$thoigianconlai = $thoigianconlai - $phut*60;
		$giay = floor($thoigianconlai);
		
		$temp = explode("@", $style);
		$hienthi = $ngay." ".$temp[0]." ";
		$hienthi = $hienthi.$gio."".$temp[1]." ";
		$hienthi = $hienthi.$phut."".$temp[2]." ";
		$hienthi = $hienthi.$giay.$temp[3];
		return $hienthi;
	}
#endregion
	function diachi_url_hientai() {
    $pageURL = 'http';
 
    if (!empty($_SERVER['HTTPS'])) {
      if ($_SERVER['HTTPS'] == 'on') {
        $pageURL .= "s";
      }
    }
 
    $pageURL .= "://";
 
    if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
      $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
 
    return $pageURL;
  }
	function add_ma_soluong($giatri = 1, $somax = 1000000) {
		$gitri0 = "";
		while($somax>=0)
		{
			if($giatri>$somax)
				return $gitri0.$giatri;
			$somax = round($somax/10);
			if($somax>0)
				$gitri0 = $gitri0."0";
		}
		return $gitri0;
	}
	
function kiemtra_username($text=""){
	$text = strtolower($text);
	//Kiem tra tong the
	$temp_table = array("account","accountnienkhoa","chitiethoatdong","donvi","giochuan","kiemtra","loaihinh","nienkhoa","noidung","noidunggiangvien","phuluc","temp","trangthaixacnhan");
	for($i=0;$i<count($temp_table);$i++){
		if (strlen(strstr($text, $temp_table[$i])) > 0)
		{
			return 0;
		}
	}
	$temp_array = array("or","--","';","union","drop","delete","select","update","create","insert");
	for($i=0;$i<count($temp_array);$i++){
		if (strlen(strstr($text, $temp_array[$i])) > 0)
		{
			return 0;
		}
	}
	//Kiem tra du lieu dau vao hople
	$pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	$partten1 = "/^[A-Za-z0-9_\.]{2,32}$/";
	if( !empty($text) && preg_match($pattern, $text) )
		return 1;
	else
		if(preg_match($partten1, $text))
			return 1;
		else
			return 0;
}

function kiemtra_dulieutext($text=""){
	$text = strtolower($text);
	//Kiem tra tong the
	$temp_table = array("account","accountnienkhoa","chitiethoatdong","donvi","giochuan","kiemtra","loaihinh","nienkhoa","noidung","noidunggiangvien","phuluc","temp","trangthaixacnhan");
	for($i=0;$i<count($temp_table);$i++){
		if (strlen(strstr($text, $temp_table[$i])) > 0)
		{
			return 0;
		}
	}
	$temp_array = array("--","';","union","drop","delete","select","update","create","insert");
	for($i=0;$i<count($temp_array);$i++){
		if (strlen(strstr($text, $temp_array[$i])) > 0)
		{
			return 0;
		}
	}
	return 1;
}

function kiemtra_dulieuso($text=""){
	$text = strtolower($text);
	if(is_numeric($text))
		return 1;
	else
		return 0;
}
?>
<?php
	//Cac dinh nghia chung Url
	$config['Host'] = $_SERVER['HTTP_HOST'];
	$config['Port'] = $_SERVER['REMOTE_PORT'];
	$config['Root'] = $_SERVER['DOCUMENT_ROOT'];
	$config['SPort'] = $_SERVER['SERVER_PORT'];
	//if($config['SPort']==80)
		$config['Hostting'] = "http://".$config['Host']."/";
	//else
		//$config['Hostting']= "http://".$config['Host'].":".$config['SPort']."/";
	/*Cau hinh page admin*/
	$basUrl_admin = HTTPS_SERVER_ADMIN;
	$page_admin = array(
		'index'=>$basUrl_admin.'index'.'.php',
		'system_menu'=>$basUrl_admin.'system_menu'.'.php',
		'trangchinh'=>$basUrl_admin.'trangchinh'.'.php',
		'logout'=>$basUrl_admin.'logout'.'.php',
		'doimatkhau'=>$basUrl_admin.'doimatkhau'.'.php',
		'trogiup'=>$basUrl_admin.'trogiup'.'.php',
	);
	
	$basUrl_admin_bo = HTTPS_SERVER_ADMIN."default/module/bo/";
	$page_admin_bo = array(
		'add_bo'=>$basUrl_admin_bo.'add_bo'.'.php',
		'ds_bo'=>$basUrl_admin_bo.'ds_bo'.'.php',
		'update_bo'=>$basUrl_admin_bo.'update_bo'.'.php',
		'coppy_bo'=>$basUrl_admin_bo.'coppy_bo'.'.php',
		'delete_bo'=>$basUrl_admin_bo.'delete_bo'.'.php',
	);
	
	$basUrl_admin_chi = HTTPS_SERVER_ADMIN."default/module/chi/";
	$page_admin_chi = array(
		'add_chi'=>$basUrl_admin_chi.'add_chi'.'.php',
		'ds_chi'=>$basUrl_admin_chi.'ds_chi'.'.php',
		'update_chi'=>$basUrl_admin_chi.'update_chi'.'.php',
		'coppy_chi'=>$basUrl_admin_chi.'coppy_chi'.'.php',
		'delete_chi'=>$basUrl_admin_chi.'delete_chi'.'.php',
	);
	
	$basUrl_admin_ho = HTTPS_SERVER_ADMIN."default/module/ho/";
	$page_admin_ho = array(
		'add_ho'=>$basUrl_admin_ho.'add_ho'.'.php',
		'ds_ho'=>$basUrl_admin_ho.'ds_ho'.'.php',
		'update_ho'=>$basUrl_admin_ho.'update_ho'.'.php',
		'coppy_ho'=>$basUrl_admin_ho.'coppy_ho'.'.php',
		'delete_ho'=>$basUrl_admin_ho.'delete_ho'.'.php',
	);
	$basUrl_admin_loai = HTTPS_SERVER_ADMIN."default/module/loai/";
	$page_admin_loai = array(
		'add_loai'=>$basUrl_admin_loai.'add_loai'.'.php',
		'ds_loai'=>$basUrl_admin_loai.'ds_loai'.'.php',
		'update_loai'=>$basUrl_admin_loai.'update_loai'.'.php',
		'coppy_loai'=>$basUrl_admin_loai.'coppy_loai'.'.php',
		'delete_loai'=>$basUrl_admin_loai.'delete_loai'.'.php',
	);
	$basUrl_admin_donthuoc = HTTPS_SERVER_ADMIN."default/module/donthuoc/";
	$page_admin_donthuoc = array(
		'add_donthuoc'=>$basUrl_admin_donthuoc.'add_donthuoc'.'.php',
		'ds_donthuoc'=>$basUrl_admin_donthuoc.'ds_donthuoc'.'.php',
		'update_donthuoc'=>$basUrl_admin_donthuoc.'update_donthuoc'.'.php',
		'coppy_donthuoc'=>$basUrl_admin_donthuoc.'coppy_donthuoc'.'.php',
		'delete_donthuoc'=>$basUrl_admin_donthuoc.'delete_donthuoc'.'.php',
	);
	$basUrl_admin_lop = HTTPS_SERVER_ADMIN."default/module/lop/";
	$page_admin_lop = array(
		'add_lop'=>$basUrl_admin_lop.'add_lop'.'.php',
		'ds_lop'=>$basUrl_admin_lop.'ds_lop'.'.php',
		'update_lop'=>$basUrl_admin_lop.'update_lop'.'.php',
		'coppy_lop'=>$basUrl_admin_lop.'coppy_lop'.'.php',
		'delete_lop'=>$basUrl_admin_lop.'delete_lop'.'.php',
	);
	$basUrl_admin_nganh = HTTPS_SERVER_ADMIN."default/module/nganh/";
	$page_admin_nganh = array(
		'add_nganh'=>$basUrl_admin_nganh.'add_nganh'.'.php',
		'ds_nganh'=>$basUrl_admin_nganh.'ds_nganh'.'.php',
		'update_nganh'=>$basUrl_admin_nganh.'update_nganh'.'.php',
		'coppy_nganh'=>$basUrl_admin_nganh.'coppy_nganh'.'.php',
		'delete_nganh'=>$basUrl_admin_nganh.'delete_nganh'.'.php',
	);
	$basUrl_admin_thucvat = HTTPS_SERVER_ADMIN."default/module/thucvat/";
	$page_admin_thucvat = array(
		'add_thucvat'=>$basUrl_admin_thucvat.'add_thucvat'.'.php',
		'ds_thucvat'=>$basUrl_admin_thucvat.'ds_thucvat'.'.php',
		'update_thucvat'=>$basUrl_admin_thucvat.'update_thucvat'.'.php',
		'coppy_thucvat'=>$basUrl_admin_thucvat.'coppy_thucvat'.'.php',
		'delete_thucvat'=>$basUrl_admin_thucvat.'delete_thucvat'.'.php',
	);
	$basUrl_admin_tailieuthamkhao = HTTPS_SERVER_ADMIN."default/module/tailieuthamkhao/";
	$page_admin_tailieuthamkhao = array(
		'add_tailieuthamkhao'=>$basUrl_admin_tailieuthamkhao.'add_tailieuthamkhao'.'.php',
		'ds_tailieuthamkhao'=>$basUrl_admin_tailieuthamkhao.'ds_tailieuthamkhao'.'.php',
		'update_tailieuthamkhao'=>$basUrl_admin_tailieuthamkhao.'update_tailieuthamkhao'.'.php',
		'coppy_tailieuthamkhao'=>$basUrl_admin_tailieuthamkhao.'coppy_tailieuthamkhao'.'.php',
		'delete_tailieuthamkhao'=>$basUrl_admin_tailieuthamkhao.'delete_tailieuthamkhao'.'.php',
	);
	$basUrl_admin_tintuc = HTTPS_SERVER_ADMIN."default/module/tintuc/";
	$page_admin_tintuc = array(
		'add_tintuc'=>$basUrl_admin_tintuc.'add_tintuc'.'.php',
		'ds_tintuc'=>$basUrl_admin_tintuc.'ds_tintuc'.'.php',
		'update_tintuc'=>$basUrl_admin_tintuc.'update_tintuc'.'.php',
		'coppy_tintuc'=>$basUrl_admin_tintuc.'coppy_tintuc'.'.php',
		'delete_tintuc'=>$basUrl_admin_tintuc.'delete_tintuc'.'.php',
	);
	
	$page_admin_tieuchicongty_base = HTTPS_SERVER_ADMIN."default/module/tieuchicongty/";
	$basUrl_admin_tieuchicongty = HTTPS_SERVER_ADMIN."default/module/tieuchicongty/";
	$page_admin_tieuchicongty = array(
		'add_tieuchicongty'=>$basUrl_admin_tieuchicongty.'add_tieuchicongty'.'.php',
		'ds_tieuchicongty'=>$basUrl_admin_tieuchicongty.'ds_tieuchicongty'.'.php',
		'update_tieuchicongty'=>$basUrl_admin_tieuchicongty.'update_tieuchicongty'.'.php',
		'delete_tieuchicongty'=>$basUrl_admin_tieuchicongty.'delete_tieuchicongty'.'.php',
		'coppy_tieuchicongty'=>$basUrl_admin_tieuchicongty.'coppy_tieuchicongty'.'.php',
	);
	$basUrl_admin_thongtinchung = HTTPS_SERVER_ADMIN."default/module/thongtinchung/";
	$page_admin_thongtinchung = array(
		'thongtincongty'=>$basUrl_admin_thongtinchung.'thongtincongty'.'.php',
		'add_thongtinchung'=>$basUrl_admin_thongtinchung.'add_thongtinchung'.'.php',
		'ds_thongtinchung'=>$basUrl_admin_thongtinchung.'ds_thongtinchung'.'.php',
		'update_thongtinchung'=>$basUrl_admin_thongtinchung.'update_thongtinchung'.'.php',
		'delete_thongtinchung'=>$basUrl_admin_thongtinchung.'delete_thongtinchung'.'.php',
		'coppy_thongtinchung'=>$basUrl_admin_thongtinchung.'coppy_thongtinchung'.'.php',
	);
	$basUrl_admin_dichvu = HTTPS_SERVER_ADMIN."default/module/dichvu/";
	$page_admin_dichvu = array(
		'thongtincongty'=>$basUrl_admin_dichvu.'thongtincongty'.'.php',
		'add_dichvu'=>$basUrl_admin_dichvu.'add_dichvu'.'.php',
		'ds_dichvu'=>$basUrl_admin_dichvu.'ds_dichvu'.'.php',
		'update_dichvu'=>$basUrl_admin_dichvu.'update_dichvu'.'.php',
		'delete_dichvu'=>$basUrl_admin_dichvu.'delete_dichvu'.'.php',
		'coppy_dichvu'=>$basUrl_admin_dichvu.'coppy_dichvu'.'.php',
	);
	$basUrl_admin_congtrinhthicong = HTTPS_SERVER_ADMIN."default/module/congtrinhthicong/";
	$page_admin_congtrinhthicong = array(
		'thongtincongty'=>$basUrl_admin_congtrinhthicong.'thongtincongty'.'.php',
		'add_congtrinhthicong'=>$basUrl_admin_congtrinhthicong.'add_congtrinhthicong'.'.php',
		'ds_congtrinhthicong'=>$basUrl_admin_congtrinhthicong.'ds_congtrinhthicong'.'.php',
		'update_congtrinhthicong'=>$basUrl_admin_congtrinhthicong.'update_congtrinhthicong'.'.php',
		'delete_congtrinhthicong'=>$basUrl_admin_congtrinhthicong.'delete_congtrinhthicong'.'.php',
		'coppy_congtrinhthicong'=>$basUrl_admin_congtrinhthicong.'coppy_congtrinhthicong'.'.php',
	);
	$basUrl_admin_slideshow = HTTPS_SERVER_ADMIN."default/module/slideshow/";
	$page_admin_slideshow = array(
		'thongtincongty'=>$basUrl_admin_slideshow.'thongtincongty'.'.php',
		'add_slideshow'=>$basUrl_admin_slideshow.'add_slideshow'.'.php',
		'ds_slideshow'=>$basUrl_admin_slideshow.'ds_slideshow'.'.php',
		'update_slideshow'=>$basUrl_admin_slideshow.'update_slideshow'.'.php',
		'delete_slideshow'=>$basUrl_admin_slideshow.'delete_slideshow'.'.php',
		'coppy_slideshow'=>$basUrl_admin_slideshow.'coppy_slideshow'.'.php',
	);
	$basUrl_admin_hoatdong = HTTPS_SERVER_ADMIN."default/module/hoatdong/";
	$page_admin_hoatdong = array(
		'thongtincongty'=>$basUrl_admin_hoatdong.'thongtincongty'.'.php',
		'add_hoatdong'=>$basUrl_admin_hoatdong.'add_hoatdong'.'.php',
		'ds_hoatdong'=>$basUrl_admin_hoatdong.'ds_hoatdong'.'.php',
		'update_hoatdong'=>$basUrl_admin_hoatdong.'update_hoatdong'.'.php',
		'delete_hoatdong'=>$basUrl_admin_hoatdong.'delete_hoatdong'.'.php',
		'coppy_hoatdong'=>$basUrl_admin_hoatdong.'coppy_hoatdong'.'.php',
	);
	$basUrl_admin_tintuc = HTTPS_SERVER_ADMIN."default/module/tintuc/";
	$page_admin_tintuc = array(
		'thongtincongty'=>$basUrl_admin_tintuc.'thongtincongty'.'.php',
		'add_tintuc'=>$basUrl_admin_tintuc.'add_tintuc'.'.php',
		'ds_tintuc'=>$basUrl_admin_tintuc.'ds_tintuc'.'.php',
		'update_tintuc'=>$basUrl_admin_tintuc.'update_tintuc'.'.php',
		'delete_tintuc'=>$basUrl_admin_tintuc.'delete_tintuc'.'.php',
		'coppy_tintuc'=>$basUrl_admin_tintuc.'coppy_tintuc'.'.php',
	);
	$basUrl_admin_lichlamviec = HTTPS_SERVER_ADMIN."default/module/lichlamviec/";
	$page_admin_lichlamviec = array(
		'thongtincongty'=>$basUrl_admin_lichlamviec.'thongtincongty'.'.php',
		'add_lichlamviec'=>$basUrl_admin_lichlamviec.'add_lichlamviec'.'.php',
		'ds_lichlamviec'=>$basUrl_admin_lichlamviec.'ds_lichlamviec'.'.php',
		'update_lichlamviec'=>$basUrl_admin_lichlamviec.'update_lichlamviec'.'.php',
		'delete_lichlamviec'=>$basUrl_admin_lichlamviec.'delete_lichlamviec'.'.php',
		'coppy_lichlamviec'=>$basUrl_admin_lichlamviec.'coppy_lichlamviec'.'.php',
	);
	$basUrl_admin_yhocthuongthuc = HTTPS_SERVER_ADMIN."default/module/yhocthuongthuc/";
	$page_admin_yhocthuongthuc = array(
		'thongtincongty'=>$basUrl_admin_yhocthuongthuc.'thongtincongty'.'.php',
		'add_yhocthuongthuc'=>$basUrl_admin_yhocthuongthuc.'add_yhocthuongthuc'.'.php',
		'ds_yhocthuongthuc'=>$basUrl_admin_yhocthuongthuc.'ds_yhocthuongthuc'.'.php',
		'update_yhocthuongthuc'=>$basUrl_admin_yhocthuongthuc.'update_yhocthuongthuc'.'.php',
		'delete_yhocthuongthuc'=>$basUrl_admin_yhocthuongthuc.'delete_yhocthuongthuc'.'.php',
		'coppy_yhocthuongthuc'=>$basUrl_admin_yhocthuongthuc.'coppy_yhocthuongthuc'.'.php',
	);
	$basUrl_admin_thongtinboich = HTTPS_SERVER_ADMIN."default/module/thongtinboich/";
	$page_admin_thongtinboich = array(
		'thongtincongty'=>$basUrl_admin_thongtinboich.'thongtincongty'.'.php',
		'add_thongtinboich'=>$basUrl_admin_thongtinboich.'add_thongtinboich'.'.php',
		'ds_thongtinboich'=>$basUrl_admin_thongtinboich.'ds_thongtinboich'.'.php',
		'update_thongtinboich'=>$basUrl_admin_thongtinboich.'update_thongtinboich'.'.php',
		'delete_thongtinboich'=>$basUrl_admin_thongtinboich.'delete_thongtinboich'.'.php',
		'coppy_thongtinboich'=>$basUrl_admin_thongtinboich.'coppy_thongtinboich'.'.php',
	);
	$basUrl_admin_chuyenkhoa = HTTPS_SERVER_ADMIN."default/module/chuyenkhoa/";
	$page_admin_chuyenkhoa = array(
		'thongtincongty'=>$basUrl_admin_chuyenkhoa.'thongtincongty'.'.php',
		'add_chuyenkhoa'=>$basUrl_admin_chuyenkhoa.'add_chuyenkhoa'.'.php',
		'ds_chuyenkhoa'=>$basUrl_admin_chuyenkhoa.'ds_chuyenkhoa'.'.php',
		'update_chuyenkhoa'=>$basUrl_admin_chuyenkhoa.'update_chuyenkhoa'.'.php',
		'delete_chuyenkhoa'=>$basUrl_admin_chuyenkhoa.'delete_chuyenkhoa'.'.php',
		'coppy_chuyenkhoa'=>$basUrl_admin_chuyenkhoa.'coppy_chuyenkhoa'.'.php',
	);
	$basUrl_admin_baiviettuyendung = HTTPS_SERVER_ADMIN."default/module/baiviettuyendung/";
	$page_admin_baiviettuyendung = array(
		'add_baiviettuyendung'=>$basUrl_admin_baiviettuyendung.'add_baiviettuyendung'.'.php',
		'ds_baiviettuyendung'=>$basUrl_admin_baiviettuyendung.'ds_baiviettuyendung'.'.php',
		'update_baiviettuyendung'=>$basUrl_admin_baiviettuyendung.'update_baiviettuyendung'.'.php',
		'coppy_baiviettuyendung'=>$basUrl_admin_baiviettuyendung.'coppy_baiviettuyendung'.'.php',
		'delete_baiviettuyendung'=>$basUrl_admin_baiviettuyendung.'delete_baiviettuyendung'.'.php',
	);
	$basUrl_admin_luongrau = HTTPS_SERVER_ADMIN."default/module/luongrau/";
	$page_admin_luongrau = array(
		'add_luongrau'=>$basUrl_admin_luongrau.'add_luongrau'.'.php',
		'ds_luongrau'=>$basUrl_admin_luongrau.'ds_luongrau'.'.php',
		'update_luongrau'=>$basUrl_admin_luongrau.'update_luongrau'.'.php',
		'coppy_luongrau'=>$basUrl_admin_luongrau.'coppy_luongrau'.'.php',
		'delete_luongrau'=>$basUrl_admin_luongrau.'delete_luongrau'.'.php',
	);
	$basUrl_admin_hoatdongxahoi = HTTPS_SERVER_ADMIN."default/module/hoatdongxahoi/";
	$page_admin_hoatdongxahoi = array(
		'add_hoatdongxahoi'=>$basUrl_admin_hoatdongxahoi.'add_hoatdongxahoi'.'.php',
		'ds_hoatdongxahoi'=>$basUrl_admin_hoatdongxahoi.'ds_hoatdongxahoi'.'.php',
		'update_hoatdongxahoi'=>$basUrl_admin_hoatdongxahoi.'update_hoatdongxahoi'.'.php',
		'coppy_hoatdongxahoi'=>$basUrl_admin_hoatdongxahoi.'coppy_hoatdongxahoi'.'.php',
		'delete_hoatdongxahoi'=>$basUrl_admin_hoatdongxahoi.'delete_hoatdongxahoi'.'.php',
	);
	$basUrl_admin_bangiamdocrongviet = HTTPS_SERVER_ADMIN."default/module/bangiamdocrongviet/";
	$page_admin_bangiamdocrongviet = array(
		'add_bangiamdocrongviet'=>$basUrl_admin_bangiamdocrongviet.'add_bangiamdocrongviet'.'.php',
		'ds_bangiamdocrongviet'=>$basUrl_admin_bangiamdocrongviet.'ds_bangiamdocrongviet'.'.php',
		'update_bangiamdocrongviet'=>$basUrl_admin_bangiamdocrongviet.'update_bangiamdocrongviet'.'.php',
	);
	$basUrl_admin_catalog = HTTPS_SERVER_ADMIN."default/module/catalog/";
	$page_admin_catalog = array(
		'add_catalog'=>$basUrl_admin_catalog.'add_catalog'.'.php',
		'ds_catalog'=>$basUrl_admin_catalog.'ds_catalog'.'.php',
		'update_catalog'=>$basUrl_admin_catalog.'update_catalog'.'.php',
	);
	$basUrl_admin_chitietgiohang = HTTPS_SERVER_ADMIN."default/module/chitietgiohang/";
	$page_admin_chitietgiohang = array(
		'add_chitietgiohang'=>$basUrl_admin_chitietgiohang.'add_chitietgiohang'.'.php',
		'ds_chitietgiohang'=>$basUrl_admin_chitietgiohang.'ds_chitietgiohang'.'.php',
		'update_chitietgiohang'=>$basUrl_admin_chitietgiohang.'update_chitietgiohang'.'.php',
	);
	$basUrl_admin_donvisanpham = HTTPS_SERVER_ADMIN."default/module/donvisanpham/";
	$page_admin_donvisanpham = array(
		'add_donvisanpham'=>$basUrl_admin_donvisanpham.'add_donvisanpham'.'.php',
		'ds_donvisanpham'=>$basUrl_admin_donvisanpham.'ds_donvisanpham'.'.php',
		'update_donvisanpham'=>$basUrl_admin_donvisanpham.'update_donvisanpham'.'.php',
		'delete_donvisanpham'=>$basUrl_admin_donvisanpham.'delete_donvisanpham'.'.php',
		'coppy_donvisanpham'=>$basUrl_admin_donvisanpham.'coppy_donvisanpham'.'.php',
	);
	$basUrl_admin_donvitiente = HTTPS_SERVER_ADMIN."default/module/donvitiente/";
	$page_admin_donvitiente = array(
		'add_donvitiente'=>$basUrl_admin_donvitiente.'add_donvitiente'.'.php',
		'ds_donvitiente'=>$basUrl_admin_donvitiente.'ds_donvitiente'.'.php',
		'update_donvitiente'=>$basUrl_admin_donvitiente.'update_donvitiente'.'.php',
		'delete_donvitiente'=>$basUrl_admin_donvitiente.'delete_donvitiente'.'.php',
		'coppy_donvitiente'=>$basUrl_admin_donvitiente.'coppy_donvitiente'.'.php',
	);
	$basUrl_admin_khoanggia = HTTPS_SERVER_ADMIN."default/module/khoanggia/";
	$page_admin_khoanggia = array(
		'add_khoanggia'=>$basUrl_admin_khoanggia.'add_khoanggia'.'.php',
		'ds_khoanggia'=>$basUrl_admin_khoanggia.'ds_khoanggia'.'.php',
		'update_khoanggia'=>$basUrl_admin_khoanggia.'update_khoanggia'.'.php',
		'delete_khoanggia'=>$basUrl_admin_khoanggia.'delete_khoanggia'.'.php',
		'coppy_khoanggia'=>$basUrl_admin_khoanggia.'coppy_khoanggia'.'.php',
	);
	$basUrl_admin_nhomtintuc = HTTPS_SERVER_ADMIN."default/module/nhomtintuc/";
	$page_admin_nhomtintuc = array(
		'add_nhomtintuc'=>$basUrl_admin_nhomtintuc.'add_nhomtintuc'.'.php',
		'ds_nhomtintuc'=>$basUrl_admin_nhomtintuc.'ds_nhomtintuc'.'.php',
		'update_nhomtintuc'=>$basUrl_admin_nhomtintuc.'update_nhomtintuc'.'.php',
		'delete_nhomtintuc'=>$basUrl_admin_nhomtintuc.'delete_nhomtintuc'.'.php',
		'coppy_nhomtintuc'=>$basUrl_admin_nhomtintuc.'coppy_nhomtintuc'.'.php',
	);
	$basUrl_admin_nhomvideo = HTTPS_SERVER_ADMIN."default/module/nhomvideo/";
	$page_admin_nhomvideo = array(
		'add_nhomvideo'=>$basUrl_admin_nhomvideo.'add_nhomvideo'.'.php',
		'ds_nhomvideo'=>$basUrl_admin_nhomvideo.'ds_nhomvideo'.'.php',
		'update_nhomvideo'=>$basUrl_admin_nhomvideo.'update_nhomvideo'.'.php',
		'delete_nhomvideo'=>$basUrl_admin_nhomvideo.'delete_nhomvideo'.'.php',
		'coppy_nhomvideo'=>$basUrl_admin_nhomvideo.'coppy_nhomvideo'.'.php',
	);
	$basUrl_admin_slideshow_index_quydinh = HTTPS_SERVER_ADMIN."default/module/slideshow_index_quydinh/";
	$page_admin_slideshow_index_quydinh = array(
		'add_slideshow_index_quydinh'=>$basUrl_admin_slideshow_index_quydinh.'add_slideshow_index_quydinh'.'.php',
		'ds_slideshow_index_quydinh'=>$basUrl_admin_slideshow_index_quydinh.'ds_slideshow_index_quydinh'.'.php',
		'update_slideshow_index_quydinh'=>$basUrl_admin_slideshow_index_quydinh.'update_slideshow_index_quydinh'.'.php',
		'delete_slideshow_index_quydinh'=>$basUrl_admin_slideshow_index_quydinh.'delete_slideshow_index_quydinh'.'.php',
		'coppy_slideshow_index_quydinh'=>$basUrl_admin_slideshow_index_quydinh.'coppy_slideshow_index_quydinh'.'.php',
	);
	$basUrl_admin_raovat_quydinh = HTTPS_SERVER_ADMIN."default/module/raovat_quydinh/";
	$page_admin_raovat_quydinh = array(
		'add_raovat_quydinh'=>$basUrl_admin_raovat_quydinh.'add_raovat_quydinh'.'.php',
		'ds_raovat_quydinh'=>$basUrl_admin_raovat_quydinh.'ds_raovat_quydinh'.'.php',
		'update_raovat_quydinh'=>$basUrl_admin_raovat_quydinh.'update_raovat_quydinh'.'.php',
		'delete_raovat_quydinh'=>$basUrl_admin_raovat_quydinh.'delete_raovat_quydinh'.'.php',
		'coppy_raovat_quydinh'=>$basUrl_admin_raovat_quydinh.'coppy_raovat_quydinh'.'.php',
	);
	$basUrl_admin_raovat_thuong_quydinh = HTTPS_SERVER_ADMIN."default/module/raovat_thuong_quydinh/";
	$page_admin_raovat_thuong_quydinh = array(
		'add_raovat_thuong_quydinh'=>$basUrl_admin_raovat_thuong_quydinh.'add_raovat_thuong_quydinh'.'.php',
		'ds_raovat_thuong_quydinh'=>$basUrl_admin_raovat_thuong_quydinh.'ds_raovat_thuong_quydinh'.'.php',
		'update_raovat_thuong_quydinh'=>$basUrl_admin_raovat_thuong_quydinh.'update_raovat_thuong_quydinh'.'.php',
		'delete_raovat_thuong_quydinh'=>$basUrl_admin_raovat_thuong_quydinh.'delete_raovat_thuong_quydinh'.'.php',
		'coppy_raovat_thuong_quydinh'=>$basUrl_admin_raovat_thuong_quydinh.'coppy_raovat_thuong_quydinh'.'.php',
	);
	$basUrl_admin_quangcao_menu_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcao_menu_quydinh/";
	$page_admin_quangcao_menu_quydinh = array(
		'add_quangcao_menu_quydinh'=>$basUrl_admin_quangcao_menu_quydinh.'add_quangcao_menu_quydinh'.'.php',
		'ds_quangcao_menu_quydinh'=>$basUrl_admin_quangcao_menu_quydinh.'ds_quangcao_menu_quydinh'.'.php',
		'update_quangcao_menu_quydinh'=>$basUrl_admin_quangcao_menu_quydinh.'update_quangcao_menu_quydinh'.'.php',
		'delete_quangcao_menu_quydinh'=>$basUrl_admin_quangcao_menu_quydinh.'delete_quangcao_menu_quydinh'.'.php',
		'coppy_quangcao_menu_quydinh'=>$basUrl_admin_quangcao_menu_quydinh.'coppy_quangcao_menu_quydinh'.'.php',
	);
	$basUrl_admin_quangcao_khuyenmai_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcao_khuyenmai_quydinh/";
	$page_admin_quangcao_khuyenmai_quydinh = array(
		'add_quangcao_khuyenmai_quydinh'=>$basUrl_admin_quangcao_khuyenmai_quydinh.'add_quangcao_khuyenmai_quydinh'.'.php',
		'ds_quangcao_khuyenmai_quydinh'=>$basUrl_admin_quangcao_khuyenmai_quydinh.'ds_quangcao_khuyenmai_quydinh'.'.php',
		'update_quangcao_khuyenmai_quydinh'=>$basUrl_admin_quangcao_khuyenmai_quydinh.'update_quangcao_khuyenmai_quydinh'.'.php',
		'delete_quangcao_khuyenmai_quydinh'=>$basUrl_admin_quangcao_khuyenmai_quydinh.'delete_quangcao_khuyenmai_quydinh'.'.php',
		'coppy_quangcao_khuyenmai_quydinh'=>$basUrl_admin_quangcao_khuyenmai_quydinh.'coppy_quangcao_khuyenmai_quydinh'.'.php',
	);
	$basUrl_admin_slideshow_khuyenmai_quydinh = HTTPS_SERVER_ADMIN."default/module/slideshow_khuyenmai_quydinh/";
	$page_admin_slideshow_khuyenmai_quydinh = array(
		'add_slideshow_khuyenmai_quydinh'=>$basUrl_admin_slideshow_khuyenmai_quydinh.'add_slideshow_khuyenmai_quydinh'.'.php',
		'ds_slideshow_khuyenmai_quydinh'=>$basUrl_admin_slideshow_khuyenmai_quydinh.'ds_slideshow_khuyenmai_quydinh'.'.php',
		'update_slideshow_khuyenmai_quydinh'=>$basUrl_admin_slideshow_khuyenmai_quydinh.'update_slideshow_khuyenmai_quydinh'.'.php',
		'delete_slideshow_khuyenmai_quydinh'=>$basUrl_admin_slideshow_khuyenmai_quydinh.'delete_slideshow_khuyenmai_quydinh'.'.php',
		'coppy_slideshow_khuyenmai_quydinh'=>$basUrl_admin_slideshow_khuyenmai_quydinh.'coppy_slideshow_khuyenmai_quydinh'.'.php',
	);
	$basUrl_admin_quangcao_chinh_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcao_chinh_quydinh/";
	$page_admin_quangcao_chinh_quydinh = array(
		'add_quangcao_chinh_quydinh'=>$basUrl_admin_quangcao_chinh_quydinh.'add_quangcao_chinh_quydinh'.'.php',
		'ds_quangcao_chinh_quydinh'=>$basUrl_admin_quangcao_chinh_quydinh.'ds_quangcao_chinh_quydinh'.'.php',
		'update_quangcao_chinh_quydinh'=>$basUrl_admin_quangcao_chinh_quydinh.'update_quangcao_chinh_quydinh'.'.php',
		'delete_quangcao_chinh_quydinh'=>$basUrl_admin_quangcao_chinh_quydinh.'delete_quangcao_chinh_quydinh'.'.php',
		'coppy_quangcao_chinh_quydinh'=>$basUrl_admin_quangcao_chinh_quydinh.'coppy_quangcao_chinh_quydinh'.'.php',
	);
	$basUrl_admin_quangcao_loaisanpham_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcao_loaisanpham_quydinh/";
	$page_admin_quangcao_loaisanpham_quydinh = array(
		'add_quangcao_loaisanpham_quydinh'=>$basUrl_admin_quangcao_loaisanpham_quydinh.'add_quangcao_loaisanpham_quydinh'.'.php',
		'ds_quangcao_loaisanpham_quydinh'=>$basUrl_admin_quangcao_loaisanpham_quydinh.'ds_quangcao_loaisanpham_quydinh'.'.php',
		'update_quangcao_loaisanpham_quydinh'=>$basUrl_admin_quangcao_loaisanpham_quydinh.'update_quangcao_loaisanpham_quydinh'.'.php',
		'delete_quangcao_loaisanpham_quydinh'=>$basUrl_admin_quangcao_loaisanpham_quydinh.'delete_quangcao_loaisanpham_quydinh'.'.php',
		'coppy_quangcao_loaisanpham_quydinh'=>$basUrl_admin_quangcao_loaisanpham_quydinh.'coppy_quangcao_loaisanpham_quydinh'.'.php',
	);
	$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcao_slideshow_loaisanpham_quydinh/";
	$page_admin_quangcao_slideshow_loaisanpham_quydinh = array(
		'add_quangcao_slideshow_loaisanpham_quydinh'=>$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh.'add_quangcao_slideshow_loaisanpham_quydinh'.'.php',
		'ds_quangcao_slideshow_loaisanpham_quydinh'=>$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh.'ds_quangcao_slideshow_loaisanpham_quydinh'.'.php',
		'update_quangcao_slideshow_loaisanpham_quydinh'=>$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh.'update_quangcao_slideshow_loaisanpham_quydinh'.'.php',
		'delete_quangcao_slideshow_loaisanpham_quydinh'=>$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh.'delete_quangcao_slideshow_loaisanpham_quydinh'.'.php',
		'coppy_quangcao_slideshow_loaisanpham_quydinh'=>$basUrl_admin_quangcao_slideshow_loaisanpham_quydinh.'coppy_quangcao_slideshow_loaisanpham_quydinh'.'.php',
	);
	$basUrl_admin_antoan = HTTPS_SERVER_ADMIN."default/module/antoan/";
	$page_admin_antoan = array(
		'add_antoan'=>$basUrl_admin_antoan.'add_antoan'.'.php',
		'ds_antoan'=>$basUrl_admin_antoan.'ds_antoan'.'.php',
		'update_antoan'=>$basUrl_admin_antoan.'update_antoan'.'.php',
		'delete_antoan'=>$basUrl_admin_antoan.'delete_antoan'.'.php',
		'coppy_antoan'=>$basUrl_admin_antoan.'coppy_antoan'.'.php',
	);
	$basUrl_admin_tiennghi = HTTPS_SERVER_ADMIN."default/module/tiennghi/";
	$page_admin_tiennghi = array(
		'add_tiennghi'=>$basUrl_admin_tiennghi.'add_tiennghi'.'.php',
		'ds_tiennghi'=>$basUrl_admin_tiennghi.'ds_tiennghi'.'.php',
		'update_tiennghi'=>$basUrl_admin_tiennghi.'update_tiennghi'.'.php',
		'delete_tiennghi'=>$basUrl_admin_tiennghi.'delete_tiennghi'.'.php',
		'coppy_tiennghi'=>$basUrl_admin_tiennghi.'coppy_tiennghi'.'.php',
	);
	$basUrl_admin_tinhthanh = HTTPS_SERVER_ADMIN."default/module/tinhthanh/";
	$page_admin_tinhthanh = array(
		'add_tinhthanh'=>$basUrl_admin_tinhthanh.'add_tinhthanh'.'.php',
		'ds_tinhthanh'=>$basUrl_admin_tinhthanh.'ds_tinhthanh'.'.php',
		'update_tinhthanh'=>$basUrl_admin_tinhthanh.'update_tinhthanh'.'.php',
		'delete_tinhthanh'=>$basUrl_admin_tinhthanh.'delete_tinhthanh'.'.php',
		'coppy_tinhthanh'=>$basUrl_admin_tinhthanh.'coppy_tinhthanh'.'.php',
	);
	$basUrl_admin_mausac = HTTPS_SERVER_ADMIN."default/module/mausac/";
	$page_admin_mausac = array(
		'add_mausac'=>$basUrl_admin_mausac.'add_mausac'.'.php',
		'ds_mausac'=>$basUrl_admin_mausac.'ds_mausac'.'.php',
		'update_mausac'=>$basUrl_admin_mausac.'update_mausac'.'.php',
		'delete_mausac'=>$basUrl_admin_mausac.'delete_mausac'.'.php',
		'coppy_mausac'=>$basUrl_admin_mausac.'coppy_mausac'.'.php',
	);
	$basUrl_admin_quangcao_header = HTTPS_SERVER_ADMIN."default/module/quangcao_header/";
	$page_admin_quangcao_header = array(
		'add_quangcao_header'=>$basUrl_admin_quangcao_header.'add_quangcao_header'.'.php',
		'ds_quangcao_header'=>$basUrl_admin_quangcao_header.'ds_quangcao_header'.'.php',
		'update_quangcao_header'=>$basUrl_admin_quangcao_header.'update_quangcao_header'.'.php',
		'delete_quangcao_header'=>$basUrl_admin_quangcao_header.'delete_quangcao_header'.'.php',
		'coppy_quangcao_header'=>$basUrl_admin_quangcao_header.'coppy_quangcao_header'.'.php',
	);
	$basUrl_admin_quangcao_content = HTTPS_SERVER_ADMIN."default/module/quangcao_content/";
	$page_admin_quangcao_content = array(
		'add_quangcao_content'=>$basUrl_admin_quangcao_content.'add_quangcao_content'.'.php',
		'ds_quangcao_content'=>$basUrl_admin_quangcao_content.'ds_quangcao_content'.'.php',
		'update_quangcao_content'=>$basUrl_admin_quangcao_content.'update_quangcao_content'.'.php',
		'delete_quangcao_content'=>$basUrl_admin_quangcao_content.'delete_quangcao_content'.'.php',
		'coppy_quangcao_content'=>$basUrl_admin_quangcao_content.'coppy_quangcao_content'.'.php',
	);
	$basUrl_admin_quangcao_sub = HTTPS_SERVER_ADMIN."default/module/quangcao_sub/";
	$page_admin_quangcao_sub = array(
		'add_quangcao_sub'=>$basUrl_admin_quangcao_sub.'add_quangcao_sub'.'.php',
		'ds_quangcao_sub'=>$basUrl_admin_quangcao_sub.'ds_quangcao_sub'.'.php',
		'update_quangcao_sub'=>$basUrl_admin_quangcao_sub.'update_quangcao_sub'.'.php',
		'delete_quangcao_sub'=>$basUrl_admin_quangcao_sub.'delete_quangcao_sub'.'.php',
		'coppy_quangcao_sub'=>$basUrl_admin_quangcao_sub.'coppy_quangcao_sub'.'.php',
	);
	$basUrl_admin_quangcao_linhvuc = HTTPS_SERVER_ADMIN."default/module/quangcao_linhvuc/";
	$page_admin_quangcao_linhvuc = array(
		'add_quangcao_linhvuc'=>$basUrl_admin_quangcao_linhvuc.'add_quangcao_linhvuc'.'.php',
		'ds_quangcao_linhvuc'=>$basUrl_admin_quangcao_linhvuc.'ds_quangcao_linhvuc'.'.php',
		'update_quangcao_linhvuc'=>$basUrl_admin_quangcao_linhvuc.'update_quangcao_linhvuc'.'.php',
		'delete_quangcao_linhvuc'=>$basUrl_admin_quangcao_linhvuc.'delete_quangcao_linhvuc'.'.php',
		'coppy_quangcao_linhvuc'=>$basUrl_admin_quangcao_linhvuc.'coppy_quangcao_linhvuc'.'.php',
	);
	$basUrl_admin_quanhuyen = HTTPS_SERVER_ADMIN."default/module/quanhuyen/";
	$page_admin_quanhuyen = array(
		'add_quanhuyen'=>$basUrl_admin_quanhuyen.'add_quanhuyen'.'.php',
		'ds_quanhuyen'=>$basUrl_admin_quanhuyen.'ds_quanhuyen'.'.php',
		'update_quanhuyen'=>$basUrl_admin_quanhuyen.'update_quanhuyen'.'.php',
		'delete_quanhuyen'=>$basUrl_admin_quanhuyen.'delete_quanhuyen'.'.php',
		'coppy_quanhuyen'=>$basUrl_admin_quanhuyen.'coppy_quanhuyen'.'.php',
	);
	$basUrl_admin_xathitran = HTTPS_SERVER_ADMIN."default/module/xathitran/";
	$page_admin_xathitran = array(
		'add_xathitran'=>$basUrl_admin_xathitran.'add_xathitran'.'.php',
		'ds_xathitran'=>$basUrl_admin_xathitran.'ds_xathitran'.'.php',
		'update_xathitran'=>$basUrl_admin_xathitran.'update_xathitran'.'.php',
		'delete_xathitran'=>$basUrl_admin_xathitran.'delete_xathitran'.'.php',
		'coppy_xathitran'=>$basUrl_admin_xathitran.'coppy_xathitran'.'.php',
	);
	$basUrl_admin_hinhthuc = HTTPS_SERVER_ADMIN."default/module/hinhthuc/";
	$page_admin_hinhthuc = array(
		'add_hinhthuc'=>$basUrl_admin_hinhthuc.'add_hinhthuc'.'.php',
		'ds_hinhthuc'=>$basUrl_admin_hinhthuc.'ds_hinhthuc'.'.php',
		'update_hinhthuc'=>$basUrl_admin_hinhthuc.'update_hinhthuc'.'.php',
		'delete_hinhthuc'=>$basUrl_admin_hinhthuc.'delete_hinhthuc'.'.php',
		'coppy_hinhthuc'=>$basUrl_admin_hinhthuc.'coppy_hinhthuc'.'.php',
	);
	$basUrl_admin_tinhtrang = HTTPS_SERVER_ADMIN."default/module/tinhtrang/";
	$page_admin_tinhtrang = array(
		'add_tinhtrang'=>$basUrl_admin_tinhtrang.'add_tinhtrang'.'.php',
		'ds_tinhtrang'=>$basUrl_admin_tinhtrang.'ds_tinhtrang'.'.php',
		'update_tinhtrang'=>$basUrl_admin_tinhtrang.'update_tinhtrang'.'.php',
		'delete_tinhtrang'=>$basUrl_admin_tinhtrang.'delete_tinhtrang'.'.php',
		'coppy_tinhtrang'=>$basUrl_admin_tinhtrang.'coppy_tinhtrang'.'.php',
	);
	$basUrl_admin_giohang = HTTPS_SERVER_ADMIN."default/module/giohang/";
	$page_admin_giohang = array(
		'add_giohang_new'=>$basUrl_admin_giohang.'add_giohang_new'.'.php',
		'ds_giohang_new'=>$basUrl_admin_giohang.'ds_giohang_new'.'.php',
		'update_giohang_new'=>$basUrl_admin_giohang.'update_giohang_new'.'.php',
		'coppy_giohang_new'=>$basUrl_admin_giohang.'coppy_giohang_new'.'.php',
		'delete_giohang_new'=>$basUrl_admin_giohang.'delete_giohang_new'.'.php',
		
		'add_giohang_all'=>$basUrl_admin_giohang.'add_giohang_all'.'.php',
		'ds_giohang_all'=>$basUrl_admin_giohang.'ds_giohang_all'.'.php',
		'update_giohang_all'=>$basUrl_admin_giohang.'update_giohang_all'.'.php',
		'coppy_giohang_all'=>$basUrl_admin_giohang.'coppy_giohang_all'.'.php',
		'delete_giohang_all'=>$basUrl_admin_giohang.'delete_giohang_all'.'.php',
		
		'add_giohang_success'=>$basUrl_admin_giohang.'add_giohang_success'.'.php',
		'ds_giohang_success'=>$basUrl_admin_giohang.'ds_giohang_success'.'.php',
		'update_giohang_success'=>$basUrl_admin_giohang.'update_giohang_success'.'.php',
		'coppy_giohang_success'=>$basUrl_admin_giohang.'coppy_giohang_success'.'.php',
		'delete_giohang_success'=>$basUrl_admin_giohang.'delete_giohang_success'.'.php',
		
		'add_giohang_rec'=>$basUrl_admin_giohang.'add_giohang_rec'.'.php',
		'ds_giohang_rec'=>$basUrl_admin_giohang.'ds_giohang_rec'.'.php',
		'update_giohang_rec'=>$basUrl_admin_giohang.'update_giohang_rec'.'.php',
		'coppy_giohang_rec'=>$basUrl_admin_giohang.'coppy_giohang_rec'.'.php',
		'delete_giohang_rec'=>$basUrl_admin_giohang.'delete_giohang_rec'.'.php',
	);
	$basUrl_admin_gioithieucongty = HTTPS_SERVER_ADMIN."default/module/gioithieucongty/";
	$page_admin_gioithieucongty = array(
		'add_gioithieucongty'=>$basUrl_admin_gioithieucongty.'add_gioithieucongty'.'.php',
		'ds_gioithieucongty'=>$basUrl_admin_gioithieucongty.'ds_gioithieucongty'.'.php',
		'update_gioithieucongty'=>$basUrl_admin_gioithieucongty.'update_gioithieucongty'.'.php',
	);
	$basUrl_admin_quytrinhsanxuat = HTTPS_SERVER_ADMIN."default/module/quytrinhsanxuat/";
	$page_admin_quytrinhsanxuat = array(
		'add_quytrinhsanxuat'=>$basUrl_admin_quytrinhsanxuat.'add_quytrinhsanxuat'.'.php',
		'ds_quytrinhsanxuat'=>$basUrl_admin_quytrinhsanxuat.'ds_quytrinhsanxuat'.'.php',
		'update_quytrinhsanxuat'=>$basUrl_admin_quytrinhsanxuat.'update_quytrinhsanxuat'.'.php',
	);
	$basUrl_admin_quydinhsudung = HTTPS_SERVER_ADMIN."default/module/quydinhsudung/";
	$page_admin_quydinhsudung = array(
		'add_quydinhsudung'=>$basUrl_admin_quydinhsudung.'add_quydinhsudung'.'.php',
		'ds_quydinhsudung'=>$basUrl_admin_quydinhsudung.'ds_quydinhsudung'.'.php',
		'update_quydinhsudung'=>$basUrl_admin_quydinhsudung.'update_quydinhsudung'.'.php',
	);
	$basUrl_admin_huongdandathang = HTTPS_SERVER_ADMIN."default/module/huongdandathang/";
	$page_admin_huongdandathang = array(
		'add_huongdandathang'=>$basUrl_admin_huongdandathang.'add_huongdandathang'.'.php',
		'ds_huongdandathang'=>$basUrl_admin_huongdandathang.'ds_huongdandathang'.'.php',
		'update_huongdandathang'=>$basUrl_admin_huongdandathang.'update_huongdandathang'.'.php',
	);
	$basUrl_admin_tuyendung = HTTPS_SERVER_ADMIN."default/module/tuyendung/";
	$page_admin_tuyendung = array(
		'add_tuyendung'=>$basUrl_admin_tuyendung.'add_tuyendung'.'.php',
		'ds_tuyendung'=>$basUrl_admin_tuyendung.'ds_tuyendung'.'.php',
		'update_tuyendung'=>$basUrl_admin_tuyendung.'update_tuyendung'.'.php',
	);
	$basUrl_admin_lienhecongty = HTTPS_SERVER_ADMIN."default/module/lienhecongty/";
	$page_admin_lienhecongty = array(
		'add_lienhecongty'=>$basUrl_admin_lienhecongty.'add_lienhecongty'.'.php',
		'ds_lienhecongty'=>$basUrl_admin_lienhecongty.'ds_lienhecongty'.'.php',
		'update_lienhecongty'=>$basUrl_admin_lienhecongty.'update_lienhecongty'.'.php',
	);
	$basUrl_admin_sitemap = HTTPS_SERVER_ADMIN."default/module/sitemap/";
	$page_admin_sitemap = array(
		'add_sitemap'=>$basUrl_admin_sitemap.'add_sitemap'.'.php',
		'ds_sitemap'=>$basUrl_admin_sitemap.'ds_sitemap'.'.php',
		'update_sitemap'=>$basUrl_admin_sitemap.'update_sitemap'.'.php',
	);
	$basUrl_admin_quychehoatdong = HTTPS_SERVER_ADMIN."default/module/quychehoatdong/";
	$page_admin_quychehoatdong = array(
		'add_quychehoatdong'=>$basUrl_admin_quychehoatdong.'add_quychehoatdong'.'.php',
		'ds_quychehoatdong'=>$basUrl_admin_quychehoatdong.'ds_quychehoatdong'.'.php',
		'update_quychehoatdong'=>$basUrl_admin_quychehoatdong.'update_quychehoatdong'.'.php',
	);
	$basUrl_admin_dieukhoansudung = HTTPS_SERVER_ADMIN."default/module/dieukhoansudung/";
	$page_admin_dieukhoansudung = array(
		'add_dieukhoansudung'=>$basUrl_admin_dieukhoansudung.'add_dieukhoansudung'.'.php',
		'ds_dieukhoansudung'=>$basUrl_admin_dieukhoansudung.'ds_dieukhoansudung'.'.php',
		'update_dieukhoansudung'=>$basUrl_admin_dieukhoansudung.'update_dieukhoansudung'.'.php',
	);
	$basUrl_admin_dichvutienitsms = HTTPS_SERVER_ADMIN."default/module/dichvutienitsms/";
	$page_admin_dichvutienitsms = array(
		'add_dichvutienitsms'=>$basUrl_admin_dichvutienitsms.'add_dichvutienitsms'.'.php',
		'ds_dichvutienitsms'=>$basUrl_admin_dichvutienitsms.'ds_dichvutienitsms'.'.php',
		'update_dichvutienitsms'=>$basUrl_admin_dichvutienitsms.'update_dichvutienitsms'.'.php',
	);
	$basUrl_admin_huongdan = HTTPS_SERVER_ADMIN."default/module/huongdan/";
	$page_admin_huongdan = array(
		'add_huongdan'=>$basUrl_admin_huongdan.'add_huongdan'.'.php',
		'ds_huongdan'=>$basUrl_admin_huongdan.'ds_huongdan'.'.php',
		'update_huongdan'=>$basUrl_admin_huongdan.'update_huongdan'.'.php',
	);
	$basUrl_admin_luuydangtin = HTTPS_SERVER_ADMIN."default/module/luuydangtin/";
	$page_admin_luuydangtin = array(
		'add_luuydangtin'=>$basUrl_admin_luuydangtin.'add_luuydangtin'.'.php',
		'ds_luuydangtin'=>$basUrl_admin_luuydangtin.'ds_luuydangtin'.'.php',
		'update_luuydangtin'=>$basUrl_admin_luuydangtin.'update_luuydangtin'.'.php',
	);
	$basUrl_mangluoibaohanh = HTTPS_SERVER_ADMIN."default/module/mangluoibaohanh/";
	$page_mangluoibaohanh = array(
		'add_mangluoibaohanh'=>$basUrl_mangluoibaohanh.'add_mangluoibaohanh'.'.php',
		'ds_mangluoibaohanh'=>$basUrl_mangluoibaohanh.'ds_mangluoibaohanh'.'.php',
		'update_mangluoibaohanh'=>$basUrl_mangluoibaohanh.'update_mangluoibaohanh'.'.php',
		'delete_mangluoibaohanh'=>$basUrl_mangluoibaohanh.'delete_mangluoibaohanh'.'.php',
		'coppy_mangluoibaohanh'=>$basUrl_mangluoibaohanh.'coppy_mangluoibaohanh'.'.php',
	);
	$basUrl_soluoccongty = HTTPS_SERVER_ADMIN."default/module/soluoccongty/";
	$page_soluoccongty = array(
		'add_soluoccongty'=>$basUrl_soluoccongty.'add_soluoccongty'.'.php',
		'ds_soluoccongty'=>$basUrl_soluoccongty.'ds_soluoccongty'.'.php',
		'update_soluoccongty'=>$basUrl_soluoccongty.'update_soluoccongty'.'.php',
		'coppy_soluoccongty'=>$basUrl_soluoccongty.'coppy_soluoccongty'.'.php',
		'delete_soluoccongty'=>$basUrl_soluoccongty.'delete_soluoccongty'.'.php',
	);
	$basUrl_admin_gockythuat = HTTPS_SERVER_ADMIN."default/module/gockythuat/";
	$page_admin_gockythuat = array(
		'add_gockythuat'=>$basUrl_admin_gockythuat.'add_gockythuat'.'.php',
		'ds_gockythuat'=>$basUrl_admin_gockythuat.'ds_gockythuat'.'.php',
		'update_gockythuat'=>$basUrl_admin_gockythuat.'update_gockythuat'.'.php',
		'coppy_gockythuat'=>$basUrl_admin_gockythuat.'coppy_gockythuat'.'.php',
		'delete_gockythuat'=>$basUrl_admin_gockythuat.'delete_gockythuat'.'.php',
	);
	$basUrl_admin_nhacungcap = HTTPS_SERVER_ADMIN."default/module/nhacungcap/";
	$page_admin_nhacungcap = array(
		'add_nhacungcap'=>$basUrl_admin_nhacungcap.'add_nhacungcap'.'.php',
		'ds_nhacungcap'=>$basUrl_admin_nhacungcap.'ds_nhacungcap'.'.php',
		'update_nhacungcap'=>$basUrl_admin_nhacungcap.'update_nhacungcap'.'.php',
		'coppy_nhacungcap'=>$basUrl_admin_nhacungcap.'coppy_nhacungcap'.'.php',
		'delete_nhacungcap'=>$basUrl_admin_nhacungcap.'delete_nhacungcap'.'.php',
	);
	$basUrl_admin_dacdiem = HTTPS_SERVER_ADMIN."default/module/dacdiem/";
	$page_admin_dacdiem = array(
		'add_dacdiem'=>$basUrl_admin_dacdiem.'add_dacdiem'.'.php',
		'ds_dacdiem'=>$basUrl_admin_dacdiem.'ds_dacdiem'.'.php',
		'update_dacdiem'=>$basUrl_admin_dacdiem.'update_dacdiem'.'.php',
		'coppy_dacdiem'=>$basUrl_admin_dacdiem.'coppy_dacdiem'.'.php',
		'delete_dacdiem'=>$basUrl_admin_dacdiem.'delete_dacdiem'.'.php',
	);
	$basUrl_admin_chucnang = HTTPS_SERVER_ADMIN."default/module/chucnang/";
	$page_admin_chucnang = array(
		'add_chucnang'=>$basUrl_admin_chucnang.'add_chucnang'.'.php',
		'ds_chucnang'=>$basUrl_admin_chucnang.'ds_chucnang'.'.php',
		'update_chucnang'=>$basUrl_admin_chucnang.'update_chucnang'.'.php',
		'coppy_chucnang'=>$basUrl_admin_chucnang.'coppy_chucnang'.'.php',
		'delete_chucnang'=>$basUrl_admin_chucnang.'delete_chucnang'.'.php',
	);
	$basUrl_admin_hoivadap = HTTPS_SERVER_ADMIN."default/module/hoivadap/";
	$page_admin_hoivadap = array(
		'add_hoivadap'=>$basUrl_admin_hoivadap.'add_hoivadap'.'.php',
		'ds_hoivadap'=>$basUrl_admin_hoivadap.'ds_hoivadap'.'.php',
		'update_hoivadap'=>$basUrl_admin_hoivadap.'update_hoivadap'.'.php',
		'coppy_hoivadap'=>$basUrl_admin_hoivadap.'coppy_hoivadap'.'.php',
		'delete_hoivadap'=>$basUrl_admin_hoivadap.'delete_hoivadap'.'.php',
	);
	$basUrl_admin_huongdansudung = HTTPS_SERVER_ADMIN."default/module/huongdansudung/";
	$page_admin_huongdansudung = array(
		'add_huongdansudung'=>$basUrl_admin_huongdansudung.'add_huongdansudung'.'.php',
		'ds_huongdansudung'=>$basUrl_admin_huongdansudung.'ds_huongdansudung'.'.php',
		'update_huongdansudung'=>$basUrl_admin_huongdansudung.'update_huongdansudung'.'.php',
	);
	$basUrl_admin_lichsucongty = HTTPS_SERVER_ADMIN."default/module/lichsucongty/";
	$page_admin_lichsucongty = array(
		'add_lichsucongty'=>$basUrl_admin_lichsucongty.'add_lichsucongty'.'.php',
		'ds_lichsucongty'=>$basUrl_admin_lichsucongty.'ds_lichsucongty'.'.php',
		'update_lichsucongty'=>$basUrl_admin_lichsucongty.'update_lichsucongty'.'.php',
	);
	$basUrl_admin_lienhe = HTTPS_SERVER_ADMIN."default/module/lienhe/";
	$page_admin_lienhe = array(
		'add_lienhe'=>$basUrl_admin_lienhe.'add_lienhe'.'.php',
		'ds_lienhe'=>$basUrl_admin_lienhe.'ds_lienhe'.'.php',
		'update_lienhe'=>$basUrl_admin_lienhe.'update_lienhe'.'.php',
		'delete_lienhe'=>$basUrl_admin_lienhe.'delete_lienhe'.'.php',
		'coppy_lienhe'=>$basUrl_admin_lienhe.'coppy_lienhe'.'.php',
	);
	$basUrl_admin_lienketngoai = HTTPS_SERVER_ADMIN."default/module/lienketngoai/";
	$page_admin_lienketngoai = array(
		'add_lienketngoai'=>$basUrl_admin_lienketngoai.'add_lienketngoai'.'.php',
		'coppy_lienketngoai'=>$basUrl_admin_lienketngoai.'coppy_lienketngoai'.'.php',
		'ds_lienketngoai'=>$basUrl_admin_lienketngoai.'ds_lienketngoai'.'.php',
		'update_lienketngoai'=>$basUrl_admin_lienketngoai.'update_lienketngoai'.'.php',
		'delete_lienketngoai'=>$basUrl_admin_lienketngoai.'delete_lienketngoai'.'.php',
	);
	$basUrl_admin_thongtinlienhe = HTTPS_SERVER_ADMIN."default/module/thongtinlienhe/";
	$page_admin_thongtinlienhe = array(
		'add_thongtinlienhe'=>$basUrl_admin_thongtinlienhe.'add_thongtinlienhe'.'.php',
		'coppy_thongtinlienhe'=>$basUrl_admin_thongtinlienhe.'coppy_thongtinlienhe'.'.php',
		'ds_thongtinlienhe'=>$basUrl_admin_thongtinlienhe.'ds_thongtinlienhe'.'.php',
		'update_thongtinlienhe'=>$basUrl_admin_thongtinlienhe.'update_thongtinlienhe'.'.php',
		'delete_lienketngoai'=>$basUrl_admin_lienketngoai.'delete_lienketngoai'.'.php',
	);
	$basUrl_admin_taikhoannguoidung = HTTPS_SERVER_ADMIN."default/module/taikhoannguoidung/";
	$page_admin_taikhoannguoidung = array(
		'add_taikhoannguoidung'=>$basUrl_admin_taikhoannguoidung.'add_taikhoannguoidung'.'.php',
		'coppy_taikhoannguoidung'=>$basUrl_admin_taikhoannguoidung.'coppy_taikhoannguoidung'.'.php',
		'ds_taikhoannguoidung'=>$basUrl_admin_taikhoannguoidung.'ds_taikhoannguoidung'.'.php',
		'update_taikhoannguoidung'=>$basUrl_admin_taikhoannguoidung.'update_taikhoannguoidung'.'.php',
		'delete_lienketngoai'=>$basUrl_admin_lienketngoai.'delete_lienketngoai'.'.php',
	);
	$basUrl_admin_giohang = HTTPS_SERVER_ADMIN."default/module/giohang/";
	$page_admin_giohang = array(
		'add_giohang'=>$basUrl_admin_giohang.'add_giohang'.'.php',
		'coppy_giohang'=>$basUrl_admin_giohang.'coppy_giohang'.'.php',
		'ds_giohang'=>$basUrl_admin_giohang.'ds_giohang'.'.php',
		'update_giohang'=>$basUrl_admin_giohang.'update_giohang'.'.php',
		'delete_lienketngoai'=>$basUrl_admin_lienketngoai.'delete_lienketngoai'.'.php',
	);
	$basUrl_admin_quangcaochinh = HTTPS_SERVER_ADMIN."default/module/quangcaochinh/";
	$page_admin_quangcaochinh = array(
		'add_quangcaochinh'=>$basUrl_admin_quangcaochinh.'add_quangcaochinh'.'.php',
		'coppy_quangcaochinh'=>$basUrl_admin_quangcaochinh.'coppy_quangcaochinh'.'.php',
		'ds_quangcaochinh'=>$basUrl_admin_quangcaochinh.'ds_quangcaochinh'.'.php',
		'update_quangcaochinh'=>$basUrl_admin_quangcaochinh.'update_quangcaochinh'.'.php',
		'delete_quangcaochinh'=>$basUrl_admin_quangcaochinh.'delete_quangcaochinh'.'.php',
	);
	$basUrl_admin_quangcaochinh_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcaochinh_quydinh/";
	$page_admin_quangcaochinh_quydinh = array(
		'add_quangcaochinh_quydinh'=>$basUrl_admin_quangcaochinh_quydinh.'add_quangcaochinh_quydinh'.'.php',
		'coppy_quangcaochinh_quydinh'=>$basUrl_admin_quangcaochinh_quydinh.'coppy_quangcaochinh_quydinh'.'.php',
		'ds_quangcaochinh_quydinh'=>$basUrl_admin_quangcaochinh_quydinh.'ds_quangcaochinh_quydinh'.'.php',
		'update_quangcaochinh_quydinh'=>$basUrl_admin_quangcaochinh_quydinh.'update_quangcaochinh_quydinh'.'.php',
		'delete_quangcaochinh_quydinh'=>$basUrl_admin_quangcaochinh_quydinh.'delete_quangcaochinh_quydinh'.'.php',
	);
	$basUrl_admin_quangcaophu = HTTPS_SERVER_ADMIN."default/module/quangcaophu/";
	$page_admin_quangcaophu = array(
		'add_quangcaophu'=>$basUrl_admin_quangcaophu.'add_quangcaophu'.'.php',
		'coppy_quangcaophu'=>$basUrl_admin_quangcaophu.'coppy_quangcaophu'.'.php',
		'ds_quangcaophu'=>$basUrl_admin_quangcaophu.'ds_quangcaophu'.'.php',
		'update_quangcaophu'=>$basUrl_admin_quangcaophu.'update_quangcaophu'.'.php',
		'delete_quangcaophu'=>$basUrl_admin_quangcaophu.'delete_quangcaophu'.'.php',
	);
	$basUrl_admin_quangcaophu_quydinh = HTTPS_SERVER_ADMIN."default/module/quangcaophu_quydinh/";
	$page_admin_quangcaophu_quydinh = array(
		'add_quangcaophu_quydinh'=>$basUrl_admin_quangcaophu_quydinh.'add_quangcaophu_quydinh'.'.php',
		'coppy_quangcaophu_quydinh'=>$basUrl_admin_quangcaophu_quydinh.'coppy_quangcaophu_quydinh'.'.php',
		'ds_quangcaophu_quydinh'=>$basUrl_admin_quangcaophu_quydinh.'ds_quangcaophu_quydinh'.'.php',
		'update_quangcaophu_quydinh'=>$basUrl_admin_quangcaophu_quydinh.'update_quangcaophu_quydinh'.'.php',
		'delete_quangcaophu_quydinh'=>$basUrl_admin_quangcaophu_quydinh.'delete_quangcaophu_quydinh'.'.php',
	);
	$basUrl_admin_nhomlinhvuc = HTTPS_SERVER_ADMIN."default/module/nhomlinhvuc/";
	$page_admin_nhomlinhvuc = array(
		'add_nhomlinhvuc'=>$basUrl_admin_nhomlinhvuc.'add_nhomlinhvuc'.'.php',
		'ds_nhomlinhvuc'=>$basUrl_admin_nhomlinhvuc.'ds_nhomlinhvuc'.'.php',
		'update_nhomlinhvuc'=>$basUrl_admin_nhomlinhvuc.'update_nhomlinhvuc'.'.php',
		'coppy_nhomlinhvuc'=>$basUrl_admin_nhomlinhvuc.'coppy_nhomlinhvuc'.'.php',
		'delete_nhomlinhvuc'=>$basUrl_admin_nhomlinhvuc.'delete_nhomlinhvuc'.'.php'
	);
	$basUrl_admin_raovat = HTTPS_SERVER_ADMIN."default/module/raovat/";
	$page_admin_raovat = array(
		'add_raovat'=>$basUrl_admin_raovat.'add_raovat'.'.php',
		'ds_raovat'=>$basUrl_admin_raovat.'ds_raovat'.'.php',
		'update_raovat'=>$basUrl_admin_raovat.'update_raovat'.'.php',
		'coppy_raovat'=>$basUrl_admin_raovat.'coppy_raovat'.'.php',
		'delete_raovat'=>$basUrl_admin_raovat.'delete_raovat'.'.php'
	);
	$basUrl_admin_raovat_khachhang = HTTPS_SERVER_ADMIN."default/module/raovat_khachhang/";
	$page_admin_raovat_khachhang = array(
		'add_raovat_khachhang'=>$basUrl_admin_raovat_khachhang.'add_raovat_khachhang'.'.php',
		'ds_raovat_khachhang'=>$basUrl_admin_raovat_khachhang.'ds_raovat_khachhang'.'.php',
		'update_raovat_khachhang'=>$basUrl_admin_raovat_khachhang.'update_raovat_khachhang'.'.php',
		'coppy_raovat_khachhang'=>$basUrl_admin_raovat_khachhang.'coppy_raovat_khachhang'.'.php',
		'delete_raovat_khachhang'=>$basUrl_admin_raovat_khachhang.'delete_raovat_khachhang'.'.php'
	);
	$basUrl_admin_thongtinsanpham = HTTPS_SERVER_ADMIN."default/module/thongtinsanpham/";
	$page_admin_thongtinsanpham = array(
		'add_thongtinsanpham'=>$basUrl_admin_thongtinsanpham.'add_thongtinsanpham'.'.php',
		'ds_thongtinsanpham'=>$basUrl_admin_thongtinsanpham.'ds_thongtinsanpham'.'.php',
		'update_thongtinsanpham'=>$basUrl_admin_thongtinsanpham.'update_thongtinsanpham'.'.php',
		'coppy_thongtinsanpham'=>$basUrl_admin_thongtinsanpham.'coppy_thongtinsanpham'.'.php',
		'delete_thongtinsanpham'=>$basUrl_admin_thongtinsanpham.'delete_thongtinsanpham'.'.php'
	);
	$basUrl_admin_binhluan = HTTPS_SERVER_ADMIN."default/module/binhluan/";
	$page_admin_binhluan = array(
		'add_binhluan'=>$basUrl_admin_binhluan.'add_binhluan'.'.php',
		'ds_binhluan'=>$basUrl_admin_binhluan.'ds_binhluan'.'.php',
		'update_binhluan'=>$basUrl_admin_binhluan.'update_binhluan'.'.php',
		'coppy_binhluan'=>$basUrl_admin_binhluan.'coppy_binhluan'.'.php',
		'delete_binhluan'=>$basUrl_admin_binhluan.'delete_binhluan'.'.php'
	);
	$basUrl_admin_binhluantintuc = HTTPS_SERVER_ADMIN."default/module/binhluantintuc/";
	$page_admin_binhluantintuc = array(
		'add_binhluantintuc'=>$basUrl_admin_binhluantintuc.'add_binhluantintuc'.'.php',
		'ds_binhluantintuc'=>$basUrl_admin_binhluantintuc.'ds_binhluantintuc'.'.php',
		'update_binhluantintuc'=>$basUrl_admin_binhluantintuc.'update_binhluantintuc'.'.php',
		'coppy_binhluantintuc'=>$basUrl_admin_binhluantintuc.'coppy_binhluantintuc'.'.php',
		'delete_binhluantintuc'=>$basUrl_admin_binhluantintuc.'delete_binhluantintuc'.'.php'
	);
	$basUrl_admin_binhluanvideo = HTTPS_SERVER_ADMIN."default/module/binhluanvideo/";
	$page_admin_binhluanvideo = array(
		'add_binhluanvideo'=>$basUrl_admin_binhluanvideo.'add_binhluanvideo'.'.php',
		'ds_binhluanvideo'=>$basUrl_admin_binhluanvideo.'ds_binhluanvideo'.'.php',
		'update_binhluanvideo'=>$basUrl_admin_binhluanvideo.'update_binhluanvideo'.'.php',
		'coppy_binhluanvideo'=>$basUrl_admin_binhluanvideo.'coppy_binhluanvideo'.'.php',
		'delete_binhluanvideo'=>$basUrl_admin_binhluanvideo.'delete_binhluanvideo'.'.php'
	);
	$basUrl_admin_binhsanpham = HTTPS_SERVER_ADMIN."default/module/binhsanpham/";
	$page_admin_binhsanpham = array(
		'add_binhsanpham'=>$basUrl_admin_binhsanpham.'add_binhsanpham'.'.php',
		'ds_binhsanpham'=>$basUrl_admin_binhsanpham.'ds_binhsanpham'.'.php',
		'update_binhsanpham'=>$basUrl_admin_binhsanpham.'update_binhsanpham'.'.php',
		'coppy_binhsanpham'=>$basUrl_admin_binhsanpham.'coppy_binhsanpham'.'.php',
		'delete_binhsanpham'=>$basUrl_admin_binhsanpham.'delete_binhsanpham'.'.php'
	);
	$basUrl_admin_linhvuc = HTTPS_SERVER_ADMIN."default/module/linhvuc/";
	$page_admin_linhvuc = array(
		'add_linhvuc'=>$basUrl_admin_linhvuc.'add_linhvuc'.'.php',
		'ds_linhvuc'=>$basUrl_admin_linhvuc.'ds_linhvuc'.'.php',
		'update_linhvuc'=>$basUrl_admin_linhvuc.'update_linhvuc'.'.php',
		'coppy_linhvuc'=>$basUrl_admin_linhvuc.'coppy_linhvuc'.'.php',
		'delete_linhvuc'=>$basUrl_admin_linhvuc.'delete_linhvuc'.'.php'
	);
	$basUrl_admin_chitietlinhvuc = HTTPS_SERVER_ADMIN."default/module/chitietlinhvuc/";
	$page_admin_chitietlinhvuc = array(
		'add_chitietlinhvuc'=>$basUrl_admin_chitietlinhvuc.'add_chitietlinhvuc'.'.php',
		'ds_chitietlinhvuc'=>$basUrl_admin_chitietlinhvuc.'ds_chitietlinhvuc'.'.php',
		'update_chitietlinhvuc'=>$basUrl_admin_chitietlinhvuc.'update_chitietlinhvuc'.'.php',
		'coppy_chitietlinhvuc'=>$basUrl_admin_chitietlinhvuc.'coppy_chitietlinhvuc'.'.php',
		'delete_chitietlinhvuc'=>$basUrl_admin_chitietlinhvuc.'delete_chitietlinhvuc'.'.php'
	);
	$basUrl_admin_hangsanxuat = HTTPS_SERVER_ADMIN."default/module/hangsanxuat/";
	$page_admin_hangsanxuat = array(
		'add_hangsanxuat'=>$basUrl_admin_hangsanxuat.'add_hangsanxuat'.'.php',
		'ds_hangsanxuat'=>$basUrl_admin_hangsanxuat.'ds_hangsanxuat'.'.php',
		'update_hangsanxuat'=>$basUrl_admin_hangsanxuat.'update_hangsanxuat'.'.php',
		'coppy_hangsanxuat'=>$basUrl_admin_hangsanxuat.'coppy_hangsanxuat'.'.php',
		'delete_hangsanxuat'=>$basUrl_admin_hangsanxuat.'delete_hangsanxuat'.'.php'
	);
	$basUrl_admin_nhomsanpham = HTTPS_SERVER_ADMIN."default/module/nhomsanpham/";
	$page_admin_nhomsanpham = array(
		'add_nhomsanpham'=>$basUrl_admin_nhomsanpham.'add_nhomsanpham'.'.php',
		'ds_nhomsanpham'=>$basUrl_admin_nhomsanpham.'ds_nhomsanpham'.'.php',
		'update_nhomsanpham'=>$basUrl_admin_nhomsanpham.'update_nhomsanpham'.'.php',
		'coppy_nhomsanpham'=>$basUrl_admin_nhomsanpham.'coppy_nhomsanpham'.'.php',
		'delete_nhomsanpham'=>$basUrl_admin_nhomsanpham.'delete_nhomsanpham'.'.php'
	);
	$basUrl_admin_tinhnang = HTTPS_SERVER_ADMIN."default/module/tinhnang/";
	$page_admin_tinhnang = array(
		'add_tinhnang'=>$basUrl_admin_tinhnang.'add_tinhnang'.'.php',
		'ds_tinhnang'=>$basUrl_admin_tinhnang.'ds_tinhnang'.'.php',
		'update_tinhnang'=>$basUrl_admin_tinhnang.'update_tinhnang'.'.php',
		'coppy_tinhnang'=>$basUrl_admin_tinhnang.'coppy_tinhnang'.'.php',
		'delete_tinhnang'=>$basUrl_admin_tinhnang.'delete_tinhnang'.'.php'
	);
	$basUrl_admin_thongsokythuat = HTTPS_SERVER_ADMIN."default/module/thongsokythuat/";
	$page_admin_thongsokythuat = array(
		'add_thongsokythuat'=>$basUrl_admin_thongsokythuat.'add_thongsokythuat'.'.php',
		'ds_thongsokythuat'=>$basUrl_admin_thongsokythuat.'ds_thongsokythuat'.'.php',
		'update_thongsokythuat'=>$basUrl_admin_thongsokythuat.'update_thongsokythuat'.'.php',
		'coppy_thongsokythuat'=>$basUrl_admin_thongsokythuat.'coppy_thongsokythuat'.'.php',
		'delete_thongsokythuat'=>$basUrl_admin_thongsokythuat.'delete_thongsokythuat'.'.php'
	);
	$basUrl_admin_hedieuhanh = HTTPS_SERVER_ADMIN."default/module/hedieuhanh/";
	$page_admin_hedieuhanh = array(
		'add_hedieuhanh'=>$basUrl_admin_hedieuhanh.'add_hedieuhanh'.'.php',
		'ds_hedieuhanh'=>$basUrl_admin_hedieuhanh.'ds_hedieuhanh'.'.php',
		'update_hedieuhanh'=>$basUrl_admin_hedieuhanh.'update_hedieuhanh'.'.php',
		'coppy_hedieuhanh'=>$basUrl_admin_hedieuhanh.'coppy_hedieuhanh'.'.php',
		'delete_hedieuhanh'=>$basUrl_admin_hedieuhanh.'delete_hedieuhanh'.'.php'
	);
	$basUrl_admin_slideshow_loaisanpham = HTTPS_SERVER_ADMIN."default/module/slideshow_loaisanpham/";
	$page_admin_slideshow_loaisanpham = array(
		'add_slideshow_loaisanpham'=>$basUrl_admin_slideshow_loaisanpham.'add_slideshow_loaisanpham'.'.php',
		'ds_slideshow_loaisanpham'=>$basUrl_admin_slideshow_loaisanpham.'ds_slideshow_loaisanpham'.'.php',
		'update_slideshow_loaisanpham'=>$basUrl_admin_slideshow_loaisanpham.'update_slideshow_loaisanpham'.'.php',
		'coppy_slideshow_loaisanpham'=>$basUrl_admin_slideshow_loaisanpham.'coppy_slideshow_loaisanpham'.'.php',
		'delete_slideshow_loaisanpham'=>$basUrl_admin_slideshow_loaisanpham.'delete_slideshow_loaisanpham'.'.php'
	);
	$basUrl_admin_linhvuchoatdong = HTTPS_SERVER_ADMIN."default/module/linhvuchoatdong/";
	$page_admin_linhvuchoatdong = array(
		'add_linhvuchoatdong'=>$basUrl_admin_linhvuchoatdong.'add_linhvuchoatdong'.'.php',
		'ds_linhvuchoatdong'=>$basUrl_admin_linhvuchoatdong.'ds_linhvuchoatdong'.'.php',
		'update_linhvuchoatdong'=>$basUrl_admin_linhvuchoatdong.'update_linhvuchoatdong'.'.php',
		'coppy_linhvuchoatdong'=>$basUrl_admin_linhvuchoatdong.'coppy_linhvuchoatdong'.'.php',
		'delete_linhvuchoatdong'=>$basUrl_admin_linhvuchoatdong.'delete_linhvuchoatdong'.'.php'
	);
	$basUrl_admin_loaivideo = HTTPS_SERVER_ADMIN."default/module/loaivideo/";//dt_loaidichvu
	$page_admin_loaivideo = array(
		'add_loaivideo'=>$basUrl_admin_loaivideo.'add_loaivideo'.'.php',
		'ds_loaivideo'=>$basUrl_admin_loaivideo.'ds_loaivideo'.'.php',
		'update_loaivideo'=>$basUrl_admin_loaivideo.'update_loaivideo'.'.php',
		'coppy_loaivideo'=>$basUrl_admin_loaivideo.'coppy_loaivideo'.'.php',
		'delete_loaivideo'=>$basUrl_admin_loaivideo.'delete_loaivideo'.'.php'
	);
	$basUrl_admin_loaidichvu = HTTPS_SERVER_ADMIN."default/module/loaidichvu/";
	$page_admin_loaidichvu = array(
		'add_loaidichvu'=>$basUrl_admin_loaidichvu.'add_loaidichvu'.'.php',
		'ds_loaidichvu'=>$basUrl_admin_loaidichvu.'ds_loaidichvu'.'.php',
		'update_loaidichvu'=>$basUrl_admin_loaidichvu.'update_loaidichvu'.'.php',
		'coppy_loaidichvu'=>$basUrl_admin_loaidichvu.'coppy_loaidichvu'.'.php',
		'delete_loaidichvu'=>$basUrl_admin_loaidichvu.'delete_loaidichvu'.'.php'
	);
	$basUrl_admin_mangluoibaohanh = HTTPS_SERVER_ADMIN."default/module/mangluoibaohanh/";
	$page_admin_mangluoibaohanh = array(
		'add_mangluoibaohanh'=>$basUrl_admin_mangluoibaohanh.'add_mangluoibaohanh'.'.php',
		'ds_mangluoibaohanh'=>$basUrl_admin_mangluoibaohanh.'ds_mangluoibaohanh'.'.php',
		'update_mangluoibaohanh'=>$basUrl_admin_mangluoibaohanh.'update_mangluoibaohanh'.'.php',
		'coppy_mangluoibaohanh'=>$basUrl_admin_mangluoibaohanh.'coppy_mangluoibaohanh'.'.php',
		'delete_mangluoibaohanh'=>$basUrl_admin_mangluoibaohanh.'delete_mangluoibaohanh'.'.php',
	);
	$basUrl_admin_menumain = HTTPS_SERVER_ADMIN."default/module/menumain/";
	$page_admin_menumain = array(
		'add_menumain'=>$basUrl_admin_menumain.'add_menumain'.'.php',
		'ds_menumain'=>$basUrl_admin_menumain.'ds_menumain'.'.php',
		'update_menumain'=>$basUrl_admin_menumain.'update_menumain'.'.php',
	);
	$basUrl_admin_menu_ctkhuyenmai = HTTPS_SERVER_ADMIN."default/module/menu_ctkhuyenmai/";
	$page_admin_menu_ctkhuyenmai = array(
		'add_menu_ctkhuyenmai'=>$basUrl_admin_menu_ctkhuyenmai.'add_menu_ctkhuyenmai'.'.php',
		'ds_menu_ctkhuyenmai'=>$basUrl_admin_menu_ctkhuyenmai.'ds_menu_ctkhuyenmai'.'.php',
		'update_menu_ctkhuyenmai'=>$basUrl_admin_menu_ctkhuyenmai.'update_menu_ctkhuyenmai'.'.php',
		'coppy_menu_ctkhuyenmai'=>$basUrl_admin_menu_ctkhuyenmai.'coppy_menu_ctkhuyenmai'.'.php',
		'delete_menu_ctkhuyenmai'=>$basUrl_admin_menu_ctkhuyenmai.'delete_menu_ctkhuyenmai'.'.php',
	);
	$basUrl_admin_menu_index = HTTPS_SERVER_ADMIN."default/module/menu_index/";
	$page_admin_menu_index = array(
		'add_menu_index'=>$basUrl_admin_menu_index.'add_menu_index'.'.php',
		'ds_menu_index'=>$basUrl_admin_menu_index.'ds_menu_index'.'.php',
		'update_menu_index'=>$basUrl_admin_menu_index.'update_menu_index'.'.php',
	);
	$basUrl_admin_menu_sanpham = HTTPS_SERVER_ADMIN."default/module/menu_sanpham/";
	$page_admin_menu_sanpham = array(
		'add_menu_sanpham'=>$basUrl_admin_menu_sanpham.'add_menu_sanpham'.'.php',
		'ds_menu_sanpham'=>$basUrl_admin_menu_sanpham.'ds_menu_sanpham'.'.php',
		'update_menu_sanpham'=>$basUrl_admin_menu_sanpham.'update_menu_sanpham'.'.php',
	);
	$basUrl_admin_tintuc = HTTPS_SERVER_ADMIN."default/module/tintuc/";
	$page_admin_tintuc = array(
		'add_tintuc'=>$basUrl_admin_tintuc.'add_tintuc'.'.php',
		'ds_tintuc'=>$basUrl_admin_tintuc.'ds_tintuc'.'.php',
		'update_tintuc'=>$basUrl_admin_tintuc.'update_tintuc'.'.php',
		'coppy_tintuc'=>$basUrl_admin_tintuc.'coppy_tintuc'.'.php',
		'delete_tintuc'=>$basUrl_admin_tintuc.'delete_tintuc'.'.php',
	);
	$basUrl_dichvu = HTTPS_SERVER_ADMIN."default/module/dichvu/";
	$page_dichvu = array(
		'add_dichvu'=>$basUrl_dichvu.'add_dichvu'.'.php',
		'ds_dichvu'=>$basUrl_dichvu.'ds_dichvu'.'.php',
		'update_dichvu'=>$basUrl_dichvu.'update_dichvu'.'.php',
		'coppy_dichvu'=>$basUrl_dichvu.'coppy_dichvu'.'.php',
		'delete_dichvu'=>$basUrl_dichvu.'delete_dichvu'.'.php',
	);
	$basUrl_slideshow = HTTPS_SERVER_ADMIN."default/module/slideshow/";
	$page_slideshow = array(
		'add_slideshow'=>$basUrl_slideshow.'add_slideshow'.'.php',
		'ds_slideshow'=>$basUrl_slideshow.'ds_slideshow'.'.php',
		'update_slideshow'=>$basUrl_slideshow.'update_slideshow'.'.php',
		'coppy_slideshow'=>$basUrl_slideshow.'coppy_slideshow'.'.php',
		'delete_slideshow'=>$basUrl_slideshow.'delete_slideshow'.'.php',
	);
	$basUrl_hoatdong = HTTPS_SERVER_ADMIN."default/module/hoatdong/";
	$page_hoatdong = array(
		'add_hoatdong'=>$basUrl_hoatdong.'add_hoatdong'.'.php',
		'ds_hoatdong'=>$basUrl_hoatdong.'ds_hoatdong'.'.php',
		'update_hoatdong'=>$basUrl_hoatdong.'update_hoatdong'.'.php',
		'coppy_hoatdong'=>$basUrl_hoatdong.'coppy_hoatdong'.'.php',
		'delete_hoatdong'=>$basUrl_hoatdong.'delete_hoatdong'.'.php',
	);
	$basUrl_dichvu_tintuc = HTTPS_SERVER_ADMIN."default/module/dichvu_tintuc/";
	$page_dichvu_tintuc = array(
		'add_dichvu'=>$basUrl_dichvu_tintuc.'add_dichvu'.'.php',
		'ds_dichvu'=>$basUrl_dichvu_tintuc.'ds_dichvu'.'.php',
		'update_dichvu'=>$basUrl_dichvu_tintuc.'update_dichvu'.'.php',
		'coppy_dichvu'=>$basUrl_dichvu_tintuc.'coppy_dichvu'.'.php',
		'delete_dichvu'=>$basUrl_dichvu_tintuc.'delete_dichvu'.'.php',
	);
	$basUrl_admin_huongdannguoimua = HTTPS_SERVER_ADMIN."default/module/huongdannguoimua/";
	$page_admin_huongdannguoimua = array(
		'add_huongdannguoimua'=>$basUrl_admin_huongdannguoimua.'add_huongdannguoimua'.'.php',
		'ds_huongdannguoimua'=>$basUrl_admin_huongdannguoimua.'ds_huongdannguoimua'.'.php',
		'update_huongdannguoimua'=>$basUrl_admin_huongdannguoimua.'update_huongdannguoimua'.'.php',
		'coppy_huongdannguoimua'=>$basUrl_admin_huongdannguoimua.'coppy_huongdannguoimua'.'.php',
		'delete_huongdannguoimua'=>$basUrl_admin_huongdannguoimua.'delete_huongdannguoimua'.'.php',
	);
	$basUrl_admin_huongdannguoiban = HTTPS_SERVER_ADMIN."default/module/huongdannguoiban/";
	$page_admin_huongdannguoiban = array(
		'add_huongdannguoiban'=>$basUrl_admin_huongdannguoiban.'add_huongdannguoiban'.'.php',
		'ds_huongdannguoiban'=>$basUrl_admin_huongdannguoiban.'ds_huongdannguoiban'.'.php',
		'update_huongdannguoiban'=>$basUrl_admin_huongdannguoiban.'update_huongdannguoiban'.'.php',
		'coppy_huongdannguoiban'=>$basUrl_admin_huongdannguoiban.'coppy_huongdannguoiban'.'.php',
		'delete_huongdannguoiban'=>$basUrl_admin_huongdannguoiban.'delete_huongdannguoiban'.'.php',
	);
	$basUrl_admin_menu_ttchamsockh = HTTPS_SERVER_ADMIN."default/module/menu_ttchamsockh/";
	$page_admin_menu_ttchamsockh = array(
		'add_menu_ttchamsockh'=>$basUrl_admin_menu_ttchamsockh.'add_menu_ttchamsockh'.'.php',
		'ds_menu_ttchamsockh'=>$basUrl_admin_menu_ttchamsockh.'ds_menu_ttchamsockh'.'.php',
		'update_menu_ttchamsockh'=>$basUrl_admin_menu_ttchamsockh.'update_menu_ttchamsockh'.'.php',
		'coppy_menu_ttchamsockh'=>$basUrl_admin_menu_ttchamsockh.'coppy_menu_ttchamsockh'.'.php',
		'delete_menu_ttchamsockh'=>$basUrl_admin_menu_ttchamsockh.'delete_menu_ttchamsockh'.'.php',
	);
	$basUrl_admin_menu_tuvansanpham = HTTPS_SERVER_ADMIN."default/module/menu_tuvansanpham/";
	$page_admin_menu_tuvansanpham = array(
		'add_menu_tuvansanpham'=>$basUrl_admin_menu_tuvansanpham.'add_menu_tuvansanpham'.'.php',
		'ds_menu_tuvansanpham'=>$basUrl_admin_menu_tuvansanpham.'ds_menu_tuvansanpham'.'.php',
		'update_menu_tuvansanpham'=>$basUrl_admin_menu_tuvansanpham.'update_menu_tuvansanpham'.'.php',
	);
	$basUrl_admin_ngonngu = HTTPS_SERVER_ADMIN."default/module/ngonngu/";
	$page_admin_ngonngu = array(
		'add_ngonngu'=>$basUrl_admin_ngonngu.'add_ngonngu'.'.php',
		'ds_ngonngu'=>$basUrl_admin_ngonngu.'ds_ngonngu'.'.php',
		'update_ngonngu'=>$basUrl_admin_ngonngu.'update_ngonngu'.'.php',
	);
	$basUrl_admin_phutung = HTTPS_SERVER_ADMIN."default/module/phutung/";
	$page_admin_phutung = array(
		'add_phutung'=>$basUrl_admin_phutung.'add_phutung'.'.php',
		'ds_phutung'=>$basUrl_admin_phutung.'ds_phutung'.'.php',
		'update_phutung'=>$basUrl_admin_phutung.'update_phutung'.'.php',
	);
	$basUrl_admin_quangcao = HTTPS_SERVER_ADMIN."default/module/quangcao/";
	$page_admin_quangcao = array(
		'add_quangcao'=>$basUrl_admin_quangcao.'add_quangcao'.'.php',
		'ds_quangcao'=>$basUrl_admin_quangcao.'ds_quangcao'.'.php',
		'update_quangcao'=>$basUrl_admin_quangcao.'update_quangcao'.'.php',
	);
	$basUrl_admin_quychephucvukhachhang = HTTPS_SERVER_ADMIN."default/module/quychephucvukhachhang/";
	$page_admin_quychephucvukhachhang = array(
		'add_quychephucvukhachhang'=>$basUrl_admin_quychephucvukhachhang.'add_quychephucvukhachhang'.'.php',
		'ds_quychephucvukhachhang'=>$basUrl_admin_quychephucvukhachhang.'ds_quychephucvukhachhang'.'.php',
		'update_quychephucvukhachhang'=>$basUrl_admin_quychephucvukhachhang.'update_quychephucvukhachhang'.'.php',
	);
	$basUrl_admin_rinnai = HTTPS_SERVER_ADMIN."default/module/rinnai/";
	$page_admin_rinnai = array(
		'add_rinnai'=>$basUrl_admin_rinnai.'add_rinnai'.'.php',
		'ds_rinnai'=>$basUrl_admin_rinnai.'ds_rinnai'.'.php',
		'update_rinnai'=>$basUrl_admin_rinnai.'update_rinnai'.'.php',
	);
	$basUrl_admin_rongviet = HTTPS_SERVER_ADMIN."default/module/rongviet/";
	$page_admin_rongviet = array(
		'add_rongviet'=>$basUrl_admin_rongviet.'add_rongviet'.'.php',
		'ds_rongviet'=>$basUrl_admin_rongviet.'ds_rongviet'.'.php',
		'update_rongviet'=>$basUrl_admin_rongviet.'update_rongviet'.'.php',
	);
	$basUrl_admin_slideshow_index = HTTPS_SERVER_ADMIN."default/module/slideshow_index/";
	$page_admin_slideshow_index = array(
		'add_slideshow_index'=>$basUrl_admin_slideshow_index.'add_slideshow_index'.'.php',
		'ds_slideshow_index'=>$basUrl_admin_slideshow_index.'ds_slideshow_index'.'.php',
		'update_slideshow_index'=>$basUrl_admin_slideshow_index.'update_slideshow_index'.'.php',
		'coppy_slideshow_index'=>$basUrl_admin_slideshow_index.'coppy_slideshow_index'.'.php',
		'delete_slideshow_index'=>$basUrl_admin_slideshow_index.'delete_slideshow_index'.'.php',
	);
	$basUrl_admin_slideshow_index_nguoidung = HTTPS_SERVER_ADMIN."default/module/slideshow_index_nguoidung/";
	$page_admin_slideshow_index_nguoidung = array(
		'add_slideshow_index_nguoidung'=>$basUrl_admin_slideshow_index_nguoidung.'add_slideshow_index_nguoidung'.'.php',
		'ds_slideshow_index_nguoidung'=>$basUrl_admin_slideshow_index_nguoidung.'ds_slideshow_index_nguoidung'.'.php',
		'update_slideshow_index_nguoidung'=>$basUrl_admin_slideshow_index_nguoidung.'update_slideshow_index_nguoidung'.'.php',
		'coppy_slideshow_index_nguoidung'=>$basUrl_admin_slideshow_index_nguoidung.'coppy_slideshow_index_nguoidung'.'.php',
		'delete_slideshow_index_nguoidung'=>$basUrl_admin_slideshow_index_nguoidung.'delete_slideshow_index_nguoidung'.'.php',
	);
	$basUrl_admin_raovat_vip = HTTPS_SERVER_ADMIN."default/module/raovat_vip/";
	$page_admin_raovat_vip = array(
		'add_raovat_vip'=>$basUrl_admin_raovat_vip.'add_raovat_vip'.'.php',
		'ds_raovat_vip'=>$basUrl_admin_raovat_vip.'ds_raovat_vip'.'.php',
		'update_raovat_vip'=>$basUrl_admin_raovat_vip.'update_raovat_vip'.'.php',
		'coppy_raovat_vip'=>$basUrl_admin_raovat_vip.'coppy_raovat_vip'.'.php',
		'delete_raovat_vip'=>$basUrl_admin_raovat_vip.'delete_raovat_vip'.'.php',
	);
	$basUrl_admin_raovat_thuong = HTTPS_SERVER_ADMIN."default/module/raovat_thuong/";
	$page_admin_raovat_thuong = array(
		'add_raovat_thuong'=>$basUrl_admin_raovat_thuong.'add_raovat_thuong'.'.php',
		'ds_raovat_thuong'=>$basUrl_admin_raovat_thuong.'ds_raovat_thuong'.'.php',
		'update_raovat_thuong'=>$basUrl_admin_raovat_thuong.'update_raovat_thuong'.'.php',
		'coppy_raovat_thuong'=>$basUrl_admin_raovat_thuong.'coppy_raovat_thuong'.'.php',
		'delete_raovat_thuong'=>$basUrl_admin_raovat_thuong.'delete_raovat_thuong'.'.php',
	);
	$basUrl_admin_raovat_vip_nguoidung = HTTPS_SERVER_ADMIN."default/module/raovat_vip_nguoidung/";
	$page_admin_raovat_vip_nguoidung = array(
		'add_raovat_vip_nguoidung'=>$basUrl_admin_raovat_vip_nguoidung.'add_raovat_vip_nguoidung'.'.php',
		'ds_raovat_vip_nguoidung'=>$basUrl_admin_raovat_vip_nguoidung.'ds_raovat_vip_nguoidung'.'.php',
		'update_raovat_vip_nguoidung'=>$basUrl_admin_raovat_vip_nguoidung.'update_raovat_vip_nguoidung'.'.php',
		'coppy_raovat_vip_nguoidung'=>$basUrl_admin_raovat_vip_nguoidung.'coppy_raovat_vip_nguoidung'.'.php',
		'delete_raovat_vip_nguoidung'=>$basUrl_admin_raovat_vip_nguoidung.'delete_raovat_vip_nguoidung'.'.php',
	);
	$basUrl_admin_raovat_thuong_nguoidung = HTTPS_SERVER_ADMIN."default/module/raovat_thuong_nguoidung/";
	$page_admin_raovat_thuong_nguoidung = array(
		'add_raovat_thuong_nguoidung'=>$basUrl_admin_raovat_thuong_nguoidung.'add_raovat_thuong_nguoidung'.'.php',
		'ds_raovat_thuong_nguoidung'=>$basUrl_admin_raovat_thuong_nguoidung.'ds_raovat_thuong_nguoidung'.'.php',
		'update_raovat_thuong_nguoidung'=>$basUrl_admin_raovat_thuong_nguoidung.'update_raovat_thuong_nguoidung'.'.php',
		'coppy_raovat_thuong_nguoidung'=>$basUrl_admin_raovat_thuong_nguoidung.'coppy_raovat_thuong_nguoidung'.'.php',
		'delete_raovat_thuong_nguoidung'=>$basUrl_admin_raovat_thuong_nguoidung.'delete_raovat_thuong_nguoidung'.'.php',
	);
	$basUrl_admin_quangcao_menu = HTTPS_SERVER_ADMIN."default/module/quangcao_menu/";
	$page_admin_quangcao_menu = array(
		'add_quangcao_menu'=>$basUrl_admin_quangcao_menu.'add_quangcao_menu'.'.php',
		'ds_quangcao_menu'=>$basUrl_admin_quangcao_menu.'ds_quangcao_menu'.'.php',
		'update_quangcao_menu'=>$basUrl_admin_quangcao_menu.'update_quangcao_menu'.'.php',
		'coppy_quangcao_menu'=>$basUrl_admin_quangcao_menu.'coppy_quangcao_menu'.'.php',
		'delete_quangcao_menu'=>$basUrl_admin_quangcao_menu.'delete_quangcao_menu'.'.php',
	);
	$basUrl_admin_quangcao_khuyenmai = HTTPS_SERVER_ADMIN."default/module/quangcao_khuyenmai/";
	$page_admin_quangcao_khuyenmai = array(
		'add_quangcao_khuyenmai'=>$basUrl_admin_quangcao_khuyenmai.'add_quangcao_khuyenmai'.'.php',
		'ds_quangcao_khuyenmai'=>$basUrl_admin_quangcao_khuyenmai.'ds_quangcao_khuyenmai'.'.php',
		'update_quangcao_khuyenmai'=>$basUrl_admin_quangcao_khuyenmai.'update_quangcao_khuyenmai'.'.php',
		'coppy_quangcao_khuyenmai'=>$basUrl_admin_quangcao_khuyenmai.'coppy_quangcao_khuyenmai'.'.php',
		'delete_quangcao_khuyenmai'=>$basUrl_admin_quangcao_khuyenmai.'delete_quangcao_khuyenmai'.'.php',
	);
	$basUrl_admin_slideshow_khuyenmai = HTTPS_SERVER_ADMIN."default/module/slideshow_khuyenmai/";
	$page_admin_slideshow_khuyenmai = array(
		'add_slideshow_khuyenmai'=>$basUrl_admin_slideshow_khuyenmai.'add_slideshow_khuyenmai'.'.php',
		'ds_slideshow_khuyenmai'=>$basUrl_admin_slideshow_khuyenmai.'ds_slideshow_khuyenmai'.'.php',
		'update_slideshow_khuyenmai'=>$basUrl_admin_slideshow_khuyenmai.'update_slideshow_khuyenmai'.'.php',
		'coppy_slideshow_khuyenmai'=>$basUrl_admin_slideshow_khuyenmai.'coppy_slideshow_khuyenmai'.'.php',
		'delete_slideshow_khuyenmai'=>$basUrl_admin_slideshow_khuyenmai.'delete_slideshow_khuyenmai'.'.php',
	);
	$basUrl_admin_quangcao_chinh = HTTPS_SERVER_ADMIN."default/module/quangcao_chinh/";
	$page_admin_quangcao_chinh = array(
		'add_quangcao_chinh'=>$basUrl_admin_quangcao_chinh.'add_quangcao_chinh'.'.php',
		'ds_quangcao_chinh'=>$basUrl_admin_quangcao_chinh.'ds_quangcao_chinh'.'.php',
		'update_quangcao_chinh'=>$basUrl_admin_quangcao_chinh.'update_quangcao_chinh'.'.php',
		'coppy_quangcao_chinh'=>$basUrl_admin_quangcao_chinh.'coppy_quangcao_chinh'.'.php',
		'delete_quangcao_chinh'=>$basUrl_admin_quangcao_chinh.'delete_quangcao_chinh'.'.php',
	);
	$basUrl_admin_quangcao_loaisanpham = HTTPS_SERVER_ADMIN."default/module/quangcao_loaisanpham/";
	$page_admin_quangcao_loaisanpham = array(
		'add_quangcao_loaisanpham'=>$basUrl_admin_quangcao_loaisanpham.'add_quangcao_loaisanpham'.'.php',
		'ds_quangcao_loaisanpham'=>$basUrl_admin_quangcao_loaisanpham.'ds_quangcao_loaisanpham'.'.php',
		'update_quangcao_loaisanpham'=>$basUrl_admin_quangcao_loaisanpham.'update_quangcao_loaisanpham'.'.php',
		'coppy_quangcao_loaisanpham'=>$basUrl_admin_quangcao_loaisanpham.'coppy_quangcao_loaisanpham'.'.php',
		'delete_quangcao_loaisanpham'=>$basUrl_admin_quangcao_loaisanpham.'delete_quangcao_loaisanpham'.'.php',
	);
	$basUrl_admin_quangcao_slideshow_loaisanpham = HTTPS_SERVER_ADMIN."default/module/quangcao_slideshow_loaisanpham/";
	$page_admin_quangcao_slideshow_loaisanpham = array(
		'add_quangcao_slideshow_loaisanpham'=>$basUrl_admin_quangcao_slideshow_loaisanpham.'add_quangcao_slideshow_loaisanpham'.'.php',
		'ds_quangcao_slideshow_loaisanpham'=>$basUrl_admin_quangcao_slideshow_loaisanpham.'ds_quangcao_slideshow_loaisanpham'.'.php',
		'update_quangcao_slideshow_loaisanpham'=>$basUrl_admin_quangcao_slideshow_loaisanpham.'update_quangcao_slideshow_loaisanpham'.'.php',
		'coppy_quangcao_slideshow_loaisanpham'=>$basUrl_admin_quangcao_slideshow_loaisanpham.'coppy_quangcao_slideshow_loaisanpham'.'.php',
		'delete_quangcao_slideshow_loaisanpham'=>$basUrl_admin_quangcao_slideshow_loaisanpham.'delete_quangcao_slideshow_loaisanpham'.'.php',
	);
	$basUrl_admin_doitacngoai = HTTPS_SERVER_ADMIN."default/module/doitacngoai/";
	$page_admin_doitacngoai = array(
		'add_doitacngoai'=>$basUrl_admin_doitacngoai.'add_doitacngoai'.'.php',
		'ds_doitacngoai'=>$basUrl_admin_doitacngoai.'ds_doitacngoai'.'.php',
		'update_doitacngoai'=>$basUrl_admin_doitacngoai.'update_doitacngoai'.'.php',
		'coppy_doitacngoai'=>$basUrl_admin_doitacngoai.'coppy_doitacngoai'.'.php',
		'delete_doitacngoai'=>$basUrl_admin_doitacngoai.'delete_doitacngoai'.'.php',
	);
	$basUrl_admin_taikhoan_admin = HTTPS_SERVER_ADMIN."default/module/taikhoan_admin/";
	$page_admin_taikhoan_admin = array(
		'add_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'add_taikhoan_admin'.'.php',
		'ds_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'ds_taikhoan_admin'.'.php',
		'update_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'update_taikhoan_admin'.'.php',
		'reset_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'reset_taikhoan_admin'.'.php',
		'delete_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'delete_taikhoan_admin'.'.php',
		'coppy_taikhoan_admin'=>$basUrl_admin_taikhoan_admin.'coppy_taikhoan_admin'.'.php',
	);
	$basUrl_admin_taikhoan_nguoidung = HTTPS_SERVER_ADMIN."default/module/taikhoan_nguoidung/";
	$page_admin_taikhoan_nguoidung = array(
		'add_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'add_taikhoan_nguoidung'.'.php',
		'ds_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'ds_taikhoan_nguoidung'.'.php',
		'update_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'update_taikhoan_nguoidung'.'.php',
		'coppy_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'coppy_taikhoan_nguoidung'.'.php',
		'delete_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'delete_taikhoan_nguoidung'.'.php',
		'reset_taikhoan_nguoidung'=>$basUrl_admin_taikhoan_nguoidung.'reset_taikhoan_nguoidung'.'.php',
	
		'add_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'add_taikhoan_nguoidung_TT'.'.php',
		'ds_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'ds_taikhoan_nguoidung_TT'.'.php',
		'update_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'update_taikhoan_nguoidung_TT'.'.php',
		'coppy_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'coppy_taikhoan_nguoidung_TT'.'.php',
		'delete_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'delete_taikhoan_nguoidung_TT'.'.php',
		'reset_taikhoan_nguoidung_TT'=>$basUrl_admin_taikhoan_nguoidung.'reset_taikhoan_nguoidung_TT'.'.php',
	
		'add_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'add_taikhoan_nguoidung_KH'.'.php',
		'ds_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'ds_taikhoan_nguoidung_KH'.'.php',
		'update_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'update_taikhoan_nguoidung_KH'.'.php',
		'coppy_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'coppy_taikhoan_nguoidung_KH'.'.php',
		'delete_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'delete_taikhoan_nguoidung_KH'.'.php',
		'reset_taikhoan_nguoidung_KH'=>$basUrl_admin_taikhoan_nguoidung.'reset_taikhoan_nguoidung_KH'.'.php',
	);
	$basUrl_admin_thongtincongty = HTTPS_SERVER_ADMIN."default/module/thongtincongty/";
	$page_admin_thongtincongty = array(
		'add_thongtincongty'=>$basUrl_admin_thongtincongty.'add_thongtincongty'.'.php',
		'ds_thongtincongty'=>$basUrl_admin_thongtincongty.'ds_thongtincongty'.'.php',
		'update_thongtincongty'=>$basUrl_admin_thongtincongty.'update_thongtincongty'.'.php',
	);
	$basUrl_admin_thongtinsanpham = HTTPS_SERVER_ADMIN."default/module/thongtinmonan/";
	$page_admin_thongtinmonan = array(
		'add_thongtinmonan'=>$basUrl_admin_thongtinsanpham.'add_thongtinmonan'.'.php',
		'ds_thongtinmonan'=>$basUrl_admin_thongtinsanpham.'ds_thongtinmonan'.'.php',
		'update_thongtinmonan'=>$basUrl_admin_thongtinsanpham.'update_thongtinmonan'.'.php',
		'coppy_thongtinmonan'=>$basUrl_admin_thongtinsanpham.'coppy_thongtinmonan'.'.php',
		'delete_thongtinmonan'=>$basUrl_admin_thongtinsanpham.'delete_thongtinmonan'.'.php',
	
		'add_thongtinsanpham_khuyenmai'=>$basUrl_admin_thongtinsanpham.'add_thongtinsanpham_khuyenmai'.'.php',
		'ds_thongtinsanpham_khuyenmai'=>$basUrl_admin_thongtinsanpham.'ds_thongtinsanpham_khuyenmai'.'.php',
		'update_thongtinsanpham_khuyenmai'=>$basUrl_admin_thongtinsanpham.'update_thongtinsanpham_khuyenmai'.'.php',
		'coppy_thongtinsanpham_khuyenmai'=>$basUrl_admin_thongtinsanpham.'coppy_thongtinsanpham_khuyenmai'.'.php',
		'delete_thongtinsanpham_khuyenmai'=>$basUrl_admin_thongtinsanpham.'delete_thongtinsanpham_khuyenmai'.'.php',
	
		'add_thongtinsanpham_phutung'=>$basUrl_admin_thongtinsanpham.'add_thongtinsanpham_phutung'.'.php',
		'ds_thongtinsanpham_phutung'=>$basUrl_admin_thongtinsanpham.'ds_thongtinsanpham_phutung'.'.php',
		'update_thongtinsanpham_phutung'=>$basUrl_admin_thongtinsanpham.'update_thongtinsanpham_phutung'.'.php',
		'coppy_thongtinsanpham_phutung'=>$basUrl_admin_thongtinsanpham.'coppy_thongtinsanpham_phutung'.'.php',
		'delete_thongtinsanpham_phutung'=>$basUrl_admin_thongtinsanpham.'delete_thongtinsanpham_phutung'.'.php',
	);
	$basUrl_admin_tuyendung = HTTPS_SERVER_ADMIN."default/module/tuyendung/";
	$page_admin_tuyendung = array(
		'add_tuyendung'=>$basUrl_admin_tuyendung.'add_tuyendung'.'.php',
		'ds_tuyendung'=>$basUrl_admin_tuyendung.'ds_tuyendung'.'.php',
		'update_tuyendung'=>$basUrl_admin_tuyendung.'update_tuyendung'.'.php',
	);
	$basUrl_admin_video = HTTPS_SERVER_ADMIN."default/module/video/";
	$page_admin_video = array(
		'add_video'=>$basUrl_admin_video.'add_video'.'.php',
		'ds_video'=>$basUrl_admin_video.'ds_video'.'.php',
		'update_video'=>$basUrl_admin_video.'update_video'.'.php',
		'coppy_video'=>$basUrl_admin_video.'coppy_video'.'.php',
		'delete_video'=>$basUrl_admin_video.'delete_video'.'.php',
	);
	$basUrl_admin_lienhekhachhang = HTTPS_SERVER_ADMIN."default/module/lienhekhachhang/";
	$page_admin_lienhekhachhang = array(
		'add_lienhekhachhang'=>$basUrl_admin_lienhekhachhang.'add_lienhekhachhang'.'.php',
		'ds_lienhekhachhang'=>$basUrl_admin_lienhekhachhang.'ds_lienhekhachhang'.'.php',
		'update_lienhekhachhang'=>$basUrl_admin_lienhekhachhang.'update_lienhekhachhang'.'.php',
		'coppy_lienhekhachhang'=>$basUrl_admin_lienhekhachhang.'coppy_lienhekhachhang'.'.php',
		'delete_lienhekhachhang'=>$basUrl_admin_lienhekhachhang.'delete_lienhekhachhang'.'.php',
	);
	
	//Khoi tao cac table trong csdl
	//Table csdl dt_baiviettuyendung
	$dt_baiviettuyendung = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_tuyendung','vi_tri'
	);
	$dt_baiviettuyendung_position = array(
		'#id','vi_tri'
	);
	$dt_baiviettuyendung_delete = array(
		'#id','#id_tuyendung'
	);
	//Table csdl dt_hoatdongxahoi
	$dt_hoatdongxahoi = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_tuyendung','vi_tri'
	);
	$dt_hoatdongxahoi_position = array(
		'#id','vi_tri'
	);
	$dt_hoatdongxahoi_delete = array(
		'#id','#id_tuyendung'
	);
	//Table csdl dt_bangiamdocrongviet
	$dt_bangiamdocrongviet = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_bangiamdocrongviet_position = array(
		'#id','vi_tri'
	);
	$dt_bangiamdocrongviet_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_catalog
	$dt_catalog = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_tuvansanpham','so_trang','so_trang_en'
	);
	$dt_catalog_position = array(
		'#id','vi_tri'
	);
	$dt_catalog_delete = array(
		'#id','#id_tuvansanpham'
	);
	//Table csdl dt_chitietgiohang
	$dt_chitietgiohang = array(
		'#id','@ten_sanpham','anh_dai_dien',
		'gia_sanpham','so_luong','gia_sanpham_en',
		'id_sanpham','id_giohang'
	);
	$dt_chitietgiohang_position = array(
		'#id','vi_tri'
	);
	$dt_chitietgiohang_delete = array(
		'#id','#id_tuvansanpham'
	);
	//Table csdl dt_donvisanpham
	$dt_donvisanpham = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'@tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_donvisanpham_position = array(
		'#id','vi_tri'
	);
	$dt_donvisanpham_delete = array(
		'#id'
	);
	//Table csdl dt_donvitiente
	$dt_donvitiente = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_donvitiente_position = array(
		'#id','vi_tri'
	);
	$dt_donvitiente_delete = array(
		'#id'
	);
	//Table csdl dt_khoanggia
	$dt_khoanggia = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_khoanggia_position = array(
		'#id','vi_tri'
	);
	$dt_khoanggia_delete = array(
		'#id'
	);
	//Table csdl dt_chitietthongso
	$dt_chitietthongso = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','id_thongso'
	);
	$dt_chitietthongso_position = array(
		'#id','vi_tri'
	);
	$dt_chitietthongso_delete = array(
		'#id'
	);
	//Table csdl dt_province
	$dt_province = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai'
	);
	$dt_province_position = array(
		'#id','vi_tri'
	);
	$dt_province_delete = array(
		'#id'
	);
	//Table csdl dt_mausac
	$dt_mausac = array(
		'#id','@tieu_de','anh_dai_dien','anh_dai_dien_check','ghi_chu','vi_tri','trang_thai'
	);
	$dt_mausac_position = array(
		'#id','vi_tri'
	);
	$dt_mausac_delete = array(
		'#id'
	);
	//Table csdl dt_quangcao_header
	$dt_quangcao_header = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','link_lienket'
	);
	$dt_quangcao_header_position = array(
		'#id','vi_tri'
	);
	$dt_quangcao_header_delete = array(
		'#id'
	);
	//Table csdl dt_quangcao_content
	$dt_quangcao_content = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','link_lienket'
	);
	$dt_quangcao_content_position = array(
		'#id','vi_tri'
	);
	$dt_quangcao_content_delete = array(
		'#id'
	);
	//Table csdl dt_quangcao_sub
	$dt_quangcao_sub = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','link_lienket'
	);
	$dt_quangcao_sub_position = array(
		'#id','vi_tri'
	);
	$dt_quangcao_sub_delete = array(
		'#id'
	);
	//Table csdl dt_quangcao_linhvuc
	$dt_quangcao_linhvuc = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','link_lienket','nhom_tructhuoc'
	);
	$dt_quangcao_linhvuc_position = array(
		'#id','vi_tri'
	);
	$dt_quangcao_linhvuc_delete = array(
		'#id'
	);
	//Table csdl dt_district
	$dt_district = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','location','provinceid'
	);
	$dt_district_position = array(
		'#id','vi_tri'
	);
	$dt_district_delete = array(
		'#id'
	);
	//Table csdl dt_ward
	$dt_ward = array(
		'#id','@tieu_de','anh_dai_dien','ghi_chu','vi_tri','trang_thai','location','districtid'
	);
	$dt_ward_position = array(
		'#id','vi_tri'
	);
	$dt_ward_delete = array(
		'#id'
	);
	//Table csdl dt_soluoccongty
	$dt_soluoccongty = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_soluoccongty_position = array(
		'#id','vi_tri'
	);
	$dt_soluoccongty_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_gockythuat
	$dt_gockythuat = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_tuvansanpham','vi_tri'
	);
	$dt_gockythuat_position = array(
		'#id','vi_tri'
	);
	$dt_gockythuat_delete = array(
		'#id','#id_tuvansanpham'
	);
	
	//Table csdl dt_hoivadap
	$dt_hoivadap = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_ttchamsockhachhang','vi_tri'
	);
	$dt_hoivadap_position = array(
		'#id','vi_tri'
	);
	$dt_hoivadap_delete = array(
		'#id','#id_ttchamsockhachhang'
	);
	//Table csdl dt_huongdansudung
	$dt_huongdansudung = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_ttchamsockhachhang'
	);
	$dt_huongdansudung_position = array(
		'#id','vi_tri'
	);
	$dt_huongdansudung_delete = array(
		'#id','#id_ttchamsockhachhang'
	);
	//Table csdl dt_lichsucongty
	$dt_lichsucongty = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_lichsucongty_position = array(
		'#id','vi_tri'
	);
	$dt_lichsucongty_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_lienhe
	$dt_lienhe = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_lienhe','vi_tri'
	);
	$dt_lienhe_position = array(
		'#id','vi_tri'
	);
	$dt_lienhe_delete = array(
		'#id','#id_lienhe'
	);
	//Table csdl dt_lienketngoai
	$dt_lienketngoai = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_lienketngoai_position = array(
		'#id','vi_tri'
	);
	$dt_lienketngoai_delete = array(
		'#id'
	);
	//Table csdl dt_quangcaochinh
	$dt_quangcaochinh = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','ngay_batdau','ngay_hethan','gia_ngay','tong_gia','id_gia','vi_tri_hienthi','loai_slideshow','id_nguoitao','id_nguoidung'
	);
	$dt_quangcaochinh_position = array(
		'#id','vi_tri'
	);
	$dt_quangcaochinh_delete = array(
		'#id'
	);
	//Table csdl dt_quangcaophu
	$dt_quangcaophu = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_quangcaophu_position = array(
		'#id','vi_tri'
	);
	$dt_quangcaophu_delete = array(
		'#id'
	);
	//Table csdl dt_chucnang
	$dt_chucnang = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_chucnang_position = array(
		'#id','vi_tri'
	);
	$dt_chucnang_delete = array(
		'#id'
	);
	//Table csdl dt_lienhekhachhang
	$dt_lienhekhachhang = array(
		'#id','@ho_ten','email','so_dien_thoai',
		'noi_dung','ngay_gui','trang_thai',
		'ghi_chu'
	);
	$dt_lienhekhachhang_position = array(
		'#id','vi_tri'
	);
	$dt_lienhekhachhang_delete = array(
		'#id'
	);
	//Table csdl dt_dacdiem
	$dt_dacdiem = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_dacdiem_position = array(
		'#id','vi_tri'
	);
	$dt_dacdiem_delete = array(
		'#id'
	);
	//Table csdl dt_loaisanpham
	$dt_loaisanpham = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4','ghi_chu5','ghi_chu6','ghi_chu7','ghi_chu8',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_loaisanpham_position = array(
		'#id','vi_tri'
	);
	$dt_loaisanpham_delete = array(
		'#id'
	);
	//Table csdl dt_nhomvideo
	$dt_nhomvideo = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_nhomvideo_position = array(
		'#id','vi_tri'
	);
	$dt_nhomvideo_delete = array(
		'#id'
	);
	//Table csdl dt_nhomtintuc
	$dt_nhomtintuc = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_nhomtintuc_position = array(
		'#id','vi_tri'
	);
	$dt_nhomtintuc_delete = array(
		'#id'
	);
	//Table csdl dt_chitietloaisanpham
	$dt_chitietloaisanpham = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4','ghi_chu5',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_chitietloaisanpham_position = array(
		'#id','vi_tri'
	);
	$dt_chitietloaisanpham_delete = array(
		'#id'
	);
	//Table csdl dt_binhluan
	$dt_binhluan = array(
		'#id','@ip','@id_raovat','ma_raovat','ho_ten',
		'noi_dung','noi_dung_phan_hoi','thoi_gian_gui',
		'thoi_gian_phan_hoi','ip_phan_hoi','trang_thai','ghi_chu','id_loailinhvuc'
	);
	$dt_binhluan_position = array(
		'#id'
	);
	$dt_binhluan_delete = array(
		'#id'
	);
	//Table csdl dt_binhluantintuc
	$dt_binhluantintuc = array(
		'#id','@ip','@id_raovat','ma_raovat','ho_ten',
		'noi_dung','noi_dung_phan_hoi','thoi_gian_gui',
		'thoi_gian_phan_hoi','ip_phan_hoi','trang_thai','ghi_chu','id_loailinhvuc'
	);
	$dt_binhluantintuc_position = array(
		'#id'
	);
	$dt_binhluantintuc_delete = array(
		'#id'
	);
	//Table csdl dt_thongtinlienhe
	$dt_thongtinlienhe = array(
		'#id','@ip','@ho_ten','dia_chi','so_dien_thoai',
		'email','noi_dung','ngay_gui','ngay_duyet','trang_thai','ghi_chu'
	);
	$dt_thongtinlienhe_position = array(
		'#id'
	);
	$dt_thongtinlienhe_delete = array(
		'#id'
	);
	//Table csdl dt_giohang
	$dt_giohang = array(
		'#id','@ip','anh_dai_dien','@ho_ten','dia_chi','so_dien_thoai',
		'email','so_luong','gia_sanpham','id_loailinhvuc','id_sanpham','ma_sanpham','ten_sanpham',
		'khuyen_mai','ngay_gui','ngay_duyet','mau_sac','phuong_thuc','trang_thai'
	);
	$dt_giohang_update = array(
		'#id','@ho_ten','dia_chi','so_dien_thoai',
		'email','so_luong','gia_sanpham','khuyen_mai','ngay_duyet','mau_sac','phuong_thuc','trang_thai'
	);
	$dt_giohang_position = array(
		'#id'
	);
	$dt_giohang_delete = array(
		'#id'
	);
	//Table csdl dt_binhluanvideo
	$dt_binhluanvideo = array(
		'#id','@ip','@id_raovat','ma_raovat','ho_ten',
		'noi_dung','noi_dung_phan_hoi','thoi_gian_gui',
		'thoi_gian_phan_hoi','ip_phan_hoi','trang_thai','ghi_chu','id_loailinhvuc'
	);
	$dt_binhluanvideo_position = array(
		'#id'
	);
	$dt_binhluanvideo_delete = array(
		'#id'
	);
	//Table csdl dt_binhsanpham
	$dt_binhsanpham = array(
		'#id','@ip','@id_raovat','ma_raovat','ho_ten',
		'noi_dung','noi_dung_phan_hoi','thoi_gian_gui',
		'thoi_gian_phan_hoi','ip_phan_hoi','trang_thai','ghi_chu','id_loailinhvuc'
	);
	$dt_binhsanpham_position = array(
		'#id'
	);
	$dt_binhsanpham_delete = array(
		'#id'
	);
	//Table csdl dt_hangsanxuat
	$dt_hangsanxuat = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_hangsanxuat_position = array(
		'#id','vi_tri'
	);
	$dt_hangsanxuat_delete = array(
		'#id'
	);
	//Table csdl dt_nhomsanpham
	$dt_nhomsanpham = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_nhomsanpham_position = array(
		'#id','vi_tri'
	);
	$dt_nhomsanpham_delete = array(
		'#id'
	);
	//Table csdl dt_tinhnang
	$dt_tinhnang = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_tinhnang_position = array(
		'#id','vi_tri'
	);
	$dt_tinhnang_delete = array(
		'#id'
	);
	//Table csdl dt_thongsokythuat
	$dt_thongsokythuat = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_thongsokythuat_position = array(
		'#id','vi_tri'
	);
	$dt_thongsokythuat_delete = array(
		'#id'
	);
	//Table csdl dt_hedieuhanh
	$dt_hedieuhanh = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_hedieuhanh_position = array(
		'#id','vi_tri'
	);
	$dt_hedieuhanh_delete = array(
		'#id'
	);
	//Table csdl dt_slideshow_loaisanpham
	$dt_slideshow_loaisanpham = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_slideshow_loaisanpham_position = array(
		'#id','vi_tri'
	);
	$dt_slideshow_loaisanpham_delete = array(
		'#id'
	);
	//Table csdl dt_nhacungcap
	$dt_nhacungcap = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham'
	);
	$dt_nhacungcap_position = array(
		'#id','vi_tri'
	);
	$dt_nhacungcap_delete = array(
		'#id'
	);
	//Table csdl dt_linhvuchoatdong
	$dt_linhvuchoatdong = array(
		'#id','@ma','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham','anh_dai_dien_km'
	);
	$dt_linhvuchoatdong_position = array(
		'#id','vi_tri'
	);
	$dt_linhvuchoatdong_delete = array(
		'#id'
	);
	//Table csdl dt_slideshow_index_quydinh
	$dt_slideshow_index_quydinh = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai','loai_loaisanpham','gia_vitri','ngay_batdau','ngay_ketthuc'
	);
	$dt_slideshow_index_quydinh_position = array(
		'#id','vi_tri'
	);
	$dt_slideshow_index_quydinh_delete = array(
		'#id'
	);
	//Table csdl dt_mangluoibaohanh
	$dt_mangluoibaohanh = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_ttchamsockhachhang','vi_tri','link_lienket','link_lienket_en'
	);
	$dt_mangluoibaohanh_position = array(
		'#id','vi_tri'
	);
	$dt_mangluoibaohanh_delete = array(
		'#id','#id_ttchamsockhachhang'
	);
	//Table csdl dt_menumain
	$dt_menumain = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en'
	);
	$dt_menumain_position = array(
		'#id','vi_tri'
	);
	$dt_menumain_delete = array(
		'#id'
	);
	//Table csdl dt_menu_ctkhuyenmai
	$dt_menu_ctkhuyenmai = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_menu_ctkhuyenmai_position = array(
		'#id','vi_tri'
	);
	$dt_menu_ctkhuyenmai_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_index
	$dt_menu_index = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_menu_index_position = array(
		'#id','vi_tri'
	);
	$dt_menu_index_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_lienhe
	$dt_menu_lienhe = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_menu_lienhe_position = array(
		'#id','vi_tri'
	);
	$dt_menu_lienhe_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_sanpham
	$dt_menu_sanpham = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_menu_sanpham_position = array(
		'#id','vi_tri'
	);
	$dt_menu_sanpham_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_tintuc_rinnai_rongviet
	$dt_menu_tintuc_rinnai_rongviet = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_menu_tintuc_rinnai_rongviet_position = array(
		'#id','vi_tri'
	);
	$dt_menu_tintuc_rinnai_rongviet_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl video 
	$dt_video  = array(
		'#id','@tieu_de','tieu_de_khog_dau','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_video_position = array(
		'#id','vi_tri'
	);
	$dt_video_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_ttchamsockh
	$dt_menu_ttchamsockh = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_menu_ttchamsockh_position = array(
		'#id','vi_tri'
	);
	$dt_menu_ttchamsockh_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_menu_tuvansanpham
	$dt_menu_tuvansanpham = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_menu_tuvansanpham_position = array(
		'#id','vi_tri'
	);
	$dt_menu_tuvansanpham_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_ngonngu
	
	$dt_ngonngu = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_ngonngu_position = array(
		'#id','vi_tri'
	);
	$dt_ngonngu_delete = array(
		'#id'
	);
	//Table csdl dt_phutung
	$dt_phutung = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_ttchamsockhachhang'
	);
	$dt_phutung_position = array(
		'#id','vi_tri'
	);
	$dt_phutung_delete = array(
		'#id','#id_ttchamsockhachhang'
	);
	//Table csdl dt_quangcao
	$dt_quangcao = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai'
	);
	$dt_quangcao_position = array(
		'#id','vi_tri'
	);
	$dt_quangcao_delete = array(
		'#id'
	);
	
	//Table csdl dt_quychephucvukhachhang
	$dt_quychephucvukhachhang = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_ttchamsockhachhang'
	);
	$dt_quychephucvukhachhang_position = array(
		'#id','vi_tri'
	);
	$dt_quychephucvukhachhang_delete = array(
		'#id','#id_ttchamsockhachhang'
	);
	//Table csdl dt_rinnai
	$dt_rinnai = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_rinnai_position = array(
		'#id','vi_tri'
	);
	$dt_rinnai_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_rongviet
	$dt_rongviet = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_rongviet_position = array(
		'#id','vi_tri'
	);
	$dt_rongviet_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_slideshow_index
	$dt_slideshow_index_admin = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'@tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai',
		'id_sanpham','id_tintuc','ngay_batdau','ngay_hethan','gia_ngay','tong_gia','id_gia','vi_tri_hienthi','loai_slideshow','id_nguoitao','id_nguoidung'
	);
	$dt_slideshow_index_nguoidung = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'@tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai',
		'id_sanpham','id_tintuc','ngay_batdau','ngay_hethan','gia_ngay','tong_gia','id_gia','vi_tri_hienthi','loai_slideshow','id_nguoitao','id_nguoidung'
	);
	$dt_slideshow_index_position = array(
		'#id','vi_tri'
	);
	$dt_slideshow_index_delete = array(
		'#id','id_sanpham','id_tintuc'
	);
	//Table csdl dt_doitacngoai
	
	$dt_doitacngoai = array(
		'#id','@tieu_de','anh_dai_dien','link_lienket',
		'@tieu_de_en','anh_dai_dien_en','link_lienket_en',
		'seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'vi_tri','trang_thai',
		'id_sanpham','id_tintuc'
	);
	$dt_doitacngoai_position = array(
		'#id','vi_tri'
	);
	$dt_doitacngoai_delete = array(
		'#id','id_sanpham','id_tintuc'
	);
	
	//Table csdl dt_taikhoan_admin
	$dt_taikhoan_admin = array(
		'#id','@ho_ten','@tai_khoan','mat_khau','dia_chi','email','so_dien_thoai','gioi_tinh','nam_sinh',
		'trinh_do','chuc_vu','quyen_han','trang_thai','ghi_chu','bi_danh'
	);
	$dt_taikhoan_admin_update = array(
		'#id', '@ho_ten','dia_chi', 'email','so_dien_thoai','trang_thai','ghi_chu','bi_danh','quyen_han'
	);
	$dt_taikhoan_admin_position = array(
		'#id'
	);
	$dt_taikhoan_admin_delete = array(
		'#id'
	);
	//Table csdl dt_taikhoan_nguoidung
	$dt_taikhoan_nguoidung = array(
		'#id','@ho_ten','@tai_khoan','@mat_khau','anh_dai_dien',
		'gioi_tinh','nam_sinh','noi_sinh','dia_chi','email','facebook',
		'skype','yahoo','so_dien_thoai_1','so_dien_thoai_2','ma_xac_nhan_1','ma_xac_nhan_2','ma_xac_nhan_3',
		'cau_hoi_bi_mat','cau_tra_loi','ngay_dang_ki','ngay_tao','ngay_duyet','nguoi_gioi_thieu','trang_thai',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4','loai_tai_khoan','cmnd_thecancuoc'
	);
	$dt_taikhoan_nguoidung_update = array(
		'#id', '@ho_ten','dia_chi', 'so_dien_thoai_1','email','trang_thai','ghi_chu1'
	);
	$dt_taikhoan_nguoidung_changepassword = array(
		'#id', '@mat_khau'
	);
	$dt_taikhoan_nguoidung_changedoipasword = array(
		'#id', '@doi_mat_khau'
	);
	$dt_taikhoan_nguoidung_position = array(
		'#id'
	);
	$dt_taikhoan_nguoidung_delete = array(
		'#id'
	);
	
	$dt_taikhoan_nguoidung_changehoten = array(
		'#tai_khoan', '@ho_ten'
	);
	$dt_taikhoan_nguoidung_changeemail = array(
		'#tai_khoan', '@email'
	);
	$dt_taikhoan_nguoidung_changesodienthoai = array(
		'#tai_khoan', 'so_dien_thoai_1'
	);
	$dt_taikhoan_nguoidung_changediachi = array(
		'#tai_khoan', 'dia_chi'
	);
	$dt_taikhoan_nguoidung_changematkhau = array(
		'#tai_khoan', 'mat_khau'
	);
	
	//Table csdl dt_taikhoan_nguoidung
	$dt_taikhoan_nguoidung = array(
		'#id','@ho_ten','@tai_khoan','@mat_khau','anh_dai_dien',
		'gioi_tinh','nam_sinh','noi_sinh','dia_chi','email','facebook',
		'skype','yahoo','so_dien_thoai_1','so_dien_thoai_2','ma_xac_nhan_1','ma_xac_nhan_2','ma_xac_nhan_3',
		'cau_hoi_bi_mat','cau_tra_loi','ngay_dang_ki','ngay_tao','ngay_duyet','nguoi_gioi_thieu','trang_thai',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4','loai_tai_khoan'
	);
	$dt_taikhoan_nguoidung_update = array(
		'#id', '@ho_ten','dia_chi', 'email','so_dien_thoai_1','trang_thai','ghi_chu1'
	);
	$dt_taikhoan_nguoidung_changepassword = array(
		'#id', '@mat_khau'
	);
	$dt_taikhoan_nguoidung_position = array(
		'#id'
	);
	$dt_taikhoan_nguoidung_delete = array(
		'#id'
	);
	
	$dt_taikhoan_nguoidung_changehoten = array(
		'#tai_khoan', '@ho_ten'
	);
	$dt_taikhoan_nguoidung_changeemail = array(
		'#tai_khoan', '@email'
	);
	$dt_taikhoan_nguoidung_changesodienthoai = array(
		'#tai_khoan', 'so_dien_thoai_1'
	);
	$dt_taikhoan_nguoidung_changediachi = array(
		'#tai_khoan', 'dia_chi'
	);
	$dt_taikhoan_nguoidung_changematkhau = array(
		'#tai_khoan', 'mat_khau'
	);
	//Table csdl dt_thongtincongty
	$dt_thongtincongty = array(
		'@ten_cong_ty','logo_cong_ty','logo_cong_ty_bottom','dia_chi_cong_ty','email_cong_ty','giay_phep_cong_ty',
		'so_dien_thoai_cong_ty_1','so_dien_thoai_cong_ty_2','so_dien_thoai_cong_ty_3','so_dien_thoai_cong_ty_4',
		'ngay_tao','ngay_duyet','nguoi_tao','trang_thai',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'ten_cong_ty_en','logo_cong_ty_en','logo_cong_ty_bottom_en','dia_chi_cong_ty_en','email_cong_ty_en','giay_phep_cong_ty_en',
		'so_dien_thoai_cong_ty_1_en','so_dien_thoai_cong_ty_2_en','so_dien_thoai_cong_ty_3_en','so_dien_thoai_cong_ty_4_en',
		'ngay_tao_en','ngay_duyet_en','nguoi_tao_en','trang_thai_en',
		'seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'ten_viettat','maso_noibo','maso_doanhnghiep','loaihinh_doanhnghiep','tinhtrang_doanhnghiep','ten_nguoidaidien','thanh_vien','ten_viettat_en','maso_noibo_en','maso_doanhnghiep_en','loaihinh_doanhnghiep_en','tinhtrang_doanhnghiep_en','ten_nguoidaidien_en','thanh_vien_en','skype','facebook','yahoo','skype_en','facebook_en','yahoo_en'
	);
	$dt_thongtincongty_position = array(
		'#id'
	);
	$dt_thongtincongty_delete = array(
		'#id'
	);
	//Table csdl  dt_thongtinsanpham
	$dt_thongtinsanpham = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_tuvansanpham'
	);
	$dt_thongtinsanpham_position = array(
		'#id','vi_tri'
	);
	$dt_thongtinsanpham_delete = array(
		'#id','#id_tuvansanpham'
	);
	//Table csdl  dt_tuyendung
	$dt_tuyendung = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain'
	);
	$dt_tuyendung_position = array(
		'#id','vi_tri'
	);
	$dt_tuyendung_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl  dt_sanpham
	$dt_sanpham = array(
		'#id','trang_thai','id_loailinhvuc','id_chitietloailinhvuc','id_hangsanxuat','id_hedieuhanh','id_tinhnang','id_nhomsanpham','ma_sanpham','ten_sanpham','ten_sanpham_khog_dau','video_hinhanh','gia_sanpham','id_donvitiente','bao_hanh_sanpham','khuyen_mai',
		'thoi_gian_khuyen_mai','thong_tin_chung','quy_dinh_giao_hang','tom_tat_thongso',
		'thong_so_ky_thuat', 'thong_so_san_pham', 'mo_ta_sanpham','dieu_kien_doi_tra','tu_khoa_video_tintuc',
		'tin_tuc_lien_quan', 'video_lien_quan', 'phu_kien_lien_quan',
		'seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','vi_tri','phu_kien_kem_theo'
	);
	$dt_sanpham_position = array(
		'#id','vi_tri'
	);
	$dt_sanpham_delete = array(
		'#id'
	);
	//Table csdl  dt_raovat
	$dt_raovat = array(
		'#id','id_donvitiente','id_donvisanpham','id_hinhthuc','id_tinhtrang','id_tinhthanh','id_loailinhvuc','id_nhomlinhvuc','id_nguoitao','id_nguoiduyet',
		'tinnguoidung_tinadmin','@ma_raovat','@ten_raovat','gia_raovat','soluong_raovat','@anh_dai_dien','tom_tat',
		'noi_dung','gioi_thieu','ngay_dang',
		'ngay_duyet','trang_thai','vi_tri','hinh_anh','so_luoc_xem',
		'@seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa',
		'seo_ghichu','ghi_chu','ten_raovat_khong_dau',
		'id_chitietloailinhvuc','id_linhvuchoatdong','id_hangsanxuatloailinhvuc','id_nhacungcaploailinhvuc','phamtram_giagiam','giagiam_raovat','phivamchuyen_raovat',
		'diachiphivamchuyen_raovat','diachiseo_raovat','thoigian_hethan','ten_nhacungcap','hotro_khachhang',
		'trungtam_chinh','banggia_chitiet','thongtin_chitiet','dieukhoang_sudung','thongtin_lienhe',
		'thongtin_sanpham','diachi_apdung','googlediachi_apdung','thoigian_baohanh'
	);
	$dt_raovat_nguoidung = array(
		'#id','id_donvitiente','id_hinhthuc','id_tinhtrang','id_tinhthanh','id_loailinhvuc','id_nhomlinhvuc','id_nguoitao','id_nguoiduyet',
		'tinnguoidung_tinadmin','@ma_raovat','@ten_raovat','gia_raovat','@anh_dai_dien','tom_tat',
		'noi_dung','gioi_thieu','ngay_dang',
		'ngay_duyet','trang_thai','vi_tri','hinh_anh','so_luoc_xem',
		'@seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa',
		'seo_ghichu','ghi_chu','ten_raovat_khong_dau',
		'id_chitietloailinhvuc','id_hangsanxuatloailinhvuc','id_nhacungcaploailinhvuc','phamtram_giagiam','giagiam_raovat','phivamchuyen_raovat',
		'diachiphivamchuyen_raovat','diachiseo_raovat','thoigian_hethan','ten_nhacungcap','hotro_khachhang',
		'trungtam_chinh','banggia_chitiet','thongtin_chitiet','dieukhoang_sudung','thongtin_lienhe',
		'thongtin_sanpham','diachi_apdung','googlediachi_apdung','thoigian_baohanh'
	);
	$dt_raovat_position = array(
		'#id','vi_tri'
	);
	$dt_raovat_soluocxem = array(
		'#id','so_luoc_xem'
	);
	$dt_raovat_delete = array(
		'#id'
	);
	//Table csdl dt_thongtinchung 
	$dt_thongtinchung  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_thongtinchung_position = array(
		'#id','vi_tri'
	);
	$dt_thongtinchung_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_dichvu  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_dichvu_position = array(
		'#id','vi_tri'
	);
	$dt_dichvu_delete = array(
		'#id','#id_menumain'
	);
	
	//Table csdl dt_thongtinchung 
	$dt_congtrinhthicong  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_congtrinhthicong_position = array(
		'#id','vi_tri'
	);
	$dt_congtrinhthicong_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_slideshow  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_slideshow_position = array(
		'#id','vi_tri'
	);
	$dt_slideshow_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_hoatdong 
	$dt_hoatdong  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_hoatdong_position = array(
		'#id','vi_tri'
	);
	$dt_hoatdong_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_chuyenkhoa
	$dt_chuyenkhoa  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_chuyenkhoa_position = array(
		'#id','vi_tri'
	);
	$dt_chuyenkhoa_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_yhocthuongthuc
	$dt_yhocthuongthuc  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_yhocthuongthuc_position = array(
		'#id','vi_tri'
	);
	$dt_yhocthuongthuc_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinboich
	$dt_thongtinboich  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_thongtinboich_position = array(
		'#id','vi_tri'
	);
	$dt_thongtinboich_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_lichlamviec 
	$dt_lichlamviec  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri','id_loaitintuc'
	);
	$dt_lichlamviec_capnhat  = array(
		'#id','#id_loaitintuc','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_lichlamviec_position = array(
		'#id','vi_tri'
	);
	$dt_lichlamviec_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_gioithieucongty  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_gioithieucongty_position = array(
		'#id','vi_tri'
	);
	$dt_gioithieucongty_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_quytrinhsanxuat  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_quytrinhsanxuat_position = array(
		'#id','vi_tri'
	);
	$dt_quytrinhsanxuat_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_quydinhsudung  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_quydinhsudung_position = array(
		'#id','vi_tri'
	);
	$dt_quydinhsudung_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_thongtinchung 
	$dt_huongdandathang  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_huongdandathang_position = array(
		'#id','vi_tri'
	);
	$dt_huongdandathang_delete = array(
		'#id','#id_menumain'
	);
	//Table csdl dt_tuyendung 
	$dt_tuyendung  = array(
		'#id','@tieu_de','anh_dai_dien','tom_tat','noi_dung','ngay_tao','ngay_duyet',
		'nguoi_tao','trang_thai','seo_tieude','seo_url','seo_tukhoa','seo_motatukhoa','seo_ghichu',
		'ghi_chu1','ghi_chu2','ghi_chu3','ghi_chu4',
		'@tieu_de_en','anh_dai_dien_en','tom_tat_en','noi_dung_en','ngay_tao_en','ngay_duyet_en',
		'nguoi_tao_en','trang_thai_en','seo_tieude_en','seo_url_en','seo_tukhoa_en','seo_motatukhoa_en','seo_ghichu_en',
		'ghi_chu1_en','ghi_chu2_en','ghi_chu3_en','ghi_chu4_en',
		'id_menumain','vi_tri'
	);
	$dt_tuyendung_position = array(
		'#id','vi_tri'
	);
	$dt_tuyendung_delete = array(
		'#id','#id_menumain'
	);
	
	//Table csdl dt_bo
	$dt_bo = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_bo_position = array(
		'#id','vi_tri'
	);
	$dt_bo_delete = array(
		'#id'
	);
	//Table csdl dt_chi
	$dt_chi = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_chi_position = array(
		'#id','vi_tri'
	);
	$dt_chi_delete = array(
		'#id'
	);
	//Table csdl dt_donthuoc
	$dt_donthuoc = array(
		'#id','@tieu_de','cong_dung','trieu_chung','don_thuoc','ghi_chu','vi_tri'
	);
	$dt_donthuoc_position = array(
		'#id','vi_tri'
	);
	$dt_donthuoc_delete = array(
		'#id'
	);
	//Table csdl dt_ho
	$dt_ho = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_ho_position = array(
		'#id','vi_tri'
	);
	$dt_ho_delete = array(
		'#id'
	);
	
	//Table csdl dt_loai
	$dt_loai = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_loai_position = array(
		'#id','vi_tri'
	);
	$dt_loai_delete = array(
		'#id'
	);
	//Table csdl dt_lop
	$dt_lop = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_lop_position = array(
		'#id','vi_tri'
	);
	$dt_lop_delete = array(
		'#id'
	);
	//Table csdl dt_nganh
	$dt_nganh = array(
		'#id','@ma','ten','ghi_chu','vi_tri'
	);
	$dt_nganh_position = array(
		'#id','vi_tri'
	);
	$dt_nganh_delete = array(
		'#id'
	);
	//Table csdl dt_thucvat
	$dt_thucvat = array(
		'#id','id_bo','id_chi','id_ho','id_loai','id_lop','id_nganh','@ten_thuc_vat','anh_dai_dien',
		'mo_ta','bo_phan_dung','noi_song_thu_hai','thanh_phan_hoa_hoc','tinh_vi_tac_dung',
		'cong_dung_chi_dinh','don_thuoc','ghi_chu','vi_tri','ten_goi_khac','noi_dung'
	);
	$dt_thucvat_position = array(
		'#id','vi_tri'
	);
	$dt_thucvat_delete = array(
		'#id'
	);
	//Table csdl dt_tailieuthamkhao
	$dt_tailieuthamkhao = array(
		'#id','anh_dai_dien','noi_dung','ghi_chu','vi_tri'
	);
	$dt_tailieuthamkhao_position = array(
		'#id','vi_tri'
	);
	$dt_tailieuthamkhao_delete = array(
		'#id'
	);
	//Table csdl dt_tintuc
	$dt_tintuc = array(
		'#id','anh_dai_dien','noi_dung','ghi_chu','vi_tri','tieu_de','so_luot_xem','tom_tat'
	);
	$dt_tintuc_position = array(
		'#id','vi_tri'
	);
	$dt_tintuc_delete = array(
		'#id'
	);
	
	/*Cau hinh page system_admin*/
	$basUrl_system_admin = HTTPS_SERVER_ADMIN."system_admin/";
	$page_system_admin = array(
		'index'=>$basUrl_system_admin.'index'.'.php',
		'system_menu'=>$basUrl_system_admin.'system_menu'.'.php',
		'trangchinh'=>$basUrl_system_admin.'trangchinh'.'.php',
		'logout'=>$basUrl_system_admin.'logout'.'.php',
	);
	$basUrl_system_admin_module = HTTPS_SERVER_ADMIN."system_admin/default/module/";
	
	$basUrl_system_admin_module_thongtinchung = HTTPS_SERVER_ADMIN."system_admin/default/module/thongtinchung/";
	$page_system_admin_module_thongtinchung = array(
		'thongtinchung'=>$basUrl_system_admin_module_thongtinchung.'thongtinchung'.'.php',
	);
	$basUrl_system_admin_module_menumain = HTTPS_SERVER_ADMIN."system_admin/default/module/menumain/";
	$page_system_admin_module_menumain = array(
		'menumain'=>$basUrl_system_admin_module_menumain.'menumain'.'.php',
	);
	
	$basUrl_system_admin_module_menusub = HTTPS_SERVER_ADMIN."system_admin/default/module/menusub/";
	$page_system_admin_module_menusub = array(
		'menusub'=>$basUrl_system_admin_module_menusub.'menusub'.'.php',
	);
	//Khoi tao cac table trong csdl
		//Table csdl system_thongtinchung
		$system_thongtinchung = array(
			'#id','@system_username','@system_password','@system_role',
			'@system_picture_paner','system_companyname_parent','system_website_parent','system_website',
			'system_title_support','system_content_support','system_colorbackground','system_note'
		);
		$system_thongtinchung_delete = array(
			'#id'
		);
		//Table csdl system_menumain
		$system_menumain = array(
			'#id','@system_title','@system_url','system_icon_up',
			'system_icon_down','@system_position'
		);
		$system_menumain_position = array(
			'#id','system_position'
		);
		$system_menumain_delete = array(
			'#id'
		);
		//Table csdl system_menusub
		$system_menusub = array(
			'#id','@system_title','@system_url','system_icon',
			'id_menumain','@system_position'
		);
		$system_menusub_position = array(
			'#id','system_position'
		);
		$system_menusub_delete = array(
			'#id'
		);
		
?>
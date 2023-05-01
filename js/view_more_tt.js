$("document").ready(function(){
	$("#view_more").click(function(){
		$.ajax({
            url : $("#http_server_viewmore").val()+"process/view_more_tt.php",
            type : "post",
            dateType:"text",
            data : {
                view_more : item,
                view_more_next : 6,
                ten_thuc_vat : $("#ten_thuc_vat").val()
            },
            success : function (view_more){
				if(view_more!="error"){
					var view_more_all = view_more.split("@@@");
					$("#noidung_view_more").append(view_more_all[0]);
					item+=6;
					if(view_more_all[1]==0)
						$("#view_more").hide();
				}
				else{
					alert("Lấy thông tin thất bại!");
				}
            }
        });
	});
});
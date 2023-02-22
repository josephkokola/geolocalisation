jQuery('#frmforget').submit(function(e){
	jQuery('#forgot_msg').html("");
	e.preventDefault();
	jQuery.ajax({
		url:'/forget_password',
		data:jQuery('#frmforget').serialize(),
		type:'post',
		success:function(result){
			if (result.status=="error") {
				jQuery('#forgot_msg').html(result.msg); 
			}
		}
	});
});
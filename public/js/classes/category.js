var category = new Category();

function Category(){
    
}

Category.prototype.store = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
				_token: CSRF,
				category_name : param.category_name,
			};

	$.ajax({
		url: '/admin/categories',
		type: 'POST',
		dataType: "json",
		data: data,
		success: function(data){
			if (callback)
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

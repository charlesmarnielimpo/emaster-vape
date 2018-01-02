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

Category.prototype.show = function (id, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	$.ajax({
		url: '/admin/categories/' + id + '/ajaxShow',
		type: 'POST',
		dataType: "json",
		data: {_token: CSRF},
		success: function(data){
			if (data.status == 'OK')
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

Category.prototype.update = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
		_token: CSRF,
		category_name : param.category_name
	};

	$.ajax({
		url: '/admin/categories/' + param.id + '/ajaxUpdate',
		type: 'PUT',
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

Category.prototype.destroy = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
		_token: CSRF
	};

	$.ajax({
		url: '/admin/categories/' + param.id + '/ajaxDestroy',
		type: 'DELETE',
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
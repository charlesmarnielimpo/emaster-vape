$(document).ready(function() {
	$('#ddl-checkout-city').prop('disabled', true);
	$('#ddl-checkout-province').on('change', function() {
		$('#ddl-checkout-city').prop('disabled', false);

		var province_id = $(this).val();
		var CSRF = $("meta[name='csrf-token']").attr('content');
		
		data = { 
      _token: CSRF,
      province_id: province_id
    };

		$.ajax ({
			url: '/changeProvince/' + province_id,
			type: 'POST',
			data: data,
			success: function(data){
				if (data["0"].status == 'OK') {
					$('#ddl-checkout-city').empty();
					$('#ddl-checkout-city').append(`<option selected disabled>Choose City/Municipality</option>`);
					$.each(data["0"].municipalities, function(key, value) {
						$('#ddl-checkout-city').append(`<option value="${value.id}">${value.name}</option>`);
					});
				}
			}
		});
	})
});
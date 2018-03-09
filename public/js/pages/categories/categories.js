var frm_add_category_validator, frm_edit_category_validator;

$(document).ready(function() {
	$(".fa-list").parent().addClass("active").parent().addClass("active");
  $('#tbl-categories').DataTable();

	frm_add_category_validator = $('#frm-add-category').validate({
    rules: {
      'category_name': {
      	required: true,
      	maxlength: 20
      }
    },
    highlight: function (element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
    },
    unhighlight: function (element) {
      $(element).closest('.form-group').removeClass('has-danger').removeClass('has-success').addClass('has-success');
    },
    errorElement: 'div',
    errorClass: 'form-control-feedback',
    errorPlacement: function (error, element) {
      if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  });

  $('#add-category-modal').on('click', function() {
		$('#frm-add-category')[0].reset();
		$('.form-group').removeClass('has-success').removeClass('has-danger').find('.form-control-feedback').remove();
	});

  $('#frm-add-category').on('submit', function(event) {
  	event.preventDefault();

  	$('#btn-add-category').attr('disabled', 'disabled').find('i').removeClass('fa-check-square-o').addClass('fa-refresh').addClass('fa-spin');

    var valid = $('#frm-add-category').valid();

    if (!valid) {
      $('#btn-add-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
      frm_add_category_validator.focusInvalid();
      return false;
    };

    var category_name = $('#txt-add-category-name').val();

    var category_obj = {
			'category_name' : category_name
		};

    category.store(category_obj, function (data) {
			if (data.status == 'OK') {
				$('#btn-add-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
				toastr.success(data.notification.message, 'Success!');
        toastr.options = {
          "progressBar": true,
        }

        $('#modal-add-category').modal('hide');

				window.location.href = '/admin/categories';
				window.location.reload(true);
			}
			else {
				$('#btn-add-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
				$('#modal-add-category').modal('hide');

				toastr.error(data.notification.message, 'Error!');
        toastr.options = {
          "progressBar": true,
        }
			}
    });
  });

  $('.category-edit').on('click', function () {
    var id = $(this).data('id');

    $('#frm-edit-category').prop('action', '/admin/categories/' + id + '/ajaxUpdate');
    $('#hdn-edit-category-id').val(id);

    $('#frm-edit-category')[0].reset();
    $('.form-group').removeClass('has-success').removeClass('has-danger').find('.form-control-feedback').remove();

    category.show(id, function (data) {
      $('#txt-edit-category-name').val(data.result.name);
    });
  });

  frm_edit_category_validator = $('#frm-edit-category').validate({
    rules: {
      'edit_category_name': {
        required: true,
        maxlength: 20
      }
    },
    highlight: function (element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
    },
    unhighlight: function (element) {
      $(element).closest('.form-group').removeClass('has-danger').removeClass('has-success').addClass('has-success');
    },
    errorElement: 'div',
    errorClass: 'form-control-feedback',
    errorPlacement: function (error, element) {
      if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  }); 

  $('#frm-edit-category').on('submit', function(event) {
    event.preventDefault();

    $('#btn-edit-category').attr('disabled', 'disabled').find('i').removeClass('fa-check-square-o').addClass('fa-refresh').addClass('fa-spin');

    var valid = $('#frm-edit-category').valid();

    if (!valid) {
      $('#btn-edit-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
      frm_edit_category_validator.focusInvalid();
      return false;
    };

    var id = $('#hdn-edit-category-id').val();
    var edit_category_name = $('#txt-edit-category-name').val();

    var edit_category_obj = {
      'id' : id,
      'category_name' : edit_category_name
    };

    category.update(edit_category_obj, function (data) {
      if (data.status == 'OK') {
        $('#btn-edit-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
        toastr.success(data.notification.message, 'Success!');
        toastr.options = {
          "progressBar": true,
        }

        $('#modal-edit-category').modal('hide');

        window.location.href = '/admin/categories';
        window.location.reload(true);
      }
      else {
        $('#btn-edit-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
        $('#modal-edit-category').modal('hide');

        toastr.error(data.notification.message, 'Error!');
        toastr.options = {
          "progressBar": true,
        }
      }
    });
  });

  $('.category-delete').on('click', function () {
    var id = $(this).data('id');

    $('#frm-delete-category').prop('action', 'admin/categories/' + id + '/ajaxDestroy');
    $('#hdn-delete-category-id').val(id);

    category.show(id, function (data) {
      $('#lbl-delete-category-confirmation').html('Are you sure you want to remove \'' + data.result.name + '\'?');
    });
  });

  $('#frm-delete-category').on('submit', function (event) {
    event.preventDefault();

    $('#btn-delete-category').attr('disabled', 'disabled').find('i').removeClass('fa-check-square-o').addClass('fa-refresh').addClass('fa-spin');

    var id = $('#hdn-delete-category-id').val();
    var delete_category_obj = { 'id' : id };

    category.destroy(delete_category_obj, function (data) {
      if (data.status == 'OK') {
        $('#btn-delete-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
        toastr.success(data.notification.message, 'Success!');
        toastr.options = {
          "progressBar": true,
        }

        $('#modal-delete-category').modal('hide');

        window.location.href = '/admin/categories';
        window.location.reload(true);
      }
      else {
        $('#btn-delete-category').removeAttr('disabled').find('i').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-check-square-o');
        $('#modal-delete-category').modal('hide');

        toastr.error(data.notification.message, 'Error!');
        toastr.options = {
          "progressBar": true,
        }
      }
    });
  });
});
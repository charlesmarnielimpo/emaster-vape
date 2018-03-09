var frm_add_product_validator, frm_edit_product_validator;

$(document).ready(function() {
  $(".fa-product-hunt").parent().addClass("active").parent().addClass("active");

  frm_add_product_validator = $('#frm-add-product').validate({
    rules: {
      'product_name': {
      	required: true,
      	maxlength: 50
      },
      'product_category': { required: true },
      'product_price': {
      	required: true,
      	number: true
      },
      'product_quantity': {
      	required: true,
      	digits: true
      },
      'product_image[]': { required: true },
      'product_details': { required: true },
      'product_description': { required: true }
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

  // set its default value
  $("#txt-add-product-featured").prop('checked', false);
  $('select option[value=""]').attr('selected', true);

  // products datatables
  $('#tbl-products').DataTable();

  // tagsinput
  $('#txt-add-product-color').tagsinput();
  $('#txt-add-product-bottle-size').tagsinput();
  $('#txt-add-product-strength').tagsinput();
  $('#txt-add-product-ohm').tagsinput();
});

var elemsingle = document.querySelector('.js-single');
var switchery = new Switchery(elemsingle,{
	color:'#4099ff',
	jackColor:'#fff'
});

var changeCheckbox = document.getElementById('txt-add-product-featured');
changeCheckbox.onchange = function() {
	if (changeCheckbox.checked) {
		this.value = 1;
		this.attributes.checked.value = "checked";
	} else {
		this.value = 0;
		this.attributes.checked.value = "";
	}
}

var category = document.getElementById('ddl-product-category');
category.onchange = function() {
	var color = document.getElementById('vape-tank-color');
	var bottleSizeStrength = document.getElementById('liquid-bottle-size');
	var ohm = document.getElementById('coils-ohm');

	if (category.value == 1 || category.value == 2) {
		color.style.display = 'block';
		bottleSizeStrength.style.display = 'none';
		ohm.style.display = 'none';
	} else if(category.value == 3) {
		bottleSizeStrength.style.display = 'block';
		ohm.style.display = 'none';
		color.style.display = 'none';
	} else if(category.value == 4){
		ohm.style.display = 'block';
		color.style.display = 'none';
		bottleSizeStrength.style.display = 'none';
	} else {
		ohm.style.display = 'none';
		color.style.display = 'none';
		bottleSizeStrength.style.display = 'none';
	}
}

CKEDITOR.replace('txt-add-product-description');
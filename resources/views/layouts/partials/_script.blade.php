<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset(App::environment('production') ? '/public/js/vendor.min.js' : '/js/vendor.min.js') }}"></script>
<script src="{{ asset(App::environment('production') ? '/public/js/scripts.min.js' : '/js/scripts.min.js') }}"></script>
<script src="{{ asset(App::environment('production') ? '/public/plugins/validate/jquery.validate.min.js' : '/plugins/validate/jquery.validate.min.js') }}"></script>

<script src="{{ asset(config('bus.asset_path').'/validation/jquery.validate.min.js') }}"></script>
<script>
    $(".jqueryValidation").validate({
        errorClass: 'has_input_error',
        errorElement: "p"
    });

    $.validator.addMethod(
            "regex",
            function (value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
    );
</script>
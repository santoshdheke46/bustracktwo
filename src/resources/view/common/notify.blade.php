<script src="{{ asset(config('bus.asset_path').'/notification/sweetalert.min.js') }}"></script>
<script>

    function confirmSwal(id) {
        var form = $('#deleteForm'+id);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function (willDelete) {

            if (willDelete) {
                form.submit();
            }
        });
    }

    @if(session('swal_success'))
    swal("Success!", "{{ session('swal_success') }}", "success");
    @endif

</script>

<script src="{{ asset(config('bus.asset_path').'/notification/notify.min.js') }}"></script>
<script>
    @if(session('notify_success'))
    $.notify("{{ session('notify_success') }}", "success");
    @endif
</script>

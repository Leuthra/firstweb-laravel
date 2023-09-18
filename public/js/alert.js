<script>
    $(document).ready(function () {
        $('form.php-email-form').submit(function (e) {
            e.preventDefault();

            var form = $(this);

            $.ajax({
                type: "POST",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json', // Mengharapkan respons dalam format JSON
                success: function (response) {
                    if (response.success) {
                        // Menampilkan pesan sukses sebagai alert
                        $('#contact-message').removeClass('alert-danger').addClass('alert-success').html(response.success).show();
                    } else {
                        // Menampilkan pesan kesalahan (jika ada) sebagai alert
                        $('#contact-message').removeClass('alert-success').addClass('alert-danger').html(response.error).show();
                    }
                },
                error: function (xhr) {
                    // Menampilkan pesan kesalahan (jika ada) sebagai alert
                    $('#contact-message').removeClass('alert-success').addClass('alert-danger').html('An error occurred. Please try again later.').show();
                }
            });
        });
    });
</script>

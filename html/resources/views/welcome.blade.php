@include('_header')

        <div class="title">Добро пожаловать! Выберите клинику:</div>

        <div id="clinics_list">
        </div>

        <script>
            $('#clinics_list').load('{{ route('clinics_list') }}');

            $(document).on('click','.pagination a', function (event) {
                event.preventDefault();
                if ( $(this).attr('href') != '#' ) {
                    $("html, body").animate({ scrollTop: 0 }, "fast");
                    $('#clinics_list').load($(this).attr('href'));
                }
            });
        </script>

@include('_footer')
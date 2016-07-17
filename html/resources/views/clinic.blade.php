@include('_header')

        <div class="title">Выбрана клиника: &laquo;<?php echo htmlspecialchars($clinic->title); ?>&raquo;<br>Выберите врача:</div>

        <div id="doctors_list">
        </div>

        <script>
        $('#doctors_list').load('{{ route('doctors_list', ['clinic_id' => $clinic->id]) }}');

        $(document).on('click','.pagination a', function (event) {
            event.preventDefault();
            if ( $(this).attr('href') != '#' ) {
                $("html, body").animate({ scrollTop: 0 }, "fast");
                $('#doctors_list').load($(this).attr('href'));
            }
        });
        </script>

@include('_footer')

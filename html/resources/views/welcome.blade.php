<!DOCTYPE html>
<html>
    <head>
        <title>Онлайн запись к врачу</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="title">Добро пожаловать! Выберите клинику:</div>

        <div id="clinics_list">
        </div>

        <script>
        $('#clinics_list').load('{{ route('clinics_list') }}');

        $(document).on('click','.pagination a', function (event) {
console.log('!!!!!!!!!!11');
            event.preventDefault();
            if ( $(this).attr('href') != '#' ) {
                $("html, body").animate({ scrollTop: 0 }, "fast");
                $('#clinics_list').load($(this).attr('href'));
            }
        });
        </script>
    </body>
</html>

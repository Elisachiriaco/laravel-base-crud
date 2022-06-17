<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
    <script>
        function myFunction(e){
            e.preventDefault();
            const el = document.getElementById('formdelete');
            let text = document.getElementById('demo');
            if(confirm('Sei sicuro di voler cancellare?') == true){
                el.submit();
            } else {
                text.innerHTML = 'Hai cancellato la tua azione'
            }
        }
    </script>
</head>
<body>
    @include('partials.header')
    @yield('mainContent')
    @include('partials.footer')
</body>
<script>
    let element = document.getElementById('mybutton');
    if(element) element.addEventListener('click',myFunction);
</script>
</html>
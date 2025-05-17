<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $page->meta_title ?? env('APP_NAME') }}</title>
   <meta name="description" content="{{ $page->meta_description ?? '' }}">
   <meta name="keywords" content="{{ $page->meta_keywords ?? '' }}">

   <link rel="stylesheet" href="{{ url('/') }}/frontviewassest/css/style.css">
   <link rel="stylesheet" href="{{ url('/') }}/frontviewassest/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ url('/') }}/frontviewassest/css/slick.css">
   <link rel="stylesheet" href="{{ url('/') }}/frontviewassest/css/slick-theme.css">
</head>
<body>
   
   @yield('content')

   <script src="{{ url('/') }}/frontviewassest/js/jquery-3.6.0.min.js"></script>
   <script src="{{ url('/') }}/frontviewassest/js/slick.min.js"></script>
   <script src="{{ url('/') }}/frontviewassest/js/bootstrap.bundle.js"></script>
   <script src="{{ url('/') }}/frontviewassest/js/main.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
</body>
</html>

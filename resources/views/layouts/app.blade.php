<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khải đại ca</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
    <script src="https://vuihoc.vn/assets/global/plugins/ckeditor/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('js/ckeditor.js') }}"></script>


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container-xl mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>

<!-- resources/views/post.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أخبار الساعة</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="root">
    @if($post)
    <x-my-header  title="أخبار الساعة" logo="{{ asset('images/logo.svg') }}" logoAlt="alt logo "/>
    <x-post-body  :post="$post" />


    <x-footer />
    @else
    <x-my-header  title="أخبار الساعة" logo="{{ asset('images/logo.svg') }}" logoAlt="alt logo "/>
    <h1 class="text-red-500  mt-32 font-bold text-3xl text-center">نعتذر هناك خطأ ما </h1>
    @endif
 </body>
</html>
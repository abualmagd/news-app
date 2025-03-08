<!-- resources/views/hello.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أخبار الساعة</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="root">
    @if($articles)
    <x-my-header  title="أخبار الساعة" logo="images/logo.png" logoAlt="alt logo "/>
    <x-news-slide   :items="$articles" />
    <x-hero  :articles="$articles"/>
    <x-recent :articles="$articles" />
    <x-footer />
    @else
    <x-my-header  title="أخبار الساعة" logo="images/logo.png" logoAlt="alt logo "/>
    <h1 class="text-red-500  mt-32 font-bold text-3xl text-center">نعتذر هناك خطأ ما </h1>
    @endif
 </body>
</html>
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
    <x-my-header  title="أخبار الساعة" logo="images/logo.png" logoAlt="alt logo "/>
    <x-news-slide   :items="['ارتفاع اسعار الكوسة في الاسواق', 'هنفجار ماسورة يعطل المرور ', 'الهدنة مهددد بشدة', 'الزمالك والاهلى في لقثاء القمة ','ارتفاع اسعار الكوسة في الاسواق', 'هنفجار ماسورة يعطل المرور ', 'الهدنة مهددد بشدة', 'الزمالك والاهلى في لقثاء القمة ']" />
    <x-hero  :articles="[1,2,3,4]"/>
    <x-recent :articles="[1,2,3,1,5,4,4,74,4,7,4,7,4,7,47,4,74,7,4]" />
    <x-footer />
 </body>
</html>
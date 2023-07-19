<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/navigation.css') }}">
</head>
<body>
<header>
<nav class="navbar">
    <ul>
        <li><a href="/admin/staff">اطلاعات پایه</a></li>
        <li><a href="/admin/select_app">فرم مشتری ها</a></li>
        <li><a href="/admin/customers">لیست مشتری ها</a></li>
        <li><a href="/admin/articles">مقالات</a></li>
    </ul>
</nav>
</header>
<div class="sidebar">
    <ul class="nav-menu">
        <li><a href="/admin/staff">اطلاعات پایه</a></li>
        <li><a href="/admin/select_app">فرم مشتری ها</a></li>
        <li class="menu-item-has-children">
            <a href="#">لیست مشتریان</a>
            <ul class="sub-menu">
                <li><a href="#">مشتری 1</a></li>
                <li><a href="#">مشتری 1</a></li>
                <li><a href="#">مشتری 1</a></li>
            </ul>
        </li>
    </ul>
</div>

@yield('content')

<footer>
    <nav class="navbar">
        <ul>
            <li><a href="/admin/staff">اطلاعات پایه</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>


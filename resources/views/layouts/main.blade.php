@vite('resources/css/common.scss')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
@include('common/navigation')

@yield('content')
@yield('content_index')
@yield('authors_authors')
@yield('authors_create')
@yield('content_api')
@yield('content_books_10latest')
@yield('crime_books')
@yield('content_admin_books')

@yield('books-create')
@yield('book-edit')


    
</body>
</html>
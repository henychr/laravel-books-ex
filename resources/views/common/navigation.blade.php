

<nav>
<h3>This is my NEW navigation</h3>


@auth

<h3>You are logged in</h3>

<form action="{{ route('logout') }}" method="post">
     @csrf 
    <button>Logout</button> 
</form>

{{-- <a href="/"  class="{{ $current_page == 'home' ? 'highlighted' : '' }}">Home-new</a>
<a href="/about-us"  class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About Us - new</a>
<a href="/admin/authors"  class="{{ $current_page == 'authors' ? 'highlighted' : '' }}">Authors</a>
 <a href="/admin/authors/create"  class="{{ $current_page == 'authors-create' ? 'highlighted' : '' }}">Create Author</a>
<a href="/api/books/latest"  class="{{ $current_page == 'books_10latest' ? 'highlighted' : '' }}">books_10latest</a>
<a href="/admin/books"  class="{{ $current_page == 'admin-books' ? 'highlighted' : '' }}">Admin Books</a> --}}





@else

<h3>You are logged out</h3>
{{-- <a href="/"  class="{{ $current_page == 'home' ? 'highlighted' : '' }}">Home-new</a>
<a href="/about-us"  class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About Us - new</a>
<a href="/admin/authors"  class="{{ $current_page == 'authors' ? 'highlighted' : '' }}">Authors</a>
<a href="/admin/authors/create"  class="{{ $current_page == 'authors-create' ? 'highlighted' : '' }}">Create Author</a>
<a href="/api/books/latest"  class="{{ $current_page == 'books_10latest' ? 'highlighted' : '' }}">books_10latest</a>
<a href="/admin/books"  class="{{ $current_page == 'admin-books' ? 'highlighted' : '' }}">Admin Books</a> --}}

@endauth








</nav>
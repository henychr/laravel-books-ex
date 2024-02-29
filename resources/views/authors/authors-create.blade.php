@viteReactRefresh
@vite('resources/js/partners.jsx')

@extends('layouts.main', [
    'current_page' => 'authors-create'    
])




@section('authors_create')
<br>

<form action="/admin/authors" method="post">
   @csrf

<label >Author Name:
<input type="text" name="name" placeholder="name">
</label>

<label>Slug:
<input type="text" name="slug" placeholder ="firstname-surname-author">
</label>

<label>Author Bio:
<input type="text" name="bio" placeholder="bio">
</label>
<button>Submit</button>

</form>



@endsection
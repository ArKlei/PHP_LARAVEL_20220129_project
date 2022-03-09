@extends('../layouts.app')

@section ('content')


<div id="mySidenav" class="sidenav">
<a href="{{route('home')}}" id="welcome">Main</a>
<a href="{{route('article.index')}}" id="article">Articles</a>
  <a href="{{route('article.create')}}" id="create_article">Add article</a>
  <a href="{{route('article_category.index')}}" id="article_category">Article categories</a>
  <a href="{{route('article_category.create')}}" id="create_article_category">Add article categories</a>

</div>
    <div class="container">
        <p><h1 style="text-align:center; font-size:50px; color:gold">Data of </h1><h1 style="text-align:center; font-size:50px; color:black">{{$article_category->title}}</h1><p>
        <p>Id – {{$article_category->id}}</p>
        <p>Title – {{$article_category->title}}</p>
        <p>Description – {{$article_category->description}}</p>
        <p>
        <form method="post" action='{{route('article_category.destroy', [$article_category])}}'>
            @csrf
            <button class="btn btn-danger" type="submit">Delete article category from database</button>
        
        <a class="btn btn-secondary" style="width:100px" href="{{route('article_category.index')}}">Back</a></form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection



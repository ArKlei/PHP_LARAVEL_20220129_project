@extends('../layouts.app')

@section ('content')


<div id="mySidenav" class="sidenav">
<a href="{{route('home')}}" id="welcome">Main</a>
<a href="{{route('article.index')}}" id="article">Articles</a>
  <a href="{{route('article.create')}}" id="create_article">Add article</a>
  <a href="{{route('article_category.index')}}" id="article_category">Article categories</a>
  <a href="{{route('article_category.create')}}" id="create_article_category">Add article categories</a>
  <a href="{{route('article_image.index')}}" id="article_image">Article images</a>
  <a href="{{route('article_image.create')}}" id="create_article_image">Add article image</a>

</div>
    <div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit data of </h1><h1 style="text-align:center; font-size:50px; color:black">{{$article->title}}</h1><p>

    <form method='POST' action='{{route('article.update', [$article])}}' >
        <p>
        Title: <input class="form-control" type='text' name="article_title" value='{{$article->title}}'/>
        <p>
        Excerpt: <input class="form-control" type='text' name="article_excerpt" value='{{$article->excerpt}}'/>
        <p>
        Description: <input class="form-control" type='text' name="article_description" value='{{$article->description}}'/>
        <p>
        Author: <input class="form-control" type='text' name="article_author" value='{{$article->author}}'/>
        <p>
        Article category ID: 
         <select class="form-control" name="article_category_id" value=''>
                     @foreach ($article_categories as $value)
                      @if ($value->id == $article->article_category_id)
                        <option value="{{$value->id}}" selected>{{$value->title}}</option>
                      @else
                        <option value="{{$value->id}}">{{$value->title}}</option>
                      @endif
                    @endforeach   
                     
        </select>
        @csrf
        <p>
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px"  href="{{route('article.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

@endsection


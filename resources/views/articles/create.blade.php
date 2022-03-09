@extends('layouts.app')

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
        <p><h1 style="text-align:center; font-size:50px; color:gold">Add article</h1><p>

        <form method='POST' action='{{route('article.store')}}'>
            <p>
            <input class="form-control" type='text' name="article_title" placeholder="Article title"/>
            <p>
            <input  class="form-control" type='text' name="article_excerpt" placeholder="Article excerpt"/>
            <p>
            <input  class="form-control" type='text' name="article_description" placeholder="Article description"/>
            <p>
            <input  class="form-control" type='text' name="article_author" placeholder="Article author"/>
            <p>
            <select class="form-control" name="article_category_id" value=''>
                    @foreach ($article_categories as $value)
                      <option value="{{$value->id}}">Article category: {{$value->id}}</option>
                    @endforeach   
            </select>
            <p>
                <select class="form-control" name="image_id" value=''>
                        @foreach ($article_categories as $value)
                          <option value="{{$value->id}}">Article category: {{$value->id}}</option>
                        @endforeach   
                        
            </select>
            @csrf
            <p>

            <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
            <a class="btn btn-secondary" style="width:100px" href="{{route('article.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection
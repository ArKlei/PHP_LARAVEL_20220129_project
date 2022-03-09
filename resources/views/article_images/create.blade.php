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
        <p><h1 style="text-align:center; font-size:50px; color:gold">Add article image</h1><p>

        <form method='POST' ectype="multipart/form-data" action='{{route('article.store')}}'>
            
            @csrf
            <p>
            <input id="image_alt" class="form-control" type='text' name="image_alt" placeholder="Image name" required autofocus />
            <p>
            Choose image:<br>
            <input id="image_src" class="form-control" type='file' name="image_src" placeholder="Image src" required autofocus />
            <p>
            <input id="image_width" class="form-control" type='number' min="0" max="200" name="image_width" placeholder="Image width" required autofocus />
            <p>
            <input id="image_height" class="form-control" type='number' min="0" max="200" name="image_height" placeholder="Image height" required autofocus />
            <p>
            <input id="image_class" class="form-control" type='text' name="image_class" placeholder="Image class" required autofocus />
            <p>
            <input id="image_class" class="form-control" type='text' name="image_class" placeholder="Image class" required autofocus />
            <p>
            <select class="form-control" name="article_id" value=''>
                    @foreach ($articles as $value)
                      <option value="{{$value->id}}">Article ID: {{$value->id}}</option>
                    @endforeach   
            </select>
            <p>

            <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
            <a class="btn btn-secondary" style="width:100px" href="{{route('article.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection
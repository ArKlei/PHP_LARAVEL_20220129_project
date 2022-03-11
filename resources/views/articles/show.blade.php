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

<div class="row justify-content-center">

<div class="col-md-8">

  <div class="card">

    <div class="container-fluid">

        <div class="card-header" style="margin-top:20px">

            <p><h4 style="text-align:center; color:gold">Data of </h4><h4 style="text-align:center; color:black">{{$article->title}}</h4><p>
        
        </div>

        <div class="card-body">

            <div class="row mb-3">  

                <p>Id – {{$article->id}}</p>
                <p>Title – {{$article->title}}</p>
                <p>Excerpt – {{$article->excerpt}}</p>
                <p>Description – {{$article->description}}</p>
                <p>Author – {{$article->author}}</p>
                <p>Category (id) – {{$article->article_category_id}}</p>
                <p>
                <form method="post" action='{{route('article.destroy', [$article])}}'>
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete article from database</button> 
                <a class="btn btn-secondary" style="width:100px" href="{{route('article.index')}}">Back</a></form>
        
            </div>
      
        </div>
   
    </div>
   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

@endsection



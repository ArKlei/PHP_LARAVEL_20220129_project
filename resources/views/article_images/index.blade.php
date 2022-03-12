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
        
                    <p><h4 style="text-align:center; color:gold">Present images of all articles</h4><p>

                        @if (count($article_images) == 0)
                            <p>There is no article images in the database yet</p>
                        @endif
                
                </div>

                <div class="card-body">

                    <div class="row mb-3">

                        <table class="table table-striped">
                        
                            <tr>
                                <th>Article id</th>    
                                <th>Article title</th>
                                <th>Image name</th>
                            </tr>


                            @foreach ($article_images as $article_image)
                                <tr>
                                    <td>{{$article_image->article_id}}</td>
                                    <td>{{$article_image->articleImageArticle->title}}</td>
                                    <td><img src="{{asset('/images/'.$article_image->src)}}" alt="{{$article_image->alt}}" width="{{$article_image->width}}" height="{{$article_image->height}}"></td>
                                    
                                    <td>
                                        <a class="btn btn-primary" style="width:100px" href="{{route('article_image.edit', [$article_image])}}">Edit</a><p>
                                        <p><a class="btn btn-secondary" style="width:100px" href="{{route('article_image.show', [$article_image])}}">Show</a>
                            <p>
                                        <form method="post" action='{{route('article_image.destroy', [$article_image])}}'>
                                            @csrf
                                            <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                            {{-- create forma - mums reikia nuorodos ar mygtuko --}}
                            <a class="btn btn-primary" href="{{route('article_image.create')}}">Include new article image data into database</a>
                            <p>
                    
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection


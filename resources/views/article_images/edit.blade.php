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

            <p><h4 style="text-align:center; color:gold">Edit data of </h4><h4 style="text-align:center; color:black">image ID - {{$article_image->id}}, title - {{$article_image->alt}}</h4><p>

          </div>

          <div class="card-body">

            <div class="row mb-3">

            <form method='POST' enctype="multipart/form-data" action='{{route('article_image.update', [$article_image])}}' >
             @csrf
            
            <div class="row mb-3">
                    
              <label for="text" class="col-md-4 col-form-label text-md-end">Image name</label>
                      
              <div class="col-md-6">
            
                <input id="article_image_alt" class="form-control" type='text' name="article_image_alt" value="{{$article_image->alt}}" required autofocus />
                
              </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="file" class="col-md-4 col-form-label text-md-end">Choose image</label>
                    
                <div class="col-md-6">
              
                  <input id="article_image_src" class="form-control" type='file' name="article_image_src" autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Image width</label>
                    
                <div class="col-md-6">
            
                  <input id="article_image_width" class="form-control" type='number' min="0" max="200" name="article_image_width" value="{{$article_image->width}}" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Image height</label>
                    
                <div class="col-md-6">
            
                  <input id="article_image_height" class="form-control" type='number' min="0" max="200" name="article_image_height" value="{{$article_image->height}}" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="text" class="col-md-4 col-form-label text-md-end">Image class</label>
                    
                <div class="col-md-6">
            
                  <input id="article_image_class" class="form-control" type='text' name="article_image_class" value="{{$article_image->class}}" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Article ID</label>
                    
                <div class="col-md-6">
                  
                    <select class="form-control" name="article_image_article_id" value="">
                            @foreach ($articles as $value)
                              <option value="{{$value->id}}">{{$value->id}}</option>
                            @endforeach   
                    </select>
                    <p><p>
                    @csrf
                    <p>
                    <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        
                    <a class="btn btn-secondary" style="width:100px" href="{{route('article_image.index')}}">Back</a>
   
                </div>
                
            </div>
    
            </form>
          
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


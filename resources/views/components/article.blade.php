<div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$article['title']}}</h5>
    <p class="card-text">{{$article['body']}}</p>
    <a href="{{route('articolo',['id'=>$article['id']])}}" class="btn btn-primary">Leggi qui</a>
  </div>
</div>
</div>
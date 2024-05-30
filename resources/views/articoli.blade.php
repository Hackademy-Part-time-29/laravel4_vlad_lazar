<x-layout>
<div class="container">
    <div class="row">
    @foreach($articles as $article)
    <div class="col-3">
      <x-article :article="$article"/>
    </div>
    @endforeach
</div>
</div>
</x-layout>
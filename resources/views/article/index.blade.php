<x-layout>
  <div class="magictrick text-center">
    <div class="d-flex justify-content-center">
      <h2 class="m-4 titleindex fs-1 ">Annunci</h2>
    </div>
    <div class="d-flex justify-content-center">
      <form action="{{route('article.create')}}">
        <button class="bottoneinserisci mb-4" type="submit">{{__('ui.CreateArticle')}}</button>
      </form>
    </div>
    <div class="container">
      <div class="row">

        @if($articles != NULL)
        @foreach ($articles as $article )

        <x-card :article="$article" />

        @endforeach

        @endif

      </div>
    </div>
  </div>
</x-layout>
<x-layout>
  <div class=" text-center">
    <div class="d-flex justify-content-center">
      <h2 class="m-4 titleindex fs-1 ">{{__('ui.annunci')}}</h2>
    </div>
    @if(@!Auth::user()->is_revisor)
    <div class="d-flex justify-content-center">
      <form action="{{route('article.create')}}">
        <button class="bottoneinserisci mb-4" type="submit">{{__('ui.CreateArticle')}}</button>
      </form>
    </div>
    @endif
    <div class="container">
      <div class="row">
        @forelse($articles as $article)
        <x-card :article="$article" />
        @empty
        <div class="col-12 my-3">
                <div class="circle m-5">
                    <h2 class="text-center fs-3 loremstyle">{{__('ui.noarticle')}}</h2>

                    <div class="d-flex justify-content-center mt-5">
                        <img width="200" src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-bag-3d-icon-download-in-png-blend-fbx-gltf-file-formats--ecommerce-shop-user-interface-pack-icons-8988733.png?f=webp" alt="">
                    </div>

                </div>

            </div>
        @endforelse
      </div>
    </div>
  </div>
</x-layout>
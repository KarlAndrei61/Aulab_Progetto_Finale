
  <x-layout>
  <div class="">
    @guest


    <div class=" text-center mt-5">
      <div class="slideffect">
      <img class="opacityeffect mb-3" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
      </div>
      <div class="col-lg-12 mx-auto">
      <p class="loremstyle">{{__('ui.makedifference')}}</p>
        <h1 class="display-5 fw-bold text-body-emphasis titleindex"> {{__('ui.titleHome')}}</h1>
        <div>
          <div class="m-5">
            <form action="{{route('login')}}">
              <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
            </form>
          </div>
        </div>
        @endguest
        @auth
        <div class=" text-center">
          <div class="slideffect">
          <img class="opacityeffect" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
          </div>
          <div class="col-lg-10 mx-auto">
            <p class="loremstyle">{{__('ui.makedifference')}}</p>
            <h1 class="display-5 fw-bold text-body-emphasis titleindex">{{__('ui.titleHome')}}</h1>
            @if(@!Auth::user()->is_revisor)
            <div>
              <div class="m-5">
                <form action="{{route('article.create')}}">
                  <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
                </form>
              </div>
            </div>
            @endif
            @endauth
            <div>
              <div class="container">
                <div class="row">
                  @forelse($articles as $article)
                  <x-card :article="$article" />
                  @empty
                  <div class="noannunci1">
                    <p>{{__('ui.noarticle')}}</p>
                  </div>
                  @endforelse
                </div>
              </div>

              @if (session()->has('errorMessage'))
              <div class="alert alert-danger text-center shadow rounded w-50">
                {{session('errorMessage')}}
              </div>
              @endif

              @if (session()->has('Message'))
              <div class="alert alert-danger text-center shadow rounded w-50">
                {{session('message')}}
              </div>
              @endif

            </div>
          </div>
    </div>
    </div>
  </div>
  </div>
</x-layout>

  <!-- <div>
      @guest
      <div class=" text-center mt-5">
        <div class="slideffect">
          <img class="opacityeffect" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
          <p class="loremstyle">
            {{__('ui.makedifference')}}
          </p>
          <h1 class="display-5 fw-bold text-body-emphasis titleindex">{{__('ui.titleHome')}}</h1>
        </div>
        <div class="m-5">
          <form action="{{route('login')}}">
            <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
          </form>
        </div>
      </div>
      @endguest
      @auth
      <div class=" text-center mt-5">
        <div class="slideffect">
          <img class="opacityeffect" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
          <p class="loremstyle">
            {{__('ui.makedifference')}}
          </p>
          <h1 class="display-5 fw-bold text-body-emphasis titleindex">{{__('ui.titleHome')}}</h1>
        </div>
          @if(@!Auth::user()->is_revisor)
            <div class="m-5">
              <form action="{{route('article.create')}}">
                <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
              </form>
            </div>
            @endif
            </div>
          @endauth
            <div class="container">
              <div class="row">
                @forelse($articles as $article)
                <x-card :article="$article" />
                @empty
                <div class="col-12 d-flex justify-content-center my-5 lasgros">
                  <p>{{__('ui.noarticle')}}</p>
                </div>
                @endforelse
              </div>
            </div>
            @if (session()->has('errorMessage'))
            <div class="alert alert-danger text-center shadow rounded w-50">
              {{session('errorMessage')}}
            </div>
            @endif
            @if (session()->has('Message'))
            <div class="alert alert-danger text-center shadow rounded w-50">
              {{session('message')}}
            </div>
            @endif
    </div> -->
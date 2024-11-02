<x-layout>
    <div class="">
        <div class="revisorbackground d-flex justify-content-center mt-5">
            <h1 class="revisortitle m-5">
                Revisor dashboard
            </h1>

        </div>
        @if($article_to_check)
        <div class="justify-content-center">
            <div class="container">
                <div class="row">
                    @if($article_to_check->images->count())
                    @foreach($article_to_check->images as $key => $image)
                    <div class="d-flex justify-content-center">
                        <div class="col-8">
                            <div class="card cardstile mb-3 p-4">
                                <div class="row g-0">
                                    <div class="col-12 col-ml-4 col-lg-4">
                                        <img src="{{ $image->getUrl(300, 300)}}" class="img-fluid rounded-5 bordercolor" alt="Immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @for($i = 0; $i < 6; $i++)


                    @endfor
                    @endif
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8 m-5 card cardborder mt-5">
                    <div class="d-flex justify-content-center mt-5 ">
                        <h1>{{ $article_to_check->title }}</h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h3>Autore: {{ $article_to_check->user->name }}</h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4>{{ $article_to_check->price }}$</h4>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="descriptionsize">{{ $article_to_check->description }}
                        <p>
                    </div>
                    <div class="d-flex justify-content-center mb-3 px-5">
                        <div class="mx-3">
                            <form action="{{ route('reject', ['article' => $article_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="bottonecustom">Rifiuta</button>
                            </form>
                        </div>
                        <div class="mx-3">
                            <form action="{{ route('accept', ['article' => $article_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="bottonecustom">Accetta</button>
                            </form>
                            <div class="m-2 d-flex justify-content-center">
                            @if (session()->has('message'))
                            {{ session('message')}}
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12">
                <div class="circle">
                    <h2 class="text-center fs-3 loremstyle">Nessun articolo</h2>

                    <div class="d-flex justify-content-center mt-5">
                        <img width="200" src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-bag-3d-icon-download-in-png-blend-fbx-gltf-file-formats--ecommerce-shop-user-interface-pack-icons-8988733.png?f=webp" alt="">
                    </div>

                </div>

            </div>
            @endif
</x-layout>
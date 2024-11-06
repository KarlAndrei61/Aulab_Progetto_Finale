<x-layout>
    <div class="revisorbackground d-flex justify-content-center">
        <h1 class="revisortitle m-3">
            Revisor dashboard
        </h1>
    </div>
    @if($article_to_check)
    <div class="container borderino">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                @if($article_to_check->images->count() > 0)
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach($article_to_check->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif ">
                            <img src="{{ $image->getUrl(300, 300)}}" class="d-block w-100" alt="Immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                        </div>
                        @endforeach
                    </div>
                    @if($article_to_check->images->count() > 1)
                    <button class="carousel-control-prev bottonecarosello" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon colorefreccia" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bottonecarosello" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon colorefreccia" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
                @else
                <div class="d-flex align-items-center justify-content-center">
                <p class="fs-2">Nessuna foto disponibile</p>
                </div>
                @for($i = 0; $i < 6; $i++)


                    @endfor
                    @endif
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <div>
                        <div class="d-flex justify-content-center mt-5 suoidati ">
                            <h1>{{ $article_to_check->title }}</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h3>Categoria: {{ $article_to_check->category->name }}</h3>
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
                        <div class="d-flex justify-content-center px-5 flex-column">
                            <div class="d-flex justify-content-center">
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
                            </div>
                            </div>
                                <div class="m-2 d-flex justify-content-center">
                                    @if (session()->has('message'))
                                    {{ session('message')}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @else
        <div class="circle">
            <h2 class="text-center fs-3 loremstyle">{{__('ui.noarticle')}}</h2>

            <div class="d-flex justify-content-center mt-5">
                <img width="200" src="https://cdn3d.iconscout.com/3d/premium/thumb/thumbs-up-hand-gesture-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--like-logo-all-the-best-thumb-hands-pack-illustrations-3039414.png" alt="">
            </div>

        </div>

        @endif
</x-layout>
    <x-layout>
        <div class="container borderino">
        <div class="row">
                <div class="col-6">
                    @if($article->images->count() > 0)
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif ">
                                <img src="{{ $image->getUrl(300, 300)}}" class="d-block w-100" alt="immagine {{ $key + 1 }} dell'articolo {{$article->title}}">
                            </div>
                            @endforeach
                        </div>
                        @if ($article->images->count() > 1)
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
                    <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
                    @endif
                    </div>
                    <div class=" text-center dettaglicard1 col-6 d-flex justify-content-center align-items-center">
                        <div>
                        <h1 class="titleindex">{{$article->title}}</h1>
                        <h4 class="titleindex">{{$article->price}}$</h4>
                        <h4 class="loremstyle">Descrizione</h4>
                        <p class="fs-5">{{$article->description}}</p>
                        </div>
                    </div>
                    </div>
                    </div>
    </x-layout>
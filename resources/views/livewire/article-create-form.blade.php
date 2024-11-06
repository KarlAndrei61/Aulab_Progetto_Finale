<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 cardCustomLogin">
      <h2 class="titleindex textColor">
        {{{__('ui.CreateArticle')}}}
      </h2>
      <form wire:submit="storeArticle">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-8 mb-3">
              <div class="d-flex justify-content-center">
                <label class="textColor mb-1" for="title">{{__('ui.titolo')}}</label>
              </div>
              <div>
                <input type="text" class="form-control" id="title" placeholder="{{__('ui.titolo')}}" wire:model="title">
              </div>
              <div class="textColor">
                @error('title')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="col-md-8 mb-3">
              <label class="textColor mb-1" for="price">{{__('ui.prezzo')}}</label>
              <input type="text" class="form-control" id="price" placeholder="{{__('ui.prezzo')}}" wire:model="price">
              <div class="textColor">
                @error('price')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="col-md-8 mb-3">
              <label class="textColor mb-1" for="description">{{__('ui.descrizione')}}</label>
              <input type="text" class="form-control" id="description" placeholder="{{__('ui.descrizione')}}" wire:model="description">
              <div class="textColor">
                @error('description')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="col-md-8 mb-3">
              <label class="textColor mb-1" for="category">{{__('ui.categoria')}}</label>
              <select id="category" wire:model="category" class="form-control">
                <option value="">{{__('ui.sceglicat')}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{__("ui.$category->name")}}</option>
                @endforeach
              </select>
              <div class="textColor">
                <div class="textColor">
                  @error('category')
                  {{$message}}
                  @enderror
                </div>
              </div>
            </div>
            <div class="gestioneimmagine col-md-8 mb-3 ">
              <label class="textColor mb-1" for="file">{{__('ui.foto')}}</label>
              <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is_invalid @enderror" placeholder="Img/">
              <div class="textColor">
                @error('temporary_images.*')
                <p>{{$message}}</p>
                @enderror
              </div>
              <div class="textColor">
                @error('temporary_images')
                <p>{{$message}}</p>
                @enderror
              </div>
            </div>
            @if (!empty($images))
            <div class="row text-center">
              <div class="col-12 textColor d-flex justify-content-center">
                <p>Photo preview:</p>
              </div>
                @foreach($images as $key => $image)
                <div class="col-12 col-lg-4 d-flex flex-column">
                  <div class="d-flex justify-content-center">
                  <div class="img-preview m-3" style="background-image: url({{ $image->temporaryUrl() }});"></div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="button" class="bottonecustom" wire:click="removeImage({{ $key }})">Rimuovi</button>
                  </div>
                </div>
                @endforeach
            </div>
            @endif
            <div class=" d-flex justify-content-center">
              <button class="bottoneinserisci m-3" type="submit">{{__('ui.CreateArticle')}}</button>
            </div>
            <div class="textColor fs-2">
              @if (session('success'))
              {{session('success')}}
              @endif
            </div>
      </form>
    </div>
  </div>
</div>

</div>
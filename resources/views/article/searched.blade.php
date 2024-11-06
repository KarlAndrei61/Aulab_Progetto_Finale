<x-layout>
    <div class=" text-center">
        <div class="d-flex mt-5 justify-content-center">
            <h1 class="mt-4 mb-1 titleindex">{{__('ui.articleresults')}} "{{ $query }}"</h1>
        </div>
        <div class="container">
            <div class="row">
                @forelse($articles as $article)
                <x-card :article="$article" />
                @empty
                        <div class="col-12">
                            <div class="circle">
                                <h2 class="text-center fs-3 loremstyle">{{__('ui.noarticle')}}</h2>

                                <div class="d-flex justify-content-center mt-5">
                                    <img width="200" src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-bag-3d-icon-download-in-png-blend-fbx-gltf-file-formats--ecommerce-shop-user-interface-pack-icons-8988733.png?f=webp" alt="">
                                </div>

                            </div>

                        </div>
                @endforelse
                <div>
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout>
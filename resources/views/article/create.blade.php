<x-layout>
@if(@!Auth::user()->is_revisor)
    <div class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <livewire:article-create-form />
                </div>
            </div>

        </div>
    </div>
@else
<div class="text-center fs-1 ">
    <p class="lasgros">
        Benvenuto revisor {{Auth::user()->name}}
    </p>
    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/secure-shield-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--check-safety-protective-cyber-security-pack-illustrations-4164977.png?f=webp" alt="">
</div>
@endif
</x-layout>
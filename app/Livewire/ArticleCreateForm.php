<?php

namespace App\Livewire;

use App\Jobs\RemoveFaces;
use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;




class ArticleCreateForm extends Component
{
    use WithFileUploads;

    public $images = [];
    public $temporary_images = [];

    #[Validate('required|min:5')]
    public $title;
    
    #[Validate('required|numeric')]
    public $price;
    
    #[Validate('required|min:10')]
    public $description;
    
    #[Validate('required')]
    public $category;
    public $categories;
    
    public $article;

    public function storeArticle(){
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);

        if (count($this->images) > 0){
            foreach($this->images as $image){
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }

        RemoveFaces::withChain([
            new ResizeImage($newImage->path, 300, 300)
        ])->dispatch($newImage->id);


            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->reset();
        session()->flash('success', 'Articolo creato correttamente');
    }

    public function render()
    {

        $this->categories = Category::all();

        return view('livewire.article-create-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024' , 
            'temporary_images' => 'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] =  $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }
}
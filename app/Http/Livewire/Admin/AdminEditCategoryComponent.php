<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $newimage;
    public $image;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
        $this->category_name = $category->name;
        $this->category_slug = $category->slug;
        $this->category_image = $category->image;
    }

    public function generateslug(){
        $this->slug= Str::slug($this->name);
    }

    public function updateCategory(){
        $category =  Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('category', $imageName);
            $category->image = $imageName;
        }     
        $category->save();
        session()->flash('message', 'Category has been updated successfully');  
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('livewire.admin.index');
    }
}

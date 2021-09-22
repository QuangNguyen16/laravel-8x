<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class FormManufacturesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;

    public function generateslug(){
        $this->slug= Str::slug($this->name);
    }

    public function storeCategory(){
        $category =  new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('category', $imageName);
        $category->image = $imageName;     
        $category->save();
        session()->flash('message', 'Category has been created successfully');  
    }

    public function render()
    {
      

        return view('livewire.admin.form-manufactures-component')->layout('livewire.admin.index');
    }
}

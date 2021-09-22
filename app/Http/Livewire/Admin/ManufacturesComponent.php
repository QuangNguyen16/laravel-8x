<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ManufacturesComponent extends Component
{
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully');  
    }

    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(6);
        return view('livewire.admin.manufactures-component',['categories'=>$categories])->layout('livewire.admin.index');
    }
}

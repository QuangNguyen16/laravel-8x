<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
        $products = Product::find($id);
        $products->delete();
        session()->flash('message', 'Product has been deleted successfully');
    }

 
 

    public function render()
    {
        $products = Product::paginate(9);
        return view('livewire.admin.admin-dashboard-component', ['products'=>$products])->layout('livewire.admin.index');
    }


}


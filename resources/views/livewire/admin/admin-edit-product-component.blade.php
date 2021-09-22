<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Edit Product</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Product Detail</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <!-- BEGIN USER FORM -->
                        <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="updateProduct">

                            {{-- Name --}}
                            <div class="form-group">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="product name" name="product-name"
                                        wire:model="name" wire:keyup="generateSlug" />
                                    *
                                </div>
                            </div>

                            {{-- Slug --}}
                            <div class="form-group">
                                <label class="control-label">Product Slug:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="product slug" name="product-slug"
                                        wire:model="slug" /> *
                                </div>
                            </div>

                            {{-- Short Description --}}
                            <div class="form-group">
                                <label class="control-label">Short Description:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="short description"
                                        name="short-description" wire:model="short_description" /> *
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="form-group">
                                <label class="control-label">Description:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="description" name="description"
                                        wire:model="description" /> *
                                </div>
                            </div>

                            {{-- Regular Price --}}
                            <div class="form-group">
                                <label class="control-label">Regular Price:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="regular price" name="regular-price"
                                        wire:model="regular_price" /> *
                                </div>
                            </div>

                            {{-- Sale Price --}}
                            <div class="form-group">
                                <label class="control-label">Sale Price: </label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="sale price" name="sale-price"
                                        wire:model="sale_price" /> *
                                </div>
                            </div>

                            {{-- SKU --}}
                            <div class="form-group">
                                <label class="control-label">SKU :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="SKU" name="sku" wire:model="SKU" /> *
                                </div>
                            </div>

                            {{-- Stock --}}
                            <div class="form-group">
                                <label class="control-label">Stock:</label>
                                <div class="controls">
                                    <select name="manu_id" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select> *
                                </div>
                            </div>

                            {{-- Featured --}}
                            <div class="form-group">
                                <label class="control-label">Featured:</label>
                                <div class="controls">
                                    <select name="manu_id" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select> *
                                </div>
                            </div>

                            {{-- Quantity --}}
                            <div class="form-group">
                                <label class="control-label">Quantity:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="quantity" name="quantity"
                                        wire:model="quantity" /> *
                                </div>
                            </div>

                            {{-- Product Image --}}
                            <div class="form-group">
                                <label class="control-label">Product Image</label>
                                <div class="controls col-md-4">
                                    <input type="file" class="input-file" placeholder="image" name="image"
                                        wire:model="newimage" />
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120">
                                    @else
                                        <img src="{{ asset('assets/images/products') }}/{{ $image }}" alt=""
                                            width="120">
                                    @endif
                                </div>
                            </div>

                            {{-- Category --}}
                            <div class="form-group">
                                <label class="control-label">Category:</label>
                                <div class="controls">
                                    <select name="manu_id" wire:model="category_id">
                                        <option value="0">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select> *
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                        <!-- END USER FORM -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

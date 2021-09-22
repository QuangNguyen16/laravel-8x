<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Add New Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Category Detail</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <!-- BEGIN USER FORM -->
                        <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label class="control-label">Category Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Category name" name="manu_name"
                                        wire:model="name" wire:keyup="generateslug" /> *
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Slug</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Slug" name="manu_name"
                                        wire:model="slug" /> *
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Choose an image :</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload" wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" alt="" width="120">
                                    @endif
                                </div>
                            </div>

                    </div>
                    <div class="form-group">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>

                    </form>
                    <!-- END USER FORM -->
                </div>
            </div>

        </div>
    </div>
</div>
</div>

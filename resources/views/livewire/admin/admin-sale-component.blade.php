<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Sale Setting</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Sale Setting</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <!-- BEGIN USER FORM -->
                        <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label class="control-label">Status :</label>
                                <div class="controls">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sale Date</label>
                                <div class="controls">
                                    <input type="text" id="sale-date" placeholder="YYYY/MM/DD H:M:S"
                                        class="form-control input-md" wire:model="sale_date">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Update</button>
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

@push('scripts')
    <script>
        
        $(function() {
            $('#sale-date').datetimepicker({
                    format: 'Y-MM-DD h:m:s',
                })
                .on('dp.change', function(ev) {
                    var data = $('#sale-date').val();
                    @this.set('sale_date', data);
                });
        });

    </script>
@endpush

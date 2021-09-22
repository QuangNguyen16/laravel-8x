<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Edit Coupon</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Coupons Detail</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <!-- BEGIN USER FORM -->
                        <form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="updateCoupon">
                            <div class="form-group">
                                <label class="control-label">Coupon Code :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Coupon Code" name="coupon_code"
                                        wire:model="code" /> *
                                    @error('code') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Coupon Type:</label>
                                <div class="controls">
                                    <select name="manu_id" wire:model="type" >
                                        <option value="">Select</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percent">Percent</option>
                                    </select> *
                                    @error('type') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Coupon Value</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Coupon Value" wire:model="value" /> *
                                    @error('value') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Cart Value</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Cart Value" wire:model="cart_value" /> *
                                    @error('cart_value') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Expiry Date</label>
                                <div class="controls" wire:ignore>
                                    <input type="date" id="expiry_date" class="span11" placeholder="Expiry Date"
                                        wire:model="expiry_date" /> *
                                    @error('expiry_date') <p class="text-danger">{{ $message }}</p>@enderror
                                </div>
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
@push('scripts')
    <script>
        $(function() {
            $('expiry_date').datetimepicker({
                    format: 'Y-MM-DD'
                })
                .on('dp.change', function(ev) {
                    var data = $('#expiry_date').val();
                    @this.set('expiry_date', data);
                });
        });
    </script>
@endpush

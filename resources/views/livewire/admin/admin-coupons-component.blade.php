<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Coupons</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{route('admin.addcoupon')}}"> <i
                                    class="icon-plus"></i> </a></span>
                        <h5>All Coupons</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Coupon Code</th>
                                    <th>Coupon Type</th>
                                    <th>Coupon Type</th>
                                    <th>Cart Value</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr class="">
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->type }}</td>
                                        @if($coupon->type == 'fixed')
                                        {
                                            <td>{{ $coupon->value }}</td>
                                        }
                                        @else{
                                            <td>{{ $coupon->value }} %</td>
                                        }
                                        @endif
                                        <td>{{ $coupon->cart_value }} $</td>
                                        <td>{{ $coupon->expiry_date }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcoupon', ['coupon_id' => $coupon->id])}}"
                                                class="btn btn-success btn-mini">Edit</a>
                                                
                                            <a href="#" class="btn btn-danger btn-mini" onclick="confirm('Are you sure, You want to delete this coupon?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteCounpon({{ $coupon->id }})">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

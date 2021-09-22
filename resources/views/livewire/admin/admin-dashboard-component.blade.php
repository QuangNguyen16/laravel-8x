<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Products</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{ route('admin.addproducts') }}"> <i
                                    class="icon-plus"></i> </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Sale ($)</th>
                                    <th>Price($)</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php ?>
                                @foreach ($products as $product)
                                    <tr class="">
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                width="60" /></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->sale_price }} $</td>
                                        <td>{{ $product->regular_price }} $</td>
                                        <td>{{ $product->category['name'] }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproducts', ['product_slug' => $product->slug]) }}"
                                                class="btn btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn btn-danger btn-mini"
                                                wire:click.prevent="deleteProduct({{ $product->id }})">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination">
                            {{ $products->links() }}
                            {{-- <li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li> --}}
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Manage Producer</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><a href="{{ route('admin.addcategory') }}"><i class="icon-plus"></i></a></span>
						<h5>Products</h5>
					</div>
					<div class="widget-content nopadding">
						@if(Session::has('message'))
							<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
						@endif
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Manu_Id</th>
								<th>Manu_Name</th>
								<th>Manu_image</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							@foreach ($categories as $category)
								<tr class="">
									<td>{{$category->id}}</td>
									<td>{{$category->name}}</td>
									<td><img src="{{asset('assets/images/category')}}/{{$category->image}}" style="width:150px", height="50px"></td>
									<td>
										<a href="{{ route('admin.editcategory', ['category_slug'=>$category->slug])}}" class="btn btn-success btn-mini">Edit</a>
										<a href="#" class="btn btn-danger btn-mini" wire:click.prevent="deleteCategory({{$category->id}})">Delete</a>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
				{{$categories->links()}}
			</div>
			
			
		</div>
	</div>
	
</div>
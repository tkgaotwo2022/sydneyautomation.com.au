<x-app-layout>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Product</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Product</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
    <!-- /.content-header -->
    
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('msg'))
                    <p class="alert alert-success">{{ Session::get('msg') }}</p>
                    @endif
                    <div class="card-header bg-dark">
                        <div class="row">
                            <div class="col-md-6"><h5>Product Table</h5></div>
                            
                            
                            <div class="col-md-6 text-right"><a href="<?= url('/'); ?>/productadd" class="btn btn-outline-success">Add New Product</a></div>
                        </div>
                    </div>
                    <div class="card-body bg-dark">
                        <table class="table " id="product_table">
                            <thead>
                                <tr>
                                    
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                   @foreach(json_decode($products) as $p)
                                <tr>
                                <td class="w-50"><a href="{{ route('all_products', ['product_edit_id' => encrypt($p->id)]) }}">{{$p->product_name}}</a></td>
                                <td>
                                    @if ($p->product_image != null)
                                                    <img src="{{ asset('product_images/' . $p->product_image) }}"
                                                        width="100" height="100" class="img-fluid">
                                                @else
                                                    <img src="{{ asset('product_images/no-img.png') }}" width="100"
                                                        height="100" class="img-fluid">
                                                @endif
                                </td>
                                <td>
                                    <div class="row">
                                         <a href="{{ route('all_products', ['product_edit_id' => encrypt($p->id)]) }}" class="btn btn-info btn-sm rounded-0">
                                           <i class="fa-solid fa-pen-to-square fa-flip"></i>
                                       </a>
                                       <a href="{{ route('all_products', ['product_delete_id' => encrypt($p->id)]) }}" class="btn btn-danger btn-sm rounded-0 ml-3 delete_form">
                                           <i class="fa-solid fa-trash fa-flip"></i>
                                            
                                       </a>
                                       
                                    </div>
                                </td>
                                 </tr>
                                @endforeach  
                               
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>


</x-app-layout>
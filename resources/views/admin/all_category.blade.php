<x-app-layout>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Category</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h5>Category Table</h5></div>
                            <div class="col-md-6 text-right"><button type="button" data-toggle="modal" data-target="#addCategory" class="btn btn-outline-success">Add New Category</button></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($secondmenu as $tsm)
                                <tr>
                                    <td>#</td>
                                    <td>{{$tsm->page_title}}</td>
                                    <td><a data-toggle="modal" data-target="#editCategory{{$tsm->id}}"><i class="bi bi-pencil-square"></i></a> &nbsp; <a href="deletecategory/{{$tsm->id}}"><i class="bi bi-trash3-fill"></i></a> </td>
                                </tr>
                                    @foreach($thirdmenu as $ttm)
                                    @if($ttm->parent_id == $tsm->id)
                                    <tr>
                                        <td>#</td>
                                        <td>-- {{$ttm->page_title}}</td>
                                        <td><a data-toggle="modal" data-target="#editChildcategory{{$ttm->id}}"><i class="bi bi-pencil-square"></i></a> &nbsp; <a href="deletecategory/{{$ttm->id}}"><i class="bi bi-trash3-fill"></i></a> </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

<!-- addCategory -->
<div class="modal fade bd-example-modal-lg" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="getaddcategory" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Category Title</label>
                    <input type="text" id="thename" name="page_title" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Category Slug</label>
                    <input type="text" id="theslug" name="page_slug" class="form-control">
                    @error('page_slug')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                     </div>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label>Is a Parent Category</label>
                    <input type="hidden" name="stage" value="3" id="setstage">
                    <select name="is_parrent" id="parentto" class="form-control">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                </div>
                <div class="col-md-6 form-group" id="selectparent">
                    <label>Parent Name</label>
                    <select name="parent_id" class="form-control">
                      <option value="" disabled selected>Select an Option</option>
                      @foreach($secondmenu as $sm)
                      <option value="{{$sm->id}}">{{$sm->page_title}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Title</label>
                    <input type="text" name="page_seotitle" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Description</label>
                    <input type="text" name="page_seo_description" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                    <label>Banner Iamage</label>
                    <input type="file" class="form-control" name="page_banner">
                </div>
                <div class="col-md-12 form-group text-center">
                    <button type="submit" class="btn btn-outline-success">Save Now</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@foreach($secondmenu as $tsm)
<!-- editCategory -->
<div class="modal fade bd-example-modal-lg" id="editCategory{{$tsm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="geteditcategory" method="post" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Category Title</label>
                    <input type="hidden" name="id" value="{{$tsm->id}}">
                    <input type="text" id="thename" value="{{$tsm->page_title}}" name="page_title" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Category Slug</label>
                    <input type="text" id="theslug" value="{{$tsm->page_slug}}" name="page_slug" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Is a Parent Category</label>
                    <select name="is_parrent" id="parentto" class="form-control">
                      <option value="0" {{$tsm->is_parrent == "0" ? 'selected' : ''}}>No</option>
                      <option value="1" {{$tsm->is_parrent == "1" ? 'selected' : ''}}>Yes</option>
                    </select>
                </div>
                <div class="col-md-6 form-group" id="selectparent">
                    <label>Parent Name</label>
                    <select name="parent_id" class="form-control">
                      <option value="null">Select an Option</option>
                      @foreach($secondmenu as $sm)
                      <option value="{{$sm->id}}">{{$sm->page_title}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Title</label>
                    <input type="text" value="{{$tsm->page_seotitle}}" name="page_seotitle" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Description</label>
                    <input type="text" value="{{$tsm->page_seo_description}}" name="page_seo_description" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Banner Iamage</label>
                    <input type="file" class="form-control" name="page_banner">
                </div>
                <div class="col-md-6 form-group">
                    <img src="<?= url('/'); ?>/uploads/{{$tsm->page_banner}}" class="img-fluid" style="width: 100px;">
                </div>
                <div class="col-md-12 form-group text-center">
                    <button type="submit" class="btn btn-outline-success">Save Now</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- editChildcategory{{$ttm->id}} -->
@foreach($thirdmenu as $ttm)
<div class="modal fade bd-example-modal-lg" id="editChildcategory{{$ttm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="geteditcategory" method="post" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Category Title</label>
                    <input type="hidden" name="id" value="{{$ttm->id}}">
                    <input type="text" id="thename" value="{{$ttm->page_title}}" name="page_title" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Category Slug</label>
                    <input type="text" id="theslug" value="{{$ttm->page_slug}}" name="page_slug" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Is a Parent Category</label>
                    <select name="is_parrent" id="parentto" class="form-control">
                      <option value="0" {{$ttm->is_parrent == "0" ? 'selected' : ''}}>No</option>
                      <option value="1" {{$ttm->is_parrent == "1" ? 'selected' : ''}}>Yes</option>
                    </select>
                </div>
                <div class="col-md-6 form-group" id="selectparent">
                    <label>Parent Name</label>
                    <select name="parent_id" class="form-control">
                      <option value="null">Select an Option</option>
                      @foreach($secondmenu as $sm)
                      <option value="{{$sm->id}}" {{$ttm->parent_id == $sm->id ? 'selected' : ''}}>{{$sm->page_title}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Title</label>
                    <input type="text" value="{{$ttm->page_seotitle}}" name="page_seotitle" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Seo Description</label>
                    <input type="text" value="{{$ttm->page_seo_description}}" name="page_seo_description" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Banner Iamage</label>
                    <input type="file" class="form-control" name="page_banner">
                </div>
                <div class="col-md-6 form-group">
                    <img src="<?= url('/'); ?>/uploads/{{$ttm->page_banner}}" class="img-fluid" style="width: 100px;">
                </div>
                <div class="col-md-12 form-group text-center">
                    <button type="submit" class="btn btn-outline-success">Save Now</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
</x-app-layout>
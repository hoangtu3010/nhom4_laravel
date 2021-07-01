@extends("layout")
@section("main")
    <div class="content-wrapper">
        <div class="container-header">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Departments</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url("/admin")}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url("/admin/departments")}}">List Department</a></li>
                                <li class="breadcrumb-item active">Edit Department</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{url("/admin/departments/update", ["id"=>$departments->id])}}" method="post"
                                  class="needs-validation"
                                  novalidate>
                                @csrf
                                <div class="form-group" style="margin-bottom: 30px">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input name="name" value="{{$departments->name}}" type="text" class="form-control"
                                           id="validationCustom01"
                                           required>
                                    <div class="invalid-feedback">
                                        Please enter name.
                                    </div>
                                </div>
                                <div class="form-group" style="margin: 30px 0 20px 0">
                                    <label for="validationCustom02" class="form-label">Description</label>
                                    <textarea name="description" rows="7" class="form-control" id="validationCustom02">{{$departments->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <a href="{{url("/admin/departments")}}">
                                        <button class="btn btn-secondary" type="button">Back</button>
                                    </a>
                                    <button class="btn btn-outline-success" type="submit" style="float: right">
                                        Lưu
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

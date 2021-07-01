@extends("layout")
@section("main")
    <div class="content-wrapper" style="padding: 0 20px">
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
                                <li class="breadcrumb-item active">List Department</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content" style="margin-top: 20px">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" style="line-height: 36px">List Department</h1>
                            <div class="card-tools" style="float: left; margin-left: 30px">
                                <div class="input-group" style="width: 250px; margin: 0">
                                    <input type="text" name="table_search" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url("/admin/departments/add")}}"><button class="btn btn-outline-success" style="float: right">Thêm mới</button></a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                <th>Id</th>
                                <th width="20%">Name</th>
                                <th width="40%">Description</th>
                                <th class="text-center">Updated At</th>
                                <th width="10%" colspan="2"></th>
                                </thead>
                                <tbody>
                                @foreach ($departments as $item)
                                    <tr style="box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->__get("description")}}</td>
                                        <td class="text-center">{{$item->updated_at}}</td>
                                        <td class="text-center">
                                            <a class="badge bg-info" href="{{url("/admin/departments/edit", ["id"=>$item->id])}}" style="color: #17a2b8; padding: 8px"><i class="far fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="badge bg-danger" href="{{url("/admin/departments/delete", ["id"=>$item->id])}}" style="color: #dc3545; padding: 8px"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

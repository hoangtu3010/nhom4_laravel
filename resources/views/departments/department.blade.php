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
                            <h1 class="card-title">List Department</h1>
                            <a href="{{url("/admin/departments/add")}}"><button class="btn btn-outline-info" style="float: right">Thêm mới</button></a>
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
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->__get("description")}}</td>
                                        <td class="text-center">{{$item->updated_at}}</td>
                                        <td class="text-center">
                                            <a href="{{url("/admin/departments/edit", ["id"=>$item->id])}}" style="color: #17a2b8"><i class="far fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{url("/admin/departments/delete", ["id"=>$item->id])}}" style="color: #dc3545"><i class="fas fa-trash"></i></a>
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

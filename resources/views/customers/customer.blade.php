@extends("layout")
@section("main")
    <div class="content-wrapper">
        <div class="container-header">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Customers</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">List Customer</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content" style="margin-top: 20px">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">List Customer</h1>
                            <a href="{{url("/customers/add")}}"><button class="btn btn-outline-info" style="float: right">Thêm mới</button></a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                <th>Id</th>
                                <th width="30%">Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Lead</th>
                                <th width="10%" colspan="2"></th>
                                </thead>
                                <tbody>
                                @foreach ($customers as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->Lead->__get("name")}}</td>
                                        <td class="text-center">
                                            <a href="{{url("/customers/edit", ["id"=>$item->id])}}" style="color: #17a2b8"><i class="far fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{url("/customers/delete", ["id"=>$item->id])}}" style="color: #dc3545"><i class="fas fa-trash"></i></a>
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

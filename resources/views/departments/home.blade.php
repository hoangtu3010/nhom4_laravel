@extends("layout")
@section("main")
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 style="text-align: center;margin: 20px">Danh sách Nhân viên </h2>
                </div>
                <div class="col-md-10">
                    <table style="text-align: center" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($departments  as $cat)
                            <tr>
                                <td>{{$cat->__get("id")}}</td>
                                <td>{{$cat->__get("name")}}</td>
                                <td>{{$cat->__get("created_at")}}</td>
                                <td>{{$cat->__get("updated_at")}}</td>
                                {{--                    <td>{{$cat->__get("class_id")}}</td>--}}

                                <td>
                                    <a href="{{url("departments/delete",["id"=>$cat->id])}}"><i style="color: red;margin-right: 20px;font-size: 20px" class="far fa-trash-alt"></i></a>
                                    <a href="{{url("departments/edit",["id"=>$cat->id])}}"><i style="margin-left: 20px;font-size: 20px" class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <a style="width: 100px" href="{{url("departments/add")}}" class="btn btn-outline-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
@endsection

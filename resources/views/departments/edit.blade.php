@extends("layout")
@section("main")
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div  class="col-md-12">
                    <div >
                        <div style="text-align: center;margin: 20px">
                            <h2>Sửa thành viên  </h2>
                        </div>
                        <form method="post" action="{{url("/departments/update",["id"=>$departments->id])}}" >
                            @csrf
                            <div>
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" value="{{$departments->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error("name")<div class="alert alert-warning">{{$message}}</div>@enderror
                            </div>

                            <div style="text-align: center;margin-top: 20px">
                                <button  type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends("layout")
@section("main")
    <div class="content-wrapper">
        <div class="container-header">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Leads</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url("/admin")}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url("/admin/lead")}}">List Lead</a></li>
                                <li class="breadcrumb-item active">Add Lead</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{url("/admin/lead/save")}}" method="post" class="row needs-validation"
                                  novalidate>
                                @csrf

                                <div class="col-md-4" >
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" id="validationCustom01"
                                           placeholder="Name" required>
                                    <div class="invalid-feedback">
                                        Please enter name.
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <label for="validationCustom02" class="form-label">Birthday</label>
                                    <input name="birthday" type="date" class="form-control" id="validationCustom02"
                                           placeholder="Birthday" required>
                                    <div class="invalid-feedback">
                                        Please enter Birthday.
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <label for="validationCustom03" class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control" id="validationCustom03"
                                           placeholder="Phone" required>
                                    <div class="invalid-feedback">
                                        Please enter phone.
                                    </div>
                                </div>

                                <div class="col-md-4" style="margin-top: 30px" >
                                    <label for="validationCustom04" class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" id="validationCustom04"
                                           placeholder="email" required>
                                    <div class="invalid-feedback">
                                        Please enter email.
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 30px">
                                    <label for="validationCustom05" class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control" id="validationCustom05"
                                           placeholder="Address" required>
                                    <div class="invalid-feedback">
                                        Please enter Address.
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 30px" >
                                    <label for="validationCustom06" class="form-label">Category</label>
                                    <select name="department_id" class="form-control" id="validationCustom06" required>
                                        <option selected disabled value="">Choose Department...</option>
                                        @foreach($departments as $item)
                                            <option
{{--                                                @if(old("department_id")==$item->__get("id")) selected @endif--}}
                                            value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a supplier.
                                    </div>
                                </div>

                                <div class="col-md-12" style="margin-top: 40px">
                                    <a href="{{url("/admin/lead")}}">
                                        <button class="btn btn-secondary" type="button">Back</button>
                                    </a>
                                    <button class="btn btn-outline-success" type="submit" style="float: right">Thêm
                                        mới
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

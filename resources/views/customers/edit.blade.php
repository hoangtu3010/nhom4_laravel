@extends("layout")
@section("main")
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url("/admin")}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url("/admin/customers/customer")}}">List Customer</a></li>
                            <li class="breadcrumb-item active">Edit Customer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>
                    </div>
                    <div class="card-body">
                        <form class="row needs-validation" action="{{url("/admin/customers/update", ["id" => $customers->id])}}" method="post" novalidate>
                            @csrf
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="validationCustom01" value="{{$customers->__get("name")}}" placeholder="Name" required />
                                <div class="invalid-feedback">
                                    Please enter name.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Birthday</label>
                                <input name="birthday" type="date" class="form-control" id="validationCustom02" value="{{$customers->__get("birthday")}}" placeholder="Birthday" required />
                                <div class="invalid-feedback">
                                    Please enter birthday.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Phone Number</label>
                                <input name="phone" type="text" class="form-control" id="validationCustom03" value="{{$customers->__get("phone")}}" placeholder="Phone" required />
                                <div class="invalid-feedback">
                                    Please enter phone number.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom03" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="validationCustom03" value="{{$customers->__get("email")}}" placeholder="Email" required />
                                <div class="invalid-feedback">
                                    Please enter email.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom03" class="form-label">Address</label>
                                <input name="address" type="text" class="form-control" id="validationCustom03" value="{{$customers->__get("address")}}" placeholder="Address" required />
                                <div class="invalid-feedback">
                                    Please enter phone address.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom05" class="form-label">Leads</label>
                                <select name="lead_id" class="form-control" id="validationCustom05" required>
                                    <option selected disabled value="">Choose Lead...</option>
                                    @foreach($lead as $item)
                                        <option @if($item->__get("id")== $customers->Lead->__get("id") ) selected @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a supplier.
                                </div>
                            </div>
                            <div class="col-12" style="margin-top: 40px">
                                <a href="{{url("/admin/customers")}}"><button class="btn btn-secondary" type="button">Back</button></a>
                                <button class="btn btn-outline-info" type="submit" style="float: right">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

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
                            <li class="breadcrumb-item"><a href="{{url("/admin/customers")}}">List Customer</a></li>
                            <li class="breadcrumb-item active">Add Customer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <div class="card-body">
                        <form class="row needs-validation" action="{{url("/admin/customers/save")}}" method="post" novalidate>
                            @csrf
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="validationCustom01" value="" placeholder="Name" required />
                                <div class="invalid-feedback">
                                    Please enter name.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Birthday</label>
                                <input name="birthday" type="date" class="form-control" id="validationCustom02" value="" placeholder="Birthday" required />
                                <div class="invalid-feedback">
                                    Please enter birthday.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Phone Number</label>
                                <input name="phone" type="text" class="form-control" id="validationCustom03" value="" placeholder="Phone" required />
                                <div class="invalid-feedback">
                                    Please enter phone number.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom03" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="validationCustom03" value="" placeholder="Email" required />
                                <div class="invalid-feedback">
                                    Please enter phone email.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom03" class="form-label">Address</label>
                                <input name="address" type="text" class="form-control" id="validationCustom03" value="" placeholder="Address" required />
                                <div class="invalid-feedback">
                                    Please enter address.
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 30px">
                                <label for="validationCustom05" class="form-label">Leads</label>
                                <select name="lead_id" class="form-control" id="validationCustom05" required>
                                    <option selected disabled value="">Choose Lead...</option>
                                    @foreach($customers as $item)
                                        <option value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a supplier.
                                </div>
                            </div>
                            <div class="col-12" style="margin-top: 40px">
                                <a href="{{url("/admin/customers")}}"><button class="btn btn-secondary" type="button">Back</button></a>
                                <button class="btn btn-outline-success" type="submit" style="float: right">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('admin.master')

@section('admin_content')

<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row">
            <div class="text-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('/')}}/admin/create-user-reg">
                    <i class="zmdi zmdi-plus"></i>add item</a>

            </div>
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>date</th>
                                <th>order ID</th>
                                <th>name</th>
                                <th class="text-right">price</th>
                                <th class="text-right">quantity</th>
                                <th class="text-right">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userdata as $users)
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->contact_no}}--{{$users->whatsapp_no}}</td>
                                <td>iPhone X 64Gb Grey</td>
                                <td class="text-right">$999.00</td>
                                <td class="text-right">1</td>
                                <td class="text-right">$999.00</td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
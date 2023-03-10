@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Companies Management'])
<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="alert alert-light" role="alert">
            This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
            <strong>
                <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                    here
                </a>
            </strong>
        </div>
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Employees</h6> <a href="{{route('employees-create')}}">Create</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Company</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                            <tr>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$employee->nama}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$employee->email}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">{{$employee->companies->nama}}</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <a href="{{url('employees-update?id=' . $employee->id)}}" class="text-sm font-weight-bold mb-0">Edit</a>
                                        <a href="{{url('employees-delete?id=' . $employee->id)}}" class="text-sm font-weight-bold mb-0 ps-2">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">No Data</h6>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
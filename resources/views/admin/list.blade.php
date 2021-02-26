@extends('admin.index')
@section('page-content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Administrator List</h4>
                    {{-- <p class="card-description">
                    Add class
                    <code>.table-hover</code>
                    </p> --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Accessibility</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listAdmin as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($item->deleted == 0)
                                                <label class="badge badge-success">Active</label>
                                            @else
                                                <label class="badge badge-danger">Disabled</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
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

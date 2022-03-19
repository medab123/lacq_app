@extends('layouts.master')


@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card " style=" background-color: rgb(255, 255, 255)">
        <div class="card-header d-inline ">{{ __('Users Management') }}
            @can('user-create')
                <a class="btn btn-success btn-sm float-right d-inline" href="{{ route('users.create') }}">Create New User</a>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-sm ">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center  text-nowrap">#</th>
                            <th class="text-center  text-nowrap">Name</th>
                            <th class="text-center  text-nowrap">Email</th>
                            <th class="text-center  text-nowrap">Roles</th>
                            <th class="text-center  text-nowrap">Active</th>

                            <th class="text-right pr-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td class="text-center text-nowrap">{{ $user->id }}</td>
                                <td class="text-center text-nowrap">{{ $user->name }}</td>
                                <td class="text-center text-nowrap">{{ $user->email }}</td>

                                <td class="text-center text-nowrap">
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="text-center text-nowrap"><label class="badge badge-{{ ($user->is_active == true) ? "success" : "danger"  }}">{{ ($user->is_active == true) ? "Active" : "Desactiver"  }}</label></td>

                                <td class="text-right text-nowrap">

                                    <a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}"><i
                                            class="fa fa-eye " aria-hidden="true"></i></a>
                                    @can('user-edit')
                                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}"><i
                                        class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('user-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                
                
            @endsection

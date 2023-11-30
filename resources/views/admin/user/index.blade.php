@extends('layouts.master')
@section('content')
@section('title', 'View Users')



<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<div class="container-fluid px-4">

    <div class="card">
        <div class="card-header">
            <h4>View Users</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table margin="auto" id="Itemstable" class="table table-bordered">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>

                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role_as == '1' ? 'admin' : 'User' }}</td>


                            <td align="center">
                                <a href="{{ url('admin/edit-user/' . $item->id) }}"
                                    class="btn btn-outline-success">Edit</a>
                            </td>

                            <td align="center">
                                <a href="{{ url('admin/delete-user/' . $item->id) }}"
                                    class="btn btn-outline-danger">Delete</a>
                            </td>


                        </tr>
                    @endforeach
                </tbody>



            </table>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Itemstable').DataTable();
    });
</script>
@endsection

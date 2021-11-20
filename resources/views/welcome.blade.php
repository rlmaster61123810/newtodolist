@extends("layout.master")
@section('title', 'My todo list')
@section('content')
    <h1>หน้าหลัก</h1>
    {{-- table show todolist --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>starus</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            {{-- mockup data --}}
                <tr>
                    <td>1</td>
                    <td>อาหาร</td>
                    <td>กำลังทำ</td>
                    <td>
                        <a href="#" class="btn btn-warning">edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>อาหาร</td>
                    <td>กำลังทำ</td>
                    <td>
                        <a href="#" class="btn btn-warning">edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
        </tbody>
    @endsection

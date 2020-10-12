@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายชื่อคณะและศูนย์สำนัก</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- เขียนส่วนแสดงผล-->

<table class="table table-bordered">
    <tr>
        <th><center>ลำดับ</center></th>
        <th><center>รายชื่อคณะ </center></th>

        </tr>
        @foreach ($faculty as $fac)
        <tr>
            <td><center>{{$fac->faculty_id}}</center></td>
            <td><a href="">{{$fac->faculty_name}}</a></td>
        </tr>
        @endforeach
</table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection

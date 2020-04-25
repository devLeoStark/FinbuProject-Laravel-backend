{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Người dùng')

@section('content_header')
    <h1>Người sử dụng</h1>
@stop

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/users.css')}}">
<script src="https://kit.fontawesome.com/2e591a5e23.js" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-tools row">
                        <div class="col-sm-3 offset-sm-8">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        </div>
                        <div class="col-sm-1">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <th width="4%">STT</th>
                                <th width="15%">Fullname</th>
                                <th width="10%">Gender</th>
                                <th width="10%">Date of birth</th>
                                <th width="10%">Cellphone</th>
                                <th width="24%">Address</th>
                                <th width="18%">Email</th>
                                <th width="3%"></th>
                                <th width="3%"></th>
                                <th width="3%"></th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $stt = $stt+1 }}</td>
                                    <td>{{ $user->User_Name }}</td>
                                    <td>{{ $user->Gender }}</td>
                                    <td>{{ $user->User_DoB }}</td>
                                    <td>{{ $user->Cellphone }}</td>
                                    <td>{{ $user->Address }}</td>
                                    <td>{{ $user->Email }}</td>
                                    <td id="btn_action"><button class="btn btn-info" title="Chi tiết"><i class="fas fa-info-circle"></i></button></td>
                                    <td id="btn_action"><button class="btn btn-success"><i class="fas fa-edit" title="Sửa"></i></button></td>
                                    <td id="btn_action"><button class="btn btn-danger"><i class="fas fa-trash-alt" title="Xóa"></i></button></td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        {{-- <div class="col-sm-5">
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputName">name</label>
                            <input type="text" class="form-control" id="exampleInputName" name="exampleInputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Registration</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
@stop
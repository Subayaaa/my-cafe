@extends('Template.index')

@section('title', 'Category Add')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="/users/{{ @$data->id }}" method="POST" enctype="multipart/form-data">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="file" id="file" name="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Input User</h3>
                                </div>
                                @if (@$data)
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nama"
                                            value="{{ @$data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            value="{{ @$data->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            value="{{ @$data->password }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select name="level" class="custom-select rounded-0">
                                            <option value="2" {{ @$data->status == 2 ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Kasir
                                            </option>
                                            <option value="0" {{ @$data->status == 0 ? 'selected' : '' }}>Blokir
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection

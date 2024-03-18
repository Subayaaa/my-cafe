@extends('Template.index')

@section('title', 'Customer Add')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Barang</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="/stuffs/{{ @$data->id }}" method="POST" enctype="multipart/form-data">
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
                                    <h3 class="card-title">Input Barang</h3>
                                </div>

                                @if (@$data)
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">Kode</label>
                                        <input type="text" class="form-control" name="id" placeholder="Kode"
                                            value="{{ @$data->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nama"
                                            value="{{ @$data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="text" class="form-control" name="price" placeholder="Harga"
                                            value="{{ @$data->price }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="unit">Unit</label>
                                        <input type="text" class="form-control" name="unit" placeholder="Unit"
                                            value="{{ @$data->unit }}">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="1"
                                                {{ @$data->gender == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="gender">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="2"
                                                {{ @$data->gender == 2 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="gender">Perempuan</label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="custom-select rounded-0">
                                            <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Ada
                                            </option>
                                            <option value="0" {{ @$data->status == 0 ? 'selected' : '' }}>Belum Ada
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_category">Kategori</label>
                                        <select name="id_category" class="custom-select rounded-0">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ @$data->id_category == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
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

@extends('firebase.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Pemesanan
                        <a href="{{ url('pemesanan') }}" class="btn btn-sm btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-pemesanan/'.$key) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>Id Pemesanan</label>
                            <input type="text" name="idPemesanan" value="{{$editdata['idPemesanan']}}" value="Disabled readonly input" class="form-control" disabled readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label>Id User</label>
                            <input type="text" name="userId" value="{{$editdata['userId']}}" value="Disabled readonly input" class="form-control" disabled readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label>Kategori</label>
                            <input type="text" name="kategori" value="{{$editdata['kategori']}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Jenis Sepatu</label>
                            <input type="text" name="sepatu" value="{{$editdata['sepatu']}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Jumlah Sepatu</label>
                            <input type="text" name="jumlah" value="{{$editdata['jumlah']}}" value="Disabled readonly input" class="form-control" disabled readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label>Metode Pembayaran</label>
                            <input type="text" name="metode" value="{{$editdata['metode']}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Status Pembayaran</label>
                            <input type="text" name="statusPembayaran" value="{{$editdata['statusPembayaran']}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
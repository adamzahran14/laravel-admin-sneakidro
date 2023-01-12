@extends('firebase.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pemesanan
                        <!-- <a href="{{ url('edit-pemesanan') }}" class="btn btn-sm btn-primary float-end"> Edit Pemesanan</a> -->
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Pemesanan</th>
                                <th>Id User</th>
                                <th>Kategori</th>
                                <th>Jenis Sepatu</th>
                                <th>Jumlah Sepatu</th>
                                <th>Metode Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @forelse ($Pemesanan as $key => $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item['idPemesanan'] }}</td>
                                <td>{{ $item['userId'] }}</td>
                                <td>{{ $item['kategori'] }}</td>
                                <td>{{ $item['sepatu'] }}</td>
                                <td>{{ $item['jumlah'] }}</td>
                                <td>{{ $item['metode'] }}</td>
                                <td>{{ $item['statusPembayaran'] }}</td>
                                <td><a href="{{ url('edit-pemesanan/'.$key) }}" class="btn btn-sm btn-success">Edit</a></td>
                                <td>
                                    <!-- <a href="{{ url('delete-pemesanan/'.$key) }}" class="btn btn-sm btn-danger">Delete</a> -->
                                    <form action="{{ url('delete-pemesanan/'.$key) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <main class="mx-auto m-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Pemesanan List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pemesan</th>
                                    <th>Kategori</th>
                                    <th>Jenis Sepatu</th>
                                    <th>Jumlah Sepatu</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Id Pemesanan</th>
                                    <th>Id User</th>
                                </tr>
                            </thead>
                            <tbody id="Pemesanan Data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Pemesanan Add Form --}}

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Add Pemesanan</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="formTambahPemesanan" autocomplete="off">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" placeholder="Enter Nama">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kategori Pesanan</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <option value="soft-cleaning">Soft Cleaning</option>
                                    <option value="deep-cleaning">Deep Cleaning</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jenis Sepatu</label>
                                <input type="text" class="form-control" id="jenis_sepatu" name="jenis_sepatu" placeholder="Enter Jenis Sepatu">
                            </div>
                            <div class="card-footer">
                                <button id="buttonTambahPesanan" type="button" class="btn btn-success btn-block">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div> -->
@endsection

<!-- @push('script')
<script>
    $(document).ready(function() {

    })
</script>

@endpush -->
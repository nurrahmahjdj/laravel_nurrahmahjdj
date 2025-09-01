@include('theme.header')
<div class="container">
    <div class="p-5">
        <div class="d-flex justify-content-center">
            <h4 class="display-6">Data Rumah Sakit</h4>
        </div>
        <div class="card shadow my-5">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Rumah Sakit</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('hospitals.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input name="name" placeholder="Nama" class="form-control form-control-md mb-2">
                        </div>
                        <div class="col">
                            <input name="address" placeholder="Alamat" class="form-control mb-2">
                        </div>
                        <div class="col">
                            <input name="email" placeholder="Email" class="form-control mb-2">
                        </div>
                        <div class="col">
                            <input type="text" name="phone" placeholder="Telepon" class="form-control mb-2">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-sm btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card shadow my-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table gs-7 gy-7 gx-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hospitals as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td><button class="btn btn-sm btn-danger del-btn" data-id="{{ $data->id }}">Delete</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.del-btn').click(function(){
        if(confirm('Hapus data ini?')){
            $.ajax({
                url:'/hospitals/'+$(this).data('id'),
                type:'POST',
                data:{
                    _token:'{{ csrf_token() }}',
                    _method:'DELETE'
                },
                success:function(res){ location.reload(); }
            });
        }
    });
</script>
@include('theme.footer')

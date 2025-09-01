@include('theme.header')
<div class="container">
    <div class="p-5">
        <div class="d-flex justify-content-center">
            <h4 class="display-6">Dashboard Pasien</h4>
        </div>
        <div class="card shadow my-5">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Pasien</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('patients.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input name="name" placeholder="Nama" class="form-control form-control-md mb-2">
                        </div>
                        <div class="col">
                            <input name="address" placeholder="Alamat" class="form-control mb-2">
                        </div>
                        <div class="col">
                            <input type="text" name="phone" placeholder="Telepon" class="form-control mb-2">
                        </div>
                        <div class="col">
                            <select class="form-select form-select-transparent" name="hospital_id">
                                <option value="">Semua Rumah Sakit</option>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-sm btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card shadow my-5">
            <div class="card-header my-3 d-flex justify-content-between align-items-center">
                <h4 class="card-title">Data Pasien</h4>
                <div class="d-flex gap-2">
                    <select class="form-select" id="hospitalFilter">
                        <option value="">Semua Rumah Sakit</option>
                        @foreach($hospitals as $hospital)
                            <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table gs-7 gy-7 gx-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Rumah Sakit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="patientTable">
                            @foreach($patients as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->hospital ? $data->hospital->name : '-' }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger del-btn" data-id="{{ $data->id }}">Delete</button>
                                    </td>
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
    function bindDelete() {
        $('.del-btn').off('click').on('click', function(){
            if(confirm('Hapus data ini?')){
                $.ajax({
                    url:'/patients/'+$(this).data('id'),
                    type:'POST',
                    data:{
                        _token:'{{ csrf_token() }}',
                        _method:'DELETE'
                    },
                    success:function(res){ location.reload(); }
                });
            }
        });
    }

    bindDelete();

    function loadPatients() {
        var hospital_id = $('#hospitalFilter').val();
        var name = $('#searchName').val();

        $.get('/patients', {hospital_id:hospital_id, name:name}, function(data){
            var tbody = $(data).find('#patientTable').html();
            $('#patientTable').html(tbody);

            bindDelete();
        });
    }

    $('#hospitalFilter').change(loadPatients);
    $('#searchBtn').click(loadPatients);

</script>
@include('theme.footer')

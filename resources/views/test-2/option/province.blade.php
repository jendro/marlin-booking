<option value="">- Silahkan Pilih Provinsi -</option>
@foreach($data_r as $province)
    <option value="{{ $province->province_id }}">{{ $province->province }}</option>
@endforeach
<option value="">- Silahkan Pilih Kabupaten / Kota -</option>
@foreach($data_r as $city)
    <option value="{{ $city->city_id }}">{{ $city->type }} {{ $city->city_name }}</option>
@endforeach
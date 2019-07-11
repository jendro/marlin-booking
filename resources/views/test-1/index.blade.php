@extends('layouts.main')

@section('title','Test 1')

@section('content')
<div style="margin-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom:30px">
                <h2>Program Perulangan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 animate-box">
                <div class="user-frame">
                    <h3>Masukan Jumlah Perulangan</h3>
                    <input type="number" name="jumlah_perulangan" id="jumlah_perulangan" class="form-control">
                    <p>*enter untuk submit</p>
                </div>
            </div>
            <div class="col-md-7 animate-box" id="hasil_perulangan">
                
            </div>
        </div>
    </div>
</div>


<script>
$("#jumlah_perulangan").keypress(function(e){
   if(e.which==13){
        proses_perulangan();
   }
});

function proses_perulangan()
{
    let jumlah_perulangan = $("#jumlah_perulangan").val()*1;
    $.post("{{ route('test1.process') }}",{jumlah:jumlah_perulangan}).done(function(data){
        $('#hasil_perulangan').html(data);
    });
}
</script>
@endsection
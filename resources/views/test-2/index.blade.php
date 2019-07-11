@extends('layouts.main')

@section('title','Test 1')

@section('content')
<div style="margin-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom:30px">
                <h2>Cek Ongkir Dari Jogja</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 animate-box">
                <div class="user-frame">
                    <h3>
                        Provinsi 
                        <img style="width:20px" id="loader-province" class="hide" src="{{ asset('images/loader.gif') }}" alt="">
                    </h3>
                    <select required id="provinsi" class="form-control">
                        <option value="-">- Silahkan Pilih Provinsi -</option>
                    </select>
                    <h3>
                        Kabupaten / Kota
                        <img style="width:20px" id="loader-city" class="hide" src="{{ asset('images/loader.gif') }}" alt="">
                    </h3>
                    <select required id="kabupaten" class="form-control">
                        <option value="-">- Silahkan Pilih Kabupaten / Kota -</option>
                    </select>
                    <h3>
                        Kurir
                    </h3>
                    <select required id="kurir" class="form-control">
                        <option value="-">- Silahkan Pilih Kurir -</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                    <h3>Berat (gram)</h3>
                    <input type="number" name="berat" id="berat" class="form-control">
                    <p>*enter untuk submit</p>
                </div>
            </div>
            <div class="col-md-7 animate-box" id="hasil">
                
            </div>
        </div>
    </div>
</div>
<style>
h3{
    margin-top:10px;
    margin-bottom:0;
}
</style>

<script>

function get_province()
{
    $("#loader-province").removeClass('hide');
    $("#berat").val('');
    $.get("{{ route('get_province') }}").done(function(data){
        $("#provinsi").html(data);
        $("#loader-province").addClass('hide');
    })
}

function get_city(){
    let province = $("#provinsi").val();
    $("#loader-city").removeClass('hide');
    $("#berat").val('');
    if(province!=''){
        $.get("{{ route('get_city') }}?province="+province).done(function(data){
            $("#kabupaten").html(data);
            $("#loader-city").addClass('hide');
        })
    }else{
        $("#kabupaten").html('<option value="">- Silahkan Pilih Kabupaten / Kota </option>');
        $("#loader-city").addClass('hide');
    }
}


$(document).ready(function(){
    get_province();
})

$("#provinsi").change(function(){
    get_city();
})

$("#berat").keypress(function(e){
   if(e.which==13){
        hitung_ongkir();
   }
});

function hitung_ongkir()
{
    let city = $("#kabupaten").val();
    let kurir = $("#kurir").val();
    let berat = $("#berat").val()*1;
    if(city!=''&&kurir!=''&&berat!=0){
        $.post("{{ route('hitungOngkir') }}",{
            destination:city,
            courier:kurir,
            weight:berat
        }).done(function(data){
            $("#hasil").html(data);    
        })
    }else{
        $("#hasil").html('');
    }
    
}
</script>
@endsection
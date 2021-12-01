@extends('layouts.app')

@section('title')
Cek Resi
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Form -->
            <form action="/detail" method="GET">
                <legend>Cek Keberadaan Paket Sekarang</legend>
                <div class="mb-3 form-group">
                    <label for="awb" class="form-label">No Resi</label>
                    <input type="text" name="awb" id="awb" class="form-control" placeholder="Masukan No Resi Anda">
                </div>

                <div class="mb-3 form-group">
                    <label for="courier" class="form-label">Pilih Kurir</label>
                    <select id="courier" name="courier" class="form-select">
                        <option value selected hidden>Pilih Kurirnya</option>
                        <option value="jnt">jnt</option>
                        <option value="jne">jne</option>
                        <option>sicepat</option>
                        <option>pos</option>
                        <option>tiki</option>
                        <option>anteraja</option>
                        <option>ninja</option>
                        <option>spx</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- akhir form -->
        </div>

        <!-- validate jika tidak terisi -->
        @if (count($errors) > 0)
        <div class=" alert alert-danger justify-content-center">
            <div class="col-md-10">
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </div>
        </div>
        @endif
        <!-- akhir validate -->


    </div>
</div>
<footer class="text-center text-black bg-light p-3" style="position: absolute; bottom:0; width:100%; height:60px;">
    <p>Created by <i class="bi bi-suit-heart-fill"></i> Fahmy Fauzi </p>
</footer>
@endsection
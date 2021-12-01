@extends('layouts.app')

@section('title')
Cek Resi
@endsection

@section('content')


<div class="container">

    <div class="p-3">
        <form action="{{route('print.pdf')}}" target="_blank">
            <input type="hidden" name="courier" value="<?= $_GET['courier'] ?>">
            <input type="hidden" name="awb" value="<?= $_GET['awb'] ?>">
            <!-- <a href="{{route('print.pdf')}}" target="_blank" class="btn btn-primary">Cetak Pdf</a> -->
            <input type="submit" value="CETAK PDF" class="btn btn-primary">
        </form>

    </div>

    <div class="row col-md-10 justify-content-center">


        <!-- menangkap data array api publik -->

        @foreach($response as $r)
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">{{$r['location']}}</h5>
                <p class=" card-text fs-7">{{$r['desc']}}</p>
                <p class="card-text">{{$r['date']}}</p>
            </div>
        </div>
        @endforeach

    </div>
</div>



<footer class="text-center text-black bg-light p-3 ">
    <p>Created by <i class="bi bi-suit-heart-fill"></i> Fahmy Fauzi </p>
</footer>
@endsection
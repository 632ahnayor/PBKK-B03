@extends('layouts.app')

@section('title', 'Kalkulator')

@section('content')

<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title h3">Kalkulator</h1>
            
            <span>{{ $angka1 }}</span>
                
            <span>
                @if ($operasi == 'tambah')
                +
                @elseif ($operasi == 'kurang')
                -
                @elseif ($operasi == 'kali')
                ×
                @elseif ($operasi == 'bagi')
                ÷
                @elseif ($operasi == 'modulo')
                %
                @elseif ($operasi == 'pangkat')
                ^
                @endif
            </span>
                
            <span>{{ $angka2 }}</span>
                
            <span>=</span>
                
            <strong>{{ $hasil }}</strong>

            <p>
                Hasil dari {{ $angka1 }} {{ $operasi }} {{ $angka2 }} adalah <strong>{{ $hasil }}</strong>
            </p>

            <p>
                Operasi yang tersedia: tambah, kurang, kali, bagi, modulo, pangkat.
            </p>
        </div>
    </div>
</div>
    
@endsection
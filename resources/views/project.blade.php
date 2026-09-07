@extends('layouts.app')

@section('title', 'Project')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title h3">Project Idea: SprintSync</h1>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="h-100 border rounded p-4">
                        <h2>Problem</h2>
                        <p class="mb-0">Freelancer dan tim sprint sering kehilangan banyak waktu setiap minggunya hanya untuk koordinasi jadwal dan menghadapi kalender yang terfragmentasi. Aplikasi penjadwalan saat ini bersifat pasif—hanya menampilkan slot kosong secara membabi buta, sehingga memecah waktu kerja fokus (deep work) dan membuat tenggat waktu proyek terganggu.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 border rounded p-4">
                        <h2>What is SprintSync?</h2>
                        <p class="mb-0">Kami membangun agentic AI penjadwal otomatis yang mengintegrasikan Email, Kalender, Task Tracker (seperti Jira/Linear/Trello), dan Zoom. Berbeda dengan kalender biasa, agen ini memahami prioritas dan deadline sprint, sehingga waktu kerja fokus diperlakukan sebagai komitmen penting yang tidak boleh sembarangan tertimpa meeting.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 border rounded p-4">
                        <h2>Feature</h2>
                        <p class="mb-0">Fitur utamanya mencakup negosiasi email mandiri (membaca permintaan masuk, menilai tingkat urgensi, dan menyepakati jadwal tanpa repot balas-membalas email), penyesuaian jadwal dinamis (menggeser rapat berprioritas rendah secara otomatis jika ada keperluan mendesak), serta orkestrasi Zoom otomatis (membuat tautan, mengatur jeda waktu antar-rapat, dan menyusun ringkasan agenda dari konteks pesan sebelumnya).</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 border rounded p-4">
                        <h2>Outcome</h2>
                        <p class="mb-0">Dengan mengubah penjadwalan dari sekadar kalender pasif menjadi delegasi cerdas, agen ini memangkas 3–5 jam beban administratif per minggu sekaligus melindungi waktu fokus tim agar target sprint selalu tercapai tepat waktu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

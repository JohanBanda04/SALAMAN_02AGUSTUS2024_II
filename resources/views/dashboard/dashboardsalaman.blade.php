@extends('layouts.admin.tabler')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">

                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div hidden class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132
                                    </div>
                                    <div class="text-secondary">
                                        Karyawan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-success text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg"
                                   class="icon icon-tabler icon-tabler-fingerprint" width="24"
                                   height="24" viewBox="0 0 24 24" stroke-width="2"
                                   stroke="currentColor" fill="none" stroke-linecap="round"
                                   stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <path d="M18.9 7a8 8 0 0 1 1.1 5v1a6 6 0 0 0 .8 3" />
                                  <path d="M8 11a4 4 0 0 1 8 0v1a10 10 0 0 0 2 6" />
                                  <path d="M12 11v2a14 14 0 0 0 2.5 8" />
                                  <path d="M8 15a18 18 0 0 0 1.8 6" />
                                  <path d="M4.9 19a22 22 0 0 1 -.9 -7v-1a8 8 0 0 1 12 -6.95" />
                              </svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekappresensi->jmlhadir }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        Jumlah Kendaraan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-info text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg"
                                   class="icon icon-tabler icon-tabler-file-text"
                                   width="24" height="24"
                                   viewBox="0 0 24 24" stroke-width="2"
                                   stroke="currentColor" fill="none"
                                   stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                  <path d="M9 9l1 0" /><path d="M9 13l6 0" /><path d="M9 17l6 0" />
                              </svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekapizin->jmlizin != null? $rekapizin->jmlizin : 0 }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        Jumlah Pinjaman Kendaraan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-warning text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-sick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" /><path d="M9 10h-.01" /><path d="M15 10h-.01" /><path d="M8 16l1 -1l1.5 1l1.5 -1l1.5 1l1.5 -1l1 1" /></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekapizin->jmlsakit != null ? $rekapizin->jmlsakit : 0 }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        Jumlah Ruangan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-danger text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-5 2.66a1 1 0 0 0 -.993 .883l-.007 .117v5l.009 .131a1 1 0 0 0 .197 .477l.087 .1l3 3l.094 .082a1 1 0 0 0 1.226 0l.094 -.083l.083 -.094a1 1 0 0 0 0 -1.226l-.083 -.094l-2.707 -2.708v-4.585l-.007 -.117a1 1 0 0 0 -.993 -.883z" stroke-width="0" fill="currentColor" /></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekappresensi->jmlterlambat }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        Jumlah Pinjaman Ruangan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
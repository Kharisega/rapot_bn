@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/das.css') }}" rel="stylesheet">

</head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="logop">
                <img src="https://lh3.googleusercontent.com/vnPTEaiWERTE87hqyro36hhy1_2i-Tc8EgLEX4Fi19Dl28JoisU8jubiAkbl5fa_IAQrMA=s136" alt="">
                <h2><strong>R</strong>APORT</h2>
                <h6><strong>B</strong>agimu <strong>N</strong>egeriku</h6>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">Data SMK</a>
                    <a class="dropdown-item" href="#">Penilaian</a>
                    <a class="dropdown-item" href="#">Profile</a>
                </div>
                </li>

            </ul>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <div class="navbar">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
                @endguest
            </ul>

        </nav>


        <div class="row" id="body-row">
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <ul class="list-group">
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small><marquee> MAIN MENU</marquee></small>
                    </li>
                        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fa fa-dashboard fa-fw mr-3"></i>
                                <span class="menu-collapsed">Dashboard</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>
                        <div id='submenu1' class="collapse sidebar-submenu">
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Settings</span>
                            </a>
                        </div>
                        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-dashboard fa-fw mr-3"></span>
                                <span class="menu-collapsed">Data SMK</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>
                        <div id='submenu2' class="collapse sidebar-submenu">
                            <a href="{{ route('mapel.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Mata pelajaran</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Semester</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Tahun Ajaran</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Jurusan</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Kelas</span>
                            </a>
                        </div>

                    <a href="{{ route('guru.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Data Guru</span>
                        </a>
                        <a href="{{ route('siswa.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Data Siswa</span>
                        </a>
                    <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fa fa-dashboard fa-fw mr-3"></i>
                                <span class="menu-collapsed">Penilaian</span>
                                <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                        <div id='submenu3' class="collapse sidebar-submenu">
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Tugas</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Remedial</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Keterampilan</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                <span class="menu-collapsed">Penilaian Harian</span>
                            </a>
                        </div>
                    
                    <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-user fa-fw mr-3"></span>
                            <span class="menu-collapsed">Profile</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    <div id='submenu4' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Settings</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Password</span>
                        </a>
                        <a class="list-group-item list-group-item-action bg-dark text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                    </div>
                </ul>
            </div> <!-- End Sidebar -->

            <!-- MAIN -->
                <div class="col">
                    afykg
                
                </div>
        </div>

        
    </body>
</html>

@endsection

<!-- Sidebar start
*********************************** -->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <div class="sidebar-user text-center">
            <a href="profile">
                <img class="avatar-lg rounded-circle img-thumbnail" src="{{ asset('griyakhitan/images/ava.png') }}"
                    alt="" width="75px" />
                <div class="badge-bottom"><span class="badge badge-success">
                        {{ Auth::user()->name }}</span>
                </div>
                <h6 class="mt-3 f-14 f-w-600"></h6>
            </a>
        </div>

        <div class="scroll-container">
            {{-- <button class="scroll-btn left" onclick="scrollLeft()">&#9664;</button> --}}
            <ul class="metismenu" id="menu">
                <!-- Divider for Data Master -->
                <li class="m-4 text-muted">
                    <span class="nav-text fs-4">Data Master</span>
                </li>
                <!-- Data Master Section -->
                @if (Auth::user()->role_id == '1')
                    <li><a href="{{ route('gejala') }}" aria-expanded="false">
                            <i class="fa fa-stethoscope"></i>
                            <span class="nav-text">Gejala</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role_id != '1')
                    <li><a href="{{ route('diagnosa') }}" aria-expanded="false">
                            <i class="fa fa-diagnoses"></i>
                            <span class="nav-text">Diagnosa</span>
                        </a>
                    </li>
                    <li><a href="{{ route('terapi') }}" aria-expanded="false">
                            <i class="fa fa-pills"></i>
                            <span class="nav-text">Terapi</span>
                        </a>
                    </li>
                @endif
                <!-- Divider for Main Menu -->
                <li class="m-4 text-muted">
                    <span class="nav-text fs-4">Main Menu</span>
                </li>

                @if (Auth::user()->role_id == '1')
                    <li><a href="{{ route('admin') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                @else
                    <li><a href="{{ route('dokter') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == '1')
                    <li><a href="{{ route('data-pasien') }}" aria-expanded="false">
                            <i class="fa fa-book"></i>
                            <span class="nav-text">Pendaftaran</span>
                        </a>
                    </li>
                @elseif(Auth::user()->name == 'DokterGigi')
                    <li><a href="{{ route('data-gigi') }}" aria-expanded="false">
                            <i class="fa fa-pen"></i>
                            <span class="nav-text">Pemeriksaan</span>
                        </a>
                    </li>
                @else
                    <li><a href="{{ route('data-priksa') }}" aria-expanded="false">
                            <i class="fa fa-pen"></i>
                            <span class="nav-text">Pemeriksaan</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->name != 'DokterGigi')
                    <li><a href="{{ route('khitan') }}" aria-expanded="false">
                            <i class="fa fa-crop"></i>
                            <span class="nav-text">Khitan</span>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="{{ route('riwayat') }}" aria-expanded="false">
                        <i class="fa fa-database"></i>
                        <span class="nav-text">Riwayat</span>
                    </a>
                </li>
            </ul>

        </div>

        <div class="copyright">
            <p><strong>Griya Khitan Zaza </strong> ©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved
            </p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

@push('addon-script')
    <script>
        function scrollLeft() {
            const container = document.querySelector('.scroll-container');
            container.scrollBy({
                left: -100,
                behavior: 'smooth'
            });
        }

        // function scrollRight() {
        //     const container = document.querySelector('.scroll-container');
        //     container.scrollBy({
        //         left: 100,
        //         behavior: 'smooth'
        //     });
        // }
    </script>
@endpush

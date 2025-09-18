@extends('layout.admin.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-5 rounded-4">
                <div class="card-body text-center p-6">

                    <!-- Foto Avatar -->
                     <img src="../assets/images/profile/user-1.jpg"{{ urlencode(Auth::user()->name ?? 'User') }}&background=0D8ABC&color=fff&size=120" 
                         alt="Profile Picture" 
                         class="rounded-circle mb-3 shadow">

                    <!-- Nama User -->
                    <h4 class="fw-bold mb-1">{{ Auth::user()->name ?? 'Usrok' }}</h4>
                    <p class="text-muted mb-4">{{ Auth::user()->email ?? 'cruel@gmail.com' }}</p>

                    <!-- Info Tambahan -->
                    <div class="text-start mb-4">
                        <p><i class="bi bi-telephone me-2"></i><strong>No HP:</strong> {{ Auth::user()->phone ?? '0847537847' }}</p>
                        <p><i class="bi bi-geo-alt me-2"></i><strong>Alamat:</strong> {{ Auth::user()->alamat ?? 'Sundeng, Bangunsari' }}</p>
                    </div>

                    <!-- Tombol -->
                    <div class="d-grid gap-2">
                        <a href="{{ url('/profile/edit') }}" class="btn btn-primary rounded-pill">✏️ Edit Profile</a>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger rounded-pill">🚪 Logout</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

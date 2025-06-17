@extends('template.login')

@section('content')
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-lg-7 d-none d-lg-block p-0">
            <div style="background: url('https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?q=80&w=1974&auto=format&fit=crop') center center / cover; height: 100vh;"></div>
        </div>

        <div class="col-lg-5 d-flex justify-content-center align-items-center bg-white">
            <div class="col-md-10 col-lg-9">
                <div class=" mb-5">
                     <h1 class="fw-bolder text-primary mb-0 display-1" >LOGIN</h1>
                     <p class="text-muted m-0">untuk mengakses dashboard klasifikasi teks berita</p>
                </div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" value="{{ old('email') }}" required>
                        <label for="floatingEmail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                         @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid mb-3">
                         <button type="submit" class="btn btn-primary btn-lg fw-bold">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

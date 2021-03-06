@extends('dashboard\navbar')

@section('isiNavbar')
<body>
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card mb-3 border-dark">
                        <div class="card-head bg-dark" align="center">
                            <h3 class="text-center mb-3"> SI TUNTAS </h3>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center mb-3">Panitia</h3>
                            <form action="/Admin/Home" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="user_id" class="form-control mb-3" id="user_id" placeholder="NIK" autofocus required>
                                        @error('user_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control mb-3" id="passMhs" name="password" placeholder="Password" required>
                                </div>
                                <input type="hidden" id="status" name="status" value="Pejabat">
                                <div class="form-group form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="rmbMe">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary btn-lg">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

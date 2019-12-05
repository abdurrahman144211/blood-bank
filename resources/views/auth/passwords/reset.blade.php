@component('auth.components.auth')
    @slot('form')
        <div class="card">
            <div class="card-header">إعادة تعيين كلمة المرور الخاصة بك</div>

            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label">البريد الإلكترونى</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label">كلمة المرور</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label">تأكيد كلمة المرور</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            تغيير كلمة المرور
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endslot
@endcomponent
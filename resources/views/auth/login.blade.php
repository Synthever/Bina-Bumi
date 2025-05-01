<x-auth-navbar />

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow border-radius-10" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="">Forgot your password?</a>
        </div>
        <div class="text-center mt-2">
            <a href="">Don't have an account? Register</a>
        </div>
    </div>
</div>


<x-auth-navbar />
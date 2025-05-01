<x-auth-navbar />

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 800px;">
        <h3 class="text-center mb-4">Register</h3>
        <form action="/register/submit" id="register_form" enctype="multipart/form-data" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password" name="confirm" placeholder="Re-enter your password" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Sign up</button>
        </form>
        <div class="text-center mt-3">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="text-center mt-2">
            <a href="/login">Already have an account? Login</a>
        </div>
    </div>
</div>


<x-auth-navbar />
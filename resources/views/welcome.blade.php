<!DOCTYPE html>
<html lang="en" class="bg-dark bg-gradient">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Registration Form</title>
    <style>
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid #495057;
            background-color: #343a40;
            color: #fff;
        }
        
        .form-control:focus {
            background-color: #343a40;
            border-color: #6c757d;
            color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .header-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100 bg-dark bg-gradient py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card bg-dark text-light">
                    <div class="card-body p-4 p-md-5">
                        <!-- Header -->
                        <div class="text-center mb-4">
                            <div class="header-icon">📧</div>
                            <h2 class="fw-bold mb-2">Registration Form</h2>
                            <p class="text-muted">Fill out the form below and we'll get back to you soon</p>
                        </div>

                        <form action="{{ route('SendEmail') }}" method="post">
                            @csrf
                            
                            <div class="row">
                                <!-- Personal Information Section -->
                                <div class="col-12">
                                    <h5 class="text-primary mb-3 border-bottom pb-2">Personal Information</h5>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           placeholder="Enter your full name" 
                                           name="name"
                                           value="{{ old('name') }}"
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           id="email" 
                                           placeholder="Enter your email" 
                                           name="email"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="birth_date" class="form-label">Birth Date</label>
                                    <input type="date" 
                                           class="form-control @error('birth_date') is-invalid @enderror" 
                                           id="birth_date" 
                                           name="birth_date"
                                           value="{{ old('birth_date') }}">
                                    @error('birth_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- Account Security Section -->
                                <div class="col-12 mt-4">
                                    <h5 class="text-primary mb-3 border-bottom pb-2">Account Security</h5>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password *</label>
                                    <input type="password" 
                                           class="form-control @error('password') is-invalid @enderror" 
                                           id="password" 
                                           placeholder="Create a password" 
                                           name="password"
                                           required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password *</label>
                                    <input type="password" 
                                           class="form-control @error('confirm_password') is-invalid @enderror" 
                                           id="confirm_password" 
                                           placeholder="Confirm your password" 
                                           name="confirm_password"
                                           required>
                                    @error('confirm_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- Message Section -->
                                <div class="col-12 mt-4">
                                    <h5 class="text-primary mb-3 border-bottom pb-2">Your Message</h5>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" 
                                           class="form-control @error('subject') is-invalid @enderror" 
                                           id="subject" 
                                           placeholder="Enter message subject" 
                                           name="subject"
                                           value="{{ old('subject') }}"
                                           required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="message" 
                                              rows="6" 
                                              placeholder="Type your message here..." 
                                              name="message"
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-submit btn-lg">
                                    <span class="me-2">📤</span> Send Message
                                </button>
                            </div>
                            
                            <div class="text-center mt-3">
                                <small class="text-muted">Fields marked with * are required</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kHyN5d13pJOnhjOE/hMaLq4QpBlnqF7Lg5APD4FLxsoQNDLVz0pRYZSTU6p73pP9" crossorigin="anonymous"></script>
    
    <script>
        // Simple password confirmation validation
        document.addEventListener('DOMContentLoaded', function() {
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm_password');
            
            function validatePassword() {
                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity("Passwords don't match");
                } else {
                    confirmPassword.setCustomValidity('');
                }
            }
            
            password.addEventListener('change', validatePassword);
            confirmPassword.addEventListener('keyup', validatePassword);
        });
    </script>
</body>

</html>
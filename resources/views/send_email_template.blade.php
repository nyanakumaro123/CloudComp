<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 20px;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        
        .email-header h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .email-header p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .email-body {
            padding: 30px;
        }
        
        .message-card {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .info-item {
            margin-bottom: 15px;
        }
        
        .info-label {
            font-weight: 600;
            color: #667eea;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        
        .info-value {
            font-size: 14px;
            color: #333;
            word-break: break-word;
        }
        
        .message-content {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 20px;
            margin-top: 10px;
            white-space: pre-line;
        }
        
        .email-footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
            font-size: 12px;
            color: #6c757d;
        }
        
        .timestamp {
            text-align: center;
            color: #6c757d;
            font-size: 12px;
            margin-bottom: 20px;
            padding-top: 10px;
            border-top: 1px solid #e9ecef;
        }
        
        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .email-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Email Message Received</h1>
            <p>You have received a new message from your website</p>
        </div>
        
        <!-- Body -->
        <div class="email-body">
            <div class="message-card">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">From</div>
                        <div class="info-value">{{ $name }}</div>
                        {{-- <div class="info-value"><h4>mantap</h4></div> --}}
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ $email }}</div>
                        {{-- <div class="info-value"><h4>mantap</h4></div> --}}
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Birth Date</div>
                        <div class="info-value">{{ $birth_date }}</div>
                        {{-- <div class="info-value"><h4>mantap</h4></div> --}}
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Subject</div>
                        <div class="info-value">{{ $subject }}</div>
                        {{-- <div class="info-value"><h4>mantap</h4></div> --}}
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Date</div>
                        <div class="info-value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">Message</div>
                    <div class="message-content">
                        {{ $userMessage }}
                        {{-- <div class="info-value"><h4>mantap</h4></div> --}}
                    </div>
                </div>
            </div>
            
            <div class="timestamp">
                This email was sent automatically from your website <a href="https://kumaro.khufra.my.id/">registration form</a>.
            </div>
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Your Company') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
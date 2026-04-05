<?php
// Login page - standalone, not linked to main site
session_start();

// Dummy users for demonstration (no database)
$users = array(
    'user1' => 'password123',
    'user2' => 'pass456',
    'admin' => 'admin123'
);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        $error = 'Invalid username or password';
        // Do NOT store the username - fields will be blank
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            background: white;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border: 2px solid #333;
            border-radius: 8px;
            box-shadow: 4px 4px 12px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 2rem;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        
        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        input:focus {
            outline: none;
            border-color: #333;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: #333;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: bold;
        }
        
        button:hover {
            background: #555;
        }
        
        .error {
            background: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #c62828;
        }
        
        .info {
            margin-top: 20px;
            padding: 15px;
            background: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.85rem;
        }
        
        .info p {
            margin: 5px 0;
        }
        
        hr {
            margin: 20px 0;
            border-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>McDonald Login</h1>
        
        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="" required>
            </div>
            
            <button type="submit">Login</button>
        </form>
        
        <div class="info">
            <p><strong>Demo Credentials:</strong></p>
            <p>Username: user1 | Password: password123</p>
            <p>Username: user2 | Password: pass456</p>
            <p>Username: admin | Password: admin123</p>
        </div>
    </div>
</body>
</html>
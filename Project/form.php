<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 2rem; }
        .form-container { max-width: 500px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 1rem; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 0.5rem; margin-top: 0.5rem; }
        button { margin-top: 1.5rem; padding: 0.7rem 2rem; background: #007BFF; color: white; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Registration</h2>
        <form method="POST" action="submit.php">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" required>

            <label for="email">Email Address</label>
            <input type="email" name="email" required>

            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <label for="bio">Short Bio</label>
            <textarea name="bio" rows="4"></textarea>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

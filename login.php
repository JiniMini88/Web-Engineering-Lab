<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f57224, #ff9966);
        }

        form {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
            font-weight: bold;
        }

        p {
            text-align: center;
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #ffe6d0;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #fff;
            color: #f57224;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #ffe6d0;
        }
    </style>
</head>
<body>
    <form action="validation.php" method="post">
        <h2>Login Form</h2>
        <p>Please enter your username and password to login.</p>

        <label>Name:</label>
        <input type="text" id="nm" name="username" placeholder="Enter your name">

        <label>Password:</label>
        <input type="password" id="pass" name="pass" placeholder="Enter password">

        <label>Confirm Password:</label>
        <input type="password" id="cpass" name="cpass" placeholder="Confirm password">

        <button type="submit">Submit</button>
    </form>
</body>
</html>

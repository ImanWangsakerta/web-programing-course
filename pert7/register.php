<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        input::placeholder {
            color: #888;
        }
    </style>
</head>
<body>
    <div>
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <input type="text" name="name" placeholder="Masukkan nama anda" required>
            <input type="email" name="email" placeholder="Masukkan email anda" required>
            <input type="password" name="password" placeholder="Masukkan password anda" required>
            <input type="password" name="confirm" placeholder="Masukkan konfirmasi password anda" required>
            <input type="submit" value="Register" name="submit">
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #e8f5e9; 
            font-family: 'Roboto', sans-serif;
            margin: 0; 
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px; 
        }

        .form-container {
            background-color: #fff; /
            border-radius: 8px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            padding: 30px; 
            width: 300px; 
            text-align: left; 
        }

        label {
            font-weight: bold;
            margin-bottom: 5px; 
            display: block; 
        }

        input[type="text"] {
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 4px;
            margin-bottom: 15px; 
            box-sizing: border-box; 
        }

        button {
            background-color: #4CAF50; 
            color: white; 
            padding: 10px 15px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            transition: background-color 0.3s; 
        }

        button:hover {
            background-color: #45a049; 
        }
    </style>

</head>
<body>
    <h1>Create User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

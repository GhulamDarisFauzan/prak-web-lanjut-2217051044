<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f4f8; 
            font-family: Arial, sans-serif;
        }
        .profile-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px; 
        }
        .profile-logo {
            width: 100px; 
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%; 
            border: 2px solid #4CAF50; 
        }
        h2 {
            margin: 10px 0;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Optional: to add some space between image and table */
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd; 
        }
        td:first-child {
            font-weight: bold; 
        }
    </style>

</head>
<body>

    <div class="profile-container">
        <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Logo Profile" class="profile-logo">
        <h2>Profile Details</h2>

    <p>Nama: {{ $nama }}</p>
    <p>NPM: {{ $npm }}</p>
    <p>Kelas: {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p>


</body>
</html>


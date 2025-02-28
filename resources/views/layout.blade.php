<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Absensi Siswa</h2>
        <form action="#" method="POST">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" placeholder="Enter your student ID" required>

            <label for="attendance">Keterangan</label>
            <select id="attendance" name="attendance" required>
                <option value="present">Hadir</option>
                <option value="absent">Izin / Sakit</option>
                <option value="late">Terlambat</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>

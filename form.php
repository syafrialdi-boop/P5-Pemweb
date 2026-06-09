<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container{
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 400px;
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        input:focus{
            border-color: #007bff;
        }

        button{
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover{
            background: #0056b3;
        }

        .hasil{
            margin-top: 20px;
            padding: 15px;
            background: #e9f7ef;
            border-left: 5px solid #28a745;
            border-radius: 8px;
        }
    </style>
</head>
<body class="body-html">
    <form>
        <div class="nama-label">
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>

        <div class="alamat-label">
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>

<?php # membuka tag PHP

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];

# di sini nanti kita akan tampilkan variabel $nama dan $alamat
if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}

# jangan lupa tutup tag PHP
?>

</body>
</html>
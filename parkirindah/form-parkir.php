<DOCTYPE! html>
    <html lang="en">
    <head>
        <title>Form Parkir</title>
</head>
<body>
    <header>
        <h1>Form Parkir</h1>
</header>
<form action= "proses.php" method="POST">
    <fieldset>
        <p>
        <label for= "Nama"> Jenis Kendaraan</label>
        <input type= "text" name="Nama"/>
</p>
<p>
    <label for= "Jenis"></label>
    <p>Tarif Harga </p>
    <p><input type='radio' name='Jenis' value = '2000' /> 2000</p>
    <p><input type='radio' name='Jenis' value = '3000' /> 3000</p>
    <p><input type='radio' name='Jenis' value = '5000' /> 5000</p>
</p>
<p>
    <input type= "submit" value = "Kirim Data" name="simpan"/>
</p>
</body>
</html>

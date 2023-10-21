<!DOCTYPE html>
<html>
<head>
	<title>latihan2_php</title>
</head>
<body>
	<h1> Kalkulator <h1>
    	<form>
	    <div>
		<label for="angka">Masukkan Angka:</label> 
		<input type="number" id="angka" name="angka">
	    </div>

	    <div>
		<label for="dropdown">Operasi</label>
		<select id="dropdown" name="pilihan">
			<option value="pilihan1">+</option>
			<option value="pilihan2">-</option>
			<option value="pilihan3">*</option>
		</select>    
	    </div>
		<button type="submit" class="btn btn-primary">Hitung</button>
	</form>
</body>
</html>

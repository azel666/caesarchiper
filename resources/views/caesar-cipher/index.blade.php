<!DOCTYPE html>
<html>
<head>
	<title>Caesar Cipher Kalkulator</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
	<style>
	body {
			font-family: 'Poppins', sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
            display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
    .container {
        padding: 20px 20px 20px 20px;
		display: flex;
			width: 1000px;
			flex-direction: row;
			background-color: white;
			border-radius: 10px;
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
			overflow: hidden;
	}

	.form-container {
		flex: 1;
		max-width: 500px;
		margin-right: 50px;
	}

	.form-container h2 {
		margin-top: 0;
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.form-container form label {
		font-size: 16px;
		margin-bottom: 5px;
		font-weight: bold;
		display: block;
	}

	.form-container form input[type="text"],
	.form-container form input[type="number"] {
		padding: 10px;
		margin-bottom: 15px;
		border-radius: 5px;
		border: 1px solid #ccc;
		width: 100%;
	}

	.form-container form button[type="submit"] {
		background-color: #5DADE2;
		color: white;
		padding: 10px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		width: 18%;
        font-weight: bold;
	}

	.result-container {
		flex: 1;
		padding-left:15px;
		max-width: 500px;
        /* border-left: 1px solid black; */
	}

	.result-container h2 {
        text-align: center;
		margin-top: 0;
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.result-container p {
		font-size: 16px;
		margin-top: 0;
		font-weight: bold;
		margin-bottom: 5px;
	}

	.result-container .result {
        text-transform:uppercase;
		font-size: 24px;
		font-weight: bold;
        padding-left:10px;
        background-color: white;
		border: 1px solid black;
        border-radius: 15px;
        height:450px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="form-container">
			<h2>Enkripsi</h2>
			<form method="POST" action="{{ route('encrypt') }}">
				@csrf
				<label for="text">Masukkan plainteks</label>
				<input type="text" id="text" name="text">
                <label for="shift">Masukkan K</label>
			<input type="number" id="shift" name="shift">

			<button type="submit">Enkripsi</button>
		</form>
        <br><br>

		<h2>Dekripsi</h2>
		<form method="POST" action="{{ route('decrypt') }}">
			@csrf
			<label for="text">Masukkan plainteks </label>
			<input type="text" id="text" name="text">

			<label for="shift">Masukkan K</label>
            <input type="number" id="shift" name="shift">
            <button type="submit">Dekripsi</button>
		</form>
	</div>


	<div class="result-container">
		<h2>Hasil</h2>
		@if (isset($result))
			<div class="result">{{ $result }}</div>
		@endif
	</div>

</div>
</body>
</html>

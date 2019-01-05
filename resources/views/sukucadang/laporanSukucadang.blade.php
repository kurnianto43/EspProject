<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	h2 {
		text-align: center;
        margin-bottom: 50px;
	}
	        body 
        {
            font-family: sans-serif;
            font-size: 15px;

        }
        table
        {
            width: 90%;
        }

        table, th, td
        {
            border : 1px solid black;
            border-collapse: collapse;
            opacity: 0.95;

        }

        th, td
        {
            padding: 10px;
            text-align: center;
        }
</style>
<body>
	
	<h2>Data Suku Cadang Esp Banjarbaru Tanggal {{ $tgl }}</h2>
	<br>
	 <table align="center">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                            <th>Nomor Suku Cadang</th>
                                            <th>Nama Suku Cadang</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($sukucadangs as $sukucadang)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $sukucadang -> nomor_suku_cadang}}</td>
                                            <td>{{ $sukucadang -> nama_suku_cadang }}</td>
                                            <td>{{ $sukucadang -> jumlah_suku_cadang }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>

                                <p style="margin-left: 600px; margin-top: 20px;">TTD, {{ Auth::user()->nama }}</p>

</body>
</html>
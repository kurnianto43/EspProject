<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	h2 {
		text-align: center;
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
	
	<h2>Data Instore Esp Banjarbaru Tanggal {{ $tgl }}</h2>
	<br>
	 <table align="center">
                                    <thead>
                                        <tr>
                                            <th>Nomor Asset</th>
                                            <th>Nomor Seri</th>
                                            <th>Tipe</th>
                                            <th>Kondisi</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($kulkas as $kulkas)
                                        <tr>
                                            <td>{{ $kulkas->nomor_asset }}</td>
                                            <td>{{ $kulkas->nomor_seri }}</td>
                                            <td>{{ $kulkas->tipe->nama_tipe }}</td>
                                            <td>{{ $kulkas->kondisi->nama_kondisi}}</td>
                                            <td>{{ $kulkas->tgl_masuk->format('d-m-Y') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>

                                <p style="margin-left: 600px; margin-top: 20px;">TTD, {{ Auth::user()->nama }}</p>

</body>
</html>
<!-- pdf surat peminjaman -->
<!DOCTYPE html>
<html>
<head>
    <title>Surat Peminjaman {{ $nama_lengkap }} - {{ $tanggal_peminjaman }}</title>
    <style>
        .garis1 {
            border-top: 3px solid black;
            height: 2px;
            border-bottom: 1px solid black;
        }
        .judulsurat {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .perihal {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .col-md-3-perihal {
            width: 65%;
            float: left;
        }
        .table {
            width: 100%;
            max-width: 100%;
            /* margin-bottom: 20px; */
        }
        .column-name-perihal{
            width: 100px;
            margin-left: 10px;
        }
        .column-value-perihal{
            width: 200px;
            margin-left: 20px;
        }
        .column-name{
            width: 200px;
            margin-left: 20px;
        }
        .column-value{
            width: 500px;
            margin-left: 20px;
        }
        .date_surat {
           margin-top: 0px;
           margin-left: 75px;
        }
        .text-pertama {
            margin-left: 50px;
            text-align: justify;
            font-size: 16px;
            margin-top: 30px;
        }
        .text {
            margin-left: 3px;
            text-align: justify;
            font-size: 16px;
            margin-top: -7px;
        }
        .col-md-6-ttd {
            position: relative;
            width: 50%;
            float: left;
            margin-top: 70px;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<div>
    <header>
        <img width="700" height="135" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/kop_surat2.png'))) }}">
    </header>
</div>
<div class="container">
    <hr class="garis1">
    <p class="judulsurat">SURAT PEMINJAMAN</p>
    <div class="perihal">
        <div class="col-md-3-perihal">
            <table>
                <tbody>
                    <tr>
                        <td class="column-name-perihal">Lampiran</td>
                        <td class="column-value-perihal">: 1 Lembar</td>
                    </tr>
                    <tr>
                        <td>Hal</td>
                        <td>: Peminjaman Ruangan</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3-perihal">
            <p class="date_surat" >Yogyakarta, {{ $dateNow_surat }}</p>
        </div>
    </div><br>
    <p class="text-pertama">Dengan hormat, sehubungan dengan di terimanya surat permohonan peminjaman ruangan, Saya yang</p>
    <p class="text">bertanda tangan di bawah ini:</p><br>
    <table>
        <tbody>
            <tr>
                <td class="column-name">Nama Lengkap</td>
                <td class="column-value">: {{ $nama_lengkap }}</td>
            </tr>
            <tr>
                <td class="column-name">Status</td>
                <td class="column-value">: {{ $status }}</td>
            </tr>
            <tr>
                <td class="column-name">NIM/NIP</td>
                <td class="column-value">: {{ $user_id }}</td>
            </tr>
            <tr>
                <td class="column-name">Nama runagan</td>
                <td class="column-value">: {{ $nama_ruangan }}</td>
            </tr>
            <tr>
                <td class="column-name">Tanggal peminjaman</td>
                <td class="column-value">: {{ $tanggal_peminjaman }}</td>
            </tr>
            <tr>
                <td class="column-name">Jam mulai peminjaman</td>
                <td class="column-value">: {{ $jam_mulai_peminjaman }} WIB</td>
            </tr>
            <tr>
                <td class="column-name">Jam selesai peminjaman</td>
                <td class="column-value">: {{ $jam_selesai_peminjaman }} WIB</td>
            </tr>
            <tr>
                <td class="column-name">Keterangan peminjaman</td>
                <td class="column-value">: {{ $keperluan }}</td>
            </tr>
        </tbody>
    </table><br>
    <p class="text-pertama">Dengan ini saya bertanggung jawab atas peminjaman fasilitas di tanggal dan jam yang sudah di</p>
    <p class="text">sebutkan di atas, demikian surat peminjaman ruangan ini dibuat dengan sebenar-benarnya untuk di gunakan</p>
    <p class="text">sebagaimana mestinya.</p>
    <div class="col-md-6-ttd">
        <!-- TTD left -->
        <p class="text-center">Yang menyatakan</p>
        <br>
        <br>
        <br>
        <br>
        <p class="text-center">( {{$nama_lengkap}} )</p>
    </div>
    <!-- <div class="col-md-3-ttd"></div> -->
    <div class="col-md-6-ttd">
        <!-- TTD right  -->
        <p class="text-center">Mengetahui</p>
        <br>
        <br>
        <br>
        <br>
        <p class="text-center">(............................................)</p>
    </div>
</div>
</html>
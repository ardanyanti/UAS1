<html>
    <head>
        <title>Halaman Utama</title>
        <style>
            #tb_desain{
                border:1px solid black;
                color:white;
                background-color:green;
                width:400px;
            }
            th,td{
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="action.php" method="POST" name="form_input">
            <table>
                <tr>
                    
                    <td>Nama Karyawan</td>
                    <td>Email</td>
                    <td>No Telp</td>
                    <td>Alamat</td>
                    <td>gaji</td>
                </tr>
                <?php
                include "koneksi.php";
                $cari="SELECT * FROM tb_karyawan ORDER BY nama_karyawan";
                $tampil=mysqli_query($open,$cari);
                $nomor=0;
                while($hasil=mysqli_fetch_array($tampil)){
                    $nama_karyawan=stripcslashes ($hasil['nama_karyawan']);
                    $email=stripcslashes ($hasil['email']);
                    $no_telp=stripcslashes ($hasil['no_telp']);
                    $alamat=stripcslashes ($hasil['alamat']);
                    $gaji=stripcslashes ($hasil['gaji']);
                    $nomor++;
                ?>
                <tr>
                    
                    <td><?=$nama_karyawan?></td>
                    <td><?=$email?></td>
                    <td><?=$no_telp?></td>
                    <td><?=$alamat?></td>
                    <td><?=$gaji?></td>


                </tr>
                <?php
                }
                mysqli_close($open);
                ?>
               
            </table>
            <table>
                <tr>
                    <td><button type="button" onClick="viewInput()">Tambah </button></td>
                </tr>
            </table>
            <table style="display:none" id="formInput">
                
                </table>
                <table>
                
                <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><input type="text" id="nama_karyawan" name="nama_karyawan"></td>                   
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" id="email" name="email"></td>                   
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td><input type="text" id="no_telp" name="no_telp"></td>                   
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" id="alamat" name="alamat"></td>                   
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td><input type="text" id="gaji" name="gaji"></td>                   
                </tr>
                
            </table>
            <table>
            <tr>
                    <td colspan="3"><button type="button" name="simpan" id="simpan">simpan</button></td>
                </tr>
            </table>
            <script>
                function viewInput(){
                    var status=document.getElemenById("formInput").style.display;
                    if(!status){
                        document.getElemenById("forminput").style.display="none";
                     }else if(status=='block'){
                        document.getElemenById("formInput").style.display="none";
                     }else{
                        document.getelemenById("formInput").style.display="";
                     }
                }
            </script>
        </form>
    </body>
</html>
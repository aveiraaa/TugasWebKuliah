<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <title>Daftar Coding</title>
</head>
<body>
    <form method="post" action="DaftarCoding.php">
        <table>
            <tr>
                <td>Nama: </td> <td><input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" class="form-control" style="width: 200px;"></td>
            </tr>
            <tr>
                <td>Password: </td> <td><input type="password" id="password" name="password" pattern="[(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])]{7}" class="form-control" style="width: 150px;" required></td>
            </tr>
            <tr>
                <td>Nomor Telepon: </td> <td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" class="form-control" style="width: 150px;"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir: </td> <td><input type="date" id="ttl" name="ttl"></td>
            </tr>
            <tr>
                <td>Email: </td> <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin: </td> 
                <td>
                    <input type="radio" id="cowok" name="kelamin" value="Laki-laki" class="form-check-input">
                    <label for="cowok" class="form-check-label">Laki-laki</label>
                    <input type="radio" id="cewek" name="kelamin" value="Perempuan" class="form-check-input">
                    <label for="cewek" class="form-check-label">Perempuan</label> 
                </td>
            </tr>
            <tr>
                <td>Kursus Materi Apa Saja? </td> 
                <td>
                    <input type="checkbox" id="html" name="html" value="html" class="form-check-input">
                    <label for="html" class="form-check-label">HTML</label>
                    <input type="checkbox" id="css" name="css" value="css" class="form-check-input">
                    <label for="css" class="form-check-label">CSS</label>
                    <input type="checkbox" id="js" name="js" value="js" class="form-check-input">
                    <label for="js" class="form-check-label">JavaScript</label>
                    <input type="checkbox" id="PHP" name="PHP" value="PHP" class="form-check-input">
                    <label for="PHP" class="form-check-label">PHP</label>
                </td>
            </tr>
            <tr>
                <td>Tingkat Pendidikan</td>
                <td>
                    <select name="pendidikan" id="pendidikan" style="width: 100px;" class="form-select">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload CV</td> <td><input type="file" id="cv" name="cv" value="cv"></td>
            </tr>
            <tr>
                <td valign="top">Komentar dan Saran: </td>
                <td>
                    <textarea id="komentar" name="komentar" rows="10" cols="80"></textarea>
                </td>
            </tr>
        </table>
         <button type="submit" name="kirim" class="btn btn-secondary btn-lg" style="width: 200px; margin-left: 350px;">Kirim Query</button>
    </form>

    <div id="hasil">
        <?php

            if(isset($_POST['kirim'])){
            echo "Profil Pendaftar :";
            $nama=$_POST['nama'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $ttl=$_POST['ttl'];
            $kelamin=$_POST['kelamin'];
            $pendidikan=$_POST['pendidikan'];


            //pembuatan algoritma checklist
            $a=-1;
            $les=array();
            if (isset($_POST['html'])){
                array_push($les,"html");
                $a=$a+1;
            }

            if (isset($_POST['css'])){
                array_push($les,"css");
                $a=$a+1;
            }
            if (isset($_POST['js'])){
                array_push($les,"javascript");
                $a=$a+1;
            }
            if (isset($_POST['PHP'])){
                array_push($les,"PHP");
                $a=$a+1;
            }

            //perhitungan biaya
            if($pendidikan=="Beginner"){
                $biayakursus=($a+1)*500000;
            }

            else if($pendidikan=="Intermediate"){
                $biayakursus=($a+1)*1000000;
            }
            else $biayakursus=($a+1)*1500000;
            

            echo "
            <table class='table'>
                <tr><td>Nama Pendaftar</td></td>: $nama</td></tr>
                <tr><td>Nomor Telepon</td><td>: $phone</td></tr>
                <tr><td>Email</td><td>: $email</td></tr>
                <tr><td>Tanggal Lahir</td><td>: $ttl</td></tr>
                <tr><td>Jenis Kelamin</td><td>: $kelamin</td></tr>
                <tr><td>Kursus yang Diikuti</td><td>:";
                
                if ($a != -1){
                for ($i = 0; $i <=$a; $i++) {
                    echo " $les[$i],";
                    }
                }

                echo "</td></tr>


                <tr><td>Level yang Diambil</td><td>: $pendidikan</td></tr>
                <tr><td>Biaya Kursus</td><td>: $biayakursus</td></tr>

            </table>";

        }


        ?>

    </div>
</body>
</html>
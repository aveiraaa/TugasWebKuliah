<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
                var nama = $("#nama").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var ttl = $("#ttl").val();
                var kelamin = document.querySelector('input[name="kelamin"]:checked').value
                var pendidikan = $("#pendidikan").val();

                if(document.getElementById("html").checked == true){
                    var html=1;
                } else var html=0;

                if(document.getElementById("css").checked == true){
                    var css=1;
                } else var css=0;

                if(document.getElementById("js").checked == true){
                    var js=1;
                } else var js=0;

                if(document.getElementById("PHP").checked == true){
                    var PHP=1;
                } else var PHP=0;

                $.ajax({
                    type: 'POST',
                    url: "backendcoding.php",
                    data: {
                        nama:nama,
                        phone:phone,
                        email:email,
                        ttl:ttl,
                        kelamin:kelamin,
                        html:html,
                        css:css,
                        js:js,
                        PHP:PHP,
                        pendidikan:pendidikan
                    },
                    success: function(hasil){
                        $('#hasil').html(hasil);
                    }
                });
            });
        });
    </script>
    <title>Daftar Coding 2</title>
</head>
<body>
        <table>
            <tr>
                <td>Nama :</td><td><input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required class="form-control" style="width: 376px"></td>                
            </tr>
            <tr>
                <td>Nomor Telepon :</td><td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" placeholder="0123456789" class="form-control" style="width: 376px"></td>
            </tr>
            <tr>
                <td>Email :</td><td><input type="email" id="email" name="email" placeholder="qwerty@gmail.com" class="form-control" style="width: 376px"></td>
            </tr>
            <tr>
                <td valign="top">Password :</td> 
                <td>
                    <input type="password" id="password" name="password" pattern="[0-9]{3,}[a-z]{4,}" placeholder="*******" maxlength="7" class="form-control" style="width: 376px"> *Password harus berupa 3 angka dan 4 huruf      
                    <br>
                    <input type="checkbox" class="form-check-input" onclick="myFunction()"> Tampilkan Password
                    <script>
                        function myFunction() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td><td><input type="date" id="ttl" name="ttl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" id="cowok" name="kelamin" value="laki-laki" class="form-check-input">
                    <label for="cowok" class="form-check-label">Laki-Laki</label>
                    <input type="radio" id="cewek" name="kelamin" value="perempuan" class="form-check-input">
                    <label for="cewek" class="form-check-label">Perempuan</label> 
                </td>
            </tr>
            <tr>
                <td>Les yang ingin diikuti :</td>
                <td>
                    <input type="checkbox" id="html" name="html" value="html" class="form-check-input">
                    <label for="html" class="form-check-label">HTML</label>
                    <input type="checkbox" id="css" name="css" value="css" class="form-check-input">
                    <label for="css" class="form-check-label">CSS</label>
                    <input type="checkbox" id="js" name="js" value="javascript" class="form-check-input">
                    <label for="javascript" class="form-check-label">JavaScript</label>
                    <input type="checkbox" id="PHP" name="PHP" value="PHP" class="form-check-input">
                    <label for="PHP" class="form-check-label">PHP</label>                
                </td>
            </tr>
            <tr>
                <td>Level :</td>
                <td>
                    <select name="pendidikan" id="pendidikan" style="width: 95px" class="form-select">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advance">Advance</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload CV :</td><td><input type="file"></td>
            </tr>
            <tr>
                <td valign="top">Komentar & Saran :</td>
                <td>
                    <textarea id="komentar" name="komentar" rows="4" cols="50"></textarea>
                </td>
            </tr>
        </table>
        <br>
        <button type="button" id="submit" name="kirim" class="btn btn-secondary btn-lg" style="width: 200px; margin-left: 350px;">Kirim Query</button>


    <div id="hasil">
       
    </div>
</body>
</html>
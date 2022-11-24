<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dangnhap.css">
    <title>Document</title>
</head>

<body>
    <div id="dang_nhap">
        <ul>
            <li><a href="dangnhap.php">SIGN IN</a></li>
            <li><a href="dangki.php">SIGN UP</a></li>
        </ul>

        <form action="" onsubmit="return check_validate()" id="form">
            <table>
                <tr>
                    <td>USERNAME</td>
                </tr>
                <tr>
                    <td><input type="text" class="signin"></td>
                    <td><span></span></td>
                </tr>
                <tr>
                    <td>PASSWORK</td>
                </tr>
                <tr>
                    <td><input type="password" class="signin"></td>
                    <td><span></span></td>
                </tr>
                <tr>
                    <td><input type="checkbox">Keep me Signedin</td>
                </tr>
                <tr>
                    <td><button type="submit">SIGN IN</button></td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        let dangKy = document.querySelector('#form')
        let array_input = document.getElementsByTagName('input');
        let array_span = document.getElementsByTagName('span');
        dangKy.addEventListener('submit', function(event) {
            event.preventDefault()

            function check_validate() {

                if (array_input[0].value == "") {
                    array_span[0].innerText = 'bạn chưa nhập use'
                    array_span[0].style.color = 'red';
                    array_span[0].style.fontSize = '20px';
                    return false;
                } else {
                    array_span[0].innerText = '';
                }
                if (array_input[1].value == "") {
                    array_span[1].innerText = 'bạn chưa nhập pass'
                    array_span[1].style.color = 'red';
                    array_span[1].style.fontSize = '20px';
                    return false;
                } else {
                    array_span[1].innerText = '';
                }
                return true;
            }
            // 
            if (check_validate()) {
                alert("bạn đã đăng nhập thành công");
                window.location = "../admin_duan/index.php";
                // header("Location:../admin_duan/admin.php");
            }
        })
    </script>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url(https://img2.thuthuatphanmem.vn/uploads/2018/12/30/background-dep-ppt_110341618.jpg);
    }

    #dang_nhap {
        width: 100%;
        height: 650px;
        /* background-color: rgb(210, 210, 210); */
        /* background-image: url("../anh/nphrgz8yfnjylrwfr0yl.webp"); */
        margin: auto;
    }

    #dang_nhap li {
        display: inline;
    }

    #dang_nhap a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-size: 40px;
        padding: 50px;
    }

    #dang_nhap ul {
        padding-top: 100px;
    }

    #dang_nhap a:hover {
        color: rgb(255, 0, 0);
    }

    /*  */
    #dang_nhap table {
        margin-left: 500px;
        padding-top: 30px;
    }

    #dang_nhap table tr td {
        color: white;
        padding-top: 20px;
    }

    .signin {
        width: 400px;
        height: 30px;
        border-radius: 10px;
        background-color: rgb(185, 185, 185);
        font-size: 25px;
    }

    #dang-nhap input {
        margin-right: 20px;
    }

    #dang_nhap button {
        padding: 5px;
        width: 400px;
        font-size: 20px;
        border-radius: 10px;
        background-color: rgb(83, 157, 236);
        color: white;
    }

    #dang_nhap button:hover {
        color: red;
    }

    @media (min-width:428px) {
        .dang_nhap {
            width: 1000px;
            margin: auto;
        }

        #dang_nhap li {
            display: inline;
        }

        #dang_nhap a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-size: 40px;
            padding: 50px;
        }

        #dang_nhap ul {
            text-align: center;
            padding-top: 100px;
        }

        #dang_nhap a:hover {
            color: rgb(255, 0, 0);
        }
    }

    /* @media (min-width:1280px) {
    .wrap{
        width: 1000px;
        margin: auto;
    }
    .menu li{
        display: inline;
        padding-left: 10px;
    }
    .header img{
        width: 100%;
        display: block;
        content: url(images/banner.png);
    }
} */
</style>
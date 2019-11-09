<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeMusic Presents</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="buttons.css">
    <link rel="stylesheet" type="text/css" href="content.css">
    <link rel="stylesheet" type="text/css" href="links.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">

    <style>
        * {
            box-sizing: border-box;
        }

        td {
            float: left;
            font-size:30px;
            color:aliceblue;
            margin:auto;
            padding-right: 50px;
            padding-top: 10px;
            line-height: 10%;
            display: block;
            width: 210px;
            position:center;
        }

        .signup {
            float:right;
            padding:30px;
            text-align:center;
        }

        .newsletter {
            max-width:180px;
            margin-right:300px;
            float:right;
        }
            
    </style>
</head>
<body>
    <div class="row">
        <div class="col-1 col-s-1 menu">
            <ul style="font-family:Chiller;">
                <li style="font-size:200%; font-weight:bold; ">FakeBand presents</li>
                <li><a href="/" target="_blank">HOME</a></li>
                <li><a href="/about" target="_blank">ABOUT</a></li>
                <li><a href="music" target="_blank">MUSIC</a></li>
                <li><a href="gallery" target="_blank">GALLERY</a></li>
                <li><a href="/tour" target="_blank">EVENTS</a></li>
                <li><a href="/newsletter" target="_blank">NEWSLETTER</a></li>
            </ul>
        </div>
    </div>
    <div class="col-1 col-s-1" style="background-color:transparent" ;>
    </div>


    <div class="col-2 col-s-2 center">
        <h3>Newsletter</h3>
        <img class=newsletter src="https://i.postimg.cc/Vkzw0P74/photo-1557315360-6a350ab4eccd.jpg alt="me""  />
        <form name="form1" action="insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="firstname" />
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lastname" />
                </tr>
                <tr>
                    <td>Nickname</td>
                    <td><input type="text" name="nick" />
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" />
                </tr>
                <tr>
                    <td>Birth Date</td>
                    <td><input type="date" name="dob" />
                </tr>
                <tr>
                    <td>e-mail</td>
                    <td><input type="email" name="mail" />
                </tr>
                <tr>
                    <td class="signup"><input type="submit" name="submit" value="Sign Up!" /></td>
                </tr>
            </table>

        </form>
        </div>
</body>
</html>
<html>
<head>
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/style3.css" rel="stylesheet" type="text/css">
    <link href="images/Colourise.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/log.css" rel="stylesheet" type="text/css">
    <script src="js/header.js" type="text/javascript"></script>

    <title></title>
</head>

<body>
    <div id="#cp">
        <div id="#mn">
            <div class="bg1">
                <div class="menuxar1">
                    <ul>
                        <li class="a3">
                            <div class="a8">
                                <a class="logo" href="index.php"></a>
                            </div>
                        </li>

                        <li class="a3">
                            <div class="a9">
                                <ul class="ul1">
                                    <li class="li1">
                                        <a class="reg" href="register.php" id="but"><strong>Register</strong></a>
                                    </li>

                                    <li class="li1">
                                        <?php
                                                                        if(isset($_SESSION['u']))
                                                                        {
                                                                        ?><a class="reg" href="logout.php" id="but"><strong>Logout</strong></a> <?php
                                                                            }
                                                                        else
                                                                        {
                                                                        ?> <a class="reg" href="javascript:void(0)" id="but" onclick=
                                        "document.getElementById('light').style.display= 'block';document.getElementById('fade').style.display='block'"><strong>Login</strong></a> <?php
                                                                        }
                                                                        ?>
                                    </li>

                                    <li class="li1">
                                        <a class="reg" href="news.php" id="but"><strong>News</strong></a>
                                    </li>
                                </ul><br>

                                <form action="search.php">
                                    <table>
                                        <tr>
                                            <td><input id="box" name="st1" type="text"></td>

                                            <td><input id="butn" type="submit" value="Search"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br>
    <br>
    <br>
    <br>

    <div id="content-wrap">
        <?php
        include  "menubar.php";
        ?>

        <div class="menubardiv">
            <form id="f" name="f">
                <input class="hoverinp" name="t2" size="122" type="text">
            </form>
        </div>
    </div><?php
    if(!isset($_SESSION))
    {
    session_start();
    $secret=md5(uniqid(rand(), true));
    $_SESSION['FORM_SECRET'] = $secret;
    }
    ?>

    <div class="white_content" id="light">
        <a class="a1" href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img height="20" src=
        "images/cancel.png" width="20"></a>

        <div class="login">
            <form action="log.php" id="log" method="post" name="log">
                <img height="50" src="images/main.png" width="50"><label class="p22">LOGIN DETAILS</label><br>
                <br>

                <table>
                    <tr>
                        <td height="46" width="151">USERNAME</td>

                        <td height="30px;" width="335"><input autofocus="" class="textbox" id="uname" name="uname" onkeyup="validuname()" placeholder="Username" required="" size="30" type=
                        "text"></td>
                    </tr>

                    <tr>
                        <td height="46" width="151"><label for="password">PASSWORD</label></td>

                        <td>
                            <div style="height=">
                                <input class="textbox" id="pass" name="pass" onblur="" onkeyup="passwordst(this.value)" placeholder="Password" required="" size="30" type="password"><label class="p1"
                                id="l12"></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height="39"><label for="utype">USER TYPE</label></td>

                        <td><?php
                                        include('dbconnection.php');
                                        $qry = mysql_query("SELECT user_type FROM user_type");
                                        echo "<select id='utype' name='utype' class='textbox' style='width:250' onChange='type()' required>";
                                        echo "<option value=''>--Select--</option>";
                                        while(($row=mysql_fetch_row($qry))!=NULL)
                                        {
                                        echo "<option value='$row[0]'>$row[0]</option>";
                                        }
                                        echo "<option value='Admin'>Admin</option>";
                                        echo "</select>";
                                        ?></td>
                    </tr>

                    <tr>
                        <td><input class="btn1" type="submit" value="L O G I N"></td>

                        <td><input class="btn1" type="reset" value="R E S E T"><input id="form_secret" name="form_secret" type="hidden" value="<?php echo $_SESSION['FORM_SECRET'];?>"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <div class="black_overlay" id="fade"></div>
</body>
</html>
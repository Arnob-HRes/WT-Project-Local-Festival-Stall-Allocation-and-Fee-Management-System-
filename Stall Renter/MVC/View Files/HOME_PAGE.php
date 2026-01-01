<!DOCTYPE html>
<html>
    <head>
        <title>
            Local Festival Stall Allocation & Fee Management System
        </title>
    </head>
    <style>
        #F1{
            position: absolute;
            top: 220px;
            right: 390px;
            width: 650px;
            background-color: transparent;
            backdrop-filter: blur(8px);
            border-radius: 50px;
            border:1px solid white;
            padding: 50px;
            height: auto;
            text-align: center;
        }
        #B1{
            width: 300px;
            height: 50px;
            text-align: center;
            color: white;
            background-color: blue;
            border: 1px solid blue;
            border-radius: 10px;
            margin:20px;
        }
        #B1:hover{
            background-color: royalblue;
        }
        #B2{
            width: 300px;
            height: 50px;
            text-align: center;
            color: blue;
            background-color: lightblue;
            border: 1px solid lightblue;
            border-radius: 10px;
            margin:20px;
        }
        #B2:hover{
            background-color: royalblue;
            color: white;
        }
        #D1{
            background-color: transparent;
            width: auto;
            height: auto;
        }
        #D2{
            background-color: transparent;
            width: auto;
            height: auto;
        }
        #T1{
            position: absolute;
            top: 810px;
            right: 190px;
        }
        #d4{
            position: absolute;
            top: 850px;
        }
        #d5{
            position: absolute;
            top: 1200px;
        }
        #d6{
            position: absolute;
            top: 1550px;
        }
        #d7{
            position: absolute;
            top: 1900px;
        }
        #d3{
            position: absolute;
            top: 2250px;
        }
        .DIV{
            position: relative;
            margin: 50px 0px;
            background-color: white;
            border: 3px solid black;
            border-radius: 20px;
            width: 1350px;
            height: 300px;
        }
        .d-sub{
            width: 400px;
            height: 260px;
            margin: 20px;
            background-color: blue;
            border-radius: 10px;
        }
        #d5-sub{
            position: absolute;
            right: 0px;
        }
        #d7-sub{
            position: absolute;
            right: 0px;
        }
        #Head{
            position: fixed;
            top: 0px;
            left: 1px;
            width: 1510px;
            height: 100px;
            margin: 0px 1px 1px 1px;
            background-color: transparent;
            backdrop-filter: blur(10px);
            border: 1px solid white;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            z-index: 1;
            overflow: hidden;
        }
        #B3{
            position: absolute;
            right: 210px;
            width: 200px;
            height: 50px;
            text-align: center;
            color: white;
            background-color: blue;
            border: 1px solid blue;
            border-radius: 10px;
            margin:25px 10px 25px 0px;
        }
        #B3:hover{
            background-color: royalblue;
        }
        #B4{
            position: absolute;
            right: 0px;
            width: 200px;
            height: 50px;
            text-align: center;
            color: blue;
            background-color: white;
            border: 1px solid white;
            border-radius: 10px;
            margin:25px 10px 25px 0px;
        }
        #B4:hover{
            background-color: royalblue;
            color: white;
        }
        #img1{
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        #IMG3{
            position: absolute;
            top: 0px;
            left: 0px;
            width: 1525px;
            height: 850px;
            object-fit: cover;
            z-index: -1;
        }
    </style>
    <body>
        <img src="../Images/HOME_PAGE_BACKGROUND.jpg" alt="Home Page" id="IMG3">
        <header id="Head">
            <input type="button" value="SING IN" id="B3" onclick="window.location.href='LOGIN_PAGE.php'">
            <input type="button" value="SING UP" id="B4" onclick="window.location.href='LOGIN_PAGE.php'">
            <img src="../Images/LOGO.png" alt="LOGO" id="IMG4">
        </header>
        <form id="F1">
            <div id="D1">
              <h1 style="font-size: 37px;font-family: 'Baloo 2', cursive;color: white">Local Festival Stall Allocation</h1>
            </div>
            <div id="D2">
              <h1 style="font-size: 37px;font-family: 'Baloo 2', cursive;color: white">& Fee Management System</h1>
            </div>
            <hr>
            <input type="button" value="SING IN" id="B1" onclick="window.location.href='LOGIN_PAGE.php'">
            <input type="button" value="SING UP" id="B2" onclick="window.location.href='LOGIN_PAGE.php'"><br>
            <hr>
        </form>
        <h4 id="T1">©ARNOB SARKER SUPTA & HRIDRITA SAHA MOON 2025</h4>
        <div id="d3" class="DIV"><div id="d3-sub" class="d-sub">></div></div>
        <div id="d4" class="DIV"><div id="d4-sub" class="d-sub">></div></div>
        <div id="d5" class="DIV"><div id="d5-sub" class="d-sub">></div></div>
        <div id="d6" class="DIV"><div id="d6-sub" class="d-sub">></div></div>
        <div id="d7" class="DIV"><div id="d7-sub" class="d-sub">></div></div>
    </body>
</html>
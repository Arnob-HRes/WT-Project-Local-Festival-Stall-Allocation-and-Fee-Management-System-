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
            top: 430px;
            right: 100px;
            width: 500px;
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
            position: absolute;
            top:200px;
            right: 140px;
            background-color: white;
            width: auto;
            height: auto;
        }
        #D2{
            position: absolute;
            top:240px;
            right: 190px;
            background-color: white;
            width: auto;
            height: auto;
        }
        #D3{
            position: absolute;
            top: 145px;
            left: 0px;
            background-color: blue;
            border-radius: 20px;
            margin: 5px;
            width: 750px;
            height: 720px;
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
            background-color: lightblue;
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
            transform: rotate(-90deg);
        }
    </style>
    <body>
        <header id="Head">
            <input type="button" value="LOGIN" id="B3" onclick="window.location.href='LOGIN_PAGE.php'">
            <input type="button" value="SINUP" id="B4" onclick="window.location.href='LOGIN_PAGE.php'">
            <img src="confetti-sticker.gif" alt="Star falling not found" id="img1">
        </header>
        <div id="D3"></div>
        <div id="D1">
            <h1 style="font-size: 35px;">Local Festival Stall Allocation</h1>
        </div>
        <div id="D2">
            <h1 style="font-size: 35px;">& Fee Management System</h1>
        </div>
        <form id="F1">
            <hr>
            <input type="button" value="LOGIN" id="B1" onclick="window.location.href='LOGIN_PAGE.php'">
            <input type="button" value="SINUP" id="B2" onclick="window.location.href='LOGIN_PAGE.php'"><br>
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
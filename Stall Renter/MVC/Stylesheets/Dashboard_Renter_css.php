<style>
#mainimg{
    filter: blur(2px);
    position: absolute;
    top: 0px;
    left: 0px;
    width: 1522px;
    height: 650px;
    z-index: -1;
    background-color: transparent;
    backdrop-filter: blur(7px);
}
#logo{
    position: absolute;
    top: 15px;
    left: 70px;
    width: 40px;
    height: 40px;
    border-radius: 10px;
}
#wu{
    position: absolute;
    top: 15px;
    left: 130px;
    color: white;
}
#inf{
    position: absolute;
    top: 30px;
    left: 620px;
    color: white;
    text-decoration: none;
}
#cat{
    position: absolute;
    top: 30px;
    left: 720px;
    color: white;
    text-decoration: none;
}
#home{
    position: absolute;
    top:20px;
    left: 820px;
    color: white;
    background-color: transparent;
    backdrop-filter: blur(16px);
    border: 2px solid white;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
}
#home:hover{
    background-color: transparent;
    backdrop-filter: blur(4px);
    animation: shadow 2s infinite alternate;
}
#PP{
    position: absolute;
    top:25px;
    left: 1330px;
    width: 50px;
    height: 50px;
    border-radius: 50px;
}
#logout{
    font-size: 17px;
    position: absolute;
    top: 20px;
    left: 1390px;
    text-align: center;
    padding: 15px 10px 0px 10px;
    display: inline-block;
    color: white;
    background-color: rgba(255, 255, 255, 0.2);
    width: 100px;
    height: 40px;
    border-radius: 10px;
    text-decoration: none;
    cursor: pointer;
}
#logout:hover{
    background-color: transparent;
    backdrop-filter: blur(4px);
    color: white;
    border: 2px solid white;
}
#h11{
    font-size: 75px;
    position: absolute;
    top: 120px;
    left: 70px;
    color: white;
}
#h12{
    font-size: 75px;
    position: absolute;
    top: 230px;
    left: 70px;
    color: white;
}
#h13{
    font-size: 75px;
    position: absolute;
    top: 370px;
    left: 70px;
    color: white;
}
#h33{
    position: absolute;
    top: 530px;
    left: 70px;
    color: white;
    overflow: hidden;
    white-space: nowrap;
    border-right: .15em solid white;
    animation: 
              typing 3.0s steps(15,end),
              blink-caret .75s step-end infinite;
}
@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 30%;
  }
}
@keyframes blink-caret {
  from, to {
    border-color: transparent;
  }
  50% {
    border-color: white;
  }
}
#stiky1{
    position: absolute;
    top:600px;
    left: 350px;
    z-index: 1;
}
#d1{
    padding: 20px;
    width: 790px;
    height: 65px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#d1:hover{
    border: 1px solid purple;
    box-shadow: 0 0 43px rgba(255, 0, 255, 1);
    background-color: rgba(255, 255, 255, 1.0)
}
#ST{
    padding: 0px 0px 0px 20px;
    position: absolute;
    top:30px;
    width: 450px;
    height: 40px;
    border-radius: 20px;
    border: 1px solid white;
    background-color: lightgray;
}
#Inf1{
    position: absolute;
    top: 20px;
    color: red;
    left: 360px;
    padding: 5px;
    background-color: lightcoral;
    border-radius: 50px;
    color: white;
}
#Submi{
    position: absolute;
    top:30px;
    left: 500px;
    width: 150px;
    height: 40px;
    background-color: red;
    color: white;
    border-radius: 20px;
    border: 1px solid white;
    cursor: pointer;
}
#Submi:hover{
    border: 2px solid red;
    background-color: transparent;
    color: black;
}
#Submi2{
    position: absolute;
    top:30px;
    left: 660px;
    width: 150px;
    height: 40px;
    background-color: gold;
    color: black;
    border-radius: 20px;
    border: 1px solid white;
    cursor: pointer;
}
#Submi2:hover{
    border: 2px solid gold;
    background-color: transparent;
}
#f1{
    position: absolute;
    top: 750px;
    width: 1536px;
    height: auto;
}
#f2{
    position: absolute;
    top: 2360px;
    width: 1536px;
    height: auto;
}
#h1{
    position: absolute;
    color: black;
    top: 740px;
    left: 0px;
    width: 1521px;
}
#h2{
    color: black;
    position: absolute;
    top: 800px;
    left: 0px;
    width: 1521px;
}
#h3{
    position: absolute;
    color: black;
    top: 2350px;
    left: 0px;
    width: 1521px;
}
#h4{
    color: black;
    position: absolute;
    top: 2410px;
    left: 0px;
    width: 1521px;
}
#MDIV-1{
    position: absolute;
    top: 850px;
    left: 170px;
    width: 500px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#MDIV-1:hover{
    box-shadow: 10px 10px 20px 14px black;
}
#MDIV-2{
    position: absolute;
    top: 850px;
    left: 880px;
    width: 500px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#MDIV-2:hover{
    box-shadow: 10px 10px 20px 14px black;
}
#MDIV-3{
    position: absolute;
    top: 1350px;
    left: 170px;
    width: 500px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#MDIV-3:hover{
    box-shadow: 10px 10px 20px 14px black;
}
#MDIV-4{
    position: absolute;
    top: 1350px;
    left: 880px;
    width: 500px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#MDIV-4:hover{
    box-shadow: 10px 10px 20px 14px black;
}
#MDIV-5{
    position: absolute;
    top: 1850px;
    left: 550px;
    width: 500px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 10px 10px 16px black;
}
#MDIV-5:hover{
    box-shadow: 10px 10px 20px 14px black;
}
.DIVpic{
    position: absolute;
    top: 70px;
    left: 50px;
    width: 400px;
    height: 300px;
    border-radius: 20px;
}
.IS{
    position: absolute;
    top: 390px;
    left: 200px;
    width: 100px;
    height: 50px;
    border: 2px solid black;
    border-radius: 20px;
    cursor: pointer;
}
.ani{
    text-shadow: 2px 2px 4px black;
    animation: appear-bottom 2.5s ease-out forwards;
}
@keyframes appear-bottom {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
#footer{
    position: absolute;
    top: 2700px;
    left: 0px;
    width: 1521px;
    height: 200px;
    background-color: black;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
#FooterLogo{
            position: absolute;
            top: 30px;
            right: 80px;
            border-radius: 20px;
            width: 150px;
            height: 150px;
        }
        #T1{
            color: white;
            position: absolute;
            top: 20px;
            left: 10px;
        }
         .fl{
            font-size: 15px;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            position: absolute;
            background-color: rgba(255, 255, 255, 0.6);
            color: Black;
            text-decoration: none;
        }
        .fl:hover{
            background-color: rgba(255, 255, 255, 0.3);
        }
        #AF{
            top:110px;
            width: 150px;
            height: 20px;
            left: 10px;
        }
        #HF{
            top:110px;
            width: 120px;
            height: 20px;
            left: 250px;
        }
        #AG{
            top:110px;
            width: 100px;
            height: 20px;
            left: 490px;
        }
        #HG{
            top:110px;
            width: 100px;
            height: 20px;
            left: 730px;
        }
        .detail1{
            position: absolute;
            left: 30px;
            color: black;
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            border-right: .15em solid black;
            animation: 
              typing 3.0s steps(15,end),
              blink-caret .75s step-end infinite;
        }
        #deel1{
            position: absolute;
            top: 2450px;
        }
        #deel2{
            position: absolute;
            top: 2490px;
        }
        #deel3{
            position: absolute;
            top: 2530px;
        }
        #deel4{
            position: absolute;
            top: 2570px;
        }
        #top{
            font-size: 17px;
            position: absolute;
            top: 2637px;
            left: 735px;
            text-align: center;
            padding: 15px 10px 0px 10px;
            display: inline-block;
            color: white;
            background-color: black;
            width: 70px;
            height: 30px;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        #top:hover{
            border: 1px solid black;
            background-color: transparent;
            backdrop-filter: blur(8px);
            color: black;
            animation: shadow 2s infinite alternate;
        }
        @keyframes shadow {
        0% {
            box-shadow: 0 0 40px rgba(0, 255, 0, 1);
        }
        25%{
            box-shadow: 0 0 41px rgba(255, 0, 0, 1);
        }
        50%{
            box-shadow: 0 0 42px rgba(0, 0, 255, 1);
        }
        75%{
            box-shadow: 0 0 43px rgba(255, 0, 255, 1);
        }
        100% {
            box-shadow: 0 0 44px rgba(0, 255, 0, 1);
        }
}
</style>


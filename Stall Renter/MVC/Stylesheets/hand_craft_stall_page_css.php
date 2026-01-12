<style>
#mainimg{
    filter: blur(2px);
    position: absolute;
    top: 0px;
    left: 0px;
    width: 1522px;
    height: 380px;
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
#home{
    text-align: center;
    position: absolute;
    top:20px;
    width: 200px;
    left: 670px;
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
    width: 40px;
    height: 40px;
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
    height: 25px;
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
    top: 800px;
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
    @keyframes shadow2 {
        0% {
            box-shadow: 0 0 60px rgba(0, 255, 0, 1);
        }
        25%{
            box-shadow: 0 0 65px rgba(255, 0, 0, 1);
        }
        50%{
            box-shadow: 0 0 70px rgba(0, 0, 255, 1);
        }
        75%{
            box-shadow: 0 0 75px rgba(255, 0, 255, 1);
        }
        100% {
            box-shadow: 0 0 80px rgba(0, 255, 0, 1);
        }
    }
    #TT1{
        position: absolute;
        left: 270px;
        top: 25px;
        font-size: 100px;
        color: white;
        overflow: hidden;
        white-space: nowrap;
        border-right: .15em solid white;
        text-shadow: 2px 2px 4px black;
        animation: 
              typing 1.5s steps(10,end),
              blink-caret .75s step-end infinite;
    }
    #TT2{
        position: absolute;
        top: 400px;
        left: 50px;
        width: 1400px;
        height: auto;
        padding: 10px;
    }
    #move{
        position: absolute;
        top: 650px;
        left: 705px;
        padding: 17px;
        width: auto;
        height: auto;
        border: 2px solid gold;
        color: black;
        background-color: gold;
        text-align: center;
        border-radius: 50px;
    }
    #move:hover{
        background-color: transparent;
        border-color: black;
        animation: shadow2 2s infinite alternate;
    }
    #Info{
        font-size: 20px;
    }
    #d1{
        position: absolute;
        left: 710px;
        top: 360px;
        padding: 10px;
        border-radius: 20px;
        width: auto;
        height: auto;
        background-color: white;
        color: black;
        border: 2px solid black;
        font-size: 20px;
        cursor: help;
    }
    #d1:hover{
        box-shadow: 0px 0px 50px purple;
    }
</style>


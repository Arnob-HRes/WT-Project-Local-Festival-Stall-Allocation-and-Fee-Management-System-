<style>
    #IMG1{
        filter: blur(4px);
        position: absolute;
        top: 0px;
        left: 0px;
        width: 250px;
        height: 740px;
        z-index: -1;
    }
    #IMG2{
        filter: blur(10px);
        position: absolute;
        top: 0px;
        left: 0px;
        width: 1534px;
        height: 150px;
        z-index: -2;
    }
    #bookingT{
        position: absolute;
        top:0px;
        left: 600px;
        font-size: 60px;
        color: white;
    }
    #profilepic{
        position: absolute;
        top:100px;
        left: 50px;
        width: 150px;
        height: 150px;
        border: 1px solid white;
    }
    #t1{
        position: absolute;
        top:35px;
        left: 28px;
        color: white;
        text-shadow: 1px 1px 2px black;
    }
    #n1{
        position: absolute;
        top:250px;
        left: 40px;
        color: white;
        text-shadow: 2px 2px 4px black;
    }
    #n2{
        position: absolute;
        top:280px;
        left: 50px;
        color: white;
        text-shadow: 2px 2px 4px black;
    }
    #n3{
        position: absolute;
        top:310px;
        left: 30px;
        color: white;
        text-shadow: 2px 2px 4px black;
    }
    #n4{
        position: absolute;
        top:340px;
        left: 10px;
        color: white;
        text-shadow: 2px 2px 4px black;
    }
    #dashboard{
        position: absolute;
        top:570px;
        left: 50px;
        padding: 15px;
        border: 1px solid white;
        background-color: white;
        border-radius: 50px;
        cursor: pointer;
    }
    #dashboard:hover{
        background-color: transparent;
        border: 2px solid white;
        color: white;
        left: 30px;
        text-shadow: 0px 0px 8px black;
        font-size: 19px;
        animation: shadow 2s infinite alternate;
    }
    #logout{
        position: absolute;
        top:640px;
        left: 50px;
        width: 130px;
        padding: 15px 20px 15px 20px;
        border: 1px solid white;
        background-color: gold;
        border-radius: 50px;
        cursor: pointer;
    }
    #logout:hover{
        animation: backshadow 1.5s infinite alternate;
        color: white;
        text-shadow: 0px 0px 8px black;
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
    @keyframes backshadow {
        0% {
            background-color:rgba(0, 255, 0, 0.8);
        }
        25%{
            background-color:rgba(255, 0, 0, 0.8);
        }
        50%{
            background-color:rgba(0, 0, 255, 0.8);
        }
        75%{
            background-color:rgba(255, 0, 255, 0.8);
        }
        100% {
            background-color:rgba(0, 255, 0, 0.8);
        }
    }
    #MD{
        position: absolute;
        top: 145px;
        left: 245px;
        border: 5px solid skyblue;
        background-color: white;
        width: 1290px;
        height: 580px;
        border-radius: 20px;
        text-shadow: 2px 2px 4px black;
    }
</style>
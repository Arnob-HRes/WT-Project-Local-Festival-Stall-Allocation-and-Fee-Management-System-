<style>
    #update{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    #pp{
        position: absolute;
        top: 10px;
        left: 20px;
        width: 100px;
        height: 40px;
        border: 2px solid white;
        background-color: transparent;
        border-radius: 50px;
        color: white;
        cursor: pointer;
        animation: appear-right 2.5s ease-out forwards;
    }
    #show{
        position: absolute;
        top: 10px;
        right: 20px;
        border: 2px solid white;
        background-color: transparent;
        backdrop-filter: blur(4px);
        color: white;
        width: auto;
        height: auto;
        padding: 20px;
        border-radius: 20px;
        text-shadow: 2px 2px 4px black;
        animation: appear-left 2.5s ease-out forwards;
    }
    #pp:hover{
        background-color: white;
        color: black;
    }
    #Profile{
        margin-top: 60px;
        width: 150px;
        height: 150px;
    }
    #InfoDiv{
        position: absolute;
        top: 120px;
        right: 850px;
        color: white;
        text-align: right;
        width: auto;
        font-family: "Lucida Console", "Courier New", monospace;
        text-shadow: 2px 2px 4px black;
        animation: appear-left 2.5s ease-out forwards;
        
    }
    @keyframes appear-right {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
@keyframes appear-left {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
    #INF1{
        position: absolute;
        top: 120px;
        left: 850px;
        color: white;
        text-align: left;
        width: auto;
        font-family: "Lucida Console", "Courier New", monospace;
        text-shadow: 2px 2px 4px black;
        animation: appear-right 2.5s ease-out forwards;
    }
    .in{
        margin: 5px;
        padding: 10px;
        border-radius: 10px;
        background-color: rgba(255,255,255,0.6);
    }
    fieldset{
        position: absolute;
        top: 260px;
        left: 530px;
        color: white;
        text-align: left;
        width: 440px;
        padding: 20px;
        border: 5px solid white;
        border-radius: 20px;
        text-shadow: 2px 2px 4px black;
        background-color: transparent;
        backdrop-filter: blur(6px);
    }
    legend{
        border: 2px solid white;
        padding: 5px;
        border-radius: 50px;
        text-align: center;
    }
    input{
        margin: 10px;
        width: 400px;
        height: 40px;
        border: 2px solid white;
        background-color: transparent;
        border-radius: 50px;
        color: black;
        padding: 5px;
    }
    #sub{
        background-color: white;
        color: black;
        margin-bottom: 0px;
        cursor: pointer;
    }
    #sub:hover{
        background-image: url("../Images/booking.gif");
        backdrop-filter: blur(4px);
    }
</style>
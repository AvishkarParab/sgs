<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETECTOR</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./jquery.counterup.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            /* background: linear-gradient(rgba(207, 255, 207, 0.805),rgba(107, 242, 198, 0.805)) !important; */
            /* width: 100vw;
            height: 100vh; */
        }
        .navbar{
            background-color: rgba(2, 133, 28, 0.7) !important;
        }
        .navbar li{
            list-style: none;
        }
        .navbar-nav a{
            text-decoration: none;
            color:white !important;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .metalCont{
    position: relative;
    /* border: 1px solid red; */
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.nonMetalCont{
    position: relative;

    /* border: 1px solid blue; */
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.metalGlass,.nonmetalGlass {
    box-sizing: content-box;
    position: relative;
	width: 80px;
	height: 250px;
    background: #eee;
    border: 2px solid green;
    border-radius: 20px;
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
    overflow: hidden;
    box-shadow: 5px 6px 2px grey;
    
}
.metalfillbar,.nonmetalfillbar{
    position: absolute;
    bottom: 0;
    background: linear-gradient(to top ,#056e1e,#01ff3c);
    width: 100%;
    height: 0%;
    border-radius: 20px;
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
    transition: 2s height ease;
}
.percent{
    position: absolute;
    left:20px;
    font-size: 20px;
    z-index: 10;
    letter-spacing: 1px;
    color: green;
    font-weight: 600;
}
.text{
    position: absolute;
    bottom: 0px;
}
.hoh{
    background-color: rgba(2, 133, 28, 0.3);
    border: 1px solid grey;
    box-shadow: 7px 8px 2px lightslategray;
    border-radius: 40px;
}
.hoh:hover{
    transition: .3s all ease;
    transform: translate(-5px,-5px);
    background-color: rgba(2, 133, 28, 0.3);
    border: 1px solid grey;
    box-shadow: 7px 8px 2px black;
    border-radius: 40px;
}

    </style>
</head>
<body>
    <?php include("./navbar.php")?>
    <br>
    <h2 class="text-success text-center"><strong>USER ANALYSIS</strong></h2>
    <br><br>
    <div class="container-fluid row mx-0 indCont" data-aos="zoom-out-up">
        <div class="col-5 row mx-0 hoh ">
            <h5 class="text-center text-success fs-4 mt-4">Total peices detected :- 24</h5>
            <div class="col-6 metalCont">
                <div class="metalGlass">
                    <div class="metalfillbar"></div>
                    <span class="percent"><span class="counter metalcount"></span>%</span>
                </div>
                <br>
                <h5 class="text mb-3 ">METAL Peices:-  12</h5>
            </div>
            <div class="col-6 nonMetalCont">
                <div class="nonmetalGlass">
                    <div class="nonmetalfillbar"></div>
                    <span class="percent"><span class="counter nonmetalcount"></span>%</span>
                </div>
                <h5 class="text mb-3">NON-METAL Peices:- 15</h5>
            </div>
        </div>
            <div class="col-7">
            <div class="container text-center" data-aos="fade-left">
                <h1>CONGRATULATION!! YOU HAVE CONTRIBUTED </h1>
                <h1 style="font-size:100px;color:green;" ><strong class="counterNUM">12</strong>%</h1>
                <h1>TO THE ENVIROMENT</h1>
            </div>
            </div>
           
        </div>
</body>
<script>
    AOS.init();
        const count = document.querySelector(".counterNUM");
       let value =  Math.floor(Math.random()*15);
       count.innerHTML= `${value}`;
        window.onload=()=>{
            
            update_fillbar(<?php echo 70 ?>);
            update_nonMetalfillbar(<?php echo 20 ?>);
            countie();
        }
    const update_fillbar =(value)=>{
    document.querySelector(".metalcount").innerHTML = `${value}`;
    document.querySelector(".metalfillbar").style.height = `${value}%`;
    $('.metalcount').counterUp({
        delay: 10,
        time: 2000
    });
}
const update_nonMetalfillbar =(value)=>{
    document.querySelector(".nonmetalcount").innerHTML = `${value}`;
    document.querySelector(".nonmetalfillbar").style.height = `${value}%`;
    $('.nonmetalcount').counterUp({
        delay: 10,
        time: 2000
    });
}

const countie = ()=>{
    $('.counterNUM').counterUp({
        delay: 10,
        time: 1000
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
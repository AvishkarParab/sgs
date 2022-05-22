<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        body{
            background: linear-gradient(to right ,rgba(107, 242, 198, 0.305),rgba(207, 255, 207, 0.205),rgba(107, 242, 198, 0.305)) !important;
        }
        body{
            scroll-behavior: smooth;
        }
        .percent{
            color: green;
            font-weight: 600;
        }
        .fill{
            width: 80%;
        }
        .greet{
            color: green;
            background:transparent !important;
        }
        .navbar{
            background-color: rgba(2, 133, 28, 0.7) !important;
            position: sticky !important;
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
        .newsSect{
            /* border: 1px solid red; */
            display: block;
        }
        .newsPro{
            margin-top: 16px;
            padding: 20px;
            height: 370px;
            scroll-behavior: smooth;
            overflow-y: scroll;
        }
        ::-webkit-scrollbar{
            /* display: none; */
            width: 5px;
        }
        ::-webkit-scrollbar-thumb{
            background:green;
            border-radius: 20px;
        }
        ::-webkit-scrollbar-track{
            width: 5px;
            background:transparent;
        }
        .newsPro li{
            width: 100%;
            height: 80px;
            list-style: none;
            letter-spacing: 1px;
            margin-bottom: 10px;
            border-radius: 20px;
            padding:5px 15px;
            background-color: white;
            border: 1px solid green;
            color: green;
            display: flex;
            justify-content: space-evenly;
            /* align-items: center; */
            box-shadow: 4px 3px 5px grey;

        }
        
        .newsPro li h6{
            float: left;
            text-align: left;
            font-size: 14px;
        }
        .newsPro li:hover{
            background-color: rgba(2, 133, 28, 0.4);
            color: black !important;
            transition: .2s all ease;
            color: green;
            box-shadow: 5px 4px 3px black;
        }
        .newsPro li img{
            height: 50px;
            width: 50px;
            border-radius: 10px;
            z-index: -1;
            margin-right: 5px;
        }
        .cardCont{
            height:450px !important;
            width: 100%;
            /* border:1px solid green; */
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .box{
            border-radius: 20px;
            float: right;
            height: 350px;
            width: 350px;
            border:1px solid green;
            margin-right: 10px;
            box-shadow: 5px 4px 5px grey;
            padding: 20px;

        }
        .box:hover{
            transition: .3s all ease;
            background-color: rgba(2, 133, 28,0.3);
            box-shadow: 6px 7px 5px black;

        }
        .box img{
            width: 200px;
            height: 200px;
            margin-left: 30px;
            margin-right: 30px;
            border-radius: 10px;
        }
        .carou{
            z-index: -100 !important; 
        }
        .carousel-inner{
            height: 90vh !important;
            padding: 10px;
            

        }
        .carousel-inner img{
            height: 80vh;
            width: 80vw !important;
            border-radius: 20px;
            box-shadow: 6px 5px 1px black;
        }
        .carousel-inner img:hover{
            transition: .5s all ease;
            opacity: 0.4;
            z-index: -10;
        }
        .carousel-caption{
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        .carousel-caption h5 , .carousel-caption p{
            display: none;
            transition: .4s all ease;
        }
        .logoCont{
            width: 100%;
            padding: 20px;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right ,rgba(2, 133, 28, 0.4),rgba(2, 133, 28, 0.2),rgba(2, 133, 28, 0.4));
        }
        .logo{
            width: 200px;
            height: 80px;
            margin-bottom: 20px;
            margin-left: 40%;
        }
        #business{
            /* background: radial-gradient(rgba(2, 133, 0, 0.7),rgba(2, 133, 0, 0.3));
            border-radius: 20px; */
            /* border: 2px solid green;
            box-shadow: 4px 5px 5px black; */
        }
        .busi_card{
            margin: 10px 20px;
            border-radius: 20px;
            border: 2px solid green;
            padding: 20px;
            width: 500px;
            box-shadow: 6px 5px 2px darkgrey;
            font-size: 18px;
            letter-spacing: 1px;
            /* background-color: white; */
        }
        .busi_card:hover{
            transition: .4s all ease-in-out;
            box-shadow: 8px 7px 7px black;
            background-color: rgba(2, 133, 28, 0.5);
            color: white !important;
        }
        .busi_card p{
            margin-top: 10px;
        }
        .comImg{
            /* border: 2px solid green; */
            /* box-shadow: 6px 5px 2px darkgrey; */
            padding: 10px;
            height: 300px;
            width: 300px;
            border-radius: 10px;
        }
        .comImg:hover{
            transition: .4s all ease-in-out;
            box-shadow: 8px 7px 7px black;
            background-color: rgba(2, 133, 28, 0.5);
        }
        .comImg img{
            height: 100%;
            width: 100%;
        }
        .footer{
            height: 200px;
        }
        .social i{
            margin: 5px 20px;
            font-size: 25px;
        }
        .social i:hover{
            transition: .3s all ease;
            color: greenyellow;
        }
        .dropdown-menu{
            z-index: 100 !important;
        }
    </style>
    <script>
        window.onload=()=>{
            news();
            update_fillbar(<?php echo 100 ?>);
            update_nonMetalfillbar(<?php echo 60 ?>);
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="logoCont">
    <img class="logo" src="./images/logo.png" alt="">
   </div>
    <?php include("./navbar.php") ?><br>
    <div class="carou container" data-aos="zoom-in">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>


  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="https://w.ndtvimg.com/domain/3/2017/02/14120059/650_BSI_4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Singapore’s ‘Rubbish Island’</h5>
        <p>The word ‘landfill’ immediately brings to mind an image of a smelly mountain of rubbish, because that’s what it usually is. Now prepare to get dazzled by a landfill that is a bio-diversity hotspot that is home to flourishing mangroves, rich coral reefs and a capital of birds and marine life. Welcome to the Semakau Landfill,
             Singapore’s first offshore landfill, and now the only remaining landfill in the city-state.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="https://w.ndtvimg.com/domain/3/2017/02/14120059/650_BSI_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><strong>Columbia’s Recycling Solution</strong></h5>
        <p>Colombia’s municipalities produce around 28,800 tonnes of solid waste per day, with 10,000 tonnes
             of this waste being generated by the main cities of Bogotá, Cali, Medellín and Barranquilla. 
             To overcome their serious waste problem, Colombia came up with the idea of ECOBOT –
             A recycling initiative that promotes the culture of recycling across the country.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://w.ndtvimg.com/domain/3/2017/02/14120059/650_BSI_2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Indonesia’s Free Health Care</h5>
        <p>Malang, a city in Indonesia, generated more than 55,000 tonnes of waste every day. 
            It was also a city where a majority of people did not have health insurance. These two issues may seem unconnected, but Dr. Gamala Albinsaid, a healthcare entrepreneur and CEO of health company Indonesia Medika saw this as a huge social opportunity.
             He created Garbage Clinical Insurance which let people trade garbage for medical services and medicines.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://w.ndtvimg.com/domain/3/2017/02/14120059/650_BSI_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sweden Is Showing The World How To Really Take Out The Trash</h5>
        <p>It sounds incredible, but Sweden has run out of trash and is actually asking other countries for their garbage so as it can keep its recycling plants running.Less than one percent of Sweden’s household waste goes into the landfill dump; the rest is recycled in different ways. The 32 waste management
             plants in Sweden today produce heat for 810,000 Swedish households and electricity for about 250,000 private houses..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://w.ndtvimg.com/domain/3/2017/02/14120059/650x400.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> Uganda’s Amusement Park From Trash</h5>
        <p>Artist and environmentalist Ruganzu Bruno has created an amusement park for the children living in the slums of Kampala in Uganda. However, this is no ordinary amusement park, but one built entirely by waste. Bruno first collected all the waste generated by the villagers there and then, with their help, refashioned the waste to make swings and life-size board games.
             The goal of the artist is to make more than 100 such similar amusement parks in other parts of Uganda..</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    <br><br><br><br>
    <div id="waste" class="row container-fluid mx-0 mb-5" style="position:relative;">
        <div class="col-12 col-md-10 col-lg-9 row mx-0">
            <h2 class="text-center text-uppercase text-success" data-aos="fade-up">Ways of garbage collection</h2>
        <div class="cardCont" data-aos="fade-up">
            <div class="box">
                <h4 class="text-center text-success mt-3">Residential Waste Pickup</h4><br>
                <img class="text-center" src="https://www.mjstraders.com/images/thumbs/0006303_alb-15-240l-plastic-dustbin-240l_360.jpeg" alt="">
            </div>
            <div class="box">
            <h4 class="text-center text-success mt-3">Roll-Off Dumpster</h4><br>
            <img class="text-center" src="https://www.kindpng.com/picc/m/722-7220412_dumpster-hd-png-download.png" alt="">
            </div>
            <div class="box">
            <h4 class="text-center text-success mt-3">Large Trash Pickup</h4><br>
            <img class="text-center me-3" src="https://thumbs.dreamstime.com/b/bulky-waste-pick-up-rgb-color-icon-refuse-large-types-household-appliances-furniture-carpets-re-usable-condition-couches-210576721.jpg" alt="">
            </div>
        </div>
        </div>
        <div class="col-12 col-md-2 col-lg-3 newsSect" data-aos="fade-right">
            <div><h5 class="text-center text-success">QUICK READS</h5></div>
            <!-- <h5 class="text-center text-success">DAILY NEWS</h5> -->
            <br>
            <ul class="newsPro">
                
            </ul>
        </div>
    </div>
    <br><br>
    <div id="business" class="container p-4">
        <h2 class="text-center text-success" data-aos="fade-up">INDUSTRIAL CONTRIBUTION</h2>
        <br><br>
        <div class="d-flex justify-content-evenly align-items-center">
        <div class="busi_card text-center" data-aos="fade-left"
            data-aos-duration="500">
            <h3 class="text-center text-success">UNILEVER</h3>
            <p>
                There’s a good reason why Unilever often tops the list of best zero waste companies. The company achieved 
                its Zero-Waste-to-Landfill goal in 2016, six years ahead of schedule, and has maintained it ever since.
            </p>
        </div>
        <div class="comImg" data-aos="fade-left"
            data-aos-duration="500">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Unilever.svg/1200px-Unilever.svg.png" alt="">
        </div>
        </div>
        
        <br><br>
        <div class="d-flex justify-content-evenly align-items-center">
        <div class="comImg" data-aos="zoom-in-right">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Procter_%26_Gamble_logo.svg/1200px-Procter_%26_Gamble_logo.svg.png" alt="">
        </div>
        <div class="busi_card text-center" data-aos="zoom-in-left">
            <h3 class=" text-success">Procter & Gamble</h3>
            <p class="">
            This company launched its Zero Manufacturing Waste to Landfill program in 2008 and has made steady progress since then. 
            By 2013, 45 of their manufacturing facilities around the world had gone zero waste, and by 2018 they had successfully
             diverted 80% of operational waste from landfill, with the ultimate goal of achieving 100% by the end of this year.
            </p>
        </div>
        </div>
        <br><br>   
        <div class="d-flex justify-content-evenly align-items-center">
        <div class="busi_card text-center" data-aos="zoom-in-left">
            <h3 class="text-center text-success">Google</h3>
            <p>
            You wouldn’t expect this tech behemoth to be one of the major zero-waste companies in North America,
             but Google is well on its way. As of 2016, six of the company’s data centers had achieved 100% zero 
             waste, and as of 2017,
             a total of 91% of waste from global data centers was being successfully diverted from landfill.
            
            </p>
        </div>
        <div class="comImg" data-aos="zoom-in-right">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1024px-Google_%22G%22_Logo.svg.png" alt="">
        </div>
        </div>
        <br><br>
        <div class="d-flex justify-content-evenly align-items-center">
        <div class="comImg" data-aos="zoom-in-right">
            <img src="https://mma.prnewswire.com/media/583287/MARS__INCORPORATED_LOGO.jpg?p=facebook" alt="">
        </div>
        <div class="busi_card text-center" data-aos="zoom-in-left">
            <h3 class="text-center text-success">Mars, Inc.</h3>
            <p>
            Committed to the zero waste cause since 2007, in 2016 this food product maker succeeded in achieving
             zero manufacturing waste to landfill at all 126 of its factories worldwide.
              To achieve this goal Mars focused on reducing waste by streamlining operations,
             introducing recycling schemes, and, of course, devising innovative uses for recovered waste products.
            </p>
        </div>
        </div>
        <br><br>
        <div class="d-flex justify-content-evenly align-items-center">
        <div class="busi_card text-center" data-aos="zoom-in-right">
            <h3 class="text-center text-success">Sierra Nevada</h3>
            <p>
            Since 2013, Sierra Nevada has been diverting 99.8% of its solid waste from landfill. 
            As a beer manufacturer, the majority of its production waste is brewing byproducts like barley and hops,
             which is diverted from landfill and supplied to livestock farms for use as feed. The company is also big on composting, 
            using the HotRot composting system in its fields, breweries, and restaurants.
            </p>
        </div>
        <div class="comImg" data-aos="zoom-in-left">
            <img src="https://play-lh.googleusercontent.com/D8e1vss-ET8DkuCbrcYJVk18uYeo-8IUpR1rojjbv__UoK8cj_4J1yT9kEF4aw2Zbgk" alt="">
        </div>
        </div>
    </div>
        <div class="footer bg-dark text-light p-4">
            <h6 class="text-center mt-3"> ALL RIGHTS RESERVED</h6>
            <div class="d-flex justify-content-center align-items-center">
                <span class="d-flex justify-content-evenly social">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-envelope"></i>
                </span>
            </div>
        </div>
<script src="./script.js"></script>
<script>
     AOS.init();
    const newsPro = document.querySelector(".newsPro");
    window.onload =() =>{
        news();
    }
const news= async()=>{
    var url = 'https://newsapi.org/v2/top-headlines?' +
    'sources=bbc-news&' +
    'apiKey=1884e58e6a3b40218985cae047bae182';
    var req = new Request(url);
    const response = await fetch(req);
    const data = await response.json();

    data.articles.forEach(element => {
        newsPro.innerHTML += `<li> <div><img src="${element.urlToImage}"></img></div> <div><h6>${element.title} </h6></div></li>`;

    });
    const newsli = document.querySelectorAll(".newsPro li");
    newsli.forEach((ele)=>{
        ele.onclick=()=>{
            window.location.href= "./news.php";
        }
    });

}


const caro = document.querySelector(".carousel-inner");
const carop = document.querySelectorAll(".carousel-caption p");
const caroh = document.querySelectorAll(".carousel-caption h5");


 caro.onmouseover=()=>{
    carop.forEach(element => {
        element.style.display= "block";
    });
    caroh.forEach(element => {
        element.style.display= "block";
    });

 }
 caro.onmouseout=()=>{
    carop.forEach(element => {
        element.style.display= "none";
    });
    caroh.forEach(element => {
        element.style.display= "none";
    });

 }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
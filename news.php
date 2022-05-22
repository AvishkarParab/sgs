<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        window.onload=()=>{
            news();
        }
    </script>
    <style>
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
        .dropdown-menu{
            background-color:green !important;
        }
        .newsCont{
            width: 100%;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .newsPro{
            display: flex;
            float: left;

        }
        .newsPro li{
            list-style: none;
            border-radius: 20px;
            background: radial-gradient(rgba(0, 0, 0,0.4),rgba(2, 133, 28,0.95) );
            border: 2px solid green;
            padding: 10px;
            color: white;
            letter-spacing: 1px;
            margin-bottom: 5px;
            height: 450px;
            width: 350px;
            margin: 50px 10px;
            box-shadow: 8px 8px 3px grey;
            margin-left: 60px;

        }
        .newsPro li img{
            height: 200px;
            width: 300px !important;
            border-radius: 20px;
        }
        .newsPro li:hover{
            transition: .2s all ease;
            color: white;
            background: radial-gradient(rgba(2, 133, 28,0.95),rgba(0, 0, 0,0.7) );
            backdrop-filter: saturate(100px), blur(6px);
            box-shadow: 7px 6px 5px black;
        }
        .newsPro li img{
            height: 200px;
            width: 250px;
            border-radius: 20px;
        }
        .icon{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nextBtn{
            text-align: center;
            margin-top: 10px;
            letter-spacing: 1px;
            border: 2px solid green !important;
        }
    </style>
</head>
<body>
<?php include("./navbar.php") ?>
<br>
<h2 class="text-center text-success">NEWS SECTION</h2>

    <div class="newsCont">
        <ul class="newsPro row mx-5">
        </ul>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    AOS.init();
const newsPro = document.querySelector(".newsPro");

const news= async()=>{
    var url = 'https://newsapi.org/v2/top-headlines?' +
    'sources=bbc-news&' +
    'apiKey=1884e58e6a3b40218985cae047bae182';
    var req = new Request(url);
    const response = await fetch(req);
    const data = await response.json();

    data.articles.forEach(element => {
        newsPro.innerHTML += `
        <li data-aos="flip-left" col-4> 
        <div class="icon mb-3"><img src="${element.urlToImage}" /> <br/> <br/>
        </div> <div><strong>${element.title}</strong></div> <br/> 
        <p>${element.description}</p> <a href="${element.url}">
        <button class="btn btn-outline-light"> 
        Read More
        </button></a></li>`;
    });
}
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        .galCont{
            /* border: 1px solid red; */
        }
        .imageCont{
            height: 300px;
            width: 300px;
            margin: 10px 30px;
            border: 1px solid green;
        }
        .desp{
            border: 3px solid green;
            box-shadow: 7px 8px 2px black;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .desp p{
            font-size: 18px;
            letter-spacing: 1px;
            color: green;
        }
    </style>
</head>
<body>
    <?php include("./navbar.php"); ?>
    <br>
        <h2 class="text-center text-success">ABOUT US</h2>
        <br>
        <h3 class="mx-5 text-success">Project Gallery</h3>
        <div class="container galCont row">
            <div class="imageCont col-4" data-aos="zoom-out-up"></div>
            <div class="imageCont col-4" data-aos="zoom-out-up"></div>
            <div class="imageCont col-4" data-aos="zoom-out-up"></div>
        </div>
        <br><br><br>
        <h3 class="mx-5 text-success">Project Description</h3>
        <br>
        <div class="desp container text-center mb-5" data-aos="zoom-out-up">
            <h4 class="text-success text-center mt-3">Title :- <strong> SMART GARBAGE SEGREGATION</strong> </h4>
            <br><br>
            <p class="text-start">
            <strong>Description:- </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dignissimos nemo quis 
                officia et repellat cupiditate hic molestias rem quas magnam labore vitae, neque doloribus eius sint, 
                fugiat delectus mollitia!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sit harum. Dolore enim, quidem iure sed repellendus explicabo? Officia at vel beatae quis voluptates deserunt ipsum, aperiam nihil harum repudiandae?
                Vero, laudantium officia. Aliquam, eum commodi laborum quas est facilis ratione in dolores maxime tempora exercitationem sapiente fugit reprehenderit molestiae, modi, sequi similique consequatur placeat ipsam. Modi saepe autem qui.
                Sunt doloribus harum tempore vel quidem ducimus consequatur saepe, placeat et amet provident aut assumenda id expedita, rerum maiores officia beatae molestiae iste laborum ullam debitis voluptas. Dolore, eveniet repudiandae.
                <br><br>
                <strong>Working:- </strong> vero soluta ipsa earum perspiciatis expedita sint ut, voluptatum corrupti suscipit nulla inventore accusamus dolorum sunt odit. Libero nostrum hic, autem eaque ex saepe quisquam quam? Obcaecati, est aut?
                Magni et nam voluptas obcaecati excepturi eveniet adipisci nobis optio dolorem consectetur rem explicabo dolor, nemo esse tenetur fugiat vero quae? Praesentium voluptas corrupti ullam velit! Nihil deleniti ratione facilis.
                Qui pariatur vero omnis quia at reprehenderit minima sint eum excepturi, ullam amet accusantium consectetur illo architecto magni similique saepe consequuntur quasi labore incidunt rerum! Impedit rem ad aperiam quaerat!
                Aut vitae atque molestias ad ex neque eius dolorum itaque animi, facere doloremque, optio impedit dolorem tenetur quidem mollitia odit, officia eaque cumque officiis. Molestias exercitationem beatae debitis ratione tenetur.
                Quasi facere inventore, tempore doloremque illum tenetur magnam! Explicabo repellat provident sapiente corporis in voluptatum quia cumque adipisci blanditiis fugit dignissimos fuga, obcaecati sequi iure, dicta aut rerum! Sint, earum.
                Tenetur recusandae similique sequi ab sunt consequuntur laborum tempore labore? Suscipit, dolor vel tempora nulla non tempore unde aspernatur quasi dignissimos enim iste earum at nesciunt possimus, iure corporis dolore?
                Nobis sint, perspiciatis molestias autem quidem optio aliquam? Delectus culpa, quibusdam, ex libero sit quod nulla reprehenderit quisquam voluptatum nemo voluptates! Pariatur ducimus soluta, eos expedita eaque vero adipisci explicabo.

            </p>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script>
    AOS.init();
</script>
</html>
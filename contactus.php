<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Modern Attire</title>
    <style>
        /* Preloader animation  */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            transition: opacity 0.75s, visibility 0.75s;
        }

        .preloader--hidden {
            opacity: 0;
            visibility: hidden;
        }

        .preloader::after {
            content: "";
            width: 75px;
            height: 75px;
            border: 15px solid #ddd;
            border-top-color: var(--garnet);
            border-radius: 50%;
            animation: loading 0.75s ease infinite;
        }

        @keyframes loading {
            from {
                transform: rotate(0turn)
            }

            to {
                transform: rotate(1turn);
            }
        }
        h3{font-size: 5rem; text-align: center;}
        p{font-size: 15px; text-align: center;}
        #main-content{
            height: 80vh;
            padding: 5rem;
        }
    </style>
    <link rel="stylesheet" href="stylesheet/footer.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
</head>

<body>
    <div class="preloader"> </div>

    <!-- Navigation  -->
    <div class="navig">
        <?php
        include './navigation.html'
        ?>
    </div>

    <div id="main-content">
        <h3>Contact us </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolores, maxime incidunt perferendis, culpa repudiandae consequuntur id impedit a rem quos quasi at ad ipsa laboriosam inventore vero enim accusamus aspernatur omnis! Ullam tempore repudiandae doloribus fugit autem provident obcaecati vel. Libero vel voluptates dolorem ipsa eveniet dicta earum, accusamus tenetur, omnis reiciendis accusantium dignissimos.</p>
    </div>
    <!-- location added -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.557250436732!2d88.35100231491064!3d22.55825238519019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027706022f9025%3A0xea9a41556aff50bc!2sThe%20Modern%20Attire!5e0!3m2!1sen!2sin!4v1657271915258!5m2!1sen!2sin" height="350" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- location ended  -->


    <!-- Footer Section  -->
    <?php include("footer.html") ?>

    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preloader").classList.add("preloader--hidden");
        })
    </script>
</body>

</html>
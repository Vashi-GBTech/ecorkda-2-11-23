<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .sub-container {
            padding: 2rem 3rem;
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .sub-container h1 {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
            padding: 0;
            padding: 0.3rem 1rem 0.5rem 1rem;
            color: #fff;
            background: #C61431;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php include_once "navbar.php" ?>

    <div class="sub-container">
        <h1>Accounting</h1>

        <section>
            <main>
                <p>
                    Our accounting experts offer a full spectrum of financial services designed to maintain your business’s financial health and support strategic decision-making. From meticulous bookkeeping and precise financial statement preparation to insightful financial forecasting and budgeting, our team ensures your financial records are accurate and compliant. We provide tailored solutions that align with your business goals, helping you navigate complex financial landscapes with confidence.
                </p>

                <div class="img-section">
                    <div class="img"></div>
                    <div class="details">
                        <div class="name"></div>
                        <div class="role"></div>
                    </div>
                </div>
            </main>
            <side>

            </side>
        </section>
    </div>
    
    <?php include_once "new_footer.php" ?>
</body>
</html>
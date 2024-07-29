<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .clip{
            background-clip: text !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            text-fill-color: transparent !important;
        }

        .sect {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        .sect .title {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 25px;
            width: fit-content;
            background: linear-gradient(90deg, #CD1432 0%, #670A19 100%);
            background-clip: text;
        }


        .list-item {
            margin: 5px 0;
            list-style: none;
            color: crimson;
        }
        .list-item a {
            margin-left: .5rem;
            text-decoration: none;
            color: crimson;
        }

    </style>
</head>
<!-- Warning: Do no write script here -->
<!-- This page is rendered inside governance_sub.php -->
<!-- Writing the script breaks the page -->
<body>
    <div class="sect">
        <a onclick="
            location.replace('<?= base_url() ?>governance_sub/#Audit')
            location.reload()
        ">
            <div class="title clip">
                <i class="fa-solid fa-book-bookmark mr-2"></i>
                Audit
            </div>
        </a>

        <a onclick="
            location.replace('<?= base_url() ?>governance_sub/#Tax_Accounting')
            location.reload()
        ">
            <div class="title clip">
                <i class="fa-solid fa-book-bookmark mr-2"></i>
                Tax Accounting
            </div>
        </a>
    </div>
<!-- Warning: Do no write script here -->
<!-- This page is rendered inside governance_sub.php -->
<!-- Writing the script breaks the page -->
</body>
</html>
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
            gap: 2rem;
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
            text-decoration: none;
            color: crimson;
        }
        .list-item i {
            margin-right: .5rem;
        }

    </style>
</head>
<body>
    <div class="sect">
        <div class="d-flex justify-content-strat">
            <div>
             <h4>Ideal Range of Services</h4>
             <p>In order to guarantee the uniform range of service portfolio within the network RKDA International has developed the tool “Ideal Range of Services”. The tool bundles information regarding service range of each RKDA office, responsible persons, their position and professional qualification for each offered service including the client focus. Furthermore the tool provides information on specialization of each professional in industries and on persons responsible for marketing and quality management system.</p>

            <ul class="px-4">
                <li class="list-item d-flex"><a href="#" class='d-flex align-items-baseline' ><i class="fa-solid fa-book-bookmark mr-2"></i> <h6 class="<?= base_url() ?>audit" style='' >Definition of the minimum of ideal range of services (PDF)</h6></a></li>
                <li class="list-item d-flex"><a href="<?= base_url() ?>tax_consulting" class='d-flex align-items-baseline' ><i class="fa-solid fa-book-bookmark mr-2"></i> <h6 class=" " >Ideal range of servcies (PDF)</h6></a></li>
                <li class="list-item d-flex"><a href="<?= base_url() ?>tax_consulting" class='d-flex align-items-baseline' ><i class="fa-solid fa-book-bookmark mr-2"></i> <h6 class=" " >Ideal range of servcies (XLS)</h6></a></li>
               
            </ul>
            </div>
           

        </div>
    </div>

    

    
</body>
</html>
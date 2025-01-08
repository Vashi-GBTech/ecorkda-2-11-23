<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>

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
            padding: 1rem clamp(1rem, 5vw, 3rem);
            display: flex;
            /* flex-direction: column; */
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

        /* .sect .cards li {
            display: none;
        } */

        .sect .cards {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .sect .cards .drop-card {
            display: inline-block;
            border-radius: 5px;
            background: #D94453;
            padding: 0.5rem 1rem;
            position: relative;
            clip-path: polygon(0% 0%, 100% 0%, 100% 40px, 0% 40px, 0% 0%);
            overflow: hidden;
            transition: all .3s ease;
        }


        .sect .cards .drop-card span{
            font-family: 'Poppins';
            font-weight: 500;
            color: #fff;
            display: flex;
            gap: 0.5rem;
            align-items: center;
            background: #D94453;
            position: relative;
            z-index: 5;
        }

        .sect .cards .drop-card span .icon {
            position: relative;
            height: 1.3rem;
            width: 1.3rem;
            padding: 0.55rem 0.5rem 0.5rem 0.5rem;
            border-radius: 50%;
            border: 1px solid #fff;
            
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.9rem;
            background: #D94453;
        }
        .sect .cards .drop-card .drop {
            padding-left: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            position: relative;
            margin: 0.5rem 0.61rem ;
            background: #D94453;
            height: 0%;
            transition: all .3s ease;
            opacity: 0;
            /* display: none; */
        }

        .sect .cards .drop-card .drop::before {
            content: '';
            position: absolute;
            top: -.8rem;
            left: 0;
            height: 100%;
            width: 1px;
            background: #fff;
            overflow: hidden;
        }
        .sect .cards .drop-card .drop li {
            position: relative;
            list-style: none;
            color: #fff;
            font-weight: 300;
        }
        .sect .cards .drop-card .drop li::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -1rem;
            width: .7rem;
            height: 1px;
            background: #fff;
        }


        .list-item {
            margin: 5px 0;
            list-style: none;
            color: crimson;
            cursor: pointer;
        }
        .list-item a {
            margin-left: .5rem;
            text-decoration: none;
            color: crimson;
        }
        .list-item:hover a {
            color: #000
        }

        /* explore list */
        .explore-list {
            padding: 1.5rem;
            background: #EEEEEE;;
            border-radius: 10px;
            min-width: 250px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            border: 1px solid #0006;
        }
        .explore-list li {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            list-style: none;
            display: flex;
            align-items: center;
            gap: .5rem;  
            font-size: 13px;
            color: #000;
            white-space: nowrap;
            cursor: pointer;
        }
        
        .explore-list li:hover, .explore-list li.active {
            color: #C61431;
        }

        .arrow-icon {
            height: 16px;
            aspect-ratio: 39/26;
            background: url("<?= base_url() ?>assets/images/arrow-bold-right.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }


    </style>
</head>


<script src="<?= base_url('assets/js/custom.js') ?>"></script>

<body>
    <?php include_once "navbar.php" ?>

    <div class="sect d-flex justify-content-center" style="margin-top: 8rem">
        <div class="col-md-8"> <div class="title clip">Association Process</div>
        <div class="cards">
            <div class="drop-card" style="margin-top: 0px">
                <span>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    Request
                </span>

                <div class="drop">
                    <li>Interest</li>
                    <li>NDA</li>
                    <li>Authorization</li>
                </div>
            </div>

            <div class="drop-card" style="margin-top: 30px">
                <span>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    Membership
                </span>

                <div class="drop">
                    <li>Firm Details</li>
                    <li>Walkthrough</li>
                    <li>Agreement</li>
                    <li>Induction</li>
                </div>
            </div>

            <div class="drop-card" style="margin-top: 60px">
                <span>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    Essentials
                </span>

                <div class="drop">
                    <li>Network</li>
                    <li>Code</li>
                    <li>Quality Manual</li>
                </div>
            </div>
        </div>

        <div class="">
            <div class="title clip">Template Documentations</div>
            <ul class="">
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Template of License Agreement</a></li>
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Appendix 3 to licence agreement - Constitution of RKDA Group</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Appendix 2 to licence agreement - The RKDA ESSENTIALS</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Statutes of RKDA International.</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Mediation Rules</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4"><div class="explore-list"></div></div>
       
    </div>
    
    
    <?php include_once "new_footer.php" ?>

    <script>
        governance_js.membership_process()


        const GovernanceData = {
            "Governing_Board" : {
                title: "Governing Board",
                sub: "",
                content: `<?php include_once "governance_sub_pages/QDS.php" ?>`,
            },
            "Membership_process" : {
                title: "Membership process",
                sub: "",
                content: `<?php include_once "governance_sub_pages/MP.php" ?>`,
                script: governance_js.membership_process
            },
            "Quality_Standards" : {
                title: "Quality Standards",
                sub: "",
                content: `<?php include_once "governance_sub_pages/QS.php" ?>`,
            },
            "Self_inspection_and_Interoffice_Review" : {
                title: "Self inspection and Interoffice Review",
                sub: "",
                restricted: true,
                content: ``,
            },
            "Service_Portfolio" : {
                title: "Service Portfolio",
                sub: "",
                content: `<?php include_once "governance_sub_pages/SP.php" ?>`,
            },
            "Technical_Standards" : {
                title: "Technical Standards",
                sub: "",
                content: `<?php include_once "governance_sub_pages/TS.php" ?>`,
            },
            "Transfer_Pricing" : {
                title: "Transfer Pricing",
                sub: "",
                content: `<?php include_once "governance_sub_pages/TP.php" ?>`,
            },
            "IT_Working_instructions" : {
                title: "IT Working instructions",
                sub: "",
                restricted: true,
                content: ``,
            },
            "Training_Capabilities_workshop" : {
                title: "Training Capabilities workshop",
                sub: "",
                restricted: true,
                content: ``,
            },
            "Audit" : {
                title: "Audit",
                sub: "",
                content: `<?php include_once "governance_sub_pages/TS_Audit.php" ?>`,
                hide: true
            },
            "Tax_Accounting" : {
                title: "Tax Accounting",
                sub: "",
                content: `<?php include_once "governance_sub_pages/TS_Tax.php" ?>`,
                hide: true
            },
        }

        let exploreLi = document.querySelectorAll('.explore-list li')
        window.onload = () => {
            // adding explore list based on the data array
            let exploreList = document.querySelector('.explore-list')
            for (const key in GovernanceData) {
                if (GovernanceData[key].hide) continue

                const li = document.createElement('li')
                li.setAttribute('data-name', key)
                li.style.whiteSpace = 'wrap'
                li.innerHTML = `<div class="arrow-icon"></div>${GovernanceData[key].title}`
                li.onclick = () => {
                    if (GovernanceData[key].restricted) return location.href = "<?= base_url() ?>onlyForMembers"
                    location.replace(`<?= base_url() ?>governance_sub/#${key}`)
                    document.body.scrollTop = 0
                    document.documentElement.scrollTop = 0
                    updateContent()
                }

                exploreList.appendChild(li)
            }

            exploreLi = document.querySelectorAll('.explore-list li')
            updateContent()
        }
    </script>
</body>
</html>
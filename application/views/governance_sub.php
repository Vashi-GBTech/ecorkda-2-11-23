<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governance</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .sub-container {
            padding: 2rem clamp(1rem, 5vw, 3rem);
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            border-bottom: 10px solid #C61431;
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
            text-align: center;
        }
        .sub-container .sub {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 0.85rem;
        }

        .sub-container section {
            display: flex;
            gap: 2rem;
            flex: 1;
            flex-wrap: wrap;
        }

        .sub-container section main {
            flex: 3;
        }

        .sub-container section .img-section {
            border: 1px solid #0006;
            width: 200px;
            border-radius: 10px;
            background: #FFFFFF;
        }

        .sub-container section .img-section .top {
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #D9D9D97D;
            border-radius: 10px;
        }
        .sub-container section .img-section .top .img {
            width: 80%;
            aspect-ratio: 1/1;
            background: url("<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 100%;
        }

        .sub-container section .img-section .details {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            padding: 0.5rem;
        }
        .sub-container section .img-section .details .name {
            font-weight: 400;
            font-size: 1rem;
            text-align: center;
        }
        .sub-container section .img-section .details .role {
            font-weight: 300;
            font-size: .8rem;
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


        /* bottom section */
        .bottom-section {
            /* display: flex;
            justify-content: center; */
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            gap: .3rem;
            margin-top: 2rem;
        }

        .bottom-section a {
            color: #C61431;
        }
    </style>
</head>
<script src="<?= base_url('assets/js/custom.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
    <?php include_once "navbar.php" ?>

    <div class="sub-container">
        <!-- Stores Heading of the page -->
        <h1></h1>

        <!-- Stores sub title -->
        <div class="sub"></div>

        <section>
            <!-- dynamic content is showed here -->
            <main></main>
            
            <!-- Explore List present at RHS -->
            <div class="explore-list"></div>
        </section>

        <div class="bottom-section">
            If you want to reach all members of the Audit Task Force, please mailto <a href="mailto:audit@rkda.com">:audit@rkda.com</a>
        </div>
    </div>
    
    <?php include_once "new_footer.php" ?>

    <script>

        const GovernanceData = {
            "Governing_Board" : {
                title: "Governing Board",
                sub: "",
                content: `<?php include_once "governance_sub_pages/QDS.php" ?>`,
            },
            "Membership_process" : {
                title: "Membership process",
                sub: "",
                content: `<?php include_once "MP.php" ?>`,
                script: governance_js.membership_process
            },
            "Quality_Standards" : {
                title: "Quality Standards",
                sub: "",
                content: `<?php include_once "QS.php" ?>`,
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
                content: `<?php include_once "SP.php" ?>`,
            },
            "Technical_Standards" : {
                title: "Technical Standards",
                sub: "",
                content: `<?php include_once "TS.php" ?>`,
            },
            "Transfer_Pricing" : {
                title: "Transfer Pricing",
                sub: "",
                content: `<?php include_once "TP.php" ?>`,
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
                content: `<?php include_once "TS_Audit.php" ?>`,
                hide: true
            },
            "Tax_Accounting" : {
                title: "Tax Accounting",
                sub: "",
                content: `<?php include_once "TS_Tax.php" ?>`,
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

        
        function getTopicName() {
            let pathname = window.location.href
            let hashIndex = pathname.lastIndexOf('#')
            return hashIndex > -1? pathname.slice(hashIndex + 1, pathname.length) : "Governing_Board"
        }

        function updateContent() {
            let topicName = getTopicName()

            // set color of active li
            exploreLi.forEach(li => {
                if (li.getAttribute('data-name') == topicName) li.classList.add('active')
                else li.classList.remove('active')
            })

            let currentTopic = GovernanceData[topicName]

            if (!currentTopic) return

            document.querySelector('.sub-container h1').innerText = currentTopic.title
            if (currentTopic.sub.trim() != '') document.querySelector('.sub-container .sub').innerText = currentTopic.sub
            else document.querySelector('.sub-container .sub').innerText = ''
            document.querySelector('.sub-container section main').innerHTML = currentTopic.content
            if (currentTopic.script) currentTopic.script()
        }

    </script>
</body>
</html>
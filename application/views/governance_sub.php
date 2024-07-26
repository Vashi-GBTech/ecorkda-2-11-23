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
<body>
    <?php include_once "navbar.php" ?>

    <div class="sub-container">
        <!-- Stores Heading of the page -->
        <h1></h1>

        <!-- Stores sub title -->
        <div class="sub"></div>

        <section>
            <main>

                <!-- <div class="img-section">
                    <div class="top">
                        <div class="img"></div>
                    </div>

                    <div class="details">
                        <div class="name">Pankaj Bhargava</div>
                        <div class="role">Partner</div>
                    </div>
                </div> -->
            </main>
            
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
            "Quality_Development_Standard" : {
                title: "Quality Development Standard",
                sub: "Lorem ipsum dolor sit amet consectetur. Aliquam massa odio egestas tincidunt. Mattis eget at nunc dui sollicitudin mi dictum. Condimentum dignissim turpis odio amet pulvinar venenatis. Sed amet ut eu quam aliquam tempus.",
                content: `<?php include_once "QDS.php" ?>`
            },
            "Membership_process" : {
                title: "Membership process",
                sub: "",
                content: `<?php include_once "MP.php" ?>`
            },
            "Quality_Standards" : {
                title: "Quality Standards",
                sub: "",
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "Self_inspection_and_Interoffice_Review" : {
                title: "Self inspection and Interoffice Review",
                sub: "",
                restricted: true,
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "Service_Portfolio" : {
                title: "Service Portfolio",
                sub: "",
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "Technical_Standards" : {
                title: "Technical Standards",
                sub: "",
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "Transfer_Pricing" : {
                title: "Transfer Pricing",
                sub: "",
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "IT_Working_instructions" : {
                title: "IT Working instructions",
                sub: "",
                restricted: true,
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
            "Training_Capabilities_workshop" : {
                title: "Training Capabilities workshop",
                sub: "",
                restricted: true,
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
            },
        }

        let exploreLi = document.querySelectorAll('.explore-list li')
        window.onload = () => {
            // adding explore list based on the data array
            let exploreList = document.querySelector('.explore-list')
            for (const key in GovernanceData) {
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
            return hashIndex > -1? pathname.slice(hashIndex + 1, pathname.length) : "Quality_Development_Standard"
        }

        function updateContent() {
            let topicName = getTopicName()

            // set color of active li
            exploreLi.forEach(li => {
                if (li.getAttribute('data-name') == topicName) li.classList.add('active')
                else li.classList.remove('active')
            })

            document.querySelector('.sub-container h1').innerText = GovernanceData[topicName].title
            if (GovernanceData[topicName].sub.trim() != '') document.querySelector('.sub-container .sub').innerText = GovernanceData[topicName].sub
            else document.querySelector('.sub-container .sub').innerText = ''
            document.querySelector('.sub-container section main').innerHTML = GovernanceData[topicName].content
        }

    </script>
</body>
</html>
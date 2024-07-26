<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Force</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .sub-container {
            padding: 2rem clamp(1rem, 5vw, 3rem);
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            gap: 2rem;
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

        .sub-container section {
            display: flex;
            gap: 2rem;
            flex: 1;
            flex-wrap: wrap;
        }

        .sub-container section main {
            padding: 1.5rem;
            background: #D9D9D980;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            flex: 3;
        }
        .sub-container section main p {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 14px;
            margin: 0;
            padding: 0;
            text-align: justify;
        }

        .sub-container section .img-section {
            border: 1px solid #0006;
            width: 200px;
            border-radius: 10px;
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
        }
        .sub-container section .img-section .details .role {
            font-weight: 300;
            font-size: .8rem;
        }



        /* explore list */
        .explore-list {
            padding: 1.5rem;
            background: #D9D9D9;
            border-radius: 10px;
            min-width: 250px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
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
        <h1>Accounting</h1>

        <section>
            <main>
                <p>
                    Our accounting experts offer a full spectrum of financial services designed to maintain your business’s financial health and support strategic decision-making. From meticulous bookkeeping and precise financial statement preparation to insightful financial forecasting and budgeting, our team ensures your financial records are accurate and compliant. We provide tailored solutions that align with your business goals, helping you navigate complex financial landscapes with confidence.
                </p>

                <div class="img-section">
                    <div class="top">
                        <div class="img"></div>
                    </div>

                    <div class="details">
                        <div class="name">Pankaj Bhargava</div>
                        <div class="role">Partner</div>
                    </div>
                </div>
            </main>
            
            <div class="explore-list">
                <li data-name="Accounting">
                    <div class="arrow-icon"></div>Accounting
                </li>
                <li data-name="Audit">
                    <div class="arrow-icon"></div>Audit
                </li>
                <li data-name="Tax">
                    <div class="arrow-icon"></div>Tax
                </li>
                <li data-name="Legal">
                    <div class="arrow-icon"></div>Legal
                </li>
                <li data-name="Governance">
                    <div class="arrow-icon"></div>Governance
                </li>
                <li data-name="Compliance">
                    <div class="arrow-icon"></div>Compliance
                </li>
                <li data-name="M_&_A">
                    <div class="arrow-icon"></div>M & A
                </li>
                <li data-name="Technology">
                    <div class="arrow-icon"></div>Technology
                </li>
                <li data-name="Non_Profit">
                    <div class="arrow-icon"></div>Non Profit
                </li>
            </div>
        </section>

        <div class="bottom-section">
            If you want to reach all members of the Audit Task Force, please mailto <a href="mailto:audit@rkda.com">:audit@rkda.com</a>
        </div>
    </div>
    
    <?php include_once "new_footer.php" ?>

    <script>
        const TaskForceData = {
            "Accounting" : {
                title: "Accounting",
                content: "The Accounting Task Force plays a crucial role in navigating a rapidly evolving technological landscape and diverse multi-country accounting standards. Responsibilities include ensuring accurate financial reporting, adhering to global accounting principles, and implementing cutting-edge technology for efficiency. The team stays updated with international regulations, advice on best practices, and collaborates with other task forces to align accounting strategies with legal, tax, and compliance requirements. They also drive digital transformation initiatives, enhance financial transparency, and support decision-making through robust financial data analysis, ensuring the network’s accounting practices remain compliant, innovative, and adaptable to global changes.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Audit": {
                title: "Audit",
                content: "The Audit Task Force ensures the integrity and accuracy of financial statements and operations across the network. Their responsibilities include conducting thorough internal and external audits, identifying and mitigating risks, and ensuring compliance with global auditing standards. Leveraging advanced auditing technologies and methodologies, they provide actionable insights to enhance organizational efficiency and transparency. The team also collaborates with accounting and compliance task forces to align audit practices with evolving regulatory requirements and industry best practices, ensuring robust financial oversight and fostering trust among stakeholders.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Tax": {
                title: "Tax",
                content: "The Tax Task Force manages the complex landscape of multi-jurisdictional tax regulations and compliance. Their roles include developing tax strategies that optimize financial outcomes, ensuring compliance with international tax laws, and leveraging technology for efficient tax reporting and planning. The team stays abreast of global tax developments, provides guidance on cross-border tax issues, and works closely with legal and accounting task forces to align tax strategies with broader financial and operational goals. Their expertise helps the network navigate tax complexities and maximize tax efficiency.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Legal": {
                title: "Legal",
                content: "The Legal Task Force provides comprehensive legal support and guidance to ensure compliance with local and international laws. Responsibilities include drafting and reviewing contracts, managing legal risks, and advising on regulatory changes. They utilize advanced legal technology to streamline processes and ensure efficient legal management. The team collaborates with other task forces, particularly governance and compliance, to align legal strategies with organizational objectives, mitigating legal risks and supporting the network’s strategic initiatives in a rapidly changing legal environment.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Governance": {
                title: "Governance",
                content: "The Governance Task Force ensures that the network operates within a robust framework of corporate governance principles. Their roles include developing governance policies, monitoring adherence to regulatory requirements, and fostering a culture of accountability and ethical conduct. Leveraging technology, they enhance governance practices and transparency, ensuring alignment with global best practices. The team collaborates with audit, compliance, and legal task forces to ensure cohesive governance strategies, mitigating risks, and promoting sustainable organizational growth and stakeholder confidence.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Compliance": {
                title: "Compliance",
                content: "The Compliance Task Force safeguards the network against regulatory and compliance risks by implementing and monitoring comprehensive compliance programs. Responsibilities include developing compliance policies, conducting risk assessments, and ensuring adherence to international standards. Utilizing advanced compliance technologies, they enhance monitoring and reporting capabilities. The team works closely with legal, governance, and audit task forces to integrate compliance into all operational aspects, ensuring the network’s activities meet regulatory requirements and uphold the highest standards of ethical conduct.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "M_&_A": {
                title: "M & A",
                content: "The Mergers & Acquisitions (M&A) Task Force drives the network’s strategic growth through mergers, acquisitions, and partnerships. Their roles include identifying and evaluating potential opportunities, conducting due diligence, and managing the integration process. They leverage advanced analytical tools to assess financial and strategic fit, ensuring value creation and alignment with organizational goals. The team collaborates with legal, tax, and financial experts to navigate complex transactions, mitigate risks, and ensure seamless integration, thereby enhancing the network’s competitive edge and market position.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Technology": {
                title: "Technology",
                content: "The Technology Task Force spearheads the digital transformation initiatives within the network, ensuring the adoption of cutting-edge technologies to enhance operational efficiency and innovation. Responsibilities include developing and implementing technology strategies, managing IT infrastructure, and ensuring cybersecurity. The team stays at the forefront of technological advancements, integrating solutions that support other task forces in achieving their objectives. They collaborate with all departments to ensure technology aligns with business goals, driving digital innovation and maintaining the network’s competitive advantage in a tech-driven world.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            },
            "Non_Profit": {
                title: "Non Profit",
                content: "The Non-Profit Task Force supports the network’s philanthropic initiatives and social responsibility goals. Their roles include managing non-profit projects, ensuring compliance with relevant regulations, and developing strategies for impactful community engagement. They leverage technology to enhance program efficiency and transparency, fostering strong partnerships with stakeholders and beneficiaries. The team collaborates with governance, compliance, and financial experts to ensure sustainable and effective non-profit activities, aligning the network’s social mission with its overall strategic objectives and making a positive impact on society.",
                person: {
                    img: "<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg",
                    name: "Pankaj Bhargava",
                    role: "Partner"
                }
            }
        }

        let exploreLi = document.querySelectorAll('.explore-list li')
        window.onload = () => updateContent()

        
        function getTopicName() {
            let pathname = window.location.href
            let hashIndex = pathname.lastIndexOf('#')
            return hashIndex > -1? pathname.slice(hashIndex + 1, pathname.length) : "Accounting"
        }

        function updateContent() {
            let topicName = getTopicName()

            // set color of active li
            exploreLi.forEach(li => {
                if (li.getAttribute('data-name') == topicName) li.classList.add('active')
                else li.classList.remove('active')
            })

            document.querySelector('.sub-container h1').innerText = TaskForceData[topicName].title
            document.querySelector('.sub-container section main p').innerText = TaskForceData[topicName].content
            document.querySelector('.sub-container .img-section .top .img').style.background = TaskForceData[topicName].person.img
            document.querySelector('.sub-container .img-section .details .name').innerText = TaskForceData[topicName].person.name
            document.querySelector('.sub-container .img-section .details .role').innerText = TaskForceData[topicName].person.role
        }


        exploreLi.forEach(li => {
            li.onclick = () => {
                location.replace(`<?= base_url() ?>task_force_sub/#${li.getAttribute('data-name')}`)
                document.body.scrollTop = 0
                document.documentElement.scrollTop = 0
                updateContent()
            }
        })
    </script>
</body>
</html>
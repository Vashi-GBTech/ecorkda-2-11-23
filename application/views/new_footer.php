<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        footer {
            background: #0c0c0c;
            display: flex;
            flex-direction: column;
            --pad: 1.5rem clamp(2vw, 3rem, 5vw);
        }

        footer .links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            border-bottom: 2px solid #fff;
        }

        footer .links .section {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        footer .links .section span{
            padding: var(--pad);
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: clamp(1.2vw, 16px, 4vw);
            border-bottom: 2px solid #fff;
            white-space: nowrap;
            cursor: default;
            color: #efefef;
        }
        footer .links .section .ul {
            padding: var(--pad);
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: clamp(.8vw, 14px, 3.5vw);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        footer .links .section .ul a {
            color: #adadad;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        footer .links .section .ul a:hover{
            color: #fff;
            text-decoration: underline !important;
        }

        footer .bottom {
            display: flex;
            padding: var(--pad);
        }
        footer .bottom p {
            flex: 1;
            width: max-content;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(1vw, 16px, 4vw);
            font-weight: 400;
            color: #fff;
            margin-bottom: 0 ;
        }

        .img-footer{
            height: 1rem;
            width: 1rem;
            min-width: 1rem;
            background: var(--src);
            background-position: center;
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }
    </style>
</head>
<body>
    <footer>
        <div class="links">

            <div class="section">
                <span>Useful Link</span>
                <div class="ul">
                    <a href="<?= base_url() ?>"><i class="fa-solid fa-chevron-right"></i>Home</a>
                    <a href="<?= base_url() ?>/#about"><i class="fa-solid fa-chevron-right"></i>About Us </a>
                    <a href=""><i class="fa-solid fa-chevron-right"></i>Our Partners</a>
                    <a href="<?= base_url() ?>#needHelp"><i class="fa-solid fa-chevron-right"></i>Contact Us</a>
                </div>
            </div>

            <div class="section">
                <span>Services</span>
                <div class="ul">
                    <a href="<?= base_url() ?>task_force_new"><i class="fa-solid fa-chevron-right"></i>Task Force</a>
                    <a href="<?= base_url() ?>governance_sub"><i class="fa-solid fa-chevron-right"></i>Governance</a>
                    <a href="<?= base_url() ?>capabilities"><i class="fa-solid fa-chevron-right"></i>Capabilities</a>
                    <a href="<?= base_url() ?>membership"><i class="fa-solid fa-chevron-right"></i>Membership</a>
                </div>
            </div>

            <div class="section">
                <span>Connect With Us</span>
                <div class="ul">
                    <a href="" style="display: flex; align-items: flex-start">
                        <div class="img-footer" style='--src: url("<?= base_url('assets/images/footer-img/Location ICon.png') ?>");'></div>
                        515, Tulsiani chambers, Nariman Point, Mumbai 400 021.
                    </a>
                    <a href="mailto:audit@rkda.com">
                    <div class="img-footer" style='--src: url("<?= base_url('assets/images/footer-img/mail Icon.png') ?>");'></div>
                        audit@rkda.com
                    </a>
                    <a href="">
                    <div class="img-footer" style='--src: url("<?= base_url('assets/images/footer-img/Call ICon.png') ?>");'></div>
                        91XXXXXXXXX
                    </a>
                </div>
            </div>

            <div class="section">
                <span>Social Links</span>
                <div class="ul" style="flex-direction: row;">
                    <a href="">
                        <div class="img-footer" style='--src: url("<?= base_url('assets/images/footer-img/Linkedin Logo.png') ?>"); height: 2rem; width: 2rem;' ></div>
                    </a>
                    <a href="mailto:audit@rkda.com">
                        <div class="img-footer" style='--src: url("<?= base_url('assets/images/footer-img/Gmail logo.png') ?>"); height: 2rem; width: 2rem;' ></div>
                    </a>
                </div>
            </div>

        </div>

        <div class="bottom">
            <div class="logo">

            </div>
            <p>Approved and Affiliated by the Institute of Chartered Accountants of India (ICAI).</p>
        </div>
    </footer>
</body>
</html>
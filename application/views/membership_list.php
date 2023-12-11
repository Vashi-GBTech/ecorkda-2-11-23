<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<style>
    .active {
        color: crimson;
    }

    .wl-link-color:hover {
        color: #cd2653;
    }
</style>

<body>
    <div class="container-fluid p-3 mb-5" style="background-color:rgb(238,238,238)">
        <h6 class='mb-0'>Working together</h6>
        <ul class='work-list-ul'>
            <li id="faq_new_partner"><a href="<?= base_url() ?>faq_new_partner" class="wl-link-color">FAQ (New
                    Partner)</a></li>
            <li id="expansion_plan"><a href="<?= base_url() ?>expansion_plan" class="wl-link-color">Expansion Plan</a>
            </li>
            <li id="info_new_partners"><a href="<?= base_url() ?>info_new_partners" class="wl-link-color">Information
                    about New Partners</a></li>
            <li id="integration_checklist"><a href="<?= base_url() ?>integration_checklist"
                    class="wl-link-color">Integration Checklist</a></li>
            <li id="first_steps_checklist"><a href="<?= base_url() ?>first_steps_checklist" class="wl-link-color">First
                    Steps Checklist</a></li>
       
        

        </ul>

    </div>
    <script>
        $(document).ready(function () {
            // Get the current URL
            var currentPageUrl = window.location.href;

            // Get the page name by removing the base URL
            var pageName = currentPageUrl.split('<?= base_url() ?>').pop();

            // Set 'active' class to the element with the ID of the page name
            $('#' + pageName).addClass('active');

            // Remove 'active' class from all links and add 'active' class to the clicked link
            $('.wl-link-color').removeClass('active');
            $('.wl-link-color[href="' + currentPageUrl + '"]').addClass('active');

            // On link click
            $('.wl-link-color').on('click', function (e) {
                e.preventDefault();
                var linkHref = $(this).attr('href');

                // Remove 'active' class from all links
                $('.wl-link-color').removeClass('active');

                // Add 'active' class to the clicked link
                $(this).addClass('active');

                // Store the clicked link in localStorage
                localStorage.setItem('lastClickedLink', linkHref);

                // Navigate to the clicked link
                window.location.href = linkHref;
            });
        });


    </script>
</body>

</html>
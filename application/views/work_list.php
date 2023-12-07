<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work List</title>
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
            <li id="accounting_task_force" ><a href="<?= base_url() ?>accounting_task_force" class="wl-link-color">Accounting Task Force</a></li>
            <li id="audit_task_force"><a href="<?= base_url() ?>audit_task_force" class="wl-link-color">Audit Task Force</a></li>
            <li id="legal_task_force"><a href="<?= base_url() ?>legal_task_force" class="wl-link-color">Legal Task Force</a></li>
            <li id="ma_task_force"><a href="<?= base_url() ?>ma_task_force" class="wl-link-color">M&A Task Force</a></li>
            <li id="tax_task_force"><a href="<?= base_url() ?>tax_task_force" class="wl-link-color" class="wl-link-color">Tax Task Force</a></li>
            <li id="technology_task_force"><a href="<?= base_url() ?>technology_task_force" class="wl-link-color">Technology Task Force</a></li>
            <li id="women_leadership_group" ><a href="<?= base_url() ?>women_leadership_group" class="wl-link-color">Women Leadership Group</a></li>
            <li id="rkda_internship" ><a href="<?= base_url() ?>rkda_internship" class="wl-link-color">RKDA International Internships</a></li>
            <li><a href="#" class="wl-link-color">International Partner Meetings</a></li>
            <li><a href="#" class="wl-link-color">International Service Offerings</a></li>
            <li><a href="#" class="wl-link-color">Multinational project news</a></li>
            <li><a href="#" class="wl-link-color">VAT/ Experts</a></li>
            <li><a href="#" class="wl-link-color">Vision 2030</a></li>
            <li><a href="#" class="wl-link-color">Workshops & Webinars</a></li>
            <li><a href="#" class="wl-link-color">Marketing-Workshops</a></li>
            <li><a href="#" class="wl-link-color">Entry form</a></li>
            <li><a href="#" class="wl-link-color">Secondment & Workcation (in progress)</a></li>
            <li><a href="#" class="wl-link-color">Current Opportunities</a></li>
            <li><a href="#" class="wl-link-color">Experiences</a></li>
            <li><a href="#" class="wl-link-color">Secondment FAQs</a></li>
        </ul>

    </div>
    <script>
  $(document).ready(function() {
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
    $('.wl-link-color').on('click', function(e) {
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
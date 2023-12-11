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
            <li id="qty_dev_board"><a href="<?= base_url() ?>qty_dev_board" class="wl-link-color">Quality Development Board</a></li>
            <li id="essentials"><a href="<?= base_url() ?>essentials" class="wl-link-color">Essentials</a></li>
            <li id="qty_standards"><a href="<?= base_url() ?>qty_standards" class="wl-link-color">Quality Standards</a>
           <ul class='pl-3'>
           <li id="independent_std"><a href="<?= base_url() ?>independent_std" class="wl-link-color">Independence Standard</a></li>
            <li id="member_firms"><a href="<?= base_url() ?>member_firms" class="wl-link-color">Internal complaints procedure for RKDA member firms</a></li>
           </ul>
          </li>
            <li id="qty_monitoring"><a href="<?= base_url() ?>qty_monitoring" class="wl-link-color">Quality Monitoring</a></li>
            <li id="siir"><a href="<?= base_url() ?>siir" class="wl-link-color">Self-Inspection and Interoffice Review</a></li>
            <li id="service_portfolio"><a href="<?= base_url() ?>service_portfolio" class="wl-link-color">Service Portfolio</a></li>
            <li id="technical_standards"><a href="#" class="wl-link-color">Technical standards</a>
            <ul class='pl-3'>
            <li id="audit"><a href="<?= base_url() ?>audit" class="wl-link-color">Audit</a></li>
            <li id="tax_accounting"><a href="<?= base_url() ?>tax_accounting" class="wl-link-color">Tax/ Accounting</a>
             <ul class='pl-3'>
            <li id="transfer_pricing"><a href="<?= base_url() ?>transfer_pricing" class="wl-link-color">Transfer pricing</a></li>

             </ul>
        </li>
            <li id="IT_instructions"><a href="<?= base_url() ?>IT_instructions" class="wl-link-color">IT Working Instructions</a></li>

            </ul>
        </li>
           
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
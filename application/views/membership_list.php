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
<div class="col-md-12 d-flex justify-content-end ">
              <div class="">
                <div class="container-fluid p-3 " style="background-color:rgb(238,238,238); border: 1px solid gray;border-radius:5px">
                  <!-- <h6 class='mb-0'>Other Information</h6> -->
                  <ul class='work-list-ul poppins-medium '>
                      <li id="faq_new_partner"><a href="<?= base_url() ?>faq_new_partner" class="wl-link-color">Quality Development Board</a></li>
                      <li id="expansion_plan"><a href="<?= base_url() ?>membership" class="wl-link-color">Membership process</a>
                      </li>
                      <li id="quality_std"><a href="<?= base_url() ?>quality_std" class="wl-link-color">Quality Standards</a></li>
                      <li id="integration_checklist"><a href="<?= base_url() ?>onlyForMembers"
                              class="wl-link-color">Self inspection and Interoffice Review</a></li>
                      <li id="service_portfolio_new"><a href="<?= base_url() ?>service_portfolio_new" class="wl-link-color">Service Portfolio</a></li>
                     

                     <li id="technical_standards"><a href="<?= base_url() ?>tech_std" class="wl-link-color">Technical standards</a>
                <ul class="pl-3">
                <li id="audit"><a href="<?= base_url() ?>audit" class="wl-link-color">Audit</a></li>
                    <li id="tax_acc"><a href="<?= base_url() ?>tax_consulting" class="wl-link-color">Tax Accounting</a></li>
                </ul>
              </li>





                      <li id="tax_consulting"><a href="<?= base_url() ?>transfer_pricing_new" class="wl-link-color">Transfer Pricing</a></li>
                      <li id="IT_Working_instructions"><a href="<?= base_url() ?>onlyForMembers" class="wl-link-color">IT Working instructions</a></li>
                      <li id="Training_Capabilities_workshop"><a href="<?= base_url() ?>onlyForMembers" class="wl-link-color">Training Capabilities workshop</a></li>
                
                  

                    </ul>

    </div>
              </div>
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
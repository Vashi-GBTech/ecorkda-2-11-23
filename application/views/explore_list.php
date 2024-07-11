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
                      <li id="accounting"><a href="<?= base_url() ?>accounting" class="wl-link-color">Accounting</a></li>
                      <li id="tf_audit"><a href="<?= base_url() ?>tf_audit" class="wl-link-color">Audit</a>
                      </li>
                      <li id="tax"><a href="<?= base_url() ?>tax" class="wl-link-color">Tax</a></li>
                      <li id="legal"><a href="<?= base_url() ?>legal"
                              class="wl-link-color">Legal</a></li>
                      <li id="governance"><a href="<?= base_url() ?>governance" class="wl-link-color">Governance</a></li>
                     <li id="compliance"><a href="<?= base_url() ?>compliance" class="wl-link-color">Compliance</a></li>
                     <li id="m_a"><a href="<?= base_url() ?>m_a" class="wl-link-color">M & A</a></li>
                     <li id="tech"><a href="<?= base_url() ?>tech" class="wl-link-color">Technology</a></li>
                     <li id="wlg"><a href="<?= base_url() ?>wlg" class="wl-link-color">Women Leardership Group</a></li>
            
            

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
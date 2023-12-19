<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <title>Membership Process</title>
</head>
<style>
  .tree {
    margin: 0;
    padding-left: 25px;
    line-height: 3em;
    list-style: none;
    background-color: #fff;
  }

  .tree li {
    position: relative;
  }

  .tree li:before {
    position: absolute;
    top: -1px;
    left: -15px;
    display: block;
    width: 13px;
    height: 1.5em;
    content: "";
    border-bottom: 2px solid #666;
    border-left: 2px solid #666;
  }

  /* hide the vertical line on the first item */
  .tree>li:first-child:before {
    border-left: none;
  }

  .tree li:after {
    position: absolute;
    top: 0.85em;
    bottom: 1px;
    left: -15px;
    display: block;
    content: "";
    border-left: 2px solid #666;
  }

  /* hide the lines on the last item */
  .tree li:last-child:after {
    display: none;
  }

  /* inserted via JS  */
  .js-toggle-icon {
    position: relative;
    z-index: 1;
    display: inline-block;
    width: 14px;
    margin-right: 2px;
    margin-left: -23px;
    line-height: 14px;
    text-align: center;
    font-style: normal;
    cursor: pointer;
    background-color: #fff;
    border: 1px solid #666;
    border-radius: 2px;
  }

  .nodes-hover-effect {
    padding: 4px;

  }

  .nodes-hover-effect:hover {

    /* background: #afafaf; */
    box-shadow: 0px 2px 8px -1px gray;
  }
  .tree li a{
    color :black !important
  }
</style>

<body>
  <?php include_once "header.php" ?>
  <div class="container-fluid">
    <div class='my-3 mx-2'>
      <h1 class='acc-for-heading'>Membership Process</h1>
    </div>
    <div class="d-flex">
      <div class="col-md-7">
        <div class="d-flex justify-content-between" style="flex-wrap:wrap">
          <div>
            <ul class='internship-pt-ul p-0'>
              <li><a href="#">Template of licence agreement</a>
                <ul class='internship-pt-ul pl-2'>
                  <li><a href="#">Template of licence agreement</a></li>
                  <li><a href="#">Template of licence agreement</a></li>
                </ul>
              </li>
              <li><a href="#">Appendix 3 to licence agreement – Constitution of the RKDA Group</a></li>
              <li><a href="#">Appendix 2 to licence agreement – The RKDA ESSENTIALS</a></li>
              <li><a href="#">Statutes of RKDA International</a></li>
              <li><a href="#">Mediation Rules</a></li>
            </ul>

            <ul class="tree">
              <li>Membership Process</li>
              <li>
                
                  <span class='nodes-hover-effect'>Templates</span>
                  <ul>
                    <li><a href="#"><span class='nodes-hover-effect'>NDA</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Membership</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Structure of NDA</span></a></li>
                  </ul>
            
              </li>
              <li>
              
                  <span class='nodes-hover-effect'>Application</span>
                  <ul>
                    <li><a href="#"><span class='nodes-hover-effect'>Request</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Authorization</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Application</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Network incubation</span></a></li>
                  </ul>
             
              </li>
              <li>
              
                  <span class='nodes-hover-effect'>Essentials</span>
                  <ul>
                    <li><a href="#"><span class='nodes-hover-effect'>Network System</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Code</span></a></li>
                    <li><a href="#"><span class='nodes-hover-effect'>Quality Manual</span></a></li>
                  </ul>
            
              </li>
            </ul>

          </div>

        </div>
        <div class="my-3">
          <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com"
              style="color:crimson">audit@rkda.com</a> </p>
        </div>
      </div>

      <div class="col-md-5 d-flex justify-content-center">
        <div class="col-md-8">
          <?php include_once "why_us_list.php" ?>
        </div>

      </div>
    </div>



  </div>
  <?php include_once "footer.php" ?>

  <script>

    $(function () {
      // Hide all lists except the outermost.
      $('ul.tree ul').hide();

      $('.tree li > ul').each(function (i) {
        var $subUl = $(this);
        var $parentLi = $subUl.parent('li');
        var $toggleIcon = '<i class="js-toggle-icon">+</i>';

        $parentLi.addClass('has-children');

        $parentLi.prepend($toggleIcon).find('.js-toggle-icon').on('click', function () {
          $(this).text($(this).text() == '+' ? '-' : '+');
          $subUl.slideToggle('fast');
        });
      });
    });


  </script>
</body>

</html>
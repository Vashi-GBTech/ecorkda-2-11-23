<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <title>Audit</title>
</head>
<style>
  .entry-content table tbody tr td{
    border: 1px solid lightgray;
    border-collapse: collapse;
    padding: 10px;
  }
  .entry-content table tbody tr td a{
    color: crimson !important;
  }
</style>
<body>
  <?php include_once "header.php" ?>
  <div class="container-fluid">
    <div class='my-3 mx-2'>
      <h1 class='acc-for-heading'>Audit</h1>
    </div>
    <div class="d-flex">
      <div class="col-md-7">
        <div class="entry-content">
          <table class="w-100" >
            <tbody>
              <tr>
                <td width="50px">1.</td>
                <td><strong>RKDA General Audit Standards</strong>
                  <p></p>
                  <ul  class="internship-pt-ul p-0">
                    <li>1.1 <a
                        href="<?= base_url() ?>onlyForMembers"
                        target="_blank" rel="noopener noreferrer">RKDA Independence Procedure</a></li>
                    <li>1.2 <a
                        href="<?= base_url() ?>onlyForMembers"
                        target="_blank" rel="noopener noreferrer">Independence Threats and Safeguarding</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td><strong>RKDA Audit Approach</strong>
                  <p></p>
                  <ul class="internship-pt-ul  p-0">
                    <li>2.1 <a
                        href="<?= base_url() ?>onlyForMembers"
                        target="_blank" rel="noopener noreferrer">RKDA Audit guideline</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td><strong>Group Audit Instructions</strong>
                  <p></p>
                  <ul class='internship-pt-ul  p-0'>
                    <li>3.1 <a
                        href="<?= base_url() ?>onlyForMembers"
                        target="_blank" rel="noopener noreferrer">Group Audit Instructions</a></li>
                    <li>3.2 <a
                        href="<?= base_url() ?>onlyForMembers"
                        target="_blank" rel="noopener noreferrer">Audits of Group Financial Statements – Presentation at
                        IPM Tokyo 2016</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td>
                  <ul class='internship-pt-ul  p-0'>
                    <li>4.1 <a
                        href="<?= base_url() ?>onlyForMembers"
                        rel="noopener noreferrer">Proposal audit of group financial statements</a></li>
                    <li>4.2 <a href="<?= base_url() ?>onlyForMembers"
                        rel="noopener noreferrer">About us</a>, <a
                        href="<?= base_url() ?>onlyForMembers"
                        rel="noopener noreferrer">Image Brochure</a></li>
                    <li>4.3 <a href="<?= base_url() ?>onlyForMembers"
                        rel="noopener noreferrer">Client reference list</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="my-3">
          <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:"
              style="color:crimson">ecovis.india@ecovis.com</a> </p>
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
</body>

</html>
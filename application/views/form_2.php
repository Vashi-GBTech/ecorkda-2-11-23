<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<style>
    .auth .table td,.auth .table th{
        border: 1px solid #c8cecf;  
    }
</style>
<body>
    <h1 class="text-center" style="font-size:40px">AUTHORISATION LETTER</h1>
    <h1 class="text-center" style="font-size:40px">THE INSTITUTE OF CHARTERED ACCOUNTANTS OF INDIA</h1>
    <div class="d-flex justify-content-center" style="text-align:justify;font-size:25px;margin-left:400px">
        <p class="w-75">We, the Partners of <span style="font-weight:bold" ><?php echo htmlspecialchars($comp_name); ?> </span> ., hereby declare that our firm(s)/ Member(s)
            are
            desirous of entering into an understanding to join <strong>RKDA & AFFILIATES</strong> in
            accordance with the Guidelines for Networking amongst the firms registered with
            The Institute of Chartered Accountants of India and we hereby authorise <?php echo htmlspecialchars($salutation); ?> .
            <span style="font-weight:bold"><?php echo htmlspecialchars($partner_name); ?> </span> , the partner signing the application and other requisite
            documents for becoming a network member on behalf of our firm all other
            partners. </p>
    </div>
    <div class="d-flex justify-content-center" style="text-align:justify;font-size:25px;margin-left:400px">
        <p class="w-75">We hereby affix our signature to confirm the above. </p>
    </div>
    <div class="d-flex justify-content-center auth mt-2" style='margin-left:400px'>
        <table class="table w-75">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Membership Number</th>
                    <th scope="col">Signature</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Mr.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Mr.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mr.</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Mr.</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>
   <!-- <div  class=" mt-5" style="display: flex;justify-content:center" >
   <div style=" display: flex; justify-content:between;width:50%" > -->
         <span style='margin-left:400px'>Place: <span></span></span> &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <span>I accept.</span>

    <!-- </div>
   </div> -->
   <div  class="d-flex justify-content-center  mt-5" >
   <div class="w-50 d-flex justify-content-between">
   <span style='margin-left:400px'>Date:  <span></span></span>  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <span>Mr. ------------------ <br>
   <span style='margin-left:750px'>(Authorised Partner)</span></span>
  </div>
   </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
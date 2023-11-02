// var baseUrl = $('#base_url').val();
// console.log(baseUrl);
function BusinessInIndiaAppend(params) {
    var Business_in_India_html = `<div class="bannerDD box_shadow bg-danger pb-4 pt-3">
<h3 class="text-center text-light mt-3">
Business Startups in India
</h3>
<div class="row mx-0" id="Your_Business_needs">
    <div class="col-md-6 col-sm-12 d-md-flex justify-content-end text-center pr-5">
        <div class="btn-group py-3" style="width: 16%; min-width:285px;">
            <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
            What you need
            </button>
            <div class="dropdown-menu FIRSTserviceDD w-100">
                <button class="dropdown-item services" id="" onclick="showDD('FormationCompanies', 'Formation')" type="button">Formation</button>
                <button class="dropdown-item services" id="" onclick="showDD('RegistrationCompanies','Registration')" type="button">Registration</button>
                <button class="dropdown-item services" id="" onclick="showDD('Closure_of_ConcernCompanies','Closure of Concern')" type="button">Closure of Concern</button>
                <a href="${baseUrl}welcome/Business_Restructuring" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                <a href="${baseUrl}welcome/Succession_Planning" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 d-md-flex text-center pl-5">
        <div class="btn-group py-3" style="width: 16%; min-width:285px;">
            <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
            How we support
            </button>
            <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                <a href="${baseUrl}welcome/Private_Limited_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                <a href="${baseUrl}welcome/Limited_Liability_Partnerships"  style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                <a href="${baseUrl}welcome/One_Person_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                <a href="${baseUrl}welcome/Proprietorship" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                <a href="${baseUrl}welcome/Partnership" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                <a href="${baseUrl}welcome/Nidhi_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                <a href="${baseUrl}welcome/NGO_regestration" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                <a href="${baseUrl}welcome/Society_Registration" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

            </div>
            <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                <!-- <button class="dropdown-item" type="button">Professional Tax Registration</button>
            <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
            <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
            <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
            <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
            <button class="dropdown-item" type="button">Digital Signature Registration</button>
            <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button> -->

                <a href="${baseUrl}welcome/Professional_Tax_Registration" style="text-decoration: none;"><button class="dropdown-item" type="button">PTR</button></a>
                <a href="${baseUrl}welcome/GST" style="text-decoration: none;"><button class="dropdown-item" type="button">GST Registration</button></a>
                <a href="${baseUrl}welcome/epf_registration" style="text-decoration: none;"><button class="dropdown-item" type="button">EPF Registration</button></a>
                <a href="${baseUrl}welcome/ESI" style="text-decoration: none;"><button class="dropdown-item" type="button">ESI Registration</button></a>
                <a href="${baseUrl}welcome/PAN" style="text-decoration: none;"><button class="dropdown-item" type="button">PAN Application</button></a>
                <a href="${baseUrl}welcome/Digital_Signature_Registration" style="text-decoration: none;"><button class="dropdown-item" type="button">Digital Signature Registration</button></a>
                <a href="${baseUrl}welcome/TAN" style="text-decoration: none;"><button class="dropdown-item" type="button">TAN</button></a>
                
            </div>
            <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                <a href="${baseUrl}welcome/Close_Your_Public_Limited_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Close Your Public Limited Company</button></a>
                <a href="${baseUrl}welcome/Closing_a_One_Person_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a One Person Company</button></a>
                <a href="${baseUrl}welcome/Closing_a_Partnership" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Partnership</button></a>
                <a href="${baseUrl}welcome/Closing_a_Proprietorship" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Proprietorship</button></a>
                <a href="${baseUrl}welcome/Closing_a_Nidhi_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Nidhi Company</button></a>
                <a href="${baseUrl}welcome/Closing_a_Private_Limited_Company" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Private Limited Company</button></a>
                
            </div>
        </div>
    </div>
</div>
</div>`;
$("#Business_in_India").append(Business_in_India_html);

}
BusinessInIndiaAppend();
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .nda-structure p {
        text-align: justify;
    }

    .nda-structure .outer-table td,
    .last-table th,
    td {
        border: none !important;
        text-align: justify;
    }

    .bold-rows-table {
        font-weight: bold;
    }

    .inner-table,
    .inner-table td,
    th {
        border: 1.5px solid darkgray !important;
        font-size: 12px;

    }

    .divider {
        width: 100%;
        height: 1px;
        background-color: #000;
        /* Change color as needed */
    }
</style>
<style>
    .file-drop {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }

    .swal2-toast {
        background-color: crimson !important;
        /* Change background color */
    }

    .swal2-title {
        color: white !important;
        /* Change text color */
    }

    .file-label {
        display: inline-block;
    }

    .file-icon {
        font-size: 48px;
        color: #999;
        display: block;
        margin-bottom: 10px;
    }

    .file-input {
        display: none;
    }

    .file-text {
        font-size: 16px;
        color: #555;
    }
</style>

<body>
    <?php include_once 'header.php' ?>
    <h4 class='text-center mt-5' style="text-shadow: 2px 4px 2px darkgray;
    font-size: 28px;">CONFIDENTIALITY AND NON-DISCLOSURE AGREEMENT</h4>
    <div class=' mt-3 mb-5 initial-page'>


        <div class=" justify-content-center w-100 py-3" style="display:flex" id="nda-form-div">
            <form class='col-md-12 d-flex justify-content-center needs-validation' id="nda-form" novalidate>
                <div class="card w-75 py-3 nda-card-css">
                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-3">

                            <label for="salutation" class="form-label">Miss/Mr.</label>
                            <select class="form-select bg-white p-2 rounded-2" id="salutation" required>
                                <option selected disabled value="">Select</option>
                                <option value="Miss">Miss</option>
                                <option value="Mr.">Mr.</option>
                            </select>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control required-field" id="fullName" name="fullName"
                                placeholder="Enter Full Name" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-3">
                            <label for="childRelation" class="form-label">Son/Daughter</label>
                            <select class="form-select bg-white p-2 rounded-2" id="childRelation" required>
                                <option selected disabled value="">Select</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                            </select>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="parentsFullName">Parent's Full Name</label>
                            <input type="text" class="form-control" id="parentsFullName" name="parentsFullName"
                                placeholder="Enter Parent's Full Name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-10 ">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3"
                                placeholder="Enter Address" required></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-6">
                            <label for="signatoryName">Signatory Name</label>
                            <input type="text" class="form-control" id="signatoryName" name="signatoryName"
                                placeholder="Enter Signatory Name" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="registrationNo">CA Network Registration No</label>
                            <input type="text" class="form-control" id="registrationNo" name="registrationNo"
                                placeholder="Enter Registration No" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-10">
                            <label for="registeredOfficeAddress">CA Registered Office Address</label>
                            <textarea class="form-control" id="registeredOfficeAddress" name="registeredOfficeAddress"
                                rows="3" placeholder="Enter Registered Office Address" required></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <button type="submit" class="btn btn-dark col-md-3"
                            title='click to submit the form'>Submit</button>
                    </div>
                </div>



            </form>

        </div>

    </div>

    <div class='' id='congratsdiv' style='display:none'>
        <div style="text-align:center;margin-top:30px;position:relative;width:100%;height:100%;top:0px;left:0px;">
            <div class="checkmark-circle">
                <div class="background"></div>
                <div class="checkmark draw"></div>
            </div>
            <h1>Congratulations!</h1>
            <p>We are all set. Well done!</p>
            <div class="d-flex justify-content-center my-4">
                <button type="button" class="btn btn-danger btn-md rounded-pill " id="pdfButton">Download your NDA<i
                        class="fas fa-download"></i> </button>


            </div>
            <!-- <button type="button" class="btn btn-success btn-lg rounded-pill" id='downloadButton'>Download NDA here
                    <i class="fas fa-download"></i>
                </button> -->
        </div>
    </div>

    <!-- <div class='my-5' id="nda-download">
        <h4 class="text-center">CONFIDENTIALITY AND NON-DISCLOSURE AGREEMENT</h4>
        <div class="container d-flex justify-content-center mt-4">
            <div class="w-75  nda-structure">
                <div class='details'>
                    <span>Miss :</span> <span class=""> <strong>sanjana konda</strong> </span>

                </div>
                <div class='details'>
                    <span>Daughter of</span> <span class=""> <strong>Raju shankar konda</strong> </span>
                </div>
                <div class='details'>
                    <span>A resident
                        of</span> <span class=""> <strong>Bhiwandi</strong> </span>
                </div>
                <div class='details'>
                    <span>Having my
                        permanent residence at</span> <span class=""> <strong>Maya apartment bhiwnadi</strong> </span>
                </div>
                <div class='details'>
                    <span>And partner / proprietor / employee / authorized signatory of</span> <span class="">
                        <strong>someone someplace</strong> </span>
                </div>
                <div class='details'>
                    <span>(CA
                        Network Registration No) :</span> <span class=""> <strong>XXXXX XXXX XXXXX</strong> </span>
                </div>
                <div class='details'>
                    <span>(“Potential partner/Member of CA
                        Network”) having its registered office at </span> <span class=""> <strong> kailash business park
                            ,Vikhroli </strong>
                    </span>
                </div>
                <div class='mt-5'>
                    <p class="mb-5">hereinafter referred to as (the <strong>“Individual Recipient”</strong> ) </p>

                    <p class="mb-5">The Individual Recipient and the Potential partner/Member of CA Network (hereinafter
                        collectively
                        referred as the <strong> “Recipient” </strong>) hereby undertake to be legally bound by this
                        Confidentiality and
                        NonDisclosure Agreement (the <strong> “Agreement” </strong>) entered with:</p>

                    <p class="mb-5"><strong> RKDA & Affiliates, a professional network duly registered with ICAI
                        </strong>having its
                        registration number
                        NRN/W/00067 and having its address at 515, Tulsiani Chambers, Nariman Point, Mumbai 400021
                        hereinafter referred to as <strong> “Network” </strong>, which expression shall, unless
                        repugnant to
                        the context or
                        meaning thereof, be deemed to mean and include the member/s and partners or partner for the time
                        being of the said network, the survivors or survivor of them and the heirs, executors,
                        administrators of
                        the last surviving member, their or his permitted assigns</p>



                    <p class="mb-5">The Individual Recipient, Potential partner/Member of CA Network and the Network are
                        individually
                        referred to as
                        <strong> “Party”</strong> and collectively as <strong>“Parties”</strong>.
                    </p>

                    <h5 class="text-center">R E C I T A L S</h5>


                    <p class="mb-5"> <strong> WHEREAS </strong> the Network wishes to and is entitled to protect all the
                        confidential
                        information that the
                        network shares with the Recipient before, during or after the entering into MOU/ Network
                        Agreements/
                        code of conduct by way of discussions, meetings and materialprepared by or on behalf of the
                        network
                        which includes but is not limited to brochures, pamphlets,presentations, video or audio
                        recordings
                        and
                        other such documents or media<strong> ( “Confidential Material”);</strong></p>

                    <p class="mb-5"><strong> AND WHEREAS </strong> the network seeks to prohibit the Recipient or any
                        other
                        person from
                        using or deriving
                        any benefit or passing any such confidential information to any person without the express
                        written
                        authorization of the network;</p>


                    <p class="mb-5"><strong>AND WHEREAS</strong> the Recipient acknowledges and agrees that if any
                        confidential information is passed on
                        to any person without the express authorization of the network, it will cause irreparable damage
                        to
                        the
                        network:</p>

                    <p class="mb-5"><strong>AND WHEREAS</strong> to protect the rights and interest of the network, the
                        Parties hereby agree asfollows:</p>


                    <table class="table outer-table">
                        <thead>
                        </thead>
                        <tbody>
                            <tr class="bold-rows-table">
                                <td scope="row">1</td>
                                <td>Confidentiality Obligations</td>
                            </tr>
                            <tr>
                                <td scope="row">1.1.</td>
                                <td>“Confidential Information” means any and all information relating to the Network or
                                    its
                                    business,
                                    affiliates, members, partners, clients, prospective clients, vendors, advisors,
                                    consultants,
                                    employees, service providers and any other third parties or third parties whom the
                                    Network
                                    provides services or has provided services in the past, including but not limited to
                                    (i)
                                    technical,
                                    commercial, operational, financial, accounting, legal and administrative
                                    information,
                                    any
                                    information, (ii) the fact that discussions or negotiations are occurring or have
                                    occurred
                                    concerning the Proposed Network between the Network and the Recipient, the existence
                                    of
                                    this Agreement, or the fact that Confidential Information has been made available to
                                    the
                                    Recipient, (iii) information and details regarding the terms, conditions and
                                    structure
                                    of, and
                                    other facts relating to Network, including the status thereof, (iv)any agreements or
                                    negotiations
                                    subsequently entered into by the Parties or for the purpose of entering into MOU/
                                    network
                                    agreement or partnership deed, (v) any other information or data that the Recipient
                                    is
                                    given or
                                    which comes to his/herknowledge before, during, and after the Events which he/she is
                                    told is
                                    confidential information or which a reasonable person would expect to be
                                    confidential
                                    from its
                                    nature and content. Confidential Information also includes all notes, analyses,
                                    compilations,
                                    studies, forecasts, interpretations, memoranda, summaries or other documents
                                    prepared by
                                    or
                                    for the Recipient or the Permitted Discloses (as defined below) that contain,
                                    reflect or
                                    are based
                                    upon,in whole or in part, the Confidential Information</td>
                            </tr>
                            <tr>
                                <td scope="row">1.2.</td>
                                <td>The term Confidential Information shall not include information which:</td>
                            </tr>
                            <tr>
                                <td scope="row">1.2.1.</td>
                                <td>The term Confidential Information shall not include information which:</td>
                            </tr>
                            <tr>
                                <td scope="row">1.2.</td>
                                <td>now or hereafter comes into the public domain, other than because of a breach of
                                    this
                                    Agreement by the Recipient or any of its Permitted Disclosees (as defined below).
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">1.2.2.</td>
                                <td>is lawfully in the possession of the Recipient prior to the disclosure of such
                                    information to the
                                    Recipient</td>
                            </tr>
                            <tr>
                                <td scope="row">1.2.3.</td>
                                <td>is  to be disclosed by way of an action, subpoena, or order of a court of
                                    competent
                                    jurisdiction or of any requirement of legal process regulation or governmental
                                    order,
                                    decree,
                                    regulation, or rule; or when the Network consents to such disclosure.</td>
                            </tr>
                            <tr>
                                <td scope="row">1.3.</td>
                                <td>The Recipient’s participation in the discussions before or after the signing of
                                    MOU/agreement
                                    give him/her/it access to Confidential Information. The Recipient acknowledges and
                                    agrees that
                                    using, disclosing, or publishing any Confidential Information in an unauthorized or
                                    improper manner could cause the Network to incur substantial loss and damagesthat
                                    could
                                    not be readily
                                    calculated and for which no remedy at law would be adequate. Accordingly, the
                                    Recipient
                                    agrees with the Network that he/she will not at any time, except as provided
                                    otherwise
                                    under
                                    this Agreement, directly or indirectly, use, disclose, or publish, or permit others
                                    not
                                    so
                                    authorized to use, disclose, or publish any Confidential Information that
                                    theRecipient
                                    may learn
                                    or become aware of, or may have learned or become aware of before, duringor after,
                                    or
                                    use any
                                    such information in a manner detrimental to the interests of the Network. The
                                    Recipient
                                    shall
                                    maintain proper and secure custody of all Confidential Information and prevent the
                                    use
                                    or
                                    disclosure of the Confidential Information byor to third parties.</td>
                            </tr>
                            <tr>
                                <td scope="row">1.4.</td>
                                <td>Confidential Information shall be kept confidential by the Recipient and shall not
                                    be
                                    disclosed
                                    except (i) as permitted in accordance with this Agreement; or (ii) to his / her
                                    partners
                                    or other
                                    senior personnel and who, for purpose the purpose of formulation of the Network
                                    and/or
                                    entering into partnership, are strictly  to have access to the Confidential
                                    Information
                                    and who are bound by confidentiality which are at least as strict as those set out
                                    in
                                    this
                                    Agreement (“Permitted Disclosees”).</td>
                            </tr>
                            <tr>
                                <td scope="row">1.5.</td>
                                <td>The Recipient confirms and agree that all Confidential Information is and must
                                    remain
                                    the
                                    exclusive property of the Network. Any Confidential Material the Recipient receives
                                    from
                                    the
                                    Network before, during or after the Events, whether on digital media or otherwise,
                                    must
                                    be and
                                    remain the property of the Network (including where such Confidential Information is
                                    stored on
                                    devices owned by the Recipient).</td>
                            </tr>
                            <tr>
                                <td scope="row">1.6.</td>
                                <td>The Recipient hereby agrees and undertakes to the Network that it will ensure that
                                    its
                                    Permitted Disclosees adhere to the terms of this Agreement, and that without
                                    prejudice
                                    to any
                                    other rightsof the Network, the Recipient shall be responsible for any acts or
                                    omissions
                                    of the
                                    Permitted Disclosees in connection with the Confidential Information which may be a
                                    breach of
                                    or failure to comply with this Agreement and shall at all times be directly and
                                    primarily
                                    responsible to the Network for any breach of or failure to comply with the terms of
                                    the
                                    Agreement by the Permitted Disclosees, or arising out of the actions of the
                                    Permitted
                                    Disclosees
                                    - and that he/she shall be liable for any liability, losses, damages or
                                    costsincurred by
                                    the Network
                                    arising out of or in connectiontherewith.</td>
                            </tr>
                            <tr class="bold-rows-table">
                                <td scope="row">2.</td>
                                <td>Permitted Disclosure and Use</td>
                            </tr>
                            <tr>
                                <td scope="row">2.1.</td>
                                <td>The Recipient agrees that it shall not and shall ensure that the Permitted
                                    Disclosees do
                                    not
                                    disclose to any person other than as permitted under Clause 2.2 below the fact that
                                    the
                                    Parties
                                    are discussing the membership of Network, partnership, that the Recipient has
                                    received
                                    Confidential Information or the status of the discussions and negotiationsbetween
                                    the
                                    Parties.</td>
                            </tr>
                            <tr>
                                <td scope="row">2.2.</td>
                                <td>If the Recipient and/or any of its Permitted Disclosees is/are , pursuant to
                                    any
                                    law, rule,
                                    regulation, order of any governmental authority or other legal or judicial
                                    process,to
                                    disclose any
                                    Confidential Information or any other information concerning the Network and/ or the
                                    proposed partnership, shall promptly (and unless legally prohibited, prior to
                                    sharing
                                    the said Confidential Information) notify the Network in writing, within 2 (two)
                                    days
                                    from receipt of such
                                    request from the Network, of such requirement in order to enable the Network to seek
                                    a
                                    protective orderor other appropriate remedy and shall provide any cooperation as the
                                    Network
                                    shall reasonably request in connection with such order / remedy, and shall consult
                                    with
                                    the
                                    Network to take steps toresist or narrow the scope of such requirement. Failing the
                                    receipt of
                                    such protective order or other remedy, the Recipient shall disclose only that
                                    portion of
                                    the
                                    Confidential Information that it is advised in writing by its counsel as is legally
                                     to be
                                    disclosed and it shall take all stepsto ensure that all Confidential Information so
                                    disclosed is
                                    accorded confidential treatment by theperson to whom such disclosure is made.</td>
                            </tr>
                            <tr>
                                <td scope="row">2.3.</td>
                                <td>The Recipient shall, and shall ensure that the Permitted Disclosees, shall use the
                                    Confidential
                                    Information solely and exclusively in connection with the entry into the Network/
                                    partnership
                                    with the network</td>
                            </tr>
                            <tr>
                                <td scope="row">2.4.</td>
                                <td>The Recipient shall not and shall ensure that the Permitted Disclosees do not,
                                    without
                                    the prior
                                    written consent of the Network, during the Term (as defined below) of this
                                    Agreement,
                                    enter into
                                    anyagreement or arrangement, or enter or engage in any discussions from or with any
                                    person in
                                    connection with any transaction involving the direct or indirect disclosure of
                                    Confidential
                                    Information.</td>
                            </tr>
                            <tr class="bold-rows-table">
                                <td scope="row">3.</td>
                                <td>3. Term and Termination
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3.1.</td>
                                <td>This Agreement shall come into effect from the signing date (effective date) and
                                    shall
                                    continue
                                    to be valid and in force during membership with network and will survive further for
                                    three years
                                    post cessation of membership of network. </td>
                            </tr>
                            <tr>
                                <td scope="row">3.2.</td>
                                <td>This Agreement may be terminated by the Network at any time in its sole discretion
                                    by
                                    way of a
                                    written notice to the Recipient. The Agreement shall terminate immediately upon
                                    receipt
                                    of such
                                    written notice by the Recipient.</td>
                            </tr>
                            <tr class="bold-rows-table">
                                <td scope="row">4.</td>
                                <td>Remedies for Breach of Agreement</td>
                            </tr>
                            <tr>
                                <td scope="row">4.1.</td>
                                <td>As remedies at law may be inadequate to protect the Network against any actual or
                                    threatened
                                    breach of this Agreement, the Network shall have the right to injunctive relief in
                                    the
                                    Network’s
                                    favor with respect to any breach of any provisions of this Agreement without proof
                                    of
                                    irreparable harm.</td>
                            </tr>
                            <tr>
                                <td scope="row">4.2.</td>
                                <td>Without prejudice to the rights and remedies otherwise available to the Network, for
                                    any
                                    threatened or actual breach of this Agreement, the Network shall be entitled to any
                                    of
                                    the
                                    following remedies:
                                    (a) equitable relief by way of injunction, (b) indemnification for any loss, damage
                                    or
                                    liability
                                    incurred due to direct or indirect act of the Recipient or the Permitted Disclosees,
                                    and
                                    (c)
                                    disqualification of Permitted Disclosees of such Recipient from the membership of
                                    the
                                    Proposed
                                    Network/partnership with the network</td>
                            </tr>
                            <tr class="bold-rows-table">
                                <td scope="row">5.</td>
                                <td>Miscellaneous</td>
                            </tr>
                            <tr>
                                <td scope="row">5.1.</td>
                                <td>The Recipient acknowledges and agrees that this Agreement shall constitute a legal,
                                    valid,
                                    binding,and continuing obligation, enforceable in accordance with its terms</td>
                            </tr>
                            <tr>
                                <td scope="row">5.2.</td>
                                <td>The Recipient acknowledges that neither the Network nor any of its partners,
                                    representatives,
                                    employees, advisors, consultants, or affiliates makes any express or implied
                                    representation or
                                    warranty as to the completeness or accuracy of any Confidential Information, and
                                    that
                                    none of
                                    such persons shall have any liability to the Recipient or the Permitted Disclosees
                                    relating to or
                                    arising from the use of any Confidential Information or for any errors therein or
                                    omissions
                                    therefrom. Neither the Recipient nor any of the Permitted Disclosees is entitled to
                                    rely
                                    on the
                                    completeness or accuracy of the Confidential Information.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.3.</td>
                                <td>The Parties agree that no MOU/ agreement (other than with respect to the
                                    confidentiality, and
                                    other matters expressly set forth herein) providing for the Proposed
                                    Network/partnership
                                    or
                                    any variation thereof between the Recipient and the Network or their respective
                                    affiliates shall
                                    be deemed to exist until the execution of definitive documentation in connection
                                    with
                                    formation of and/ or entry into theProposed Network/ partnership deed.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">5.4.</td>
                                <td>No failure or delay by the Network in exercising any right, power or privilege
                                    hereunder
                                    shall
                                    operateas a waiver thereof, nor shall any single or partial exercise thereof
                                    preclude
                                    any other or
                                    furtherexercise thereof or the exercise of any right, power or privilege hereunder,
                                    nor
                                    shall any
                                    course of dealing between the Parties operate as a waiver of any right, power or
                                    privilege
                                    hereunder orbe deemed to constitute a modification thereof. No waiver shall be valid
                                    unless
                                    given in writing by the Network. Any such waiver shall constitute a waiver only with
                                    respect to
                                    the specific matter described in such writing and shall in no way impair the rights
                                    of
                                    the
                                    Network in any other respect orat any other time.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.5.</td>
                                <td>The rights and remedies herein provided are cumulative and none is exclusive of any
                                    other, or of
                                    any rights or remedies that the Network may otherwise have at law or in equity.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.6.</td>
                                <td>No amendment, modification or discharge of this Agreement shall be valid or binding
                                    unless set
                                    forth in writing and duly executed by the Parties hereto.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.7.</td>
                                <td>If any term or provision of this Agreement is held to be illegal, invalid, or
                                    unenforceable, in
                                    wholeor in part, under any enactment or rule of law, such term or provision or part
                                    shall to that
                                    extentbe deemed not to form part of this Agreement but the legality, validity or
                                    enforceability
                                    of the remainder of this Agreement shall not be affected.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.8.</td>
                                <td>This Agreement shall be governed and construed in accordance with the laws of India.
                                    Any
                                    dispute arising out of or in connection with this Agreement, including any question
                                    regarding its
                                    existence, validity, or termination, shall be referred to and finally resolved by
                                    arbitration in
                                    accordance with the provisions of the Arbitration and Conciliation Act, 1996, as
                                    amended
                                    from
                                    time to time, by a sole arbitrator to be mutually appointed by the Parties. The seat
                                    of
                                    the
                                    Page 6 of 7
                                    arbitration shall be Mumbai. The language of the arbitration shall be English. The
                                    Parties shall
                                    be entitled to seek interim relief from courts of Mumbai, India which have exclusive
                                    jurisdiction
                                    for the same.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.9.</td>
                                <td>All rights and obligations of the Network contained in this Agreement shall, except
                                    as
                                    otherwise
                                    provided herein, be binding upon and inure to the benefit of its respective
                                    successors.
                                    The
                                    Recipient shall not assign his or her rights and obligations herein without the
                                    written
                                    consent of
                                    the Network.</td>
                            </tr>
                            <tr>
                                <td scope="row">5.10</td>
                                <td>This Agreement may be executed in any number of counterparts, each of which shall
                                    constitute
                                    an original and all of which, when taken together, shall constitute one and the same
                                    instrument</td>
                            </tr>
                            <tr class="bold-rows-table">
                                <td scope="row">6.</td>
                                <td>Notices</td>
                            </tr>
                            <tr>
                                <td scope="row">6.1.</td>
                                <td>Unless otherwise provided herein, all notices or other communications under or in
                                    connection
                                    with this Agreement shall be given in writing and may be sent by e-mail, personal
                                    delivery or post
                                    or courier to the following addresses (or such other addresses as the Parties may
                                    notify
                                    each
                                    other from time to time)</td>
                            </tr>

                        </tbody>




                    </table>

                    <div class="d-flex justify-content-center">
                        <table class="table inner-table w-75">
                            <thead>
                                <tr>
                                    <th scope="col">If to Recipient:</th>
                                    <th scope="col">If to the Network:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Address:</td>
                                    <td>Address:
                                        RKDA & Affiliates
                                        515, Tulsiani Chambers,
                                        Nariman Point
                                        Mumbai 400021</td>
                                </tr>
                                <tr>
                                    <td scope="row">Email:</td>
                                    <td>drathi@rkda.com</td>
                                </tr>
                                <tr>
                                    <td scope="row">For the attention of:</td>
                                    <td>For the attention of: Dheeraj rathi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <table class="table outer-table">
                        <tbody>
                            <tr>
                                <td scope="row">6.2.</td>
                                <td>Any such notice or other communication will be deemed to be effective if sent by
                                    personal
                                    delivery, when delivered, if sent by post, 4 (four) days after being deposited in
                                    the
                                    post and if
                                    sent by courier, one day after being deposited with the courier, and if sent by
                                    e-mail,
                                    when sent
                                    (on receipt of a connect to the correct e-mail id).</td>
                            </tr>
                        </tbody>
                    </table>


                    <div class='divider'></div>
                    <p class='mb-5'> <strong> SIGNED</strong> by</p>
                    <p class='mb-3'> <strong>1, The Recipient</strong> </p>
                    <p>for himself/herself and for and on behalf of the Potential Member of CA Network/partnership with
                        the
                        network
                    </p>


                    <table class="table last-table">
                        <tbody>
                            <tr>
                                <td scope="row" class="w-50">Name of Individual Recipient</td>
                                <td>:</td>

                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Name of Potential Member</td>
                                <td>:</td>





                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Place</td>
                                <td>:</td>

                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Date</td>
                                <td>:</td>

                            </tr>
                            <tr>
                                <th class="bold-rows-table">2, The Network
                                    For RKDA & Affiliates</th>

                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Name</td>
                                <td>:</td>

                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Place</td>
                                <td>:</td>

                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Date</td>
                                <td>:</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>  -->


    <?php include_once 'footer.php' ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.0/pdf.min.js"></script> -->



    <script>
        document.getElementById('nda-form').addEventListener('submit', function (event) {
            event.preventDefault();

            if (this.checkValidity() === false) {
                event.stopPropagation();
            } else {
                // Form is valid, proceed with submission

                const formData = new FormData(event.target);
                const fdata = {};
                for (let [key, value] of formData.entries()) {
                    fdata[key] = value;
                }

                $.ajax({
                    url: baseUrl + 'Welcome/saveNdaFormDetails',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response, 'response');
                        $('#response').html(response);
                        localStorage.setItem('nda-details', JSON.stringify(fdata));
                        $('#nda-form-div').hide();
                        $('#congratsdiv').show();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            this.classList.add('was-validated');
        });

        $(document).ready(function () {


        });

        $('#fileInput').change(function (event) {
            const allowedExtensions = /(\.doc)$/i; // Regex pattern to accept only .doc files
            const fileInput = event.target;
            const filePath = fileInput.value;

            if (!allowedExtensions.test(filePath)) {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Please select a .doc file.',
                    animation: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 10000000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);

                    }
                });

                fileInput.value = ''; // Clear the file input if the file doesn't match the pattern
                $('#filename').text(''); // Clear the displayed filename
                return;
            }

            const fileName = filePath.split('\\').pop(); // Get the filename from the full path
            $('#filename').text(fileName);
        });


        $('#submit-nda-doc').click(function () {
            let file = $('#fileInput').val();
            $('.initial-page').hide();
            $('#congratsdiv').show();

            console.log('uploaded file ', file);
        })


        $('#uploadForm').submit(function (event) {
            event.preventDefault();
            const fileInput = $('#fileInput')[0].files[0]; // Get the file object from input
            const formData = new FormData();

            formData.append('file', fileInput); // Append the file object to FormData

            $.ajax({
                url: baseUrl + 'Welcome/upload_method',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#response').html(response);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });


        $('#pdfButton').on('click', function () {

            var details = localStorage.getItem('nda-details');
            var nda_details = JSON.parse(details);
            var baseurl = 'http://localhost/ecorkda/Welcome/generateNDAPdf?fullName=' + encodeURIComponent(nda_details.fullName)
                + '&salutation=' + encodeURIComponent(nda_details.salutation)

                + '&address=' + encodeURIComponent(nda_details.address)

                + '&parentsFullName=' + encodeURIComponent(nda_details.parentsFullName)

                + '&registeredOfficeAddress=' + encodeURIComponent(nda_details.registeredOfficeAddress)

                + '&registrationNo=' + encodeURIComponent(nda_details.registrationNo)

                + '&signatoryName=' + encodeURIComponent(nda_details.signatoryName)

                + '&childRelation=' + encodeURIComponent(nda_details.childRelation)


            console.log('nda_details', nda_details, baseurl);

            $.ajax({
                url: baseurl,
                method: 'GET',
                xhrFields: {
                    responseType: 'blob'
                },
                success: function (data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'output.pdf';
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    document.body.removeChild(a);
                    console.log('download successfully');
                },
                error: function (xhr, status, error) {
                    console.error('Error generating PDF:', error);
                }
            });
        });
    </script>

</body>

</html>
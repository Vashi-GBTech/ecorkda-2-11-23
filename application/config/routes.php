<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = '';
$route['default_controller'] = 'welcome';
$route['translate_uri_dashes'] = FALSE;

$route['index_old'] = 'welcome/index_old';
$route['rkca_addPartner'] = 'welcome/rkca_addPartner';
$route['Business_Analyst'] = 'welcome/Business_Analyst';
$route['Business_Analyst_copy'] = 'welcome/Business_Analyst_copy';
$route['Business_Restructuing'] = 'welcome/Business_Restructuing';
$route['BusinessSupportandFinancialReporting'] = 'welcome/BusinessSupportandFinancialReporting';
$route['careers'] = 'welcome/careers';
$route['client_stories'] = 'welcome/client_stories';
$route['clientStoriesDetailPage1'] = 'welcome/clientStoriesDetailPage1';
$route['clientStoriesDetailPage2'] = 'welcome/clientStoriesDetailPage2';
$route['clientStoriesDetailPage3'] = 'welcome/clientStoriesDetailPage3';
$route['clientStoriesDetailPage4'] = 'welcome/clientStoriesDetailPage4';
$route['clientStoriesDetailPage5'] = 'welcome/clientStoriesDetailPage5';
$route['clientStoriesDetailPage6'] = 'welcome/clientStoriesDetailPage6';
$route['clientStoriesDetailPage7'] = 'welcome/clientStoriesDetailPage7';
$route['clientStoriesDetailPage8'] = 'welcome/clientStoriesDetailPage8';
$route['clientStoriesDetailPage9'] = 'welcome/clientStoriesDetailPage9';
$route['clientStoriesDetailPage10'] = 'welcome/clientStoriesDetailPage10';
$route['clientStoriesDetailPage11'] = 'welcome/clientStoriesDetailPage11';
$route['clientStoriesDetailPage12'] = 'welcome/clientStoriesDetailPage12';
$route['clientStoriesDetailPage13'] = 'welcome/clientStoriesDetailPage13';
$route['clientStoriesDetailPage14'] = 'welcome/clientStoriesDetailPage14';
$route['clientStoriesDetailPage15'] = 'welcome/clientStoriesDetailPage15';
$route['CloseYourPublicLimitedCompany'] = 'welcome/CloseYourPublicLimitedCompany';
$route['Closing_a_Nidhi_Company'] = 'welcome/Closing_a_Nidhi_Company';
$route['Closing_a_One_Person_Company'] = 'welcome/Closing_a_One_Person_Company';
// $route['default_controller'] = 'welcome/clientStoriesDetailPage1';
$route['Closing_a_Partnership'] = 'welcome/Closing_a_Partnership';
$route['Closing_a_Private_Limited_Company'] = 'welcome/Closing_a_Private_Limited_Company';
$route['Closing_a_Proprietorship'] = 'welcome/Closing_a_Proprietorship';
$route['collaborate_copy'] = 'welcome/collaborate_copy';
$route['collaborate'] = 'welcome/collaborate';
$route['contact_us'] = 'welcome/contact_us';
$route['contact-us-cp'] = 'welcome/contact_us_copy';
$route['Crossborderandmerchantbankingservices'] = 'welcome/Crossborderandmerchantbankingservices';
$route['Digital_Signature_Registration'] = 'welcome/Digital_Signature_Registration';
$route['Digital_transformation'] = 'welcome/Digital_transformation';
$route['ecovis_india'] = 'welcome/ecovis_india';
$route['ecovis-international'] = 'welcome/ecovis_International';
$route['epf_registration'] = 'welcome/epf_registration';
$route['ESI'] = 'welcome/ESI';
$route['Financial_and_Capital_Services'] = 'welcome/Financial_and_Capital_Services';
$route['footer'] = 'welcome/footer';
$route['geographical_locations'] = 'welcome/geographical_locations';
$route['Government_risk_compliance'] = 'welcome/Government_risk_compliance';
$route['GST'] = 'welcome/GST';
$route['header'] = 'welcome/header';
$route['job_discription'] = 'welcome/job_discription';
$route['jobApplication'] = 'welcome/jobApplication';
$route['jobs'] = 'welcome/jobs';
$route['legalPage'] = 'welcome/legalPage';
$route['Limited_Liability_Partnerships'] = 'welcome/Limited_Liability_Partnerships';
$route['LitigationLegalServices'] = 'welcome/LitigationLegalServices';
$route['NewsLetter'] = 'welcome/NewsLetter';
$route['NewsLetter1'] = 'welcome/NewsLetter1';
$route['NGO_regestration'] = 'welcome/NGO_regestration';
$route['Nidhi_Company'] = 'welcome/Nidhi_Company';
$route['One_Person_Company'] = 'welcome/One_Person_Company';
$route['Onshore_Offshore_Advisory'] = 'welcome/Onshore_Offshore_Advisory';
$route['ourSolution'] = 'welcome/ourSolution';
$route['PAN'] = 'welcome/PAN';
$route['Partnership'] = 'welcome/Partnership';
$route['Private_Limited_Company'] = 'welcome/Private_Limited_Company';
$route['Professional_Tax_Registration'] = 'welcome/Professional_Tax_Registration';
$route['Proprietorship'] = 'welcome/Proprietorship';
$route['renduring'] = 'welcome/renduring';
$route['Society_Registration'] = 'welcome/Society_Registration';
$route['strategic_choices'] = 'welcome/strategic_choices';
$route['Strategy_Performance_Consulting_services'] = 'welcome/Strategy_Performance_Consulting_services';
$route['Succession_Planning'] = 'welcome/Succession_Planning';
$route['TAN'] = 'welcome/TAN';
$route['team_copy'] = 'welcome/team_copy';
$route['team'] = 'welcome/team';
$route['TeamAboutMe'] = 'welcome/TeamAboutMe';
$route['accounting_task_force'] = 'welcome/accounting_task_force';
$route['work_list'] = 'welcome/work_list';
$route['audit_task_force'] = 'welcome/audit_task_force';
$route['legal_task_force'] = 'welcome/legal_task_force';
$route['ma_task_force'] = 'welcome/ma_task_force';
$route['tax_task_force'] = 'welcome/tax_task_force';
$route['technology_task_force'] = 'welcome/technology_task_force';
$route['women_leadership_group'] = 'welcome/women_leadership_group';
$route['rkda_internship'] = 'welcome/rkda_internship';
$route['qty_dev_board'] = 'welcome/qty_dev_board';
$route['essentials'] = 'welcome/essentials';
$route['qty_standards'] = 'welcome/qty_standards';
$route['qty_monitoring'] = 'welcome/qty_monitoring';
$route['siir'] = 'welcome/siir';
$route['service_portfolio'] = 'welcome/service_portfolio';
$route['audit'] = 'welcome/audit';
$route['tax_accounting'] = 'welcome/tax_accounting';
$route['transfer_pricing'] = 'welcome/transfer_pricing';
$route['IT_instructions'] = 'welcome/IT_instructions';
$route['independent_std'] = 'welcome/independent_std';
$route['member_firms'] = 'welcome/member_firms';
$route['faq_new_partner'] = 'welcome/faq_new_partner';
$route['expansion_plan'] = 'welcome/expansion_plan';
$route['info_new_partners'] = 'welcome/info_new_partners';
$route['integration_checklist'] = 'welcome/integration_checklist';
$route['first_steps_checklist'] = 'welcome/first_steps_checklist';
$route['firm_details'] = 'welcome/firm_details';
$route['partner_meetings'] = 'welcome/partner_meetings';
$route['firms'] = 'welcome/firms';
$route['preliminaryAppForm'] = 'welcome/preliminaryAppForm';
$route['congrats'] = 'welcome/congrats';
$route['sendMail'] = 'welcome/sendMail';
$route['login'] = 'welcome/login';
$route['onlyForMembers'] = 'welcome/onlyForMembers';
$route['NDA'] = 'welcome/NDA';
$route['ndaDownload'] = 'welcome/ndaDownload';
$route['form_2'] = 'welcome/form_2';
$route['authorization'] = 'welcome/authorization';
$route['dummy'] = 'welcome/dummy';
$route['navbar'] = 'welcome/navbar';
$route['landing_page'] = 'welcome/landing_page';
$route['rkda_login'] = 'welcome/rkda_login';
$route['signUp'] = 'welcome/signUp';
$route['membership'] = 'welcome/membership';
$route['c_carousel'] = 'welcome/c_carousel';
$route['quality_std'] = 'welcome/quality_std';
$route['tech_std'] = 'welcome/tech_std';
$route['sii'] = 'welcome/sii';
$route['superCa'] = 'welcome/superCa';
$route['pricing'] = 'welcome/pricing';
$route['merchandise'] = 'welcome/merchandise';
$route['transfer_pricing_new'] = 'welcome/transfer_pricing_new';
$route['tax_consulting'] = 'welcome/tax_consulting';
$route['service_portfolio_new'] = 'welcome/service_portfolio_new';
$route['task_force_new'] = 'welcome/task_force_new';
$route['experts'] = 'welcome/experts';
$route['accounting'] = 'welcome/accounting';
$route['explore_list'] = 'welcome/explore_list';
$route['tf_audit'] = 'welcome/tf_audit';
$route['tax'] = 'welcome/tax';
$route['legal'] = 'welcome/legal';
$route['governance'] = 'welcome/governance';
$route['compliance'] = 'welcome/compliance';
$route['m_a'] = 'welcome/m_a';
$route['tech'] = 'welcome/tech';
$route['wlg'] = 'welcome/wlg';
$route['opinion'] = 'welcome/opinion';
$route['gridhome'] = 'welcome/gridhome';
$route['capabilities'] = 'welcome/capabilities';
$route['task_force_sub'] = 'welcome/task_force_sub';
$route['governance_sub'] = 'welcome/governance_sub';




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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['add-partner'] = 'welcome/addPartner';
$route['BA'] = 'welcome/Business_Analyst';
$route['BA-copy'] = 'welcome/Business_Analyst_copy';
$route['bs-restructuring'] = 'welcome/Business_Restructuing';
$route['sp-fi'] = 'welcome/businessSupportAndFinancialReporting';
$route['careers'] = 'welcome/careers';
$route['cli-st'] = 'welcome/client_stories';
$route['cli-st-1'] = 'welcome/clientStoriesDetailPage1';
$route['cli-st-2'] = 'welcome/clientStoriesDetailPage2';
$route['cli-st-3'] = 'welcome/clientStoriesDetailPage3';
$route['cli-st-4'] = 'welcome/clientStoriesDetailPage4';
$route['cli-st-5'] = 'welcome/clientStoriesDetailPage5';
$route['cli-st-6'] = 'welcome/clientStoriesDetailPage6';
$route['cli-st-7'] = 'welcome/clientStoriesDetailPage7';
$route['cli-st-8'] = 'welcome/clientStoriesDetailPage8';
$route['cli-st-9'] = 'welcome/clientStoriesDetailPage9';
$route['cli-st-10'] = 'welcome/clientStoriesDetailPage10';
$route['cli-st-11'] = 'welcome/clientStoriesDetailPage11';
$route['cli-st-12'] = 'welcome/clientStoriesDetailPage12';
$route['cli-st-13'] = 'welcome/clientStoriesDetailPage13';
$route['cli-st-14'] = 'welcome/clientStoriesDetailPage14';
$route['cli-st-15'] = 'welcome/clientStoriesDetailPage15';
$route['cl-pb-co'] = 'welcome/CloseYourPublicLimitedCompany';
$route['cl-nidhi-co'] = 'welcome/Closing_a_Nidhi_Company';
$route['cl-pr-co'] = 'welcome/Closing_a_One_Person_Company';
// $route['default_controller'] = 'welcome/clientStoriesDetailPage1';
$route['cl-partsh'] = 'welcome/Closing_a_Partnership';
$route['cl-pvt-co'] = 'welcome/Closing_a_Private_Limited_Company';
$route['cl-proprish'] = 'welcome/Closing_a_Proprietorship';
$route['collaborate-cp'] = 'welcome/collaborate_copy';
$route['collaborate'] = 'welcome/collaborate';
$route['contact-us'] = 'welcome/contact_us_copy';
$route['contact-us-cp'] = 'welcome/contact_us';
$route['border-bank'] = 'welcome/Cross_border_and_merchant_banking_services';
$route['digi-sign-reg'] = 'welcome/Digital_Signature_Registration';
$route['digi-trans'] = 'welcome/Digital_transformation';
$route['ecovis-in'] = 'welcome/ecovis_india';
$route['ecovis-international'] = 'welcome/ecovis_International';
$route['reg'] = 'welcome/epf_registration';
$route['esi'] = 'welcome/ESI';
$route['ficl-cap'] = 'welcome/Financial_and_Capital_Services';
$route['footer'] = 'welcome/footer';
$route['geo-loc'] = 'welcome/geographical_locations';
$route['govt-risk-compliance'] = 'welcome/Government_risk_compliance';
$route['gst'] = 'welcome/GST';
$route['header'] = 'welcome/header';
$route['job-disc'] = 'welcome/job_discription';
$route['job-appl'] = 'welcome/jobApplication';
$route['jobs'] = 'welcome/jobs';
$route['legal-page'] = 'welcome/legalPage';
$route['liab-partsh'] = 'welcome/Limited_Liability_Partnerships';
$route['liti-lg-serv'] = 'welcome/LitigationLegalServices';
$route['news-letter'] = 'welcome/NewsLetter';
$route['news-letter-1'] = 'welcome/NewsLetter1';
$route['ngo-reg'] = 'welcome/NGO_regestration';
$route['nidhi-co'] = 'welcome/Nidhi_Company';
$route['pr-co'] = 'welcome/One_Person_Company';
$route['on-off-shore-ad'] = 'welcome/Onshore_Offshore_Advisory';
$route['sol'] = 'welcome/ourSolution';
$route['pan'] = 'welcome/PAN';
$route['partsh'] = 'welcome/Partnership';
$route['pvt-co'] = 'welcome/Private_Limited_Company';
$route['profe-tax-reg'] = 'welcome/Professional_Tax_Registration';
$route['proprish'] = 'welcome/Proprietorship';
$route['renduring'] = 'welcome/renduring';
$route['soci-reg'] = 'welcome/Society_Registration';
$route['strg-choice'] = 'welcome/strategic_choices';
$route['strg-conl-serv'] = 'welcome/Strategy_Performance_Consulting_services';
$route['success-plan'] = 'welcome/Succession_Planning';
$route['tan'] = 'welcome/TAN';
$route['team-cp'] = 'welcome/team_copy';
$route['team'] = 'welcome/team';
$route['about-team'] = 'welcome/TeamAboutMe';



<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once APPPATH . '/libraries/fpdf/fpdf.php'; 
require_once 'vendor/autoload.php';
// require_once APPPATH . 'libraries/html2pdf/src/Html2Pdf.php';
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array("form_validation"));
	}

	public function welcome()
	{
		$this->load->view('welcome_message');
	}
	public function getAllMemberDetails()
	{
		$result = $this->User_Model->getAllMembers();
		echo json_encode($result);
		die();
	}

	public function saveData()
	{
		//echo "<pre>"; print_r($this->input->post()); exit;
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('post', 'Designation', 'required');
		$this->form_validation->set_rules('education', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		// $this->form_validation->set_rules('image', 'Image', 'required');

		if ($this->form_validation->run() == FALSE) {

			$response['status'] = 200;
			$response['msg'] = "false";
			echo json_encode($response);
			die();

		} else {

			$empId = $this->input->post('emp_id');
			$key_name = preg_replace('/\s+/', '_', $this->input->post('name'));
			if (isset($empId) && !empty($empId)) {
				$key_result = $this->User_Model->checkDuplicate($key_name, $empId);
			} else {
				$key_result = $this->User_Model->checkDuplicate($key_name);
			}
			if ($key_result) {
				$response['status'] = 201;
				$response['msg'] = "Name Already Exists";
				echo json_encode($response);
				die();
			}
			$data = array();
			if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
				$file = $_FILES["image"];
				$file_tmp = $file["tmp_name"];

				$upload_directory = "uploads/";
				if (!file_exists($upload_directory)) {
					mkdir($upload_directory, 0777, true);
				}
				$file_name = $upload_directory . $file['name'];
				move_uploaded_file($file_tmp, $file_name);
				$data = [
					'name' => $this->input->post('name'),
					'designation' => $this->input->post('post'),
					'education' => $this->input->post('education'),
					'description' => $this->input->post('desc'),
					'image' => $file_name,
					'key_name' => $key_name,
				];
			} else {
				$data = [
					'name' => $this->input->post('name'),
					'designation' => $this->input->post('post'),
					'education' => $this->input->post('education'),
					'description' => $this->input->post('desc'),
					// 'vImage' => $file_name,
					'key_name' => $key_name,
				];
			}
			//print_r($empId); exit;
			if (isset($empId) && !empty($empId)) {
				$result = $this->User_Model->updateUserData($data, $empId);
				$msg = "Your data has been Updated";
			} else {
				$result = $this->User_Model->saveUserData($data);
				$msg = "Your data has been saved";
				// $response['msg'] = "Your data has been saved";
			}
			if ($result) {
				$response['status'] = 200;
				$response['msg'] = $msg;
				echo json_encode($response);
			} else {
				$response['status'] = 201;
				$response['msg'] = "failed";
				echo json_encode($response);
			}
			die();

		}

	}

	public function editMemberDetails()
	{
		// print_r($this->input->post());
		// exit();
		$id = 0;
		if ($this->input->post()) {
			$id = $this->input->post('id');
		}
		$result = $this->User_Model->getMemberDetails($id);
		echo json_encode($result);
		die();
	}


	public function deleteMember()
	{
		// $data = file_get_contents('php://input');
		$empId = $this->input->post('emp_id');

		if (isset($empId) && !empty($empId)) {
			$result = $this->User_Model->deleteUserData($empId);
			if ($result) {
				$response['status'] = 200;
				$response['msg'] = "Deleted Successfully!";
				echo json_encode($response);
			} else {
				$response['status'] = 201;
				$response['msg'] = "Something went wrong";
				echo json_encode($response);
			}
		} else {
			$response['status'] = 403;
			$response['msg'] = "Invalid Request!";
			echo json_encode($response);
		}
		die();
	}

	public function savePreAppForm()
	{
		$Data = array(
			"fname" => $this->input->post("fname"),
			"lname" => $this->input->post("lname"),
			"mem_email" => $this->input->post("mem_email"),
			"mem_mobile" => $this->input->post("mem_mobile"),
			"icai_mem_number" => $this->input->post("icaiMembershipNumber"),
			"b_name" => $this->input->post("b_name"),
			"specialization" => $this->input->post("specialization"),
			"firm_reg_num" => $this->input->post("firmRegistrationNumber"),
			"website" => $this->input->post("website"),
			"address" => $this->input->post("address"),
			"yoi" => $this->input->post("yoi"),
			"firm_typ" => $this->input->post("firm_typ"),
			"yoe" => $this->input->post("yearsOfExperience"),
			"num_of_partners" => $this->input->post("totalPartners"),
			"firm_name" => $this->input->post("firm_name"),
			"mem_number" => $this->input->post("mem_number"),
		);

		// exit();
		$result = $this->User_Model->savePreAppFormData($Data);
		$response['status'] = 200;
		$response['msg'] = "success";
		echo json_encode($response);

		die();
	}


	public function saveNdaFormDetails()
	{

		$Data = array(
			"address" => $this->input->post("address"),
			"childRelation" => $this->input->post("childRelation"),
			"fullName" => $this->input->post("fullName"),
			"parents_fullname" => $this->input->post("parentsFullName"),
			"registered_office_address" => $this->input->post("registeredOfficeAddress"),
			"registrationNo" => $this->input->post("registrationNo"),
			"salutation" => $this->input->post("salutation"),
			"signatoryName" => $this->input->post("signatoryName"),
		);
		// echo '<pre>'; print_r($Data);
		// exit();
		$result = $this->User_Model->saveNdaFormData($Data);
		$response['status'] = 200;
		$response['msg'] = "success";
		echo json_encode($response);

		die();
	}
	public function saveAuthFormDetails()
	{

		$Data = array(
			"comp_name" => $this->input->post("comp_name"),
			"salutation_auth" => $this->input->post("salutation"),
			"partner_name" => $this->input->post("partner_name"),

		);
		// echo '<pre>'; print_r($Data);
		// exit();
		$result = $this->User_Model->saveAuthFormData($Data);
		$response['status'] = 200;
		$response['msg'] = "success";
		echo json_encode($response);

		die();
	}
	public function getOtp()
	{
		$user_id = $this->input->post('email');
		$mobileNo = $this->input->post('phone_number');
		$caNum = $this->input->post('caNum');
		// echo "<pre>"; print_r($this->input->post()); exit();
		if (!empty($user_id)) {
			$otp = $this->User_Model->CreateOtp();
			$opt_data = array(
				'otp' => $otp,
				'created_on' => date("Y-m-d H:i:s"),
				'created_by' => $user_id,
				'expire_time' => date("Y-m-d H:i:s", strtotime('+15 minute')),
				'mobile_no' => $mobileNo,
				'ca_number' => $caNum
			);
			if ($this->User_Model->SaveOpt($opt_data, $user_id)) {
				$sub = 'Otp Verification';
				$msg = $otp . ' is your one time password sent by Ecovisrkda System . It is valid for 15 minutes.Do not share your Otp with anyone';
				$mail = $this->User_Model->sendEmail($user_id, $sub, $msg);
				// echo "<pre>123 "; print_r($mail); echo " mail "; print_r($user_id);  print_r($sub); print_r($msg); exit();
				if ($mail == true) {
					$response['status'] = 200;
					$response['otp'] = $otp;
					$response['id'] = $this->db->insert_id();
					$response['body'] = "Mail Sended Sucessfully";
				} else {
					$response['status'] = 201;
					$response['body'] = 'Mail Not Send';
				}
			} else {
				$response['status'] = 201;
				$response['body'] = 'OTP Generation Problem';
			}
		} else {
			$response['status'] = 201;
			$response['body'] = 'OTP Generation Problem';
		}
		echo json_encode($response);
	}
	public function forgotOtp()
	{
		$user_id = $this->input->post('email');
		$otp = $this->input->post('otp');
		$id = $this->input->post('id');

		// echo "<pre>"; print_r($this->input->post()); exit();



		$sub = 'Otp Verification';
		$msg = $otp . ' is your one time password sent by Ecovisrkda System . It is valid for 15 minutes.Do not share your Otp with anyone';
		$mail = $this->User_Model->sendEmail($user_id, $sub, $msg);
		if ($mail == true) {
			$response['status'] = 200;
			$response['otp'] = $otp;
			$response['id'] = $id;
			$response['body'] = "Mail Sended Sucessfully";
		} else {
			$response['status'] = 201;
			$response['body'] = 'Mail Not Send';
		}


		echo json_encode($response);
	}

	public function updatePartner()
	{
		$id = $this->input->post('id');
		$isPartner = $this->input->post('isPartner');
		if (!empty($id)) {
			// $otp = $this->User_Model->CreateOtp();
			$opt_data = array(
				'is_partner' => $isPartner,
			);

			if ($this->User_Model->updatePartnerData($opt_data, $id)) {
				$response['status'] = 200;
				$response['body'] = "Partner Added successfully";
			} else {
				$response['status'] = 201;
				$response['body'] = 'Something went wrong';
			}
		} else {
			$response['status'] = 201;
			$response['body'] = 'Something went wrong';
		}
		echo json_encode($response);
	}

	public function getUserData()
	{
		// $id = $this->input->post('id');
		$userEmail = $this->input->post('emailId');
		// echo "<pre>"; print_r($this->input->post()); exit();
		// if (!empty($userEmail)) {
		$userData = $this->User_Model->getUserDetails();
		if (count($userData) > 0) {
			$response['status'] = 200;
			$response['body'] = 'User details found';
			$response['data'] = $userData;
		} else {
			$response['status'] = 201;
			$response['body'] = 'User details not found';
			$response['data'] = $userData;
		}
		// } else {
		// 	$response['status'] = 201;
		// 	$response['body'] = 'Something went wrong';
		// }
		echo json_encode($response);
	}

	public function upload_method()
	{
		// Check if file was uploaded and no errors occurred
		if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
			$tempFile = $_FILES['file']['tmp_name']; // Get the temporary file path
			$uploadPath = './uploads/membersNDA/' . $_FILES['file']['name']; // Set the destination path

			// Move the uploaded file to the desired directory
			if (move_uploaded_file($tempFile, $uploadPath)) {
				echo 'File uploaded successfully!';
			} else {
				echo 'Failed to move the file!';
			}
		} else {
			echo 'File upload error!';
		}
	}



	public function generateNDAPdf()
	{

		// $html = $this->load->view('ndaDownload', [], true);

		$fname = isset($_GET['fullName']) ? $_GET['fullName'] : '';
		$salutation = isset($_GET['salutation']) ? $_GET['salutation'] : '';
		$address = isset($_GET['address']) ? $_GET['address'] : '';
		$parentsFullName = isset($_GET['parentsFullName']) ? $_GET['parentsFullName'] : '';
		$registeredOfficeAddress = isset($_GET['registeredOfficeAddress']) ? $_GET['registeredOfficeAddress'] : '';
		$registrationNo = isset($_GET['registrationNo']) ? $_GET['registrationNo'] : '';
		$signatoryName = isset($_GET['signatoryName']) ? $_GET['signatoryName'] : '';
		$childRelation = isset($_GET['childRelation']) ? $_GET['childRelation'] : '';

		// Load the view and pass form data to it
		$html = $this->load->view('ndaDownload', [
			'fullName' => $fname,
			'salutation' => $salutation,
			'address' => $address,
			'parentsFullName' => $parentsFullName,
			'registeredOfficeAddress' => $registeredOfficeAddress,
			'registrationNo' => $registrationNo,
			'signatoryName' => $signatoryName,
			'childRelation' => $childRelation,

		], true);


		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$options->set('isHtml5ParserEnabled', TRUE);
		$options->set('enable_php', true);
		$options->set('enable_remote', true);
		$dompdf = new Dompdf($options);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A1', 'potrait');
		$dompdf->render();
		ob_end_clean();
		$dompdf->stream('NDA.pdf', ['Attachment' => false]);
		$dompdf->Output();
		exit(0);

	}
	public function generateAuthPdf()
	{

		// $html = $this->load->view('ndaDownload', [], true);

		$partner_name = isset($_GET['partner_name']) ? $_GET['partner_name'] : '';
		$salutation = isset($_GET['salutation']) ? $_GET['salutation'] : '';
		$comp_name = isset($_GET['comp_name']) ? $_GET['comp_name'] : '';



		// Load the view and pass form data to it
		$html = $this->load->view('form_2', [
			'partner_name' => $partner_name,
			'salutation' => $salutation,
			'comp_name' => $comp_name,
		], true);

		// echo $html; exit();

		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$options->set('isHtml5ParserEnabled', TRUE);
		$options->set('enable_php', true);
		$options->set('enable_remote', true);
		$dompdf = new Dompdf($options);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A1', 'potrait');
		$dompdf->render();
		ob_end_clean();
		$dompdf->stream('authorization.pdf', ['Attachment' => false]);
		$dompdf->Output();
		exit(0);

	}



	public function generateXL()
	{
		// Creating sample data array
		$data = array(
			array('Name', 'Email', 'Age', 'Country'),
			array('John Doe', 'john@example.com', 28, 'USA'),
			array('Alice Smith', 'alice@example.com', 24, 'UK'),
			array('Bob Johnson', 'bob@example.com', 32, 'Canada'),
			array('Eva Williams', 'eva@example.com', 30, 'Australia')
		);
	
		$this->load->library('PHPExcel');
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
	
		// Populate headers
		$row = 1;
		foreach ($data[0] as $key => $value) {
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($key + 1, $row, $value);
		}
	
		// Populate data
		for ($i = 1; $i < count($data); $i++) {
			$row++;
			foreach ($data[$i] as $key => $value) {
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($key + 1, $row, $value);
			}
		}
	
		$objPHPExcel->getProperties()->setTitle("Dynamic Excel File")->setCreator("Your Name");
		$filename = 'dynamic_excel_' . date('YmdHis') . '.xlsx';
		$objPHPExcel->setActiveSheetIndex(0);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
	}
	



	public function index()
	{
		$this->load->view('index.php');
	}
	public function rkca_addPartner()
	{
		$this->load->view('rkca_addPartner');
	}
	public function Business_Analyst()
	{
		$this->load->view('Business_Analyst');
	}
	public function Business_Analyst_copy()
	{
		$this->load->view('Business_Analyst copy');
	}
	public function Business_Restructuring()
	{
		$this->load->view('Business_Restructuring');
	}
	public function BusinessSupportandFinancialReporting()
	{
		$this->load->view('BusinessSupportandFinancialReporting');
	}
	public function careers()
	{
		$this->load->view('careers');
	}
	public function client_stories_old_copy()
	{
		$this->load->view('client_stories_old_copy');
	}
	public function client_stories()
	{
		$this->load->view('client_stories');
	}
	public function clientStoriesDetailPage1()
	{
		$this->load->view('clientStoriesDetailPage1');
	}
	public function clientStoriesDetailPage2()
	{
		$this->load->view('clientStoriesDetailPage2');
	}
	public function clientStoriesDetailPage3()
	{
		$this->load->view('clientStoriesDetailPage3');
	}
	public function clientStoriesDetailPage4()
	{
		$this->load->view('clientStoriesDetailPage4');
	}
	public function clientStoriesDetailPage5()
	{
		$this->load->view('clientStoriesDetailPage5');
	}
	public function clientStoriesDetailPage6()
	{
		$this->load->view('clientStoriesDetailPage6');
	}
	public function clientStoriesDetailPage7()
	{
		$this->load->view('clientStoriesDetailPage7');
	}
	public function clientStoriesDetailPage8()
	{
		$this->load->view('clientStoriesDetailPage8');
	}
	public function clientStoriesDetailPage9()
	{
		$this->load->view('clientStoriesDetailPage9');
	}
	public function clientStoriesDetailPage10()
	{
		$this->load->view('clientStoriesDetailPage10');
	}
	public function clientStoriesDetailPage11()
	{
		$this->load->view('clientStoriesDetailPage11');
	}
	public function clientStoriesDetailPage12()
	{
		$this->load->view('clientStoriesDetailPage12');
	}
	public function clientStoriesDetailPage13()
	{
		$this->load->view('clientStoriesDetailPage13');
	}
	public function clientStoriesDetailPage14()
	{
		$this->load->view('clientStoriesDetailPage14');
	}
	public function clientStoriesDetailPage15()
	{
		$this->load->view('clientStoriesDetailPage15');
	}
	public function CloseYourPublicLimitedCompany()
	{
		$this->load->view('Close_Your_Public_Limited_Company');
	}
	public function Closing_a_Nidhi_Company()
	{
		$this->load->view('Closing_a_Nidhi_Company');
	}
	public function Closing_a_One_Person_Company()
	{
		$this->load->view('Closing_a_One_Person_Company');
	}
	public function Closing_a_Partnership()
	{
		$this->load->view('Closing_a_Partnership');
	}
	public function Closing_a_Private_Limited_Company()
	{
		$this->load->view('Closing_a_Private_Limited_Company');
	}
	public function Closing_a_Proprietorship()
	{
		$this->load->view('Closing_a_Proprietorship');
	}
	public function collaborate_copy()
	{
		$this->load->view('Closing_a_Proprietorship');
	}
	public function collaborate()
	{
		$this->load->view('collaborate');
	}
	public function contact_us_copy()
	{
		$this->load->view('contact_us_copy');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function Crossborderandmerchantbankingservices()
	{
		$this->load->view('Crossborderandmerchantbankingservices');
	}
	public function Digital_Signature_Registration()
	{
		$this->load->view('Digital_Signature_Registration');
	}
	public function Digital_transformation()
	{
		$this->load->view('Digital_transformation');
	}
	public function ecovis_india()
	{
		$this->load->view('ecovis_india');
	}
	public function ecovis_International()
	{
		$this->load->view('ecovis_International');
	}
	public function epf_registration()
	{
		$this->load->view('epf_registration');
	}
	public function ESI()
	{
		$this->load->view('ESI');
	}
	public function Financial_and_Capital_Services()
	{
		$this->load->view('Financial_and_Capital_Services');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
	public function geographical_locations()
	{
		$this->load->view('geographical_locations');
	}
	public function Government_risk_compliance()
	{
		$this->load->view('Government_risk_compliance');
	}
	public function GST()
	{
		$this->load->view('GST');
	}
	public function header()
	{
		$this->load->view('header');
	}
	public function job_discription()
	{
		$this->load->view('job_discription');
	}
	public function jobApplication()
	{
		$this->load->view('jobApplication');
	}
	public function jobs()
	{
		$this->load->view('jobs');
	}
	public function legalPage()
	{
		$this->load->view('legalPage');
	}
	public function Limited_Liability_Partnerships()
	{
		$this->load->view('Limited_Liability_Partnerships');
	}
	public function LitigationLegalServices()
	{
		$this->load->view('LitigationLegalServices');
	}
	public function Marketing_head()
	{
		$this->load->view('Marketing_head');
	}
	public function NewsLetter()
	{
		$this->load->view('NewsLetter');
	}
	public function NewsLetter1()
	{
		$this->load->view('NewsLetter1');
	}
	public function NGO_regestration()
	{
		$this->load->view('NGO_regestration');
	}
	public function Nidhi_Company()
	{
		$this->load->view('Nidhi_Company');
	}
	public function One_Person_Company()
	{
		$this->load->view('One_Person_Company');
	}
	public function Onshore_Offshore_Advisory()
	{
		$this->load->view('Onshore_Offshore_Advisory');
	}
	public function ourSolution()
	{
		$this->load->view('ourSolution');
	}
	public function PAN()
	{
		$this->load->view('PAN');
	}
	public function Partnership()
	{
		$this->load->view('Partnership');
	}
	public function Private_Limited_Company()
	{
		$this->load->view('Private_Limited_Company');
	}
	public function Professional_Tax_Registration()
	{
		$this->load->view('Professional_Tax_Registration');
	}
	public function Proprietorship()
	{
		$this->load->view('Proprietorship');
	}
	public function renduring()
	{
		$this->load->view('renduring');
	}
	public function Society_Registration()
	{
		$this->load->view('Society_Registration');
	}
	public function strategic_choices()
	{
		$this->load->view('strategic_choices');
	}
	public function Strategy_Performance_Consulting_services()
	{
		$this->load->view('Strategy_Performance_Consulting_services');
	}
	public function Succession_Planning()
	{
		$this->load->view('Succession_Planning');
	}
	public function TAN()
	{
		$this->load->view('TAN');
	}
	public function team_copy()
	{
		$this->load->view('team_copy');
	}
	public function team()
	{
		$this->load->view('team');
	}
	public function TeamAboutMe()
	{
		$this->load->view('TeamAboutMe');
	}
	public function accounting_task_force()
	{
		$this->load->view('accounting_task_force');
	}
	public function work_list()
	{
		$this->load->view('work_list');
	}
	public function audit_task_force()
	{
		$this->load->view('audit_task_force');
	}
	public function legal_task_force()
	{
		$this->load->view('legal_task_force');
	}
	public function ma_task_force()
	{
		$this->load->view('ma_task_force');
	}
	public function tax_task_force()
	{
		$this->load->view('tax_task_force');
	}
	public function technology_task_force()
	{
		$this->load->view('technology_task_force');
	}
	public function women_leadership_group()
	{
		$this->load->view('women_leadership_group');
	}
	public function rkda_internship()
	{
		$this->load->view('rkda_internship');
	}
	public function qty_dev_board()
	{
		$this->load->view('qty_dev_board');
	}
	public function essentials()
	{
		$this->load->view('essentials');
	}
	public function qty_standards()
	{
		$this->load->view('qty_standards');
	}
	public function qty_monitoring()
	{
		$this->load->view('qty_monitoring');
	}
	public function siir()
	{
		$this->load->view('siir');
	}
	public function service_portfolio()
	{
		$this->load->view('service_portfolio');
	}
	public function audit()
	{
		$this->load->view('audit');
	}
	public function tax_accounting()
	{
		$this->load->view('tax_accounting');
	}
	public function transfer_pricing()
	{
		$this->load->view('transfer_pricing');
	}
	public function IT_instructions()
	{
		$this->load->view('IT_instructions');
	}
	public function independent_std()
	{
		$this->load->view('independent_std');
	}
	public function member_firms()
	{
		$this->load->view('member_firms');
	}
	public function faq_new_partner()
	{
		$this->load->view('faq_new_partner');
	}

	public function expansion_plan()
	{
		$this->load->view('expansion_plan');
	}
	public function info_new_partners()
	{
		$this->load->view('info_new_partners');
	}
	public function integration_checklist()
	{
		$this->load->view('integration_checklist');
	}
	public function first_steps_checklist()
	{
		$this->load->view('first_steps_checklist');
	}
	public function firm_details()
	{
		$this->load->view('firm_details');
	}
	public function partner_meetings()
	{
		$this->load->view('partner_meetings');
	}
	public function firms()
	{
		$this->load->view('firms');
	}
	public function preliminaryAppForm()
	{
		$this->load->view('preliminaryAppForm');
	}
	public function congrats()
	{
		$this->load->view('congrats');
	}
	public function sendMail()
	{
		$this->load->view('sendMail');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function onlyForMembers()
	{
		$this->load->view('onlyForMembers');
	}
	public function NDA()
	{
		$this->load->view('NDA');
	}
	public function ndaDownload()
	{
		$this->load->view('ndaDownload');
	}
	public function form_2()
	{
		$this->load->view('form_2');
	}
	public function authorization()
	{
		$this->load->view('authorization');
	}
	public function dummy()
	{
		$this->load->view('dummy');
	}
	public function navbar()
	{
		$this->load->view('navbar');
	}
	public function landing_page()
	{
		$this->load->view('landing_page');
	}
	public function rkda_login()
	{
		$this->load->view('rkda_login');
	}
	public function signUp()
	{
		$this->load->view('signUp');
	}
	public function membership()
	{
		$this->load->view('membership');
	}
	public function c_carousel()
	{
		$this->load->view('c_carousel');
	}
	public function quality_std()
	{
		$this->load->view('quality_std');
	}
	public function tech_std()
	{
		$this->load->view('tech_std');
	}
	public function sii()
	{
		$this->load->view('sii');
	}
	public function superCa()
	{
		$this->load->view('superCa');
	}


}
?>
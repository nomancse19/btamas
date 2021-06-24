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
|	https://codeigniter.com/user_guide/general/routing.html
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

/*-------------------------------------------------------------------------
Cholo Transport Admin Route Start Here
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
---------------------------------------------------------------------------*/
$route['Cholotransportowner/admin/01521451354'] = 'Backend/AdminController/cholotransportadminbackendcontrol';
$route['Cholotransportowner/admin_login/login_check'] = 'Backend/AdminController/admin_login_check';
$route['Cholotransportowner/Dashboard'] = 'Backend/AdminController/Dashboard';



//Vehicles Request Controller Route Start Here
$route['Cholotransportowner/AllVehiclesRequest']                        = 'Backend/VehiclesRequestController/all_vehicles_request';
$route['Cholotransportowner/PendingVehiclesRequest']                    = 'Backend/VehiclesRequestController/all_pending_vehicles_request';
$route['Cholotransportowner/ProcessingVehiclesRequest']                 = 'Backend/VehiclesRequestController/all_processing_vehicles_request';
$route['Cholotransportowner/AcceptedVehiclesRequest']                   = 'Backend/VehiclesRequestController/all_accepted_vehicles_request';
$route['Cholotransportowner/CompletedVehiclesRequest']                  = 'Backend/VehiclesRequestController/all_completed_vehicles_request';
$route['Cholotransportowner/CancelVehiclesRequest']                     = 'Backend/VehiclesRequestController/all_cancel_vehicles_request';
$route['Cholotransportowner/UpdateVehiclesRequestStatus/(.+)']          = 'Backend/VehiclesRequestController/update_vehicles_request_status/$1';



$route['Cholotransportowner/UserAccountRequest']                        = 'Backend/VehiclesRequestController/all_user_account_request';
//Vehciles Request Controller Route End Here











//Device Schedule Request Request Controller Route Start Here
$route['Cholotransportowner/AllDeviceScheduleRequest']                   = 'Backend/DeviceTrackerController/all_device_schedule_request';
$route['Cholotransportowner/SaveDeviceScheduleRequest']                  = 'Backend/DeviceTrackerController/save_device_schedule_request';
$route['Cholotransportowner/UpdateDeviceScheduleRequest/(.+)']           = 'Backend/DeviceTrackerController/update_device_schedule_request/$1';

//Device Schedule Request Controller Route End Here





//UserLogged Info Route Start Here
$route['Cholotransportowner/UserLoggedInfo']                   = 'Backend/UserController/user_logged_info';
$route['Cholotransportowner/ActiveLoginUser']                  = 'Backend/UserController/active_logged_user';
$route['Cholotransportowner//(.+)']                             = 'Backend/UserController//$1';

//UserLogged Info Controller Route End Here






//CNF Controller Route Start Here
$route['Cholotransportowner/AddCnf']                    = 'Backend/CnfController/cnf_add';
$route['Cholotransportowner/Savecnf']                   = 'Backend/CnfController/save_cnf_data';
$route['Cholotransportowner/ManageCnf']                 = 'Backend/CnfController/manage_cnf';
$route['Cholotransportowner/EditCnfInfo/(.+)']          = 'Backend/CnfController/edit_cnf_info/$1';
$route['Cholotransportowner/SaveUpdateCnfInfo/(.+)']    = 'Backend/CnfController/save_update_cnf_info/$1';
$route['Cholotransportowner/ViewCnfInfo/(.+)']          = 'Backend/CnfController/view_cnf_info/$1';

//CNF Controller Route End Here






//Importer Controller Route Start Here
$route['Cholotransportowner/AddImporter']                   = 'Backend/ImporterController/importer_add';
$route['Cholotransportowner/Saveimporter']                  = 'Backend/ImporterController/save_importer_data';
$route['Cholotransportowner/ManageImporter']                = 'Backend/ImporterController/manage_importer';
$route['Cholotransportowner/EditImporterInfo/(.+)']         = 'Backend/ImporterController/edit_importer_info/$1';
$route['Cholotransportowner/SaveUpdateImporterInfo/(.+)']   = 'Backend/ImporterController/save_update_importer_info/$1';
$route['Cholotransportowner/ViewImporterInfo/(.+)']         = 'Backend/ImporterController/view_importer_info/$1';
$route['BTAMS/MemberVerify/QRCodeNO/(.+)']                  = 'HomeController/verify_transport_malik_info/$1';
$route['Cholotransportowner/ManageTransportMalikSms']       = 'Backend/ImporterController/transport_malik_sms_sent';

//Importer Controller Route End Here






//Exporter Controller Route Start Here
$route['Cholotransportowner/AddExporter']                   = 'Backend/ExporterController/exporter_add';
$route['Cholotransportowner/Saveexporter']                  = 'Backend/ExporterController/save_exporter_data';
$route['Cholotransportowner/ManageExporter']                = 'Backend/ExporterController/manage_exporter';
$route['Cholotransportowner/EditExporterInfo/(.+)']         = 'Backend/ExporterController/edit_exporter_info/$1';
$route['Cholotransportowner/SaveUpdateExporterInfo/(.+)']   = 'Backend/ExporterController/save_update_exporter_info/$1';
$route['Cholotransportowner/ViewExporterInfo/(.+)']         = 'Backend/ExporterController/view_exporter_info/$1';
//Exporter Controller Route End Here







//Vehicles Controller Route Start Here
$route['Cholotransportowner/AddVehicles']                   = 'Backend/VehiclesController/vehicles_add';
$route['Cholotransportowner/Savevehicles']                  = 'Backend/VehiclesController/save_vehicles_info_data';
$route['Cholotransportowner/ManageVehicles']                = 'Backend/VehiclesController/manage_vehicles';
$route['Cholotransportowner/EditVehiclesInfo/(.+)']         = 'Backend/VehiclesController/edit_vehicles_info/$1';
$route['Cholotransportowner/ManageVehiclesImage/(.+)']      = 'Backend/VehiclesController/manage_vehicles_image/$1';
$route['Cholotransportowner/SaveVehiclesImage/(.+)']        = 'Backend/VehiclesController/save_vehicles_image/$1';

$route['Cholotransportowner/SaveUpdateVehiclesInfo/(.+)']   = 'Backend/VehiclesController/save_update_vehicles_info/$1';
$route['Cholotransportowner/ViewVehiclesInfo/(.+)']         = 'Backend/VehiclesController/view_vehicles_info/$1';
$route['Cholotransportowner/AddDriverInVehicles/(.+)']      = 'Backend/VehiclesController/add_driver_in_vehicles/$1';
$route['Cholotransportowner/SaveDriverInVehicles/(.+)']      = 'Backend/VehiclesController/save_driver_in_vehicles/$1';
$route['Cholotransportowner/DeleteDriverInVehicles/(.+)']      = 'Backend/VehiclesController/delete_driver_in_vehicles/$1';
//Vehicles Controller Route End Here







//Driver Controller Route Start Here
$route['Cholotransportowner/AddDriver']                   = 'Backend/DriverController/driver_add';
$route['Cholotransportowner/Savedriver']                  = 'Backend/DriverController/save_driver_info_data';
$route['Cholotransportowner/ManageDriver']                = 'Backend/DriverController/manage_driver';

$route['Cholotransportowner/EditDriverInfo/(.+)']         = 'Backend/DriverController/edit_driver_info/$1';
$route['Cholotransportowner/ManageDriverImage/(.+)']      = 'Backend/DriverController/manage_driver_image/$1';
$route['Cholotransportowner/SaveDriverImage/(.+)']        = 'Backend/DriverController/save_driver_image/$1';

$route['Cholotransportowner/SaveUpdateDriverInfo/(.+)']   = 'Backend/DriverController/save_update_driver_info/$1';
$route['Cholotransportowner/ViewDriverInfo/(.+)']         = 'Backend/DriverController/view_driver_info/$1';
//Driver Controller Route End Here






//Chalan Controller Route Start Here
$route['Cholotransportowner/AddChalan']                   = 'Backend/ChalanController/chalan_add';
$route['Cholotransportowner/ManageChalan']                = 'Backend/ChalanController/manage_chalan';
$route['Cholotransportowner/UpdateChalanStatus/(.+)']     = 'Backend/ChalanController/update_chalan_status/$1';
$route['Cholotransportowner/ViewChalanInfo/(.+)']         = 'Backend/ChalanController/view_chalan_info/$1';

$route['Cholotransportowner/ViewLiveChalanLocation/(.+)'] = 'Backend/ChalanController/get_live_location/$1';
$route['Cholotransportowner/SaveChalan']                  = 'Backend/ChalanController/save_chalan';
$route['Cholotransportowner/GetVehiclesAllInfo']          = 'Backend/ChalanController/get_vehicles_all_info';
//Chalan Controller Route End Here









//Client Login Controller Route Start Here
$route['Client/login'] = 'ClientLoginController/cholotransportclientlogin';
$route['Cholotransport/Client/login_check'] = 'ClientLoginController/client_login_check';
$route['Client/Dashboard'] = 'ClientLoginController/Dashboard';
//Client Login Controller Route End Here





//CNF Client Controller Route Start Here
$route['Client/CnfChalanInfo']                      = 'CnfClientController/cnf_all_chalan';
$route['Client/ViewCnfChalanInfo/(.+)']             = 'CnfClientController/view_cnf_chalan_info/$1';
$route['Client/CnfVehiclesLiveTracking/(.+)']       = 'CnfClientController/cnf_vehicles_live_tracking/$1';
$route['Client/CnfAllVehiclesRequest']              = 'CnfClientController/cnf_all_vehicles_request';
$route['Client/AddCnfVehiclesRequest']              = 'CnfClientController/add_cnf_vehicles_request';
$route['Client/DownloadChalanInfo/(.+)']            = 'CnfClientController/download_cnf_chalan_info/$1';
//CNF Client  Controller Route End Here




//Importer Client Controller Route Start Here
$route['Client/ImporterChalanInfo']                  = 'ImporterClientController/importer_all_chalan';

$route['Client/ViewImporterChalanInfo/(.+)']          = 'ImporterClientController/view_importer_chalan_info/$1';
$route['Client/ImporterVehiclesLiveTracking/(.+)']    = 'ImporterClientController/importer_vehicles_live_tracking/$1';

$route['Client/ImporterAllVehiclesRequest']          = 'ImporterClientController/importer_all_vehicles_request';
$route['Client/AddImporterVehiclesRequest']          = 'ImporterClientController/add_importer_vehicles_request';
//Importer Client  Controller Route End Here





//Importer Client Controller Route Start Here
$route['Client/ExporterChalanInfo']                  = 'ExporterClientController/exporter_all_chalan';

$route['Client/ViewExporterChalanInfo/(.+)']          = 'ExporterClientController/view_exporter_chalan_info/$1';
$route['Client/ExporterVehiclesLiveTracking/(.+)']    = 'ExporterClientController/exporter_vehicles_live_tracking/$1';

$route['Client/ExporterAllVehiclesRequest']          = 'ExporterClientController/exporter_all_vehicles_request';
$route['Client/AddExporterVehiclesRequest']          = 'ExporterClientController/add_exporter_vehicles_request';
//Importer Client  Controller Route End Here














//Account Controller Route Start Here
$route['Cholotransportowner/SaveIncomeCategory']                        = 'Backend/AccountController/save_income_category';
$route['Cholotransportowner/UpdateIncomeCategory/(.+)']                 = 'Backend/AccountController/update_income_category/$1';
$route['Cholotransportowner/ManageIncomeCategory']                      = 'Backend/AccountController/manage_income_category';
$route['Cholotransportowner/SaveIncomeDetails']                         = 'Backend/AccountController/save_income_details';
$route['Cholotransportowner/ManageIncomeDetails']                       = 'Backend/AccountController/manage_income_details';




$route['Cholotransportowner/SaveCostCategory']                          = 'Backend/AccountController/save_cost_category';
$route['Cholotransportowner/UpdateCostCategory/(.+)']                   = 'Backend/AccountController/update_cost_category/$1';
$route['Cholotransportowner/ManageCostCategory']                        = 'Backend/AccountController/manage_cost_category';

$route['Cholotransportowner/AddCostDetails']                            = 'Backend/AccountController/add_cost_details';
$route['Cholotransportowner/SaveCostDetails']                           = 'Backend/AccountController/save_cost_details';
$route['Cholotransportowner/ManageCostDetails']                         = 'Backend/AccountController/manage_cost_details';


//Account Controller Route End Here









//All Report Control Routeing Start Now...
$route['Cholotransportowner/ManageAllReport']              = 'Backend/ReportController/manage_all_report';
$route['Cholotransportowner/TodayTransactionReport']       = 'Backend/ReportController/today_transaction_report';
$route['Cholotransportowner/DailyTransactionReport']       = 'Backend/ReportController/daily_transaction_report';
$route['Cholotransportowner/GetDailyTransactionReport']    = 'Backend/ReportController/get_daily_transaction_report';

$route['Cholotransportowner/DueIncomeReport']              = 'Backend/ReportController/due_income_report';
$route['Cholotransportowner/GetDueIncomeReport']           = 'Backend/ReportController/get_due_income_report';


$route['Cholotransportowner/AllIncomeReport']              = 'Backend/ReportController/all_income_report';
$route['Cholotransportowner/GetAllIncomeReport']           = 'Backend/ReportController/get_all_income_report';


$route['Cholotransportowner/AllCostReport']              = 'Backend/ReportController/all_cost_report';
$route['Cholotransportowner/GetAllCostReport']           = 'Backend/ReportController/get_all_cost_report';


$route['Cholotransportowner/ProfitReport']              = 'Backend/ReportController/all_profit_report';
$route['Cholotransportowner/GetProfitReport']           = 'Backend/ReportController/get_all_profit_report';


$route['Cholotransportowner/MonthlyTransactionReport']     = 'Backend/ReportController/monthly_transaction_report';
$route['Cholotransportowner/GetMonthlyTransactionReport']  = 'Backend/ReportController/get_monthly_transaction_report';


$route['Cholotransportowner/CategoryWiseCostingReport']     = 'Backend/ReportController/all_cost_report_by_cost_category';
$route['Cholotransportowner/GetCategoryWiseCostingReport']  = 'Backend/ReportController/get_all_cost_report_by_costing_category';

$route['Cholotransportowner/CategoryWiseIncomeReport']      = 'Backend/ReportController/all_income_report_by_income_category';
$route['Cholotransportowner/GetCategoryWiseIncomeReport']      = 'Backend/ReportController/get_all_income_report_by_income_category';
//All Report Control Routeing End Now....






//Image Slider Routeing Start Now.....
$route['Cholotransportowner/ManageImageSlider']            = 'SuperHomeController/manage_slider';
$route['Cholotransportowner/SaveImageSlider']              = 'SuperHomeController/save_image_slider';
//Image Slider Routeing End Now....





//Truck Lagbe Routeing Start Now
$route['Cholotransportowner/ManageTruckLagbe']             = 'SuperHomeController/manage_truck_lagbe';
$route['Cholotransportowner/SaveTruckLagbe']               = 'SuperHomeController/save_truck_lagbe';
//Truck Lagbe Routeing End Now








//Choose Us Routeing Start Now
$route['Cholotransportowner/ManageChooseUs']             = 'SuperHomeController/manage_choose_us';
$route['Cholotransportowner/SaveChooseUs']               = 'SuperHomeController/save_choose_us';
//Choose Us Routeing End Now





//Truck Category Routeing Start Now
$route['Cholotransportowner/ManageTruckCategory']             = 'SuperHomeController/manage_truck_category';
$route['Cholotransportowner/SaveTruckCategory']               = 'SuperHomeController/save_truck_category';
//Truck Category Routeing End Now








//Corporate Client Routeing Start Now
$route['Cholotransportowner/ManageCorporateClient']           = 'SuperHomeController/manage_corporate_client';
$route['Cholotransportowner/SaveCorporateClient']             = 'SuperHomeController/save_corporate_client';
//Corporate Client Routeing End Now










//Industries We Cover Routeing Start Now
$route['Cholotransportowner/ManageIndustriesWeCover']           = 'SuperHomeController/manage_industries_we_cover';
$route['Cholotransportowner/SaveIndustriesWeCover']             = 'SuperHomeController/save_industries_we_cover';
//Industries We Cover Routeing End Now





//GPS Tracker Fetaures Routeing Start Now
$route['Cholotransportowner/ManageGpsTrackerFeatures']           = 'SuperHomeController/manage_gps_tracker_features';
$route['Cholotransportowner/SaveGpsTrackerFeatures']             = 'SuperHomeController/save_gps_tracker_features';
//GPS Tracker Fetaures Routeing End Now















//Administrator Controller Route Start Here
$route['Cholotransportowner/SmsControl']                   = 'Backend/ChalanController/sms_control';
$route['Cholotransportowner/ChalanSmsControl']             = 'Backend/ChalanController/chalan_sms_control';


$route['Cholotransportowner/ManageUser']                    = 'Backend/UserController/manage_user';
$route['Cholotransportowner/SaveNewUser']                   = 'Backend/UserController/save_new_user';
$route['Cholotransportowner/AssignUserPermission/(.+)']     = 'Backend/UserController/assign_user_permission/$1';
$route['Cholotransportowner/SaveAssignUserPermission']     = 'Backend/UserController/save_assign_user_permission';
//Administrator Controller Route End Here









//Notification Controller Route Start Here
$route['Cholotransportowner/NotificationControl']                               = 'Backend/NotificationController/notification_control';
$route['Cholotransportowner/ManageFlashNotification']                           = 'Backend/NotificationController/manage_flash_notification';
$route['Cholotransportowner/SaveFlashNotification']                             = 'Backend/NotificationController/save_flash_notification';
$route['Cholotransportowner/AssignCnfFlashNotification/(.+)']                   = 'Backend/NotificationController/assign_flash_notification_in_cnf_user/$1';
$route['Cholotransportowner/SaveAssignFlashNotificationInCnfUser']              = 'Backend/NotificationController/save_assign_flash_notification_in_cnf_user';

$route['Cholotransportowner/AssignImporterFlashNotification/(.+)']              = 'Backend/NotificationController/assign_flash_notification_in_importer_user/$1';
$route['Cholotransportowner/SaveAssignFlashNotificationInImporterUser']         = 'Backend/NotificationController/save_assign_flash_notification_in_importer_user';


$route['Cholotransportowner/AssignExporterFlashNotification/(.+)']              = 'Backend/NotificationController/assign_flash_notification_in_exporter_user/$1';
$route['Cholotransportowner/SaveAssignFlashNotificationInExporterUser']         = 'Backend/NotificationController/save_assign_flash_notification_in_exporter_user';

$route['Cholotransportowner/ManageNormalNotification']                          = 'Backend/NotificationController/manage_normal_notification';
$route['Cholotransportowner/SaveNormalNotification']                             = 'Backend/NotificationController/save_normal_notification';
$route['Cholotransportowner/AssignCnfNormalNotification/(.+)']                   = 'Backend/NotificationController/assign_normal_notification_in_cnf_user/$1';
$route['Cholotransportowner/SaveAssignNormalNotificationInCnfUser']              = 'Backend/NotificationController/save_assign_normal_notification_in_cnf_user';



$route['Cholotransportowner/AssignImporterNormalNotification/(.+)']              = 'Backend/NotificationController/assign_normal_notification_in_importer_user/$1';
$route['Cholotransportowner/SaveAssignNormalNotificationInImporterUser']         = 'Backend/NotificationController/save_assign_normal_notification_in_importer_user';


$route['Cholotransportowner/AssignExporterNormalNotification/(.+)']              = 'Backend/NotificationController/assign_normal_notification_in_exporter_user/$1';
$route['Cholotransportowner/SaveAssignNormalNotificationInExporterUser']         = 'Backend/NotificationController/save_assign_normal_notification_in_exporter_user';
//Notification Controller Route End Here







//Frontend Home Controller Route Start Here
$route['RequestNewVehicles']                               = 'HomeController/request_a_new_vehicles';
$route['SaveRequestNewVehicles']                           = 'HomeController/save_request_a_new_vehicles';

$route['RequestNewUserAccount']                            = 'HomeController/request_a_new_user_account';
$route['SaveRequestNewUserAccount']                        = 'HomeController/save_request_a_new_user_account';

$route['Cholotransportowner/ChalanSmsControl']             = 'Backend/ChalanController/chalan_sms_control';
//Frontend Home Controller Route End Here





/*-------------------------------------------------------------------------
Cholo Transport Admin Route End Here
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
---------------------------------------------------------------------------*/






$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

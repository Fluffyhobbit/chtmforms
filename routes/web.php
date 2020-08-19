<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','chtmformsController@index1');
Route::get('/OffCampus','chtmformsController@index2');

//Copy of Letter of Invitation/MOA
Route::get('/AttachDocumentsMoa', 'chtmformsController@AttachDocumentsMoa');
Route::post('/UploadMoa', 'MoaController@uploadMoa');

//Speaker/Facilitator Resume
Route::get('/AttachDocumentsSpeaker', 'chtmformsController@AttachDocumentsSpeaker');
Route::post('/UploadSpeaker', 'SpeakerController@uploadSpeaker');

//Organizing Comittee
Route::get('/AtachDocumentsCommittee', 'chtmformsController@AttachDocumentsCommittee');
Route::post('/UploadCommittee', 'CommitteeController@uploadCommittee');

//Budget Request Form
Route::get('/AttachDocumentsBugdet','chtmformsController@AttachDocumentsBudget');
Route::post('/UploadBudget','BudgetController@uploadBudget');    

//Copy of USC/CSC/Alternative Resolution
Route::get('/AttachDocumentUSC','chtmformsController@AttachDocumentsUSC');
Route::post('/UploadUSC','USCController@UploadUSC');

//Copy of Program/Schedule/ of Activities
Route::get('/AttachDocumentsProgram','chtmformsController@AttachDocumentsProgram');
Route::post('/UploadProgram','ProgramsController@uploadProgram');

// Copy of Promotional Materials/Papers
Route::get('/AttachDocumentPromotionalMaterials','chtmformsController@AttachDocumentsPromotoionalMaterials');
Route::post('/UploadPromotionalMat','PromotionalMatController@UploadPromotionalMat');

//Excuse Letter for Students
Route::get('/AttachDocumenExcuseLet','chtmformsController@AttachDocumentsExcuseLet');
Route::post('/UploadExcuseLet','ExcuseLetController@UploadExcuseLet');

//List of Participants
Route::get('/AttachDocumentParticipants','chtmformsController@AttachDocumentsParticipants');
Route::post('/UploadParticipants','ParticipantsMatController@UploadParticipants');

//Venue Floor/Physical Set-up
Route::get('/AttachDocumentVenue','chtmformsController@AttachDocumentsVenue');
Route::post('/UploadVenue','VenueController@UploadVenue');

// Curfew Form(if Applicable)
Route::get('/AttachDocumentCurfew','chtmformsController@AttachDocumentsCurfew');
Route::post('/UploadCurfew','CurfewController@UploadCurfew');









<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Use Validator Class
use Illuminate\Support\Facades\Validator;
//Use Mail Class
use Illuminate\Support\Facades\Mail;
//Use Model SendMail
use App\Mail\SendMail;
//Use Exception Class
use Exception;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('frontend.contact.contact');
    }

    public function sendEmail(Request $request)
    {
        // dd('inside sendEmail method of contact controller');

        $response = array();
        $response['message'] = '';
        // check validate request
        $validateData = Validator::make($request->all(),[
            'name' => 'bail|required',
            'email' => 'bail|required|email',
            'message' => 'bail|required'
        ]);

        // get all error in validate request
        $errors = $validateData->errors();
        // if the number of errors isnt more than zero
        if(!(count($errors->all()) > 0 ))
        {
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                // send Request is feedback
                'request' => 'feedback'
            );
            // Try to send Email
            var_dump($data);
            try {
                //send email with model of email SendEmail and with variable data
                Mail::to('sandeep.crupee@gmail.com')->send(new SendMail($data));

                // check if sending email failure
                if (!Mail::failures()) {
                    // Give response message as success if success to send email
                    $response['message'] = 'Success';
                }
                else {
                    // Give response messgae failed if failed to send email
                    $response['message'] = 'Failed';
                }
            } 
            catch (Exception $e) {
                echo "line 66";
                //Give response message error if failed to send email
                $response['message'] = $e->getMessage();
            }
        }
        
        else {
            echo "line 73";
            // Give response message error if the number of errors more than zero
            foreach($errors->all() as $e)
            {
                $response['message'] .= $e . ', ';
            }
            
            
            $response['message'] .= "All Input cannot be Empty" ;
        }
        // echo json_decode($response);

    }
}

<?php // Code within app\Helper.php

namespace App;

class Helper
{
    public static function callJumia($service , $number)
    {

        if($service == "we")
        {
            $service_key = "internet.postpaid.wehome@aman" ;
        }elseif($service == "orange"){
            $service_key = "internet.bill.orangedsl@fawry";
        }elseif($service == "noor"){
            $service_key = "internet.bill.nooradsl@fawry";
        }elseif($service == "etisalat"){
            $service_key = "internet.postpaid.etisalat@aman";
        }
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://pay.jumia.com.eg/api/v3/utilities/service-form-type/'.$service_key,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "service_key": "'.$service_key.'",
            "payload": {
                "phone_number_message": "For landline numbers, you must enter the governate code",
                "phone_number": "EG_+20'.$number.'"
            },
            "form_segments": [
                {
                    "service_key": "'.$service_key.'",
                    "elements": [
                        {
                            "key": "phone_number_message",
                            "label": "For landline numbers, you must enter the governate code",
                            "options": [],
                            "template": "message",
                            "title": "",
                            "validators": []
                        },
                        {
                            "key": "phone_number",
                            "label": "Phone Number",
                            "options": [
                                {
                                    "form_elements": [],
                                    "icon": "",
                                    "label": "Egypt",
                                    "message": "",
                                    "option_value": "EG_+20",
                                    "preselected": false
                                }
                            ],
                            "template": "phone_with_country",
                            "title": "What is your phone number?",
                            "validators": [
                                {
                                    "message": "Phone Number is required",
                                    "options": [],
                                    "type": "required"
                                },
                                {
                                    "message": "Invalid phone number",
                                    "options": [],
                                    "type": "phoneNumber"
                                }
                            ]
                        }
                    ],
                    "step": 1,
                    "step_count": 2,
                    "payload": [],
                    "integrity_key": "19ef610d2e8588e883a3148ba272e0556cc99c25"
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
            'accept-language: ar',
            'cookie: ',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return curl_getinfo($curl, CURLINFO_HTTP_CODE);

    }
    
}
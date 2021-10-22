<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AmoCRMController;

class AdminController extends Controller
{
  public function request_save(Request $request)
    {
        $success = true;
        $ex = "none";
        $lead_id = null;

        try
        {
            $amoCRMIntegrity = new AmoCRMController;

            $lead_id = $amoCRMIntegrity->add_lead([
                'NAME' => $request->name,
                'PHONE' => $request->phone,
                'EMAIL' => $request->email,
                'LEAD_NAME' => $request->phone.'. Заявка с сайта YOURSITE.COM',
                'PIPELINEID' => 1, // Укажите здесь ваш ID 'Воронки', в которую должен упасть лид
            ]);
        }
        catch(\Exception $e)
        {
            $success = false;
            $ex = $e;
        }

        return response()->json([
            'success' => $success,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'lead_id' => $lead_id,
            'exceptions' => $ex,
        ],
        200,
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE
        ); // Возвращаем JSON ответ API
    } 
}

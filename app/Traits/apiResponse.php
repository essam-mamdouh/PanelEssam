<?php namespace App\Traits;

trait apiResponse
{
   /* protected function apiResponse($request, $message, $data, $successStatus,$statusCode = null)
    {
        $response['message'] = $message;
        if ($data != null)
            $response['data'] = $data;
        $response['success'] = $successStatus;
        return $response;
    }*/

  public function response($result = [], $message = "")
    {
        $this->_response =
        [
            'status'        => true,
            'data'          => $result,
            'message'       => $message
        ];

        return response()->json($this->_response, 200);
    }

    public function error($error_message, $error_data = [])
    {
        $this->_response =
        [
            'status'       => false,
            'message'       => $error_message,
        ];
        ! empty($error_data) ? $this->_response['errors'] = $error_data : '';

        return response()->json($this->_response, 200);
    }

}

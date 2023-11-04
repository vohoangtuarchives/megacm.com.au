<?php
namespace App;

class ApiManager{
    public function success($data = null, $msg = 'response success')
    {
        return response()->json([
            'status' => 'success',
            'message' => $msg,
            'data' => $data
        ]);
    }

    public function errors($data = null, $msg = 'response errors')
    {
        return response()->json([
            'status' => 'errors',
            'message' => $msg,
            'errors' => $data
        ]);
    }

    public function validation_errors($errors = null, $msg = 'The given data was invalid.')
    {
        return response()->json([
            'message' => $msg,
            'errors' => $errors
        ], 422);
    }


}
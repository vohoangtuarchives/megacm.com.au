<?php

if (!function_exists('api_success')) {
    function api_success($data = null, $msg = 'response success')
    {
        return response()->json([
            'status' => 'success',
            'message' => $msg,
            'data' => $data
        ]);
    }
}

if (!function_exists('api_errors')) {
    function api_errors($data = null, $msg = 'response errors')
    {
        return response()->json([
            'status' => 'errors',
            'message' => $msg,
            'errors' => $data
        ]);
    }
}

if (!function_exists('api_validation_errors')) {
    function api_validation_errors($errors = null, $msg = 'The given data was invalid.')
    {
        return response()->json([
            'message' => $msg,
            'errors' => $errors
        ], 422);
    }
}

if(!function_exists("strip_attributes")){
    function strip_attributes($text){
        return preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/si",'<$1$2>', $text);
    }
}


if (! function_exists('core')) {
    /**
     * Core helper.
     *
     * @return \App\Core\Core
     */
    function core()
    {
        return app()->make(\App\Core\Core::class);
    }
}

if (! function_exists('array_permutation')) {
    function array_permutation($input)
    {
        $results = [];

        foreach ($input as $key => $values) {
            if (empty($values)) {
                continue;
            }

            if (empty($results)) {
                foreach ($values as $value) {
                    $results[] = [$key => $value];
                }
            } else {
                $append = [];

                foreach ($results as &$result) {
                    $result[$key] = array_shift($values);

                    $copy = $result;

                    foreach ($values as $item) {
                        $copy[$key] = $item;
                        $append[] = $copy;
                    }

                    array_unshift($values, $result[$key]);
                }

                $results = array_merge($results, $append);
            }
        }

        return $results;
    }
}

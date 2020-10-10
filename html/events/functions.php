<?php
    function physics_heap() {
        curl_setopt_array(
            $request, array(
            CURLOPT_URL => 'http://physics.utah.edu/~heap',
            CURLOPT_RETURNTRANSFER => true
            )
        );

        $response = curl_exec($request);
        echo $response;
    }

?>

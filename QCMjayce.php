<?php
        $option = array(
            'name' => FILTER_SANITIZE_STRING,
            'surname' => FILTER_SANITIZE_STRING,
            'mail' => FILTER_VALIDATE-EMAIL,
        );

        $result = filter_input_array(INPUT_POST, $options);

        if($result != null AND $result != FALSE){
            echo 'All entries have been cleansed';
        }else{
            echo 'An entry is incorrect';
        }

        

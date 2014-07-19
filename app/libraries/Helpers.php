<?php

class Helpers {
    public static function displayMessage($error = NULL, $success = NULL)
    {
        if(!is_null($error))
        {

                echo '<div class="alert alert-danger">
                        <a href="#" class="close pull-left" data-dismiss="alert">x</a>';

                echo $error;
                echo '</div>';

        }
        if(!is_null($success))
        {
            echo '<div class="alert alert-success">
                <a href="#" class="close pull-left" data-dismiss="alert">x</a>';
            echo $success;
            echo '</div>';
        }
    }

    public static function displayError($field, $errors)
    {
        if($errors->any())
        {
            echo $errors->first($field,'<span class="text-danger">:message</span>');
        }
    }

    public static function deleteForm($route, $id)
    {
        $form = Form::open(array('route' => array($route, $id), 'method' => 'delete')).'
                <button onclick="return confirm(\'Are you sure?\')" type="submit" href="'.URL::route($route, $id).'" class="btn btn-link btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                '.Form::close();
        return $form;
    }
} 
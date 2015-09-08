<?php
return array(

    /**
     * Default view used to render Javascript validation code
     */
    'view' => 'jsvalidation::bootstrap',


    /**
     * Default JQuery selector find the form to be validated.
     * By default, the validations are applied to all forms.
     */
    'form_selector' => 'form',


    /**
     * If you change the focus on detect some error then active
     * this parameter to move the focus to the first error found.
     */
    'focus_on_error' => false,

    /**
     * Duration time for the animation when We are moving the focus
     * to the first error, http://api.jquery.com/animate/ for more information.
     */
    'duration_animate' => 1000,

    /**
     * If you want check some rules before send your form to your server
     * then active this parameter, notice that you will need to implement the control to handle
     * this remote validation on your Controller.
     */
    'active_remote_validation' => true,

);

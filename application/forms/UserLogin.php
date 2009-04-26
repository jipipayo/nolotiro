<?php

/**
 * This is the UserLogin form.   
 */


class Form_UserLogin extends Zend_Form
{
    /**
     * @see    http://framework.zend.com/manual/en/zend.form.html
     * @return void
     */ 
    public function init()
    {
        // set the method for the display form to POST
        $this->setMethod('post');

        
        
        $this->addElement('text', 'username', array(
        	'label'      => 'User name:',
    		'filters' => array('StringTrim', 'StringToLower'),
			'validators' => array(
			array('StringLength', false, array(3, 20)),
			),
			'required' => true,
        	
		));

		
		 $this->addElement('password', 'password', array(
                'filters' => array('StringTrim'),
                'validators' => array(
                array('StringLength', false, array(5, 20)),
                ),
                'required' => true,
                'label' => 'Password:',
                ));
		
		

        // add the submit button
        $this->addElement('submit', 'submit', array(
            'label'    => 'Login',
        ));
    }
}
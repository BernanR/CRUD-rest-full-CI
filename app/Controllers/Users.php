<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Users extends BaseController
{   
    use ResponseTrait;

	public function index()
	{
		$data = [
            'success' => true,
            'id' => 123
        ];

        // Generic response method
        return $this->respond($data, 200);
        // Generic failure response
        return $this->fail($errors, 400);
        // Item created response
        return $this->respondCreated($data);
        // Item successfully deleted
        return $this->respondDeleted($data);
        // Command executed by no response required
        return $this->respondNoContent($message);
        // Client isn't authorized
        return $this->failUnauthorized($description);
        // Forbidden action
        return $this->failForbidden($description);
        // Resource Not Found
        return $this->failNotFound($description);
        // Data did not validate
        return $this->failValidationError($description);
        // Resource already exists
        return $this->failResourceExists($description);
        // Resource previously deleted
        return $this->failResourceGone($description);
        // Client made too many requests
        return $this->failTooManyRequests($description);


        // Generic response method
        //return $this->failResourceExists('A user already exists with that email.');

        //return $this->response->setXML($data);
         return $this->response->setJSON($data);
	}

	//--------------------------------------------------------------------

}

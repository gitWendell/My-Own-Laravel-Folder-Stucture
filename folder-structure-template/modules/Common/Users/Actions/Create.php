<?php

namespace Modules\Common\AssignedRole\Actions;

use Exception;
use Illuminate\Support\Facades\Log;
use Models\AssignedRole;

class Create {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function execute() {
        
        try {
            return AssignedRole::create($this->data);
        } catch(Exception $e) {

            return response()->json($e->getMessage())->setStatusCode(500, 'Error');
        }
    }
}
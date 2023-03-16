<?php

namespace Modules\Common\AssignedRole\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\Common\AssignedRole\Actions\Create;
use Modules\Common\AssignedRole\Actions\Delete;
use Modules\Common\AssignedRole\Actions\GetAssignedRoles;
use Modules\Common\AssignedRole\Actions\Update;
use Modules\Common\Cost\Actions\GetActiveCost;

class AssignedRoleController extends Controller
{

    public function index() {
        $page = 'assigned-role.';

        return view($page . 'index')->with('page', $page);
    }

    public function get_seminar_types() {
        $action = new GetAssignedRoles();

        return response()->json($action->execute());
    }

    public function get_active_cost_center() {
        $action = new GetActiveCost;

        return response()->json($action->execute());
    }

    public function create(Request $request) {
        $action = new Create($request->all());

        return response()->json($action->execute());
    }

    public function delete(Request $request) {
        $action = new Delete($request->all());

        return response()->json($action->execute());
    }

    public function update(Request $request) {
        $action = new Update($request->all());

        return response()->json($action->execute());
    }
}

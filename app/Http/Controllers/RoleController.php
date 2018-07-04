<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Get all data from role
     */
    public function index(Request $request)
    {
      $role = new Role;
      $res['success'] = true;
      $res['result'] = $role->all();
      return response($res);
    }
    /**
     * Insert database for Role
     * Url : /role
     */
    public function create(Request $request)
    {
      $role = new Role;
      $role->fill(['rolename' => $request->input('rolename')]);
      if($role->save()){
        $res['success'] = true;
        $res['result'] = 'Success add new role!';
        return response($res);
      }
    }
    /**
     * Get one data Role by id
     * Url : /role/{id}
     */
    public function read(Request $request, $id)
    {
      $role = Role::where('role_id',$id)->first();
      if ($role !== null) {
        $res['success'] = true;
        $res['result'] = $role;
        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'role not found!';
        return response($res);
      }
    }
    /**
     * Update data Role by ud
     */
    public function update(Request $request, $id)
    {
      if ($request->has('rolename')) {
          $role = Role::find($id);
          $role->name = $request->input('rolename');
          if ($role->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('rolename');
              return response($res);
          }
      }else{
        $res['success'] = false;
        $res['result'] = 'Please fill role name role!';
        return response($res);
      }
    }
    /**
     * Delete data Role by id
     */
    public function delete(Request $request, $id)
    {
      $role = Role::find($id);
      if ($role->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete role!';
          return response($res);
      }
    }
}
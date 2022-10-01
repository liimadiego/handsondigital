<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $all_permissions = DB::table('permissions')->get();
            $user = User::find($id);
            $arr_permissions = [];

            if(!json_decode($user)){
                throw new \Exception("Nenhum usuário foi encontrado!");
            }else{
                foreach($all_permissions as $each_permission){
                    array_push($arr_permissions, [
                        'id' => $each_permission->id,
                        'name' => $each_permission->name,
                        'has_permission' => $user->hasPermissionTo($each_permission->name)
                    ]);
                }
                
                $permissions = $user->getPermissionNames();

                return view('panel.admin.permissions.edit', [
                    'user' => $user,
                    'permissions' => $arr_permissions,
                ]);
            }
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);

            if(!json_decode($user)){
                throw new \Exception("Nenhum usuário foi encontrado!");
            }else{
                $all_permissions = DB::table('permissions')->get();

                foreach($all_permissions as $each_permission){
                    if($request->input('permission') && in_array($each_permission->name, $request->input('permission'))){
                        $user->givePermissionTo($each_permission->name);
                    }else{
                        $user->revokePermissionTo($each_permission->name);  
                    }
                } 

                return redirect('/usuarios');
            }

        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function hasAccess($page_name){

        $user = User::find(auth()->user()->id);
        return $user->hasPermissionTo($page_name);

    }
}

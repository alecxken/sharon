<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class UsermanagementController extends Controller
{
    //
       public function __construct() {
        $this->middleware(['auth', 'isAdmin']);//isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

     public function index()
    {
      //Get all users and pass it to the view
      // $users = User::orderBy('username', 'asc')->get();
      $users = User::all();

      $roles = Role::all();


      //Get all roles
      $permissions = Permission::all();


       //Get all permissions

      return view('admin.index',compact('users','permissions','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //Get all roles and pass it to the view
      $roles = Role::get();

      return view('admin.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Validate name, email and password fields
      $this->validate($request, [
              'name'=>'required|max:120',
              'email'=>'required|email|unique:users',
              
          ]);
          //Retrieving only the email and password data
        $user = new User();
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = \Hash::make('12345678');
        $user->save();
          // $user = User::create($request->only('email', 'username','password'=>));
          //Retrieving the roles field
          $roles = $request['roles'];
          //Checking if a role was selected
          if (isset($roles))
           {

            foreach ($roles as $role)
             {
	            $role_r = Role::where('id', '=', $role)->firstOrFail();
	            $user->assignRole($role_r); 
	            //Assigning role to user
             }
           }

        //Redirect to the users.index view and display message
        return redirect()->route('admin.index')
            ->with('status',
             'User successfully added.');

    }

     public function edit($id)
    {
      $user = User::findOrFail($id); 
      //Get user with specified id
      $roles = Role::get(); 
      //Get all roles

      return view('admin.edit', compact('user', 'roles')); 
      //pass user and roles data to view

     }



    public function update(Request $request)
    {
        $id = $request->input('id');


         $user = User::findOrFail($id); 
         //Get role specified by id

        $input = $request->only(['name', 'email']); 
        //Retreive the name, email and password fields


        $roles = $request['roles']; 
        //Retreive all roles

        $user->fill($input)->save();

              if (isset($roles)) 
        {
           // $user->roles()->sync($roles); 


          foreach ($roles as $role)
             {

                $role_r = Role::where('id', '=', $role)->first();


                $user->assignRole($role_r); 
                //Assigning role to user
             }

      


             //If one or more role is selected associate user to roles
        }
        else 
        {
            $user->roles()->detach();
             //If no role is selected remove exisiting role associated to a user
        }

        return redirect('admin')->with('status','User successfully edited.');
    }

 
    public function destroy($id)
    {
      //Find a user with a given id and delete
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.index')
            			 ->with('status','User successfully deleted.');
    }

    ///end of roles

    public function getroles($id) 
    {
        $dataroles = Role::all()->where('id',$id)->first();

        return $dataroles;
    }

      public function dropusers($id) 
    {
       

        $datas = User::findOrFail($id);
        $datas->delete();

        return back()->with('danger','removed');
    }

     public function getusers($id) 
    {
        $data = User::all()->where('id',$id)->first();

        return response()->json($data);
    }

         
    public function storeroles(Request $request) {
    //Validate name and permissions field
        $this->validate($request, [
            'name'=>'required|unique:roles|max:15',
            'permissions' =>'required',
            ]
        );

        $name = $request['name'];

        $role = new Role();

        $role->name = $name;

        $permissions = $request['permissions'];

        $role->save();
    //Looping thru selected permissions
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail();
         //Fetch the newly created role and assign permission
            $role = Role::where('name', '=', $name)->first();
            $role->givePermissionTo($p);
        }

        return back()->with('flash_message',
             'Role'. $role->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showroles($id) {
        return redirect('roles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editroles($id) {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateroles(Request $request, $id) {

        $role = Role::findOrFail($id);
        //Get role with the given id
    //Validate name and permission fields
        $this->validate($request, [
            'name'=>'required|max:10|unique:roles,name,'.$id,
            'permissions' =>'required',
        ]);

        $input = $request->except(['permissions']);

        $permissions = $request['permissions'];

        $role->fill($input)->save();

        $p_all = Permission::all();
        //Get all permissions

        foreach ($p_all as $p) {
            $role->revokePermissionTo($p); 
            //Remove all permissions associated with role
        }

        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail(); 
            //Get corresponding form //permission in db
            $role->givePermissionTo($p);  //Assign permission to role
        }

        return redirect()->route('roles.index')->with('flash_message','Role'. $role->name.' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rolesdestroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()->route('roles.index')->with('flash_message','Role deleted!');

    }


    //end
}

<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use File;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Upload;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Helpers\LAHelper;
use Zizaco\Entrust\EntrustFacade as Entrust;


/**
 * Class HomeController
 * @package App\Http\Controllers
 *
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get all files from uploads folder
     *
     * @return \Illuminate\Http\Response
     */
    public function uploaded_files()
    {
		$uploads = array();

		$uploads = Upload::all();

		$uploads2 = array();
		foreach ($uploads as $upload) {
			$u = (object) array();
			$u->id = $upload->id;
			$u->name = $upload->name;
			$u->extension = $upload->extension;
			$u->hash = $upload->hash;
			$u->public = $upload->public;
			$u->caption = $upload->caption;
			$u->path = $upload->path;

			$uploads2[] = $u;
		}
		return response()->json(['uploads' => $uploads2]);
	}

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
		$img = $this->uploaded_files();
        $roleCount = \App\Role::count();
		if($roleCount != 0) {
			if($roleCount != 0) {

				return View::make('home')->with('img', $img);

			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
        }
    }
}

<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\View;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $nbImages = count($this->uploaded_files());
        return View::make('la.dashboard')->with('nbImages', $nbImages);
    }
}

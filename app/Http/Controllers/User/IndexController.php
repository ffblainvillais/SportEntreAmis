<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Establishment;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class IndexController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function indexAction()
    {
        return view('user/index');
    }

    public function createEstablishmentPageAction()
    {
        return view('user/create-establishment');
    }

    public function createEstablishmentAction(Request $request)
    {
        $establishmentModel = new Establishment();
        $postParams         = $request->all();

        $establishment = $establishmentModel->createEstablishment($postParams['name'], $postParams['address']);

        if ($establishment) {
            //Store::flash('flash_message','');
        }

        return redirect('user');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

/**
 * Models
 */
use App\SeatTrackers;


/**
 * Helpers
 */
use Illuminate\Support\Facades\Request;


class SeatTrackersController extends Controller
{
 	/**
 	 * Handles listing of tutorials
 	 * @return [type] [description]
 	 */
    public function index()
    {
       

    }

    /**
     * Load create page
     * @return [type] [description]
     */
    public function create()
    {

    }

    /**
     * Handles saving 
     * @return [type] [description]
     */
    public function store()
    {
        $input = Request::all();

        $model = new SeatTrackers;
        $result = $model->setAttributesAndSave($input);
        
        $success = $result['success'];
        $data = $result['data'];
        $errors = $result['errors'];

        if ($success) {
            return redirect('admin/game/index');
        } else {
            return view('errors.error500');
        }
    }

    /**
     * Show by details
     * @return [type] [description]
     */
    public function show($id)
    {
    
    }

    /**
     * Load edit page
     * @return [type] [description]
     */
    public function edit($id)
    {
    	
    }

    public function update($id)
    {
        
    }
}
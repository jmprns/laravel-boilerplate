<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Purok;
use App\Models\Citizen;
use App\Models\Household;
use App\Models\Appointment;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard');
    }
}

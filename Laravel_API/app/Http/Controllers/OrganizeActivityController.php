<?php
namespace App\Http\Controllers;

use App\Models\OrganizeActivity;


class OrganizeActivityController extends Controller
{
    public function index()
    {
        $activities = OrganizeActivity::join('users', 'users.id', '=', 'organize_activities.member_id')
            ->join('activities', 'activities.activity_id', '=', 'organize_activities.activity_id')
            ->select('activities.*', 'users.name')
            ->get();
        
        return response()->json($activities);
    }
}
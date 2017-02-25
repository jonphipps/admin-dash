<?php

namespace App\Queries\GridQueries;

use DB;
use App\Queries\GridQueries\Contracts\DataQuery;

class UserQuery implements DataQuery
{
    public function data($column, $direction)
    {
        $rows = DB::table('users')
              ->select('id as Id',
                       'name as Name',
                       'email as Email',
                       DB::raw('DATE_FORMAT(created_at,"%m-%d-%Y") as Joined'))
              ->orderBy($column, $direction)
              ->paginate(10);

        return $rows;

    }

    public function filteredData($column, $direction, $keyword)
    {
        $rows = DB::table('users')
                ->select('id as Id',
                         'name as Name',
                         'email as Email',
                DB::raw('DATE_FORMAT(created_at,"%m-%d-%Y") as Joined'))
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('email', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

        return $rows;

    }
}
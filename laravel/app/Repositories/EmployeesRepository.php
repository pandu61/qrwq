<?php

namespace App\Repositories;

use App\Models\Employees;
use Str;

class EmployeesRepository {

    public static function getAll($perPage = 5) {
        return Employees::simplePaginate($perPage);
    }

    public static function getByPk($id) {
        return Employees::find($id);
    }

    public static function create($request) {
        $employe = new Employees;
        $employe->nama = $request->nama;
        $employe->email = $request->email;
        $employe->company = $request->company;
        $employe->save();

        return $employe;
    }

    public static function update($request) {
        $employe = self::getByPk($request->id);
        $employe->nama = $request->nama;
        $employe->email = $request->email;
        $employe->company = $request->company;
        $employe->save();

        return $employe;
    }

    public static function delete($request) {
        $employe = self::getByPk($request->id);
        $employe->delete();
       
        return $employe;
    }

    public static function getByCompany($request) {
        return Employees::where('company', $request->id)->get();
    }
}
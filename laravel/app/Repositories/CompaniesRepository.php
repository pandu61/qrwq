<?php

namespace App\Repositories;

use App\Models\Companies;
use Str;

class CompaniesRepository {

    public static function getAll($perPage =5) {
        return Companies::simplePaginate($perPage);
    }

    public static function getByPk($id) {
        return Companies::find($id);
    }

    public static function create($request) {
        $company = new Companies;
        $company->email = $request->email;
        $company->nama = $request->nama;
        $company->website = $request->website;
        $company->logo =  $request->file('logo')->store('company');
        $company->save();

        return $company;
    }

    public static function update($request) {
        $company = self::getByPk($request->id);
        $company->email = $request->email;
        $company->nama = $request->nama;
        $company->website = $request->website;
        $company->logo =  $request->file('logo')->store('company');
        $company->save();

        return $company;
    }

    public static function delete($request) {
        $company = self::getByPk($request->id);
        $company->delete();

        return $company;
    }
}
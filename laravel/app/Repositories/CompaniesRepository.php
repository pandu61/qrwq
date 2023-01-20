<?php

namespace App\Repositories;

use App\Models\Companies;
use Str;

class CompaniesRepository {

    public static function getAll() {
        return Companies::simplePaginate(5);
    }

    public static function getByPk($id) {
        return Companies::find($id);
    }

    public static function create($request) {
        $company = new Companies;
        $company->email = $request->email;
        $company->name = $request->name;
        $company->website = $request->website;
        $company->logo =  $request->file('logo')->store('company');
        $company->save();

        return $company;
    }

    public static function update($request) {
        $company = self::getByPk($request->id);
        $company->email = $request->email;
        $company->name = $request->name;
        $company->website = $request->website;
        $company->logo =  $request->file('logo')->store('company');
        $company->save();

        return $company;
    }
}
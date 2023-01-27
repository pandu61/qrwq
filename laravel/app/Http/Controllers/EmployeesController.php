<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeesRequest;
use App\Repositories\EmployeesRepository;
use App\Repositories\CompaniesRepository;

class EmployeesController extends Controller
{
    public function index() {
        $employees = EmployeesRepository::getAll();
        return view('pages.employee.index', ['employees' => $employees]);
    }

    public function create() {
        return view('pages.employee.create');
    }

    public function store(EmployeesRequest $request) {
        $employee = EmployeesRepository::create($request);
        return redirect()->route('employees-index');
    }

    public function edit(Request $request) {
        $employee = EmployeesRepository::getByPk($request->id);
        return view('pages.employee.update', ['employee' => $employee]);
    }

    public function update(EmployeesRequest $request) {
        $employee = EmployeesRepository::update($request);
        return redirect()->route('employees-index');
    }

    public function delete(Request $request) {
        $employee = EmployeesRepository::delete($request);
        return redirect()->route('employees-index');
    }

    public function listCompany() {
        $companies =  CompaniesRepository::getAll();
        return view('pages.employee._listCompany', ['companies' => $companies]);
    }
}
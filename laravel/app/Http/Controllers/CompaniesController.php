<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompaniesRepository;
use App\Http\Requests\ComapaniesRequest;
use App\Repositories\EmployeesRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CompaniesExport;

class CompaniesController extends Controller
{
    public function index() {
        $companies = CompaniesRepository::getAll();
        
        return view('pages.company.index', [
            'companies' => $companies
        ]);
    }

    public function create() {
        return view('pages.company.create');
    }

    public function store(ComapaniesRequest $request) {
        $companies = CompaniesRepository::create($request);
        return redirect()->route('companies-index');
    }

    public function edit(Request $request) {
        $company = CompaniesRepository::getByPk($request->id);
        return view('pages.company.update', [
            'company' => $company
        ]);
    }

    public function update(ComapaniesRequest $request) {
        $companies = CompaniesRepository::update($request);
        return redirect()->route('companies-index');
    }

    public function delete(Request $request) {
        $companies = CompaniesRepository::delete($request);
        return redirect()->route('companies-index');
    }

    public function pdf(Request $request) {
        $employees = EmployeesRepository::getByCompany($request);
        $pdf = Pdf::loadView('pages.company._listCompany', ['employees' => $employees]);
        return $pdf->download('employee.pdf');
    }

    public function excel(Request $request) {
        return Excel::download(new CompaniesExport, 'companies.xlsx');
    }
}

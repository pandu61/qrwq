<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompaniesRepository;
use App\Http\Requests\ComapaniesRequest;

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
}

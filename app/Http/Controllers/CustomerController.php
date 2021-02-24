<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.listAllCustomers', compact('customers'));
    }

    public function create()
    {
        return view('customers.newCustomer');
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->all());
        return redirect()->route('customer.index');
    }

    public function show(Customer $customer)
    {
        return view('customers.listCustomer', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.updateCustomer', compact('customer'));
    }

    public function update(StoreCustomerRequest $request, Customer $customer)
    {
        Customer::where('id', $customer->id)->update($request->except('_token', '_method'));
        return redirect()->route('customer.index');
    }

    public function destroy(Customer $customer)
    {
        if ($customer->services->count()){
            return back()->withErrors('Não foi possível excluir. Existe um serviço associado a esse cliente.');
        }
        $customer->delete();
        return redirect()->route('customer.index');
    }
}

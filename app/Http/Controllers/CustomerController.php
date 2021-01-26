<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.listAllCustomers', [
            'customers' => $customers
        ]);
    }

    public function create()
    {
        return view('customers.newCustomer');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customer.index');
    }

    public function show(Customer $customer)
    {
        return view('customers.listCustomer', [
            'customer' => $customer
        ]);
    }

    public function edit(Customer $customer)
    {
        return view('customers.updateCustomer', [
            'customer' => $customer
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        Customer::where('id', $customer->id)->update($request->except('_token', '_method'));
        return redirect()->route('customer.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}

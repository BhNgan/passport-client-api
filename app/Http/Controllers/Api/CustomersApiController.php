<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;

use  App\Http\Controllers\Controller;

class CustomersApiController extends Controller
{
    /**
     * GetListCustomer
     */
    public function index()
    {
        $customers = Customer::paginate(25);

        return response()->json($customers, 200);
    }

    /**
     * CreateCustomer.
     */
    public function store(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:12',
        ]);

        $customer = Customer::create($request->all());

        return response()->json($customer, 201);
    }

    /**
     * GetCustomerById
     */
    public function show(string $id)
    {
        try {
            $customer = Customer::findOrFail($id);

            return response()->json($customer, 200);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json("NOTFOUND", 404);
        }
    }

    /**
     * UpdateCustomer.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:12',
        ]);


        try {
            $customer = Customer::findOrFail($id);
            $customer->update($request->all());

            return response()->json($customer, 201);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json("NOTFOUND", 404);
        }

    }

    /**
     * DeleteCustomer.
     */
    public function destroy(string $id)
    {

        try {
            $customer = Customer::findOrFail($id);
            $customer->delete();

            return response()->json($customer, 201);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json("NOTFOUND", 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$customer = Customer::all();
        return view('customers.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('customers.create');
    }
	
	// call 3rd party 
	public function create_customer()

    {
        
        $ch = curl_init("https://swapi.dev/api/people/ ");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$result = curl_exec($ch); 
		curl_close($ch);
		
		$dataObject = json_decode($result, true);
		$count = count($dataObject['results']);
		for($i=0; $i<$count; $i++)
		{
		$customer = new Customer;  
        $customer->name =  $dataObject['results'][$i]['name'];  
        $customer->hair_color =  $dataObject['results'][$i]['hair_color'];  
        $customer->skin_color =  $dataObject['results'][$i]['skin_color'];  
        $customer->eye_color =  $dataObject['results'][$i]['eye_color'];  
        $customer->height =  $dataObject['results'][$i]['height'];  
        $customer->mass =  $dataObject['results'][$i]['mass'];  
        $customer->save();  
		}
		return redirect()->route('customers.index');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer= Customer::find($id);  
        return view('customers.edit', compact('customer'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $customer = Customer::find($id);  
        $customer->name =  $request->name;  
        $customer->hair_color =  $request->hair_color;   
        $customer->skin_color =  $request->skin_color;  
        $customer->eye_color =  $request->eye_color;   
        $customer->height =  $request->height;  
        $customer->mass =  $request->mass;  
        $customer->save();  
        
        
		return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=Customer::find($id);  
        $crud->delete();  
		return redirect()->route('customers.index');
    }
}

<?php namespace Nixzen\Http\Controllers\Transaction;

use Nixzen\Http\Requests;
use Nixzen\Http\Controllers\Controller;
use Nixzen\Repositories\PurchaseOrderRepository as PurchaseOrder;

use Illuminate\Http\Request;

class PurchaseOrderController extends Controller {

	private $purchaseorder;

	public function __construct(PurchaseOrder $purchaseorder){
		$this->purchaseorder = $purchaseorder;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseorders = $this->purchaseorder->all();
		
		return view('purchaseorder.index')->with('purchaseorders',$purchaseorders);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('purchaseorder.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePurchaseOrderRequest $request)
	{
		$inputs = $request->only(
			'vendor', 
			'terms', 
			'type', 
			'date', 
			'paymenttype', 
			'remarks', 
			'items'
		);
		
		$createPurchaseOrder = new CreatePurchaseOrderCommand(
			$input['vendor'],
			$input['terms'],
			$input['type'],
			$input['date'],
			$input['paymenttype'],
			$input['remarks'],
			$input['items']
		);

		$purchaseorder = $this->dispatch($createPurchaseOrder);

		return redirect()->route('purchaseorder.show', $purchaseorder->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseorder = $this->purchaseorder->find($id);
		return view('purchaseorder.show')->with('purchaseorder',$purchaseorder);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$purchaseorder = $this->purchaseorder->find($id);
		return view('purchaseorder.edit')->with('purchaseorder',$purchaseorder);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inputs = $requests->only('vendor', 'date', 'type', 'remarks', 'items');
		$updatePurchaseOrder = new UpdatePurchaseOrderCommand(
			$id,
			$inputs['vendor'],
			$inputs['type'],
			$inputs['date'],
			$inputs['remarks'],
			$inputs['items']
		);
		$this->dispatch($updatePurchaseOrder);

		return redirect()->route('purchaseorder.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->purchaseorder->delete($id);
		return redirect()->route('purchaseorder.index');
	}

}

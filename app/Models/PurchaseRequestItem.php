<?php namespace Nixzen;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequestItem extends Model {

	protected $table = 'purchase_request_items';

	public function canvass()
	{
		return $this->hasMany('Nixzen\Canvass', 'purchaserequestitem_id');
	}

	public function purchaserequisition()
	{
		return $this->belongsTo('Nixzen\PurchaseRequest', 'purchaserequisition_id');
	}

	public function item()
	{
		return $this->belongsTo('Nixzen\Item', 'name');
	}

	public function unit()
	{
		return $this->belongsTo('Nixzen\Unit', 'unit_id')
	}

	public function vendor()
	{
		return $this->belongsTo('Nixzen\Vendor', 'vendor_id');
	}

	public function term()
	{
		return $this->belongsTo('Nixzen\Terms', 'term_id');
	}

	public function taxcode()
	{
		return $this->belongsTo('Nixzen\Taxcode', 'taxcode');
	}

	public function createby()
	{
		return $this->belongsTo('Nixzen\Employee', 'created_by');
	}

	public function updatedby()
	{
		return $this->belongsTo('Nixzen\Employee', 'updated_by');
	}

}
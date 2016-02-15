<?php namespace Nixzen\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model {

	protected $table = 'purchase_requests';

	protected $fillable = [
		'requested_by', 
		'joborder_id', 
		'delivered_to', 
		'division_id',
		'purchaserequestcategory_id',
		'approvalstatus_id',
		'total_amount',
	];

	public function purchaserequestcategory()
	{
		return $this->belongsTo('Nixzen\PurchaseRequestCategory',
								'purchaserequestcategory_id');
	}

	public function role()
	{
		return $this->belongsTo('Nixzen\Role', 'nextapprover_role');
	}

	public function division()
	{
		return $this->belongsTo('Nixzen\Models\Lists\Division', 'division_id');
	}

	public function department()
	{
		return $this->belongsTo('Nixzen\Models\Department', 'department_id');
	}

	public function joborder()
	{
		return $this->belongsTo('Nixzen\Models\JobOrder', 'joborder_id');
	}

	public function requestedby()
	{
		return $this->belongsTo('Nixzen\Models\Lists\Employee', 'requested_by');
	}

	public function approval()
	{
		return $this->belongsTo('Nixzen\Models\ApprovalStatus', 'approvalstatus_id');
	}

	public function createby()
	{
		return $this->belongsTo('Nixzen\Models\Employee', 'created_by');
	}

	public function updatedby()
	{
		return $this->belongsTo('Nixzen\Models\Employee', 'updated_by');
	}

	public function recordType(){
		return $this->belongsTo('Nixzen\Models\RecordType', 'recordtype_id');
	}

	public function items(){
		return $this->hasMany('Nixzen\Models\PurchaseRequestItem', 'purchaserequisition_id');
	}

	public function activeWorkflow(){
		
		return $this->hasMany('Nixzen\Models\ActiveWorkflow', 'record_id')
					->where('recordtype_id', $this->recordtype);
	}
}

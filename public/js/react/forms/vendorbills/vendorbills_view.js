window.VendorBillMainComponent = React.createClass({
    getDefaultProps : function () {
        return {
            data:[],
            context:''
        };
    },
    getInitialState : function () {
        return {
            data:{},
            type:'',
            date:'',

            asset: '',
            requested_by: '',
            maintenancetype_id: '',
            prcategory_id: '',



            billtype_nontrade_subtype_id: '',
            duedate: '',
            coa_id: '',

            posting_period_id: '',
            items: '',
            expenses: '',
            transno: '',
            context: '',

            vendor_id: (typeof this.props.data.vendor_id=='undefined') ? '' : this.props.data.vendor_id,
            department_id: (typeof this.props.data.department_id=='undefined') ? '' : this.props.data.department_id,
            division_id: (typeof this.props.data.division_id=='undefined') ? '' : this.props.data.division_id,
            branch_id: (typeof this.props.data.prcategory_id=='undefined') ? '' : this.props.data.branch_id,

            suppliers_inv_no: (typeof this.props.data.suppliers_inv_no=='undefined') ? '' : this.props.data.suppliers_inv_no,
            terms_id: (typeof this.props.data.terms_id=='undefined') ? '' : this.props.data.terms_id,
            approvalstatus_id: (typeof this.props.data.approvalstatus_id=='undefined') ? '' : this.props.data.approvalstatus_id,
            memo: (typeof this.props.data.memo=='undefined') ? '' : this.props.data.memo
        };
    },
    handleChangeCallBack : function (obj) {
        this.setState(obj);
    },
    render : function () {
        return (
            <div>
                <div className="box box-primary">
                    <div className="box-header with-border">
                        <h3 className="box-title">Primary Information</h3>
                    </div>

                    <VendorBillPrimaryComponent context={this.props.context} defaultValues={this.state} callBackParent={this.handleChangeCallBack} />
                </div>

                <div className="nav-tabs-custom">
                    <ul className="nav nav-tabs">
                        <li className="active"><a href="#tab_1" data-toggle="tab">Item</a></li>
                        <li><a href="#tab_2" data-toggle="tab">File</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Notes</a></li>
                    </ul>
                    <div className="tab-content">
                        <div className="tab-pane active" id="tab_1">

                            <VENDORTable callBackParent={this.handleCallBackLine}
                            data={this.props.items}
                            pr_id={this.state.pr_id}
                            context={this.props.context} />

                        </div>
                        <div className="tab-pane" id="tab_2"> </div>
                        <div className="tab-pane" id="tab_3"> </div>
                    </div>
                </div>

            </div>
            );
    }
});

window.Wrapper = React.createClass({
    render : function () {
        return(
            <div className="row">
                <div className="col-md-12">
					{ this.props.children }
                </div>
            </div>
            );
    }
});

window.FieldContainer = React.createClass({
    render : function () {
        return( <div className="col-md-4 col-sm-6 col-xs-12"> {this.props.children} </div> );
    }
});

window.VendorBillPrimaryComponent = React.createClass({
    handleChangeCallBack : function (obj) {
        this.props.callBackParent(obj);
    },
    getDefaultProps : function () {
        return { defaultValues:{}, context: '' }
    },
    getInitialState : function () {
        return {
            data:{}
        };
    },
    componentDidMount : function () {
        this.request = $.get(base_url+'/ajax/job/request', function (response) {
            this.setState({data:response});
        }.bind(this));
    },
    componentWillUnmount : function () {
        this.request.abort();
    },
    render : function () {
        return (
            <Wrapper>
                <FieldContainer>



                    <TextMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.suppliers_inv_no}
                    attributes={{name:"suppliers_inv_no", label:"SUPPLIER'S INVOICE NO"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.vendor_id}
                    attributes={{name:"vendor_id", label:"VENDOR"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.billtype_id}
                    attributes={{name:"billtype_id", label:"BILL TYPE"}} />


                    <DateMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.duedate}
                    attributes={{name:"duedate", label:"DUE DATE"}} />


                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.approvalstatus_id}
                    attributes={{name:"approvalstatus_id", label:"APPROVAL STATUS"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.items}
                    attributes={{name:"items", label:"ITEMS"}} />

                </FieldContainer>

                <FieldContainer>


                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.department_id}
                    attributes={{name:"department_id", label:"DEPARTEMENT"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.division_id}
                    attributes={{name:"division_id", label:"DIVISION"}} />


                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.branch_id}
                    attributes={{name:"branch_id", label:"BRANCH"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.coa_id}
                    attributes={{name:"coa_id", label:"COA ID"}} />


                    <TextAreaMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.memo}
                    attributes={{name:"memo", label:"MEMO"}} />

                    <TextMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.transno}
                    attributes={{name:"transno", label:"SUPPLIER'S INVOICE NO"}} />




                </FieldContainer>


                <FieldContainer>

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.terms_id}
                    attributes={{name:"terms_id", label:"TERM"}} />

                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.billtype_nontrade_subtype_id}
                    attributes={{name:"billtype_nontrade_subtype_id", label:"NONE TRADE"}} />

                    <DateMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.date}
                    attributes={{name:"date", label:"DATE"}} />


                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.terms_id}
                    attributes={{name:"terms_id", label:"TERMS"}} />



                    <SelectMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    source={base_url+'/ajax/getItems'}
                    defaultValue={this.props.defaultValues.posting_period_id}
                    attributes={{name:"posting_period_id", label:"POSTING PERIOD ID"}} />


                    <TextMainComponent callBackParent={this.handleChangeCallBack}
                    context={this.props.context}
                    defaultValue={this.props.defaultValues.expenses}
                    attributes={{name:"expenses", label:"EXPENSES"}} />

                </FieldContainer>


            </Wrapper>


            );
    }
});




window.VENDORTable = React.createClass({
	getDefaultProps : function () {
		return {
			editLineItem:false,
			data:[],
			pr_id:''
		};
	},
	getInitialState : function () {
		var dataStorage = [];
		var rows=[];
		if(this.props.data.length!=0) {
			dataStorage = this.props.data;
			rows=[];
			for(var i=0, counter=dataStorage.length; i<counter; i++) {
				rows[i] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={dataStorage[i]}
							id={i}
							key={i}
							pr_id={this.props.pr_id}
							context={this.props.context}
							handleCallBackParentClick={this.handleCallBackClick} />
			}
		}
		return {
			editLineItem:this.props.editLineItem,
			dataStorage:dataStorage,
			rows:rows,
			item_id:'',
			unit_id:'',
			description:'',
			item_label:'',
			uom_label:'',
			quantity:'',
			pr_id:this.props.pr_id
		};
	},
	_initial_data : function () {
		var state = {};
			state.item_id = '';
			state.item_label='';
			state.description='';
			state.uom_label='';
			state.unit_id = ''
			state.quantity='';
		return state;
	},
	render : function () {
		if(this.props.context=='view') {
			return (
				<div className="tableWrapper">
					<table className="table table-bordered react-table" style={{overflow:'auto'}}>
					<thead>
						<tr>
							<th>Item</th>
							<th>Description</th>
							<th>Units</th>
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
						{this.state.rows.map(function (row){
							return row
						})}
					</tbody>
					</table>
				</div>
			);
		} else {
			var that = this;
			return (
				<div className="tableWrapper">
					<DataStorage data={this.state.dataStorage} name="items" />
					<table className="table table-bordered react-table" style={{overflow:'auto'}}>
					<thead>
						<tr>
							<th>Item</th>
							<th>Description</th>
							<th>Units</th>
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
						{this.state.rows.map(function (row){
							return row
						})}
						
						{!this.state.editLineItem && (
							<TableRow callBackParent={this.handleCallBack}
							create={true}
							id={this.state.rows.length}
							defaultValues={this.state} />
						)}
						
						<tr>
							<td colSpan='4'>
								{!this.state.editLineItem && (<input type={"button"} style={{width:'auto', marginRight:'5px'}}  value={"Add"} className={"btn btn-primary btn-flat"} onClick={that.handleAdd} /> )}
								{!this.state.editLineItem && (<input type={"button"} style={{width:'auto', marginRight:'5px'}} value={"Cancel"} className={"btn btn-default btn-flat"} onClick={that.handleCancel} /> )}
								{this.state.editLineItem && (<input type={"button"} style={{width:'auto', marginRight:'5px'}}  value={"Add New"} className={"btn btn-info btn-flat"} onClick={that.handleCancel} /> )}
							</td>
						</tr>
					</tbody>
					</table>
				</div>
			);
		}
	},
	handleCallBack : function (obj) {
		if(obj.context=='create') {
			this.setState(obj);
		} else {
			var rows = this.state.rows;
			var state = this.state;
			
			switch(obj.name) {
				case "item_id":
						state.item_id = obj.item_id;
						state.description = obj.description;
						state.item_label = obj.item_label;
					break;
				case "unit_id":
						state.unit_id = obj.unit_id;
						state.uom_label = obj.uom_label;
					break;
				case "quantity":
						state.quantity=obj.quantity;
					break;	
			}
			rows[obj.id] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={state}
							edit={true}
							id={obj.id}
							handleCallBackParentClick={this.handleCallBackClick} />
			this.setState(state);
			this.setState({rows:rows});
		}

	},
	handleAdd : function () {
		var rows = this.state.rows;
		var dataStorage = this.state.dataStorage;
		rows.push( <TableRow callBackParent={this.handleCallBack}
					defaultValues={this.state} id={rows.length} key={rows.length} handleCallBackParentClick={this.handleCallBackClick}/> );
		var obj = {
			item_id:this.state.item_id,
			item_label:this.state.item_label,
			description: this.state.description,
			unit_id:this.state.unit_id,
			uom_label:this.state.uom_label,
			quantity:this.state.quantity
		};
		dataStorage.push(obj);
		this.setState(this._initial_data()); //empty state values
		this.setState({rows:rows, dataStorage:dataStorage});
		this.props.callBackParent(dataStorage);
	},
	handleCallBackClick : function (id) {
		if(this.props.context!='view'){
		var elemArr = id.split('-');
		var rowid = parseInt(elemArr[1]-1);
		var rows = this.state.rows;
		var dataStorage = this.state.dataStorage;
		rows.length=0;

		for(var i=0, counter=dataStorage.length; i<counter; i++) {
			if(i==rowid) {
				rows[i] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={dataStorage[i]}
							edit={true}
							id={i}
							key={i}
							handleCallBackParentClick={this.handleCallBackClick} />
			} else {
				rows[i] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={dataStorage[i]}
							id={i}
							key={i}
							handleCallBackParentClick={this.handleCallBackClick} />
			}
		}
		rows.splice(elemArr[1], 0, (<UpdateButtons
									dataIndex={rowid}
									callbackUpdate={this.handleUpdate}
									callbackCancel={this.handleCancel}
									callbackRemove={this.handleRemove}/>));
		var state = this.state;
		state.item_id = dataStorage[rowid].item_id;
		state.item_label = dataStorage[rowid].item_label;
		state.unit_id = dataStorage[rowid].unit_id;
		state.uom_label = dataStorage[rowid].uom_label;
		state.description = dataStorage[rowid].description;
		state.quantity = dataStorage[rowid].quantity;
		this.setState(state);

		this.setState({rows:rows, editLineItem:true});
	}
	},
	handleUpdate : function (id) {
		var dataStorage = this.state.dataStorage;
		var rows = this.state.rows;
		rows.length=0;
		dataStorage[id] = {
			item_id:this.state.item_id,
			item_label:this.state.item_label,
			description: this.state.description,
			unit_id:this.state.unit_id,
			uom_label:this.state.uom_label,
			quantity:this.state.quantity
		};

		for(var i=0, counter=dataStorage.length; i<counter; i++) {
			rows[i] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={dataStorage[i]}
							id={i}
							key={i}
							handleCallBackParentClick={this.handleCallBackClick} />
		}
		this.setState(this._initial_data()); //empty state values
		this.setState({rows:rows, dataStorage:dataStorage, editLineItem:false});
		this.props.callBackParent(dataStorage);
	},
	handleRemove : function (id) {
		var dataStorage = this.state.dataStorage;
		dataStorage.splice(id,1);
		var rows = this.state.rows;
		rows.length=0;
		for(var i=0, counter=dataStorage.length; i<counter; i++) {
			rows[i] = <TableRow callBackParent={this.handleCallBack}
							defaultValues={dataStorage[i]}
							id={i}
							key={i}
							handleCallBackParentClick={this.handleCallBackClick} />
		}

		this.setState(this._initial_data()); //empty state values
		this.setState({rows:rows, dataStorage:dataStorage, editLineItem:false});
	},
	handleCancel : function () {
		if(this.state.editLineItem) {
			var rows = this.state.rows;
			var dataStorage = this.state.dataStorage;
			rows.length=0;
			for(var i=0, counter=dataStorage.length; i<counter; i++) {
				rows[i] = <TableRow callBackParent={this.handleCallBack}
								defaultValues={dataStorage[i]}
								id={i}
								key={i}
								handleCallBackParentClick={this.handleCallBackClick} />
			}
			this.setState(this._initial_data()); //empty state values
			this.setState({rows:rows, dataStorage:dataStorage, editLineItem:false});
		} else {
			this.setState(this._initial_data()); //empty state values
		}
	}
});

window.UpdateButtons = React.createClass({
	handleUpdate : function () {
		this.props.callbackUpdate(this.props.dataIndex);
	},
	handleCancel : function () {
		this.props.callbackCancel();
	},
	handleRemove : function () {
		this.props.callbackRemove(this.props.dataIndex);
	},
	render : function () {
		return (
				<tr colSpan="4"><td colSpan="4">
					<input type={"button"} style={{width:'auto', marginRight:'5px'}} onClick={this.handleUpdate} value={"OK"} className={"btn btn-primary btn-flat"}/>
					<input type={"button"} style={{width:'auto', marginRight:'5px'}} onClick={this.handleCancel} value={"Cancel"} className={"btn btn-default btn-flat"}/>
					<input type={"button"} style={{width:'auto', marginRight:'5px'}} onClick={this.handleRemove} value={"Remove"} className={"btn btn-default btn-flat"}/>
				</td></tr>
		);
	}
});

window.TableRow = React.createClass({
	getDefaultProps : function () {
		return {
			create:false,
			edit:false,
			id:'',
			pr_id:'',
			context:''
		}
	},
	render : function () {
		if(this.props.context=='view') {
			return (
				<tr>
					<td>{this.props.defaultValues.item_label}</td>
					<td>{this.props.defaultValues.description}</td>
					<td>{this.props.defaultValues.uom_label}</td>
					<td>{this.props.defaultValues.quantity}</td>

				</tr>
			);
		} else {
			if(this.props.create) {
				return (
					<tr id={"item-"+parseInt(this.props.id+1)}>
						<Item callBackParent={this.handleCallBack} 
						source={base_url+'/ajax/getItems'}
						defaultValue={this.props.defaultValues.item_id} />

						<Description callBackParent={this.handleCallBack} 
						defaultValue={this.props.defaultValues.description} />

						<UOM callBackParent={this.handleCallBack} 
						source={base_url+'/ajax/getUOM/'+this.props.defaultValues.item_id}
						defaultValue={this.props.defaultValues.unit_id} />

						<Quantity callBackParent={this.handleCallBack} 
						defaultValue={this.props.defaultValues.quantity}
						attributes={{name:"quantity"}} />
					</tr>
				);
			} else {
				if(this.props.edit) {
					return (
					<tr id={"item-"+parseInt(this.props.id+1)}>
						<Item callBackParent={this.handleCallBack}
						source={base_url+'/ajax/getItems'}
						defaultValue={this.props.defaultValues.item_id}  />

						<Description callBackParent={this.handleCallBack} 
						defaultValue={this.props.defaultValues.description} />

						<UOM callBackParent={this.handleCallBack}
						source={base_url+'/ajax/getUOM/'+this.props.defaultValues.item_id}
						defaultValue={this.props.defaultValues.unit_id} />

						<Quantity callBackParent={this.handleCallBack}
						defaultValue={this.props.defaultValues.quantity}
						attributes={{name:"quantity"}} />
					</tr>
					);
				} else {
					return (
						<tr onClick={this.handleClick} id={"item-"+parseInt(this.props.id+1)}>
							<td>{this.props.defaultValues.item_label}</td>
							<td>{this.props.defaultValues.description}</td>
							<td>{this.props.defaultValues.uom_label}</td>
							<td>{this.props.defaultValues.quantity}</td>
						</tr>
					);
				}
			}
		}
	},
	displayModal : function (defaultValues, evt) {
		console.log(defaultValues);
		ReactDOM.render(<CanvassComponent callBackParent={this.handleCallBackLine}
							defaultValues={defaultValues}
				            context='create' />, document.getElementById('myModal'));
	},
	handleSaveCanvass : function (data) {
		console.log(data);
	},
	handleClick : function (evt) {
		this.props.handleCallBackParentClick(evt.currentTarget.id);
	},
	handleCallBack : function (obj) {
		if(this.props.create){
			obj.context = 'create';
		} else {
			obj.context = 'edit';
			obj.id = this.props.id;
		}
		this.props.callBackParent(obj);
	}
});

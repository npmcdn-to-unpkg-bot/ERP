window.REPAIR_TYPE = React.createClass({
	getDefaultProps : function () {
		return {
			defaultValue : ''
		};
	},
	getInitialState : function () {
		return { 
			data:[],
			defaultValue:this.props.defaultValue,
			placeholder:''
		};
	},
	componentDidMount : function () {
			this.request = $.ajax({
				url:this.props.source,
				dataType: 'json',
				type:'GET',
				beforeSend : function () {
					this.setState({placeholder:'loading...'});
				}.bind(this),
				success : function (response) {
					var data=this.state.data;
					data.length=0;
					for(var i in response) {
						data.push({value:response[i].value, label:response[i].label});
					}
					this.setState({data : data, placeholder:'Choose Units'});
				}.bind(this)
			});
	},
	componentWillUnmount : function () {
		this.request.abort();
	},
	componentWillReceiveProps : function (nextprops) {
		this.setState({defaultValue:nextprops.defaultValue});
		return $.ajax({
			url:nextprops.source,
			dataType: 'json',
			type:'GET',
			beforeSend : function () {
				this.setState({placeholder:'loading...'});
			}.bind(this),
			success : function (response) {
				var data=this.state.data;
				data.length=0;
				for(var i in response) {
					data.push({value:response[i].value, label:response[i].label});
				}
				this.setState({data : data, placeholder:'Choose Units'});
			}.bind(this)
		});
		
	},
	handleChange : function (event) {
		var obj = {};
<<<<<<< HEAD
		obj.name = 'unit_id';
		obj['unit_id'] = event.value;
		obj['REPAIR_TYPE_label'] = event.label;
=======
		obj.name = 'jobtype_id';
		obj['jobtype_id'] = event.value;
		obj['jobtype_label'] = event.label;
>>>>>>> job_order_views
		this.props.callBackParent(obj);
	},
	render : function () {
		return(
			<td>
				<Select onChange={this.handleChange} 
<<<<<<< HEAD
                id='unit_id'
                className="react-select-input-mainline" 
                name='unit_id'
=======
                id='jobtype_id'
                className="react-select-input-mainline" 
>>>>>>> job_order_views
                value={this.state.defaultValue}
                options={this.state.data} 
                placeholder={this.state.placeholder} 
                clearable={false} />
	        </td> 
	    );
	}
});
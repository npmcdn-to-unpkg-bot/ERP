window.TotalAmount = React.createClass({
	getDefaultProps : function () {
		return {
			defaultValue : '',
			name:'',
			label:''
		};
	},
	handleChange : function (event) {
		var obj = {};
		obj[this.props.attributes.name] = event.target.value;
		this.props.callBackParent(obj);
	},
	render : function () {
		return (
			<div className="row">
			<div className="box-body">
			<div className="form-group">
                <label for={this.props.attributes.id}>{this.props.attributes.label}</label>
            	<input onChange={this.handleChange} 
            	type="text" 
            	value={this.props.defaultValue} 
            	name={this.props.attributes.name} 
            	id={this.props.attributes.name} 
            	className="form-control" />	
            </div>	
            </div>
            </div>
        );
	}
});
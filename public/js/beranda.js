class UpdateSection extends React.Component {
  constructor(props) {
    super(props);
    this.update = this.update.bind(this);
    this.tombol = this.tombol.bind(this);
  }
  update(e){
    this.props.action(e.target.value);
  }
  tombol(){
    this.props.send();
  }
  render(){
    return <div className="row update">
  		<div className="container">
  		 	<div className="col-md-12">
  				<form>

  					<textarea className="form-control form-input" value={this.props.value} onChange={this.update} placeholder="Update status..."></textarea>
  					<div className="col-md-2 col-lg-2 col-sm-2 col-md-offset-10 col-sm-offset-10 col-lg-offset-10 tombol-left">
  						<a className="btn btn-primary btn-large btn-update" type="submit" onClick={this.tombol} >UPDATE </a>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>;
  }
}

function FriendStatus(props){
  return <div className="row status-list">
    <div className="col-md-12 col-sm-12">
      <div className="col-md-2 col-xs-4 col-sm-2 gambar">
        <img src={props.image}/>
      </div>
      <div className="col-md-10 col-xs-8 col-sm-10">
        <h3>{props.name}</h3>
        <p>{props.status}</p>
      </div>
    </div>
  </div>
}
function OwnStatus(props){
  return <div className="row own">
    <div className="col-md-12 col-sm-12">
      <div className="col-md-10 col-xs-8 col-sm-8">
        <h3>{props.name}</h3>
        <p>{props.status}</p>
      </div>
      <div className="col-md-2 col-xs-4 col-sm-4 gambar">
        <img src={props.image}/>
      </div>
    </div>
  </div>
}
function StatusList(){

}
function StatusSection(props){
  var list=[];
  props.data.forEach(data => {
    if (data.type === "me") {
      list.push(<OwnStatus name={data.name} status={data.status} image={data.image} key={data.id} />)
    }
    list.push(<FriendStatus name={data.name} status={data.status} image={data.image} key={data.id} />)
  })
  return <div className="row status">
    <div className="container">
      {list}
    </div>
  </div>
}
class App extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      status:[],
      update:"",
    };
    this.update = this.update.bind(this);
    this.send = this.send.bind(this);
  }
  componentDidMount(){
    $.get("/data",function(res) {
      this.setState({
        status: res
      });
      console.log(res);
    }.bind(this));
  }
  update(status){
    this.setState({
      update:status,
    });
  }
  send(){
    $.post('/tambah',{'status':this.state.update},function(res){
      this.componentDidMount();
    }.bind(this));
  }
  render() {
    return (<div>
      <UpdateSection value={this.state.update} action={this.update} send={this.send} />
      <StatusSection data={this.state.status} />
    </div>)
  }
}
var status =[{"id":1,"name":"Teman 1","status":"helo semua","image":"images\/placeholder.jpg","type":"friend"},{"id":3,"name":"Teman 1","status":"helo semua","image":"images\/placeholder.jpg","type":"me"},{"id":2,"name":"Teman 2","status":"helo semua","image":"images\/placeholder.jpg","type":"friend"}]
ReactDOM.render(
  <App />,
  document.getElementById('root')
);

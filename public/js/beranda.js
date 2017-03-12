function UpdateSection(){
  return <div className="row update">
		<div className="container">
		 	<div className="col-md-12">
				<form>
					<textarea className="form-control form-input" placeholder="Update status..."></textarea>
					<div className="col-md-2 col-lg-2 col-sm-2 col-md-offset-10 col-sm-offset-10 col-lg-offset-10 tombol-left">
						<input className="btn btn-primary btn-large btn-update" type="submit" value="UPDATE" />
					</div>
				</form>
			</div>
		</div>
	</div>;
}
function FriendStatus(props){
  return <div className="row status-list">
    <div className="col-md-12 col-sm-12">
      <div className="col-md-2 col-xs-4 col-sm-2 gambar">
        <img src="images/placeholder.jpg"/>
      </div>
      <div className="col-md-10 col-xs-8 col-sm-10">
        <h3>Teman </h3>
        <p>jjkknbbhjbbvvhhhbb</p>
      </div>
    </div>
  </div>
}
function StatusList(){

}
function StatusSection(){
  return <div className="row status">
    <div className="container">
      <div className="row status-list">
        <div className="col-md-12 col-sm-12">
          <div className="col-md-2 col-xs-4 col-sm-2 gambar">
            <img src="images/placeholder.jpg"/>
          </div>
          <div className="col-md-10 col-xs-8 col-sm-10">
            <h3>Teman </h3>
            <p>jjkknbbhjbbvvhhhbb</p>
          </div>
        </div>
      </div>
      <div className="row own">
        <div className="col-md-12 col-sm-12">
          <div className="col-md-10 col-xs-8 col-sm-8">
            <h3>Teman </h3>
            <p>jjkknbbhjbbvvhhhbb</p>
          </div>
          <div className="col-md-2 col-xs-4 col-sm-4 gambar">
            <img src="images/placeholder.jpg"/>
          </div>
        </div>
      </div>
    </div>
  </div>
}
class App extends React.Component {
  render() {
    return (<div><UpdateSection /><StatusSection /></div>)
  }
}
ReactDOM.render(
  <App />,
  document.getElementById('root')
);

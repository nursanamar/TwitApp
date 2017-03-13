function UploadImage(props) {
  return <div className="col-md-4 col-sm-4 col-lg-4">
    <ProfilPicture image={props.user.image} name={props.user.name} />
    <UploadButton />
  </div>
}
function ProfilPicture(props){
  return (
  <div className="col-md-12 col-sm-12 col-lg-12 foto-profil center">
    <img src={props.image} alt={props.name} />
  </div>
)
}
function UploadButton() {
  return <div className="col-md-12 col-sm-12 col-lg-12 center">
    <input type="file" className="btn btn-upload" name="upload" value="upload" />
  </div>
}
class EditData extends React.Component {
  constructor(props){
    super(props);
    this.changeName = this.changeName.bind(this);
    this.changeEmail = this.changeEmail.bind(this);
  }
  changeName(e){
    this.props.nameHandle(e.target.value)
  }
  changeEmail(e){
    this.props.emailHandle(e.target.value)
  }
  render(){
    return <div className="col-sm-8 col-md-8 col-lg-8 data">
      <form className="" action="" method="post">
        <div className="input">
          <input className="form-control" type="text" name="nama" value={this.props.name} onChange={this.changeName} placeholder="Nama" />
        </div>
        <div className="input">
          <input className="form-control" type="text" name="email" value={this.props.email} placeholder="email" onChange={this.changeEmail} />
        </div>
        <div className="input">
          <input className="form-control" type="Password" name="password" value={this.props.password} placeholder="Password (tidak di ubah)" />
        </div>
        <div className="row">
          <div className="col-sm-4 col-md-4 col-lg-4 col-md-offset-8 col-sm-offset-8 col-lg-8">
            <input className="btn tombol-data" type="submit" name="submit" value="submit" />
          </div>
        </div>
      </form>
    </div>
  }
}
class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      userName:this.props.data.name,
      userEmail:this.props.data.email,
      userPassword:"",
    };
    this.inputName = this.inputName.bind(this);
    this.inputEmail = this.inputEmail.bind(this);
  }
  inputName(value){
    this.setState({
      userName:value
    });
  }
  inputEmail(value){
    this.setState({
      userEmail:value
    })
  }
  render(){
    return (
        <div className="container">
          <UploadImage user={this.props.data} />
          <EditData name={this.state.userName} email={this.state.userEmail} password={this.state.userPassword} emailHandle={this.inputEmail} nameHandle={this.inputName} />
        </div>
  )
  }
}
var data={"id":1,"name":"Nursan amar","image":null,"email":"nursan011@gmail.com","password":"$2y$10$w4kngx3rC9OZAXiQogfoIOqsRb0G8y\/Abd7SVHjOFx\/MpeDvQIxcO"};
$.get('/userdata',function(res) {
  var data;
  res.forEach(dataRes => {
    data = dataRes;
  });
  ReactDOM.render(
    <App data={data} />,
    document.getElementById('root')
  );
  console.log(res);
  console.log(data);
});

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
class UploadButton extends React.Component {
  constructor(props){
    super(props)
    this.openFile = this.openFile.bind(this);
    this.upload = this.upload.bind(this);
  }
  openFile(){
    document.getElementById("file").click();
  }
  upload(e){
    document.getElementById('imageForm').submit();
  }
  render(){
    var csrf = $('meta[name=csrf-token]').attr('content');
    return <div className="col-md-12 col-sm-12 col-lg-12 center">
      <form id="imageForm" className="hiddenForm" action="/upload" encType="multipart/form-data" method="post">
      <input type="hidden" name="_token" value={csrf} />
        <input id="file" type="file" name="image" onChange={this.upload} />
      </form>
      <a className="btn btn-upload" onClick={this.openFile}>upload</a>
    </div>
  }
}
class EditData extends React.Component {
  constructor(props){
    super(props);
    this.changeName = this.changeName.bind(this);
    this.changeEmail = this.changeEmail.bind(this);
    this.changePassword = this.changePassword.bind(this);
    this.btnClick = this.btnClick.bind(this);
  }
  btnClick(){
    this.props.send();
  }
  changeName(e){
    this.props.nameHandle(e.target.value)
  }
  changeEmail(e){
    this.props.emailHandle(e.target.value)
  }
  changePassword(e){
    this.props.passwordHandle(e.target.value)
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
          <input className="form-control" type="Password" name="password" value={this.props.password} onChange={this.changePassword} placeholder="Password (tidak di ubah)" />
        </div>
        <div className="row">
          <div className="col-sm-4 col-md-4 col-lg-4 col-md-offset-8 col-sm-offset-8 col-lg-8">
            <a className="btn tombol-data" onClick={this.btnClick}>submit</a>
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
    this.inputPassword = this.inputPassword.bind(this);
    this.update = this.update.bind(this);
    $.ajaxSetup({
      headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content'),},
    });
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
  inputPassword(value){
    this.setState({
      userPassword:value
    });
  }

  update(){
    $.post('/updateuser',{'name':this.state.userName,'email':this.state.userEmail,'password':this.state.userPassword},function(res){
      this.refresh();
    }.bind(this));
  }
  refresh(){
    $.get('/userdata',function(res) {
      var data;
      res.forEach(dataRes => {
        data = dataRes;
      });
      this.setState({
        userName:data.name,
        userEmail:data.email,
        userPassword:"",
      });
    }.bind(this));
  }
  render(){
    return (
        <div className="container">
          <UploadImage user={this.props.data} />
          <EditData name={this.state.userName} email={this.state.userEmail} password={this.state.userPassword} emailHandle={this.inputEmail} nameHandle={this.inputName} passwordHandle={this.inputPassword} send={this.update} />
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

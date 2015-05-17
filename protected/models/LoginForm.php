<?php
/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe=true;
	public $verifyCode;
	public $duration;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
		array('username,verifyCode, password', 'required','message'=>'{attribute}不能为空'),
		array('verifyCode','captcha','message'=>'{attribute}不正确'),
		array('rememberMe','boolean'),
		array('password,username', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'用户名',
			'password'=>'密码',
			'verifyCode'=>'验证码',
			'rememberMe'=>'记住我',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if($this->_identity->authenticate()){
				if($this->_identity->authenticate()==1){
					$this->addError('username','用户名不正确！');
				}
				if($this->_identity->authenticate()==2){
					$this->addError('password','密码不正确！');
				}
			}
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login(){
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();//返回错误码 return $this->errorCode;
		}
		
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			return $this->_identity->errorCode===UserIdentity::ERROR_NONE;
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
		{
			return false;
		}

	}
}

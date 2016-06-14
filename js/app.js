(function($, owner) {
	var BASE_URL='http://192.168.25.67/wuyuan-landcirculation/';
	//var BASE_URL='http://192.168.3.34/wuyuan-landcirculation/';
	owner.project_url = BASE_URL;
	//owner.project_url = '';
	owner.tokencheck_url=BASE_URL+'server/tokenpass.php';
	owner.login_url=BASE_URL+'server/gettoken.php';
	owner.changePwd_url=BASE_URL+'updateWorkerInfo.do';
	owner.avatarupload_url=BASE_URL+'addAvatar.do';
	owner.avatar_url=BASE_URL+'getAvatarajax.do';
	
	owner.getcirculations_url=BASE_URL+'server/getcirculations.php';
	owner.getcirculationdetail_url=BASE_URL+'server/getcirculationdetail.php';
	owner.getcirlist_url=BASE_URL+'server/getcirlist.php';
	owner.getdeallist_url=BASE_URL+'server/getdeallist.php';
	owner.getrentinfo_url=BASE_URL+'server/getrentinfo.php';
	owner.getlandnum_url=BASE_URL+'server/getlandnum.php';
	owner.getlanddetail_url=BASE_URL+'server/getlanddetail.php';
	owner.saverentinfo_url=BASE_URL+'server/getrentinfo.php';
	owner.getwantinfo_url=BASE_URL+'server/getwantinfo.php';
	owner.savewantinfo_url=BASE_URL+'server/savewantinfo.php';
	owner.getdealinfo_url=BASE_URL+'server/getdealinfo.php';
	owner.savedealinfo_url=BASE_URL+'server/getdealinfo.php';
	owner.filedownload_url='';
	owner.fileupload_url='';
	
	/**
	 * 本地验证登录信息
	 **/
	owner.validateLogin = function(loginInfo, callback) {
		callback = callback || $.noop;
		loginInfo = loginInfo || {};
		loginInfo.account = loginInfo.account || '';
		loginInfo.password = loginInfo.password || '';
		/* 这里开始检查用户名密码  */
		if (loginInfo.account.length == 0) {
			return callback(errorCode.EMPTY_USERNAME);
		}
		if (loginInfo.password.length == 0) {
			return callback(errorCode.EMPTY_PASSWORD);
		}
		return callback("");
	};
	
	owner.getAttributeValue = function(id, attribute){
		return document.getElementById(id).getAttribute(attribute);
	};
	
	owner.getValue = function(id){
		return document.getElementById(id).value;
	};
	
	owner.setAttributeValue = function(id, attribute, value){
		document.getElementById(id).setAttribute(attribute,value);
	};
	
	owner.setValue = function(id, value){
		document.getElementById(id).value=value;
	};
	
	owner.getValueByText = function(data, text){
		for (var i=0;i<data.length;i++) {
			if(data[i].text===text)
				return data[i].value;
		}
		return "";
	};
	
	owner.getTextByValue = function(data, value){
		for (var i=0;i<data.length;i++) {
			if(data[i].value===value)
				return data[i].text;
		}
		return "";
	};
	
	owner.toWindow = function(windowId, preAction , afterAction) {
		preAction = preAction || $.noop;
		afterAction = afterAction || $.noop;
		preAction()
		setTimeout(function() {
			$.openWindow({
				id: windowId,
				show: {
					aniShow: 'pop-in'
				},
				waiting: {
					autoShow: false
				}
			});
			afterAction();
		}, 0);
	};
	
	
	owner.webQuery = function(func_url, params, onSuccess, onError, retry){
	    var onSuccess = arguments[2]?arguments[2]:function(){};
	    var onError = arguments[3]?arguments[3]:function(){};
	    var retry = arguments[4]?arguments[4]:3;
	    var request= $.ajax(func_url, {
	        data:params,
	        dataType:'json',
	        type:'post',
	        timeout:3000,
	        success:function(data){
	            if(data.err === 'ok'){
	                onSuccess(data);
	            }
	            else{
	                onError(data.code);
	            }
	        },
	        error:function(xhr,type,errorThrown){
	            retry--;
	            if(retry > 0) return owner.webQuery(func_url, params, onSuccess, onError, retry);
	            onError('FAILED_NETWORK');
	        }
	    });
	    return request;
	};
	
//	$.ready(function() {
//		$('body').on('click', 'a', function(e) {
//			e.preventDefault();
//		});
//	});

}(mui, window.app = {}));
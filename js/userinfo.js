(function(owner){
	//清除登录信息
	owner.clear = function(){
	    plus.storage.removeItem('username');
	    plus.storage.removeItem('password');
	    plus.storage.removeItem('token');
	    plus.storage.removeItem('usertype');
	    plus.storage.removeItem('userregion');
	    plus.storage.removeItem('userregionname');
	    plus.storage.removeItem('realname');
	    plus.storage.removeItem('avatarurl');
	    plus.storage.removeItem('tel');
	}
	
	//检查是否包含自动登录的信息
	owner.auto_login = function(){
	    var username = UserInfo.username();
	    var pwd = UserInfo.password();
	    if(!username || !pwd){
	        return false;
	    }
	    return true;
	}
	
	//检查是否已登录
	owner.has_login = function(){
	    var username = UserInfo.username();
	    var pwd = UserInfo.password();
	    var token = UserInfo.token();
	    if(!username || !pwd || !token){
	        return false;
	    }
	    return true;
	};
	
	owner.username = function(){
	    if(arguments.length == 0){
	        return plus.storage.getItem('username');        
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('username');
	        return;
	    }
	    plus.storage.setItem('username', arguments[0]);
	};
	
	owner.password = function(){
	    if(arguments.length == 0){
	        return plus.storage.getItem('password');        
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('password');
	        return;
	    }
	    plus.storage.setItem('password', arguments[0]);
	};
	
	owner.token = function(){
	    if(arguments.length == 0){
	        return plus.storage.getItem('token');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('token');
	        return;
	    }
	    plus.storage.setItem('token', arguments[0]);
	};
	
	owner.usertype=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('usertype');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('usertype');
	        return;
	    }
	    plus.storage.setItem('usertype', arguments[0]);
	};
	
	owner.userregion=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('userregion');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('userregion');
	        return;
	    }
	    plus.storage.setItem('userregion', arguments[0]);
	};
	
	owner.userregionname=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('userregionname');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('userregionname');
	        return;
	    }
	    plus.storage.setItem('userregionname', arguments[0]);
	};
	
	owner.realname=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('realname');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('realname');
	        return;
	    }
	    plus.storage.setItem('realname', arguments[0]);
	};
	
	owner.avatarurl=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('avatarurl');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('avatarurl');
	        return;
	    }
	    plus.storage.setItem('avatarurl', arguments[0]);
	};
	
	owner.tel=function(){
		if(arguments.length == 0){
	        return plus.storage.getItem('tel');       
	    }
	    if(arguments[0] === ''){
	        plus.storage.removeItem('tel');
	        return;
	    }
	    plus.storage.setItem('tel', arguments[0]);
	};
	
}(window.userInfo = {}))

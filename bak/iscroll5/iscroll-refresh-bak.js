(function(owner) {
	var myScroll;
	var pullDownEl, pullDownL;
	var pullDownIc, pullUpIc;
	var pullUpEl, pullUpL;
	var loadingStep = 0; //加载状态0默认，1显示加载状态，2执行加载数据，只有当为0时才能再次加载，这是防止过快拉动刷新
	var pullDownHeight,pullUpHeight;
	var pullDownAction,pullUpAction;
	var currentY=0;
	
	//这行实际作用不太了解
	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	
	owner.endPullUp = function (){
		pullUpL.innerHTML = '上拉显示更多...';
		pullUpEl.className = '';
		pullUpEl.style.display = 'none';
		loadingStep = 0;
		myScroll.refresh();
	};
	
	owner.endPullDown = function (){
		pullDownL.innerHTML = '下拉显示更多...';
	    pullDownEl.className = '';
	    pullDownEl.style.marginTop = -pullDownHeight+'px';
	    loadingStep = 0;
	    myScroll.refresh();
	};
	
	function scrollMove(){
		console.log('direction:'+this.directionY);
		
		console.log('max:'+this.maxScrollY+'   YYY:'+this.y+'  display:'+ pullUpEl.style.display);
		if (loadingStep == 0 && !pullDownEl.className.match('flip|loading') && !pullUpEl.className.match('flip|loading')) {
	        if (this.y > 2) {
	        		loadingStep = 10;
	            pullDownL.innerHTML = '下拉刷新...';
	            
	        } else if (this.y < (this.maxScrollY - 5)) {
	            loadingStep = 10;
	            pullUpEl.style.display = '';
	            pullUpL.innerHTML = '上拉刷新...';
	            console.log('begin');
	        }
	    }else if(loadingStep == 10){
	    		if(this.y > pullDownHeight ){
				pullDownEl.style.marginTop = '0px';
	    			myScroll.refresh();
	            pullDownEl.className = 'flip';
	            pullDownL.innerHTML = '松开开始更新...';
	            loadingStep = 1;
	    		}else if (this.y < (this.maxScrollY - pullUpHeight)){
	        		console.log('begin2');
	        		
	        		myScroll.refresh();
	        		pullUpEl.className = 'flip';
	        		pullUpL.innerHTML = '松开开始更新...';
	        		loadingStep = 1;
	        }
	    }
	};
	
	function scrollEnd(){
//		this.maxScrollY += pullDownHeight;
		if (loadingStep == 1) {
	        if (pullUpEl.className.match('flip|loading')) {
	            pullUpEl.className = 'loading'; 
	            pullUpL.innerHTML = '加载中，请等待...';
	            loadingStep = 2;
	            pullUpAction();
	        } else if (pullDownEl.className.match('flip|loading')) {
	            pullDownEl.className = 'loading';
	            pullDownL.innerHTML = '加载中，请等待...';
	            loadingStep = 2;
	            pullDownAction();
	        }
	    }else if(loadingStep == 10){            //等于10的状态，设定为只是拉动，但是还没有拉动到可以刷新的位置
	    		if(pullDownEl.style.display == ''){
	    			loadingStep = 0;
	    			myScroll.refresh();
	    		}else if(pullUpEl.style.display == ''){
	    			pullUpEl.style.display = 'none';
	    			loadingStep = 0;
	    			console.log('begin1');
	    			//myScroll.refresh();
	    		}    		
	    }
	};
	
	/**
	 * 初始化iScroll控件
	 */
	owner.loadRefresh = function(downAction, upAction) {
	    pullDownEl = document.getElementById('pullDown');
	    pullDownIc = document.getElementById('pullDownIcon');
	    pullDownL = document.getElementById('pullDownLabel');
	    pullDownHeight=pullDownEl.offsetHeight;
	    pullDownEl.className = '';
	    pullDownEl.style.marginTop = -pullDownHeight+'px';
	
	    pullUpEl = document.getElementById('pullUp');
	    pullUpIc = document.getElementById('pullUpIcon');
	    pullUpL = document.getElementById('pullUpLabel');
	    pullUpHeight=pullUpEl.offsetHeight;
	    pullUpEl.className = '';
	    pullUpEl.style.display = 'NONE';
		
		pullDownAction=downAction||function(){};
		pullUpAction=upAction||function(){};
		
	    myScroll = new IScroll('#wrapper', {
	        probeType: 2, //probeType：1对性能没有影响。在滚动事件被触发时，滚动轴是不是忙着做它的东西。probeType：2总执行滚动，除了势头，反弹过程中的事件。这类似于原生的onscroll事件。probeType：3发出的滚动事件与到的像素精度。注意，滚动被迫requestAnimationFrame（即：useTransition：假）。  
	        scrollbars: true, //有滚动条 
	        mouseWheel: true, //允许滑轮滚动  
	        fadeScrollbars: true, //滚动时显示滚动条，默认隐藏，并且是淡出淡入效果  
	        bounce: true, //边界反弹  
	        //interactiveScrollbars: true, //滚动条可以拖动  
	        shrinkScrollbars: 'scale', // 当滚动边界之外的滚动条是由少量的收缩。'clip' or 'scale'.  
	        click: true, // 允许点击事件  
	        keyBindings: true, //允许使用按键控制  
	        momentum: true // 允许有惯性滑动
	        
	    });
	    //myScroll.maxScrollY += pullDownHeight;
	    console.log(myScroll.options);
	    console.dir(myScroll.options);
	    console.log(myScroll.maxScrollY);
	    
	    myScroll.on('scroll', scrollMove);
	    myScroll.on('scrollEnd',scrollEnd);
	    setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 800);
	}

}(window.pullRefresh = {}));
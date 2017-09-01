<!-- 
/*
 Pleas leave this notice.
 DHTML tip message version 1.2 copyright Essam Gamal 2003 (http://migoicons.tripod.com, migoicons@hotmail.com)
 All modifications are done in the style.js you should not modify this file.  Created on : 06/03/2003
 Script featured on and can be found at Dynamic Drive (http://www.dynamicdrive.com)
*/ 

var ua = navigator.userAgent
var ps = navigator.productSub 
var dom = (document.getElementById)? 1:0
var ie4 = (document.all&&!dom)? 1:0
var ie5 = (document.all&&dom)? 1:0
var nn4 =(navigator.appName.toLowerCase() == "netscape" && parseInt(navigator.appVersion) == 4)
var nn6 = (dom&&!ie5)? 1:0
var sNav = (nn4||nn6||ie4||ie5)? 1:0
var cssFilters = ((ua.indexOf("MSIE 5.5")>=0||ua.indexOf("MSIE 6")>=0)&&ua.indexOf("Opera")<0)? 1:0
// var Style=[],
var Text=[],Count=0,sbw=0,move=0,hs="",mx,my,scl,sct,ww,wh,obj,sl,st,ih,iw,vl,hl,sv,evlh,evlw,tbody
var HideTip = "eval(obj+sv+hl+';'+obj+sl+'=0;'+obj+st+'=-800')"
var doc_root = ((ie5&&ua.indexOf("Opera")<0||ie4)&&document.compatMode=="CSS1Compat")? "document.documentElement":"document.body"
var PX = (nn6)? "px" :"" 

// mqk: hardwired some options
// #ccccff
var FiltersEnabled = 0;
var Style=["white","black","#5050a9","#9999cc","","","","","","","center","",2,3,700,"",2,20,10,10,"","","","",""];

if(sNav) {
	window.onresize = ReloadTip
	document.onmousemove = MoveTip
	if(nn4) document.captureEvents(Event.MOUSEMOVE) 
}	
if(nn4||nn6) {
	mx = "e.pageX"
	my = "e.pageY"
	scl = "window.pageXOffset"
	sct = "window.pageYOffset"	
	if(nn4) {
		obj = "document.TipLayer."
		sl = "left"
		st = "top"
		ih = "clip.height"
		iw = "clip.width"
		vl = "'show'"
		hl = "'hide'"
		sv = "visibility="
	}
	else obj = "document.getElementById('TipLayer')."
} 
if(ie4||ie5) {
	obj = "TipLayer."
	mx = "event.x"
	my = "event.y"
	scl = "eval(doc_root).scrollLeft"
	sct = "eval(doc_root).scrollTop"
	if(ie5) {
		mx = mx+"+"+scl 
		my = my+"+"+sct
	}
}
if(ie4||dom){
	sl = "style.left"
	st = "style.top"
	ih = "offsetHeight"
	iw = "offsetWidth"
	vl = "'visible'"
	hl = "'hidden'"
	sv = "style.visibility="
}
if(ie4||ie5||ps>=20020823) {
	ww = "eval(doc_root).clientWidth"
	wh = "eval(doc_root).clientHeight"
}	 
else { 
	ww = "window.innerWidth"
	wh = "window.innerHeight"
	evlh = eval(wh)
	evlw = eval(ww)
	sbw=15
}	

function applyCssFilter(){
	if(cssFilters&&FiltersEnabled) { 
		var dx = " progid:DXImageTransform.Microsoft."
		TipLayer.style.filter = "revealTrans()"+dx+"Fade(Overlap=1.00 enabled=0)"+dx+"Inset(enabled=0)"+dx+"Iris(irisstyle=PLUS,motion=in enabled=0)"+dx+"Iris(irisstyle=PLUS,motion=out enabled=0)"+dx+"Iris(irisstyle=DIAMOND,motion=in enabled=0)"+dx+"Iris(irisstyle=DIAMOND,motion=out enabled=0)"+dx+"Iris(irisstyle=CROSS,motion=in enabled=0)"+dx+"Iris(irisstyle=CROSS,motion=out enabled=0)"+dx+"Iris(irisstyle=STAR,motion=in enabled=0)"+dx+"Iris(irisstyle=STAR,motion=out enabled=0)"+dx+"RadialWipe(wipestyle=CLOCK enabled=0)"+dx+"RadialWipe(wipestyle=WEDGE enabled=0)"+dx+"RadialWipe(wipestyle=RADIAL enabled=0)"+dx+"Pixelate(MaxSquare=35,enabled=0)"+dx+"Slide(slidestyle=HIDE,Bands=25 enabled=0)"+dx+"Slide(slidestyle=PUSH,Bands=25 enabled=0)"+dx+"Slide(slidestyle=SWAP,Bands=25 enabled=0)"+dx+"Spiral(GridSizeX=16,GridSizeY=16 enabled=0)"+dx+"Stretch(stretchstyle=HIDE enabled=0)"+dx+"Stretch(stretchstyle=PUSH enabled=0)"+dx+"Stretch(stretchstyle=SPIN enabled=0)"+dx+"Wheel(spokes=16 enabled=0)"+dx+"GradientWipe(GradientSize=1.00,wipestyle=0,motion=forward enabled=0)"+dx+"GradientWipe(GradientSize=1.00,wipestyle=0,motion=reverse enabled=0)"+dx+"GradientWipe(GradientSize=1.00,wipestyle=1,motion=forward enabled=0)"+dx+"GradientWipe(GradientSize=1.00,wipestyle=1,motion=reverse enabled=0)"+dx+"Zigzag(GridSizeX=8,GridSizeY=8 enabled=0)"+dx+"Alpha(enabled=0)"+dx+"Dropshadow(OffX=3,OffY=3,Positive=true,enabled=0)"+dx+"Shadow(strength=3,direction=135,enabled=0)"
	}
}

function ftest() {
    alert("ftest");
}

//function stm(t,s) {
function stm(month,j) {
  var t;
  t = month[j];

  if(sNav) {
  	if(t.length<2||Style.length<25) {
		var ErrorNotice = "DHTML TIP MESSAGE VERSION 1.2 ERROR NOTICE.\n"
		if(t.length<2&&Style.length<25) alert(ErrorNotice+"It looks like you removed an entry or more from the Style Array and Text Array of this tip.\nTheir should be 25 entries in every Style Array even though empty and 2 in every Text Array. You defined only "+Style.length+" entries in the Style Array and "+t.length+" entry in the Text Array. This tip won't be viewed to avoid errors")
		else if(t.length<2) alert(ErrorNotice+"It looks like you removed an entry or more from the Text Array of this tip.\nTheir should be 2 entries in every Text Array. You defined only "+t.length+" entry. This tip won't be viewed to avoid errors.")
		else if(Style.length<25) alert(ErrorNotice+"It looks like you removed an entry or more from the Style Array of this tip.\nTheir should be 25 entries in every Style Array even though empty. You defined only "+Style.length+" entries. This tip won't be viewed to avoid errors.")
 	}
  	else {
		var ab = "" ;var ap = ""
		var titCol = (Style[0])? "COLOR='"+Style[0]+"'" : ""
		var txtCol = (Style[1])? "COLOR='"+Style[1]+"'" : ""
		var titBgCol = (Style[2])? "BGCOLOR='"+Style[2]+"'" : ""
		var txtBgCol = (Style[3])? "BGCOLOR='"+Style[3]+"'" : ""
		var titBgImg = (Style[4])? "BACKGROUND='"+Style[4]+"'" : ""	
		var txtBgImg = (Style[5])? "BACKGROUND='"+Style[5]+"'" : ""
		var titTxtAli = (Style[6] && Style[6].toLowerCase()!="left")? "ALIGN='"+Style[6]+"'" : ""
		var txtTxtAli = (Style[7] && Style[7].toLowerCase()!="left")? "ALIGN='"+Style[7]+"'" : ""   
		var add_height = (Style[15])? "HEIGHT='"+Style[15]+"'" : ""
		if(!Style[8])  Style[8] = "Verdana,Arial,Helvetica"
		if(!Style[9])  Style[9] = "Verdana,Arial,Helvetica"					
		if(!Style[12]) Style[12] = 1
		if(!Style[13]) Style[13] = 1
		if(!Style[14]) Style[14] = 200
		if(!Style[16]) Style[16] = 0
		if(!Style[17]) Style[17] = 0
		if(!Style[18]) Style[18] = 10
		if(!Style[19]) Style[19] = 10
		hs = Style[11].toLowerCase() 
		if(ps==20001108){
		if(Style[2]) ab="STYLE='border:"+Style[16]+"px solid"+" "+Style[2]+"'"
		ap="STYLE='padding:"+Style[17]+"px "+Style[17]+"px "+Style[17]+"px "+Style[17]+"px'"}
		var closeLink=(hs=="sticky")? "<TD ALIGN='right'><FONT SIZE='"+Style[12]+"' FACE='"+Style[8]+"'><A HREF='javascript:void(0)' ONCLICK='stickyhide()' STYLE='text-decoration:none;color:"+Style[0]+"'><B>Close</B></A></FONT></TD>":""

// mqk: a few changes
		var this_title='Speaker: '+t[1]+' ('+t[2]+') <br> Title: '+t[3];
		var this_abstract=t[4];


		var title=(this_title||hs=="sticky")? "<TABLE WIDTH='100%' BORDER='0' CELLPADDING='0' CELLSPACING='0'><TR><TD "+titTxtAli+"><FONT SIZE='"+Style[12]+"' FACE='"+Style[8]+"' "+titCol+"><B>"+this_title+"</B></FONT></TD>"+closeLink+"</TR></TABLE>" : ""
		var txt="<TABLE "+titBgImg+" "+ab+" WIDTH='"+Style[14]+"' BORDER='0' CELLPADDING='"+Style[16]+"' CELLSPACING='0' "+titBgCol+" ><TR><TD>"+title+"<TABLE WIDTH='100%' "+add_height+" BORDER='0' CELLPADDING='"+Style[17]+"' CELLSPACING='0' "+txtBgCol+" "+txtBgImg+"><TR><TD "+txtTxtAli+" "+ap+" VALIGN='top'><FONT SIZE='"+Style[13]+"' FACE='"+Style[9]+"' "+txtCol +">"+this_abstract+"</FONT></TD></TR></TABLE></TD></TR></TABLE>"
		if(nn4) {
			with(eval(obj+"document")) {
				open()
				write(txt)
				close()
			}
		}
		else eval(obj+"innerHTML=txt")
		tbody = {
			Pos:Style[10].toLowerCase(), 
			Xpos:Style[18],
			Ypos:Style[19], 
			Transition:Style[20],
			Duration:Style[21], 
			Alpha:Style[22],
			ShadowType:Style[23].toLowerCase(),
			ShadowColor:Style[24],
			Width:parseInt(eval(obj+iw)+3+sbw)
		}
		if(ie4) { 
			TipLayer.style.width = Style[14]
	 		tbody.Width = Style[14]
		}
		Count=0	
		move=1
 	 }
  }
}

function MoveTip(e) {
	if(move) {
		var X,Y,MouseX = eval(mx),MouseY = eval(my); tbody.Height = parseInt(eval(obj+ih)+3)
		tbody.wiw = parseInt(eval(ww+"+"+scl)); tbody.wih = parseInt(eval(wh+"+"+sct))
		switch(tbody.Pos) {
			case "left" : X=MouseX-tbody.Width-tbody.Xpos; Y=MouseY+tbody.Ypos; break
			case "center": X=MouseX-(tbody.Width/2); Y=MouseY+tbody.Ypos; break
			case "float": X=tbody.Xpos+eval(scl); Y=tbody.Ypos+eval(sct); break	
			case "fixed": X=tbody.Xpos; Y=tbody.Ypos; break		
			default: X=MouseX+tbody.Xpos; Y=MouseY+tbody.Ypos
		}

		if(tbody.wiw<tbody.Width+X) X = tbody.wiw-tbody.Width
		if(tbody.wih<tbody.Height+Y+sbw) {
			if(tbody.Pos=="float"||tbody.Pos=="fixed") Y = tbody.wih-tbody.Height-sbw
			else Y = MouseY-tbody.Height
		}
		if(X<0) X=0 
		eval(obj+sl+"=X+PX;"+obj+st+"=Y+PX")
		ViewTip()
	}
}

function ViewTip() {
  	Count++
	if(Count == 1) {
		if(cssFilters&&FiltersEnabled) {	
			for(Index=28; Index<31; Index++) { TipLayer.filters[Index].enabled = 0 }
			for(s=0; s<28; s++) { if(TipLayer.filters[s].status == 2) TipLayer.filters[s].stop() }
			if(tbody.Transition == 51) tbody.Transition = parseInt(Math.random()*50)
			var applyTrans = (tbody.Transition>-1&&tbody.Transition<24&&tbody.Duration>0)? 1:0
			var advFilters = (tbody.Transition>23&&tbody.Transition<51&&tbody.Duration>0)? 1:0
			var which = (applyTrans)?0:(advFilters)? tbody.Transition-23:0 
			if(tbody.Alpha>0&&tbody.Alpha<100) {
	  			TipLayer.filters[28].enabled = 1
	  			TipLayer.filters[28].opacity = tbody.Alpha
			}
			if(tbody.ShadowColor&&tbody.ShadowType == "simple") {
	  			TipLayer.filters[29].enabled = 1
	  			TipLayer.filters[29].color = tbody.ShadowColor
			}
			else if(tbody.ShadowColor&&tbody.ShadowType == "complex") {
	  			TipLayer.filters[30].enabled = 1
	  			TipLayer.filters[30].color = tbody.ShadowColor
			}
			if(applyTrans||advFilters) {
				eval(obj+sv+hl)
	  			if(applyTrans) TipLayer.filters[0].transition = tbody.Transition
	  			TipLayer.filters[which].duration = tbody.Duration 
	  			TipLayer.filters[which].apply()
			}
		}
 		eval(obj+sv+vl)
		if(cssFilters&&FiltersEnabled&&(applyTrans||advFilters)) TipLayer.filters[which].play()
		if(hs == "sticky") move=0
  	}
}

function stickyhide() {
	eval(HideTip)
}

function ReloadTip() {
	 if(nn4&&(evlw!=eval(ww)||evlh!=eval(wh))) location.reload()
	 else if(hs == "sticky") eval(HideTip)
}

function htm() {
	if(sNav) {
		if(hs!="keep") {
			move=0; 
			if(hs!="sticky") eval(HideTip)
		}	
	} 
}


//-->



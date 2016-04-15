
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../../jkincludes/scripts.css" />
<meta name="description" content="Click here to get free JavaScripts, hassle free!">
<meta name="keywords"
content="free JavaScript, cut and paste JavaScript, JavaScript tutorial">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<title>Cut &amp; Paste JavaScript Alarm clock </title>
<style type="text/css">

#jsalarmclock{
font-family: Tahoma;
font-weight: bold;
font-size: 12px;
}

#jsalarmclock div{
margin-bottom: 0.8em;
}

#jsalarmclock div.leftcolumn{
float: left;
width: 150px;
font-size: 13px;
background-color: lightyellow;
clear: left;
}

#jsalarmclock span{
margin-right: 5px;
}

</style>

<script type="text/javascript">

/***********************************************

* JavaScript Alarm Clock- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

var jsalarm={
	padfield:function(f){
		return (f<10)? "0"+f : f
	},
	showcurrenttime:function(){
		var dateobj=new Date()
		var ct=this.padfield(dateobj.getHours())+":"+this.padfield(dateobj.getMinutes())+":"+this.padfield(dateobj.getSeconds())
		this.ctref.innerHTML=ct
		this.ctref.setAttribute("title", ct)
		if (typeof this.hourwake!="undefined"){ //if alarm is set
			if (this.ctref.title==(this.hourwake+":"+this.minutewake+":"+this.secondwake)){
				clearInterval(jsalarm.timer)
				myWindow=window.open('go.php','width=200,height=100')
				myWindow.location=document.getElementById("musicloc").value
			}
		}
	},
	init:function(){
		var dateobj=new Date()
		this.ctref=document.getElementById("jsalarm_ct")
		this.submitref=document.getElementById("submitbutton")
		this.submitref.onclick=function(){
			jsalarm.setalarm()
			this.value="Alarm Set"
			this.disabled=true
			return false
		}
		this.resetref=document.getElementById("resetbutton")
		this.resetref.onclick=function(){
		jsalarm.submitref.disabled=false
		jsalarm.hourwake=undefined
		jsalarm.hourselect.disabled=false
		jsalarm.minuteselect.disabled=false
		jsalarm.secondselect.disabled=false
		return false
		}
		var selections=document.getElementsByTagName("select")
		this.hourselect=selections[0]
		this.minuteselect=selections[1]
		this.secondselect=selections[2]
		for (var i=0; i<60; i++){
			if (i<24) //If still within range of hours field: 0-23
			this.hourselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getHours()==i)
			this.minuteselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getMinutes()==i)
			this.secondselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getSeconds()==i)

		}
		jsalarm.showcurrenttime()
		jsalarm.timer=setInterval(function(){jsalarm.showcurrenttime()}, 1000)
	},
	setalarm:function(){
		this.hourwake=this.hourselect.options[this.hourselect.selectedIndex].value
		this.minutewake=this.minuteselect.options[this.minuteselect.selectedIndex].value
		this.secondwake=this.secondselect.options[this.secondselect.selectedIndex].value
		this.hourselect.disabled=true
		this.minuteselect.disabled=true
		this.secondselect.disabled=true
	}
}

</script>

<p align="left"><strong>Example:</strong></p>
<p align="left"><!--webbot bot="HTMLMarkup" startspan --><form action="" method="">
<div id="jsalarmclock">
<div><div class="leftcolumn">Current Time:</div> <span id="jsalarm_ct" style="letter-spacing: 2px"></span></div>
<div><div class="leftcolumn">Set Alarm:</div> <span><select></select> Hour</span> <span><select></select> Minutes</span> <span><select></select> Seconds</span></div>
<div><div class="leftcolumn"></div> <input type="hidden" id="musicloc" size="55" value="go.php"  /> </div>
<input type="submit" name="submit" value="Set Alarm!" id="submitbutton" /> <input type="reset" value="reset" id="resetbutton" />
</div>
</form>


<script type="text/javascript">

jsalarm.init()

</script><!--webbot bot="HTMLMarkup" endspan i-checksum="58964" --></p>

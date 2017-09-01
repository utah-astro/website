// written by Michael Kuhlen (December 2007)
// edited Jan 2008 by Margaret to add day/time changes
// edited Jul 2012 by Zheng to add Host information
var January=[], February=[], March=[], April=[], May=[], June=[], July=[], August=[], September=[], October=[], November=[], December=[];


var data=[January,February,March,April,May,June,July,August,September,October,November,December];



window.onload = function () {
    var body = document.getElementsByTagName('body')[0];
    var tblBody = document.getElementsByTagName('tbody')[0];
    var month = document.getElementsByTagName('div');

    for (var i=0;i<month.length;i++) {

	switch(month[i].className) {
	case 'January':    
	    add_month(data[0],tblBody,month[i].className);
	    break;	
	case 'February':    
	    add_month(data[1],tblBody,month[i].className);
	    break;	
	case 'March':
	    add_month(data[2],tblBody,month[i].className);
	    break;
	case 'April':
	    add_month(data[3],tblBody,month[i].className);
	    break;
	case 'May':
	    add_month(data[4],tblBody,month[i].className);
	    break;
	case 'June':
	    add_month(data[5],tblBody,month[i].className);
	    break;
	case 'July':
	    add_month(data[6],tblBody,month[i].className);
	    break;
	case 'August':
	    add_month(data[7],tblBody,month[i].className);
	    break;
	case 'September':
	    add_month(data[8],tblBody,month[i].className);
	    break;
	case 'October':
	    add_month(data[9],tblBody,month[i].className);
	    break;
	case 'November':
	    add_month(data[10],tblBody,month[i].className);
	    break;
	case 'December':
	    add_month(data[11],tblBody,month[i].className);
	    break;
	}
    }
}


function add_month(month, tblBody, name) {
    var row = document.createElement('tr');
    var cell = document.createElement('td');
    var bold = document.createElement('b');
    var cellText = document.createTextNode(name);
	    
    bold.appendChild(cellText);
    cell.appendChild(bold);
    cell.setAttribute("width","50");
    cell.setAttribute("vAlign","top");
    cell.setAttribute("rowSpan",month.length);
    row.appendChild(cell);
    
    for (var j=0;j<month.length;j++) {
	if(j>0) var row = document.createElement('tr');
	
	// Date
	var cell1 = document.createElement('td');
	var bold1 = document.createElement('b');
	var cellText1 = document.createTextNode(month[j][0]);
	bold1.appendChild(cellText1);

        if(month[j][6]!="" || month[j][7]!="") {
            var font1 = document.createElement('font');
	    var lf0 = document.createElement('br');

	    var comment="";
	    comment = month[j][6];
	    if (month[j][7]!="") {
		comment += " "+month[j][7];
	    }
	    comment += " !!";
	    
	    var cellText1a = document.createTextNode(comment);

 	    font1.appendChild(cellText1a);	    
            font1.setAttribute('color','#ff0000');
            bold1.appendChild(lf0);
            bold1.appendChild(font1);
        }
	cell1.appendChild(bold1);
	cell1.setAttribute("align","center");
	cell1.setAttribute("vAlign","top");
	cell1.setAttribute("bgColor","#ccccff");
	row.appendChild(cell1);

	// Speaker/Institution
	var cell2 = document.createElement('td');
	var bold2 = document.createElement('b');
	var lf=document.createElement('br');
	if(month[j][1]=="") {
	    bold2.appendChild(lf);  
	} else {
	    var cellText2 = document.createTextNode(month[j][1]);
	    bold2.appendChild(cellText2);
	    bold2.appendChild(lf);
	    cellText2 = document.createTextNode('('+month[j][2]+')');
	    bold2.appendChild(cellText2);	    
	}
	cell2.appendChild(bold2);	    
	cell2.setAttribute("align","center");
	cell2.setAttribute("vAlign","top");
	cell2.setAttribute("bgColor","#ccccff");
	row.appendChild(cell2);

	// Title/Abstract
	var cell3 = document.createElement('td');
	if(month[j][3]=="") {
	    var lf2=document.createElement('br');
	    cell3.appendChild(lf2);
	} else {
	    if(month[j][4]=="") {
		var cellText3 = document.createTextNode(month[j][3]);
		cell3.appendChild(cellText3);
	    } else {
		var link = document.createElement('a');
		var toks = (month[j][1]).split(" ");
		//		var lastname = toks[toks.length-1];
		//		link.setAttribute('href','abstracts_spring08/'+lastname);
		link.setAttribute('href','javascript:display_abstract('+name+'['+j+'],"'+name+'")');
		link.setAttribute('id',j);

		// This doesn't work with IE. 
		//		link.setAttribute('onmouseover','stm('+name+'['+j+'],Style)');
		//		link.setAttribute('onmouseout','htm()');
		link.onmouseover = function() {stm(month,this.id) };
		link.onmouseout = function() { htm() };
		link.innerHTML = month[j][3];
		cell3.appendChild(link);
	    }
	}
	cell3.setAttribute("width","450");
	cell3.setAttribute("align","center");
	cell3.setAttribute("vAlign","center");
	cell3.setAttribute("bgColor","#ccccff");
	row.appendChild(cell3);

        // Host
	var cell4 = document.createElement('td');
	var bold4 = document.createElement('b');
	var lf=document.createElement('br');
	if(month[j][4]=="") {
	    bold4.appendChild(lf);
	} else {
	    var cellText4 = document.createTextNode(month[j][5]);
	    bold4.appendChild(cellText4);
	    bold4.appendChild(lf);
	    //cellText4 = document.createTextNode('('+month[j][4]+')');
	    //bold4.appendChild(cellText4);
	}
	cell4.appendChild(bold4);
	cell4.setAttribute("align","center");
	cell4.setAttribute("vAlign","top");
	cell4.setAttribute("bgColor","#ccccff");
	row.appendChild(cell4);
	
	tblBody.appendChild(row);		
   }

}

//function display_abstract(month, name) {
function display_abstract(this_month, name) {
    newwin = window.open("","abstract","width=800,height=400,left=0,top=0,location=no,menubar=yes,resizable=yes,scrollbars=yes,status=yes,toolbar=no");
    newwin.document.write('<table><tbody>','<tr><td>Date:</td><td>'+name+' '+this_month[0]+'</td></tr>','<tr><td>Speaker:</td><td>'+this_month[1]+' ('+this_month[2]+')</td></tr>','<tr><td>Title:</td><td>'+this_month[3]+'</td></tr>','<tr><td vAlign="top">Abstract:</td><td width="700">'+this_month[4]+'</td></tr>','</tbody></table>');
    newwin.document.close();
}

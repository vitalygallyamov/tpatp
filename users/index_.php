<?php
	SESSION_START();
	if( isset( $_SESSION["key"] ) )
	{
		if( $_SESSION["key"]=="21232f297a57a5a743894a0e4a801fc3" ){ $query="select id, name from pages where ( razdel='0' and id<>'23' ) order by id limit 0, 1"; }
		elseif( $_SESSION["key"]=="46b3931b9959c927df4fc65fdee94b07" ){ $query="select id, name from pages where ( razdel='0' and id<>'23' ) and ( id='1' or id='2' or id='5' or id='3' or id='11' )  order by id limit 0, 1"; }
		elseif( $_SESSION["key"]=="9df22f196a33acd0b372fe502de51211" ){ print"<META HTTP-EQUIV='Refresh' Content='0; URL=../auto'>"; }
		elseif( $_SESSION["key"]=="8ae1016c4044ea668c4db3f57e3cc7f1" ){ $query="select id, name from pages where ( razdel='0' and id<>'23' ) and ( id='7' )  order by id limit 0, 1"; }
		elseif( $_SESSION["key"]=="799855594adc0f2bd7302c69d3234b5a" ){ $query="select id, name from pages where ( razdel='0' and id<>'23' ) and ( id='4' or id='6' or id='8' or id='29' or id='30' or id='31' or id='32'  )  order by id limit 0, 1"; }
		elseif( $_SESSION["key"]=="aaf9a7ade8ad853549f9ce5d53e8d645" ){ $query="select id, name from pages where ( razdel='0' and id<>'23' ) and ( id='9' )  order by id limit 0, 1"; }
		else{ print"<META HTTP-EQUIV='Refresh' Content='0; URL=../admin'>"; }
	}
	else
	{
		print"<META HTTP-EQUIV='Refresh' Content='0; URL=../'>";
	}

	require_once("../admin/config.php");	// ����������� ����� �������� ���� ������
	if( !isset( $_REQUEST["r"] ) )
	{
		$result=mysql_query($query);
		$number=mysql_numrows($result);
		for($i=0;$i<$number;$i++)
		{
			$r=mysql_result($result,$i,'id');
		}
	}
	else{ $r=$_REQUEST["r"]; }	//����������� �������� �������

	if( $r==8 ){ $r=20; }
	if( $r==20 ){ $r=33; }
//	if( $r==7 ){ $r=26; }
?>

<html>
	<head>
		<title>������������ ���������������� �����������</title>
		<link rel=stylesheet type='text/css' href='../style.css'>
		<meta HTTP-EQUIV="Content-Type" content="text/html; charset=windows-1251">

		<!--������ ����������� ���������-->
		<script language='javascript' type='text/javascript' src='../js/tiny_mce/tiny_mce.js'></script> 
		<script type="text/javascript" src="../js/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
		<script language="javascript" type="text/javascript"> 
			tinyMCE.init({ 
				mode : "textareas", 
				language : "ru",
				theme : "advanced",
				document_base_url : "../index.php", 
				file_browser_callback : "tinyBrowser",
        				editor_selector : "mceEditor",
        				editor_deselector : "mceNoEditor",        
				convert_urls : false, 
				plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,ibrowser,images",
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo",
				theme_advanced_buttons3 : "link,unlink,anchor,image,cleanup,code,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
				theme_advanced_buttons4 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,|,ibrowser",
				theme_advanced_buttons5 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,|,print,|,ltr,rtl,|,fullscreen",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,
				template_external_list_url : "js/template_list.js",
				external_link_list_url : "../../js/link_list.js",
				external_image_list_url : "../../js/image_list.js",
				media_external_list_url : "../../js/media_list.js",
				content_css : "css/content.css"
			}); 
		</script>
		<!--��������� ����������� ���������-->

	</head>
	<body>
		<table align=center width=100% height=100%>
			<tr height=150>
				<td style='background: url(../images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
				<td width=1000 bgcolor=#f7f7f7 colspan=2 align=center>
					<table width=940 align=center>
						<td><a href=index.php title='�� �������'><img src=../images/logo_white.jpg></a></td>
						<td valign=bottom align=right class=help_of_station>���������� ����������� �����������:<br>(3456) 325-325, 505-595</td>
					</table>
				</td>
				<td style='background: url(../images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
			</tr>
			<tr valign=top>
				<td style='background: url(../images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
				<td width=250 bgcolor=#f7f7f7>
					<div style='margin: 10px;'>
						<?php
							/* ����� ������ ���� */
							$query=str_replace( "limit 0, 1", "", $query );
							//$query="select id, name from pages where ( razdel='0' and id<>'23' ) order by id";
							$result=mysql_query($query);
							$number=mysql_numrows($result);
							for($i=0;$i<$number;$i++)
							{
								$id=mysql_result($result,$i,'id');
								$name_menu=mysql_result($result,$i,'name');
								print"<div style='padding: 0px 20px 5px 0px;'><a href=index.php?r=$id "; if( $r==$id ){ print"class=bold"; } print" >$name_menu</a></div>";

								$query2="select id, name from pages where razdel='$id' order by id";
								$result2=mysql_query($query2);
								$number2=mysql_numrows($result2);
								for($j=0;$j<$number2;$j++)
								{
									$id2=mysql_result($result2,$j,'id');
									$name_menu2=mysql_result($result2,$j,'name');
									print"<div style='padding: 0px 20px 5px 20px;'><a href=index.php?r=$id2 "; if( $r==$id2 ){ print"class=bold"; } print" >$name_menu2</a></div>";
								}
							}
						?>
					</div>
				</td>
				<td width=750 bgcolor=#f7f7f7>
					<form name=form action=index.php method=post enctype=multipart/form-data>
						<div style='margin: 10px;'>
							<?php
								print"<input type=hidden name=r value='$r'>";

								if( $r==23 )	/* �������������� ������� */
								{
									if( !isset( $_REQUEST["razdel2"] ) ){ $razdel2=0; }else{ $razdel2=$_REQUEST["razdel2"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once("../admin/functions.php");
										$baner=baner( "baner" );
										if( $baner!=0 ){ mysql_query(" insert into baner values( '', '$baner', '".$_POST["razdel"]."', '".$_POST["href"]."' ) "); }
									}
									if( isset( $_GET["del"] ) ){ mysql_query(" delete from baner where id='".$_GET["del"]."' "); }

									print"<div class=left>����� [180px | 120px]</div>
									<div><input type=file name=baner></div>
									<div class=left>������</div>
									<div><input type=text name=href value='http://'></div>
									<div class=left>������</div>
									<div>
										<select name=razdel>";
											$query="select id, name from pages where id>1 and id<23 and razdel='0' order by id";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for($i=0;$i<$number;$i++)
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id>$name</option>";
												$query2="select id, name from pages where razdel='$id' order by id";
												$result2=mysql_query($query2);
												$number2=mysql_numrows($result2);
												for($j=0;$j<$number2;$j++)
												{
													$id2=mysql_result($result2,$j,'id');
													$name2=mysql_result($result2,$j,'name');
													print"<option value=$id2>&nbsp; &nbsp; $name2</option>";
												}
											}
										print"</select>
									</div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>������</div>
									<div>
										<select name=razdel2 onchange='document.form.submit();'>
											<option value=0>�������� ������ ��� �������������� �������</option>";
											$query="select id, name from pages where id>1 and id<23 and razdel='0' order by id";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for($i=0;$i<$number;$i++)
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel2==$id ){ print"selected"; } print" >$name</option>";
												$query2="select id, name from pages where razdel='$id' order by id";
												$result2=mysql_query($query2);
												$number2=mysql_numrows($result2);
												for($j=0;$j<$number2;$j++)
												{
													$id2=mysql_result($result2,$j,'id');
													$name2=mysql_result($result2,$j,'name');
													print"<option value=$id2 "; if( $razdel2==$id2 ){ print"selected"; } print" >&nbsp; &nbsp; $name2</option>";
												}
											}
										print"</select>
									</div><br><br>";
									$query="select id, baner from baner where razdel='$razdel2' order by id desc";
									$result=mysql_query($query);
									$number=mysql_numrows($result);
									for( $i=0;$i<$number;$i++ )
									{
										$id=mysql_result($result,$i,'id');
										$baner=mysql_result($result,$i,'baner');
										print"<div class=left>����� $id</div>
										<div><a href=index.php?r=$r&razdel2=$razdel2&del=$id onclick=\"if(window.confirm('�� ������������� ������ ������� ������ �����?')){location.href='index.php?r=$r&razdel2=$razdel2&del=$id';} return false;\">�������</a></div>";
									}
								}
								elseif( $r==4 ) /*���������� ��������*/
								{
									if( !isset( $_REQUEST["route"] ) ){ $route=0; }else{ $route=$_REQUEST["route"]; }
									if( !isset( $_REQUEST["hide1"] ) ){ $hide1=0; }else{ $hide1=$_REQUEST["hide1"]; }
									if( !isset( $_REQUEST["hide2"] ) ){ $hide2=0; }else{ $hide2=$_REQUEST["hide2"]; }
									print"<input type=hidden name=hide1 value='$hide1'><input type=hidden name=hide2 value='$hide2'>";

									if( isset( $_POST["add_route"] ) )
									{
										if( $_POST["nomer"]!="" && $_POST["days"]!="" )
										{
											mysql_query("insert into auto_route values( '', '".$_POST["nomer"]."', '".$_POST["days"]."', '".$_POST["type"]."' )");
										}
										else
										{
											print"<script>alert('�� ��������� ��� ����');</script>";
										}
									}

									if( isset( $_POST["edit_route"] ) )
									{
										$query="select id from auto_route order by id";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for($i=0;$i<$number;$i++)
										{
											$id=mysql_result($result,$i,'id');
											if( $_POST["nomer$id"]!="" && $_POST["days$id"]!="" )
											{
												mysql_query("update auto_route set nomer='".$_POST["nomer$id"]."', days='".$_POST["days$id"]."', type='".$_POST["type$id"]."' where id='$id' ");
											}
										}
									}

									if( isset( $_POST["add_point"] ) )
									{
										if( $_POST["name"]!="" )
										{
											mysql_query("insert into auto_point values( '', '".$_POST["name"]."' )");
										}
										else
										{
											print"<script>alert('�� ��������� ��� ����');</script>";
										}
									}

									if( isset( $_POST["add_path"] ) )
									{
										if( $_POST["route"]!=0 && $_POST["point_otp"]!=0 && $_POST["point_prib"]!=0 )
										{
											mysql_query("insert into auto_path values( '', '".$_POST["point_otp"]."', '".$_POST["time_otp"]."', '".$_POST["point_prib"]."', '".$_POST["time_prib"]."', '".$_POST["distance"]."', '".$_POST["cost"]."', '$route' )");
										}
										else
										{
											print"<script>alert('�� ��������� ��� ����');</script>";
										}
									}

									if( isset( $_GET["del_path"] ) )
									{
										mysql_query( " delete from auto_route where id='".$_GET["del_path"]."' " );
										mysql_query( " delete from auto_path where route='".$_GET["del_path"]."' " );
									}

									if( isset( $_GET["del_point"] ) )
									{
										mysql_query( " delete from auto_point where id='".$_GET["del_point"]."' " );
									}

									if( isset( $_POST["edit_path"] ) )
									{
										$query="select id from auto_path order by id";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for($i=0;$i<$number;$i++)
										{
											$id=mysql_result($result,$i,'id');
											if( $_POST["point_otp$id"]!=0 && $_POST["point_prib$id"]!=0 )
											{
												mysql_query("update auto_path set point_otp='".$_POST["point_otp$id"]."', time_otp='".$_POST["time_otp$id"]."', point_prib='".$_POST["point_prib$id"]."', time_prib='".$_POST["time_prib$id"]."', distance='".$_POST["distance$id"]."', cost='".$_POST["cost$id"]."' where id='$id' ");
											}
										}
									}

									if( isset( $_POST["edit_point"] ) )
									{
										$query="select id from auto_point order by id";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for($i=0;$i<$number;$i++)
										{
											$id=mysql_result($result,$i,'id');
											if( $_POST["name$id"]!="" )
											{
												mysql_query("update auto_point set name='".$_POST["name$id"]."' where id='$id' ");
											}
										}
									}

									if( isset( $_GET["del"] ) )
									{
										mysql_query("delete from auto_path where id='".$_GET["del"]."' ");
									}

									if( isset( $_POST["edit"] ) ){ mysql_query(" update pages set content='".$_POST["content"]."' where id='$r' "); }
									$query="select content from pages where id='$r'";
									$result=mysql_query($query);
									$number=mysql_numrows($result);
									for( $i=0;$i<$number;$i++ )
									{
										$content=mysql_result($result,$i,'content');
									}

									print"<div class=left>�������</div>
									<div><textarea name=content rows=10 class=mceEditor>$content</textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=edit value=��������></div><br><br>";

									print"<div class=left>����� ��������</div>
									<div><input type=text name=nomer></div>
									<div class=left>��� ����������</div>
									<div><input type=text name=days value='��� ���'></div>
									<div class=left>��� ��������</div>
									<div>
										<select name=type>
											<option value=1>�����</option>
											<option value=2>��������</option>
											<option value=3>������</option>
											<option value=4>��������</option>
										</select>
									</div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add_route value='�������� �������'></div><br><br>";

									if( $hide1!=0 )
									{
										print"<div><a href=index.php?r=$r&route=$route&hide1=0&hide2=$hide2>������ ��������</a></div>";
										$query="select id, nomer, days, type from auto_route order by nomer";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										if( $number!=0 )
										{
											print"<input type=text value='����� ��������' style='background: #dddddd; width: 100px;' readonly>
											<input type=text value='��� ����������' style='background: #dddddd; width: 150px;' readonly>
											<input type=text value='��� ��������' style='background: #dddddd; width: 200px;' readonly>
											<input type=text value='del' style='background: #dddddd; width: 30px;' readonly>
											<br>";
										}
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$nomer=mysql_result($result,$i,'nomer');
											$days=mysql_result($result,$i,'days');
											$type=mysql_result($result,$i,'type');
											print"<input type=text name='nomer$id' value='$nomer' style='width: 100px;'>
											<input type=text name='days$id' value='$days' style='width: 150px;'>
											<select name='type$id' style='width: 200px;'>
												<option value=1 "; if( $type==1 ){ print"selected"; } print" >�����</option>
												<option value=2 "; if( $type==2 ){ print"selected"; } print" >��������</option>
												<option value=3 "; if( $type==3 ){ print"selected"; } print" >������</option>
												<option value=4 "; if( $type==4 ){ print"selected"; } print" >��������</option>
											</select>
											<input type=button value='del' style='width: 30px;' onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del_path=$id';}\">
											<br>";
										}
										if( $number!=0 ){ print"<input type=submit name=edit_route value='��������'><br><br><br>"; }
									}
									else
									{
										print"<div><a href=index.php?r=$r&route=$route&hide1=1&hide2=$hide2>���������� ��������</a></div><br><br><br>";
									}

									if( $hide2!=0 )
									{
										print"<div><a href=index.php?r=$r&route=$route&hide1=$hide1&hide2=0>������ ������</a></div>";
										print"<div class=left>�������� ������</div>
										<div><input type=text name=name></div>
										<div class=left>&nbsp;</div>
										<div><input type=submit name=add_point value='�������� �����'></div><br><br>";




										$query="select id, name from auto_point order by name";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										if( $number!=0 )
										{
											print"<input type=text value='�������� ������' style='background: #dddddd;' readonly>
											<input type=text value='del' style='background: #dddddd; width: 30px;' readonly>
											<br>";
										}
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											print"<input type=text name='name$id' value='$name'>
											<input type=button value='del' style='width: 30px;' onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del_point=$id';}\">
											<br>";
										}
										if( $number!=0 ){ print"<input type=submit name=edit_point value='��������'><br><br><br>"; }
									}
									else
									{
										print"<div><a href=index.php?r=$r&route=$route&hide1=$hide1&hide2=1>���������� ������</a></div><br><br><br>";
									}







									print"<div class=left>�������</div>
									<div>
										<select name=route onchange='document.form.submit();'>
											<option value=0>�������� �������</option>";
											$query="select id, nomer from auto_route order by nomer";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$nomer=mysql_result($result,$i,'nomer');
												print"<option value=$id "; if( $route==$id ){ print"selected"; } print" >$nomer</option>";
											}
										print"</select>
									</div>";
									if( $route!=0 )
									{
										print"<div class=left>����� �����������</div>
										<div>
											<select name=point_otp>
												<option value=0>�������� ����� �����������</option>";
												$query="select id, name from auto_point order by name";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result($result,$i,'id');
													$name=mysql_result($result,$i,'name');
													print"<option value=$id>$name</option>";
												}
											print"</select>
										</div>
										<div class=left>����� �����������</div>
										<div><input type=text name=time_otp value='11:00'></div>
										<div class=left>����� ��������</div>
										<div>
											<select name=point_prib>
												<option value=0>�������� ����� ��������</option>";
												$query="select id, name from auto_point order by name";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result($result,$i,'id');
													$name=mysql_result($result,$i,'name');
												print"<option value=$id>$name</option>";
												}
											print"</select>
										</div>
										<div class=left>����� ��������</div>
										<div><input type=text name=time_prib value='11:00'></div>
										<div class=left>����������, �</div>
										<div><input type=text name=distance value='1000'></div>
										<div class=left>���������, ���</div>
										<div><input type=text name=cost value='100.00'></div>
										<div class=left>&nbsp;</div>
										<div><input type=submit name=add_path value='�������� ����'></div><br><br>";
										$query="select id, point_otp, time_otp, point_prib, time_prib, distance, cost from auto_path where route='$route' order by id";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										if( $number!=0 )
										{
											print"<input type=text value='����� �����������' style='width: 200px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='�����' style='width: 50px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='����� ��������' style='width: 200px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='�����' style='width: 50px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='����������' style='width: 80px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='���������' style='width: 70px; font-weight: bold; background: #dddddd;' readonly>
											<input type=text value='del' style='width: 30px; font-weight: bold; background: #dddddd;' readonly>
											<br>";
										}
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result( $result,$i,'id' );
											$point_otp=mysql_result( $result,$i,'point_otp' );
											$time_otp=mysql_result( $result,$i,'time_otp' );
											$point_prib=mysql_result( $result,$i,'point_prib' );
											$time_prib=mysql_result( $result,$i,'time_prib' );
											$distance=mysql_result( $result,$i,'distance' );
											$cost=mysql_result( $result,$i,'cost' );
											print"<select name='point_otp$id' style='width: 200px;'>
												<option value=0>�������� ����� �����������</option>";
												$query2="select id, name from auto_point order by name";
												$result2=mysql_query($query2);
												$number2=mysql_numrows($result2);
												for( $j=0;$j<$number2;$j++ )
												{
													$id_point=mysql_result($result2,$j,'id');
													$name_point=mysql_result($result2,$j,'name');
													print"<option value=$id_point "; if( $point_otp==$id_point ){ print"selected"; } print" >$name_point</option>";
												}
											print"</select>
											<input type=text name='time_otp$id' value='$time_otp' style='width: 50px;'>
											<select name='point_prib$id' style='width: 200px;'>
												<option value=0>�������� ����� ��������</option>";
												$query2="select id, name from auto_point order by name";
												$result2=mysql_query($query2);
												$number2=mysql_numrows($result2);
												for( $j=0;$j<$number2;$j++ )
												{
													$id_point=mysql_result($result2,$j,'id');
													$name_point=mysql_result($result2,$j,'name');
													print"<option value=$id_point "; if( $point_prib==$id_point ){ print"selected"; } print" >$name_point</option>";
												}
											print"</select>
											<input type=text name='time_prib$id' value='$time_prib' style='width: 50px;'>
											<input type=text name='distance$id' value='$distance' style='width: 80px;'>
											<input type=text name='cost$id' value='$cost' style='width: 70px;'>
											<input type=button value=del style='width: 30px;' onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&route=$route&del=$id';}\">
											<br>";
										}
										if( $number!=0 ){ print"<input type=submit name=edit_path value='��������'>"; }
									}
								}
								elseif( $r==17 )	/*���������� � ����������*/
								{
									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }


									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["name"]!="" ){ mysql_query(" insert into file_razdel values( '', '".$_POST["name"]."' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["name2"]!="" ){ mysql_query(" update file_razdel set name='".$_POST["name2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from file_razdel where id='".$_GET["del"]."' "); }

									if( isset( $_POST["add_file"] ) )
									{
										require_once( "../admin/functions.php" );
										$file_file=files( "file_file" );
										if( $file_file!=0 and $_POST["name_file"]!="" ){ mysql_query(" insert into file values( '', '".$_POST["name_file"]."', '$file_file', '$razdel' ) "); }
									}

									if( isset( $_GET["del_file"] ) ){ mysql_query(" delete from file where id='".$_GET["del_file"]."' "); }

									print"<div class=left>���������</div>
									<div><input type=text name=name></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>������</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, name from file_razdel order by id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, name from file_razdel where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											print"<div class=left>���������</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
										print"<div class=left>��������� �����</div>
										<div><input type=text name=name_file></div>
										<div class=left>����</div>
										<div><input type=file name=file_file></div>
										<div class=left>&nbsp;</div>
										<div><input type=submit name=add_file value=��������></div><br><br>";

										$query="select id, name, file from file where razdel='$razdel' order by id desc";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											$file=mysql_result($result,$i,'file');
											print"<div class=left>���������</div>
											<div><input type=text name=name_file2 value='$name' readonly></div>
											<div class=left>&nbsp;</div>
											<div><input type=button value='������� ����' onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&razdel=$razdel&del_file=$id';}\"></div><br><br>";
										}
									}
								}
								elseif( $r==16 || $r==19 )	/*����������������, ������������*/
								{
									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["name"]!="" && $_POST["content"]!="" ){ mysql_query(" insert into law values( '', '".$_POST["name"]."', '".$_POST["content"]."', '$r' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["name2"]!="" && $_POST["content2"]!="" ){ mysql_query(" update law set name='".$_POST["name2"]."', content='".$_POST["content2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from law where id='".$_GET["del"]."' "); }

									print"<div class=left>���������</div>
									<div><input type=text name=name></div>
									<div class=left>�������</div>
									<div><textarea name=content rows=10 class=mceEditor></textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>"; if( $r==19 ){ print"������������"; }else{ print"����������������"; } print"</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, name from law where razdel='$r' order by id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, name, content from law where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											$content=mysql_result($result,$i,'content');
											print"<div class=left>���������</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>�������</div>
											<div><textarea name=content2 rows=10 class=mceEditor>$content</textarea></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
									}
									
								}
								elseif( $r==15 )	/*����� ������*/
								{
									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										$picture=picture( "picture", 125, 125 );
										if( $_POST["name"]!="" && $_POST["content"]!="" && $picture!=0 ){ mysql_query(" insert into book values( '', '".$_POST["name"]."', '".$_POST["content"]."', '$picture' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										$picture=picture( "picture2", 125, 125 );
										if( $picture!=0 ){ mysql_query(" update book set picture='$picture' where id='$razdel' "); }
										if( $_POST["name2"]!="" && $_POST["content2"]!="" ){ mysql_query(" update book set name='".$_POST["name2"]."', content='".$_POST["content2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from law where id='".$_GET["del"]."' "); }

									print"<div class=left>���������</div>
									<div><input type=text name=name></div>
									<div class=left>�������</div>
									<div><textarea name=content rows=10 class=mceEditor></textarea></div>
									<div class=left>�������� [125px]</div>
									<div><input type=file name=picture></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>����������������</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, name from book order by id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, name, content, picture from book where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											$content=mysql_result($result,$i,'content');
											$picture=mysql_result($result,$i,'picture');
											if( $picture!=0 ){ print"<img src=../uploadfiles/$picture.jpg align=right width=20 height=20>"; }
											print"<div class=left>���������</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>�������</div>
											<div><textarea name=content2 rows=10 class=mceEditor>$content</textarea></div>
											<div class=left>�������� [125px]</div>
											<div><input type=file name=picture2></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
									}
									
								}
								elseif( $r==5 )	/*�������*/
								{
									print"<script src=../js/calendar/calendar_ru.js></script>";

									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										$datemas=explode( ".", $_POST["date"] );
										if( $_POST["name"]!="" && $_POST["content"]!="" ){ mysql_query(" insert into news values( '', '".mktime( 0, 0, 0, $datemas[1], $datemas[0], $datemas[2] )."', '".$_POST["name"]."', '".$_POST["content"]."' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										$datemas=explode( ".", $_POST["date2"] );
										if( $_POST["name2"]!="" && $_POST["content2"]!="" ){ mysql_query(" update news set dat='".mktime( 0, 0, 0, $datemas[1], $datemas[0], $datemas[2] )."', name='".$_POST["name2"]."', content='".$_POST["content2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from news where id='".$_GET["del"]."' "); }

									print"<div class=left>����</div>
									<div><input type=text name=date readonly value='".date("d.m.Y")."' onfocus='this.select();lcs(this)' onclick='event.cancelBubble=true;this.select();lcs(this);'></div>
									<div class=left>���������</div>
									<div><input type=text name=name></div>
									<div class=left>�������</div>
									<div><textarea name=content rows=10 class=mceEditor></textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>�������</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, name from news order by dat desc, id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, dat, name, content from news where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$date=date( "d.m.Y", mysql_result($result,$i,'dat') );
											$name=mysql_result($result,$i,'name');
											$content=mysql_result($result,$i,'content');
											print"<div class=left>����</div>
											<div><input type=text name=date2 value='$date' readonly onfocus='this.select();lcs(this)' onclick='event.cancelBubble=true;this.select();lcs(this);'></div>
											<div class=left>���������</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>�������</div>
											<div><textarea name=content2 rows=10 class=mceEditor>$content</textarea></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
									}
									
								}
								elseif( $r==25 )	/*������-�����*/
								{
									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["question"]!="" ){ mysql_query(" insert into question values( '', '".$_POST["question"]."', '".$_POST["answer"]."', '".$_POST["name"]."', '".$_POST["email"]."' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										if( $_POST["question2"]!="" ){ mysql_query(" update question set question='".$_POST["question2"]."', answer='".$_POST["answer2"]."', name='".$_POST["name2"]."', email='".$_POST["email2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from question where id='".$_GET["del"]."' "); }

									print"<div class=left>���</div>
									<div><input type=text name=name></div>
									<div class=left>E-mail</div>
									<div><input type=text name=email></div>
									<div class=left>������</div>
									<div><textarea name=question rows=5></textarea></div>
									<div class=left>�����</div>
									<div><textarea name=answer rows=5></textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>������</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, question from question order by id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$question=substr( strip_tags( mysql_result($result,$i,'question') ), 0, 30 )."...";
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$question</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, question, answer, name, email from question where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$question=mysql_result($result,$i,'question');
											$answer=mysql_result($result,$i,'answer');
											$name=mysql_result($result,$i,'name');
											$email=mysql_result($result,$i,'email');
											print"<div class=left>���</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>E-mail</div>
											<div><input type=text name=email2 value='$email'></div>
											<div class=left>������</div>
											<div><textarea name=question2 rows=5>$question</textarea></div>
											<div class=left>�����</div>
											<div><textarea name=answer2 rows=5>$answer</textarea></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
									}
									
								}
								elseif( $r==18 )	/* �������������� ������������ */
								{
									if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
									if( isset( $_POST["add"] ) )
									{
										require_once( "../admin/functions.php" );
										$preview=picture( "preview", 160, 160 );
										if( $preview!=0 and $_POST["name"]!="" ){ mysql_query(" insert into album values( '', '".$_POST["name"]."', '$preview' ) "); }
									}
									if( isset( $_POST["edit"] ) )
									{
										require_once( "../admin/functions.php" );
										$preview=picture( "preview2", 160, 160 );
										if( $preview!=0 ){ mysql_query(" update album set preview='$preview' where id='$razdel' "); }
										if( $_POST["name2"]!="" ){ mysql_query(" update album set name='".$_POST["name2"]."' where id='$razdel' "); }
									}

									if( isset( $_GET["del"] ) ){ mysql_query(" delete from album where id='".$_GET["del"]."' "); }

									if( isset( $_POST["add_picture"] ) )
									{
										require_once( "../admin/functions.php" );
										$picture=picture( "picture", 160, 160 );
										if( $picture!=0 ){ mysql_query(" insert into photo values( '', '$picture', '$razdel' ) "); }
									}

									if( isset( $_GET["del_picture"] ) ){ mysql_query(" delete from photo where id='".$_GET["del_picture"]."' "); }

									print"<div class=left>���������</div>
									<div><input type=text name=name></div>
									<div class=left>������</div>
									<div><input type=file name=preview></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=add value=��������></div><br><br>
									<div class=left>������</div>
									<div>
										<select name=razdel onchange='document.form.submit();'>
											<option value=0>�������� ��� ��������������</option>";
											$query="select id, name from album order by id desc";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
											}
										print"</select>
									</div>";
									if( $razdel!=0 )
									{
										$query="select id, name, preview from album where id='$razdel'";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											$preview=mysql_result($result,$i,'preview');
											print"<img src=../uploadfiles/$preview.jpg align=right width=20 height=20>
											<div class=left>���������</div>
											<div><input type=text name=name2 value='$name'></div>
											<div class=left>������</div>
											<div><input type=file name=preview2></div>
											<div class=left>&nbsp;</div>
											<div>
												<input type=submit name=edit value=��������>
												<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del=$id';}\">
											</div><br><br>";
										}
										print"<div class=left>�������</div>
										<div><input type=file name=picture></div>
										<div class=left>&nbsp;</div>
										<input type=submit name=add_picture value=��������><br><br>";

										$query="select id, picture from photo where razdel='$razdel' order by id desc";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$picture=mysql_result($result,$i,'picture');
											print"<div class=left><img src=../uploadfiles/$picture.jpg width=20 height=20></div>
											<div><a href=index.php?r=$r&razdel=$razdel&del_picture=$id onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ��������?')){location.href='index.php?r=$r&razdel=$razdel&del_picture=$id';} return false;\">�������</a></div><br><br>";
										}

									}
								}
								elseif( $r!=1 )	/* �������������� ���������� �������� */
								{
									if( isset( $_POST["edit"] ) ){ mysql_query(" update pages set content='".$_POST["content"]."' where id='$r' "); }
									$query="select content from pages where id='$r'";
									$result=mysql_query($query);
									$number=mysql_numrows($result);
									for( $i=0;$i<$number;$i++ )
									{
										$content=mysql_result($result,$i,'content');
									}

									print"<div class=left>�������</div>
									<div><textarea name=content rows=10 class=mceEditor>$content</textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=edit value=��������></div><br><br>";

									if( $r==6 )
									{
										if( !isset( $_REQUEST["razdel"] ) ){ $razdel=0; }else{ $razdel=$_REQUEST["razdel"]; }
										if( isset( $_POST["add_bus"] ) )
										{
											require_once( "../admin/functions.php" );
											$picture_01=picture( "picture_01", 125, 125 );
											$picture_02=picture( "picture_02", 125, 125 );
											if( $_POST["name"]!=""  && $_POST["place"]!="" && $picture_01!=0 && $picture_02!=0 )
											{
												mysql_query( " insert into bus values( '', '".$_POST["name"]."', '".$_POST["place"]."', '$picture_01', '$picture_02' ) " );
											}
										}

										if( isset( $_POST["edit_bus"] ) )
										{
											require_once( "../admin/functions.php" );
											$picture_012=picture( "picture_012", 125, 125 );
											$picture_022=picture( "picture_022", 125, 125 );
											if( $_POST["name2"]!=""  && $_POST["place2"]!="" )
											{
												mysql_query( " update bus set name='".$_POST["name2"]."', place='".$_POST["place2"]."' where id='$razdel' " );
												if( $picture_012!=0 ){ mysql_query( " update bus set picture_01='$picture_012' where id='$razdel' " ); }
												if( $picture_022!=0 ){ mysql_query( " update bus set picture_02='$picture_022' where id='$razdel' " ); }
											}
										}

										if( isset( $_GET["del_bus"] ) ){ mysql_query( " delete from bus where id='".$_GET["del_bus"]."' " ); }

										print"<div class=left>����� ��������</div>
										<div><input type=text name=name></div>
										<div class=left>���������� ����</div>
										<div><input type=text name=place></div>
										<div class=left>����������� 1</div>
										<div><input type=file name=picture_01></div>
										<div class=left>����������� 2</div>
										<div><input type=file name=picture_02></div>
										<div class=left>&nbsp;</div>
										<div><input type=submit name=add_bus value=��������></div><br><br>
										<div class=left>�����</div>
										<div>
											<select name=razdel onchange='document.form.submit();'>
												<option value=0>�������� ��� ��������������</option>";
												$query="select id, name from bus order by id desc";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result($result,$i,'id');
													$name=mysql_result($result,$i,'name');
													print"<option value=$id "; if( $razdel==$id ){ print"selected"; } print" >$name</option>";
												}
											print"</select>
										</div>";

										if( $razdel!=0 )
										{
											$query="select id, name, place, picture_01, picture_02 from bus where id='$razdel' ";
											$result=mysql_query($query);
											$number=mysql_numrows($result);
											for( $i=0;$i<$number;$i++ )
											{
												$id=mysql_result($result,$i,'id');
												$name=mysql_result($result,$i,'name');
												$place=mysql_result($result,$i,'place');
												$picture_01=mysql_result($result,$i,'picture_01');
												$picture_02=mysql_result($result,$i,'picture_02');
												print"<img src=../uploadfiles/$picture_02.jpg align=right width=40 height=40>
												<img src=../uploadfiles/$picture_01.jpg align=right width=40 height=40>";
												print"<div class=left>����� ��������</div>
												<div><input type=text name=name2 value='$name'></div>
												<div class=left>���������� ����</div>
												<div><input type=text name=place2 value='$place'></div>
												<div class=left>����������� 1</div>
												<div><input type=file name=picture_012></div>
												<div class=left>����������� 2</div>
												<div><input type=file name=picture_022></div>
												<div class=left>&nbsp;</div>
												<div>
													<input type=submit name=edit_bus value=��������>
													<input type=button value=������� onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del_bus=$id';}\">
												</div><br><br>";

											}
										}
									}





									if( $r==9 )	/*��������� ���������*/
									{
										if( isset( $_POST["add_file"] ) )
										{
											require_once( "../admin/functions.php" );
											$file_file=files( "file_file" );
											if( $file_file!=0 and $_POST["name_file"]!="" ){ mysql_query(" insert into file2 values( '', '".$_POST["name_file"]."', '$file_file', '".$_POST["file_type"]."' ) "); }
										}
	
										if( isset( $_GET["del_file"] ) ){ mysql_query(" delete from file2 where id='".$_GET["del_file"]."' "); }
	
										print"<div class=left>��������� �����</div>
										<div><input type=text name=name_file></div>
										<div class=left>����</div>
										<div><input type=file name=file_file></div>
										<div class=left>���</div>
										<div>
											<select name=file_type>
												<option value=0>���������</option>
												<option value=1>�����</option>
											</select>
										</div>
										<div class=left>&nbsp;</div>
										<div><input type=submit name=add_file value=��������></div><br><br>";
	
										$query="select id, name, file, type from file2 order by id desc";
										$result=mysql_query($query);
										$number=mysql_numrows($result);
										for( $i=0;$i<$number;$i++ )
										{
											$id=mysql_result($result,$i,'id');
											$name=mysql_result($result,$i,'name');
											$file=mysql_result($result,$i,'file');
											$type=mysql_result($result,$i,'type');
											if( $type==0 ){ $type="���������"; }else{ $type="�����"; }
											print"<div class=left>���������</div>
											<div><input type=text name=name_file2 value='$name' readonly></div>
											<div class=left>���</div>
											<div><input type=text readonly value='$type'></div>
											<div class=left>&nbsp;</div>
											<div><input type=button value='������� ����' onclick=\"if(window.confirm('�� ������������� ������ ������� ������ ������?')){location.href='index.php?r=$r&del_file=$id';}\"></div><br><br>";
										}
									}





								}

								/* �������������� title, keywords, description */

								if( $r!=23 )
								{
									if( isset( $_POST["edit_title"] ) ){ mysql_query(" update pages set title='".$_POST["title"]."', keywords='".$_POST["keywords"]."', description='".$_POST["description"]."' where id='$r' "); }
									$query="select title, description, keywords from pages where id='$r'";
									$result=mysql_query($query);
									$number=mysql_numrows($result);
									for( $i=0;$i<$number;$i++ )
									{
										$title=mysql_result($result,$i,'title');
										$description=mysql_result($result,$i,'description');
										$keywords=mysql_result($result,$i,'keywords');
									}
									print"<br><br><br><br><div class=left>title</div>
									<div><textarea name=title rows=3>$title</textarea></div>
									<div class=left>keywords</div>
									<div><textarea name=keywords rows=3>$keywords</textarea></div>
									<div class=left>description</div>
									<div><textarea name=description rows=3>$description</textarea></div>
									<div class=left>&nbsp;</div>
									<div><input type=submit name=edit_title value=��������></div><br><br>";
								}
							?>
						</div>
					</form>
				</td>
				<td style='background: url(../images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
			</tr>
			<tr height=30>
				<td style='background: url(../images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
				<td colspan=2 bgcolor=#f7f7f7>&nbsp;</td>
				<td style='background: url(../images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
			</tr>
		</table>
	</body>
</html>
<?php
	mysql_close($connection);
?>
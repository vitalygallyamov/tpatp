<?php
	session_start();

	if( !isset( $_GET["r"] ) ){ $r=1; }else{ $r=$_GET["r"]; }
	if( $r==10 ){ header( "location: auto.php" ); }
	if( $r==8 ){ $r=20; }
	if( $r==20 ){ $r=33; }
//	if( $r==7 ){ $r=26; }
	if( !isset( $_GET["page"] ) ){ $page=0; }else{ $page=$_GET["page"]; }
	$view_page=4;	// ���������� ��������� ������� �� ���������
	$extrapage="";	// �������������� ��������� � ������ �������, ��� �������� � ��� ������
	require_once("admin/config.php");
	$query="select name, content, title, description, keywords, razdel from pages where id='$r'";
	$result=mysql_query($query);
	$number=mysql_numrows($result);
	for( $i=0;$i<$number;$i++ )
	{
		$name=mysql_result($result,$i,'name');
		$content=mysql_result($result,$i,'content');
		$title=mysql_result($result,$i,'title');
		$description=mysql_result($result,$i,'description');
		$keywords=mysql_result($result,$i,'keywords');
		$razdel=mysql_result($result,$i,'razdel');
	}
	if( $number==0 ){ header( "location: index.php" ); }
?>
<html>
	<head>
		<base href='http://tpatp.ru/' >
		<title><?=$title?> | ������������ ���������������� �����������</title>
		<meta name='title' content='<?=$title?>'>
		<meta name='description' content='<?=$description?>'>
		<meta name='keywords' content='<?=$keywords?>'>
		<link rel=stylesheet type='text/css' href='style.css'>
		<meta HTTP-EQUIV='Content-Type' content='text/html; charset=windows-1251'>
		<script type='text/javascript' src='js/iepngfix_tilebg/iepngfix_tilebg.js'></script>
		<script type='text/javascript' src='js/lib.js'></script>
	</head>
	<body style='min-width: 1000px; width: 100%;'>
		<?php
			if( $r==1 ) {
				echo "<div class='main'>
					<table style='min-width: 1000px; width: 100%;'>
						<tr align='center'>
							<td>&nbsp;</td>
							<td class='main'>
								<table width=944 align=center>
									<tr valign=top height=270>
										<td colspan=8><a href=index.php title='�� �������'><img src=images/logo.jpg style='margin-left: 170px;'></a></td>
									</tr>
									<tr align=center valign=top>
										<td width=114 rowspan=7><a href=index.php?r=2 title='� ��������' id=about_big></a></td>
										<td height=30 colspan=7></td>
									</tr>
									<tr align=center valign=top>
										<td height=20 colspan=6></td>
										<td width=125 rowspan=6><a href=index.php?r=3 title='�������� �����' id=contacts_big></a></td>
									</tr>
									<tr align=center valign=top>
										<td width=114 rowspan=5><a href=index.php?r=4 title='���������� ��������' id=drive_big></a></td>
										<td height=25 colspan=5></td>
									</tr>
									<tr align=center valign=top>
										<td height=10 colspan=4></td>
										<td width=114 rowspan=4><a href=index.php?r=5 title='�������' id=news_big></a></td>
									</tr>
									<tr align=center valign=top>
										<td width=114 rowspan=3><a href=index.php?r=6 title='����� ���������' id=order_big></a></td>
										<td height=10 colspan=3></td>
									</tr>
									<tr align=center valign=top>
										<td height=10 colspan=2></td>
										<td width=114 rowspan=2><a href=index.php?r=7 title='�������' id=carier_big></a></td>
									</tr>
									<tr align=center valign=top>
										<td width=135><a href=index.php?r=8 title='�������������� ������' id=extras_big></a></td>
										<td width=114><a href=index.php?r=9 title='��������� ���������' id=money_big></a></td>
									</tr>
									<tr height=130>
										<td colspan=8></td>
									</tr>
								</table>
								<img src=images/transparent.gif width=1000 height=1>
							</td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</div>";
			}
		?>
		<table align=center style='width: 100%; height: 100%;'>
			<?php
				if( $r==1 )
				{
					print"<tr height=470>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td width=1000 style='background-image: url(images/background_main.jpg); background-position: left top; background-repeat: no-repeat; background-color: #f7f7f7;' align=center valign='top'></td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
					</tr>
					<tr height=300>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td bgcolor=#f7f7f7 align='right' valign='top'>
							<div id='mainSlide'>";

								$query = "select * from main order by id desc";
								$result = mysql_query( $query );
								while( $data = mysql_fetch_array( $result ) ) {
									echo "<a href='".$data['href']."' "; if( empty( $data['href'] ) || $data['href'] == 'http://' ){ echo "onclick='return false;'"; } echo " style='background-image: url(uploadfiles/".$data['picture'].".jpg);'></a>";
								}
							echo "</div>
							<script type='text/javascript' src='js/jquery/jquery-1.7.js'></script>
							<script type='text/javascript' src='js/cycle/cycle-light-1.3.js'></script>
							<script type='text/javascript'>
								$.fn.cycle.defaults.timeout = 5000;
								$(document).ready(function(){ $('#mainSlide').cycle({ fx: 'fade', speed: 2000 }); });
							</script>
						</td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
					</tr>
					<tr height=10>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'><img src=images/transparent.gif /></td>
						<td bgcolor=#76b0db><img src=images/transparent.gif /></td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'><img src=images/transparent.gif /></td>
					</tr>
					<tr>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td>&nbsp;</td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>						
					</tr>";
				}
				else
				{
					require_once("functions.php");
					print"<tr height=84>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td width=1000 bgcolor=#f7f7f7 align=center>
							<table width=940 align=center>
								<td><a href=index.php title='�� �������'><img src=images/logo_white.jpg></a></td>
								<td valign=bottom align=right class=help_of_station>������� / ���� ��������: 8 (3456) 25-26-37<br>����� ���������: 8 (3456) 25-97-07</td>
							</table>
						</td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
					</tr>
					<tr height=40>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td width=1000 bgcolor=#f7f7f7 align=center>";
							submenu( $r );
						print"</td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
					</tr>
					<tr valign=top align=center>
						<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
						<td width=1000 style='background-color: #f7f7f7; background-image: url(images/footer_inside.jpg); background-position: center bottom; background-repeat: no-repeat;'>
							<table width=944 align=center>
								<tr valign=top>
									<td width=220>"; menu( $r, $razdel ); print"</td>
									<td rowspan=2>
										<div class=content "; if( $r==4 ){ print"style='width: 720px;'"; } print">";

											if( $r==36 ){ print"<a href=index.php?r=4 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>���������� ��������</a>&nbsp; &nbsp; &nbsp; &nbsp; "; }
											if( $r==24 ){ print"<a href=index.php?r=6 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>����� ���������</a>&nbsp; &nbsp; &nbsp; &nbsp; "; }
											if( $r==25 ){ print"<a href=index.php?r=3 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>����� ����� � �����������</a>&nbsp; &nbsp; &nbsp;"; }
											if( $r!=33 && $r!=34 && $r!=35 && $r!=25 ){ print"<span class=name>$name</span>"; }
											if( $r==4 ){ print"&nbsp; &nbsp; &nbsp; &nbsp; <a href=index.php?r=36 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>����� ��������� ���������� ���������</a>"; }
											if( $r==6 ){ print"&nbsp; &nbsp; &nbsp; &nbsp; <a href=index.php?r=24 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>������������� ��������</a>"; }
											if( $r==3 ){
												print"&nbsp; &nbsp; &nbsp;<a href=index.php?r=25 class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>����� ���������� �������</a>
												&nbsp; &nbsp; &nbsp;<a href='forum/' class=name target='_blank' style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>�����</a>"; 
											}
											if( $r==33 || $r==34 || $r==35 )
											{
												print"<a href=index.php?r=33 class=name2 style='"; if( $r!=33 ){ print"color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;"; } print"'>����� ���������</a>
												&nbsp; &nbsp; &nbsp;<a href=index.php?r=34 class=name2 style='"; if( $r!=34 ){ print"color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;"; } print"'>������������� ���������</a>
												&nbsp; &nbsp; &nbsp;<a href=index.php?r=35 class=name2 style='"; if( $r!=35 ){ print"color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;"; } print"'>��������������� ������ �� ���</a>";
											}
											if( $r==25 ){
												print "<a href=index.php?r=25 class=name>����� ���������� �������</a>
												&nbsp; &nbsp; &nbsp;<a href='forum/' target='_blank' class=name style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'>�����</a>";
											}

											print"<br><br>";
											if( $r==17 )	// ���������� � ����������
											{
												$view_page=20;
												$query="select id, name from file_razdel order by id desc limit $page, $view_page";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result( $result,$i,'id' );
													$name=mysql_result($result,$i,'name');
													print"<tr valign=top><td><a href=index.php?r=$r&n=$id&page=$page>$name</a></td></tr>
													<tr height=10><td></td></tr>";
													if( isset( $_GET["n"] ) && $_GET["n"]==$id )
													{
														$query2="select name, file from file where razdel=$id order by id desc";
														$result2=mysql_query($query2);
														$number2=mysql_numrows($result2);
														for( $j=0;$j<$number2;$j++ )
														{
															$name2=mysql_result($result2,$j,'name');
															$file2=mysql_result($result2,$j,'file');
															print"<tr valign=top><td class=dot><div class=dots><a href=uploadfiles/$file2 title='$name'>$name2</a></div></td></tr>
															<tr height=9><td class=dot></td></tr>";
														}
													}
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==16 || $r==19 )	// ����������������
											{
												$view_page=20;
												if( $r==19 ){ $view_page=5; }
												if( isset( $_GET["n"] ) )
												{
													$query="select id, name, content from law where id='".$_GET["n"]."' ";
												}
												else
												{
													$query="select id, name, content from law where razdel='$r' order by id desc limit $page, $view_page";
												}
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result($result,$i,'id');
													$name=mysql_result($result,$i,'name');
													$content=mysql_result($result,$i,'content');
													print"<tr><td><a href=index.php?r=$r&n=$id "; if( $r==19 ){ print"onclick='return false;'"; } print" >$name</a></td></tr>"; if( $r==19 ){ print"<tr><td>$content</td></tr>"; } print"<tr height=10><td></td></tr>";
													if( isset( $_GET["n"] ) ){ print"<tr><td>$content <div style='text-align: right;'><a href=index.php?r=$r title='�����' onclick='window.history.back(); return false;'>�����</a></div></td></tr>"; }
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==15 )	// ����� ������
											{
												$query="select name, content, picture from book order by id desc limit $page, $view_page";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for($i=0;$i<$number;$i++)
												{
													$name=mysql_result($result,$i,'name');
													$content=mysql_result($result,$i,'content');
													$picture=mysql_result($result,$i,'picture');
													print"<tr valign=top>
														<td width=145><div class=picture style='background: url(uploadfiles/$picture.jpg) center center no-repeat;'></td>
														<td width=479><b class=blue>$name</b>$content</td>
													</tr>
													<tr height=20><td colspan=2></td></tr>";
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==25 ) {
												$view_page=5;
												$query="select question, answer from question2 order by id desc limit $page, $view_page";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for( $i=0;$i<$number;$i++ )
												{
													$question=mysql_result($result,$i,'question');
													$answer=mysql_result($result,$i,'answer');
													print"<tr valign=top>
														<td width=285 class=blue style='text-align: justify;'>$question</td>
														<td width=54 align=center> "; if( $answer!="" ){ print"<img src=images/right.jpg>"; } print" </td>
														<td width=285 style='text-align: justify;'>$answer</td>
													</tr><tr height=30><td colspan=3></td></tr>";
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==4 )	// ���������� ��������
											{
												if( !isset( $_POST["point_otp"] ) ){ $point_otp=24; }else{ $point_otp=$_POST["point_otp"]; }
												if( !isset( $_POST["point_prib"] ) ){ $point_prib=0; }else{ $point_prib=$_POST["point_prib"]; }
												if( !isset( $_POST["route"] ) ){ $route=0; }else{ $route=$_POST["route"]; }
												if( !isset( $_POST["type"] ) ){ $type=0; }else{ $type=$_POST["type"]; }
												if( !isset( $_POST["ticket"] ) ){ if( isset( $_GET["type"] ) ){ $ticket=0; }else{ $ticket=1; } }else{ $ticket=$_POST["ticket"]; }

												if( isset( $_POST["find"] ) || isset( $_GET["type"] ) )
												{
													if( $route==0 ){ $par1="<>"; }else{ $par1="="; }
													if( $point_otp==0 ){ $par2="<>"; }else{ $par2="="; }
													if( $point_prib==0 ){ $par3="<>"; }else{ $par3="="; }
													if( $type==0 ){ $par4="<>"; }else{ $par4="="; }

													for( $j=0;$j<=$ticket;$j++ )
													{
														$point_otp_=$point_otp;
														$point_prib_=$point_prib;
														if( $j!=0 ){ $point_temp=$point_otp; $point_otp_=$point_prib; $point_prib_=$point_temp; $par_temp=$par2; $par2=$par3; $par3=$par_temp; }
														$query="select * from auto_path, auto_route where auto_route.id=auto_path.route and route $par1 '$route' and type $par4 '$type' and point_otp $par2 '$point_otp_' and point_prib $par3 '$point_prib_' order by time_otp, time_prib";
														if( isset( $_GET["type"] ) ){ $query="select * from auto_path, auto_route where auto_route.id=auto_path.route and type = '".$_GET["type"]."' order by time_otp, time_prib"; }
														$result=mysql_query($query);
														$number=mysql_numrows($result);
														if( $number!=0 )
														{
															if( $j==0 ){ print"<b class=blue>��������� ������</b><br><br>"; }else{ print"<br><b class=blue>�������� ����</b><br><br>"; }
															print"<table class=ticket>
															<tr class=ticket_head height=4><td colspan=8></td></tr>
															<tr class=ticket_head>
																<td width=50> &nbsp; �</td>
																<td width=130>�����������</td>
																<td width=50>�����</td>
																<td width=130>��������</td>
																<td width=50>�����</td>
																<td width=150>��� ����������</td>
																<td width=100>����������, ��.</td>
																<td>����, ���.</td>
															</tr>
															<tr class=ticket_head height=4><td colspan=8></td></tr>
															<tr height=4><td colspan=8></td></tr>";
														}
														for( $i=0;$i<$number;$i++ )
														{
															$nomer_find=mysql_result($result,$i,'nomer');
															$point_otp_find=auto_point( mysql_result($result,$i,'point_otp') );
															$time_otp_find=mysql_result($result,$i,'time_otp');
															$point_prib_find=auto_point( mysql_result($result,$i,'point_prib') );
															$time_prib_find=mysql_result($result,$i,'time_prib');
															$days_find=mysql_result($result,$i,'days');
															$distance_find=mysql_result($result,$i,'distance');
															$cost_find=mysql_result($result,$i,'cost');
															print"<tr>
																<td> &nbsp; $nomer_find</td>
																<td>$point_otp_find</td>
																<td>$time_otp_find</td>
																<td>$point_prib_find</td>
																<td>$time_prib_find</td>
																<td>$days_find</td>
																<td>$distance_find</td>
																<td>$cost_find</td>
															</tr>
															<tr height=4><td colspan=8></td></tr>";
															if( $i < $number-1 ){ print"<tr height=1><td colspan=8 style='background: #ffffff;'></td></tr><tr height=4><td colspan=8></td></tr>"; }

														}
														if( $number!=0 ){ print"</table>"; }
													}
													print"<br>";
												}

												print"<form action=index.php?r=$r method=post>
													<span class=blue><b class=blue>����� ������������ �����</b><br>����� � ���������� ������� �������</span><br><br>
													<div class=right>
														<a href=index.php?r=29>�����</a><br><br>
														<a href=index.php?r=30>��������</a><br><br>
														<a href=index.php?r=31>������</a><br><br>
														<!--<a href=index.php?r=32>��������</a><br><br>-->
													</div>
													<div class=left>����� �����������</div>
													<div>
														<select name=point_otp>
															<option value=0>�� ��������� ����� �����������</option>";
															$query="select id, name from auto_point order by name";
															$result=mysql_query($query);
															$number=mysql_numrows($result);
															for( $i=0;$i<$number;$i++ )
															{
																$id=mysql_result($result,$i,'id');
																$name=mysql_result($result,$i,'name');
																print"<option value=$id "; if( $point_otp==$id ){ print"selected"; } print" >$name</option>";
															}
														print"</select>
													</div>
													<div class=left>����� ��������</div>
													<div>
														<select name=route>
															<option value=0>�� ��������� ����� ��������</option>";
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
													</div>
													<div class=left>����-�������</div>
													<div>
														<select name=ticket>
															<option value=0 "; if( $ticket==0 ){ print"selected"; } print" >� ���� �����</option>
															<option value=1 "; if( $ticket==1 ){ print"selected"; } print" >����-�������</option>
														</select>
													</div>
													<div class=left>����� ����������</div>
													<div>
														<select name=point_prib>
															<option value=0>�� ��������� ����� ����������</option>";
															$query="select id, name from auto_point order by name";
															$result=mysql_query($query);
															$number=mysql_numrows($result);
															for( $i=0;$i<$number;$i++ )
															{
																$id=mysql_result($result,$i,'id');
																$name=mysql_result($result,$i,'name');
																print"<option value=$id "; if( $point_prib==$id ){ print"selected"; } print" >$name</option>";
															}
														print"</select>
													</div>
													<!--<div class=left>��� �����</div>
													<div>
														<select name=type>
															<option value=0>�� ���������</option>
															<option value=1 "; if( $type==1 ){ print"selected"; } print" >�����</option>
															<option value=2 "; if( $type==2 ){ print"selected"; } print" >��������</option>
															<option value=3 "; if( $type==3 ){ print"selected"; } print" >��������</option>
															<option value=4 "; if( $type==4 ){ print"selected"; } print" >������������� �����</option>
														</select>
													</div>-->
													<div class=left>&nbsp;</div>
													<div>
														<input type=submit name=find value=������ style='width: 123px;'>
														<input type=button value=����� onclick='window.location.href=\"index.php?r=$r\"' style='width: 123px;'>
													</div>
												</form>";

												print"<br><br>$content";


												$query="select id from route where id='0' ";
												
											}
											elseif( $r==5 )	// �������
											{
												$view_page=8;
												if( isset( $_GET["n"] ) )
												{
													$query="select id, dat, name, content from news where id='".$_GET["n"]."'";
												}
												else
												{
													$query="select id, dat, name, content from news order by dat desc, id desc limit $page, $view_page";
												}
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for($i=0;$i<$number;$i++)
												{
													$id=mysql_result($result,$i,'id');
													$date=date( "d.m.Y" ,mysql_result($result,$i,'dat') );
													$name=mysql_result($result,$i,'name');
													$content=mysql_result($result,$i,'content');
													$content2=substr( trim( strip_tags( $content ) ), 0, 100 )."...";
													if( isset( $_GET["n"] ) )
													{
														print"<tr>
															<td>
																<span class=blue>$date</span> &nbsp; <b class=blue>$name</b>
																<div style='text-align: justify; margin-top: 10px;'>$content</div>
																<br><div style='text-align: right;'><a href=index.php?r=$r onclick='window.history.back(); return false;' title='�����'>�����</a></div><br>
															</td>
														</tr>";
													}
													else
													{
														if( $i % 2==0 ){ print"<tr valign=top>"; }
															print"<td width=292><a href=index.php?r=$r&n=$id><span class=blue>$date</span> &nbsp; <b class=blue>$name</b></a><div style='text-align: justify; margin-top: 10px;'>$content2</div></td><td width=20></td>";
														if( $i % 2!=0 ){ print"</tr><tr height=20><td colspan=4></td></tr>"; }
														if( $i % 2!=0 ){ print"<td width=292></td><td widht=20></td></tr><tr height=20><td colspan=4></td></tr>"; }
													}
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==3 )	// ������-�����
											{

												$query = "select content from pages where id='$r' ";
												$result = mysql_query( $query );
												while( $data = mysql_fetch_array( $result ) ) {
													echo $data['content']."<br />";
												}

												$error="";

												if( !isset( $_POST["send"] ) )
												{
													$_POST["name"]="";
													$_POST["email"]="";
													$_POST["message"]="";
												}

												if( isset( $_POST["send"] ) )
												{

													$_POST["name"] = stringSimple( $_POST["name"] );
													$_POST["message"] = stringSimple( $_POST["message"] );
													$_POST["email"] = stringSimple( $_POST["email"] );
													$_POST['code'] = stringSimple( $_POST['code'] );
													$_SESSION['secpic'] = stringSimple( $_SESSION['secpic'] );

													if( $_POST["name"]!="" && $_POST["message"]!="" && $_POST["name"]!="" && $_POST['code'] == $_SESSION['secpic']  )
													{

														mysql_query("insert into question values('', '".$_POST["message"]."', '', '".$_POST["name"]."', '".$_POST["email"]."', '".$_SERVER['REMOTE_ADDR']."' )");

														$headers= "MIME-Version: 1.0\r\n";
														$headers .= "Content-type: text/html; charset=windows-1251\r\n";
														$headers .= "From:".$_POST["email"]."<".$_POST["email"].">\r\n";
														$message="<b>�������� �����</b><br><br><b>���:</b> ".$_POST["name"]."<br><b>���������:</b> ".$_POST["message"]."<br><b>E-mail:</b> ".$_POST["email"];
														mail("$admin_email4", "����� ��������� � �������� �����", "$message", $headers);

														$error="������ ������� ����������";
														$_POST["name"]="";
														$_POST["email"]="";
														$_POST["message"]="";
													}
													else
													{
														$error="�� ����������� ��������� �������� ����";
													}
												}

												print"<form action=index.php?r=$r method=post>
													<div class=orange></div><br>
													<div class=left>���</div>
													<div><input type=text name=name value='".$_POST["name"]."'></div>
													<div class=left>���������</div>
													<div><textarea name=message rows=5>".$_POST["message"]."</textarea></div>
													<div class=left>E-mail</div>
													<div><input type=text name=email value='".$_POST["email"]."'></div>
													<div class=left><img src='js/secpic/secpic.php'></div>
													<div>
														<input type=text name=code value='��� � ��������'>
														<input type=submit name=send value='���������'>
													</div><br />
													<div class=left>&nbsp;</div>
													<div>$error</div>
												</form><br />";







												$view_page=5;
												$query="select question, answer, name, email from question order by id desc limit $page, $view_page";
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												if( $number!=0 ){ print"<table width=624 align=center>"; }
												for( $i=0;$i<$number;$i++ )
												{
													$question=mysql_result($result,$i,'question');
													$answer=mysql_result($result,$i,'answer');
													$name=mysql_result($result,$i,'name');
													$email=mysql_result($result,$i,'email');
													print"<tr valign=top>
														<td width=285 class=blue style='text-align: justify;'>$question<br><b><a href=mailto:$email>$name</a></b></td>
														<td width=54 align=center> "; if( $answer!="" ){ print"<img src=images/right.jpg>"; } print" </td>
														<td width=285 style='text-align: justify;'>$answer</td>
													</tr><tr height=30><td colspan=3></td></tr>";
												}
												if( $number!=0 ){ print"</table>"; }
											}
											elseif( $r==18 )	// �����������
											{
												print"<link rel='stylesheet' href='js/lightbox/lightbox.css' type='text/css' media='screen' />
												<script src='js/lightbox/prototype.js' type='text/javascript'></script>
												<script src='js/lightbox/scriptaculous.js?load=effects,builder' type='text/javascript'></script>
												<script src='js/lightbox/lightbox.js' type='text/javascript'></script>";

												print"<table width=624 align=center>";
												if( !isset( $_GET["n"] ) )
												{
													$view_page=100000000;
													$query="select id, name, preview from album order by id desc limit $page, $view_page";
												}
												else
												{
													$view_page=9;
													$query="select id, picture from photo where razdel='".$_GET["n"]."' order by id desc limit $page, $view_page";
												}
												$col=0;
												$result=mysql_query($query);
												$number=mysql_numrows($result);
												for( $i=0;$i<$number;$i++ )
												{
													$id=mysql_result($result,$i,'id');
													if( !isset( $_GET["n"] ) )
													{
														$name=mysql_result($result,$i,'name');
														$preview=mysql_result($result,$i,'preview');
													}
													else
													{
														$preview=mysql_result($result,$i,'picture');
														$extrapage="&n=".$_GET["n"];
													}
													if( $col==0 ){ print"<tr valign=top>"; }
													print"<td width=160><div class=preview style='background: url(uploadfiles/$preview.jpg) center center no-repeat;'><a href="; if( !isset( $_GET["n"] ) ){ print"index.php?r=$r&n=$id"; }else{ print"uploadfiles/".$preview."_b.jpg rel=lightbox[".$_GET["n"]."]"; } print"><img src=images/transparent.gif width=158 height=158></a></div>";if( !isset( $_GET["n"] ) ){ print"<div class=picture_text><a href=index.php?r=$r&n=$id>$name</a></div>"; } print"</td>";
													if( $col==0 || $col==1 ){ print"<td width=72></td>"; }
													$col++;
													if( $col==3 ){ print"</tr><tr height=20><td colspan=5></td></tr>"; $col=0; }
												}
												if( $col==1 ){ print"<td colspan=3></td></tr>"; }
												if( $col==2 ){ print"<td></td></tr>"; }
												if( $number==0 ){ print"<tr><td><p>����������� �� ���������...</p></td></tr>"; }
												print"</table>";
											}
											elseif( $r==28 )	// ����� ������
											{
												if( isset( $_POST["send"] ) )
												{
													if( isset( $_POST["accept"] ) )
													{
														$msg = "<b>�������:</b> ".$_POST["surname"]."<br>";
														$msg .= "<b>���:</b> ".$_POST["name"]."<br>";
														$msg .= "<b>��������:</b> ".$_POST["patronymic"]."<br>";
														$msg .= "<b>���� ��������:</b> ".$_POST["day"].".".$_POST["month"].".".$_POST["year"]."<br>";
														$msg .= "<b>���:</b> ".$_POST["sex"]."<br>";
														$msg .= "<b>����� ����������:</b> ".$_POST["region"]." ".$_POST["area"]."<br>";
														$msg .= "<b>����:</b> <br>";
														for( $i=0;$i<5;$i++ ){ if( $_POST["kids$i"]!="" ){ $msg.="<b>������� ".($i+1).":</b> ".$_POST["kids$i"]."<br>"; } }
														$msg .= "<b>�����������:</b> <br><br>";
														for( $i=0;$i<$_POST["education_count"];$i++ )
														{
															$msg.="<b>����������� ".($i+1).":</b> ".$_POST["education$i"]."<br>";
															$msg.="<b>������� ��������� ".($i+1).":</b> ".$_POST["institut$i"]."<br>";
															$msg.="<b>������������� ".($i+1).":</b> ".$_POST["speciality$i"]."<br>";
															$msg.="<b>������������ ".($i+1).":</b> ".$_POST["qualification$i"]."<br>";
															$msg.="<b>��� ��������� ".($i+1).":</b> ".$_POST["education_year$i"]."<br><br>";
														}
														$msg .= "<b>�������������� �����������:</b> <br><br>";
														for( $i=0;$i<$_POST["education_extra_count"];$i++ )
														{
															$msg.="<b>������� ��������� ".($i+1).":</b> ".$_POST["institut_extra$i"]."<br>";
															$msg.="<b>������������� ".($i+1).":</b> ".$_POST["speciality_extra$i"]."<br>";
															$msg.="<b>��� ��������� ".($i+1).":</b> ".$_POST["education_year_extra$i"]."<br><br>";
														}

														$msg .= "<b>�������� ������������:</b> <br><br>";

														for( $i=0;$i<$_POST["work_count"];$i++ )
														{
															$msg.="<b>������������ ����������� ".($i+1).":</b> ".$_POST["manufacture$i"]."<br>";
															$msg.="<b>�������������� ".($i+1).":</b> ".$_POST["place$i"]."<br>";
															$msg.="<b>���������, ������������� ".($i+1).":</b> ".$_POST["work$i"]."<br>";
															$msg.="<b>����������� ����������� ".($i+1).":</b> ".$_POST["duty$i"]."<br><br>";
														}


														$msg .= "<b>�� ����� ��������� ���������� ����������:</b> ".$_POST["post"]."<br>";
														$msg .= "<b>������ ��:</b> ".$_POST["pk"]."<br>";
														$msg .= "<b>�������������� ����������:</b> ".$_POST["extra"]."<br>";
														$msg .= "<b>�������:</b> ".$_POST["phone"]."<br>";
														$msg .= "<b>E-mail:</b> ".$_POST["email"]."<br>";

														$boundary = "".strtoupper(md5(uniqid(rand())));
														$headers = "Date: ". date('D, d M Y h:i:s O') ."\r\n";
														$headers .= "From: ".$_POST["email"]."\r\n";
														$headers .= "Subject: ������ � ����� �����\r\n";
														$headers .= "X-Mailer: PHPMail Tool\r\n";
														$headers .= "MIME-Version: 1.0\r\n";
														$headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n\r\n";
														$str = "--".$boundary."\r\n";
														$str .= "Content-Type: text/html; charset=windows-1251\r\n";
														$str .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
														$str .= $msg."\r\n\r\n";
														$subject = "������ � ����� �����";
														mail($admin_email3, $subject, $str, $headers);
														print"<script>alert('���� ������ ����������');</script>";
													}
													else{ print"<script>alert('�� �� ���� ���� �������� �� �������� ������, ���� ������ �� ����� ����������');</script>"; }
												}

												print"<script src=js/calendar/calendar_ru.js></script>
												<script>
													function func_education()
													{
														if( document.form.education_count.value<3 )
														{
															document.getElementById('education').style.display='block';
															document.getElementById('education').innerHTML+=\"<br><div class=left>����������� *</div><div><input type=radio name='education\"+document.form.education_count.value+\"' value=��������� class=radio checked> ���������<input type=radio name='education\"+document.form.education_count.value+\"' value=������� class=radio> �������</div><div class=left>&nbsp;</div><div><input type=radio name='education\"+document.form.education_count.value+\"' value=������-���������������� class=radio> ������-����������������<input type=radio name='education\"+document.form.education_count.value+\"' value=������ class=radio> ������</div><div class=left>&nbsp;</div><div><span class=small_text>������� ���������:</span><br><input type=text name='institut\"+document.form.education_count.value+\"'></div><div class=left>&nbsp;</div><div><span class=small_text>�������������:</span><br><input type=text name='speciality\"+document.form.education_count.value+\"'></div><div class=left>&nbsp;</div><div><span class=small_text>������������:</span><br><input type=text name='qualification\"+document.form.education_count.value+\"'></div><div class=left>&nbsp;</div><div>��� ��������� <select name='education_year\"+document.form.education_count.value+\"' style='width: 60px;'>"; for( $i=date("Y")-90; $i<date("Y")+1; $i++ ){ print"<option>$i</option>"; } print"</select></div><br><br>\";
 															document.form.education_count.value=parseInt( document.form.education_count.value )+1;
														}
													}

													function func_education_extra()
													{
														if( document.form.education_extra_count.value<3 )
														{
															document.getElementById('education_extra').style.display='block';
															document.getElementById('education_extra').innerHTML+=\"<br><div class=left>�������������� �����������</div><div><span class=small_text>������� ���������:</span><br><input type=text name='institut_extra\"+document.form.education_extra_count.value+\"'></div><div class=left>&nbsp;</div><div><span class=small_text>�������������, ������������:</span><br><input type=text name='speciality_extra\"+document.form.education_extra_count.value+\"'></div><div class=left>&nbsp;</div><div>��� ��������� <select name='education_year_extra\"+document.form.education_extra_count.value+\"' style='width: 60px;'>"; for( $i=date("Y")-90; $i<date("Y")+1; $i++ ){ print"<option>$i</option>"; } print"</select></div><br><br>\";
 															document.form.education_extra_count.value=parseInt( document.form.education_extra_count.value )+1;
														}
													}

													function func_work()
													{
														if( document.form.work_count.value<3 )
														{
															document.getElementById('work').style.display='block';
															document.getElementById('work').innerHTML+=\"<br><div class=left>�������� ������������<br>�� ���������</div><div><span class=small_text>������������ �����������:</span><br><input type=text name='manufacture\"+document.form.work_count.value+\"'></div><div class=left>&nbsp;</div><div><span class=small_text>��������������:</span><br><input type=text name='place\"+document.form.work_count.value+\"'></div><div class=left>&nbsp;</div><div><span class=small_text>���������, �������������:</span><br><textarea rows=3 name='work\"+document.form.work_count.value+\"'></textarea></div><div class=left>&nbsp;</div><div><span class=small_text>����������� �����������:</span><br><textarea rows=3 name='duty\"+document.form.work_count.value+\"'></textarea></div><div class=left>&nbsp;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><br>\";
 															document.form.work_count.value=parseInt( document.form.work_count.value )+1;
														}
													}
												</script>";
												print"<form name=form action=index.php?r=$r method=post class=form>
													<input type=hidden name=education_count value=1>
													<input type=hidden name=education_extra_count value=1>
													<input type=hidden name=work_count value=1>
													<div class=left>������� *</div>
													<div><input type=text name=surname></div>
													<div class=left>��� *</div>
													<div><input type=text name=name></div>
													<div class=left>�������� *</div>
													<div><input type=text name=patronymic></div>
													<div class=left>���� �������� *</div>
													<div>
														<select name=day style='width: 40px;'>"; for($i=1;$i<32;$i++){ print"<option values=$i>$i</option>"; } print"</select>
														<select name=month style='width: 40px;'>"; for($i=1;$i<13;$i++){ print"<option values=$i>$i</option>"; } print"</select>
														<select name=year style='width: 60px;'>"; for($i=date("Y")-90;$i<date("Y")+1;$i++){ print"<option values=$i "; if( $i==date("Y")-18 ){ print"selected"; } print" >$i</option>"; } print"</select>
													</div>
													<div class=left>��� *</div>
													<div>
														<select name=sex>
															<option>�������</option>
															<option>�������</option>
														</select>
													</div>
													<div class=left><span class=small_text>&nbsp;</span><br>����� ���������� *</div>
													<div>
														<span class=small_text>������</span><br>
														<input type=text name=region>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>���������� �����</span><br>
														<input type=text name=area>
													</div><br>
													<div class=left><span class=small_text>&nbsp;</span><br>����</div>";
													for( $i=0;$i<5;$i++ )
													{
														if( $i!=0 ){ print"<div class=left>&nbsp;</div>"; }
														print"<div>
															<span class=small_text>������� ".($i+1)." �������</span><br>
															<input type=text name='kids$i'>
														</div>";
													}
													print"<br><div class=left>����������� *</div>
													<div>
														<input type=radio name='education0' value=��������� class=radio checked> ���������
														<input type=radio name='education0' value=������� class=radio> �������
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<input type=radio name='education0' value=������-���������������� class=radio> ������-����������������
														<input type=radio name='education0' value=������ class=radio> ������
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>������� ���������:</span><br>
														<input type=text name='institut0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>�������������:</span><br>
														<input type=text name='speciality0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>������������:</span><br>
														<input type=text name='qualification0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														��� ��������� <select name='education_year0' style='width: 60px;'>"; for( $i=date("Y")-90; $i<date("Y")+1; $i++ ){ print"<option "; if( $i==date("Y") ){ print"selected"; } print" >$i</option>"; } print"</select>
														<a href=## onclick='func_education(); return false;'>�������� ��� ���� ����� �����</a>
													</div><br>
													<div id=education></div><br>
													
													<div class=left>�������������� �����������</div>
													<div>
														<span class=small_text>������� ���������:</span><br>
														<input type=text name='institut_extra0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>�������������, ������������:</span><br>
														<input type=text name='speciality_extra0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														��� ��������� <select name='education_year_extra0' style='width: 60px;'>"; for( $i=date("Y")-90; $i<date("Y")+1; $i++ ){ print"<option "; if( $i==date("Y") ){ print"selected"; } print" >$i</option>"; } print"</select>
														<a href=## onclick='func_education_extra(); return false;'>�������� ��� ���� ����� �����</a>
													</div><br>
													<div id=education_extra></div><br>

													<div class=left>�������� ������������<br>�� ���������</div>
													<div>
														<span class=small_text>������������ �����������:</span><br>
														<input type=text name='manufacture0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>��������������:</span><br>
														<input type=text name='place0'>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>���������, �������������:</span><br>
														<textarea rows=3 name='work0'></textarea>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>����������� �����������:</span><br>
														<textarea rows=3 name='duty0'></textarea>
													</div>
													<div class=left>&nbsp;</div>
													<div>
														&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
														<a href=## onclick='func_work(); return false;'>�������� ��� ���� ����� ������</a>
													</div>
													<br>
													<div id=work></div><br>

													<div class=left>�� ����� ���������<br>���������� ���������� *</div>
													<div><input type=text name=post><br><span class=small_text>&nbsp;</span></div>
													<div class=left>������ ��</div>
													<div>
														<span class=small_text>�������:</span><br>
														<input type=radio name=pk value='������ �����������' class=radio checked> ������ �����������
													</div>
													<div class=left>&nbsp;</div>
													<div><input type=radio name=pk value='������� ������������' class=radio> ������� ������������</div>
													<div class=left>&nbsp;</div>
													<div><input type=radio name=pk value='������� ������������ ������������' class=radio> ������� ������������ ������������</div>
													<div class=left>&nbsp;</div>
													<div>
														<span class=small_text>������ ����������� ��������?</span><br>
														<textarea rows=3 name=programs></textarea>
													</div><br>
													<div class=left>�������������� ����������</div>
													<div><textarea rows=3 name=extra></textarea></div>
													<div class=left>������� *</div>
													<div><input type=text name=phone></div>
													<div class=left>E-mail</div>
													<div><input type=text name=email></div><br>
													<div><div style='width: 560px;'>� ������������ � �������� �������� ���������� ��������� � ����������� ������� ��&nbsp;������������ �������, � ����� ����� � � ����� �������� ������� ��� �����������&nbsp;���ϻ, ������������������� �� ������: 626150 ��������� �������             �. �������� ��. �.��������, 89, �������� �� �������� ���� ������������ ������ � ������� ���� ��� � ����� ���������� ����� ���������������.</div></div><br>
													<div class=left>&nbsp;</div>
													<div><input type=checkbox class=radio name=accept> �������� �� �������� ������ ������</div><br>
													<div class=left>&nbsp;</div>
													<div><input type=submit name=send value='��������� ������' style='width: 150px;'></div>";
												print"</form>";
											}
											else	// ��������� �������
											{
												if( $r==29 || $r==30 || $r==31 || $r==32 ){ print"<div class=cell_padding>"; }
													print"$content";
												if( $r==29 || $r==30 || $r==31 || $r==32 ){ print"</div>"; }

												if( $r==35 )	// ����������� ������
												{
													$error="";

													if( isset( $_POST["send"] ) )
													{

														$_POST["fio"]=stringSimple( $_POST["fio"] );
														$_POST["number"]=stringSimple( $_POST["number"] );
														$_POST["seria"]=stringSimple( $_POST["seria"] );
														$_POST["email"]=stringSimple( $_POST["email"] );
														$_POST["phone"]=stringSimple( $_POST["phone"] );
														$_POST["date"]=stringSimple( $_POST["date"] );
														$_POST['code'] = stringSimple( $_POST['code'] );
														$_SESSION['secpic'] = stringSimple( $_SESSION['secpic'] );

														if( $_POST["number"]!="" && $_POST["seria"]!="" && $_POST["email"]!="" && $_POST['code'] == $_SESSION['secpic']  )
														{

															$headers= "MIME-Version: 1.0\r\n";
															$headers .= "Content-type: text/html; charset=windows-1251\r\n";
															$headers .= "From:$admin_email5<$admin_email5>\r\n";
															$message="<b>��������������� ������ �� ���</b><br><br><b>���:</b> ".$_POST["fio"]."<br><b>���. ��������������� ���� ��:</b> ".$_POST["number"]."<br><b>�����, ����� ������������� � ����������� ��:</b> ".$_POST["seria"]."<br><b>���������� e-mail ���������:</b> ".$_POST["email"]."<br><b>���������� ������� ���������:</b> ".$_POST["phone"]."<br><b>�������� ���� � ����� ��� ������:</b> ".$_POST["date"]."<br>";
															mail("$admin_email5", "��������������� ������ �� ���", "$message", $headers);

															$error="������ ������� ����������";
														}
														else
														{
															$error="�� ����������� ��������� �������� ����";
														}
													}

													print"<script src=js/calendar/calendar_ru.js></script>";
													print"<br><form action=index.php?r=$r method=post>
														<div class=blue><b class=blue>������ ������</b><br>* - �������� ������������ ���� ��� ����������</div><br>
														<div class=left2>���</div>
														<div><input type=text name=fio></div>
														<div class=left2>���. ��������������� ���� �� <span class=blue>*</span></div>
														<div><input type=text name=number></div>
														<div class=left2>�����, ����� ������������� � ����������� �� <span class=blue>*</span></div>
														<div><input type=text name=seria></div>
														<div class=left2>���������� e-mail ��������� <span class=blue>*</span></div>
														<div><input type=text name=email></div>
														<div class=left2>���������� ������� ���������</div>
														<div><input type=text name=phone value='+7' maxlength=12></div>
														<div class=left2>�������� ���� � ����� ��� ������</div>
														<div><input type=text name=date></div>
														<div class=left2><img src='js/secpic/secpic.php'></div>
														<div>
															<input type=text name=code value='��� � ��������'>
															<input type=submit name=send value='��������� ������'>
														</div><br>
														<div class=left2>&nbsp;</div>
														<div>$error</div>
													</form>";
												}

												if( $r==6 )	// ����� ���������
												{
													$error="";

													if( isset( $_POST["send"] ) )
													{

														$_POST["time"] = stringSimple( $_POST["time"] );
														$_POST["from"] = stringSimple( $_POST["from"] );
														$_POST["to"] = stringSimple( $_POST["to"] );
														$_POST["fio"] = stringSimple( $_POST["fio"] );
														$_POST["phone"] = stringSimple( $_POST["phone"] );
														$_POST['code'] = stringSimple( $_POST['code'] );
														$_SESSION['secpic'] = stringSimple( $_SESSION['secpic'] );


														if( $_POST["fio"]!="" && $_POST["phone"]!="" && $_POST["from"]!="" && $_POST["to"]!="" && $_POST['code'] == $_SESSION['secpic'] )
														{

															$headers= "MIME-Version: 1.0\r\n";
															$headers .= "Content-type: text/html; charset=windows-1251\r\n";
															$headers .= "From:$admin_email<$admin_email>\r\n";
															$message="<b>����� ��������</b><br><br><b>�����:</b> ".$_POST["marka"]."<br><b>����:</b> ".$_POST["date"]."<br><b>�����:</b> ".$_POST["time"]."<br><b>�����������������:</b> ".$_POST["time_long"]." ���.<br><b>����: ������:</b> ".$_POST["from"]."<br><b>���� : ����:</b> ".$_POST["to"]."<br><b>���������� ����:</b> ".$_POST["fio"]."<br><b>���������� �������:</b> ".$_POST["phone"];
															mail("$admin_email", "������ ������ �� ����� ��������", "$message", $headers);

															$error="������ ������� ����������";
														}
														else
														{
															$error="�� ����������� ��������� �������� ����";
														}
													}

													$view_page=3;
													$query="select id, name, place, picture_01, picture_02 from bus order by id desc limit $page, $view_page";
													$result=mysql_query($query);
													$number=mysql_numrows($result);
													if( $number!=0 ){ print"<br><table><tr>"; }
													print"<td width=20><a href=index.php?r=$r&page=".($page-$view_page)." title='�����' "; if( $page==0 ){ print"onclick='return false;'"; } print"><img src=images/left.jpg></a></td>";
													for( $i=0;$i<$number;$i++ )
													{
														$id=mysql_result( $result,$i,'id' );
														$name=mysql_result( $result,$i,'name' );
														$place=mysql_result( $result,$i,'place' );
														$picture_01=mysql_result( $result,$i,'picture_01' );
														$picture_02=mysql_result( $result,$i,'picture_02' );
														print"<td class=marka>
															<div class=picture style='background: url( uploadfiles/$picture_01.jpg ) center center no-repeat;'><a rel=lightbox[$i] href=uploadfiles/".$picture_01."_b.jpg><img src=images/transparent.gif width=123 height=123></a></div>
															<div class=picture style='background: url( uploadfiles/$picture_02.jpg ) center center no-repeat;'><a rel=lightbox[$i] href=uploadfiles/".$picture_02."_b.jpg><img src=images/transparent.gif width=123 height=123></a></div>
															<div>�����: $name<br>����: $place</div>
														</td>";
													}
													$number_= ceil( mysql_numrows( mysql_query( str_replace( "limit $page, $view_page", "", $query ) ) ) / $view_page );
													print"<td width=20 align=right><a href=index.php?r=$r&page=".($page+$view_page)." title='������' "; if( $number_ * $view_page - $view_page <= $page ){ print"onclick='return false;'"; } print"><img src=images/right.jpg></a></td>";
													if( $number!=0 ){ print"</tr></table>"; }
													$query="select id from bus where id=0";

													print"<script src=js/calendar/calendar_ru.js></script>";
													print"<br><form action=index.php?r=$r method=post>
														<div class=orange>������ ������</div><br>
														<div class=left>�����</div>
														<div>
															<select name=marka>
																<option value='����� �� �����'>����� �� �����</option>";
																	$query2="select id, name from bus order by id desc";
																	$result=mysql_query($query2);
																	$number=mysql_numrows($result);
																	for( $i=0;$i<$number;$i++ )
																	{
																		$id=mysql_result($result,$i,'id');
																		$name=mysql_result($result,$i,'name');
																		print"<option value='$name'>$name</option>";
																	}
															print"</select>
														</div>
														<div class=left>����</div>
														<div><input type=text name=date value='".date("d.m.Y")."' onfocus='this.select();lcs(this)' onclick='event.cancelBubble=true;this.select();lcs(this);'></div>
														<div class=left>�����, �. ���.</div>
														<div>
															<select name=time>";
																for( $i=0; $i<24;$i++ )
																{
																	print"<option value='$i:00'>$i:00</option>";
																}
															print"</select>
														</div>
														<div class=left>�����������������, ���</div>
														<div><input type=text name=time_long value=240></div>
														<div class=left>����: ������</div>
														<div><input type=text name=from></div>
														<div class=left>����: ����</div>
														<div><input type=text name=to></div>
														<div class=left>���������� ����</div>
														<div><input type=text name=fio></div>
														<div class=left>���������� �������</div>
														<div><input type=text name=phone value='+7' maxlength=12></div>
														<div class=left><img src='js/secpic/secpic.php'></div>
														<div>
															<input type=text name=code value='��� � ��������'>
															<input type=submit name=send value='��������� ������'>
														</div><br>
														<div class=left>&nbsp;</div>
														<div>$error</div>
													</form>";
													print"<link rel='stylesheet' href='js/lightbox/lightbox.css' type='text/css' media='screen' />
													<script src='js/lightbox/prototype.js' type='text/javascript'></script>
													<script src='js/lightbox/scriptaculous.js?load=effects,builder' type='text/javascript'></script>
													<script src='js/lightbox/lightbox.js' type='text/javascript'></script>";
												}

												if( $r==9 )	// ��������� ���������
												{

													if( !isset( $_GET['n'] ) ) {
														$_GET['n'] = 0;
													}

													print"<br><a href=index.php?r=$r class=name "; if( $_GET["n"] == 1 ){ print"style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'"; } print">���������</a> &nbsp; &nbsp; <a href=index.php?r=$r&n=1 class=name "; if( $_GET["n"] == 0 ){ print"style='color: #b3b3b3; border-bottom: 1px dashed #b3b3b3;'"; } print">�����</a><br><br>";
													$view_page=20;
													$query="select name, file from file2 where type='".$_GET["n"]."' order by id desc limit $page, $view_page";
													$result=mysql_query($query);
													$number=mysql_numrows($result);
													if( $number!=0 ){ print"<table width=624 align=center>"; }
													for( $i=0;$i<$number;$i++ )
													{
														$name=mysql_result($result,$i,'name');
														$file=mysql_result($result,$i,'file');
														print"<tr valign=top><td><div><a href=uploadfiles/$file title='�������'>$name</a></div></td></tr>
														<tr height=9><td></td></tr>";
													}
													if( $number!=0 ){ print"</table>"; }
												}
											}
											pages( $query, $r, $view_page, $page, $extrapage );	// ������������ �����
										print"</div>
									</td>
									<!--<td width=200 align=right><div style='text-align: right;'>"; baner($r); print"</div></td>-->
								</tr>
								<tr>
									<td height=100 width=220>&nbsp;</td>
									<!--<td height=100 width=200>&nbsp;</td>-->
								</tr>
								<tr height=70>
									<td colspan=2>&nbsp;</td>
								</tr>								
							</table>
						</td>
						<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
					</tr>";
				}
				/*
				print"<tr height=230 valign=top align=center>
					<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
					<td style='background: url(images/footer.jpg) center bottom no-repeat;'>
						<table width=944 align=center>
							<tr><td colspan=2 align=right><img src=images/path.gif height=60></td></tr>
							<tr valign=top>
								<td><a href=index.php?r=10 title='���������� ����������'><img src=images/button_bus_station.gif></a></td>
								<td align=right><a href=http://e-traffic.ru title='������� �������' target='_blank'><img src=images/button_ticket.gif></a></td>
							</tr>
							<tr height=90 align=right valign=bottom>
								<td align=left><!--LiveInternet counter--><script type=\"text/javascript\">document.write(\"<a href='http://www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t18.11;r\" + escape(document.referrer) + ((typeof(screen)==\"undefined\")?\"\":\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + \";u\" + escape(document.URL) + \";\" + Math.random() + \"' border=0 width=88 height=31 alt='' title='LiveInternet: �������� ����� ���������� �� 24 ����, ����������� �� 24 ���� � �� �������'><\/a>\")</script><!--/LiveInternet--></td>
								<td><a href=http://tri-t.ru title='��������� ��������� ���� һ'>� 2010 ���������� ����<br>�������� ����� ���� һ <img src=images/trit.gif></a></td>
							</tr>
						</table>
					</td>
					<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>
				</tr>";
				*/
				echo "<tr height=100 valign=top align=center>
					<td style='background: url(images/shadow_left.jpg) right top repeat-y;'>&nbsp;</td>
					<td "; if( $r == 1 ){ echo "class='mainPage'"; } else { echo "class='mainPageNo'"; } echo ">
							<table width=944 align=center>
								<tr height=100 align=right>
									<td align=left><!--LiveInternet counter--><script type=\"text/javascript\">document.write(\"<a href='http://www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t18.11;r\" + escape(document.referrer) + ((typeof(screen)==\"undefined\")?\"\":\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + \";u\" + escape(document.URL) + \";\" + Math.random() + \"' border=0 width=88 height=31 alt='' title='LiveInternet: �������� ����� ���������� �� 24 ����, ����������� �� 24 ���� � �� �������'><\/a>\")</script><!--/LiveInternet--></td>
									<td><a href=index.php?r=10 title='���������� ����������'><img src=images/button_bus_station.gif></a></td>
									<td align=right><a href=http://e-traffic.ru title='������� �������' target='_blank'><img src=images/button_ticket.gif></a></td>
									<td align=right><a href=http://tri-t.ru title='��������� ��������� ���� һ'>� 2010 ���������� ����<br>�������� ����� ���� һ</a></td>
								</tr>
							</table>
					</td>
					<td style='background: url(images/shadow_right.jpg) left top repeat-y;'>&nbsp;</td>				
				</tr>";
			?>
		</table>
	</body>
</html>
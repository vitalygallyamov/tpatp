<?php
	$local="localhost";
	$log="tpatpr84_tpatpus";
	$pas="T28patp";
	$base="tpatpr84_tpatp";

	$admin_email="barsukova@tpatp.ru";
	$admin_email2="kozyrev@tpatp.ru";
	$admin_email3="teplinskaya@tpatp.ru";
	$admin_email4="tpatp@tpatp.ru";
	$admin_email5="diagnostika@tpatp.ru";

	$connection=mysql_connect($local,$log,$pas) or die ("can't connect to mysql");
//	mysql_query("create database $base");
	mysql_select_db($base) or die ("can't select base");

/*
	mysql_query("create table pages(id int auto_increment, name text, content text, title text, keywords text, description text, razdel int, primary key (id))");

	mysql_query("insert into pages values( '1', '�������', '<p>������ ��������� � ����������...</p>', '�������', '�������', '�������', '0' )");
	mysql_query("insert into pages values( '2', '� ��������', '<p>������ ��������� � ����������...</p>', '� ��������', '� ��������', '� ��������', '0' )");
	mysql_query("insert into pages values( '3', '�������� �����', '<p>������ ��������� � ����������...</p>', '�������� �����', '�������� �����', '�������� �����', '0' )");
	mysql_query("insert into pages values( '4', '���������� ��������', '<p>������ ��������� � ����������...</p>', '���������� ��������', '���������� ��������', '���������� ��������', '0' )");
	mysql_query("insert into pages values( '5', '�������', '<p>������ ��������� � ����������...</p>', '�������', '�������', '�������', '0' )");
	mysql_query("insert into pages values( '6', '����� ���������', '<p>������ ��������� � ����������...</p>', '����� ���������', '����� ���������', '����� ���������', '0' )");
	mysql_query("insert into pages values( '7', '�������', '<p>������ ��������� � ����������...</p>', '�������', '�������', '�������', '0' )");
	mysql_query("insert into pages values( '8', '�������������� ������', '<p>������ ��������� � ����������...</p>', '�������������� ������', '�������������� ������', '�������������� ������', '0' )");
	mysql_query("insert into pages values( '9', '��������� ���������', '<p>������ ��������� � ����������...</p>', '��������� ���������', '��������� ���������', '��������� ���������', '0' )");
	mysql_query("insert into pages values( '10', '���������� ����������', '<p>������ ��������� � ����������...</p>', '���������� ����������', '���������� ����������', '���������� ����������', '0' )");
	mysql_query("insert into pages values( '11', '������� �������', '<p>������ ��������� � ����������...</p>', '������� �������', '������� �������', '������� �������', '0' )");

	mysql_query("insert into pages values( '12', '���������', '<p>������ ��������� � ����������...</p>', '���������', '���������', '���������', '2' )");
	mysql_query("insert into pages values( '13', '�������', '<p>������ ��������� � ����������...</p>', '�������', '�������', '�������', '2' )");
	mysql_query("insert into pages values( '14', '���������� ���� �������', '<p>������ ��������� � ����������...</p>', '���������� ���� �������', '���������� ���� �������', '���������� ���� �������', '2' )");
	mysql_query("insert into pages values( '15', '����� ������', '<p>������ ��������� � ����������...</p>', '����� ������', '����� ������', '����� ������', '2' )");
	mysql_query("insert into pages values( '16', '����������������', '<p>������ ��������� � ����������...</p>', '����������������', '����������������', '����������������', '2' )");
	mysql_query("insert into pages values( '17', '���������� � ����������', '<p>������ ��������� � ����������...</p>', '���������� � ����������', '���������� � ����������', '���������� � ����������', '2' )");
	mysql_query("insert into pages values( '18', '�����������', '<p>������ ��������� � ����������...</p>', '�����������', '�����������', '�����������', '2' )");
	mysql_query("insert into pages values( '19', '������������', '<p>������ ��������� � ����������...</p>', '������������', '������������', '������������', '2' )");

	mysql_query("insert into pages values( '20', '����������� ������', '<p>������ ��������� � ����������...</p>', '����������� ������', '����������� ������', '����������� ������', '8' )");
	mysql_query("insert into pages values( '21', '�� � �� ��������� � �������� �����������', '<p>������ ��������� � ����������...</p>', '�� � �� ��������� � �������� �����������', '�� � �� ��������� � �������� �����������', '�� � �� ��������� � �������� �����������', '8' )");
	mysql_query("insert into pages values( '22', '������������ ������ ���������', '<p>������ ��������� � ����������...</p>', '������������ ������ ���������', '������������ ������ ���������', '������������ ������ ���������', '8' )");

	mysql_query("insert into pages values( '23', '������', '<p>������ ��������� � ����������...</p>', '', '', '', '0' )");

	mysql_query("insert into pages values( '24', '������������� ��������', '<p>������ ��������� � ����������...</p>', '������������� ��������', '������������� ��������', '������������� ��������', '6' )");
	mysql_query("insert into pages values( '25', '������-�����', '<p>������ ��������� � ����������...</p>', '������-�����', '������-�����', '������-�����', '3' )");


	mysql_query("insert into pages values( '26', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '7' )");
	mysql_query("insert into pages values( '27', '���������', '<p>������ ��������� � ����������...</p>', '���������', '���������', '���������', '7' )");
	mysql_query("insert into pages values( '28', '����� ������', '<p>������ ��������� � ����������...</p>', '����� ������', '����� ������', '����� ������', '7' )");

	mysql_query("insert into pages values( '29', '�����', '<p>������ ��������� � ����������...</p>', '�����', '�����', '�����', '0' )");
	mysql_query("insert into pages values( '30', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '0' )");
	mysql_query("insert into pages values( '31', '������', '<p>������ ��������� � ����������...</p>', '������', '������', '������', '0' )");
	mysql_query("insert into pages values( '32', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '0' )");

	mysql_query("create table baner(id int auto_increment, baner text, razdel int, href text, primary key (id))");
	mysql_query("create table file_razdel(id int auto_increment, name text, primary key (id))");
	mysql_query("create table file(id int auto_increment, name text, file text, razdel int, primary key (id))");
	mysql_query("create table law(id int auto_increment, name text, content text, razdel int, primary key (id))");
	mysql_query("create table book(id int auto_increment, name text, content text, picture text, primary key (id))");
	mysql_query("create table album(id int auto_increment, name text, preview text, primary key (id))");
	mysql_query("create table photo(id int auto_increment, picture text, razdel int, primary key (id))");

	mysql_query("create table news(id int auto_increment, dat int, name text, content text, primary key (id))");
	mysql_query("create table bus(id int auto_increment, name text, place int, picture_01 text, picture_02 text, primary key (id))");
	mysql_query("create table question(id int auto_increment, question text, answer text, primary key (id))");

	mysql_query("create table route(id int auto_increment, nomer text, days text, type int, primary key (id))");
	mysql_query("create table point(id int auto_increment, name text, primary key (id))");
	mysql_query("create table path(id int auto_increment, point_otp int, time_otp text, point_prib int, time_prib text, distance integer, cost double, route int, primary key (id))");
*/

/*
	mysql_query("create table auto_pages(id int auto_increment, name text, content text, title text, keywords text, description text, razdel int, primary key (id))");
	mysql_query("insert into auto_pages values( '1', '� ����������<br>�����������', '<p>������ ��������� � ����������...</p>', '� ���������� �����������', '� ���������� �����������', '� ���������� �����������', '0' )");
	mysql_query("insert into auto_pages values( '2', '<br>��� ����������', '<p>������ ��������� � ����������...</p>', '��� ����������', '��� ����������', '��� ����������', '0' )");
	mysql_query("insert into auto_pages values( '3', '<br>����������', '<p>������ ��������� � ����������...</p>', '����������', '����������', '����������', '0' )");
	mysql_query("insert into auto_pages values( '4', '<br>����������������', '<p>������ ��������� � ����������...</p>', '����������������', '����������������', '����������������', '0' )");
	mysql_query("insert into auto_pages values( '5', '<br>�������', '<p>������ ��������� � ����������...</p>', '�������', '�������', '�������', '0' )");
	mysql_query("insert into auto_pages values( '6', '<br>�������� �����', '<p>������ ��������� � ����������...</p>', '�������� �����', '�������� �����', '�������� �����', '0' )");
	mysql_query("insert into auto_pages values( '7', '����������<br>�������� ������������', '<p>������ ��������� � ����������...</p>', '���������� �������� ������������', '���������� �������� ������������', '���������� �������� ������������', '0' )");
	mysql_query("insert into auto_pages values( '8', '��������� ����', '<p>������ ��������� � ����������...</p>', '��������� ����', '��������� ����', '��������� ����', '0' )");

	mysql_query("create table auto_news(id int auto_increment, dat int, name text, content text, primary key (id))");
	mysql_query("create table auto_file_razdel(id int auto_increment, name text, primary key (id))");
	mysql_query("create table auto_file(id int auto_increment, name text, file text, razdel int, primary key (id))");

	mysql_query("create table auto_route(id int auto_increment, nomer text, days text, type int, primary key (id))");
	mysql_query("create table auto_point(id int auto_increment, name text, primary key (id))");
	mysql_query("create table auto_path(id int auto_increment, point_otp int, time_otp text, point_prib int, time_prib text, distance integer, cost double, route int, primary key (id))");

	mysql_query("insert into pages values( '26', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '7' )");
	mysql_query("insert into pages values( '27', '���������', '<p>������ ��������� � ����������...</p>', '���������', '���������', '���������', '7' )");
	mysql_query("insert into pages values( '28', '����� ������', '<p>������ ��������� � ����������...</p>', '����� ������', '����� ������', '����� ������', '7' )");

	mysql_query("create table file2(id int auto_increment, name text, file text, primary key (id))");
*/
/*
	mysql_query("insert into auto_pages values( '9', '�����', '<p>������ ��������� � ����������...</p>', '�����', '�����', '�����', '3' )");
	mysql_query("insert into auto_pages values( '10', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '3' )");
	mysql_query("insert into auto_pages values( '11', '������', '<p>������ ��������� � ����������...</p>', '������', '������', '������', '3' )");
	mysql_query("insert into auto_pages values( '12', '��������', '<p>������ ��������� � ����������...</p>', '��������', '��������', '��������', '3' )");
*/
/*
	mysql_query("alter table question add name text");
	mysql_query("alter table question add email text");
*/


	mysql_query("insert into pages values( '33', '����� ���������', '<p>������ ��������� � ����������...</p>', '����� ���������', '����� ���������', '����� ���������', '8' )");
	mysql_query("insert into pages values( '34', '������������� ���������', '<p>������ ��������� � ����������...</p>', '������������� ���������', '������������� ���������', '������������� ���������', '8' )");
	mysql_query("insert into pages values( '35', '��������������� ������ �� ���', '<p>������ ��������� � ����������...</p>', '��������������� ������ �� ���', '��������������� ������ �� ���', '��������������� ������ �� ���', '8' )");

	mysql_query("alter table file2 add type int default '0' ");
?>
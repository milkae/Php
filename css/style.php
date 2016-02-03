<?php
   header('content-type: text/css');
?>

html {
	height: 100%;
}
body {
	margin: 0;
	padding: 0;
	height: 100%;
	background-color: #404A47;
	color : #fff;
}
a {
	text-decoration: none;
	color : #fff;
}
a:hover{
	color:#880E4F;
}
ul {
	list-style: none;
}
/*HEADER*/
header{
	width: 100%;
	height:5%;
	background-color: #3C6083;
}
#menu {
	margin:0;
	padding-top: 0.5em;
}
#menu li{
	display: inline;
	padding-left: 1.4em;
}
/*SECTION*/
section {
	display : inline-flex;
	justify-content : space-around;
	height : 90%;
	width : 100%;
}
section div{
	display : inline-flex;
	flex-direction : column;
	align-items : center;
	justify-content : center;
	width: 60%;
	height: 100%;
}
h2 {
	text-align: center;
	color : #63051A;
}
/*ASIDE*/
aside {
	height : 100%;
	display : flex;
	justify-content : center;
	align-items : center;
	flex-direction : column;
}
aside nav {
	display : flex;
	justify-content : center;
	flex-direction : column;
}

.edit {
	color : #421B20;
	margin-right: 5%;
}
.post {
	padding : 1em;
	border-color: #F1A8B9;
	border-radius: 5px;
	background-color: #9B1A29;
}
/*ARTICLE*/
article {
	font-family: <?= $_GET['font'] ?>;
	text-align: center;
}
/*FOOTER*/
footer{
    width: 100%;
    height: 5%;
    background-color: #616781;
}
/*FORM*/
section form input, section form textarea, select {
	background-color: #722837;
}
form textarea {
	height: 200px;
}
form {
	text-align : center;
	display : flex;
	flex-direction : column;
	justify-content : space-between;
	width : 70%;
}
#submit, select {
	border-radius: 5px;
	padding : 1% 2%;
}
<?php

	//$id = 1; //id of user who is logged in
	
	select distinct uid from friendrequest where action = 'accepted' and  requestuser = 1 UNION
	select distinct requestuser from friendrequest where action = 'accepted' and uid = 1 ;
	//save in a variable
	//uids of friends
	//get unames
	
	//uids of pending friend requests
	//save in a variable
	//get unames
	select requestuser from friendrequest where action = 'pending' and uid = 1 ;
	
	//either rejected requests or never sent a request
	//save in a variable
	//get unames
	select * from user 
	where uid not in (select uid from friendrequest where action = 'accepted' and  requestuser = 1 UNION
	select requestuser from friendrequest where action = 'accepted' and uid = 1 union select requestuser from friendrequest where action = 'pending' and uid = 1);

?>
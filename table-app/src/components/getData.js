import React from 'react'

export var getData = async () => await fetch("JSONencodeSendToJsAPI.php")
    .then(response => response.json())
    .then((responseJson) => {

		
		//FilteringTable(responseJson); 
		console.log(responseJson); 
		//var obj = Object.fromEntries(responseJson); 
        return (responseJson);
    })
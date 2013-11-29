// funcion base que s'executa al principi i que crea tot o carrega algo generat.
function iniciar(){	//no rep paràmetres.
		indexedDB.deleteDatabase("volta"); //debug mode [borra la BD - desactivat -]
		var dbv = indexedDB.open("volta",1);
		console.log("abierta BD Volta");
		dbv.onupgradeneeded = function(e){
			console.log("run opungradendeend")
			var thisDB = e.target.result;
			// aqui creamos TODAS las tablas pero sin campos !!
			if(!thisDB.objectStoreNames.contains("CURSES")){ 
				thisDB.createObjectStore("CURSES",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("EQUIPS")){
				thisDB.createObjectStore ("EQUIPS",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("EQUIPSCURSA")){
				thisDB.createObjectStore ("EQUIPSCURSA",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("CORREDORS")){
				thisDB.createObjectStore ("CORREDORS",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("CORREDORSEQUIP")){
				thisDB.createObjectStore ("CORREDORSEQUIP",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("BOSSADALIMENTS")){
				thisDB.createObjectStore ("BOSSADALIMENTS",{keyPath: "id"});
			}
			if(!thisDB.objectStoreNames.contains("HISTORICCORREDORCURSA")){
				thisDB.createObjectStore ("HISTORICCORREDORCURSA",{keyPath: "id"});
			}

		}	
}

// Crear corredors (crea e inserta un corredor en BD)
function crearCorredor(nom,mmpt){ //mmpt = MetresMàximsPerTorn
	var store = trans.objectStore("CORREDORS");
	var request = store.put({
    	"id": 1,
    	"nom" : nom,
    	"MetresMaximsPerTorn" : 1000 //aqui debería cojer "mmpt, pero lo ignoro y pongo 1000 xk es demo"
  });

}

// Crea equips buits
function crearEquip(){
		var dbv = indexedDB.open("volta",1);

		dbv.indexedDB.addTodo = function(todoText) {
		var db = dbv.indexedDB.db;
		var trans = db.transaction(["CORREDORS"], IDBTransaction.READ_WRITE, 0);
		var store = trans.objectStore("CORREDORS");
		var request = store.put({
	    	"id": 1,
	    	"nom" : "nom",
	    	"MetresMaximsPerTorn" : 1000 //aqui debería cojer "mmpt, pero lo ignoro y pongo 1000 xk es demo"
	    	});
		console.log("Agregado el jugador!")
		request.onsuccess = function(e) {
	    	// Re-render all the todo's
	    	//dbv.indexedDB.getAllTodoItems();
	    	alert("Llega!xD");
		};	
	}
}
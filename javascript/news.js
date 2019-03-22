var list = new Vue({ 
    el: '#list',
    data: {
        articlesList: [
            {headline: 'Man runs marathon', content: 'lorem ipsum lorem ipsum lorem ipsum'},
            {headline: 'Woman wins award', content: 'ramble ramble ramble ramble'},
        ],
    },
    computed: {
        
    },
    mounted: function() {
        // Get the list text as array of strings from XMLHttpRequest()
        let listDataParsed = null;
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                console.log("responseText :", this.responseText);
                listDataParsed = JSON.parse(this.responseText);
                console.log("listDataParsed in xhr: ", listDataParsed);
                // Convert the strings array into valid todos objects and add to todos array 
                listDataParsed.map((val, index) => {
                    list.articlesList.push({headline: val['headline'], content: val['content']});
                });
            }
        };
        // xhr.open("GET", "newsAPI.php");
        // xhr.send();
    },
    methods: {
        updateItemRequest: function(item, action) {
            let todo = { todoText: item, action: action};
            // Create FormData object
            var formData = list.toFormData(todo);
            // Create http request
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState==4 && this.status==200){
                    console.log("response text: ", this.responseText);
                    let responseJSON = JSON.parse(this.responseText);
                    console.log("responseJSON: ", responseJSON);
                    if (responseJSON.error==true) {
                        list.errorMessage = responseJSON.message;
                        console.log("errorMessage: ", list.errorMessage);
                    } else { // XHR successful. Output success message below todolist 
                        list.successMessage = responseJSON.message;
                    }
                }
            };
            xhr.open("POST", "insert.php", true);
            xhr.send(formData);
        },

        toFormData: function(obj){
			console.log("toFormData() called");
			console.log("toFormData() parameter 'obj' contains: ", obj);
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},
    }
  })

const login = 'http://localhost:7001/antiguaBweb-1.0-SNAPSHOT/loginServlet';
axios.get(login)
    .then(response => {
        console.log(response.data);
        document.getElementById("demo").innerHTML = "<label>Cashier</label>" +
            "<input type='text' id='cashier' name='cashier' value='"+response.data +"'>";
    })
    .catch(error => {
        console.error(error)
    });
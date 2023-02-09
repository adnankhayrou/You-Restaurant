function showModel(nom,description,image,date){
    console.log("hi show M")
    console.log(nom+' , '+description+' , '+image+' , '+date)

    document.querySelector("#name").innerHTML = nom;
    document.querySelector("#description").innerHTML = description;
    // document.querySelector("#image").setAttribute("src",image);
    document.querySelector("#date").innerHTML = date;
    document.querySelector("#image-m").innerHTML = `<img src="storage/${image}" class="card-img-top rounded" with="100"  height="160">`;





}
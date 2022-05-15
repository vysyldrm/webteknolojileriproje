const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': 'ef3ac5a6f2mshd6b8dcdda03f54dp1726e6jsnb72b79cedd14'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=the%20lord%20of%20the%20rings', options)
	.then(response => response.json())
	.then(function(data){
		addMovies(data,1,2,3);
	})
	.then(response => console.log(response))
	.catch(err => console.error(err));

	fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=the%20godfather', options)
		.then(response => response.json())
		.then(function(data){
			addMovies(data,0,1,2);
		})
		.then(response => console.log(response))
		.catch(err => console.error(err));

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=matrix', options)
			.then(response => response.json())
		  .then(function(data){
				addMovies(data,1,2,3);
			})
			.then(response => console.log(response))
			.catch(err => console.error(err));


function addMovies(data,i1,i2,i3){
	const list = data.d;
	const newList = [];
	newList.push(data.d[i1]);
	newList.push(data.d[i2]);
	newList.push(data.d[i3]);
	newList.map((item) => {
		const name = item.l;
		const poster = item.i.imageUrl;
		const movie = `<div class="movies col-lg-4 col-md-4"> <li><img src="${poster}"> <h5>${name}</h5></li> </div>`
		document.querySelector('.row').innerHTML += movie;
	})

}

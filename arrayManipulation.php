<script>


	//ARRAY 1
	const textass = [
		{
			name: 'Mike',
			age: 23,
			gender: 'm',
			us: false,
		},
		{
			name: 'Liz',
			age: 20,
			gender: 'f',
			us: true,
		},
		{
			name: 'Chris',
			age: 102,
			gender: 'm',
			us: false,
		},
		{
			name: 'Chuloo',
			age: 27,
			gender: 'm',
			us: false,
		},
		{
			name: 'Annie',
			age: 30,
			gender: 'f',
			us: true,
		},
	]
	// part 1 - find all users older than 24
	/////////////////////////In the past///////////////////////////////////
	/*let olderThan24 = [];
	for(let i = 0; i < textass.length; i++){
		if(textass[i].age > 24){
			olderThan24.push(textass[i])
		}
	}
	console.log(olderThan24)*/
	/////////////////////////////////////////////////////////
	/*let answer = textass.filter( person => { 
		return person.age > 24;
	})
	console.log(answer)*/



	// part 2 - find the total age of all users
	/////////////////////////////BEFORE////////////////////////////////
	/*let totalAGE = 0;
	textass.forEach(person => {
		totalAGE += person.age;
	})
	console.log(totalAGE);*/
	//////////////////////////////////////////////
	/*let answer = textass.reduce( (accumulator, person) => accumulator + person.age, 0);
	console.log(answer);*/

	// part 3 - list all female coders
	/*let answer = textass.filter( person => person.gender === 'f');
	console.log(answer);
*/


	/// ARRAY 2
	const ny = [
		{
			name: 'Michelle',
			age: 19,
			coder: true,
			gender: 'f',
			us: false,
		},
		{
			name: 'Sam',
			age: 25,
			coder: false,
			gender: 'm',
			us: false,
		},
		{
			name: 'Ivy',
			age: 26,
			coder: true,
			gender: 'f',
			us: false,
		},
		{
			name: 'Nick',
			age: 32,
			coder: true,
			gender: 'm',
			us: true,
		},
		{
			name: 'Jim Beglin',
			age: 65,
			coder: false,
			gender: 'm',
			us: false,
		},
		{
			name: 'Joel',
			age: 25,
			coder: true,
			gender: 'm',
			us: true,
		},
	];

	// Part 1 - list all users in US in accending order
	/*console.log(ny.filter(person => person.us)
		.sort( (item1, item2) => item1.name.localeCompare(item2.name)));*/
	// Part 2 - sort all users by age
	/*console.log(ny.sort((item1, item2) => item1.age - item2.age));*/
	// Part 3 - List all female coders
	/*console.log(ny.filter(person => person.gender === 'f'));*/


	/// ARRAY 3
	const v = [
				{
					name: "Charly",
					age: 32,
					coder: true,
					gender: "m",
				},
				{
					name: "Low",
					age: 21,
					coder: true,
					gender: "m",
				},
				{
					name: "Rosey",
					age: 42,
					coder: false,
					gender: "f",
				},
				{
					name: "Steph",
					age: 18,
					coder: true,
					gender: "f",
				},
				{
					name: "jon",
					age: 47,
					coder: false,
					gender: "m",
				},
	];

	// Part 1 - Find the total age of male coders under 25
	/*console.log( v.filter( person => person.gender === 'm' && person.age < 25).reduce( (acc, person) => acc + person.age, 0));
*/
	// Part 2 - List all male coders over 30
	/*console.log(v.filter(person => person.gender ==='m' && person.age > 30));*/
	// Part 3 - Find the total age of everyone in texass, newyork and vegas combined
	/*console.log([...textass, ...ny, ...v].reduce( (accumulator, person) => accumulator + person.age, 0));*/

	/*let newArr = [];
	let answer = 0;
	for(i = 0; i < newArr.length; i++){
		let texta = newArr[i].reduce( (accumulator, person) => accumulator + person.age, 0);
		answer += texta;
	}
	
	console.log(answer);*/

	console.log(v.map( person => person.name));
	


</script>
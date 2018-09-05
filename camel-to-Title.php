<script>
// convert a given sentence from camelCase to Title case
const camelCase = "the simplestThings in LIFE are alwaysTHe best";
/*const titleCase = text => {
	//convert our strings to array
	let newText = text.split(' ');
	//split on any capitals
	newText = newText.map(word => word.replace(/([A-Z])/, (match, capture) => ` ${capture}`));
	//join and split again so we can get the spaces in the wprds as a new array
	newText = newText.join(' ').split(' ');
	//remove empty array elements
	newText = newText.filter(word => !!word)
	newText = newText.map(word => `${word[0].toUpperCase()}${word.slice(1).toLowerCase()}`);
	newText = newText.join(' ');

	console.log(newText);
}*/
////////////////////////// reduce the line////////////////////////
const splitOnCapital = worddd => worddd.replace(/([A-Z])/, (match, capture) => ` ${capture}`); 
const noBlanks = wordzzz =>  `${wordzzz[0].toUpperCase()}${wordzzz.slice(1).toLowerCase()}`;
const titleCase = text => {
	//convert our strings to array
	let newText = text.split(' ')
				.map(splitOnCapital)
				.join(' ').split(' ')
				.filter(word => !!word)
				.map(noBlanks)
				.join(' ');
	console.log(newText);

/*
	//split on any capitals
	//newText = newText.map(wordss => splitOnCapital(wordss));
	//OR
	newText = newText.map(splitOnCapital);

	//join and split again so we can get the spaces in the wprds as a new array
	newText = newText.join(' ').split(' ');
	//remove empty array elements
	newText = newText.filter(word => !!word)
	//newText = newText.map(word => noBlanks(word));
	//OR
	newText = newText.map(noBlanks);

	newText = newText.join(' ');

	console.log(newText);*/
}

titleCase(camelCase);

</script>
<script>
//Title-to-Camel
//convert the title case back to camel case
const newTitle    = "these words Should Go In Paris";
const newCamel    = text => {
	const words   = text.toLowerCase().split(' ');
	const newArr  = [];

	//loop over the words
	for(let i = 1; i <= words.length; i +=2){
		const wordIndex = i - 1;
		const firstWord = words[wordIndex];
		let secondWord  = words[wordIndex + 1];
		secondWord 		= `${secondWord[0].toUpperCase()}${secondWord.slice(1)}`;
		newArr.push(`${firstWord}${secondWord}`);	
	}
	return newArr.join(' ');
	

}
console.log(newCamel(newTitle));
/*newCamel(newTitle);*/
</script>
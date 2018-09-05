<script>

const word = "amlet";

const pigLatin = text => {
	const vowelRegex = /[aeiou]/i;
	const firstVowelIndex = text.indexOf(text.match(vowelRegex)[0]);
	const startWithVowel = firstVowelIndex === 0;

	return startWithVowel
		?`${text}ay`
		:`${text.slice(firstVowelIndex)}${text.substr(0, firstVowelIndex)}ay`;
}
console.log(pigLatin(word));

</script>
<script>

// Passage Counter
// How many Seconds will it take to read the provided text
// if it goes pass 60 seconds quote in munites!

const passage = `This is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites This is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites. NOTE the average reading time for human is 200 words per munites This is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites This is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites. NOTE the average reading time for human is 200 words per munitesThis is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites This is a text that talks about how fast a human been can read a text. Note that if he can read it in seconds please please and please return the answer in seconds eles return the answer in munites. NOTE the average reading time for human is 200 words per munites`;

const timeToREad= text => {
	const averageReadingTime = 200;
	const textArr 			 = text.split(' ');
	const timeInMinutes		 = textArr.length / averageReadingTime;

	return (timeInMinutes < 1)
		? `${Math.round(timeInMinutes * 60)}s`
		: `${Math.round(timeInMinutes)} minutes`;
}

console.log(timeToREad(passage));

</script>
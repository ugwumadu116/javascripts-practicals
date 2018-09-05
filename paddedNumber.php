<script>

const nums = ['2', '4', '25', '10', '3', '7'];

//if the number is lower than 10, add a 0 in the front of it.
const paddedNum = number => (number < 10) ? `0${number}` : number;
/*let answer = [];
nums.forEach(number => answer.push(paddedNum(number))); 
console.log(answer);
*/
nums.forEach(number => console.log(paddedNum(number))); 
</script>
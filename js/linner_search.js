const array = [1,2,3,4,5,6,7]

function linearSearch(array, item)
{
    for (let i = 0; i < array.length; i++)
    {
        if(array[i]===item) {
            return i;
        }
    }
    return null
}

console.log(linearSearch(array, 7))
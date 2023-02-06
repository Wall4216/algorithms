const arr = [0,3,2,5,6,8,1,9,4,2,1,2,9,6,4,1,7,-1, ]
let count = 0
function bubble_sort(array)
{
    for (let i = 0; i < array.length; i++) {
        for (let j = 0; j < array.length; j++) {
            if (array[j+1] < array[j]){
                let tmp = array[j]
                array[j] = array[j+1]
                array[j+1] = tmp
            }
            count+=1
        }
    }
    return array
}

console.log(arr.length)
console.log(bubble_sort(arr))
console.log(count)
export function checkInput(input , pattern) {
    if (pattern.test(input)) {
        return true;
    }else {
        return false;
    }

}
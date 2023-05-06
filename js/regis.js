function app() {
    return {
        showPasswordField: true,
        passwordScore: 0,
        password: '',
        chars: {
            lower: 'abcdefghijklmnopqrstuvwxyz',
            upper: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            numeric: '0123456789',
            symbols: '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~'
        },
        charsLength: 12,
        checkStrength: function () {
            if (!this.password) return this.passwordScore = 0;
            this.passwordScore = zxcvbn(this.password).score + 1;
        },
        generatePassword: function () {
            console.log(document.getElementById('charsSymbols').checked);
            this.password = this.shuffleArray(
                ((document.getElementById('charsLower').checked ? this.chars.lower : '') + (document.getElementById('charsUpper').checked ? this.chars.upper : '') + (document.getElementById('charsNumeric').checked ? this.chars.numeric : '') + (document.getElementById('charsSymbols').checked ? this.chars.symbols : '')).split('')
            ).join('').substring(0, this.charsLength);
            this.checkStrength();
        },
        shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }
    }
}
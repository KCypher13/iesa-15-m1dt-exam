

function Enigma(){

	this.correspondingArray = [];
	this.correspondingArray['a'] = 'j';
	this.correspondingArray['b'] = 'd';
	this.correspondingArray['c'] = 'w';
	this.correspondingArray['d'] = 'o';
	this.correspondingArray['e'] = 'v';
	this.correspondingArray['f'] = 'a';
	this.correspondingArray['g'] = 'r';
	this.correspondingArray['h'] = 'i';
	this.correspondingArray['i'] = 'g';
	this.correspondingArray['j'] = ' ';
	this.correspondingArray['k'] = 'x';
	this.correspondingArray['l'] = 'u';
	this.correspondingArray['m'] = 'n';
	this.correspondingArray['n'] = 's';
	this.correspondingArray['o'] = 'y';
	this.correspondingArray['p'] = 'q';
	this.correspondingArray['q'] = 'c';
	this.correspondingArray['r'] = 'p';
	this.correspondingArray['s'] = '\'';
	this.correspondingArray['t'] = 'f';
	this.correspondingArray['u'] = 'm';
	this.correspondingArray['v'] = 'z';
	this.correspondingArray['w'] = 't';
	this.correspondingArray['x'] = 'k';
	this.correspondingArray['y'] = 'h';
	this.correspondingArray['z'] = 'b';
	this.correspondingArray[' '] = 'e';
	this.correspondingArray['\''] = 'l';
	this.correspondingArray['.'] = '.';
	this.correspondingArray[','] = ',';
	this.correspondingArray[':'] = ':';
	this.correspondingArray[';'] = ';';






	this.encrypt = function(msgClear)
	{
		return "jdwovarig xunsyqcp'fmztkhbel.,:;";
	}

	this.decrypt = function(msgCrypted)
	{
		return "abcdefghijklmnopqrstuvwxyz '.,:;";
	}

	this.encryptLetter = function(letter)
	{
		return this.correspondingArray[letter];
	}


}


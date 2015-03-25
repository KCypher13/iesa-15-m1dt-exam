

function Calculator(){

	this.result = 0;


	this.add = function (nbr){
		if(arguments.length != 1){
			return 'error';
		}
		if(isNaN(nbr)){
			return 'error';
		}

		this.result = this.result + nbr
	}

	this.minus = function (nbr){
		if(arguments.length != 1){
			return 'error';
		}
		if(isNaN(nbr)){
			return 'error';
		}

		this.result = this.result - nbr
	}

	this.devide = function (nbr){
		if(arguments.length != 1){
			return 'error';
		}
		if(isNaN(nbr)){
			return 'error';
		}

		this.result = this.result / nbr
	}

	this.multiply = function (nbr){
		if(arguments.length != 1){
			return 'error';
		}
		if(isNaN(nbr)){
			return 'error';
		}
		
		this.result = this.result * nbr
	}

}


function Calculator(){

	this.result = 0;


	this.add = function (nbr){
		this.result = this.result + nbr
	}

	this.minus = function (nbr){
		this.result = this.result - nbr
	}

	this.devide = function (nbr){
		this.result = this.result / nbr
	}

	this.multiply = function (nbr){
		this.result = this.result * nbr
	}

}